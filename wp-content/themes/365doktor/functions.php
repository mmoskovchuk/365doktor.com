<?php

//ADD NO INDEX, NOFOLLOW META TAG
//--------------------------------------------------
function noindex_meta_robots () {
    if (is_paged()) {
        echo "".'<meta name="robots" content="noindex,follow" />'."\n";
    }
}
add_action('wp_head', 'noindex_meta_robots');


//REDIRECTS
//--------------------------------------------------
include_once('redirects.php');

add_action( 'init', 'add_Xrobots_tag' );
function add_Xrobots_tag() {
    if (is_page('')) {
        header('X-Robots-Tag: noindex,nofollow');
    }
}

//ADDING JS AND CSS FILES
//--------------------------------------------------
function ox_adding_scripts() {
    if (!function_exists('is_login_page')) {
        function is_login_page() {
            return !strncmp($_SERVER['REQUEST_URI'], '/wp-login.php', strlen('/wp-login.php'));
        }
    }

    if( !is_admin() && !is_login_page()) {

        /*removed wp-embed.min.js*/
        wp_deregister_script('wp-embed');

        /*jquery*/
        wp_deregister_script('jquery');
        wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"), false, null, true);
        wp_enqueue_script('jquery');

        /*custom js*/
        wp_enqueue_script('custom', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'), null, true);


        $site_data = array(
            'template_url' => get_template_directory_uri()
        );

        wp_localize_script( 'custom', 'site_data', $site_data);

        if (!is_page(array('', ''))) {

            /*custom css*/
            wp_enqueue_style('custom', get_template_directory_uri() . '/css/style.min.css', array(), 5.5);

        }

    }

    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

}

add_action( 'wp_enqueue_scripts', 'ox_adding_scripts' );

//#asyncload
function ox_async_scripts($url) {
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
        return str_replace( '#asyncload', '', $url )."' async='async";
}

add_filter( 'clean_url', 'ox_async_scripts', 11, 1 );

//ADDING CRITICAL CSS (only for front-page)
//--------------------------------------------------
//render-blocking styles
/* $css_files = array(
    'bootstrap',
    'custom'
);

add_action( 'wp_enqueue_scripts', 'ox_adding_critical_css' );

function ox_adding_critical_css() {
    if (!is_front_page()) return;

    global $wp_styles, $css_files;

    if(empty($css_files)) return;

    $registered_styles = $css_files;
    $css_files = array();

    foreach ($registered_styles as $item) {
        $s = $wp_styles->registered[$item]->src;
        $css_files[$item] = $s ;
    }

    $critical_css = load_template_part('css/critical.css');
    echo '<style>' . $critical_css . '</style>';

    global $css_files;

    foreach ($css_files as $key => $item) {
        wp_deregister_style($key);
        echo "<noscript><link rel='stylesheet' href='$item'/></noscript>";
    }

    function hook_non_critical_css() {
        global $css_files;

        foreach ($css_files as $key => $item) {
            echo '<script>function loadCSS(e,t,n){"use strict";var i=window.document.createElement("link");var o=t||window.document.getElementsByTagName("script")[0];i.rel="stylesheet";i.href=e;i.media="only x";o.parentNode.insertBefore(i,o);setTimeout(function(){i.media=n||"all"})}loadCSS("' . $item . '");</script>';
        }
    }

    add_action('wp_footer','hook_non_critical_css');
}

function load_template_part($template_name, $part_name=null) {
    ob_start();
    get_template_part($template_name, $part_name);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
} */

//REWOVE SOME META TAGS AND UNNECESSARY LINKS
//--------------------------------------------------
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10);
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'feed_links', 2 );
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');

//remove wp-json
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

//REMOVE LOGIN-PAGE ERRORS
//--------------------------------------------------
add_filter('login_errors',create_function('$a', "return null;"));

//REGISTRATION MENU
//--------------------------------------------------
register_nav_menus( array(
    'nav' => 'Main menu (header)',
    'footer_popular' => 'POPULAR TREATMENTS (footer)',
    'footer_useful_links' => 'USEFUL LINKS (footer)',
    'footer_legal' => 'LEGAL (footer)',
));

