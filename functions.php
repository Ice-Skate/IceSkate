<?php

//-----массив необходимых триггеров после загрузки

$modalTriggers = [
    'viewOneCity' => 0,
    'viewSelectCity' => 0
];

//---задаем массив поддоменов---

$defaultCity = $_icity = 'Выбрать город';
//$defaultCity = $_city = 'РФ';
$_vcity = '';
$_incity = 'по России';
$_rcity = '';
$_city = 'РФ';
$address = 'любой пункт выдачи СДЭК';
$laty = '';
$long = '';


$sites = [];
$sites['msk'] = [
    'city' => 'Москва',
    'vcity' => ' в Москве',
    'incity' => 'в Москву',
    'rcity' => 'Москвы',
    'address' => 'ул. Маломосковская, 22С1',
    'laty' => '55.8115104',
    'long' => '37.6501653'
];
$sites['spb'] = [
    'city' => 'Санкт-Петербург',
    'vcity' => ' в Санкт-Петербурге',
    'incity' => 'в Санкт-Петербург',
    'rcity' => 'Санкт-Петербурга',
    'address' => 'ул. Алтайская, 21',
    'laty' => '59.8485211',
    'long' => '30.32492'
];
$sites['nsk'] = [
    'city' => 'Новосибирск',
    'vcity' => ' в Новосибирске',
    'incity' => 'в Новосибирск',
    'rcity' => 'Новосибирска',
    'address' => 'ул. Богдана Хмельницкого, 29',
    'laty' => '55.072793',
    'long' => '82.947361'
];
$sites['tumen'] = [
    'city' => 'Тюмень',
    'vcity' => ' в Тюмени',
    'incity' => 'в Тюмень',
    'rcity' => 'Тюмени',
    'address' => 'Воронинские Горки, 101/1',
    'laty' => '57.2026796',
    'long' => '65.440816'
];
$sites['penza'] = [
    'city' => 'Пенза',
    'vcity' => ' в Пензе',
    'incity' => 'в Пензу',
    'rcity' => 'Пензы',
    'address' => 'улица Ставского, 4',
    'laty' => '53.1928323',
    'long' => '44.9996939'
];
$sites['nn'] = [
    'city' => 'Нижний Новгород',
    'vcity' => ' в Нижнем Новгороде',
    'incity' => 'в Нижний Новгород',
    'rcity' => 'Нижнего Новгорода',
    'address' => 'переулок Мотальный, 10А',
    'laty' => '56.2944365',
    'long' => '43.9470035'
];
$sites['omsk'] = [
    'city' => 'Омск',
    'vcity' => ' в Омске',
    'incity' => 'в Омск',
    'rcity' => 'Омска',
    'address' => 'Волочаевская улица, 17А',
    'laty' => '54.996504',
    'long' => '73.353850'
];
$sites['kem'] = [
    'city' => 'Кемерово',
    'vcity' => ' в Кемерово',
    'incity' => 'в Кемерово',
    'rcity' => 'Кемерово',
    'address' => 'Кузнецкий пр-кт, д.91',
    'laty' => '55.337041',
    'long' => '86.061632'
];
$sites['ekb'] = [
    'city' => 'Екатеринбург',
    'vcity' => ' в Екатеринбурге',
    'incity' => 'в Екатеринбург',
    'rcity' => 'Екатеринбурга',
    'address' => 'улица Мельникова, 38',
    'laty' => '56.831728',
    'long' => '60.566716'
];
$sites['samara'] = [
    'city' => 'Самара',
    'vcity' => ' в Самаре',
    'incity' => 'в Самару',
    'rcity' => 'Самары',
    'address' => 'проспект Карла Маркса, 243Б',
    'laty' => '53.220347',
    'long' => '50.199601'
];
$sites['kzn'] = [
    'city' => 'Казань',
    'vcity' => ' в Казани',
    'incity' => 'в Казань',
    'rcity' => 'Казани',
    'address' => 'улица Сибгата Хакима, 17',
    'laty' => '55.817142',
    'long' => '49.122620'
];
$sites['chlb'] = [
    'city' => 'Челябинск',
    'vcity' => ' в Челябинске',
    'incity' => 'в Челябинск',
    'rcity' => 'Челябинска',
    'address' => 'улица Гагарина, 33',
    'laty' => '55.130225',
    'long' => '61.436097'
];
$sites['ufa'] = [
    'city' => 'Уфа',
    'vcity' => ' в Уфе',
    'incity' => 'в Уфу',
    'rcity' => 'Уфы',
    'address' => 'улица 50 лет СССР, 4',
    'laty' => '54.758033',
    'long' => '55.998253'
];
$sites['rnd'] = [
    'city' => 'Ростов-на-Дону',
    'vcity' => ' в Ростове-на-Дону',
    'incity' => 'в Ростов-на-Дону',
    'rcity' => 'Ростова-на-Дону',
    'address' => 'улица Варфоломеева, 264',
    'laty' => '47.232438',
    'long' => '39.711455'
];
$sites['volgograd'] = [
    'city' => 'Волгоград',
    'vcity' => ' в Волгограде',
    'incity' => 'в Волгоград',
    'rcity' => 'Волгограда',
    'address' => 'бульвар 30-летия Победы, 72',
    'laty' => '48.751721',
    'long' => '44.496898'
];
$sites['perm'] = [
    'city' => 'Пермь',
    'vcity' => ' в Перми',
    'incity' => 'в Пермь',
    'rcity' => 'Перми',
    'address' => 'улица Мира, 117',
    'laty' => '57.968152',
    'long' => '56.152646'
];
$sites['krasnoyarsk'] = [
    'city' => 'Красноярск',
    'vcity' => ' в Красноярске',
    'incity' => 'в Красноярск',
    'rcity' => 'Красноярска',
    'address' => 'улица Авиаторов, 21',
    'laty' => '56.041833',
    'long' => '92.922811'
];
$sites['voronezh'] = [
    'city' => 'Воронеж',
    'vcity' => ' в Воронеже',
    'incity' => 'в Воронеж',
    'rcity' => 'Воронежа',
    'address' => 'улица Карла Маркса, 116А',
    'laty' => '51.674595',
    'long' => '39.194170'
];
$sites['krasnodar'] = [
    'city' => 'Краснодар',
    'vcity' => ' в Краснодаре',
    'incity' => 'в Краснодар',
    'rcity' => 'Краснодара',
    'address' => 'улица Соколова, 86к1',
    'laty' => '45.114926',
    'long' => '38.986353'
];
$sites['novokuznetsk'] = [
    'city' => 'Новокузнецк',
    'vcity' => ' в Новокузнецке',
    'incity' => 'в Новокузнецк',
    'rcity' => 'Новокузнецка',
    'address' => 'проспект Металлургов, 53',
    'laty' => '53.768439',
    'long' => '87.117563'
];



if (empty($isSetCity) || $isSetCity !== true) {


    $curCity = [];
    $subdomen = '';

    $_hp = explode('.', $_SERVER['HTTP_HOST']);
    if (count($_hp) == 3 && $_hp[1] == 'ice-skate') {
        $subdomen = $_hp[0];
        if (!empty($sites[$subdomen])) {
            $curCity = $sites[$subdomen];
            $_icity = $_city = $curCity['city'];
            $_vcity = $curCity['vcity'];
            $_incity = $curCity['incity'];
            $_rcity = $curCity['rcity'];
            $address = $curCity['address'];
            $laty = $curCity['laty'];
            $long = $curCity['long'];
        }
    }

//-----определяем текущее местоположение посетителя
    if (function_exists('geoip_detect2_get_info_from_current_ip') && $subdomen == '' && strpos($_SERVER['REQUEST_URI'],
            'import') === false) {
        $geoip = geoip_detect2_get_info_from_current_ip();
        $_city = $geoip->raw['city']['names']['ru'] ?? '';

        //------получаем субдомен----

        $cCity = '';
        if ($_city != '') {
            foreach ($sites as $key => $value) {
                if ($value['city'] == $_city) {
                    $cCity = $key;
                    break;
                }
            }
        }

        $cookieCity = $_COOKIE['city'] ?? '--';

        if ($_city != '' && $cCity == '') { //-----если не нашли города--
            //------что-то делаем---
        } elseif ($cCity != $subdomen) { //-----город найден, но домен другой
            //--ничего не делаем---
        }


        $isBot = false;
        if(stripos($_SERVER['HTTP_USER_AGENT'], 'Yandex') !== false || stripos($_SERVER['HTTP_USER_AGENT'], 'Google') ){
            $isBot = true;
        }

        //---если БОТ, то ничего не делаем-----

        if (!$isBot) {

            //------если кука пуста, а город найден и не Россия----
            if ($cookieCity == '--'){
                if ($cCity != '') {
                    $modalTriggers['viewOneCity'] = 1;
                } elseif ($_city != '' && $cCity == '') {
                    $modalTriggers['viewSelectCity'] = 1;
                }
            }



            if ($cCity != '' && $subdomen != $cCity) {
                if ($cookieCity == '--') {
                    setcookie('city', $cCity, 72000000000, '/', 'ice-skate.online');
                    $reurl = 'https://' . $cCity . '.ice-skate.online' . $_SERVER['REQUEST_URI'];
                    header('Location: ' . $reurl, true, 302);
                    exit();
                }
            }
        }


    }

//----заменяем географические шаблоны в полном контенте страницы--
    function replace_cityinfo($content)
    {
        global $_city, $_vcity, $_incity, $_rcity, $_icity, $address, $laty, $long, $post;

        if ($_vcity != '') {
            $content .= getLocalBussines();
        }
        $content .= getModals();

        $replace = array(
            '{CITY}' => $_city,
            '{VCITY}' => $_vcity,
            '{INCITY}' => $_incity,
            '{RCITY}' => $_rcity,
            '{ICITY}' => $_icity,
            '{ADDRESS}' => $address,
            '{LATY}' => $laty,
            '{LONG}' => $long
        );
        
        if (is_product()) {
            $replace['</h1>'] = '</h1><div class="after-h1"> купить с доставкой ' . $_incity . '</div>';
        }
        
        return str_replace(array_keys($replace), $replace, $content);
    }

    function callback($buffer)
    {
        return replace_cityinfo($buffer);
    }

    add_filter('the_content', 'setVCity');
    function setVCity($content)
    {
        global $_city, $_vcity, $_incity, $_rcity, $_icity, $address, $laty, $long, $post;
        $replace = array(
            '{CITY}' => $_city,
            '{VCITY}' => $_vcity,
            '{INCITY}' => $_incity,
            '{RCITY}' => $_rcity,
            '{ICITY}' => $_icity,
            '{ADDRESS}' => $address,
            '{LATY}' => $laty,
            '{LONG}' => $long
        );
        $content = str_replace(array_keys($replace), $replace, $content);

        if (is_product() && $_city != '') {
            $content .= '<h2><font size="3">' . $post->post_title . ' с быстрой и недорогой доставкой ' . $_incity . '</font></h2>';
            $content .= '<p>Интернет-магазин хоккейной атрибутики и экипировки Ice-Skate осуществляет доставку товаров ' . $_incity . '.<br>Товар ' . $post->post_title  . ' будет отправлен в ваш город по тарифам компании СДЭК. Стоимость и сроки доставки определятся в корзине автоматически.<br>Доставка до города ' . $_city . ' осуществляется бесплатно при покупке от 5000 рублей.<br>Если в вашем городе нет СДЭК, то отправим любой другой транспортной компанией или почтой РФ наложенным платежом. Для этого в корзине выберите "Другой способ доставки".</p>';
          //  $content .= '<p>Для доставки в город <b>' . $_city . '</b> можно выбрать любой пункт выдачи СДЭК.</p>';
        }

        return $content;
    }

    remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );

    function setvcity_woocommerce_taxonomy_archive_description()
    {
        global $_city, $_vcity, $_incity, $_rcity, $_icity, $address, $laty, $long;

        $replace = array(
            '{CITY}' => $_city,
            '{VCITY}' => $_vcity,
            '{INCITY}' => $_incity,
            '{RCITY}' => $_rcity,
            '{ICITY}' => $_icity,
            '{ADDRESS}' => $address,
            '{LATY}' => $laty,
            '{LONG}' => $long
        );
        if (is_tax(array('product_cat', 'product_tag'))) {
            if (get_query_var('paged') <= 1) {
                $description = term_description();
            } else {
                $description = '';
            }
            echo str_replace(array_keys($replace), $replace, $description);
        }
    }

    add_action('woocommerce_archive_description', 'setvcity_woocommerce_taxonomy_archive_description');


