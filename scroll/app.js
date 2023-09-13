new fullpage('#fullpage', {
    anchors: ['home', 'Raheleh_Mirheydari', 'painting1', 'painting2', 'about'],
    navigationTooltips: ['Home', 'About', 'Painting1', 'Painting2', 'Contact'],
    autoScrolling: true,
    sectionsColor: ['#000000', "#1E1E1E", '#241924', '#212134', '#111111'],
    navigation: true,
    onLeave: (origin,destination,direction)=> {
        const section = destination.item;
        gsap.from("." + section.className.split(" ")[1], {"duration": 0.7, opacity: 0})
    }
});
