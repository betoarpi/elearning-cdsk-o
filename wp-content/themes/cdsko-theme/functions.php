<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if (!isset($content_width)) {
    $content_width = 660;
}

/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.1-alpha', '<')) {
    require get_template_directory() . '/inc/back-compat.php';
}

if (!function_exists('twentyfifteen_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Twenty Fifteen 1.0
     */
    function twentyfifteen_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on twentyfifteen, use a find and replace
         * to change 'twentyfifteen' to the name of your theme in all the template files
         */
        load_theme_textdomain('twentyfifteen', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(825, 510, true);

        //Custom Thumbnail sizes:
        add_image_size('featured-thumb', 1280);
        add_image_size('news-thumb', 362, 145);

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'twentyfifteen'),
            'social' => __('Social Links Menu', 'twentyfifteen'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));

        /*
         * Enable support for Post Formats.
         *
         * See: https://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ));

        $color_scheme = twentyfifteen_get_color_scheme();
        $default_color = trim($color_scheme[0], '#');

        // Setup the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('twentyfifteen_custom_background_args', array(
            'default-color' => $default_color,
            'default-attachment' => 'fixed',
        )));

        /*
         * This theme styles the visual editor to resemble the theme style,
         * specifically font, colors, icons, and column width.
         */
        add_editor_style(array('css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url()));
    }

endif; // twentyfifteen_setup
add_action('after_setup_theme', 'twentyfifteen_setup');

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_widgets_init() {
    register_sidebar(array(
        'name' => __('Widget Area', 'twentyfifteen'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'twentyfifteen'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Widget Internas'),
        'id' => 'widget-internas',
        'description' => __('Add widgets here to appear in your sidebar.', 'twentyfifteen'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h6 class="MenuInterno-heading hidden-xs"><span class="glyphicon glyphicon-option-vertical hidden-sm"></span>',
        'after_title' => '</h6>',
    ));

    register_sidebar(array(
        'name' => __('Widget Cedesko'),
        'id' => 'widget-cedesko',
        'description' => __('Add widgets here to appear in your sidebar.', 'twentyfifteen'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h6 class="MenuInterno-heading hidden-xs"><span class="glyphicon glyphicon-option-vertical hidden-sm"></span>',
        'after_title' => '</h6>',
    ));

    register_sidebar(array(
        'name' => __('Sidebar Der. Embotelladoras'),
        'id' => 'widget-embotelladoras-der',
        'description' => __('Add widgets here to appear in your sidebar.', 'twentyfifteen'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h6 class="MenuInterno-heading hidden-xs"><span class="glyphicon glyphicon-option-vertical hidden-sm"></span>',
        'after_title' => '</h6>',
    ));

    register_sidebar(array(
        'name' => __('Sidebar Contacto'),
        'id' => 'widget-contacto',
        'description' => __('Add widgets here to appear in your sidebar.', 'twentyfifteen'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h6 class="MenuInterno-heading"><span class="glyphicon glyphicon-option-vertical hidden-sm"></span>',
        'after_title' => '</h6>',
    ));
}

add_action('widgets_init', 'twentyfifteen_widgets_init');

if (!function_exists('twentyfifteen_fonts_url')) :

    /**
     * Register Google fonts for Twenty Fifteen.
     *
     * @since Twenty Fifteen 1.0
     *
     * @return string Google fonts URL for the theme.
     */
    function twentyfifteen_fonts_url() {
        $fonts_url = '';
        $fonts = array();
        $subsets = 'latin,latin-ext';

        /* translators: If there are characters in your language that are not supported by Noto Sans, translate this to 'off'. Do not translate into your own language. */
        if ('off' !== _x('on', 'Noto Sans font: on or off', 'twentyfifteen')) {
            $fonts[] = 'Noto Sans:400italic,700italic,400,700';
        }

        /* translators: If there are characters in your language that are not supported by Noto Serif, translate this to 'off'. Do not translate into your own language. */
        if ('off' !== _x('on', 'Noto Serif font: on or off', 'twentyfifteen')) {
            $fonts[] = 'Noto Serif:400italic,700italic,400,700';
        }

        /* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
        if ('off' !== _x('on', 'Inconsolata font: on or off', 'twentyfifteen')) {
            $fonts[] = 'Inconsolata:400,700';
        }

        /* translators: To add an additional character subset specific to your language, translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language. */
        $subset = _x('no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'twentyfifteen');

        if ('cyrillic' == $subset) {
            $subsets .= ',cyrillic,cyrillic-ext';
        } elseif ('greek' == $subset) {
            $subsets .= ',greek,greek-ext';
        } elseif ('devanagari' == $subset) {
            $subsets .= ',devanagari';
        } elseif ('vietnamese' == $subset) {
            $subsets .= ',vietnamese';
        }

        if ($fonts) {
            $fonts_url = add_query_arg(array(
                'family' => urlencode(implode('|', $fonts)),
                'subset' => urlencode($subsets),
                    ), '//fonts.googleapis.com/css');
        }

        return $fonts_url;
    }

endif;

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_scripts() {
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style('twentyfifteen-fonts', twentyfifteen_fonts_url(), array(), null);

    // Add Genericons, used in the main stylesheet.
    wp_enqueue_style('genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2');

    // Load our main stylesheet.
    wp_enqueue_style('twentyfifteen-style', get_stylesheet_uri());

    // Load the Internet Explorer specific stylesheet.
    wp_enqueue_style('twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array('twentyfifteen-style'), '20141010');
    wp_style_add_data('twentyfifteen-ie', 'conditional', 'lt IE 9');

    // Load the Internet Explorer 7 specific stylesheet.
    wp_enqueue_style('twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array('twentyfifteen-style'), '20141010');
    wp_style_add_data('twentyfifteen-ie7', 'conditional', 'lt IE 8');

    wp_enqueue_script('twentyfifteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    if (is_singular() && wp_attachment_is_image()) {
        wp_enqueue_script('twentyfifteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array('jquery'), '20141010');
    }

    wp_enqueue_script('twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array('jquery'), '20141212', true);
    wp_localize_script('twentyfifteen-script', 'screenReaderText', array(
        'expand' => '<span class="screen-reader-text">' . __('expand child menu', 'twentyfifteen') . '</span>',
        'collapse' => '<span class="screen-reader-text">' . __('collapse child menu', 'twentyfifteen') . '</span>',
    ));
}

add_action('wp_enqueue_scripts', 'twentyfifteen_scripts');

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function twentyfifteen_post_nav_background() {
    if (!is_single()) {
        return;
    }

    $previous = ( is_attachment() ) ? get_post(get_post()->post_parent) : get_adjacent_post(false, '', true);
    $next = get_adjacent_post(false, '', false);
    $css = '';

    if (is_attachment() && 'attachment' == $previous->post_type) {
        return;
    }

    if ($previous && has_post_thumbnail($previous->ID)) {
        $prevthumb = wp_get_attachment_image_src(get_post_thumbnail_id($previous->ID), 'post-thumbnail');
        $css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url($prevthumb[0]) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
    }

    if ($next && has_post_thumbnail($next->ID)) {
        $nextthumb = wp_get_attachment_image_src(get_post_thumbnail_id($next->ID), 'post-thumbnail');
        $css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url($nextthumb[0]) . '); }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
    }

    wp_add_inline_style('twentyfifteen-style', $css);
}

add_action('wp_enqueue_scripts', 'twentyfifteen_post_nav_background');

/**
 * Display descriptions in main navigation.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function twentyfifteen_nav_description($item_output, $item, $depth, $args) {
    if ('primary' == $args->theme_location && $item->description) {
        $item_output = str_replace($args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output);
    }

    return $item_output;
}

add_filter('walker_nav_menu_start_el', 'twentyfifteen_nav_description', 10, 4);

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function twentyfifteen_search_form_modify($html) {
    return str_replace('class="search-submit"', 'class="search-submit screen-reader-text"', $html);
}

add_filter('get_search_form', 'twentyfifteen_search_form_modify');


/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * If Page Is Parent or Child Functionality
 */
function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
    global $post;         // load details about this page
    if (is_page() && ($post->post_parent == $pid || is_page($pid)))
        return true;   // we're at the page or at a sub page
    else
        return false;  // we're elsewhere
}

;

/**
 * Add additional embotelladora field
 */
add_action('show_user_profile', 'embotelladora_profile_field');
add_action('edit_user_profile', 'embotelladora_profile_field');

function embotelladora_profile_field($user) {
    ?>
    <h3>Embotelladora</h3>
    <!--<p>Tu embotelladora actual es: <?php echo esc_attr(get_the_author_meta('embotelladora', $user->ID)); ?></p>-->
    <table class="form-table">
        <tr>
            <td>
                <select name="embotelladora" id="embotelladora">
                    <option value="0" selected>Seleccione una opción</option>
                    <option value="1">Coca-Cola de México</option>
                    <option value="2">Corporación del Fuerte</option>
                    <option value="3">Bebidas Refrescantes de Nogales</option>
                    <option value="4">Corporación RICA</option>
                    <option value="5">Jugos del Valle</option>
                    <option value="6">Arca-Continental</option>
                    <option value="7">Coca-Cola Femsa</option>
                    <option value="8">BEPENSA</option>
                    <option value="9">Embotelladora de Colima</option>
                    <option value="10">Embotelladora del Nayar</option>
                    <option value="11">Industria Envasadora de Querétaro</option>
                    <option value="12">Grupo Yoli</option>
                    <option value="15">CEDESKO</option>
                    <option value="20">Medrenlogic</option>
                    <option value="21">Imer</option>
                    <option value="22">PetStar</option>
                    <option value="23">Laboratorio de Servicios Analíticos</option>
                    <option value="24">Planta de Concentrados</option>
                    <option value="25">Promesa</option>
                    <option value="26">ASCOCA</option>
                    <option value="27">KIOSKO</option>
                    <option value="28">CEDESKO CONSULTORES</option>
                    <option value="29">Llorente y Cuenca</option>
                    <option value="30">The Coca-Cola Company</option>
                    <option value="31">Avangard</option>
                    <option value="32">Santaclara</option>
                </select>
            </td>
        </tr>
    </table>
    <?php
}

add_action('personal_options_update', 'my_save_extra_profile_fields');
add_action('edit_user_profile_update', 'my_save_extra_profile_fields');

function my_save_extra_profile_fields($user_id) {
    if (!current_user_can('edit_user', $user_id))
        return false;
    update_usermeta($user_id, 'embotelladora', $_POST['embotelladora']);
}

/**
 * Add embotelladora field to registration form
 */
add_action('register_form', 'show_first_name_field');
add_action('register_post', 'check_fields', 10, 3);
add_action('user_register', 'register_extra_fields');

function show_first_name_field() {
    ?>
    <script>
        
        
         function ponValores() {
             
             //Coloca los valores en el input de correo
             var dominio = document.getElementById("dominio").value;
             var usuario = document.getElementById("correo_3").value;
             
             //alert(usuario+dominio);
             document.getElementById("user_email").value=usuario+dominio;


             
             
         }
        function verCorreo() {

            //ocultar dominuos
            document.getElementById('coreeo_2').style.display = 'none';

            //Borrado de dominios
            var select = document.getElementById("dominio");
           select.options.length = 0;
           
           //Se optiene el valor de la embotelladora
            var embo = document.getElementById("embotelladora").value;

            //si no es 0 entra   
            if (embo != 0) {

                //Se agregan las opciones que correspondan al dominio segun el valor

                if (embo == 1) {
                    option = document.createElement("OPTION");
                    option.value = "@coca-cola.com";
                    option.text = "@coca-cola.com";
                    select.add(option);
                      
                }

                if (embo == 2) {
                    option = document.createElement("OPTION");
                    option.value = "@brn.com.mx";
                    option.text = "@brn.com.mx";
                    select.add(option);
                }

                if (embo == 3) {
                    option = document.createElement("OPTION");
                    option.value = "@brn.com.mx";
                    option.text = "@brn.com.mx";
                    select.add(option);
                }

                if (embo == 4) {
                    option = document.createElement("OPTION");
                    option.value = "@rica.com.mx";
                    option.text = "@rica.com.mx";
                    select.add(option);
                }

                if (embo == 5) {
                    option = document.createElement("OPTION");
                    option.value = "@jvalle.com.mx";
                    option.text = "@jvalle.com.mx";
                    select.add(option);
                }

                if (embo == 6) {
                    option1 = document.createElement("OPTION");
                    option1.value = "@arcacontal.com";
                    option1.text = "@arcacontal.com";
                    select.add(option1);
                    option2 = document.createElement("OPTION");
                    option2.value = "@emblosaltos.com";
                    option2.text = "@emblosaltos.com";
                    select.add(option2);
                    option = document.createElement("OPTION");
                    option.value = "@embaguascalientes.com";
                    option.text = "@embaguascalientes.com";
                    select.add(option);

                }

                if (embo == 7) {
                  option1 = document.createElement("OPTION");
                    option1.value = "@kof.com.mx";
                    option1.text = "@kof.com.mx";
                    select.add(option1);
                    option2 = document.createElement("OPTION");
                    option2.value = "@cimsacv.com.mx";
                    option2.text = "@cimsacv.com.mx";
                    select.add(option2);
                    option3 = document.createElement("OPTION");
                    option3.value = "@foque.com.mx";
                    option3.text = "@foque.com.mx";
                    select.add(option3);
                    option = document.createElement("OPTION");
                    option.value = "@grupotampico.com";
                    option.text = "@grupotampico.com";
                    select.add(option);
                }
                if (embo == 8) {
                    option = document.createElement("OPTION");
                    option.value = "@bepensa.com";
                    option.text = "@bepensa.com";
                    select.add(option);
                }


                if (embo == 10) {
                    option = document.createElement("OPTION");
                    option.value = "@elnayar.com";
                    option.text = "@elnayar.com";
                    select.add(option);
                }

             

                if (embo == 12) {
                    option = document.createElement("OPTION");
                    option.value = "@coca-cola.com";
                    option.text = "@coca-cola.com";
                    select.add(option);
                }

                if (embo == 13) {
                    option = document.createElement("OPTION");
                    option.value = "@yoli.com.mx";
                    option.text = "@yoli.com.mx";
                    select.add(option);
                }

                if (embo == 14) {
                    option = document.createElement("OPTION");
                    option.value = "@coca-cola.com";
                    option.text = "@coca-cola.com";
                    select.add(option);
                }

                if (embo == 15) {
                    option = document.createElement("OPTION");
                    option.value = "@coca-cola.com";
                    option.text = "@coca-cola.com";
                    select.add(option);
                }

                if (embo == 16) {
                    option = document.createElement("OPTION");
                    option.value = "@foque.com.mx";
                    option.text = "@foque.com.mx";
                    select.add(option);
                }

                if (embo == 17) {
                    option = document.createElement("OPTION");
                    option.value = "@cdf.com.mx";
                    option.text = "@cdf.com.mx";
                    select.add(option);
                }
                if (embo == 20) {
                    option = document.createElement("OPTION");
                    option.value = "@medrenlogic.com.mx";
                    option.text = "@medrenlogic.com.mx";
                    select.add(option);
                }

                if (embo == 18) {
                    option = document.createElement("OPTION");
                    option.value = "@cimsacv.com.mx";
                    option.text = "@cimsacv.com.mx";
                    select.add(option);
                }

                if (embo == 19) {
                    option = document.createElement("OPTION");
                    option.value = "@grupotampico.com";
                    option.text = "@grupotampico.com";
                    select.add(option);
                }

                if (embo == 21) {
                    option = document.createElement("OPTION");
                    option.value = "@imer-mex.com.mx";
                    option.text = "@imer-mex.com.mx";
                    select.add(option);
                }

                

                if (embo == 23) {
                    option = document.createElement("OPTION");
                    option.value = "@coca-cola.com";
                    option.text = "@coca-cola.com";
                    select.add(option);
                }

                if (embo == 24) {
                    option = document.createElement("OPTION");
                    option.value = "@coca-cola.com";
                    option.text = "@coca-cola.com";
                    select.add(option);
                }

                if (embo == 25) {
                    option = document.createElement("OPTION");
                    option.value = "@promesanet.com.mx";
                    option.text = "@promesanet.com.mx";
                    select.add(option);
					option2 = document.createElement("OPTION");
                    option2.value = "@ieqsa.com.mx";
                    option2.text = "@ieqsa.com.mx";
                    select.add(option2);
                }

                if (embo == 26) {
                    option = document.createElement("OPTION");
                    option.value = "@ascoca.com.mx";
                    option.text = "@ascoca.com.mx";
                    select.add(option);
                }

                if (embo == 27) {
                    option = document.createElement("OPTION");
                    option.value = "@mikiosko.mx";
                    option.text = "@mikiosko.mx";
                    select.add(option);
					option2 = document.createElement("OPTION");
                    option2.value = "@gocsa.com.mx";
                    option2.text = "@gocsa.com.mx";
                    select.add(option2);
                }
                if (embo == 28) {
                    option = document.createElement("OPTION");
                    option.value = "@cedesko.com";
                    option.text = "@cedesko.com";
                    select.add(option);
                }

          

                if (embo == 31) {
                    option = document.createElement("OPTION");
                    option.value = "@avangard.com";
                    option.text = "@avangard.com";
                    select.add(option);
					option2 = document.createElement("OPTION");
                    option2.value = "@petstar.mx";
                    option2.text = "@petstar.mx";
                    select.add(option2);
                }

                if (embo == 32) {
                    option = document.createElement("OPTION");
                    option.value = "@santaclara.com.mx";
                    option.text = "@santaclara.com.mx";
                    select.add(option);
                }
				
				   if (embo == 33) {
                    option = document.createElement("OPTION");
                    option.value = "@institutodebebidas.org.mx";
                    option.text = "@institutodebebidas.org.mx";
                    select.add(option);
                }


                //visualiza los campos
                document.getElementById('coreeo_2').style.display = 'block';
                
                ponValores();



            } else {

                //no seleccion embotelladora no despliega campos
                alert("Seleccione una embotelladora");

            }
        }

    </script>

    <p>
        <label>Embotelladora<br/>
            <select name="embotelladora" id="embotelladora" onchange="verCorreo()">
                <option value="0">Seleccione una opción</option>
                <option value="1">Coca-Cola de México</option>
                <option value="2">Corporación del Fuerte</option>
                <option value="3">Bebidas Refrescantes de Nogales</option>
                <option value="4">Corporación RICA</option>
                <option value="5">Jugos del Valle</option>
                <option value="6">Arca-Continental</option>
                <option value="7">Coca-Cola Femsa</option>
                <option value="8">BEPENSA</option>
                <option value="10">Embotelladora del Nayar</option>
                <option value="12">Grupo Yoli</option>
                <option value="15">CEDESKO</option>
                <option value="20">Medrenlogic</option>
                <option value="21">Imer</option>
               
                <option value="23">Laboratorio de Servicios Analíticos</option>
                <option value="24">Planta de Concentrados</option>
                <option value="25">Promesa</option>
                <option value="26">ASCOCA</option>
                <option value="27">KIOSKO</option>
                <option value="28">CEDESKO CONSULTORES</option>
               
            
                <option value="31">Avangard</option>
                <option value="32">Santaclara</option>
				<option value="33">Instituto de Bebidas</option>
            </select>
        </label>
    </p>

    <div id="coreeo_2" style="display: none;">
        <label>Correo Electrónico <br/>
            <input type="text" value="" id="correo_3" name="correo_3" onblur="ponValores()">

            <select name="dominio" id="dominio" onchange="ponValores()">

            </select>

    </div> 



    <?php
}

function check_fields($login, $email, $errors) {
    global $embotelladora;
    if ($_POST['embotelladora'] == '') {
        $errors->add('empty_realname', "<strong>ERROR</strong>: Por favor, elige una embotelladora");
    } else {
        $embotelladora = $_POST['embotelladora'];
    }
}

function register_extra_fields($user_id, $password = "", $meta = array()) {
    update_user_meta($user_id, 'embotelladora', $_POST['embotelladora']);
}
