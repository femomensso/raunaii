<x-layout>

    <x-menu-category/>
    
    <section class="container mx-auto px-2 mb-4 border-t">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4 my-4">
            <div class="col-span-3 p-8 ">
                <img class="object-cover w-full h-96 rounded-md" src="{{asset('storage/' . $product->image)}}" alt="Produto 1">
            </div>
            
            <div class="col-span-2 justify-center mb-2">
                <div class="flex justify-center text-center px-2 pb-2 sm:mt-8 mb-2 text-xl">
                    {{$product->name}}
                </div>
                <div class="flex justify-center text-center px-2 pb-4 mb-2 text-sm">
                    <p>
                        {{$product->description}}
                    </p>
                </div>
                <div class="flex justify-between border-t mt-4 pt-4 px-4">
                    <div class="text-xl flex items-center">
                        R$ {{$product->price}}
                    </div>
                    <a href="https://api.whatsapp.com/send?phone=5513996171805&text=Ola%2C%20cheguei%20aqui%20pelo%20link%20do%20site!%20Quero%20comprar%20o%20produto%20{{$product->slug}}%2C%20como%20devo%20proceder%3F">
                        <div class="hover:text-gray-400 border p-4 text-lg rounded-md">
                            <button>Falar com anunciante</button>
                        </div>
                    </a>            
                </div>
                <div class="border-t mt-4 pt-4 px-4">
                    <p class="text-sm py-2">Simule o frete para sua regiao:</p>
                    <form action="/frete">
                        <div class="flex justify-between">                    
                            <input type="number" name="cep" id="cep" value="{{old('cep')}}" class="border w-full text-sm p-2" placeholder="Digite seu CEP">
                            <span>                        
                                <button type="submit" class="bg-gray-100 border hover:text-gray-400 p-2 text-sm">
                                    Calcular
                                </button>
                            </span>                                             
                        </div>
                    </form>   
                    @if (session('frete'))
                        <div class="py-2">
                            <p class="text-sm text-red-300">Valor do frete: R$ {{session('frete')}}</p>
                        </div> 
                    @endif                                                         
                </div>                
            </div>
        </div>
        <div>
            <div class="border-b mb-4">
                <p>PRODUTOS SIMILARES</p>
            </div>
            @if (count($similars)>0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 my-4">
                @foreach ($similars as $item)
                <div class="hover:shadow-md">                    
                    <a href="/produtos/{{$item->slug}}">
                        <div class="flex justify-center mb-2">
                            <img class="object-fill h-60 w-60" src="{{asset('storage/' . $item->image)}}" alt="Produto 1">
                        </div>
                        <div class="flex justify-center text-center px-2 mb-2">
                            {{$item->name}}
                        </div>
                        <div class="flex justify-center mb-2 font-semibold text-sm">
                            R$ {{$item->price}}
                        </div>
                        <div class="flex justify-center mb-2 hover:text-gray-400">
                            <button>Ver produto</button>
                        </div>
                    </a>                                      
                </div>
                @endforeach  
            </div>
            @else
            <div class="my-4 py-8">
                <p class="text-sm flex justify-center">
                    Nāo foram encontrados produtos similares. Aguarde, em breve teremos novidades! 
                </p>
            </div> 
            @endif                        
        </div>        
    </section>
</x-layout>