<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Sabbi</title>
</head>
<body class="bg-gray-100">
    <x-navegation/>



    <!-- start menu desplegable -->
    <section class="flex h-full">

        <x-menu/>
        <!-- end menu desplegable -->
        
        <x-content />
    </section>



    <script src=" {{asset('js/lateral.js') }}"></script>
</body>
</html>