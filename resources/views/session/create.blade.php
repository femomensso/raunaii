<x-layout>

    <section class="container mx-auto px-2 mb-4 border-b">  
        <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-100 max-w-md space-y-8 w-full px-8 pb-8">
                <div>
                    <!-- <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                        alt="Workflow"> -->
                    <h2 class="mt-6 text-center text-2xl font-semibold text-gray-400">
                        Entre com sua conta
                    </h2>
                    <p class="mt-2 text-center text-sm text-gray-600">
                        ou
                        <a href="/registrar" class="font-medium text-blue-300 hover:text-blue-500">
                            Registre-se gratuitamente
                        </a>
                    </p>
                </div>
                <form class="mt-8 space-y-6" action="/login" method="POST">
                @csrf    
                    <!-- <input type="hidden" name="remember" value="true"> -->
                    <div class="">
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input id="email" name="email" type="email" autocomplete="email" required value="{{old('email')}}"
                                class="w-full rounded-md px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-300 focus:border-blue-300 focus:z-10 sm:text-sm"
                                placeholder="Email">
                        </div>
                        <div class="pt-4">
                            <label for="password" class="sr-only">Senha</label>
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required
                                class="w-full rounded-md px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-blue-300 focus:border-blue-300 focus:z-10 sm:text-sm"
                                placeholder="Senha">
                        </div>                        
                    </div>

                    <div class="text-sm flex justify-end">
                        <a href="#" class="font-medium text-blue-300 hover:text-blue-500">
                            Esqueceu sua senha?
                        </a>
                    </div>

                    <div>
                        @error('email')
                        <p class="flex justify-center pt-2 text-sm text-red-300 font-semibold">{{$message}}</p>
                        @enderror   
                    </div>
                    {{-- error --}}

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md bg-blue-300 text-white font-semibold hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Entrar
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </section>

    <x-newsletter/>

</x-layout>