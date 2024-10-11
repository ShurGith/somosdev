<h1> Hay que diseñar el home</h1>

<div class="grid gap-4  md:grid-cols-2 lg:grid-cols-2">
@foreach ($datos as $post)
<article class="flex bg-white transition hover:shadow-xl">
    <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
      <time
        datetime="{{ $post->created_at }}"
        class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900"
      >
        <span>{{ $post->created_at->format('Y') }}</span>
        <span class="w-px flex-1 bg-gray-900/10"></span>
        <span>{{ $post->created_at->format('d - M') }}</span>
      </time>
    </div>

    <div class="hidden sm:block sm:basis-56">
        @php
          $imagen = ($post->image != NULL) ? $post->image : $post_default_image;
        @endphp
      <img
        alt="{{ $post->title }}"
        src="{{ asset('images/posts/'.$imagen)}}"
        class="aspect-square h-full w-full object-cover"
      />
    </div>

    <div class="flex flex-1 flex-col justify-between">
      <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
        <a href="#">
          <h3 class="font-bold uppercase text-gray-900">
            {{ $post->title }}
          </h3>
        </a>

        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700">
         {{ $post->excerpt }}
        </p>
      </div>

      <div class="sm:flex sm:items-end sm:justify-end">
        <a
          href="{{ route('pagina.show', $post) }}"
          class="block bg-yellow-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-yellow-400"
        >
         {{ __('See Post')}}
        </a>
      </div>
    </div>
  </article>
@endforeach
</div>
