@props([
    'nota' => true,
    'notaContent' => "Effectively recruit and oversee talent on a global scale  with confidence | Begin at no cost",
    'pagActual'=> $pagina ?? "Sin título",
    'pasada' => $pagina,
    'active' => false,//Enlaces nav
    ])
<x-pagina.html :pagActual='ucfirst($pagina)'/>
<body>
<div class="min-h-screen grid grid-rows-[auto_1fr_auto]">
<!-- Seccion Header -->
<section>
<x-pagina._partials.nav  :nota="$nota" :notaContent="$notaContent" />
<x-pagina._partials.header :pagActual='ucfirst($pagActual)' />
</section>
<!-- Seccion Contenido -->
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 bg-green-200">
        @include('layouts/'.$pasada)
    </div>
</main>
<!-- Seccion Footer -->
<section>
<x-pagina.footer />
<x-pagina._partials.footer-scripts />
</section>
</div>
</body>
</html