//----установка описания для пустых категорий--
    add_action('woocommerce_after_shop_loop', 'addDescriptionWhereEmptyDescription');
    function addDescriptionWhereEmptyDescription()
    {
        global $_city, $_vcity, $_incity;
        $cat_id = get_queried_object()->term_id;
        $prod_term = get_term($cat_id, 'product_cat');
        if ($prod_term->description == ''  && 0 === absint(get_query_var('paged'))) {

            if (is_shop()) {
                echo '<div class="woo-sc-box normal rounded full">';
                $content = '<p>Каталог товаров для хоккея в интернет-магазине хоккейного инвентаря и экипировки Ice-Skate ' . $_vcity . ' по низким ценам с доставкой по всей России. В наличии профессиональные товары и оборудование и форма для тренировок. Для детей и взрослых. Играйте в хоккей с удовольствием и товарами от Ice-Skate.</p>';
                $content .= '<h2>Доставка товаров для хоккея ' . $_incity . ' из интернет-магазина</h2>';
                $content .= '<p>Доставка осуществляется транспортной компанией по терминала или по адресу доставки по всей РФ. Информация по стоимости и срокам доставки, о возврате, о покупках, рассрочке и гарантии на товары для хоккея, а также по другим частым вопросам по <a href="/faqs/">ссылке</a>.</p>';
                echo apply_filters('the_content', $content);
                echo '</div>';
            } else {

                echo '<div class="woo-sc-box normal rounded full">';
                $content = '<p>Товары ' . $prod_term->name . ' по низким ценам в хоккейном интернет-магазине' . $_vcity . '.<br>В наличии качественная спортивная продукция с гарантией от известных мировых и отечественных производителей.</p>';
                $content .= '<h2><font size="3">Доставка товаров для хоккея категории &laquo;' . $prod_term->name . '&raquo; ' . $_incity . ' из интернет-магазина</font></h2>';
                $content .= '<p>Доставка осуществляется транспортной компанией до пункта выдачи или по адресу доставки по всей РФ.<br>Бесплатная доставка до города ' . $_city . ' возможна от 5000 руб.<br>Информация по доставке и возврату, о рассрочке и гарантии на товары для хоккея категории "' . $prod_term->name . '", а также по другим вопросам по <a href="/faqs/">ссылке</a>.</p>';
                echo apply_filters('the_content', $content);
                echo '</div>';
            }

        } else {
            //echo setVCity($prod_term->description);
        }

    }

//----добавляем текст под h1
    //add_action( 'woocommerce_after_shop_loop_item_title', 'wp_kama_woocommerce_after_shop_loop_item_title_action' );

    function afterH1(){
        global $_vcity;

        if ($_vcity != '') {
            echo '<div class="after-h1">со склада ' . $_vcity . '</div>';
        }
    }

//----функция буферизации всего контента
    function buffer_start()
    {
        ob_start("callback");
    }

//----функция окончания буферизации всего контента
    function buffer_end()
    {
        ob_end_flush();
    }

//----запускаем буферизацию
    add_action('wp_head', 'buffer_start');
    add_action('wp_footer', 'buffer_end');


    /**
     * Добавляем свой стилевой файл
     */
    function woodmart_child_enqueue_styles()
    {
        wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('woodmart-style'),
            woodmart_get_theme_info('Version'));
    }

    add_action('wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 10010);

    wp_enqueue_script( 'wd-waypoints-library' );

//1. Сортировка по наличию товаров (отстутствующие в конец списка)
    //Код с одного сайта (не работает)
/*    class iWC_Orderby_Stock_Status
    {
        public function __construct()
        {
            // Check if WooCommerce is active
            if (in_array('woocommerce/woocommerce.php',
                apply_filters('active_plugins', get_option('active_plugins')))) {
                add_filter('posts_clauses', array($this, 'order_by_stock_status'), 2000);
            }
        }

        public function order_by_stock_status($posts_clauses)
        {
            global $wpdb;
            // only change query on WooCommerce loops
            if (is_woocommerce() && (is_shop() || is_product_category() || is_product_tag())) {
                $posts_clauses['join'] .= " INNER JOIN $wpdb->postmeta istockstatus ON ($wpdb->posts.ID = istockstatus.post_id) ";
                $posts_clauses['orderby'] = " istockstatus.meta_value ASC, " . $posts_clauses['orderby'];
                $posts_clauses['where'] = " AND istockstatus.meta_key = '_stock_status' AND istockstatus.meta_value <> '' " . $posts_clauses['where'];
            }
            return $posts_clauses;
        }
    }

    new iWC_Orderby_Stock_Status; */
    
    
//Код с другого сайта (не работает)    
/*    if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    add_filter('posts_clauses', 'order_by_stock_status', 2000);
    }

    function order_by_stock_status($posts_clauses) {
    global $wpdb;
  
    if (is_woocommerce() && (is_shop() || is_product_category() || is_product_tag())) {
	$posts_clauses['join'] .= " INNER JOIN $wpdb->postmeta istockstatus ON ($wpdb->posts.ID = istockstatus.post_id) ";
	$posts_clauses['orderby'] = " istockstatus.meta_value ASC, " . $posts_clauses['orderby'];
	$posts_clauses['where'] = " AND istockstatus.meta_key = '_stock_status' AND istockstatus.meta_value <> '' " . $posts_clauses['where'];
        }
	return $posts_clauses;
    }    */
    
    /**
 * Переместить отсутствующие товары в конец списка в каталоге WooCommerce.
 */
    function move_out_of_stock_products_to_end( $query ) {
    if ( $query->is_main_query() && is_shop() && ! is_admin() ) {
        $query->set( 'meta_key', '_stock_status' );
        $query->set( 'orderby', array( 'meta_value' => 'ASC', 'title' => 'ASC' ) );
        $query->set( 'order', 'ASC' );
        }
    }
    add_action( 'pre_get_posts', 'move_out_of_stock_products_to_end' );


//2. Добавляем код, чтобы не отображались отсутствующие товары в рекомендуемых
    add_filter('woocommerce_related_products', 'mysite_filter_related_products', 10, 1);
    function mysite_filter_related_products($related_product_ids)
    {
        foreach ($related_product_ids as $key => $value) {
            $relatedProduct = wc_get_product($value);
            if (!$relatedProduct->is_in_stock()) {
                unset($related_product_ids["$key"]);
            }
        }
        return $related_product_ids;
    }

//3. Убираем лишние строки при заказе
    add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
// Our hooked in function - $fields is passed via the filter!
    function custom_override_checkout_fields($fields)
    {
//unset($fields['billing']['billing_company']); // удаляем Название компании
        unset($fields['billing']['billing_address_1']); // удаляем поле Адрес
        unset($fields['billing']['billing_postcode']); // удаляем Индекс
        unset($fields['billing']['billing_state']); // удаляем Область
        //unset($fields['billing']['billing_city']); // удаляем Населённый пункт
//unset($fields['billing']['billing_country']); // удаляем поле Страна
//unset($fields['billing']['billing_address_2']); // удаляем второе поле Адрес
//$fields['billing']['billing_city']['label'] = 'Выберите город'; // меняем название поля Город !!! Не получилось, т.к. что-то изменяет форму дальше при загрузке.
//$fields['billing']['billing_address_1']['label'] = 'Номер отделения Новой Почты'; // меняем Адрес
//$fields['billing']['billing_address_1']['placeholder'] = ' '; // в поле Адрес оставляем пустым
        return $fields;
    }


    add_filter('gutenberg_use_widgets_block_editor', '__return_false');
    add_filter('use_widgets_block_editor', '__return_false');

    if (!function_exists('mb_ucfirst') && extension_loaded('mbstring')) {
        /**
         * mb_ucfirst - преобразует первый символ в верхний регистр
         * @param string $str - строка
         * @param string $encoding - кодировка, по-умолчанию UTF-8
         * @return string
         */
        function mb_ucfirst($str, $encoding = 'UTF-8')
        {
            $str = mb_ereg_replace('^[\ ]+', '', $str);
            $str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding) .
                mb_substr($str, 1, mb_strlen($str), $encoding);
            return $str;
        }
    }

//----проверка мобильного устройства
    function check_mobile_device()
    {
        $mobile_agents = array(
            'ipad',
            'iphone',
            'android',
            'pocket',
            'palm',
            'windows ce',
            'windowsce',
            'cellphone',
            'opera mobi',
            'ipod',
            'small',
            'sharp',
            'sonyericsson',
            'symbian',
            'opera mini',
            'nokia',
            'htc_',
            'samsung',
            'motorola',
            'smartphone',
            'blackberry',
            'playstation portable',
            'tablet browser'
        );
        $uagent = strtolower($_SERVER['HTTP_USER_AGENT']);
        foreach ($mobile_agents as $value) {
            if (strpos($uagent, $value) !== false) {
                return true;
            }
        }
        return false;
    }//check_mobile_device

//-----вывод окончания для часов работы
    function endHour($dh)
    {
        if ($dh == 1) {
            return 'час';
        }
        if ($dh <= 4) {
            return 'часа';
        } else {
            return 'часов';
        }
    }


    add_filter( 'wpseo_opengraph_title', 'change_opengraph_title' );

    function change_opengraph_title( $title ) {
        global $curCity, $_city, $_vcity, $_incity, $_rcity, $_icity, $address, $laty, $long;
        if (!empty($curCity) && is_front_page()) {
            $title .= ' | ' . $curCity['city'];
        }

        $replace = array(
            '{CITY}' => $_city,
            '{VCITY}' => $_vcity,
            '{INCITY}' => $_incity,
            '{RCITY}' => $_rcity,
            '{ICITY}' => $_icity,
            '{ADDRESS}' => $address,
            '{LATY}' => $laty,
            '{LONG}' => $long
        );
        $title = str_replace(array_keys($replace), $replace, $title);
        return mb_ucfirst($title);
    }

    add_filter( 'wpseo_opengraph_desc', 'wpseo_opengraph_desc' );

    function wpseo_opengraph_desc( $desc ) {
        global $curCity, $_city, $_vcity, $_incity, $_rcity, $_icity, $address, $laty, $long;

        $replace = array(
            '{CITY}' => $_city,
            '{VCITY}' => $_vcity,
            '{INCITY}' => $_incity,
            '{RCITY}' => $_rcity,
            '{ICITY}' => $_icity,
            '{ADDRESS}' => $address,
            '{LATY}' => $laty,
            '{LONG}' => $long
        );
        $desc = str_replace(array_keys($replace), $replace, $desc);
        return mb_ucfirst($desc);
    }

//-------переопределяем Title

    function setFilterTitle($title)
    {
        global $curCity, $_city, $_vcity, $_incity, $_rcity, $_icity, $address, $laty, $long;
        if (!empty($curCity) && is_front_page()) {
            $title .= ' | ' . $curCity['city'];
        }

        $replace = array(
            '{CITY}' => $_city,
            '{VCITY}' => $_vcity,
            '{INCITY}' => $_incity,
            '{RCITY}' => $_rcity,
            '{ICITY}' => $_icity,
            '{ADDRESS}' => $address,
            '{LATY}' => $laty,
            '{LONG}' => $long
        );
        $title = str_replace(array_keys($replace), $replace, $title);

     /*   if (is_product() && strpos($title, 'Бейсболка') !== false) {
            $bTitle = setTitle4Bejsbolka();
            if ($bTitle != '') {
                $title = $bTitle;
            }
        } */

        return mb_ucfirst($title);
    }// setFilterTitle
    add_filter('wpseo_title', 'setFilterTitle', 20);

    function woodmart_get_document_title() {
        $title = wp_get_document_title();

        $post_meta = get_post_meta( woodmart_get_the_ID(), '_yoast_wpseo_title', true );
        if ( property_exists( get_queried_object(), 'term_id' ) && function_exists( 'YoastSEO' ) ) {
            $taxonomy_helper = YoastSEO()->helpers->taxonomy;
            $meta            = $taxonomy_helper->get_term_meta( get_queried_object() );

            if ( isset( $meta['wpseo_title'] ) && $meta['wpseo_title'] ) {
                $title = wpseo_replace_vars( $meta['wpseo_title'], get_queried_object() );
            }
        } elseif ( $post_meta && function_exists( 'wpseo_replace_vars' ) ) {
            $title = wpseo_replace_vars( $post_meta, get_post( woodmart_get_the_ID() ) );
        }

        return setFilterTitle($title);
    }

