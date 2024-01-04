<?php

namespace App\Console\Commands\DirGen;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateEnum extends Command
{
    protected string $base_namespace = 'App\\Enums\\';
    protected $signature = 'make:enum {name} {--data_type=}';
    protected $description = 'Create enum class';

    public function handle(): void
    {
        $enum_name        = $this -> argument('name');
        $data_type        = $this -> option('data_type');
        $actual_namespace = $this -> base_namespace . str_replace('/', '\\', $enum_name);
        $actual_namespace = str_replace('\\' . class_basename($enum_name), '', $actual_namespace);

        $this -> generateClass($actual_namespace, $enum_name, $data_type);

        $this -> info("Enum created successfully");
    }

    //******************************************************************************************************************
    // Protected Functions
    //******************************************************************************************************************

    protected function generateClass(string $actual_namespace, string $enum_name, string $data_type): void
    {
        $stub = file_get_contents(app_path('Console/Commands/DirGen/stubs/enum.stub'));

        $stub = str_replace('{{ namespace }}', $actual_namespace, $stub);
        $stub = str_replace('{{ class }}', class_basename($enum_name), $stub);
        $stub = str_replace('{{ data_type }}', $data_type, $stub);

        $enum_path = app_path('Enums/' . $enum_name . '.php');

        if (!File::isDirectory(dirname($enum_path)))
        {
            File::makeDirectory(dirname($enum_path), 0777, true);
        }

        if (File::exists($enum_path))
        {
            $this -> error('Enum already exists!');
        }
        else
        {
            file_put_contents($enum_path, $stub);
        }
    }
}
