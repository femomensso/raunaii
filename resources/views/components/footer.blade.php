<footer class="bg-gray-50">
    <div class="px-4 flex justify-between items-center">            
        <div class="m-2 mb-6 space-y-2 ">
            <p class="font-semibold flex">Institucional</p>
            <a class="text-gray-400 flex">Sobre Nós</a>
            <p class="text-sm">Loja on-line de acessórios artesanais feitos com muito amor a partir de ideias criativas, onde você também pode criar o seu do jeitinho que quiser.</p>
        </div>
        @auth
            @if (auth()->user()->email == "femomensso@gmail.com")
            <div class="pr-4">
                <a href="/admin/usuarios" class="hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                </a>
            </div>            
            @endif
        @endauth

        <div class="m-2 space-y-4">
            <a href="https://www.facebook.com/raunaii" class="flex">
                <img alt="Facebook" class="w-6 h-6"
                    src="https://static.wixstatic.com/media/0fdef751204647a3bbd7eaa2827ed4f9.png/v1/fill/w_46,h_46,al_c,q_85,usm_0.66_1.00_0.01/0fdef751204647a3bbd7eaa2827ed4f9.webp">
                <span>facebook</span>
            </a>
            <a href="https://www.instagram.com/raunaii/" class="flex">
                <img alt="Instagram" class="w-6 h-6"
                    src="https://static.wixstatic.com/media/01c3aff52f2a4dffa526d7a9843d46ea.png/v1/fill/w_46,h_46,al_c,q_85,usm_0.66_1.00_0.01/01c3aff52f2a4dffa526d7a9843d46ea.webp">
                <span>instagram</span>
            </a>
        </div>
    </div>
    <div class="bg-gray-800 flex font-semibold h-10 items-center justify-center text-white text-xs">
        Desenvolvido com 
        <span class="px-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
          </svg>
        </span> 
        por Fernando Momensso
    </div>
</footer>