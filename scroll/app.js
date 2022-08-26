new fullpage('#fullpage', {
    anchors: ['home', 'slide', 'collections', 'designs', 'designs2', 'about'],
    navigationTooltips: ['Home', 'Slide Show', 'Collections', 'Designs', 'Designs', 'About'],
    autoScrolling: true,
    sectionsColor: ['#ffffff', '#22222A', '#ffffff', '#FFFFFF', '#292929', '#292929'],
    navigation: true,
    onLeave: (origin,destination,direction)=> {
        const section = destination.item;
        console.log(section);
        TweenMax.fromTo(section, 1, {opacity: 0}, {opacity: 1},'+=700');
    }
});
