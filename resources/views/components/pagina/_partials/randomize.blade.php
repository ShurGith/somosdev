    <!----------- Aqui división ------------->
    @props([
        'random_posts' => $random
    ])
    <h3 class="text-5xl text-red-500 mt-24">Otros aleatorios</h3>

    <div x-data="randomize" class="border min-h-18 min-w-18">
        <button @click="cargar()" class="bg-blue-950 text-white px-5 rounded">Recargar</button>
        <p>Datos</p>
        <template x-for="dato in randomPosts" :key="dato.id" >
            <div class="grid grid-cols-5">
                <template x-for="item in dato.categories">

                    <div class="px-4 py-2 text-xs text-white rounded w-fit h-fit " x-text="item.name" :style="`background-color:${item.primary_color}`"></div>
                </template>
                <a x-text="dato.title" :href="`/show/${dato.id}`"></a>
                <img :src="`/images/posts/${dato.image}`" :alt="`${dato.title} imagen`" class="w-24 h-24">

            </div>
        </template>
    </div>
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
    </script>
