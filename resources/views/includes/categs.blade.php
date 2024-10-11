{{-- @props([
    // 'i' => 0,
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
]) --}}


<div class="w-full justify-start items-center gap-6 grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1">
    @foreach ($datos as $dato)
        <div class="py-4 px-6">
            <div class="justify-start items-center gap-2 inline-flex">
                @php
                    $color = $dts[$i]['base-color'];
                    $i++;
                @endphp
                <i class=" p-2 {{ 'text-'.$color}} }} font-thin text-2xl ti {{ $dts[$i-1]['ico'] }}"></i>
                <h4 class="text-gray-900 text-lg font-medium leading-8">{{ $dato->name }}</h4>
            </div>
        </div>
    @endforeach
</div>
