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
    <h1>Hola aqui </h1>
<div class="grid grid-cols-3 gap-y-14">
@foreach ($posts as $post )
   {{-- <x-comunidad.card-articulo  :post='$post'/> --}}

   <div class="flex flex-col rounded-2xl w-96 bg-[#ffffff] shadow-xl">
    <figure class="flex justify-center items-center rounded-2xl bg-gray-100">
        <img src="{{ asset('images/somosdevslogo.png') }}" alt="Card Preview" class="rounded-t-2xl">
    </figure>
    <div class="flex flex-col p-8">
        <div class="text-2xl font-bold text-[#374151] pb-6">{{ $post->title }}</div>

        <div class="text-sm text-[#374151]">
            {{ $post->category_id }}
          Categorias
        @foreach ($post->categories as $cat )
           <li> {{ $cat->name }} jaja</li>
            @endforeach
        </div>
        <div class="flex justify-end pt-6">
            <button class="bg-[#7e22ce] text-[#ffffff]  font-bold text-base  p-3 rounded-lg hover:bg-purple-800 active:scale-95 transition-transform transform">Leer Artículo</button>
        </div>
    </div>
</div>

@endforeach
</div>

</main>
<section id="loginform" class="mt-96 pb-96">
    <x-comunidad.loginform />
</section>
</x-guest-layout>
