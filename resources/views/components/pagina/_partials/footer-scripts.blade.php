
 @livewireScripts

<script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    let SwiperTop = new Swiper('.swiper--top', {
        spaceBetween: 0,
        centeredSlides: true,
        speed: 6000,
        autoplay: {
            delay: 1,
        },
        loop: true,
        loopedSlides: 3,
        slidesPerView: 6,
        allowTouchMove: false,
        disableOnInteraction: true
    });

    let SwiperBottom = new Swiper('.swiper--bottom', {
        spaceBetween: 0,
        centeredSlides: true,
        speed: 6000,
        autoplay: {
            delay: 1,
            reverseDirection: true
        },
        loop: true,
        loopedSlides: 4,
        slidesPerView: 6,
        allowTouchMove: false,
        disableOnInteraction: true
    });
    const objeto = document.getElementById('user-menu')
    document.getElementById('user-menu-button').addEventListener('click',()=>{
        const claseLista = objeto.classList
        if(claseLista.contains('scale-y-0')){
            objeto.classList.remove('scale-y-0','ease-out')
            objeto.classList.add('scale-y-100','ease-in')
        }else{
            objeto.classList.add('scale-y-0','ease-out')
            objeto.classList.remove('scale-y-100','ease-in')
        }
    })
</script>
