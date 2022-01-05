<x-layout>

    <x-menu-category/>
    
    <x-main_image/>

    <section class="container mx-auto px-2 mb-4">
        <div class="border-b mb-4">
            <p>TRENDING</p>
        </div>
        @if (count($products)>0)
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 my-4">
            @foreach ($products as $product)
            <div class="border-b hover:shadow-md">
                <a href="/produtos/{{$product->slug}}">
                    <div class="flex justify-center mb-2">
                        <img class="object-fill h-60 w-60" src="{{Storage::disk('s3')->temporaryUrl($product->image, '+2 minutes')}}" alt="Produto">
                    </div>
                    <div class="flex justify-center text-center px-2 mb-2">
                        {{$product->name}}
                    </div>
                    <div class="flex justify-center mb-2 font-semibold text-sm">
                        R$ {{$product->price}}
                    </div>
                    <div class="flex justify-center mb-2 hover:text-gray-400">
                        <button>Ver produto</button>
                    </div>
                </a>
            </div> 
            @endforeach
        </div>
        @else
        <div class="my-4 py-16">
            <p class="text-sm flex justify-center">
                Ainda nāo foram cadastrados produtos nessa categoria. Aguarde, em breve teremos novidades! 
            </p>
        </div>
        @endif
        
        
    </section>

</x-layout>