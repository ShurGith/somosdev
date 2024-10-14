@props([
    'grupo' => 'Home',
])
<x-pagina._partials.hero-one />
<h3 class="text-3xl mt-20 mb-12 ml-4 w-fit pb-5 pr-8 border-b-4 border-stone-400 ">Temas aleatorios</h3>
<x-pagina._partials.random-card-home :datos='$random_posts' />
<h3 class="text-3xl mt-20 mb-12 ml-4 w-fit pb-5 pr-8 border-b-4 border-stone-400 ">Ultimos Temas</h3>
<x-pagina._partials.lasts-card-home  :datos='$posts_lasts' />
<x-pagina._partials.randomize :random='$random_posts' /> <!-- Alpine.js -->