//------переопределяем meta-description
    function setFilterMetaDesc($metadesc)
    {
        global $_city, $_vcity, $_incity, $_rcity, $_icity, $address, $laty, $long;

        $replace = array(
            '{CITY}' => $_city,
            '{VCITY}' => $_vcity,
            '{INCITY}' => $_incity,
            '{RCITY}' => $_rcity,
            '{ICITY}' => $_icity,
            '{ADDRESS}' => $address,
            '{LATY}' => $laty,
            '{LONG}' => $long
        );
        $metadesc = str_replace(array_keys($replace), $replace, $metadesc);


        return mb_ucfirst($metadesc);
    }// setFilterMetaDesc
    add_filter('wpseo_metadesc', 'setFilterMetaDesc', PHP_INT_MAX, 1);

//------переопределяем H1
    function setFilterH1($title = '')
    {
        return mb_ucfirst($title);

    }// setFilterH1

//--- добавляем JS в head
    add_action('wp_head', 'hook_javascript');
    function hook_javascript()
    {
        echo "<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-117092829-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117092829-1');
</script>
";
    }

//---добавляем JS в footer
    add_action('wp_footer', 'common_js');
    function common_js()
    {
        global $sites;
        echo '<script> var sites = []; ';
        foreach ($sites as $key => $value) {
            echo ' sites["' . $value['city'] . '"] = "' . $key . '";';
        }
        echo '</script>';
        echo '<script src="/wp-content/themes/woodmart-child/custom.js"></script>';
    }

//----добавляем новый размер картинок
    add_image_size('product_4main', 268, 268, 1);
    /*add_action( 'woocommerce_single_product_summary', 'change_generate_product_data');
    function change_generate_product_data() {
    global $product;
        $image = wp_get_attachment_url( $product->get_image_id() );
        if ( $product->get_sku() ) {
            $sku = $product->get_sku();
        } else {
            $sku = $product->get_id();
        }

        echo '<s' . 'cript type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "' . wp_kses_post( $product->get_name() ) . '",
            "image": [
                "' . $image . '"
            ],
            "description": "",
            "sku": "' . $sku . '",
            "brand": {
                "@type": "Thing",
                "name": ""
            },
            "review": {
                "@type": "Review",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "5",
                    "bestRating": "5"
                },
                "author": {
                    "@type": "Person",
                    "name": "guest"
                }
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "5",
                "reviewCount": "1"
            },
            "offers": {
                "@type": "Offer",
                "url": "' . get_permalink( $product->get_id() ) . '",
                "priceCurrency": "RUB",
                "price": "' . wc_format_decimal( $product->get_price(), wc_get_price_decimals() ) . '",
                "itemCondition": "https://schema.org/UsedCondition",
                "availability": "https://schema.org/InStock",
                "seller": {
                    "@type": "Organization",
                    "name": "Интернет магазин Ice-Skate"
                },
                "priceValidUntil": "' . date('Y-m-d', strtotime('+100 day')) . '"
            }
        }
    </s' . 'cript>';
    }
    */

//---установка canonical для страниц пагинации--
    function canonical_for_comments()
    {
        global $cpage, $post;
        if ($cpage > 1) :
            echo "\n";
            echo "<link rel='canonical' href='";
            echo get_permalink($post->ID);
            echo "' />\n";
        endif;
    }

//-----микроразметка LocalBussines
    function getLocalBussines()
    {
        return '<script type="application/ld+json">{"@context": "https://schema.org",
        "@type": "LocalBusiness",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "Россия",
            "addressLocality": "{CITY}",
            "streetAddress": "{ADDRESS}"
        },
        "description": "Товары для хоккея с доставкой {VCITY}",
        "name": "Хоккейный магазин Ice-Skate",
        "telephone": "8 (800) 600-65-98",
        "email": "sale@ice-skate.online"
    }</script>';
    }

    add_action('wp_head', 'canonical_for_comments');

//---удаление лишних тегов в head--
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('template_redirect', 'rest_output_link_header', 11, 0);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    /*add_action( 'woocommerce_saved_order_items', 'setProductsCountAfterOrder', 100, 2 );
    function setProductsCountAfterOrder( $order_id, $items ) {
        mail('local@seo28.ru', 'setProductsCountAfterOrder', 'order_id = ' . $order_id . ' - ' . json_encode( $items ));
    }*/
    /*
    function setProductCountAfterOrder($product_id){
        global $wpdb;

        $blog_id = get_current_blog_id();
        $blogStr = '';

        if ($blog_id != 1) {
            $blogStr = '_' . $blog_id;
        }

        $data = $wpdb->get_results( "SELECT blog_id FROM wp_blogs where domain LIKE '%.ice-skate.online' AND blog_id <> " . $blog_id );

        if ($blog_id != 1) {
            $sql = "UPDATE wp_postmeta wp JOIN wp" . $blogStr . "_postmeta wp2 on wp2.post_id = wp.post_id AND wp2.meta_key = wp.meta_key set wp.meta_value = wp2.meta_value WHERE wp2.post_id = " . $product_id . " and wp.meta_key = '_stock'";
            $result = $wpdb->query(trim($sql));
        }

        foreach($data as $site) {
            $sql = "UPDATE wp_" . $site->blog_id . "_postmeta wp JOIN wp" . $blogStr . "_postmeta wp2 on wp2.post_id = wp.post_id AND wp2.meta_key = wp.meta_key set wp.meta_value = wp2.meta_value WHERE wp2.post_id = " . $product_id . " and wp.meta_key = '_stock'";
            $result = $wpdb->query(trim($sql));
        }

    }
    */
//----- не используется, был для замены путей картинок на поддоменах на URL основного домена
    add_filter('wp_get_attachment_image', 'setOneDomainPathForAttachmentImage', 99999999999999999, 5);
    function setOneDomainPathForAttachmentImage($html, $attachment_id, $size, $icon, $attr)
    {
        return $html;
    }

//----создание прелоадеров для пустых картинок
    add_filter('vc_wpb_getimagesize', 'woodmart_lazy_attachment_replaceOneDomain', 30, 3);
    function woodmart_lazy_attachment_replaceOneDomain($img, $attach_id, $params)
    {

        if (strpos($img['thumbnail'], 'src=""') !== false) {
            $img['thumbnail'] = wp_get_attachment_image($attach_id, $params['thumb_size']);
        }

        return $img;
    }

//----используется для добавления HTML кода и скриптов к контенту
//---в данном случае включает механизм автоматического заполнения Населенного пункта при оформлении заказа

    function getModals()
    {
        global $sites, $_city, $curCity, $subdomen, $defaultCity, $modalTriggers;

        $ret = '';

        $varCity = $_city;

        if ($_city == '') {
            $varCity = $defaultCity;
        }

//Подстановка города в момент оформления заказа
       /* if (is_checkout()) {
            $ret .= '<s' . 'cript> 
        $ = jQuery;
        $(document).ready(function(){
            if ($("#billing_city").val() == "") {
              $("#billing_city").focus();  
              $("#billing_city").val("' . $varCity . '");  
              $("#billing_city").trigger("blur");
            }
        });
        </s' . 'cript>';
        } */
        
//Диалоговое окно выбора города из списка
/*
        $ret .= '<div class="hidden">';
        $ret .= '<div class="select-city modal" id="select-one-city">
                    <div class="modal-caption">Ваш город <strong>' . $_city . '</strong>, верно?</div>
                    <div class="modal-buttons">
                        <div class="row">
                            <div class="col-md-5 col-5 text-center"><a class="fancy btn" href="#select-city">Нет</a></div>
                            <div class="col-md-7 col-7 text-center"><a class="js-select-city btn btn-blue" data-subdomen="' . $subdomen . '" href="https://' . $subdomen . '.ice-skate.online' . $_SERVER['REQUEST_URI'] . '">Да, верно!</a></div>
                        </div>
                    </div>
                 </div>';

        $ret .= '<div class="select-city modal" id="select-city"><div class="modal-caption">Выберите ваш город из списка</div><div class="modal-content city-list">';
        $ret .= '<div class="city-item"><a class="js-select-city" data-subdomen="" href="https://ice-skate.online">' . $defaultCity . '</a></div>';
        foreach ($sites as $key => $value) {
            $ret .= '<div class="city-item"><a class="js-select-city" data-subdomen="' . $key . '" href="https://' . $key . '.ice-skate.online' . $_SERVER['REQUEST_URI'] . '">' . $value['city'] . '</a></div>';
        }

        $ret .= '</div>';
        $ret .= '</div>';
        $ret .= '<a id="select-city-link" class="fancy" href="#select-city">---------</a>';
        $ret .= '<a id="select-one-city" class="fancy" href="#select-one-city">---------</a>';

        $ret .= '</div>';

        $ret .= '
        <s' . 'cript>
                var viewOneCity = ' . $modalTriggers['viewOneCity'] . ';
                var viewSelectCity = ' . $modalTriggers['viewSelectCity'] . ';
                </s' . 'cript>
                ';

        return $ret; */
    }
    

//----замена первого элемента HOME в хлебных крошках
    add_filter('woocommerce_breadcrumb_defaults', 'jk_change_breadcrumb_home_text');
    function jk_change_breadcrumb_home_text($defaults)
    {
// Изменяем текст для главной страницы с 'Главная' на 'Хоккейный магазин'
        $defaults['home'] = 'Хоккейный магазин';
        return $defaults;
    }

    /*function wpcourses_remove_yoast_jsonld( $data ){
        $data = array();
        return $data;
    }
    add_filter( 'wpseo_json_ld_output', 'wpcourses_remove_yoast_jsonld', 10, 1 );*/

//-----вызывается перед сохранением заказа
    add_action('woocommerce_before_order_object_save', 'setLastPostId', 40, 2);
    function setLastPostId($that, $data_store)
    {
        global $subdomen, $wpdb;

        $blog_id = get_current_blog_id();

        if ($blog_id == 1) {
            return;
        }

        //-----получаем данные по max для posts основного сайта---

        $maxId = 0;

        $sql = "SELECT MAX(ID) as maxId FROM wp_posts";
        $_posts = $wpdb->get_results($sql);
        foreach ($_posts as $_post) {
            $maxId = $_post->maxId;
            break;
        }

        $maxBlogId = 0;
        $sql = "SELECT MAX(ID) as maxId FROM wp_" . $blog_id . "_posts";
        $_posts = $wpdb->get_results($sql);
        foreach ($_posts as $_post) {
            $maxBlogId = $_post->maxId;
            break;
        }

        if ($maxBlogId != $maxId) {
            //-----добавляем запись в post

            if ($maxBlogId > $maxId) {

                $sql = "INSERT INTO wp_posts (ID,post_title,post_content,post_status,post_autor,post_type) 
            VALUES(" . $maxBlogId . ", 'test-add-order', 'test-add-order-content', 'publish', 1, 'shop_order')";
                $wpdb->query($sql);
                $newID = $wpdb->insert_id;
                $sql = "ALTER TABLE wp_posts AUTO_INCREMENT = " . ($maxBlogId + 1);
                $wpdb->query($sql);

                /*$sql = "DELETE FROM wp_" . $blog_id . "_posts WHERE ID >" . $maxId;
                $wpdb->query($sql);
                $sql = "ALTER TABLE wp_" . $blog_id . "_posts AUTO_INCREMENT = " . ($maxId + 1);
                $wpdb->query($sql);

                $sql = "DELETE FROM wp_" . $blog_id . "_woocommerce_order_items WHERE order_id > " . $maxId;
                $wpdb->query($sql);*/

            } else {
                $sql = "INSERT INTO wp_" . $blog_id . "_posts (ID,post_title,post_content,post_status,post_autor,post_type) 
            VALUES(" . $maxId . ", 'test-add-order', 'test-add-order-content', 'publish', 1, 'shop_order')";
                $wpdb->query($sql);
                $newID = $wpdb->insert_id;
                $sql = "ALTER TABLE wp_" . $blog_id . "_posts AUTO_INCREMENT = " . ($maxId + 1);
                $wpdb->query($sql);
            }

        }

    }

