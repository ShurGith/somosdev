<header class="bg-white shadow">
    <div class="mx-auto flex justify-start gap-24 max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="max-w-fit px-4 py-1 rounded flex items-center gap-2" style="background-color:{{ $datos->primary_color }}">
            <img src="{{ asset('images/logos/'.$datos->logo) }}" class="max-w-10">
            <h1 class="text-3xl font-bold tracking-tig text-{{ $datos->logo_color }}">{{ $datos->name }}</h1>
        </div>
        <a class="boton-amarillo" href="{{ route('pagina.categs') }}">{{ __('Categs') }}</a>
    </div>
  </header>

<div role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-2">
    @if($posts->count()==0)
    <div class="rounded-md bg-yellow-50 p-4">
        <div class="flex">
          <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495ZM10 5a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5A.75.75 0 0 1 10 5Zm0 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="ml-3">
            <h3 class="text-sm font-medium text-yellow-800">{{ __('No Content') }}</h3>
            <div class="mt-2 text-sm text-yellow-700">
            <p>En esta sección aún no tenemos contenido alguno, pero esperamos que muy pronto empezemos a llenarla de contenido</p>
            </div>
        </div>
        </div>
    </div>
    @endif
        @foreach ($posts as $post)
        @php
            $imagen = ($post->image != NULL) ? $post->image : $post_default_image;
        @endphp
        <div class="relative">
            <div class="absolute w-full h-full top-0 left-0 border-2 border-black border-dashed rounded-lg"></div>
            <div class="div-categ relative flex min-h-40 flex-col justify-between px-6 py-4 bg-white rounded-lg bg-center bg-no-repeat bg-cover shadow transition-all ease-in-out duration-500 hover:-translate-x-1 hover:-translate-y-1 hover:shadow-xl hover:shadow-black" style="background-image:linear-gradient(to bottom,rgba(0, 0, 0,.2), {{ $datos->secondary_color }} ),url({{ asset('images/posts/'.$imagen) }}) ">
            <div>
                <h3 class="font-bold text-white text-xl z-10">{{ $post->title }}</h3>
                <p class=" mt-1 text-white text-sm z-10">{{ $post->excerpt }}</p>
            </div>
            <div class="flex justify-end items-end">
                <a class="boton-amarillo" href="{{ route('pagina.show', $post->id) }}">{{ __('View') }}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

