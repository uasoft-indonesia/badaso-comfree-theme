<?php

namespace Uasoft\Badaso\Theme\ComfreeTheme\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class ComfreeThemeSetup extends Command
{
    protected $file;
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'badaso-comfree-theme:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup Badaso Comfree Theme';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->file = app('files');
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->updatePackageJson();
        $this->publishConfig();
        $this->addingBadasoEnv();
        $this->updateWebpackMix();
    }

    protected function publishConfig()
    {
        Artisan::call('vendor:publish', ['--tag' => 'BadasoComfreeTheme']);

        $this->info('Badaso comfree theme provider published');
    }

    protected function checkExist($file, $search)
    {
        return $this->file->exists($file) && !Str::contains($this->file->get($file), $search);
    }

    protected function updateWebpackMix()
    {
        $mix_file = base_path('webpack.mix.js');
        $search = 'Badaso Comfree Theme';

        if ($this->checkExist($mix_file, $search)) {
            $data =
                <<<'EOT'

        // Badaso Comfree Theme
             mix.js("vendor/badaso/comfree-theme/src/resources/js/app.js", "public/js/comfree-theme.js")
        .css("vendor/badaso/comfree-theme/src/resources/app/assets/css/style.css","public/css/comfree-theme.css",{},[
        require("tailwindcss")('./tailwind-comfree.config.js'),
        require("autoprefixer"),
        ]
        )
        EOT;

            $this->file->append($mix_file, $data);
        }

        $this->info('webpack.mix.js updated');
    }

    protected function envListUpload()
    {
        return [
            'COMFREE_THEME_PREFIX' => 'comfree',
        ];
    }

    protected function addingBadasoEnv()
    {
        try {
            $env_path = base_path('.env');

            $env_file = file_get_contents($env_path);
            $arr_env_file = explode("\n", $env_file);

            $env_will_adding = $this->envListUpload();

            $new_env_adding = [];
            foreach ($env_will_adding as $key_add_env => $val_add_env) {
                $status_adding = true;
                foreach ($arr_env_file as $key_env_file => $val_env_file) {
                    $val_env_file = trim($val_env_file);
                    if (substr($val_env_file, 0, 1) != '#' && $val_env_file != '' && strstr($val_env_file, $key_add_env)) {
                        $status_adding = false;
                        break;
                    }
                }
                if ($status_adding) {
                    $new_env_adding[] = "{$key_add_env}={$val_add_env}";
                }
            }

            foreach ($new_env_adding as $index_env_add => $val_env_add) {
                $arr_env_file[] = $val_env_add;
            }

            $env_file = join("\n", $arr_env_file);
            file_put_contents($env_path, $env_file);

            $this->info('Adding badaso env');
        } catch (\Exception $e) {
            $this->error('Failed adding badaso env '.$e->getMessage());
        }
    }

    protected function updatePackageJson()
    {
        $package_json = file_get_contents(base_path('package.json'));
        $decoded_json = json_decode($package_json, true);

        $decoded_json['dependencies']['daisyui'] = '^4.6.0';
        $decoded_json['dependencies']['alpinejs'] = '^3.13.5';
        $decoded_json['dependencies']['tailwindcss'] = '^3.4.1';
        $decoded_json['dependencies']['alpinejs-money'] = '^1.1.3';
        $encoded_json = json_encode($decoded_json, JSON_PRETTY_PRINT);
        file_put_contents(base_path('package.json'), $encoded_json);

        $this->info('package.json updated');
    }
}
