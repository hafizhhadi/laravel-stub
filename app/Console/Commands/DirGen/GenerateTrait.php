<?php

namespace App\Console\Commands\DirGen;

use Illuminate\Console\Command;

class GenerateTrait extends Command
{
    protected string $base_namespace = 'App\\Traits\\';
    protected $signature = 'make:trait {name}';
    protected $description = 'Create a trait file';

    public function handle(): void
    {
        $trait_name       = $this -> argument('name');
        $actual_namespace = $this -> base_namespace . str_replace('/', '\\', $trait_name);
        $actual_namespace = str_replace('\\' . class_basename($trait_name), '', $actual_namespace);

        $this -> generateTrait($actual_namespace, $trait_name);

        $this -> info("Trait created successfully");
    }

    //******************************************************************************************************************
    // Protected Functions
    //******************************************************************************************************************

    protected function generateTrait(string $actual_namespace, string $trait_name): void
    {
        $stub = file_get_contents(app_path('Console/Commands/DirGen/stubs/trait.stub'));

        $stub = str_replace('{{ namespace }}', $actual_namespace, $stub);
        $stub = str_replace('{{ trait }}', class_basename($trait_name), $stub);

        $trait_path = app_path('Traits/' . $trait_name . '.php');

        if (!is_dir(dirname($trait_path)))
        {
            mkdir(dirname($trait_path), 0777, true);
        }

        if (file_exists($trait_path))
        {
            $this -> error('Trait already exists!');
        }
        else
        {
            file_put_contents($trait_path, $stub);
        }
    }
}
