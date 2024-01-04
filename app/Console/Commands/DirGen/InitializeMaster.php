<?php

namespace App\Console\Commands\DirGen;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Helper\ProgressBar;

class InitializeMaster extends Command
{
    protected $signature = 'master:initialize';
    protected $description = 'Command to initialize master files';

    public function handle(): void
    {
        $progress_bar = $this -> output -> createProgressBar(3);

        $this -> generateResponseTrait($progress_bar);
        $this -> generateValidationResponseTrait($progress_bar);
        $this -> generateFFMPEGMaster($progress_bar);

        $progress_bar -> finish();

        $this -> info('Initialization Successful');
    }

    //******************************************************************************************************************
    // Protected Functions
    //******************************************************************************************************************

    protected function generic(string $file_name, $stub, $stub_path): void
    {
        if (!File::isDirectory(dirname($stub_path)))
        {
            File::makeDirectory(dirname($stub_path), 0777, true);
        }

        if (File::exists($stub_path))
        {
            $this -> error("$file_name already exists!");
        }
        else
        {
            file_put_contents($stub_path, $stub);
        }
    }

    protected function generateResponseTrait(ProgressBar $progress_bar): void
    {
        $choices = $this -> choice(
            "\nDo you want to generate ResponseTrait?\n",
            ["Yes", "No"],
            "No",
            attempts: 3,
        );

        if ($choices === "Yes")
        {
            $response_stub = file_get_contents(app_path('Console/Commands/DirGen/StubMasters/response.stub'));

            $response_stub_path = app_path('Traits/Responsables/ResponseTrait.php');

            $this -> generic('Response Trait', $response_stub, $response_stub_path);
        }

        $progress_bar -> advance();
    }

    protected function generateValidationResponseTrait(ProgressBar $progress_bar): void
    {
        $choices = $this -> choice(
            "\nDo you want to generate ValidationResponseTrait?\n",
            ["Yes", "No"],
            "No",
            attempts: 3
        );

        if ($choices === 'Yes')
        {
            $validation_response_stub = file_get_contents(app_path('Console/Commands/DirGen/StubMasters/validation-response.stub'));

            $validation_response_stub_path = app_path('Traits/Responsables/ValidationResponseTrait.php');

            $this -> generic('Validation Response Trait', $validation_response_stub, $validation_response_stub_path);
        }

        $progress_bar -> advance();
    }

    protected function generateFFMPEGMaster(ProgressBar $progress_bar): void
    {
        $choices = $this -> choice(
            "\nDo you want to generate FFMPEG Master?\n",
            ["Yes", "No"],
            "No",
            attempts: 3
        );

        if ($choices === 'Yes')
        {
            $ffmpeg_master_stub = file_get_contents(app_path('Console/Commands/DirGen/StubMasters/ffmpeg/ffmpeg-master.stub'));

            $ffmpeg_master_stub_path = app_path('Services/Fileable/Ffmpeg/FFMPEGMaster.php');

            $this -> generic('FFMPEG Master', $ffmpeg_master_stub, $ffmpeg_master_stub_path);

            $ffmpeg_x265_codec_stub = file_get_contents(app_path('Console/Commands/DirGen/StubMasters/ffmpeg/ffmpeg-x265-codec.stub'));

            $ffmpeg_x265_codec_stub_path = app_path('Services/Fileable/Ffmpeg/X265Codec.php');

            $this -> generic('FFMPEG X265 Codec', $ffmpeg_x265_codec_stub, $ffmpeg_x265_codec_stub_path);
        }

        $progress_bar -> advance();
    }
}
