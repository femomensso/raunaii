<x-admin.layout selected="Produtos">

    <section class="container mx-auto px-2 mb-4">  
        <div class="flex items-center justify-center py-6 px-4">
            <div class="bg-gray-100 max-w-xl space-y-8 w-full px-8 pb-8">
                <div>
                    <h2 class="mt-6 text-center text-2xl font-semibold text-gray-400">
                        Editar
                    </h2>                    
                </div>
                <form class="mt-8 space-y-4" action="/admin/produtos/editar/{{$product->id}}" method="POST" enctype="multipart/form-data">
                @csrf                    
                    <div class="pt-4">
                        <div>
                            <label for="category_id" class="sr-only">Categoria</label>
                            <select name="category_id" id="category_id" required
                                class="w-full rounded-md px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-300 focus:border-blue-300 focus:z-10 sm:text-sm">
                                <option disabled selected>Escolha uma categoria</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" 
                                        {{$category->id == $product->category_id ? 'selected': ''}}>
                                        {{$category->name}}
                                    </option>
                                @endforeach
                            </select>  
                        </div>
                        <div>
                            @error('category_id')
                            <p class="text-sm text-red-300">{{$message}}</p>
                            @enderror 
                        </div>
                                              
                        <div class="pt-4">
                            <label for="name" class="sr-only">Nome</label>
                            <input id="name" name="name" type="text" autocomplete="name" required value="{{old('name', $product->name)}}"
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
                                required value="{{old('slug', $product->slug)}}"
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
                        <div class="pt-4">
                            <label for="description" class="sr-only">Descricao</label>
                            <textarea id="description" name="description" type="text" autocomplete="current-description"
                                required  placeholder="Descricao" cols="1" rows="4"
                                class="w-full rounded-md px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-300 focus:border-blue-300 focus:z-10 sm:text-sm"
                                placeholder="Descricao">{{old('description', $product->description)}}</textarea>
                        </div>
                        <div>
                            @error('description')
                                <p class="text-sm text-red-300">{{$message}}</p>
                            @enderror 
                        </div>
                        {{-- error --}}
                        <div class="pt-4">
                            <label for="price" class="sr-only">Preco</label>
                            <input id="price" name="price" type="number" step="0.01" autocomplete="current-price"
                                required value="{{old('price', $product->price)}}"
                                class="w-full rounded-md px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-300 focus:border-blue-300 focus:z-10 sm:text-sm"
                                placeholder="Preco">
                        </div>
                        <div>
                            @error('price')
                            <p class="text-sm text-red-300">{{$message}}</p>
                            @enderror 
                        </div>
                        {{-- error --}}

                        <div class="pt-4" x-data="{open: false}">
                            <button x-on:click="open=!open"                        
                                class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md bg-gray-400 text-white font-semibold hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600"
                                type="button">
                                Editar Imagem
                            </button>
                            <div x-show="open"
                                x-if="open">
                                <label for="image" class="sr-only">Imagem</label>
                                <input id="image" name="image" type="file" step="0.01" autocomplete="current-image"
                                    value="{{old('image', asset('storage/' . $product->image))}}"
                                    class="w-full rounded-md px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-300 focus:border-blue-300 focus:z-10 sm:text-sm"
                                    placeholder="Imagem">
                            </div>
                            <div>
                                @error('image')
                                <p class="text-sm text-red-300">{{$message}}</p>
                                @enderror 
                            </div>
                            {{-- error --}}
                        </div>                                        
                        <div>
                            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md bg-blue-300 text-white font-semibold hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Editar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>

</x-admin.layout>