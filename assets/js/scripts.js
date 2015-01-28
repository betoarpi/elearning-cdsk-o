$(function() {
	// Slider
	$('#slides').superslides({
        inherit_height_from: '#slides',
        animation: 'slide',
        animation_speed: 'normal',
        play: 8000,
        pagination: false
    });

    // Empresas Del Sistema Toggle
    function toggleMenu(){
    	event.preventDefault();
    	$('.EmpresasSistema-toggle span').toggleClass('glyphicon-menu-down');
    	$('.EmpresasSistema-toggle span').toggleClass('glyphicon-menu-up');
    	$('.EmpresasSistema-list ul').slideToggle();
    }

    $('.EmpresasSistema-toggle').on('click', toggleMenu);

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
});