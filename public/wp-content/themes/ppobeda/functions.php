<?php
//if (!is_admin()) show_admin_bar(false);

require_once 'includes/init.php';
require_once 'shortcodes/send_order.php';

// Используется для телефона, чтобы оставить только цифры в номере
function return_numbers_from_string( $string ){
  $result = preg_replace("/[^+0-9]/", '', $string);
  echo $result;
}

function order_desc(){
  return '<h2>Как сделать заказ/запрос</h2><p>На нашем сайте не размещаются цены на продукцию, в соответсвии с политкой нашей компании, мы указываем их только в специально сформированном для вас коммерческом предложении.</p><p>Свяжитесь с нами любым указанным ниже способом или пришлите текущие потребности, в течении двух часов вы получите ответ, коммерческое предложение или счет.</p>';
}
add_shortcode( "order_desc" , "order_desc" );

