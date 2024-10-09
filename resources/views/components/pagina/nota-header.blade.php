@props([
    'notaContent' => $notaContent,
])
<div class=" py-2.5 bg-gray-900 hidden md:block">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        <div class="flex items-center justify-center w-full">
             <p class="text-white text-sm font-medium text-center">
                {{ $notaContent }}
            </p>
        </div>
    </div>
</div>
