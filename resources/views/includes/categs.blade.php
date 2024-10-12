<div class="w-full  place-items-center gap-6 grid lg:grid-cols-4 md:grid-cols-2 grid-cols-2">
    @foreach ($datos as $dato)
            <div class="w-fit min-w-28 rounded ease-linear duration-300 hover:shadow-lg shadow shadow-black" style="background-color:{{ $dato->primary_color }}">
                <a href="{{ route('pagina.category', $dato->id) }}" class="flex px-2 py-1 text-white justify-start items-center gap-2">
                    <img src="{{ asset('images/logos/'.$dato->logo) }}" class="max-w-8 max-h-8">
                    <h4 class="text-lg leading-8">{{ $dato->name }}</h4>
                </a>
            </div>
    @endforeach
</div>