//REGISTRATION SIDEBAR
//--------------------------------------------------
register_sidebar(array(
    'name' => 'Sidebar Treatment Page',
    'id' => 'sidebar_treatment_page',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
));



//ENABLE THUMBNAILS (posts preview img)
//--------------------------------------------------
add_theme_support('post-thumbnails');
set_post_thumbnail_size(400, 260, true);

//ENABLE POSTS PREVIEW
//--------------------------------------------------
function the_truncated_post($symbol_amount) {
    $filtered = strip_tags( preg_replace('@<style[^>]*?>.*?</style>@si', '', preg_replace('@<script[^>]*?>.*?</script>@si', '', apply_filters('the_content', get_the_content()))) );
    echo substr($filtered, 0, strrpos(substr($filtered, 0, $symbol_amount), ' ')) . '...';
}

// AJAX SEARCH
//--------------------------------------------------

function ies_ajax_search(){
    $args = array(
        'post_type'        => 'any',
        'post_status'      => 'publish',
        'order'            => 'DESC',
        'orderby'          => 'date',
        's'                => $_POST['term'],
        'posts_per_page'   => 5
    );
    $query = new WP_Query( $args );
    if($query->have_posts()){
        while ($query->have_posts()) { $query->the_post();?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php the_truncated_post(150);?>
            </li>
        <?php } }else{ ?>
        <li>Нічого не знайдено, спробуйте інший запит</li>
    <?php } exit;
}
add_action('wp_ajax_nopriv_ies_ajax_search','ies_ajax_search');
add_action('wp_ajax_ies_ajax_search','ies_ajax_search');


// POSTVIEWS
//--------------------------------------------------
add_action('wp_head', 'kama_postviews');
function kama_postviews() {

    /* ------------ Настройки -------------- */
    $meta_key       = 'views';  // Ключ мета поля, куда будет записываться количество просмотров.
    $who_count      = 1;            // Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
    $exclude_bots   = 1;            // Исключить ботов, роботов, пауков и прочую нечесть :)? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.

    global $user_ID, $post;
    if(is_singular()) {
        $id = (int)$post->ID;
        static $post_views = false;
        if($post_views) return true; // чтобы 1 раз за поток
        $post_views = (int)get_post_meta($id,$meta_key, true);
        $should_count = false;
        switch( (int)$who_count ) {
            case 0: $should_count = true;
                break;
            case 1:
                if( (int)$user_ID == 0 )
                    $should_count = true;
                break;
            case 2:
                if( (int)$user_ID > 0 )
                    $should_count = true;
                break;
        }
        if( (int)$exclude_bots==1 && $should_count ){
            $useragent = $_SERVER['HTTP_USER_AGENT'];
            $notbot = "Mozilla|Opera"; //Chrome|Safari|Firefox|Netscape - все равны Mozilla
            $bot = "Bot/|robot|Slurp/|yahoo"; //Яндекс иногда как Mozilla представляется
            if ( !preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent) )
                $should_count = false;
        }

        if($should_count)
            if( !update_post_meta($id, $meta_key, ($post_views+1)) ) add_post_meta($id, $meta_key, 1, true);
    }
    return true;
}

// SIDEBAR
//--------------------------------------------------
function sidebar_treatment_page_widget() {
    register_widget( 'sidebar_treatment_page' );
}

add_action( 'widgets_init', 'sidebar_treatment_page_widget' );

class sidebar_treatment_page extends WP_Widget {

    function __construct() {
        parent::__construct(
// widget ID
            'sidebar_treatment_page',
// widget name
            __('Sidebar Treatment Page', ' sidebar_treatment_page_domain'),
// widget description
            array( 'description' => __( 'Sidebar Treatment Page', 'sidebar_treatment_page_domain' ), )
        );
    }
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        echo $args['before_widget'];
//if title is present
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];
//output


        echo $args['after_widget'];
    }
}