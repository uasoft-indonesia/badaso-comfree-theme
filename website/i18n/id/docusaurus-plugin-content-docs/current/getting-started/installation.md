---
sidebar_position: 1
---

# Installation

1. Anda bisa menginstal tema comfree dengan mengikuti perintah berikut.

    ```
    composer require badaso/comfree-theme
    ```

1. (Pilihan) Jalankan perintah berikut untuk mengatur badaso-core. Jika Anda tidak pernah menjalankannya sebelumnya.

    ```
    php artisan badaso:setup
    ```
1. (Pilihan) Jalankan perintah berikut untuk mengatur badaso-content. Jika Anda tidak pernah menjalankannya sebelumnya.

    ```
    php artisan badaso-content:setup
    ```

1. (Pilihan) Jalankan perintah berikut untuk mengatur badaso-commerce-module. Jika Anda tidak pernah menjalankannya sebelumnya.

    ```
    php artisan badaso-commerce:setup
    ```

1. Jalankan perintah berikut untuk mengatur tema

    ```
    php artisan badaso-comfree-theme:setup
    ```

1. Jalankan perintah berikut untuk migrate database.

    ```
    php artisan migrate
    ```

1. (Pilihan) Jalankan perintah berikut untuk generate seeder dari badaso core, dan content module. Jika Anda tidak pernah menjalankannya sebelumnya.

    ```
    php artisan db:seed --class="Database\Seeders\Badaso\BadasoSeeder"

    php artisan db:seed --class="Database\Seeders\Badaso\Content\BadasoContentModuleSeeder"

    php artisan db:seed --class="Database\Seeders\Badaso\Commerce\BadasoCommerceModuleSeeder"
    ```

1. Jalankan perintah berikut untuk generate seeder dari Comfree theme.

    ```
    php artisan db:seed --class='Database\Seeders\Badaso\PostfreeTheme\BadasoPostfreeThemeSeeder'
    ```

1. Tambahkan plugins pada MIX_BADASO_PLUGINS untuk .env.

    ```
    MIX_BADASO_PLUGINS=content-module,commerce-module,comfree-theme
    ```

1. Tambahkan menu plugins  ke MIX_BADASO_MENU anda pada .env.Jika anda memiliki menu lain, tambahkan mereka setelah koma (,).
    ```
    MIX_BADASO_MENU=${MIX_DEFAULT_MENU},content-module,commerce-module,comfree-theme
    ```

1. Mengisi variabel lain pada file .env.
    ```
    `COMFREE_THEME_PREFIX=comfree` Tetapkan awalan untuk tema.
    ```

1. Install JS depedency
    ```
    npm install
    ```

1. Bangun JS dependency.
    ```
    npm run watch
    ```

1. Selesai. Anda bisa mengakses tema comfree
    ```
    http://localhost:8000/comfree
    ```

