@if (session()->has('success'))
    <div x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        class="fixed bg-blue-300 text-white font-semibold px-4 py-2 rounded-xl bottom-5 right-5 text-md z-50">
        <p>
            {{session('success')}}
        </p>
    </div>
@endif