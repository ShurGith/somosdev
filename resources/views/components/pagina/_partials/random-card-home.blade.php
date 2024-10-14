<div class="grid grid-cols-1 gap-4  md:grid-cols-2 lg:grid-cols-3">
    @foreach ($datos as $post)
        <article class="grid grid-cols-12  bg-white transition hover:shadow-xl">
            <div class="rotate-180 col-span-1 p-2 [writing-mode:_vertical-lr]">
                <time datetime="{{ $post->created_at }}"
                class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
                <span>{{ $post->created_at->format('Y') }}</span>
                <span class="w-px flex-1 bg-gray-900/10"></span>
                <span>{{ $post->created_at->format('d - M') }}</span>
                </time>
            </div>
                @php
                $imagen = ($post->image != NULL) ? $post->image : 'default_image.png';
                @endphp
                {{-- <img alt="{{ $post->title }}" src="{{ asset('images/posts/'.$imagen)}}" class="aspect-square object-cover" /> --}}
            <div class="col-span-4 items-center flex justify-center bg-cover bg-center" style="background-image:url({{ asset('images/posts/'.$imagen)}}">
            </div>
            <div class="flex flex-1 flex-col col-span-7 justify-between">
                <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                    <a href="{{ route('pagina.show', $post) }}">
                        <h3 class="font-bold uppercase text-gray-900">{{ $post->title }}</h3>
                    </a>
                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">{{ $post->excerpt }} </p>
                </div>
                <div class="flex justify-end gap-8">
                    <!-- Categorias -->
                    @foreach ( $post->categories as $categ)
                    <div class="w-fit min-w-20 rounded ease-linear duration-300 hover:shadow-lg shadow shadow-black" style="background-color:{{ $categ->primary_color }}">
                        <a href="{{ route('pagina.category', $categ->id) }}" class="flex pl-2 text-white justify-start items-center gap-2">
                        <img src="{{ asset('images/logos/'.$categ->logo) }}" class="max-w-4 max-h-4">
                        <h4 class="text-xs leading-8">{{ $categ->name }}</h4>
                        </a>
                    </div>
                    @endforeach
                    <!-- Categorias Fin -->
                    <a href="{{ route('pagina.show', $post) }}" class="bg-gray 100 boton-amarillo">
                    {{ __('See')}}
                    </a>
                </div>
            </div>
        </article>
    @endforeach
    </div>