//------функция добавления заказа на основной сайт
    function addOrderToMain($order_id)
    {
        global $subdomen, $wpdb;
        if (!$order_id) {
            return;
        }
        $blog_id = get_current_blog_id();
        if ($blog_id == 1) {
            return;
        }

        //$order = wc_get_order( $order_id );

        $sql = 'INSERT INTO wp_posts (post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
            SELECT post_author, post_date, post_date_gmt, post_content, concat("' . $subdomen . '-' . $order_id . '. ",post_title), post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count
            FROM wp_' . $blog_id . '_posts
            WHERE ID = ' . $order_id;

        $wpdb->query($sql);
        $newID = $wpdb->insert_id;

        if ($newID && (int)$newID > 0) {

            $sql = 'INSERT INTO wp_postmeta (post_id, meta_key,meta_value) SELECT ' . $newID . ',meta_key,meta_value FROM wp_' . $blog_id . '_postmeta WHERE post_id = ' . $order_id;
            $wpdb->query($sql);


            //---wp_wc_order_stats---
            $sql = 'INSERT INTO wp_wc_order_stats (
            order_id,
            parent_id,
            date_created,
            date_created_gmt,
            num_items_sold,
            total_sales,
            tax_total,
            shipping_total,
            net_total,
            returning_customer,
            status,
            customer_id
         ) SELECT ' . $newID . ',
            parent_id,
            date_created,
            date_created_gmt,
            num_items_sold,
            total_sales,
            tax_total,
            shipping_total,
            net_total,
            returning_customer,
            status,
            customer_id
        FROM wp_' . $blog_id . '_wc_order_stats
        WHERE order_id = ' . $order_id;
            $wpdb->query($sql);


            //----wp_woocommerce_order_items

            $items = $wpdb->get_results("SELECT * FROM wp_" . $blog_id . "_woocommerce_order_items WHERE order_id = " . $order_id);
            $order_items = [];
            foreach ($items as $item) {
                $order_item_id = $item->order_item_id;

                $sql = 'INSERT INTO wp_woocommerce_order_items (            	
                        order_item_name,
                        order_item_type,
                        order_id
                    ) SELECT order_item_name,
                        order_item_type,
                        ' . $newID . '
                      FROM wp_' . $blog_id . '_woocommerce_order_items  
                      WHERE order_item_id = ' . $order_item_id;
                $wpdb->query($sql);
                $new_order_item_id = $wpdb->insert_id;

                $order_items[$order_item_id] = $new_order_item_id;

                //----wp_woocommerce_order_itemmeta

                $sql = 'INSERT INTO wp_woocommerce_order_itemmeta (
                        order_item_id,
                        meta_key,
                        meta_value)
                    SELECT  ' . $new_order_item_id . ', meta_key, meta_value
                    FROM wp_' . $blog_id . '_woocommerce_order_itemmeta
                    WHERE order_item_id = ' . $order_item_id;
                $wpdb->query($sql);


            }

        }

    }

//------функция обновления заказа на основном сайте
    function updateOrderToMain($order_id)
    {
        global $subdomen, $wpdb;
        if (!$order_id) {
            return;
        }
        $blog_id = get_current_blog_id();
        if ($blog_id == 1) {
            return;
        }

        //$order = wc_get_order( $order_id );

        $sql = "UPDATE wp_posts p JOIN wp_" . $blog_id . "_posts psub on psub.ID = p.ID SET p.post_status = psub.post_status WHERE p.ID = " . $order_id;
        $wpdb->query($sql);

        $sql = "DELETE FROM wp_postmeta WHERE post_id = " . $order_id;
        $wpdb->query($sql);
        $sql = 'INSERT INTO wp_postmeta (post_id, meta_key,meta_value) SELECT ' . $order_id . ',meta_key,meta_value FROM wp_' . $blog_id . '_postmeta WHERE post_id = ' . $order_id;
        $wpdb->query($sql);


        $sql = "DELETE FROM wp_wc_order_stats WHERE order_id = " . $order_id;
        $wpdb->query($sql);
        $sql = 'INSERT INTO wp_wc_order_stats (
            order_id,
            parent_id,
            date_created,
            date_created_gmt,
            num_items_sold,
            total_sales,
            tax_total,
            shipping_total,
            net_total,
            returning_customer,
            status,
            customer_id
         ) SELECT ' . $order_id . ',
            parent_id,
            date_created,
            date_created_gmt,
            num_items_sold,
            total_sales,
            tax_total,
            shipping_total,
            net_total,
            returning_customer,
            status,
            customer_id
        FROM wp_' . $blog_id . '_wc_order_stats
        WHERE order_id = ' . $order_id;
        $wpdb->query($sql);


        //----wp_woocommerce_order_items
        $sql = 'DELETE oi,oim FROM wp_woocommerce_order_items oi JOIN wp_woocommerce_order_itemmeta oim on oim.order_item_id = oi.order_item_id WHERE oi.order_id = ' . $order_id;
        $wpdb->query($sql);


        $items = $wpdb->get_results("SELECT * FROM wp_" . $blog_id . "_woocommerce_order_items WHERE order_id = " . $order_id);
        //$order_items = [];
        foreach ($items as $item) {
            $order_item_id = $item->order_item_id;

            //------обновим количество товара----

            //-----конец обновление количества товара---


            $sql = 'INSERT INTO wp_woocommerce_order_items (   
                        order_item_name,
                        order_item_type,
                        order_id
                    ) SELECT                         
                        order_item_name,
                        order_item_type,
                        ' . $order_id . '
                      FROM wp_' . $blog_id . '_woocommerce_order_items
                      WHERE order_item_id = ' . $order_item_id;
            $wpdb->query($sql);
            $new_order_item_id = $wpdb->insert_id;

            //$order_items[$order_item_id] = $new_order_item_id;

            //----wp_woocommerce_order_itemmeta

            $sql = 'INSERT INTO wp_woocommerce_order_itemmeta (
                        order_item_id,
                        meta_key,
                        meta_value)
                    SELECT  ' . $new_order_item_id . ', meta_key, meta_value
                    FROM wp_' . $blog_id . '_woocommerce_order_itemmeta
                    WHERE order_item_id = ' . $order_item_id;
            $wpdb->query($sql);


        }

    }

    //------функция обновления заказа с основного сайта
    function updateOrderFromMain($order_id)
    {
        global $subdomen, $wpdb;
        if (!$order_id) {
            return;
        }
        $blog_id = get_current_blog_id();
        if ($blog_id != 1) {
            return;
        }

        $data = $wpdb->get_results("SELECT blog_id FROM wp_blogs where domain LIKE '%.ice-skate.online' AND blog_id <> " . $blog_id);

        foreach ($data as $site) {

            $sql = "UPDATE wp_" . $site->blog_id . "_posts p JOIN wp_posts psub on psub.ID = p.ID SET p.post_status = psub.post_status WHERE p.ID = " . $order_id;
            $wpdb->query($sql);

            $sql = "DELETE FROM wp_" . $site->blog_id . "_postmeta WHERE post_id = " . $order_id;
            $wpdb->query($sql);
            $sql = 'INSERT INTO wp_' . $site->blog_id . '_postmeta (post_id, meta_key,meta_value) SELECT ' . $order_id . ',meta_key,meta_value FROM wp_postmeta WHERE post_id = ' . $order_id;
            $wpdb->query($sql);

            $sql = "DELETE FROM wp_" . $site->blog_id . "_wc_order_stats WHERE order_id = " . $order_id;
            $wpdb->query($sql);
            $sql = 'INSERT INTO wp_' . $site->blog_id . '_wc_order_stats (
            order_id,
            parent_id,
            date_created,
            date_created_gmt,
            num_items_sold,
            total_sales,
            tax_total,
            shipping_total,
            net_total,
            returning_customer,
            status,
            customer_id
         ) SELECT ' . $order_id . ',
            parent_id,
            date_created,
            date_created_gmt,
            num_items_sold,
            total_sales,
            tax_total,
            shipping_total,
            net_total,
            returning_customer,
            status,
            customer_id
        FROM wp_wc_order_stats
        WHERE order_id = ' . $order_id;
            $wpdb->query($sql);


        }

    }

//-----добавляет хук к сохранению заказа
    add_action('save_post_shop_order', 'saveOrderToMainSite', 999999, 3);
    function saveOrderToMainSite($post_ID, $post, $update)
    {

        if (!$post_ID) {
            return;
        }

        $blog_id = get_current_blog_id();
        if ($blog_id == 1) {
            return;
        }


        //------проверяем, есть ли уже такой заказ ----


        if (!$update) {
            addOrderToMain($post_ID);
        } else {
            updateOrderToMain($post_ID);
        }
    }

//-----добавляет хук к добавлению заказа
    add_action('woocommerce_new_order', 'newOrderToMainSite', 999999, 2);
    function newOrderToMainSite($order_id, $order)
    {
        global $wpdb;

        //mail('local@seo28.ru', 'test-newOrderToMainSite', 'order_id = ' . $order_id . ' - ' . time());

        if (!$order_id) {
            return;
        }

        $blog_id = get_current_blog_id();
        if ($blog_id == 1) {
            return;
        }


        //------проверяем, есть ли уже такой заказ ----

        $sql = "SELECT ID FROM wp_posts WHERE ID = " . $order_id;
        $_posts = $wpdb->get_results($sql);

        if (empty($_posts)) {
            addOrderToMain($order_id);
        } else {
            updateOrderToMain($order_id);
        }


    }

//-----добавляет хук к изменению статуса заказа
    add_action('woocommerce_order_edit_status', 'action_woocommerce_order_edit_status', 999999, 2);
    function action_woocommerce_order_edit_status($id, $new_status)
    {
        $blog_id = get_current_blog_id();
        if ($blog_id == 1) {
            updateOrderFromMain($id);
        } else {
            updateOrderToMain($id);
        }
    }

//-----добавляет хук к обновлению свойств заказа
    add_action('woocommerce_order_object_updated_props', 'action_woocommerce_order_object_updated_props', 999999, 2);
    function action_woocommerce_order_object_updated_props($order, $updated_props)
    {
        updateOrderToMain($order->get_id());
    }

//-----добавляет хук к обновлению заказа
    add_action('woocommerce_update_order', 'action_woocommerce_update_order', 999999, 2);
    function action_woocommerce_update_order($order_id, $order)
    {
        updateOrderToMain($order_id);
    }

//-----добавляет хук к изменению статуса заказа
    add_action('woocommerce_order_status_changed', 'action_woocommerce_order_status_changed', 999999, 4);
    function action_woocommerce_order_status_changed($id, $status_transition_from, $status_transition_to, $that)
    {
        $blog_id = get_current_blog_id();
        if ($blog_id == 1) {
            updateOrderFromMain($id);
        } else {
            updateOrderToMain($id);
        }
    }

//-----добавляет хук к изменению заказа через api
    add_action('woocommerce_api_edit_order', 'action_woocommerce_api_edit_order', 999999, 3);
    function action_woocommerce_api_edit_order($order_id, $data, $that)
    {
        //mail('local@seo28.ru', 'test-action_woocommerce_api_edit_order', 'order_id = ' . $order_id . ' - ' . time());
        updateOrderToMain($order_id);
    }

