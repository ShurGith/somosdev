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
<h1>{{ $post->title }}</h1>
{{ $post->content }}

</x-guest-layout>
