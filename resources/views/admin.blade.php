<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        <title>Laravel</title>

        <!-- Fonts -->
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../admin_src/assets/css/responsive.css">
        <link rel="stylesheet" href="../admin_src/assets/css/header.css">
        <link rel="stylesheet" href="../admin_src/assets/css/style.css">
        <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
    </head>
    <body>
        <div id="app">
            <adminapp></adminapp>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
    
</html>
