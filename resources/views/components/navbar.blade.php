<nav class="flex justify-between bg-gray-50 items-center h-10 px-4">
    <div class="m-2 flex space-x-4">
        <a href="https://www.facebook.com/raunaii">
            <img alt="Facebook" class="w-6 h-6"
                src="https://static.wixstatic.com/media/0fdef751204647a3bbd7eaa2827ed4f9.png/v1/fill/w_46,h_46,al_c,q_85,usm_0.66_1.00_0.01/0fdef751204647a3bbd7eaa2827ed4f9.webp">
        </a>
        <a href="https://www.instagram.com/raunaii/">
            <img alt="Instagram" class="w-6 h-6"
                src="https://static.wixstatic.com/media/01c3aff52f2a4dffa526d7a9843d46ea.png/v1/fill/w_46,h_46,al_c,q_85,usm_0.66_1.00_0.01/01c3aff52f2a4dffa526d7a9843d46ea.webp">
        </a>
    </div>
    <div>
        <a href="/" class="text-gray-400 hover:text-black text-xl">RAUNAII</a>
    </div>
    <div class="mr-2">
        @auth
            <form action="/logout" method="POST">
            @csrf                    
            <div class="flex space-x-2 hover:text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span>
                    <button type="submit">logout</button>
                </span>
            </div>
            </form>
        @endauth

        @guest
            <a href="/login" class="flex space-x-2 hover:text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>
                    login
                </span>
            </a>
        @endguest       
    </div>
</nav>