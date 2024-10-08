@props([
    'post' => $post,
    'dts' =>[
        [
            'ico'=>'ti-brand-laravel',
            'color'=>'bg-orange-500',
        ],
        [
            'ico'=>'ti-file-type-php',
            'color'=>'bg-blue-700',
        ],
        [
            'ico'=>'ti-brand-vscode',
            'color'=>'bg-blue-500',
        ],
    ]
])


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

<div class="mx-auto w-2/4 pt-12">
    <img src="{{ asset('images/'.$post->image) }}">
</div>
<h1 class="text-3xl w-full text-center mt-12 font-semibold text-gray-900 mb-2 capitalize">{{ $post->title }}</h1>
<div class="mx-auto w-2/4">
{!! $post->content  !!}
</div>
</x-guest-layout>
