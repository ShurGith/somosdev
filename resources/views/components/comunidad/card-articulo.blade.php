@props([
    'post' => $post,
    'dts' =>[
        [
            'ico'=>'ti-brand-laravel',
            'color'=>'bg-orange-500',
        ],
        [
            'ico'=>'ti-file-type-php',
            'color'=>'bg-blue-700',
        ],
        [
            'ico'=>'ti-brand-vscode',
            'color'=>'bg-blue-500',
        ],
    ]
])


<div class="flex flex-col rounded-2xl w-3/4 bg-white shadow-xl">
    <figure class="flex justify-center items-center rounded-t-2xl bg-gray-100">
        <img src="{{ asset('images/'. ($post->image ??  'somosdevslogo.png')) }}" alt="{{ $post->title }}" class="min-h-44 rounded-t-2xl">
    </figure>
    <div class="flex flex-col p-8">
        <div class="line-clamp-4 text-2xl font-bold text-slate-500 pb-6">{{ $post->title }}</div>
        <div class="line-clamp-6 text-sm text-slate-500 pb-6">{{ Str::limit($post->content,999999991,' ( ...Mas)') }}</div>
        <div class="flex justify-end pt-6">
            <button class="bg-purple-900 text-white  font-bold text-base  p-3 rounded hover:bg-purple-800 active:scale-95 transition-transform transform">Leer Artículo</button>
        </div>
        @foreach ($post->categories as $cat)
            @php $user =  App\Models\User::find($cat->pivot->user_id);  @endphp

            <div class="{{ $dts[$cat->id -1]['color']}} w-12 h-12 rounded-full flex items-center justify-center text-sm text-white/70 gap-2 m-6">
                <i class="text-2xl ti {{ $dts[$cat->id -1]['ico'] }}"></i>
            </div>
            <div class="flex items-center  flex-col text-sm text-slate-500">Autor:
                <img  class="w-18 border-4 rounded-full "src="{{ asset('images/'.$user->profile_photo_path) }}">
                <p class="font-bold">{{ $user->name }}</p>
            </div>
        @endforeach
    </div>
</div>