//-----добавляет хук к полному сохранению всех свойств заказа
    add_action('woocommerce_checkout_order_processed', 'action_woocommerce_checkout_order_processed', 999999, 3);
    function action_woocommerce_checkout_order_processed($order_id, $posted_data, $order)
    {
        updateOrderToMain($order_id);
        //updateStockFromOrder($order_id);
    }

    add_action( 'woocommerce_updated_product_stock', 'updateStockByProductId' );
    function updateStockByProductId( $product_id_with_stock ){

        //mail('local@seo28.ru', 'updateStockByProductId', 'product_id = ' . $product_id_with_stock . ' - ' . time());

        global $wpdb;
        if (!$product_id_with_stock) {
            return;
        }
        $blog_id = get_current_blog_id();
        if ($blog_id != 1) {
            $blogStr = '_' . $blog_id;
        } else {
            $blogStr = '';
        }
        /*if ($blog_id == 1) {
            return;
        }*/

        $sql = "select meta_value as stock FROM wp" . $blogStr . "_postmeta WHERE post_id = " . $product_id_with_stock . " AND meta_key = '_stock' ";
        $data = $wpdb->get_results($sql);
        if (empty($data)) {
            return;
        }

        //mail('local@seo28.ru', 'updateStockByProductId', 'data = ' . json_encode($data) . ' - ' . time());

        $item = $data[0];

        if ($blog_id != 1) {

            $sql = "update wp_postmeta set meta_value = '" . $item->stock . "' where post_id = " . $product_id_with_stock . " and meta_key = '_stock'";
            $wpdb->query($sql);

            if ($item->stock == 0) {
                $sql = "update wp_postmeta set meta_value = 'outofstock' where post_id = " . $product_id_with_stock . " and meta_key = '_stock_status'";
                $wpdb->query($sql);
            } else {
                $sql = "update wp_postmeta set meta_value = 'instock' where post_id = " . $product_id_with_stock . " and meta_key = '_stock_status'";
                $wpdb->query($sql);
            }

        }

        $sites = $wpdb->get_results("SELECT blog_id FROM wp_blogs where domain LIKE '%.ice-skate.online' AND blog_id <> " . $blog_id);

        foreach ($sites as $site) {
            $sql = "update wp_" . $site->blog_id . "_postmeta set meta_value = '" . $item->stock . "' where post_id = " . $product_id_with_stock . " and meta_key = '_stock'";
            $wpdb->query($sql);
            if ($item->stock == 0) {
                $sql = "update wp_" . $site->blog_id . "_postmeta set meta_value = 'outofstock' where post_id = " . $product_id_with_stock . " and meta_key = '_stock_status'";
                $wpdb->query($sql);
            } else {
                $sql = "update wp_" . $site->blog_id . "_postmeta set meta_value = 'instock' where post_id = " . $product_id_with_stock . " and meta_key = '_stock_status'";
                $wpdb->query($sql);
            }
        }



    }

    function updateStockFromOrder($orderId) {
        global $wpdb;
        if (!$orderId) {
            return;
        }
        $blog_id = get_current_blog_id();
        if ($blog_id == 1) {
            return;
        }

        $sites = $wpdb->get_results("SELECT blog_id FROM wp_blogs where domain LIKE '%.ice-skate.online' AND blog_id <> " . $blog_id);

        $items = $wpdb->get_results("SELECT oim.meta_value as product_id, pm.meta_value as stock FROM wp_" . $blog_id . "_woocommerce_order_items oi 
                JOIN wp_" . $blog_id . "_woocommerce_order_itemmeta oim on oim.order_item_id = oi.order_item_id 
                JOIN wp_" . $blog_id . "_postmeta pm on pm.post_id = oim.meta_value and pm.meta_key = '_stock'  
                WHERE oi.order_id = " . $orderId . " AND oi.order_item_type = 'line_item' AND oim.meta_key = '_product_id'");
        //$order_items = [];
        foreach ($items as $item) {

            //------обновим количество товара----

            $sql = "update wp_postmeta set meta_value = '" . $item->stock . "' where post_id = " . $item->product_id . " and meta_key = '_stock'";
            $wpdb->query($sql);

            foreach ($sites as $site) {
                $sql = "update wp_" . $site->blog_id . "_postmeta set meta_value = '" . $item->stock . "' where post_id = " . $item->product_id . " and meta_key = '_stock'";
                $wpdb->query($sql);
            }

            //-----конец обновление количества товара---
        }
    }

    add_action('woocommerce_order_status_cancelled', 'updateStockFromCancelledOrderFromMain');
    add_action('woocommerce_order_status_refunded', 'updateStockFromCancelledOrderFromMain');
    function updateStockFromCancelledOrderFromMain($orderId) {
        global $wpdb;
        if (!$orderId) {
            return;
        }
        $blog_id = get_current_blog_id();
        if ($blog_id != 1) {
            return;
        }

        $sites = $wpdb->get_results("SELECT blog_id FROM wp_blogs where domain LIKE '%.ice-skate.online' AND blog_id <> " . $blog_id);

        /*$items = $wpdb->get_results("SELECT oim.meta_value as product_id, pm.meta_value as stock FROM wp_woocommerce_order_items oi
                JOIN wp_woocommerce_order_itemmeta oim on oim.order_item_id = oi.order_item_id 
                JOIN wp_postmeta pm on pm.post_id = oim.meta_value and pm.meta_key = '_stock'  
                WHERE oi.order_id = " . $orderId . " AND oi.order_item_type = 'line_item' AND oim.meta_key = '_product_id'");
        //$order_items = [];
        foreach ($items as $item) {

            //------обновим количество товара----

            foreach ($sites as $site) {
                $sql = "update wp_" . $site->blog_id . "_postmeta set meta_value = '" . $item->stock . "' where post_id = " . $item->product_id . " and meta_key = '_stock'";
                $wpdb->query($sql);

                if ($item->stock == 0) {
                    $sql = "update wp_" . $site->blog_id . "_postmeta set meta_value = 'outofstock' where post_id = " . $item->product_id . " and meta_key = '_stock_status'";
                    $wpdb->query($sql);
                } else {
                    $sql = "update wp_" . $site->blog_id . "_postmeta set meta_value = 'instock' where post_id = " . $item->product_id . " and meta_key = '_stock_status'";
                    $wpdb->query($sql);
                }

            }

            //-----конец обновление количества товара---
        }*/

        foreach ($sites as $site) {
            //------удалим резервы----
            $sql = "delete from wp_" . $site->blog_id . "_wc_reserved_stock where order_id = " . $orderId;
            $wpdb->query($sql);
        }

    }

//-----добавляет хук к после оплаты заказа
    add_action('woocommerce_payment_complete', 'order_payment_complete');
    function order_payment_complete($order_id)
    {
        $blog_id = get_current_blog_id();
        if ($blog_id == 1) {
            updateOrderFromMain($order_id);
        } else {
            updateOrderToMain($order_id);
        }
    }

//-----добавляет хук к изменению статуса заказа на выполнен
    add_action('woocommerce_order_status_completed', 'changeStatusOrder');
    function competedStatusOrder($order_id)
    {
        $blog_id = get_current_blog_id();
        if ($blog_id == 1) {
            updateOrderFromMain($order_id);
        } else {
            updateOrderToMain($order_id);
        }
    }

//-----добавляет хук при изменении свойств товара
    add_action('updated_post_meta', 'refresh_after_update_post_meta', 9999999, 4);
    function refresh_after_update_post_meta($meta_id, $post_id, $meta_key, $meta_value)
    {
        global $wpdb;

        $_post = get_post($post_id);
        $blog_id = get_current_blog_id();

        //mail('local@seo28.ru', 'refresh_after_update_post_meta-' . $blog_id, $post_id . '|' . $meta_key . '|' . $_post->post_type);

        if (!(in_array($_post->post_type, ['product', 'product_variation', 'attachment']))) {
            return;
        }

        if ($blog_id != 1 && !(in_array($meta_key, ['_sku', '_sale_price', '_stock', '_regular_price', '_price']))) {
            return;
        }

        $blogStr = '';

        if ($blog_id != 1) {
            $blogStr = '_' . $blog_id;
        }

        $data = $wpdb->get_results("SELECT blog_id FROM wp_blogs where domain LIKE '%.ice-skate.online' AND blog_id <> " . $blog_id);


        if ($blog_id != 1) {
            $sql = "UPDATE wp_postmeta wp JOIN wp" . $blogStr . "_postmeta wp2 on wp2.post_id = wp.post_id AND wp2.meta_key = wp.meta_key set wp.meta_value = wp2.meta_value WHERE wp2.post_id = " . $post_id . " and wp.meta_key = '" . $meta_key . "' ";
            $result = $wpdb->query(trim($sql));
        }

        foreach ($data as $site) {
            $sql = "UPDATE wp_" . $site->blog_id . "_postmeta wp JOIN wp" . $blogStr . "_postmeta wp2 on wp2.post_id = wp.post_id AND wp2.meta_key = wp.meta_key set wp.meta_value = wp2.meta_value WHERE wp2.post_id = " . $post_id . " and wp.meta_key ='" . $meta_key . "'";
            $result = $wpdb->query(trim($sql));
        }
    }

    add_action('added_post_meta', 'refresh_after_add_post_meta', 9999999, 4);
    function refresh_after_add_post_meta( $meta_id, $post_id, $meta_key, $meta_value )
    {
        global $wpdb;

        $blog_id = get_current_blog_id();

        $blogStr = '';

        if ($blog_id != 1) {
            return;
        }

        $data = $wpdb->get_results( "SELECT blog_id FROM wp_blogs where domain LIKE '%.ice-skate.online' AND blog_id <> " . $blog_id );


        foreach ($data as $site) {

            $sql = "delete from  wp_" . $site->blog_id . "_postmeta where post_id =  " . $post_id . " AND meta_key = '" . $meta_key . "'";
            $result = $wpdb->query(trim($sql));

            $sql = "INSERT INTO wp_" . $site->blog_id . "_postmeta(post_id,meta_key,meta_value) SELECT post_id,meta_key,meta_value FROM wp_postmeta WHERE meta_id = " . $meta_id;
            $result = $wpdb->query(trim($sql));
            /*if ($meta_key == '_wp_attached_file') {
                $sql = "delete from   wp_" . $site->blog_id . "_posts where post_id =  " . $post_id;
                $result = $wpdb->query(trim($sql));
                $sql = "INSERT INTO  wp_" . $site->blog_id . "_posts SELECT * FROM wp" . $blogStr . "_posts WHERE ID = " . $post_id;
                $result = $wpdb->query(trim($sql));
            }*/
        }
    }

    /*
    add_action( 'deleted_post_meta', 'refresh_after_deleted_post_meta', 90, 4 );
    function refresh_after_deleted_post_meta( $deleted_meta_ids, $post_id, $meta_key, $only_delete_these_meta_values )
    {
        global $wpdb;

        $_post = get_post($post_id);

        if(!(in_array($_post->post_type, ['product', 'product_variation','attachment']))) {
            return;
        }

        $blog_id = get_current_blog_id();
        //mail('local@seo28.ru', 'test-update_meta-element-1c-' . $blog_id, $post_id . '|' . $meta_key);

        $blogStr = '';

        if ($blog_id != 1) {
            $blogStr = '_' . $blog_id;
        }

        if (!(is_array($deleted_meta_ids))) {
            $deleted_meta_ids = explode(',', $deleted_meta_ids);
        }

        $data = $wpdb->get_results( "SELECT blog_id FROM wp_blogs where domain LIKE '%.ice-skate.online' AND blog_id <> " . $blog_id );


        if ($blog_id != 1) {
            $sql = "DELETE FROM wp_postmeta WHERE meta_id IN (" . implode(',', $deleted_meta_ids) . ")";
            $result = $wpdb->query(trim($sql));
        }

        foreach ($data as $site) {
            $sql = "DELETE FROM wp_" . $site->blog_id . "_postmeta WHERE meta_id IN (" . implode(',', $deleted_meta_ids) . ")";
            $result = $wpdb->query(trim($sql));
        }
    }
    */

    function cpt_from_attachment($post_ID)
    {
        global $wpdb;

        $blog_id = get_current_blog_id();

        if ($blog_id != 1) {
            return;
        }

        $blogStr = '';

        if ($blog_id != 1) {
            $blogStr = '_' . $blog_id;
        }

        $data = $wpdb->get_results("SELECT blog_id, domain FROM wp_blogs where domain LIKE '%.ice-skate.online' AND blog_id <> " . $blog_id);

            foreach ($data as $site) {
                $sql = "INSERT INTO  wp_" . $site->blog_id . "_posts SELECT * FROM wp" . $blogStr . "_posts WHERE ID = " . $post_ID;
                $result = $wpdb->query(trim($sql));
                //$sql = "INSERT INTO  wp_" . $site->blog_id . "_posts SELECT * FROM wp" . $blogStr . "_posts WHERE post_parent = " . $post_ID;
                //$result = $wpdb->query(trim($sql));
                $sql = "update wp_" . $site->blog_id . "_posts set guid = replace(guid,'/ice-skate.online','/" . $site->domain . "') where ID = " . $post_ID;// . " AND post_type <> 'attachment'";
                $result = $wpdb->query(trim($sql));

            }

    }

    add_action("add_attachment", 'cpt_from_attachment');

//-----добавляет хук при сохранении товара
    add_action('save_post', 'saveProduct', 9999999, 3);
    function saveProduct($post_ID, $post, $update)
    {
        global $wpdb;

        $blog_id = get_current_blog_id();

        if ($blog_id != 1) {
            return;
        }


        if (in_array($post->post_type, ['product'])) {
            copyProduct($post_ID, $update);
        }

        /*

        if (in_array($post->post_type, ['product', 'product_variation'])) {

            $blog_id = get_current_blog_id();

            if ($blog_id != 1) {
                return;
            }

            $blogStr = '';

            if ($blog_id != 1) {
                $blogStr = '_' . $blog_id;
            }

            $data = $wpdb->get_results("SELECT blog_id, domain FROM wp_blogs where domain LIKE '%.ice-skate.online' AND blog_id <> " . $blog_id);

            if ($update) {


                foreach ($data as $site) {
                    $sql = "UPDATE  wp_" . $site->blog_id . "_posts wp JOIN wp" . $blogStr . "_posts wp2 on wp2.ID = wp.ID  SET wp.post_title = wp2.post_title, wp.post_content = wp2.post_content, wp.post_name = wp2.post_name, wp.post_status = wp2.post_status, wp.post_parent = wp2.post_parent, wp.post_modified = wp2.post_modified WHERE wp2.ID = " . $post_ID;
                    //$sql = "UPDATE wp_" . $site->blog_id . "_postmeta wp JOIN wp" . $blogStr . "_postmeta wp2 on wp2.post_id = wp.post_id AND wp2.meta_key = wp.meta_key set wp.meta_value = wp2.meta_value WHERE wp2.post_id = " . $post_ID . " and wp.meta_key IN ('_stock','_regular_price','_price','_sku')";
                    $result = $wpdb->query(trim($sql));


                    //--------обновляем ----------

                    //-------обновляем данные для фильтра----

                    if (in_array($post->post_type, ['product'])) {
                        $sql = "DELETE FROM wp_" . $site->blog_id . "_wc_product_attributes_lookup WHERE product_id = " . $post_ID . " OR product_or_parent_id = " . $post_ID;
                        $result = $wpdb->query(trim($sql));
                        $sql = "INSERT INTO wp_" . $site->blog_id . "_wc_product_attributes_lookup SELECT * FROM wp_wc_product_attributes_lookup WHERE product_id = " . $post_ID . " OR product_or_parent_id = " . $post_ID;
                        $result = $wpdb->query(trim($sql));
                    }

                    $sql = "DELETE FROM wp_" . $site->blog_id . "_wc_product_meta_lookup WHERE product_id = " . $post_ID;
                    $result = $wpdb->query(trim($sql));
                    $sql = "INSERT INTO wp_" . $site->blog_id . "_wc_product_meta_lookup SELECT * FROM wp_wc_product_meta_lookup WHERE product_id = " . $post_ID;
                    $result = $wpdb->query(trim($sql));

                }
            } else {
                foreach ($data as $site) {

                    $sql = "INSERT INTO  wp_" . $site->blog_id . "_posts SELECT * FROM wp" . $blogStr . "_posts WHERE ID = " . $post_ID;
                    $result = $wpdb->query(trim($sql));
                    //$sql = "INSERT INTO  wp_" . $site->blog_id . "_posts SELECT * FROM wp" . $blogStr . "_posts WHERE post_parent = " . $post_ID;
                    //$result = $wpdb->query(trim($sql));
                    $sql = "update wp_" . $site->blog_id . "_posts set guid = replace(guid,'/ice-skate.online','/" . $site->domain . "') where ID = " . $post_ID;// . " AND post_type <> 'attachment'";
                    $result = $wpdb->query(trim($sql));
                    $sql = "INSERT INTO wp_" . $site->blog_id . "_postmeta SELECT * FROM wp" . $blogStr . "_postmeta WHERE post_id = " . $post_ID;
                    $result = $wpdb->query(trim($sql));
                    $sql = "INSERT INTO wp_" . $site->blog_id . "_term_relationships SELECT * FROM wp" . $blogStr . "_term_relationships WHERE object_id = " . $post_ID;
                    $result = $wpdb->query(trim($sql));


                    //-------обновляем данные для фильтра----
                    if (in_array($post->post_type, ['product'])) {
                        $sql = "DELETE FROM wp_" . $site->blog_id . "_wc_product_attributes_lookup WHERE product_id = " . $post_ID . " OR product_or_parent_id = " . $post_ID;
                        $result = $wpdb->query(trim($sql));
                        $sql = "INSERT INTO wp_" . $site->blog_id . "_wc_product_attributes_lookup SELECT * FROM wp_wc_product_attributes_lookup WHERE product_id = " . $post_ID . " OR product_or_parent_id = " . $post_ID;
                        $result = $wpdb->query(trim($sql));
                    }

                    $sql = "DELETE FROM wp_" . $site->blog_id . "_wc_product_meta_lookup WHERE product_id = " . $post_ID;
                    $result = $wpdb->query(trim($sql));
                    $sql = "INSERT INTO wp_" . $site->blog_id . "_wc_product_meta_lookup SELECT * FROM wp_wc_product_meta_lookup WHERE product_id = " . $post_ID;
                    $result = $wpdb->query(trim($sql));

                }
            }
        }

        */
    }


//-----добавляет хуки при изменении категории товаров
    add_action('create_term', 'afterCreateTerm', 90, 3);
    add_action('saved_term', 'afterSaveTerm', 90, 4);
    function afterSaveTerm($term_id, $tt_id, $taxonomy, $updated)
    {
        global $wpdb;
        if ($taxonomy == 'product_cat') {
            $blog_id = get_current_blog_id();
            if ($blog_id != 1) {
                return;
            }

            $blogStr = '';

            if ($blog_id != 1) {
                $blogStr = '_' . $blog_id;
            }

            $data = $wpdb->get_results("SELECT blog_id FROM wp_blogs where domain LIKE '%.ice-skate.online' AND blog_id <> " . $blog_id);

            if ($updated) {
                foreach ($data as $site) {
                    $sql = "DELETE FROM  wp_" . $site->blog_id . "_terms WHERE term_id = " . $term_id;
                    $result = $wpdb->query(trim($sql));
                    $sql = "DELETE FROM  wp_" . $site->blog_id . "_termmeta WHERE term_id = " . $term_id;
                    $result = $wpdb->query(trim($sql));
                    $sql = "DELETE FROM  wp_" . $site->blog_id . "_term_taxonomy WHERE term_id = " . $term_id;
                    $result = $wpdb->query(trim($sql));
                }
            }
            foreach ($data as $site) {
                $sql = "INSERT INTO  wp_" . $site->blog_id . "_terms SELECT * FROM wp" . $blogStr . "_terms WHERE term_id = " . $term_id;
                $result = $wpdb->query(trim($sql));
                $sql = "INSERT INTO  wp_" . $site->blog_id . "_termmeta SELECT * FROM wp" . $blogStr . "_termmeta WHERE term_id = " . $term_id;
                $result = $wpdb->query(trim($sql));
                $sql = "INSERT INTO  wp_" . $site->blog_id . "_term_taxonomy SELECT * FROM wp" . $blogStr . "_term_taxonomy WHERE term_id = " . $term_id;
                $result = $wpdb->query(trim($sql));
            }
        }
    }

//-----добавляет хук при изменении свойств категории товара
    add_action('set_object_terms', 'setObjectTerms', 90, 6);
    function setObjectTerms($object_id, $terms, $tt_ids, $taxonomy, $append, $old_tt_ids)
    {
        global $wpdb;
        if (in_array($taxonomy,['product_cat'])) {
            $blog_id = get_current_blog_id();
            if ($blog_id != 1) {
                return;
            }

            $blogStr = '';

            if ($blog_id != 1) {
                $blogStr = '_' . $blog_id;
            }

            $data = $wpdb->get_results("SELECT blog_id FROM wp_blogs where domain LIKE '%.ice-skate.online' AND blog_id <> " . $blog_id);
            foreach ($data as $site) {
                $sql = "DELETE FROM  wp_" . $site->blog_id . "_term_relationships WHERE object_id = " . $object_id;
                $result = $wpdb->query(trim($sql));
                $sql = "INSERT INTO  wp_" . $site->blog_id . "_term_relationships SELECT * FROM wp" . $blogStr . "_term_relationships WHERE object_id = " . $object_id;
                $result = $wpdb->query(trim($sql));
            }


        }
    }

/*    function setTitle4Bejsbolka() {
       global $_city, $_vcity, $_rcity, $_icity;
       $title = '';

        $template = '{H1} купить {VCITY} | Ice-Skate';

        $replace = array(
            '{CITY}' => $_city,
            '{VCITY}' => $_vcity,
            '{RCITY}' => $_rcity,
            '{ICITY}' => $_icity
        );

        $title = str_replace(array_keys($replace), $replace, $title);


       return trim($title);
    }

    function getH14Bejsbolka() {
        global $product;

        $gender = 'мужская';
        $color = 'черная';
        $with = 'с надписью';
        $brand = 'КХЛ All Star';

        $template = 'Бейсболка {GENDER} {COLOR} {WITH} {BRAND}';

        $replace = array(
            '{GENDER}' => $gender,
            '{COLOR}' => $color,
            '{WITH}' => $with,
            '{BRAND}' => $brand
        );

        $title = str_replace(array_keys($replace), $replace, $template);
    } */


/* -----отключаем карту озона---
    function WPScripts_dequeue()
    {
        wp_dequeue_script('jquery');
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://yastatic.net/jquery/3.2.0/jquery.min.js', false, '3.2.0');
        wp_enqueue_script('jquery');

        if (!is_checkout()) {
            wp_dequeue_script(OZON_PLUGIN_DOMAIN . '-scripts');
            wp_deregister_script(OZON_PLUGIN_DOMAIN . '-scripts');
            wp_dequeue_style(OZON_PLUGIN_DOMAIN . '-styles');
            wp_deregister_style(OZON_PLUGIN_DOMAIN . '-styles');
            wp_dequeue_script('yandex-maps');
            wp_deregister_script('yandex-maps');
            wp_deregister_style('robokassa_payment_admin_style_menu');
            wp_deregister_style('robokassa_payment_admin_style_menu');

        }
    }

    add_action('wp_enqueue_scripts', 'WPScripts_dequeue', 9999999); */

//------добавлем fancy----

    add_action('wp_print_styles', 'theme_fancy_scripts'); // можно использовать этот хук он более поздний
    function theme_fancy_scripts() {
        wp_enqueue_script( 'fancy', '/fb/fb.js', array(), '1.0.0', true );
    }

}

