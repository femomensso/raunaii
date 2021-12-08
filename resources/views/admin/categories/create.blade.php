<x-admin.layout selected="Categorias">

    <section class="container mx-auto px-2 mb-4">  
        <div class="flex items-center justify-center py-6 px-4">
            <div class="bg-gray-100 max-w-xl space-y-8 w-full px-8 pb-8">
                <div>
                    <h2 class="mt-6 text-center text-2xl font-semibold text-gray-400">
                        Cadastrar
                    </h2>                    
                </div>
                <form class="mt-8 space-y-6" action="/admin/categorias/cadastrar" method="POST">
                @csrf                    
                    <div class="">                        
                        <div class="pt-4">
                            <label for="name" class="sr-only">Nome</label>
                            <input id="name" name="name" type="text" autocomplete="name" required value="{{old('name')}}"
                                class="w-full rounded-md px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-300 focus:border-blue-300 focus:z-10 sm:text-sm"
                                placeholder="Nome">
                        </div>
                        <div>
                            @error('name')
                            <p class="text-sm text-red-300">{{$message}}</p>
                            @enderror 
                        </div>
                        {{-- error --}}
                        <div class="pt-4">
                            <label for="slug" class="sr-only">Slug</label>
                            <input id="slug" name="slug" type="text" autocomplete="current-slug"
                                required value="{{old('slug')}}"
                                class="w-full rounded-md px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-300 focus:border-blue-300 focus:z-10 sm:text-sm"
                                placeholder="Slug">
                        </div>
                        <div>
                            @error('slug')
                            <p class="text-sm text-red-300">{{$message}}</p>
                            @enderror 
                        </div>
                        {{-- error --}}
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md bg-blue-300 text-white font-semibold hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Cadastrar
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </section>
    
</x-admin.layout>