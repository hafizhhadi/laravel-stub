<?php

namespace App\Console\Commands\DirGen;

use Illuminate\Console\Command;

class GenerateService extends Command
{
    protected string $base_namespace = 'App\\Services\\';
    protected $signature = 'make:service {name}';
    protected $description = 'Create service class';

    public function handle(): void
    {
        $service_name     = $this -> argument('name');
        $actual_namespace = $this -> base_namespace . str_replace('/', '\\', $service_name);
        $actual_namespace = str_replace('\\' . class_basename($service_name), '', $actual_namespace);

        $this -> generateService($actual_namespace, $service_name);

        $this -> info("Service created successfully");
    }

    //******************************************************************************************************************
    // Protected Functions
    //******************************************************************************************************************

    protected function generateService(string $actual_namespace, string $service_name): void
    {
        $stub = file_get_contents(app_path('Console/Commands/DirGen/stubs/service.stub'));

        $stub = str_replace('{{ namespace }}', $actual_namespace, $stub);
        $stub = str_replace('{{ class }}', class_basename($service_name), $stub);

        $service_path = app_path('Services/' . $service_name . '.php');

        if (!is_dir(dirname($service_path)))
        {
            mkdir(dirname($service_path), 0777, true);
        }

        if (file_exists($service_path))
        {
            $this -> error('Service already exists!');
        }
        else
        {
            file_put_contents($service_path, $stub);
        }
    }
}
