    <!----------- Aqui división ------------->
@props([
    'random_posts' => $random
])

<div x-data="randomize">
    <div class="mb-4 -mt-8">
        <button @click="cargar()" class="bg-blue-950 transition duration-300 hover:bg-blue-800 text-white pl-2 py-2 gap-4 cursor-pointer pr-5 rounded flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-0.5 -0.5 24 24" id="Sync--Streamline-Outlined----Material-Symbols" height="24" width="24"><path fill="#ffffff" d="M4.001041666666667 19.166666666666668v-1.4375h3.1145833333333335l-0.359375 -0.2875c-1.0222062500000002 -0.8145833333333333 -1.7649145833333335 -1.7010416666666666 -2.2281250000000004 -2.659375 -0.4631960416666667 -0.9583333333333334 -0.6947916666666667 -2.02845625 -0.6947916666666667 -3.2104166666666667 0 -1.6930395833333334 0.49913354166666674 -3.21439375 1.4973958333333335 -4.5640625 0.9982479166666667 -1.34966875 2.3119791666666667 -2.280033125 3.941145833333333 -2.7911458333333337v1.4854166666666668c-1.1979166666666667 0.4632104166666667 -2.1642520833333334 1.2338541666666667 -2.8989583333333333 2.3119791666666667 -0.7347062500000001 1.078125 -1.1020833333333333 2.2640625 -1.1020833333333333 3.5578125000000003 0 1.00625 0.18768958333333333 1.8807291666666666 0.5630208333333334 2.6234375 0.37533125 0.7427083333333334 0.88248125 1.3856062500000002 1.5213541666666666 1.9286458333333336l0.71875 0.503125v-2.9708333333333337h1.4375V19.166666666666668H4.001041666666667Zm9.751041666666667 -0.359375V17.29791666666667c1.2138729166666669 -0.4632104166666667 2.1802083333333333 -1.2338541666666667 2.8989583333333333 -2.3119791666666667S17.729166666666668 12.721875 17.729166666666668 11.428125000000001c0 -0.7666666666666667 -0.18768958333333333 -1.5453125 -0.5630208333333334 -2.3359375 -0.37533125 -0.790625 -0.8664770833333334 -1.48939375 -1.4734375000000002 -2.096354166666667l-0.6947916666666667 -0.6229166666666667v2.9708333333333337h-1.4375V3.8333333333333335h5.510416666666667v1.4375h-3.138541666666667l0.359375 0.33541666666666664c0.9583333333333334 0.8944604166666668 1.6770833333333335 1.85279375 2.15625 2.875s0.71875 2.0044979166666668 0.71875 2.9468750000000004c0 1.6930395833333334 -0.49512291666666675 3.21841875 -1.4854166666666668 4.576041666666667 -0.9902937500000001 1.3576229166666667 -2.3 2.2919979166666664 -3.9291666666666667 2.803125Z" stroke-width="1"></path></svg>
            Recargar</button>
    </div>
   <div class="grid grid-cols-1 gap-4  md:grid-cols-2 lg:grid-cols-3">
        <template x-for="dato in randomPosts" :key="dato.id" >
            <article class="grid grid-cols-12  bg-white transition hover:shadow-xl">
                <div class="rotate-180 col-span-1 p-2 [writing-mode:_vertical-lr]">
                    <time x-datetime="dato.created_at" class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900">
                        <span x-text="splitea(dato.created_at)[0]"></span>
                        <span class="w-px flex-1 bg-gray-900/10"></span>
                        <div><span x-text="splitea(dato.created_at)[1]"></span><span> - </span><span x-text="splitea(dato.created_at)[2]"></span></div>
                    </time>
                </div>
                <div class="h-52 col-span-4 bg-cover bg-center" :style="`background-image:url('/images/posts/${dato.image}')`"></div>
                <div class="flex flex-1 flex-col col-span-7 justify-between">
                    <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
                      <a :href="`/show/${dato.id}`">
                            <h3 x-text="dato.title" class="font-bold uppercase text-gray-900"></h3>
                        </a>
                        <p x-text="dato.excerpt" class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700"></p>
                    </div>
                    <div class="flex justify-end gap-8 mr-2 mb-2">
                        <template x-for="cat in dato.categories">
                            <div class="w-fit min-w-20 rounded ease-linear duration-300 hover:shadow-lg shadow shadow-black" :style="`background-color:${cat.primary_color}`">
                            <a :href="`/category/${cat.id}`" class="flex pl-2 text-white justify-start items-center gap-2">
                            <img :src="`images/logos/${cat.logo}`" class="max-w-4 max-h-4">
                            <h4 x-text="cat.name" class="text-xs text-white leading-8"></h4>
                            </a>
                            </div>
                        </template>
                        <a :href="`/show/${dato.id}`" class="bg-gray 100 boton-amarillo">
                            {{ __('See')}}
                            </a>
                    </div>
                    </div>
                </div>
                {{-- <div class="px-4 py-2 text-xs text-white rounded w-fit h-fit " x-text="dato.categories.name" :style="`background-color:${dato.categories.primary_color}`"></div>
                <a x-text="dato.title" :href="`/show/${dato.id}`"></a>

                <p x-text="dato.user.name"></p>
                <div>
                <p>Año <span x-text="splitea(dato.created_at)[0]"></span></p>
                <p>Día <span x-text="splitea(dato.created_at)[1]"></span></p>
                <p>Mes <span x-text="splitea(dato.created_at)[2]"></span></p>
                </div> --}}
            </div>
        </template>
    </div>
    {{-- {{ dd($random_posts) }} --}}
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('randomize', () => ({
                cargar: function(){
                    return(
                        axios.get('/home')
                        .then(response => {
                            this.randomPosts = response.data;
                        }));
                    },
                    randomPosts: {!! $random_posts->toJson() !!},
                }))
        })

        function splitea(fecha){
            array = fecha.split("-")
            return array
        }
    </script>
