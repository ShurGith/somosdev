@props([
    'nota' => true,
    'notaContent' => "Effectively recruit and oversee talent on a global scale  with confidence | Begin at no cost",
    'grupo' => $grupo ?? "post",
    'active' => false,//Enlaces nav

    'i' => 0,
    'dts' =>[
        [
            'ico'=>'ti-brand-laravel',
            'base-color' => 'orange-500',
            'color'=>'bg-orange-500',
            'txt-color'=>'text-orange-500',
            'bdr-color'=>'border-orange-500',
        ],
        [
            'ico'=>'ti-file-type-php',
            'base-color' => 'blue-500',
            'color'=>'bg-blue-700',
            'txt-color'=>'text-blue-700',
            'bdr-color'=>'border-blue-500',
        ],
        [
            'ico'=>'ti-brand-vscode',
            'base-color' => 'blue-500',
            'color'=>'bg-blue-500',
            'txt-color'=>'text-blue-500',
            'bdr-color'=>'border-blue-500',
        ],
    ]
])
<x-pagina.html :pagActual='ucfirst($pagina)'/>
<body>
<div class="min-h-screen grid grid-rows-[auto_1fr_auto]">
<!-- Seccion Header -->
<section>
<x-pagina._partials.nav  :nota="$nota" :notaContent="$notaContent" />
<x-pagina._partials.header :pagina='$pagina' />
</section>
<!-- Seccion Contenido -->
<main>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 bg-green-200">
        {{-- @include('layouts/'.$pasada) --}}
        @include('includes.'.$grupo)
    </div>
</main>
<!-- Seccion Footer -->
<section>
<x-pagina.footer />
</section>
</div>
<x-pagina._partials.footer-scripts />
</body>
</html
