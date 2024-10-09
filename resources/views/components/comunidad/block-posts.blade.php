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
<div class="w-full px-4 md:px-5 lg:px-5 mx-auto">
    <div class="w-full flex-col justify-start items-center gap-10 inline-flex">
        <div class="w-full flex-col justify-center items-start gap-2.5 flex">
            <h2 class="text-gray-900 text-3xl font-bold font-manrope leading-normal">Nuestros Últimos Posts</h2>
            <p class="text-gray-500 text-base font-normal leading-relaxed">Sync up your main apps to make your work smoother, ensuring they all talk to each other well and help you get stuff done faster.</p>
        </div>

        <div class="w-full justify-start items-center gap-6 grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1">
            @foreach ($posts as $post)
                <div class="block-card">
                    <div class="py-4 px-6">
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
                        <p class="mt-2 text-gray-400 text-xs font-normal leading-5 min-h-[125px]">{!! Str::limit($post->excerpt,$exc_limite,' ( ...Mas)') !!}</p>
                    </div>
                    <a  class="text-blue-700 py-2 bg-verdec-300 font-bold w-full text-center" href="{{ route('comunidad.show', $post->id) }}">
                        {{ __('Ver Mas') }}
                    </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
