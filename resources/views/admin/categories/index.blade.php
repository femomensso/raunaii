<x-admin.layout selected="Categorias">

    <x-admin.table>
        <thead class="bg-gray-50">
            <tr>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Categoria
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Itens
                </th>
                <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Editar</span>
                </th>
                <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Apagar</span>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($categories as $category)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    {{$category->name}}
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{count($category->products)}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="/admin/categorias/editar/{{$category->id}}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="/admin/categorias/apagar/{{$category->id}}" class="text-indigo-600 hover:text-indigo-900">Apagar</a>
                    </td>
                </tr>  
            @endforeach                                                      
        </tbody>
    </x-admin.table>

    <div class="px-10 py-4 ">
        {{$categories->links()}}
    </div>
    
</x-admin.layout>
