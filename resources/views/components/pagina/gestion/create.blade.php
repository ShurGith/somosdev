<x-app-layout>
<section class="flex items-center justify-center">
    <form method="POST" action="{{ route('comunidad.store') }}" enctype="multipart/form-data" class="md:w-3/4 flex flex-col justify-center items-center mt-4">
        @csrf
        <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
        <div class="flex flex-col w-full px-4 md:w-3/4 ">
            <label for="titulo" class="font-medium text-gray-700">{{ __('Titulo')}}</label>
            <input type="text" name="titulo" id="titulo" class="w-full py-3 px-5 rounded-lg border border-gray-200 bg-transparent focus:outline-none shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] placeholder-gray-400 text-gray-900 text-base font-normal" placeholder="{{ __('Titulo') }}"  value="{{ old('titulo') }}" required>
            @error('titulo')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex flex-col w-full px-4 md:w-3/4 mt-4">
            <label for="excerpt" class="font-medium text-gray-700">{{ __('Extracto')}}</label>
            <input type="text" name="excerpt" id="excerpt" class="w-full py-3 px-5 rounded-lg border border-gray-200 bg-transparent focus:outline-none shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] placeholder-gray-400 text-gray-900 text-base font-normal" placeholder="{{ __('Extracto') }}" value="{{ old('excerpt') }}">
            @error('excerpt')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex flex-col px-4 md:w-3/4 mt-4">
            <label for="image-file" class="font-medium text-gray-700">{{ __('Imagen Predeterminada')}}</label>
            <input type="file" name="file_image" id="file_image" class="w-full py-3 px-5 rounded-lg border border-gray-200 bg-transparent focus:outline-none shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)]">
            @error('file_image')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="w-full px-4 md:w-3/4 mt-4">
            <fieldset>
                <legend class="mb-2 font-semibold leading-6 text-gray-900">{{ __('Categ')}}</legend>
                <div class="grid grid-cols-3 gap-2">
                @foreach ($categs as $cat)
                <div class="flex items-center gap-2">
                    <input id="cat_{{ $cat->id }}" name="category_id" value="{{ $cat->id }}"  type="radio" class="h-4 w-4 cursor-pointer border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    <label for="cat_{{ $cat->id }}" class="block cursor-pointer text-sm font-medium leading-6 text-gray-900">{{ strtoupper($cat->name) }}</label>
                </div>
                @endforeach
                </div>
            </fieldset>
        </div>
        <div class="w-full px-4 md:w-3/4 mt-4 justify-start items-start gap-1 flex">
            <div class="w-full justify-start items-start gap-1.5 flex flex-col">
                <div class="justify-start items-center gap-1 inline-flex">
                    <span class="text-gray-600 font-medium leading-7">{{ __('Contenido del Post') }}</span>
                </div>
                <textarea name="content" id="content" rows="4" class="w-full py-2.5 px-4 rounded-lg focus:outline-none border border-gray-200 shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] placeholder-gray-400 text-gray-900 font-normal leading-8 resize-none" placeholder="{{ __('Contenido del Post') }} . . ." >{{ old('content') }}</textarea>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
        </div>
    </form>
</section>
</x-app-layout>

