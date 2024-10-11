<div class="w-full justify-start items-center gap-6 grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1">
    @foreach ($datos as $dato)
            <div class="bg-{{ $dato->primary_color }} w-fit min-w-28 rounded">
                <a href="{{ route('pagina.category', $dato->id) }}" class="flex px-2 py-1 text-white justify-start items-center gap-2">
                    <img src="{{ asset('images/logos/'.$dato->logo) }}" class="max-w-8 max-h-8">
                    <h4 class="text-lg leading-8">{{ $dato->name }}</h4>
                </a>
            </div>
    @endforeach
</div>