//--------фильтр для категорий----

$uzapros = urldecode($_SERVER['REQUEST_URI']);

//-----меняем title и description для страниц фильтра---
/*

 if (strpos($uzapros,'/filter/') !== false) {

    global $wpdb;

    $a = explode('/filter/', $uzapros);

    $slugsRight = ['pa_razmer-v-kataloge', 'pa_cvet', 'pa_cvety', 'pa_povod', 'pa_cena','pa_po-kolichestvu','pa_po-vysote','pa_rozy-po-forme'];
    $slugsRightFull = ['pa_razmer-v-kataloge', 'pa_cvet', 'cat', 'pa_cvety', 'pa_povod', 'pa_cena','pa_po-kolichestvu','pa_po-vysote','pa_rozy-po-forme'];

    if (isset($a[1]) && $a[1] != '') {

        $slugs = [];
        $names = [];

        $names['cat'] = 'Букеты';
        if (strpos($uzapros,'/rozy/') !== false) {
            $names['cat'] = 'Розы';
        }

        $q = explode('/', $a[1]);
        $urlCur = '';

        foreach ($q as $slugd) {
            if ($slugd != '') {

                $b = explode('_', $slugd);

                foreach ($b as $slug) {

                    $t = $wpdb->get_results("SELECT tt.taxonomy, t.name, t.term_id FROM wp_terms t JOIN wp_term_taxonomy tt ON tt.term_id = t.term_id WHERE t.slug = '" . $slug . "' LIMIT 1");
                    if (!empty($t)) {
                        $slugs[$t[0]->taxonomy] = $slugd;
                        if ($names[$t[0]->taxonomy] && $names[$t[0]->taxonomy] != '') {
                            $names[$t[0]->taxonomy] .= ' и ';
                        } else {
                            $names[$t[0]->taxonomy] = '';
                        }

                        if (!in_array($t[0]->taxonomy, ['pa_cena'])) {
                            $_term_meta = get_term_meta($t[0]->term_id, 'name_to_filter', true);
                            if ($_term_meta && $_term_meta != '') {
                                $names[$t[0]->taxonomy] .= $_term_meta;
                            } else {
                                $names[$t[0]->taxonomy] .= $t[0]->name;
                            }
                        } else {
                            $names[$t[0]->taxonomy] .= $t[0]->name;
                        }
                    }
                }

                if ($urlCur != '') {
                    $urlCur .= '/';
                }
                $urlCur .= $slugd;

            }
        }

        $urlRight = '';

        foreach ($slugsRight as $right) {
            if (isset($slugs[$right])) {
                if ($urlRight != '') {
                    $urlRight .= '/';
                }
                $urlRight .= $slugs[$right];
                $_GET[$right] = $query[$right] = str_replace('_', ',', $slugs[$right]);
            }
        }

        $fullUrlCur = 'https://' . $_SERVER['HTTP_HOST'] . $a[0] . '/filter/' . $urlRight . '/';

        if ($urlCur != $urlRight) {
            //echo $urlCur . ' = ' . $urlRight;
            header('Location: ' . $a[0] . '/filter/' . $urlRight . '/', true, 301);
            exit();
        } else {
            function rel_canonical_with_filter(){
                global $fullUrlCur;
                $canonical_url = $fullUrlCur;
                return $canonical_url;
                //echo "<link rel='canonical' href='" . esc_url( $urlCur ) . "' />\n";
            }
            add_filter( 'wpseo_canonical', 'rel_canonical_with_filter', 20, 2 );
        }
    }

    function setFilterTitle($title) {
        global $names, $slugsRightFull;

        $title = '';

        foreach ($slugsRightFull as $right) {
            if (isset($names[$right])) {
                if ($title != '') {
                    $title .= ' ';
                }
                if ($right == 'pa_cena') {
                    $title .= 'по цене ';
                }
                if ($right == 'pa_cvety') {
                    $title .= 'из ';
                }
                $title .= trim(mb_strtolower($names[$right], 'UTF-8'));
                if ($right == 'pa_cena') {
                    $title .= ' рублей';
                }
            }
        }//foreach

        $title .= ' – купить с доставкой в Ярославле | Магазин цветов Флоренция';

        return mb_ucfirst($title);

    }// setFilterTitle

    add_filter('wpseo_title', 'setFilterTitle', 10, 1);

    function setFilterMetaDesc($metadesc) {
        global $names, $slugsRightFull;

        $metadesc = '';

        foreach ($slugsRightFull as $right) {
            if (!isset($names[$right])) {
                continue;
            }
            if ($metadesc != '') {
                $metadesc .= ' ';
            }
            if ($right == 'pa_cena') {
                $metadesc .= 'по цене ';
            }
            if ($right == 'pa_cvety') {
                $metadesc .= 'из ';
            }
            $metadesc .= trim(mb_strtolower($names[$right], 'UTF-8'));
            if ($right == 'pa_cena') {
                $metadesc .= ' рублей';
            }
        }//foreach

        $metadesc = 'Доставка цветов в Ярославле: ' . $metadesc . '. Всегда в наличии свежие и качественные цветы по низким ценам в магазине Флоренция';

        return mb_ucfirst($metadesc);

    }// setFilterMetaDesc


    add_filter('wpseo_metadesc', 'setFilterMetaDesc', 10, 1);

    function setFilterH1($title = '') {
        global $names, $slugsRightFull;

        $title = '';

        foreach ($slugsRightFull as $right) {
            if (!isset($names[$right])) {
                continue;
            }
            if ($title != '') {
                $title .= ' ';
            }
            if ($right == 'pa_cena') {
                $title .= 'по цене ';
            }
            if ($right == 'pa_cvety') {
                $title .= 'из ';
            }
            $title .= trim(mb_strtolower($names[$right], 'UTF-8'));
            if ($right == 'pa_cena') {
                $title .= ' рублей';
            }
        }//foreach

        return mb_ucfirst($title);

    }// setFilterH1

    function true_request( $query ){
        global $slugsRight, $slugs;

        $uzapros = urldecode($_SERVER['REQUEST_URI']);
        $a = explode('/filter/', $uzapros);

        $query['product_cat'] = $a[0];
        $_GET['swoof'] = 1;
        $query['swoof'] = 1;

        foreach ($slugsRight as $right) {
            if (isset($slugs[$right])) {
                $_GET[$right] = $query[$right] = str_replace('_', ',', $slugs[$right]);
            }
        }

        return $query;
    }

    add_filter( 'request', 'true_request', 9999, 1 );

}

*/


