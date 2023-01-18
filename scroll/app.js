new fullpage('#fullpage', {
    anchors: ['home', 'slide', 'designs', 'designs2', 'about'],
    navigationTooltips: ['Home', 'About', 'Painting', 'Painting', 'Contact'],
    autoScrolling: true,
    sectionsColor: ['#000000', "#1E1E1E", '#241924', '#212134', '#232323'],
    navigation: true,
    onLeave: (origin,destination,direction)=> {
        const section = destination.item;
        gsap.from("." + section.className.split(" ")[1], {"duration": 0.7, opacity: 0})
    }
});
