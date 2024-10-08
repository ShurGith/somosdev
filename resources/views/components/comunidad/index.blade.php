<x-guest-layout>
    <header class="bg-stone-700 grid grid-cols-12 place-items-center">
        <div class="place-items-center col-span-3 py-4">
            <x-comunidad.logo />
        </div>
        <div class="justify-items-center col-span-6">
        <x-comunidad.navigation />
        </div>
        <div class="flex flex-col gap-2 col-span-3">
        <x-comunidad.accesos />
        </div>
    </header>

<main class="mt-12 mb-12 w-3/4 mx-auto">
    <div class="w-full grid grid-cols-3 gap-y-14">
        @foreach ($posts as $post )
            <x-comunidad.card-articulo  :post='$post'/>
        @endforeach
    </div>

</main>
<section id="loginform" class="mt-96 pb-96">
    <x-comunidad.loginform />
</section>
</x-guest-layout>
