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
            wp_enqueue_style('custom', get_template_directory_uri() . '/css/style.min.css', array(), null);

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
        $my_lang = pll_current_language();
        ?>
        <?php if ($my_lang == 'en') : ?>
        <aside class="with-sidebar__aside">
            <div class="with-sidebar__aside-item">
                <img src="<?php bloginfo('template_url'); ?>/img/viagra1.png" alt="">
                <p><b>Medication:</b> Viagra</p>
                <p><b>Active ingredient:</b> Sildenafil</p>
                <p><b>How it works:</b> Viagra is a popular treatment for Erectile Dysfunction that helps to increase blood flow to the penis. It works within 30 minutes and lasts for about 4 hours.</p>
                <p><b>Advantages and disadvantages:</b> Viagra improves a man’s ability to get and maintain an erection when he is already stimulated. It allows the penis to become more firm so that he can enjoy satisfying sex. However, it does not help him get sexually stimulated which means there aren’t any unwanted or embarrassing erections after taking a Viagra pill. However, Viagra should only be used by men who are already healthy. If it is not, Viagra can cause heart attack or even death.</p>
            </div>
            <div class="with-sidebar__aside-item">
                <img src="<?php bloginfo('template_url'); ?>/img/viagra2.png" alt="">
                <p><b>Medication:</b> Viagra Generic</p>
                <p><b>Active ingredient:</b> Sildenafil</p>
                <p><b>How it works:</b> Viagra Generic works exactly the same way as Viagra - it ihelps to increase blood flow to the penis. It works within 30 minutes and lasts for about 4 hours.</p>
                <p><b>Advantages and disadvantages:</b> Viagra Generic has the same active ingredient as branded Viagra and has the same advantages and disadvantages. However, an advantage Viagra Generic has over branded Viagra is that it is often cheaper. Both improve a man’s ability to get and maintain an erection when he is already stimulated. Viagra Generic allows the penis to become more firm so that he can enjoy satisfying sex. However, it does not help him get sexually stimulated which means there aren’t any unwanted or embarrassing erections. Viagra Generic should only be used by men who are already healthy. If it is not, it can cause heart attack or even death.</p>
            </div>
            <div class="with-sidebar__aside-item">
                <img src="<?php bloginfo('template_url'); ?>/img/cialis.png" alt="">
                <p><b>Medication:</b> Cialis</p>
                <p><b>Active ingredient:</b> Tadalafil</p>
                <p><b>How it works:</b> Cialis blocks the chemical responsible for stopping an erection known as PDE5. By blocking this chemical, it allows the arteries in the penis to widen and therefore increase blood flow to the penis. After taking a tablet of Cialis, it only takes about 30 minutes for it to start working.</p>
                <p><b>Advantages and disadvantages:</b> Cialis is a safe and effective treatment that allows men with Erectile Dysfunction to enjoy firmer erections and more satisfactory sex. It works fast - within 20 to 30 minutes and it can be taken daily. Its effects are powerful and can last up to 17-36 hours. Yet because it is so long-lasting, there is greater potential for more side effects or drug interactions. It can also interact negatively with alcohol causing dizziness and low blood pressure.</p>
            </div>
            <div class="with-sidebar__aside-item">
                <img src="<?php bloginfo('template_url'); ?>/img/levitra.png" alt="">
                <p><b>Medication:</b> Levitra</p>
                <p><b>Active ingredient:</b> Vardenafil</p>
                <p><b>How it works:</b> Levitra belongs to the class of medications called PDE5 inhibitors used to treat Erectile Dysfunction. It works by allowing the arteries in the penis to widen, increasing blood flow into the penis. The increased blood flow into the penis results in an erection.</p>
                <p><b>Advantages and disadvantages:</b> Levitra is known to works fast - within 25-60 minutes after its use. It works when a man is already sexually aroused so that it won’t produce a spontaneous and unwanted erection. Its effects can last up to 5 hours and it can be used once daily. It can be taken with or without food but it should not be taken with alcohol as it may increase the potential for adverse effects.</p>
            </div>
        </aside>
        <?php elseif ($my_lang == 'de') : ?>
            <aside class="with-sidebar__aside">
                <div class="with-sidebar__aside-item">
                    <img src="<?php bloginfo('template_url'); ?>/img/viagra1.png" alt="">
                    <p><b>Medikament:</b> Viagra</p>
                    <p><b>Wirkstoff:</b> Sildenafil</p>
                    <p><b>Wie es funktioniert:</b> Viagra ist eine beliebte Behandlung für erektile Dysfunktion, die dazu beiträgt, die Durchblutung des Penis zu erhöhen. Es funktioniert innerhalb von 30 Minuten und dauert etwa 4 Stunden.</p>
                    <p><b>Vorteile und Nachteile:</b> Viagra verbessert die Fähigkeit eines Mannes, eine Erektion zu bekommen und aufrechtzuerhalten, wenn er bereits stimuliert ist. Dadurch kann der Penis fester werden, so dass er befriedigenden Sex genießen kann. Es hilft ihm jedoch nicht, sexuell stimuliert zu werden, was bedeutet, dass nach der Einnahme einer Viagra-Pille keine unerwünschten oder peinlichen Erektionen auftreten. Viagra sollte jedoch nur von Männern angewendet werden, die bereits gesund sind. Ist dies nicht der Fall, kann Viagra einen Herzinfarkt oder sogar den Tod verursachen.</p>
                </div>
                <div class="with-sidebar__aside-item">
                    <img src="<?php bloginfo('template_url'); ?>/img/viagra2.png" alt="">
                    <p><b>Medikament:</b> Viagra Generikum</p>
                    <p><b>Wirkstoff:</b> Sildenafil</p>
                    <p><b>Wie es funktioniert:</b> Viagra Generic funktioniert genauso wie Viagra - es hilft, die Durchblutung des Penis zu erhöhen. Es funktioniert innerhalb von 30 Minuten und dauert etwa 4 Stunden.</p>
                    <p><b>Vorteile und Nachteile:</b> Viagra Generic hat den gleichen Wirkstoff wie Viagra und die gleichen Vor- und Nachteile. Ein Vorteil von Viagra Generic gegenüber Viagra ist jedoch, dass es oft billiger ist. Beide verbessern die Fähigkeit eines Mannes, eine Erektion zu bekommen und aufrechtzuerhalten, wenn er bereits stimuliert ist. Viagra Generic ermöglicht es dem Penis, fester zu werden, so dass er befriedigenden Sex genießen kann. Es hilft ihm jedoch nicht, sexuell stimuliert zu werden, was bedeutet, dass es keine unerwünschten oder peinlichen Erektionen gibt. Viagra Generic sollte nur von Männern angewendet werden, die bereits gesund sind. Ist dies nicht der Fall, kann dies zu Herzinfarkt oder sogar zum Tod führen.</p>
                </div>
                <div class="with-sidebar__aside-item">
                    <img src="<?php bloginfo('template_url'); ?>/img/cialis.png" alt="">
                    <p><b>Medikament:</b> Cialis</p>
                    <p><b>Wirkstoff:</b> Tadalafil</p>
                    <p><b>Wie es funktioniert:</b> Cialis blockiert die Chemikalie, die für das Stoppen einer als PDE5 bekannten Erektion verantwortlich ist. Durch die Blockierung dieser Chemikalie können sich die Arterien im Penis erweitern und somit die Durchblutung des Penis erhöhen. Nach der Einnahme einer Tablette Cialis dauert es nur etwa 30 Minuten, bis die Wirkung einsetzt.</p>
                    <p><b>Vorteile und Nachteile:</b> Cialis ist eine sichere und wirksame Behandlung, die es Männern mit erektiler Dysfunktion ermöglicht, festere Erektionen und zufriedenstellenderen Sex zu genießen. Es funktioniert schnell - innerhalb von 20 bis 30 Minuten und kann täglich eingenommen werden. Seine Wirkung ist stark und kann bis zu 17-36 Stunden dauern. Da es jedoch so langlebig ist, besteht ein größeres Potenzial für mehr Nebenwirkungen oder Wechselwirkungen mit anderen Medikamenten. Es kann auch negativ mit Alkohol interagieren und Schwindel und niedrigen Blutdruck verursachen.</p>
                </div>
                <div class="with-sidebar__aside-item">
                    <img src="<?php bloginfo('template_url'); ?>/img/levitra.png" alt="">
                    <p><b>Medikament:</b> Levitra</p>
                    <p><b>Wirkstoff:</b> Vardenafil</p>
                    <p><b>Wie es funktioniert:</b> Levitra gehört zur Klasse der Medikamente, die als PDE5-Hemmer bezeichnet werden und zur Behandlung der erektilen Dysfunktion eingesetzt werden. Es ermöglicht, dass sich die Arterien im Penis erweitern und der Blutfluss in den Penis erhöht wird. Der erhöhte Blutfluss in den Penis führt zu einer Erektion.</p>
                    <p><b>Vorteile und Nachteile:</b> Levitra wirkt bekanntermaßen schnell - innerhalb von 25-60 Minuten nach seiner Anwendung. Es funktioniert, wenn ein Mann bereits sexuell erregt ist, so dass keine spontane und unerwünschte Erektion entsteht. Seine Wirkung kann bis zu 5 Stunden anhalten und es kann einmal täglich angewendet werden. Es kann mit oder ohne Nahrung eingenommen werden, sollte jedoch nicht mit Alkohol eingenommen werden, da dies das Potenzial für Nebenwirkungen erhöhen kann.</p>
                </div>
            </aside>
        <?php elseif ($my_lang == 'pl') : ?>
            <aside class="with-sidebar__aside">
                <div class="with-sidebar__aside-item">
                    <img src="<?php bloginfo('template_url'); ?>/img/viagra1.png" alt="">
                    <p><b>Lek:</b> Viagra</p>
                    <p><b>Składnik czynny:</b> Sildenafil</p>
                    <p><b>Jak to działa:</b> Viagra to popularny lek na zaburzenia erekcji, który pomaga zwiększyć przepływ krwi do penisa. Działa w ciągu 30 minut i trwa około 4 godzin.</p>
                    <p><b>Zalety i wady:</b> Viagra poprawia zdolność mężczyzny do uzyskania i utrzymania erekcji, gdy jest już pobudzony. Dzięki temu penis staje się bardziej jędrny, dzięki czemu może cieszyć się satysfakcjonującym seksem. Jednak nie pomaga mu to w pobudzeniu seksualnym, co oznacza, że po zażyciu tabletki Viagra nie ma żadnych niechcianych lub krępujących erekcji. Jednak Viagrę powinni stosować tylko mężczyźni, którzy są już zdrowi. Jeśli tak nie jest, Viagra może spowodować zawał serca, a nawet śmierć.</p>
                </div>
                <div class="with-sidebar__aside-item">
                    <img src="<?php bloginfo('template_url'); ?>/img/viagra2.png" alt="">
                    <p><b>Lek:</b> Viagra Generic</p>
                    <p><b>Składnik czynny:</b> Sildenafil</p>
                    <p><b>Jak to działa:</b> Generyczna Viagra działa dokładnie tak samo jak Viagra - pomaga zwiększyć przepływ krwi do penisa. Działa w ciągu 30 minut i trwa około 4 godzin.</p>
                    <p><b>Zalety i wady:</b> Generyczna Viagra ma ten sam aktywny składnik, co markowa Viagra i ma te same zalety i wady. Jednak przewaga generyczna Viagry nad markową Viagrą polega na tym, że często jest tańsza. Obie poprawiają zdolność mężczyzny do uzyskania i utrzymania erekcji, gdy jest już pobudzony. Viagra Generic sprawia, że penis staje się bardziej jędrny, dzięki czemu może cieszyć się satysfakcjonującym seksem. Jednak nie pomaga mu to w pobudzeniu seksualnym, co oznacza, że nie ma żadnych niechcianych lub krępujących erekcji. Viagrę generyczną powinni stosować wyłącznie mężczyźni, którzy są już zdrowi. Jeśli tak nie jest, może spowodować zawał serca, a nawet śmierć.</p>
                </div>
                <div class="with-sidebar__aside-item">
                    <img src="<?php bloginfo('template_url'); ?>/img/cialis.png" alt="">
                    <p><b>Lek:</b> Cialis</p>
                    <p><b>Składnik czynny:</b> Tadalafil</p>
                    <p><b>Jak to działa:</b> Cialis blokuje substancję chemiczną odpowiedzialną za zatrzymanie erekcji znaną jako PDE5. Blokując tę substancję chemiczną, umożliwia rozszerzenie tętnic w penisie, a tym samym zwiększenie przepływu krwi do penisa. Po zażyciu tabletki Cialis zaczyna działać dopiero po około 30 minutach.</p>
                    <p><b>Zalety i wady:</b> Cialis to bezpieczny i skuteczny lek, który pozwala mężczyznom z zaburzeniami erekcji cieszyć się mocniejszymi erekcjami i bardziej satysfakcjonującym seksem. Działa szybko - w ciągu 20 do 30 minut i można go przyjmować codziennie. Jego działanie jest potężne i może trwać do 17-36 godzin. Jednak ponieważ jest tak długotrwały, istnieje większe prawdopodobieństwo wystąpienia większej liczby skutków ubocznych lub interakcji lekowych. Może również negatywnie oddziaływać z alkoholem, powodując zawroty głowy i niskie ciśnienie krwi.</p>
                </div>
                <div class="with-sidebar__aside-item">
                    <img src="<?php bloginfo('template_url'); ?>/img/levitra.png" alt="">
                    <p><b>Lek:</b> Levitra</p>
                    <p><b>Składnik czynny:</b> Vardenafil</p>
                    <p><b>Jak to działa:</b> Levitra należy do klasy leków zwanych inhibitorami PDE5, stosowanych w leczeniu zaburzeń erekcji. Działa, umożliwiając rozszerzenie tętnic w penisie, zwiększając przepływ krwi do penisa. Zwiększony przepływ krwi do penisa powoduje erekcję.</p>
                    <p><b>Zalety i wady:</b> Wiadomo, że Levitra działa szybko - w ciągu 25-60 minut po użyciu. Działa, gdy mężczyzna jest już podniecony seksualnie, aby nie wywołać spontanicznej i niechcianej erekcji. Jego działanie może trwać do 5 godzin i można go stosować raz dziennie. Można go przyjmować z posiłkiem lub bez, ale nie należy go przyjmować z alkoholem, ponieważ może to zwiększyć ryzyko działań niepożądanych.</p>
                </div>
            </aside>
        <?php endif; ?>
<?php
        echo $args['after_widget'];
    }
}