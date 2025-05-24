<?php

return [

    /*
    |--------------------------------------------------------------------------
    | URL de Assets
    |--------------------------------------------------------------------------
    |
    | Esta URL se usará cuando se generen enlaces a los assets usando el helper
    | @vite(). Por defecto, se tomará el valor de ASSET_URL si está definido.
    |
    */

    'asset_url' => env('ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Ruta del Manifest de Vite
    |--------------------------------------------------------------------------
    |
    | Laravel utilizará este archivo para mapear nombres de archivos originales
    | a sus versiones compiladas. Por defecto, se espera en public/build/.vite.
    |
    */

    'manifest_path' => public_path('build/.vite/manifest.json'),

    /*
    |--------------------------------------------------------------------------
    | Entrypoints por defecto
    |--------------------------------------------------------------------------
    |
    | Aquí defines los archivos principales de tu frontend que serán incluidos
    | por el helper @vite(). Puedes incluir más si tu aplicación lo requiere.
    |
    */

    'entrypoints' => [
        'resources/js/app.ts',
    ],
];
