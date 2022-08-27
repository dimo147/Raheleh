new fullpage('#fullpage', {
    anchors: ['home', 'slide', 'designs', 'designs2', 'about'],
    navigationTooltips: ['Home', 'Slide Show', 'Designs', 'About'],
    autoScrolling: true,
    sectionsColor: ['#000000', '#262626', '#22222A', '#262626'],
    navigation: true,
    onLeave: (origin,destination,direction)=> {
        const section = destination.item;
        console.log(section);
        TweenMax.fromTo(section, 1, {opacity: 0.5}, {opacity: 1},'+=700');
    }
});
