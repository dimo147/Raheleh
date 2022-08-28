AOS.init();
var splide = new Splide( '.splide', {
    focus  : 'left',
    type   : 'loop',
    autoplay: true,
    autoWidth: true,
    perPage: 3,
    perMove: 1,
    padding: { left: 20, right: 20 },
    gap: 20,
} );
    
splide.mount();