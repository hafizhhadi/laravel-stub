<?php

namespace App\Console\Commands\DirGen;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateRepository extends Command
{
    protected string $base_namespace = 'App\\Repositories\\';
    protected $signature = 'make:repo {name} {--model=}';
    protected $description = 'Create repository class';

    public function handle(): void
    {
        $repository_name     = $this -> argument('name');
        $model_name          = $this -> option('model');
        $model_variable_name = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', class_basename($model_name)));
        $model_namespace     = str_replace('/', '\\', $model_name);
        $raw_namespace       = $this -> base_namespace . str_replace('/', '\\', $repository_name);
        $actual_namespace    = str_replace('\\' . class_basename($repository_name), '', $raw_namespace);

        $this -> generateInterface($actual_namespace, $model_namespace, $repository_name, $model_name, $model_variable_name);
        $this -> generateRepository($actual_namespace, $model_namespace, $repository_name, $model_name, $model_variable_name);
        $this -> generateRepositoryServiceProvider();
        $this -> updateRepositoryServiceProvider($raw_namespace);
        $this -> generateModelAndMigration();

        $this -> info("Completed");
    }

    //******************************************************************************************************************
    // Protected Functions
    //******************************************************************************************************************

    protected function generateInterface(string $actual_namespace, string $model_namespace, string $repository_name, string $model_name, string $model_variable_name): void
    {
        $interface_stub  = file_get_contents(app_path('Console/Commands/DirGen/stubs/repo-interface.stub'));

        $interface_stub = str_replace('{{ namespace }}', $actual_namespace, $interface_stub);
        $interface_stub = str_replace('{{ model_namespace }}', $model_namespace, $interface_stub);
        $interface_stub = str_replace('{{ interface }}', class_basename($repository_name) . 'Repo', $interface_stub);
        $interface_stub = str_replace('{{ model }}', class_basename($model_name), $interface_stub);
        $interface_stub = str_replace('{{ model_variable }}', $model_variable_name, $interface_stub);

        $interface_path = app_path('Repositories/' . $repository_name . 'RepoInterface.php');

        if (!File::isDirectory(dirname($interface_path)))
        {
            File::makeDirectory(dirname($interface_path), 0777, true);
        }

        if (File::exists($interface_path))
        {
            $this -> error('Interface already exists!');
        }
        else
        {
            file_put_contents($interface_path, $interface_stub);

            $this -> info('New Interface has been created.');
            $this -> info('');
        }
    }

    protected function generateRepository(string $actual_namespace, string $model_namespace, string $repository_name, string $model_name, string $model_variable_name): void
    {
        $repository_stub = file_get_contents(app_path('Console/Commands/DirGen/stubs/repository.stub'));

        $repository_stub = str_replace('{{ namespace }}', $actual_namespace, $repository_stub);
        $repository_stub = str_replace('{{ model_namespace }}', $model_namespace, $repository_stub);
        $repository_stub = str_replace('{{ repository }}', class_basename($repository_name), $repository_stub);
        $repository_stub = str_replace('{{ model }}', class_basename($model_name), $repository_stub);
        $repository_stub = str_replace('{{ model_variable }}', $model_variable_name, $repository_stub);
        $repository_stub = str_replace('{{ interface }}', class_basename($repository_name) . 'Repo', $repository_stub);

        $repository_path = app_path('Repositories/' . $repository_name . 'Repository.php');

        if (!File::isDirectory(dirname($repository_path)))
        {
            File::makeDirectory(dirname($repository_path), 0777, true);
        }

        if (File::exists($repository_path))
        {
            $this -> error('Repository already exists!');
        }
        else
        {
            file_put_contents($repository_path, $repository_stub);

            $this -> info('New Repository has been created.');
            $this -> info('');
        }
    }

    protected function generateRepositoryServiceProvider(): void
    {
        $repository_service_provider_stub = file_get_contents(app_path('Console/Commands/DirGen/stubs/repository-service-provider.stub'));

        $repository_service_provider_path = app_path('Providers/RepositoryServiceProvider.php');

        if (!File::isDirectory(dirname($repository_service_provider_path)))
        {
            File::makeDirectory(dirname($repository_service_provider_path), 0777, true);
        }

        if (!File::exists($repository_service_provider_path))
        {
            file_put_contents($repository_service_provider_path, $repository_service_provider_stub);

            $this -> info('RepositoryServiceProvider has been created.');
            $this -> info('');
        }
    }

    protected function updateRepositoryServiceProvider(string $raw_namespace): void
    {
        $provider_path    = app_path('Providers/RepositoryServiceProvider.php');
        $provider_content = File::get($provider_path);

        $interface  = "\\" . $raw_namespace . 'RepoInterface::class';
        $repository = "\\" . $raw_namespace . 'Repository::class';

        $new_binding = "\$this -> app -> bind($interface, $repository);\n";
        $new_binding = $new_binding . "\t\t// New Repo Binding";

        $updated_contents = str_replace('// New Repo Binding', $new_binding, $provider_content);

        File::put($provider_path, $updated_contents);

        $this -> info('RepositoryServiceProvider updated successfully.');
        $this -> info('');
    }

    protected function generateModelAndMigration(): void
    {
        $model_enforcer = $this -> choice(
            'Do you want to create a model and migration?',
            ['Yes', 'No'],
            0,
            $maxAttempts = 2,
            $allowMultipleSelections = false
        );

        if ($model_enforcer == 'Yes')
        {
            $model_name = $this -> option('model');

            $this -> call('make:model', [
                'name' => $model_name,
                '-m'   => true,
            ]);

            $this -> info('Model & Migration has been created.');
            $this -> info('');
        }
    }
}
