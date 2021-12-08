<div class="bg-blue-300 pb-8 mt-8">
    <div class="container mx-auto p-8">
        <div class="flex justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
        </div>
        <div class="flex justify-center text-md text-gray-500 text-center mb-4">
            Assine nossa Newsletter e se mantenha atualizado nas nossas promocoes e lancamentos!
        </div>
        <div class="flex justify-center">
            <form action="/newsletter" method="POST">
                @csrf
                <input type="text" name="email" id="email" placeholder="Insira seu endereco de email" class="flex justify-center w-72 rounded-md px-3 py-2 mt-2 border border-gray-300 placeholder-gray-500 text-center text-gray-500 focus:outline-none focus:border-gray-800 focus:z-10">
                <button type="submit" class="bg-gray-300 hover:bg-gray-400 mt-4 p-2 rounded-md flex justify-center w-72 border border-gray-300 text-gray-500">
                    Inscrever-se
                </button>                    
            </form>                
        </div>
        <div class="mt-4 flex justify-center text-sm text-gray-500 mx-auto">
            <p class="text-center w-96">
                Ao marcar essa caixa voce esta nos dando permissao de lhe enviar emails. Voce pode 
                cancelar a qualquer momento.
            </p>                
        </div>
    </div>
</div>