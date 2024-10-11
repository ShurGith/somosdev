<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="max-w-fit bg-{{ $datos->primary_color }} px-4 py-1 rounded flex items-center gap-2">
            <img src="{{ asset('images/logos/'.$datos->logo) }}" class="max-w-10">
            <h1 class="text-3xl font-bold tracking-tig text-[{{ $datos->logo_color }}]">{{ $datos->name }}</h1>
        </div>
    </div>
  </header>

<div role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 mt-2">
    @foreach ($posts as $post)
        @php
            $imagen = ($post->image != NULL) ? $post->image : $post_default_image;
        @endphp
        <div class="div-categ relative grid grid-rows-[auto_1fr_auto] px-6 py-14 bg-white rounded-lg bg-center bg-no-repeat bg-cover shadow " style="background-image:linear-gradient(to bottom,rgba(0, 0, 0,.2), {{ $datos->secondary_color }} ),url({{ asset('images/posts/'.$imagen) }}) ">
                <h3 class="font-bold text-white text-xl z-10">{{ $post->title }}</h3>
                <p class=" mt-1 text-white text-sm z-10">{{ $post->excerpt }}</p>
                <div class="flex justify-end items-end">
                    <a class="bg-yellow-400 px-4 py2 rounded text-" href="{{ route('pagina.show', $post->id) }}">{{ __('View') }}</a>
                </div>
        </div>
    @endforeach
</div>

