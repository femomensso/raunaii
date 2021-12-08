@props(['selected'])

<div class="col-span-1 md:h-screen bg-blue-300">
    <div class="py-4">
        <a href="/" class="text-black hover:text-gray-400 text-xl flex justify-center">RAUNAII</a>
    </div>
    <div class="flex justify-center">
        <ul class="w-full">
            <a href="/admin/usuarios"><li class="my-2 mx-4 p-2 rounded-md hover:bg-blue-500 {{($selected == 'Usuarios') ? 'bg-blue-500' : '' }}">Usuarios</li></a>
            <a href="/admin/categorias"><li class="my-2 mx-4 p-2 rounded-md hover:bg-blue-500 {{($selected == 'Categorias') ? 'bg-blue-500' : '' }}">Categorias</li></a>
            <a href="/admin/produtos"><li class="my-2 mx-4 p-2 rounded-md hover:bg-blue-500 {{($selected == 'Produtos') ? 'bg-blue-500' : '' }}">Produtos</li></a>
        </ul>
    </div>
</div>