$(function() {
	// Slider
	$('#slides').superslides({
        inherit_height_from: '#slides',
        animation: 'slide',
        animation_speed: 'normal',
        play: 8000,
        pagination: false
    });

    $('#InnerBanner-img').superslides({
        inherit_height_from: '#InnerBanner-img',
        pagination: false
    });

    $('#ItemSlider').superslides({
        inherit_height_from: '#ItemSlider',
        inherit_width_from: '#ItemSlider',
        pagination: true
    });

    $('#ContentSlides').superslides({
        inherit_height_from: '#ContentSlides',
        inherit_width_from: '#ContentSlides',
        animation: 'slide',
        animation_speed: 'normal',
        play: 8000,
        pagination: true
    });

    // Empresas Del Sistema Toggle
    function toggleMenu(){
    	event.preventDefault();
    	$('.EmpresasSistema-toggle span').toggleClass('glyphicon-menu-down');
    	$('.EmpresasSistema-toggle span').toggleClass('glyphicon-menu-up');
    	$('.EmpresasSistema-list ul').slideToggle();
    }

    $('.EmpresasSistema-toggle').on('click', toggleMenu);

    // Menu Interno Toggle
    function toggleMenu2(){
        event.preventDefault();
        $('.heading-toggle').toggleClass('glyphicon-menu-down');
        $('.heading-toggle').toggleClass('glyphicon-menu-up');
        $('.MenuInterno-list').slideToggle();
    }

    $('.MenuInterno-heading-toggle').on('click', toggleMenu2);

    //TopNav
    function toggleTopNav(){
    	$('.TopNav').slideToggle();
    }

    $('.TopNav-toggle').on('click', toggleTopNav);

    //MainNav
    function toggleMainNav(){
    	$('.MainNav').slideToggle();
    	$(this).toggleClass('active');
    }

    $('.MainNav-toggle').on('click', toggleMainNav);

    //Submenu
    function fSubMenu(){
    	$('.SubMenu').removeClass('active');
    	$(this).parent().children('.SubMenu').toggleClass('active');
    }

    $('.MainNav > li > a ').hover(fSubMenu);

    $('.SubMenu').mouseleave(function(){
    	$('.SubMenu').removeClass('active');
    });

    // var container = document.querySelector('.MainContent-grid');
    // var msnry = new Masonry( container, {
    //   // options
    //   //columnWidth: 200,
    //   itemSelector: '.MainContent-item'
    // });

    $('[data-toggle="tooltip"]').tooltip()
});