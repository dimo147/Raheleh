AOS.init();
var splide = new Splide( '.splide', {
    focus  : 'center',
    type   : 'loop',
    autoplay: true,
    autoWidth: true,
    perPage: 3,
    padding: { left: 20, right: 20 },
    gap: 20,
} );
    
splide.mount();