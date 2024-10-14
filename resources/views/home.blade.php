@props([
    'nota' => true,
    'notaContent' => "Effectively recruit and oversee talent on a global scale  with confidence | Begin at no cost",
    'grupo' => $grupo ?? "post",
    'active' => false,//Enlaces nav,
    //'post_default_image' => 'default_image.png',//pagina/_partials/card-home.blade.php
])
<x-pagina.html :pagActual='ucfirst($pagina)'/>
<body>
<div class="min-h-screen grid grid-rows-[auto_1fr_auto]">
<!-- Seccion Header -->
<section>
<x-pagina._partials.nav  :nota="$nota" :notaContent="$notaContent" />
@if(!isset($titulo))
<x-pagina._partials.header :pagina='$pagina' />
@endif
</section>
<!-- Seccion Contenido -->
<main>
    <div class="mx-auto max-w-screen-2xl px-4 py-6 sm:px-6 l">
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
