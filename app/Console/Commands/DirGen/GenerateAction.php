<?php

namespace App\Console\Commands\DirGen;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateAction extends Command
{
    protected string $base_namespace = 'App\\Actions\\';
    protected $signature = 'make:action {name}';
    protected $description = 'Create action class';

    public function handle(): void
    {
        $action_name        = $this -> argument('name');
        $actual_namespace   = $this -> base_namespace . str_replace('/', '\\', $action_name);
        $actual_namespace   = str_replace('\\' . class_basename($action_name), '', $actual_namespace);

        $this -> generateClass($actual_namespace, $action_name);

        $this -> info("Action created successfully");
    }

    //******************************************************************************************************************
    // Protected Functions
    //******************************************************************************************************************

    protected function generateClass(string $actual_namespace, string $action_name): void
    {
        $stub = file_get_contents(app_path('Console/Commands/DirGen/stubs/action.stub'));

        $stub = str_replace('{{ namespace }}', $actual_namespace, $stub);
        $stub = str_replace('{{ class }}', class_basename($action_name), $stub);

        $action_path = app_path('Actions/' . $action_name . '.php');

        if (!File::isDirectory(dirname($action_path)))
        {
            File::makeDirectory(dirname($action_path), 0777, true);
        }

        if (File::exists($action_path))
        {
            $this -> error('Action already exists!');
        }
        else
        {
            file_put_contents($action_path, $stub);
        }
    }
}
