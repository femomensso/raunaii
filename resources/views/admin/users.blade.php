<x-admin.layout selected="Usuarios">

    <x-admin.table>
        <thead class="bg-gray-50">
            <tr>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nome
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Funcao
                </th>
                <th scope="col" class="relative px-6 py-3">
                    <span class="sr-only">Apagar</span>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($users as $user)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    {{$user->first_name . ' ' . $user->last_name}}
                                </div>
                                <div class="text-sm text-gray-500">
                                    {{$user->email}}
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{'Cliente'}}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="/admin/usuarios/apagar/{{$user->id}}" class="text-indigo-600 hover:text-indigo-900">Apagar</a>
                    </td>
                </tr>  
            @endforeach                                                      
        </tbody>
    </x-admin.table>

    <div class="px-10 py-4 ">
        {{$users->links()}}
    </div>
    
</x-admin.layout>
