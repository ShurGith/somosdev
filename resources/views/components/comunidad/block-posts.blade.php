@props([
    'posts' => $posts,
    'exc_limite' => 200,
    'dts' =>[
        [
            'ico'=>'ti-brand-laravel',
            'base-color' => 'orange-500',
            'color'=>'bg-orange-500',
            'txt-color'=>'text-orange-500',
            'bdr-color'=>'border-orange-500',
        ],
        [
            'ico'=>'ti-file-type-php',
            'base-color' => 'blue-500',
            'color'=>'bg-blue-700',
            'txt-color'=>'text-blue-700',
            'bdr-color'=>'border-blue-500',
        ],
        [
            'ico'=>'ti-brand-vscode',
            'base-color' => 'blue-500',
            'color'=>'bg-blue-500',
            'txt-color'=>'text-blue-500',
            'bdr-color'=>'border-blue-500',
        ],
    ]
])
<section class="py-24 relative">
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full flex-col justify-start items-center gap-10 inline-flex">
            <div class="w-full flex-col justify-center items-start gap-2.5 flex">
                <h2 class="text-gray-900 text-3xl font-bold font-manrope leading-normal">Nuestros Últimos Posts</h2>
                <p class="text-gray-500 text-base font-normal leading-relaxed">Sync up your main apps to make your work smoother, ensuring they all talk to each other well and help you get stuff done faster.</p>
            </div>

            <div class="w-full flex-col justify-start items-center gap-6 flex">
                <div class="w-full justify-start items-center gap-6 grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1">
                @foreach ($posts as $post)
                    <div class="w-full flex-col justify-start items-center inline-flex">
                        <div class="w-full p-5 bg-white rounded-tl-lg rounded-tr-lg shadow-[0px_15px_30px_-4px_rgba(16,_24,_40,_0.03)] border border-gray-200 flex-col justify-center items-start gap-3.5 flex">
                            <div class="justify-start items-center gap-2 inline-flex">
                                @foreach ($post->categories as $cat)
                                @php
                                    $user =  App\Models\User::find($cat->pivot->user_id);
                                    $num = $cat->id -1;
                                    $color = $dts[$num]['base-color'];
                                @endphp
                                <i class="rounded-full border {{ 'border-'.$color}} } p-2 {{ 'text-'.$color}} }} font-thin text-4xl ti {{ $dts[$num]['ico'] }}"></i>

                                @endforeach
                                <a href="{{ route('comunidad.show', $post->id) }}">
                                <h4 class="text-gray-900 text-lg font-medium leading-8">{{ $post->title }}</h4>
                                </a>
                            </div>
                            <p class="text-gray-400 text-xs font-normal leading-5">{!! Str::limit($post->excerpt,$exc_limite,' ( ...Mas)') !!}</p>
                        </div>

                        <a href="" class="w-full px-3.5 py-2 rounded-bl-lg rounded-br-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] border-l border-r border-b border-gray-200 justify-center items-center flex">
                            <div class="px-1.5 py-px justify-center items-center flex">
                                <div class="text-blue-700 text-sm font-medium leading-snug">{{ __('Ver Mas') }}</div>
                            </div>
                        </a>
                    </div>


                @endforeach

                    {{-- <div class="flex flex-col rounded-2xl w-3/4 bg-white shadow-xl">
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
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</section>
