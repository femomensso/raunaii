@props(['selected'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="font-serif text-black">

    <div class="grid grid-cols-1 md:grid-cols-4">

        <x-admin.left_menu :selected="$selected"/>
        <!-- left side -->

        <div class="col-span-3 md:h-screen">

            <x-admin-navbar/>

            <div class="flex justify-between sm:justify-start">
                <div class="px-4 py-4">
                    <h3 class="text-xl font-semibold">{{$selected}}</h3>
                </div>
                @if ($selected !== "Usuarios")
                <div class="px-4 mt-1 py-4 ">
                    <a href="/admin/{{strtolower($selected)}}/cadastrar">
                        <h3 class="text-md text-blue-300">
                            Cadastrar {{$selected}}
                        </h3>
                    </a>
                </div>
                @endif
            </div>
            

            {{$slot}}

        </div>
    </div>

    <x-success/>
</body>