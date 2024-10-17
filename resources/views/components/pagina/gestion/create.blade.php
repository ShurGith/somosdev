
<x-app-layout>
<section class="flex items-center justify-center">
    <form method="POST" action="{{ route('comunidad.store') }}" enctype="multipart/form-data" class="md:w-3/4 flex flex-col justify-center items-center mt-4">
        @csrf
        {{-- @if (session('status')) --}}
        <div class="rounded-md w-3/4 bg-green-50 p-4">
            <div class="flex">
              <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" />
                </svg>
              </div>
              <div class="ml-3">
                <h3 class="text-sm font-medium text-green-800">Post Añadido correctamente</h3>
                <div class="mt-2 text-sm text-green-700">
                  <p>El post ha sido añadido de manera correcta en la base de datos.</p>
                </div>
                <div class="mt-4">
                  <div class="-mx-2 -my-1.5 flex">
                    <button type="button" class="rounded-md bg-green-50 px-2 py-1.5 text-sm font-medium text-green-800 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">View status</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
    {{-- @endif --}}
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
                <div class="grid grid-cols-3 gap-2 md:grid-cols-4">
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
                <textarea id="contenidoPost" name="content" id="content" rows="4" class="w-full py-2.5 px-4 rounded-lg focus:outline-none border border-gray-200 shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] placeholder-gray-400 text-gray-900 font-normal leading-8 resize-none" placeholder="{{ __('Contenido del Post') }} . . ." >{{ old('content') }}</textarea>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
        </div>
        <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
    tinymce.init({
      selector: '#contenidoPost',
      plugins: [
        // Core editing features
        'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
        // Your account includes a free trial of TinyMCE premium features
        // Try the most popular premium features until Oct 30, 2024:
        'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown',
      ],
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
    });
  </script>
    </form>
</section>
</x-app-layout>
