<section>
    @foreach ($datos->categories as $cat)
    @php
        $user =  App\Models\User::find($cat->pivot->user_id);
        /* $num = $cat->id -1;
        $color = $dts[$num]['base-color'];
        $bg_color = $dts[$num]['bg-color'];*/

    @endphp
    <div class=" bg-{{ $cat->primary_color }} text-white max-w-fit rounded">
        <a href="{{ route('pagina.category', $cat->id) }}" class="flex gap-2 px-4 py-1">
            <img src="{{ asset('images/logos/'.$cat->logo) }}" class="max-w-6">
            <p class="text-base leading-7 ">{{ $cat->name }}</p>
        </a>
    </div>
    @endforeach

    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
        <div class="max-w-3xl">
        <h2 class="text-3xl font-bold sm:text-4xl">{{ $datos->title }}</h2>
    </div>

    <div class="mt-8">
        <div class="relative h-64 overflow-hidden sm:h-80 lg:h-full">
            @php
            $imagen = ($datos->image != NULL) ? $datos->image : $post_default_image;
            @endphp
            <img alt="{{ $datos->title }}" src="{{ asset('images/posts/'.$imagen)}}" class="object-cover" />
        </div>

        <div class="lg:py-16">
            <article class="text-red-600">
                {!! $datos->content !!}
            </article>
        </div>
    </div>
</section>