function copyProduct($product_id, $is_update = true)
{
    global $wpdb;

        $blog_id = get_current_blog_id();

        if ($blog_id != 1) {
            return;
        }

        $blogStr = '';

        if ($blog_id != 1) {
            $blogStr = '_' . $blog_id;
        }


        //-----получаем все ID вариаций----

        $ids = [$product_id];

        $data = $wpdb->get_results('SELECT ID FROM wp_posts WHERE post_parent = ' . $product_id );
        foreach ($data as $_post) {
            $ids[] = $_post->ID;
        }

        $data = $wpdb->get_results("SELECT blog_id, domain FROM wp_blogs where domain LIKE '%.ice-skate.online' AND blog_id <> " . $blog_id);


            foreach ($data as $site) {

                if ($is_update) {

                    $sql = 'DELETE FROM wp_' . $site->blog_id . '_posts WHERE ID = ' . $product_id . ' OR post_parent = ' . $product_id;
                    $result = $wpdb->query(trim($sql));

                    $sql = 'DELETE FROM wp_' . $site->blog_id . '_postmeta WHERE post_id IN (' . implode(',', $ids) . ')';
                    $result = $wpdb->query(trim($sql));

                    $sql = "DELETE FROM wp_" . $site->blog_id . "_wc_product_attributes_lookup WHERE product_id IN (" . implode(',', $ids) . ") OR product_or_parent_id IN (" . implode(',', $ids) . ")";
                    $result = $wpdb->query(trim($sql));

                    $sql = "DELETE FROM wp_" . $site->blog_id . "_wc_product_meta_lookup WHERE product_id IN (" . implode(',', $ids) . ")";
                    $result = $wpdb->query(trim($sql));

                    $sql = "DELETE FROM wp_" . $site->blog_id . "_term_relationships WHERE object_id IN (" . implode(',', $ids) . ")";
                    $result = $wpdb->query(trim($sql));

                    $sql = "DELETE FROM wp_" . $site->blog_id . "_options WHERE option_name LIKE '_transient%" . $product_id . "%'";
                    $result = $wpdb->query(trim($sql));

                }

                //--------добавляем------

                $sql = 'INSERT INTO wp_' . $site->blog_id . '_posts SELECT * FROM wp_posts WHERE ID IN (' . implode(',', $ids) . ')';
                $result = $wpdb->query(trim($sql));

                //----обновляем GUID----
                $sql = 'UPDATE wp_' . $site->blog_id . '_posts SET guid = REPLACE(guid,"/ice-skate.online","/' . $site->domain . '") WHERE ID IN (' . implode(',', $ids) . ') AND post_type IN ("product_variation", "product")';
                $result = $wpdb->query(trim($sql));

                $sql = 'INSERT INTO wp_' . $site->blog_id . '_postmeta (post_id, meta_key, meta_value) SELECT post_id, meta_key, meta_value FROM wp_postmeta  WHERE post_id IN (' . implode(',', $ids) . ')';
                $result = $wpdb->query(trim($sql));

                $sql = "INSERT INTO wp_" . $site->blog_id . "_wc_product_attributes_lookup SELECT * FROM wp_wc_product_attributes_lookup WHERE product_id IN (" . implode(',', $ids) . ") OR product_or_parent_id IN (" . implode(',', $ids) . ")";
                $result = $wpdb->query(trim($sql));


                $sql = "INSERT INTO wp_" . $site->blog_id . "_wc_product_meta_lookup SELECT * FROM wp_wc_product_meta_lookup  WHERE product_id IN (" . implode(',', $ids) . ")";
                $result = $wpdb->query(trim($sql));

                $sql = "INSERT INTO wp_" . $site->blog_id . "_term_relationships SELECT * FROM wp_term_relationships WHERE object_id IN (" . implode(',', $ids) . ")";
                $result = $wpdb->query(trim($sql));

            }


}

/**
 * ОТКЛЮЧАЕТ ПОДПИСЬ В ПОЧТЕ
 * Disable messages about the mobile apps in WooCommerce emails.
 * https://wordpress.org/support/topic/remove-process-your-orders-on-the-go-get-the-app/
 */
function mtp_disable_mobile_messaging( $mailer ) {
    remove_action( 'woocommerce_email_footer', array( $mailer->emails['WC_Email_New_Order'], 'mobile_messaging' ), 9 );
}
add_action( 'woocommerce_email', 'mtp_disable_mobile_messaging' );


//Подменяем H1 для сайта

