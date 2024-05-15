<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Ventas</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet"
        />
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        @include('layouts.header2')
        <div id="ContentView" class="p-10">
            <div id="ParentView">
                <div>
                    <span>Bienvenido, consulte algún producto: </span
                    >
                    <a onclick="RouteManager.NavigateTo(Euros)">Pastillas abortivas precio<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Pastillas abortivas precio Perú<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Precio de la pastilla abortiva<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Pastilla para abortar Perú precio<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Pastilla abortiva Cytotec precio<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Pastilla abortiva precio Perú<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">¿Cuál es el precio de la pastilla abortiva? </a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Pastilla para abortar Cytotec precio<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Pastilla para aborto humano precio<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Pastillas abortivas Mercado Libre<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Pastillas abortivas nombres y precios Perú<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Pastillas abortivas para perros MercadoLibre<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Pastillas para abortar en farmacias precio<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Pastillas para el aborto precio<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Precio de pastilla abortiva Perú<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Precio de pastillas abortivas en Perú<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Tomé pastillas abortivas y no me baja<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">Tomé pastillas abortivas y sangré poco<span>. </span></a>
                    <a onclick="RouteManager.NavigateTo(Euros)">¿Es peligroso las pastillas abortivas?<span>. </span></a>
                </div>
            </div>
        </div>
        @include('layouts.footerVentas')
    </body>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script type="module">
        ManagerHistory.pushState(Inicio);
    </script>
</html>
