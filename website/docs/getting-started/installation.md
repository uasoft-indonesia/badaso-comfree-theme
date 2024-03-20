---
sidebar_position: 1
---

# Installation

1. You can install the comfree theme with the following command.

    ```
    composer require badaso/comfree-theme
    ```

1. (<b>Optional</b>) Run the following command to setup the badaso-core. If you never run it before.

    ```
    php artisan badaso:setup
    ```

1. (<b>Optional</b>) Run the following command to setup the badaso-commerce-module. If you never run it before.

    ```
    php artisan badaso-commerce:setup
    ```

1. (<b>Optional</b>) Run the following command to setup the badaso-content. If you never run it before.

    ```
    php artisan badaso-content:setup
    ```

1. Run the following command to setup the theme

    ```
    php artisan badaso-comfree-theme:setup
    ```

1. Run the following command to migrate database.

    ```
    php artisan migrate
    ```

1. (Optional) Run the following command to generate seeder of badaso core, commerce-module and content module. If you never run it before.

    ```
    php artisan db:seed --class="Database\Seeders\Badaso\BadasoSeeder"

    php artisan db:seed --class="Database\Seeders\Badaso\Content\BadasoContentModuleSeeder"

    php artisan db:seed --class="Database\Seeders\Badaso\Commerce\BadasoCommerceModuleSeeder"
    ```

1. Run the command to generate seeder of Comfree theme.

    ```
    php artisan db:seed --class='Database\Seeders\Badaso\ComfreeTheme\BadasoComfreeThemeSeeder'
    ```

1. Add the plugins to your MIX_BADASO_PLUGINS to .env.

    ```
    MIX_BADASO_PLUGINS=content-module,commerce-module,comfree-theme
    ```

1. Add the plugins menu to your MIX_BADASO_MENU to .env. If you have another menu, include them using delimiter comma (,).
    ```
    MIX_BADASO_MENU=${MIX_DEFAULT_MENU},content-module,commerce-module,comfree-theme
    ```

1. Fill the other variables in .env file.
    ```
    `COMFREE_THEME_PREFIX=comfree`  Set prefix for the theme.
    ```

1. Install JS depedency
    ```
   npm install
    ```

1. Build JS dependency.
    ```
    npm run watch
    ```

1. Finished. You can access the comfree theme
    ```
    http://localhost:8000/comfree
    ```