add_filter( 'woocommerce_page_title', 'customize_woocommerce_page_title', 10, 1 );
function customize_woocommerce_page_title( $page_title) {

    // Свой заголовок для категории
if ( is_product_category('aksessuary') ) {$page_title = 'Аксессуары хоккейные';}
if ( is_product_category('butylki') ) {$page_title = 'Спортивные бутылки для воды';}
if ( is_product_category('dlya-klushki') ) {$page_title = 'Аксессуары для клюшек';}
if ( is_product_category('grip-lenta') ) {$page_title = 'Ленты для рукоятки клюшки';}
if ( is_product_category('vstavyshi-nadstavki') ) {$page_title = 'Надставки (удлинители) для хоккейных клюшек';}
if ( is_product_category('lenta-dlya-kryuka') ) {$page_title = 'Лента для крюка хоккейной клюшки';}
if ( is_product_category('nakladki') ) {$page_title = 'Накладки (защита) на крюк хоккейной клюшки';}
if ( is_product_category('prinadlezhnosti') ) {$page_title = 'Принадлежности для хоккея';}
if ( is_product_category('ruchki-dlya-klyushki') ) {$page_title = 'Ручки на рукоятку клюшки';}
if ( is_product_category('dlya-konkov') ) {$page_title = 'Аксессуары для коньков';}
if ( is_product_category('gelevye-vstavki') ) {$page_title = 'Гелевые вставки в коньки';}
if ( is_product_category('lezviya') ) {$page_title = 'Лезвия для хоккейных коньков';}
if ( is_product_category('oselki') ) {$page_title = 'Оселки для заточки лезвий коньков';}
if ( is_product_category('stakany') ) {$page_title = 'Стаканы для хоккейных коньков';}
if ( is_product_category('chehly-dlya-konkov') ) {$page_title = 'Чехлы для коньков';}
if ( is_product_category('shnurki') ) {$page_title = 'Шнурки для хоккейных коньков';}
if ( is_product_category('dlya-shhitkov') ) {$page_title = 'Аксессуары для хоккейных щитков';}
if ( is_product_category('scotch') ) {$page_title = 'Лента и скотч для хоккейных щитков';}
if ( is_product_category('lipuchki') ) {$page_title = 'Липучки для хоккейных щитков';}
if ( is_product_category('zhidkosti-sprei') ) {$page_title = 'Антибактериальные спреи для хоккейной экипировки';}
if ( is_product_category('kovriki-dlya-konkov') ) {$page_title = 'Коврики в раздевалку для хоккеистов';}
if ( is_product_category('polotentsa') ) {$page_title = 'Полотенца для хоккеиста';}
if ( is_product_category('rem-komplekty-zapchasti') ) {$page_title = 'Запчасти для хоккейной экипировки';}
if ( is_product_category('klyushki') ) {$page_title = 'Хоккейные клюшки';}
if ( is_product_category('vzroslye-senior-sr-17-let') ) {$page_title = 'Взрослые клюшки для хоккея с шайбой';}
if ( is_product_category('podrostkovye-intermediate-int-14-17-let') ) {$page_title = 'Подростковые клюшки для хоккея с шайбой';}
if ( is_product_category('yuniorskie-junior-jr-7-14-let') ) {$page_title = 'Юниорские клюшки для хоккея с шайбой';}
if ( is_product_category('detskie-youth-yth-do-7-let') ) {$page_title = 'Детские клюшки для хоккея с шайбой';}
if ( is_product_category('povsednevnaya-odezhda') ) {$page_title = 'Повседневная спортивная одежда для хоккеиста';}
if ( is_product_category('muzhskaya') ) {$page_title = 'Мужская одежда для хоккеиста';}
if ( is_product_category('bomber') ) {$page_title = 'Мужские бомберы для хоккеиста';}
if ( is_product_category('verhnyaya-odezhda-muzhskaya') ) {$page_title = 'Верхняя мужская одежда (куртки) для хоккеиста';}
if ( is_product_category('polo-muzhskie') ) {$page_title = 'Хоккейные мужские поло';}
if ( is_product_category('svitshoty-muzhskie') ) {$page_title = 'Хоккейные мужские свитшоты';}
if ( is_product_category('tolstovki-muzhskie') ) {$page_title = 'Мужские толстовки для хоккеиста';}
if ( is_product_category('futbolki-muzhskie') ) {$page_title = 'Хоккейные мужские футболки';}
if ( is_product_category('shorty-muzhskie') ) {$page_title = 'Мужские шорты для хоккеиста';}
if ( is_product_category('shtany-i-bryuki-muzhskie') ) {$page_title = 'Хоккейные мужские штаны и брюки';}
if ( is_product_category('zhenskaya') ) {$page_title = 'Женская одежда с хоккейной символикой';}
if ( is_product_category('verhnyaya-odezhda-zhenskaya') ) {$page_title = 'Верхняя женская одежда с хоккейной символикой';}
if ( is_product_category('polo-zhenskie') ) {$page_title = 'Хоккейные женские поло';}
if ( is_product_category('svitshoty-zhenskie') ) {$page_title = 'Хоккейные женские свитшоты';}
if ( is_product_category('tolstovki-zhenskie') ) {$page_title = 'Хоккейные женские толстовки';}
if ( is_product_category('futbolki-zhenskie') ) {$page_title = 'Хоккейные женские футболки';}
if ( is_product_category('shtany-i-bryuki-zhenskie') ) {$page_title = 'Хоккейные женские штаны и брюки';}
if ( is_product_category('detskaya-odezhda') ) {$page_title = 'Детская одежда для хоккеиста';}
if ( is_product_category('bodi') ) {$page_title = 'Детские хоккейные боди';}
if ( is_product_category('zhiletki') ) {$page_title = 'Детские жилетки для хоккеистов';}
if ( is_product_category('kostyum') ) {$page_title = 'Детские хоккейные костюмы';}
if ( is_product_category('kurtki') ) {$page_title = 'Детские хоккейные куртки';}
if ( is_product_category('parki') ) {$page_title = 'Детские хоккейные парки';}
if ( is_product_category('polzunki') ) {$page_title = 'Детские хоккейные ползунки';}
if ( is_product_category('polo-detskie') ) {$page_title = 'Детские хоккейные поло';}
if ( is_product_category('svitshoty-detskie') ) {$page_title = 'Детские свитшоты для хоккеистов';}
if ( is_product_category('tolstovki-detskie') ) {$page_title = 'Детские толстовки для хоккеистов';}
if ( is_product_category('futbolki-detskie') ) {$page_title = 'Детские футболки для хоккеистов';}
if ( is_product_category('shorty-detskie') ) {$page_title = 'Детские хоккейные шорты';}
if ( is_product_category('shtany-i-bryuki-detskie') ) {$page_title = 'Детские хоккейные штаны и брюки';}
if ( is_product_category('podrostkovaya') ) {$page_title = 'Подростковая одежда для хоккеиста';}
if ( is_product_category('svitshoty-podrostkovye') ) {$page_title = 'Подростковые хоккейные свитшоты';}
if ( is_product_category('tolstovki-podrostkovye') ) {$page_title = 'Подростковые толстовки для хоккеистов';}
if ( is_product_category('futbolki-podrostkovye') ) {$page_title = 'Хоккейные футболки для подростков';}
if ( is_product_category('shtany-i-bryuki-podrostkovye') ) {$page_title = 'Хоккейные штаны и брюки для подростков';}
if ( is_product_category('golovnye-ubory') ) {$page_title = 'Головные уборы с хоккейной символикой';}
if ( is_product_category('bejsbolki') ) {$page_title = 'Хоккейные бейсболки, кепки и снепбеки';}
if ( is_product_category('shapki') ) {$page_title = 'Хоккейные шапки';}
if ( is_product_category('sharfy') ) {$page_title = 'Хоккейные шарфы';}
if ( is_product_category('perchatki') ) {$page_title = 'Перчатки с хоккейной символикой';}
if ( is_product_category('obuv') ) {$page_title = 'Спортивная обувь для хоккеистов';}
if ( is_product_category('shlepantsy') ) {$page_title = 'Спортивные шлепанцы для душа';}
if ( is_product_category('sportivnaya-meditsina') ) {$page_title = 'Медицинкие товары для спортсменов';}
if ( is_product_category('zamorozka') ) {$page_title = 'Спортивная заморозка при травмах';}
if ( is_product_category('maska') ) {$page_title = 'Маски против COVID с хоккейной символикой';}
if ( is_product_category('sportivnoe-pitanie') ) {$page_title = 'Спортивное питание для хоккеистов';}
if ( is_product_category('tejpy-binty') ) {$page_title = 'Тейпы и эластичные бинты для спорта и хоккея';}
if ( is_product_category('suveniry') ) {$page_title = 'Хоккейные сувениры';}
if ( is_product_category('brelki-i-podveski') ) {$page_title = 'Брелки и подвески с хоккейными клубами';}
if ( is_product_category('dlya-avto') ) {$page_title = 'Хоккейная атрибутика в автомобиль';}
if ( is_product_category('dlya-telefona') ) {$page_title = 'Хоккейные чехлы и наклейки на телефон';}
if ( is_product_category('znachki') ) {$page_title = 'Хоккейные значки';}
if ( is_product_category('kantselyariya') ) {$page_title = 'Канцелярские товары с хоккейной тематикой';}
if ( is_product_category('kruzhki') ) {$page_title = 'Кружки хоккейных клубов';}
if ( is_product_category('magnity') ) {$page_title = 'Хоккейные сувенирные магниты';}
if ( is_product_category('mini-klyushki') ) {$page_title = 'Сувенирные мини-клюшки';}
if ( is_product_category('postelnoe-bele') ) {$page_title = 'Постельное белье на хоккейную тематику';}
if ( is_product_category('figury-i-igrushki') ) {$page_title = 'Хоккейные фигурки и игрушки';}
if ( is_product_category('chasy') ) {$page_title = 'Часы для хоккеистов';}
if ( is_product_category('shajby-suvenirnye') ) {$page_title = 'Сувенирные шайбы с логотипами команд NHL и КХЛ';}
if ( is_product_category('sumki-bauly') ) {$page_title = 'Сумки и баулы для хоккеистов';}
if ( is_product_category('bauly') ) {$page_title = 'Хоккейные баулы';}
if ( is_product_category('sumki-dlya-klyushek') ) {$page_title = 'Сумки для переноса и хранения хоккейных клюшек';}
if ( is_product_category('sumki-dlya-konkov') ) {$page_title = 'Сумки для хранения и переноса коньков';}
if ( is_product_category('dlya-shajb') ) {$page_title = 'Сумки-переноски для шайб';}
if ( is_product_category('koshelki') ) {$page_title = 'Кошельки для хоккеистов';}
if ( is_product_category('meshki') ) {$page_title = 'Мешки универсальные с логотипами хоккейных клубов';}
if ( is_product_category('mini-bauly') ) {$page_title = 'Хоккейные мини-баулы (косметички)';}
if ( is_product_category('na-poyas') ) {$page_title = 'Сумки на пояс с хоккейными клубами NHL и КХЛ';}
if ( is_product_category('penaly') ) {$page_title = 'Пеналы в школу для хоккеистов';}
if ( is_product_category('ryukzaki') ) {$page_title = 'Хоккейные рюкзаки с клубами NHL и КХЛ';}
if ( is_product_category('sumki') ) {$page_title = 'Хоккейные сумки для документов';}
if ( is_product_category('trenirovochnyj-protsess') ) {$page_title = 'Товары для тренировок по хоккею с шайбой';}
if ( is_product_category('dlya-trenera') ) {$page_title = 'Товары для тренера по хоккею с шайбой';}
if ( is_product_category('myachi-dlya-hokkeya') ) {$page_title = 'Мячи для хоккея';}
if ( is_product_category('oborudovanie-dlya-trenirovok') ) {$page_title = 'Оборудование для тренеровок по хоккею';}
if ( is_product_category('trenazhery') ) {$page_title = 'Тренажеры для хоккеиста';}
if ( is_product_category('shajby') ) {$page_title = 'Шайбы хоккейные игровые и тренировочные';}
if ( is_product_category('florbol') ) {$page_title = 'Товары для флорбола (хоккей на паркете)';}
if ( is_product_category('klyushki-dlya-florbola') ) {$page_title = 'Клюшки для игры в флорбол';}
if ( is_product_category('myachi-dlya-florbola') ) {$page_title = 'Мячи для флорбола';}
if ( is_product_category('ekipirovka') ) {$page_title = 'Экипировка (форма) для хоккея';}
if ( is_product_category('igrok') ) {$page_title = 'Хоккейная экипировка для полевого игрока';}
if ( is_product_category('aksessuary-dlya-shlema') ) {$page_title = 'Аксессуары для хоккейного шлема';}
if ( is_product_category('zashhita-kistej') ) {$page_title = 'Защита кистей, запястий и предплечия игроков в хоккей';}
if ( is_product_category('zashhita-shei-igroka') ) {$page_title = 'Защита шеи игрока в хоккей';}
if ( is_product_category('kapy') ) {$page_title = 'Капы для игры в хоккей';}
if ( is_product_category('nalokotniki') ) {$page_title = 'Хоккейные налокотники для игрока';}
if ( is_product_category('perchatki-hokkejnye-kragi') ) {$page_title = 'Хоккейные перчатки (краги)';}
if ( is_product_category('trusy') ) {$page_title = 'Хоккейные шорты (трусы)';}
if ( is_product_category('shlemy-reshetki-vizora') ) {$page_title = 'Шлемы, решетки и визоры для игрока в хоккей';}
if ( is_product_category('vratar') ) {$page_title = 'Хоккейная экипировка и защита для вратаря';}
if ( is_product_category('aksessuary-dlya-vratarya') ) {$page_title = 'Защита шеи и горла для хоккейного вратаря';}
if ( is_product_category('konki') ) {$page_title = 'Хоккейные коньки';}
if ( is_product_category('bandazh-rakovina') ) {$page_title = 'Бандаж-раковина (ракушка) для хоккеистов';}
if ( is_product_category('odezhda-dlya-trenirovok') ) {$page_title = 'Одежда для занятий хоккеем на льду';}
if ( is_product_category('podtyazhki') ) {$page_title = 'Подтяшки для хоккейных шорт и трусов';}
if ( is_product_category('balaklavy') ) {$page_title = 'Хоккейные балаклавы и подшлемники';}
if ( is_product_category('gamashi-rejtuzy') ) {$page_title = 'Хоккейные гамаши и рейтузы';}
if ( is_product_category('poyas-dlya-gamash') ) {$page_title = 'Пояса для хоккейных гамаш';}
if ( is_product_category('bele') ) {$page_title = 'Нательное белье для хоккеиста';}
if ( is_product_category('verh') ) {$page_title = 'Верх от нательного хоккейного белья';}
if ( is_product_category('niz') ) {$page_title = 'Низ от нательного хоккейного белья';}
if ( is_product_category('kombinezony') ) {$page_title = 'Хоккейные комплекты нательного белья';}
if ( is_product_category('hokkejnye-noski') ) {$page_title = 'Хоккейные носки';}
if ( is_product_category('hokkejnye-svitera') ) {$page_title = 'Хоккейные тренировочные и игровые свитера';}
if ( is_product_category('dzhersi-nhl') ) {$page_title = 'Джерси NHL';}
if ( is_product_category('dzhersi-rhl') ) {$page_title = 'Джерси РХЛ и КХЛ';}
if ( is_product_category('trenirovochnye-svitera') ) {$page_title = 'Тренировочные свитера и майки для хоккея';}

    return $page_title;
}


?>