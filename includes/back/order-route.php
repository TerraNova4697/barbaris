<?php

include(get_theme_file_path( '/includes/back/barbaris_constants.php' ));



add_action('rest_api_init', 'barbaris_order_endpoint');

function barbaris_order_endpoint() {
    register_rest_route( 'barbaris/v1', 'order', array(
        'methods' => WP_REST_Server::CREATABLE,
        'callback' => 'barbaris_handle_order'
    ));
}

function barbaris_handle_order ( WP_REST_Request $request) {
    $orderType = sanitize_text_field($request['type']);
    $companyName = sanitize_text_field($request['companyName']);
    $companyPhoneNumber = sanitize_text_field($request['companyPhoneNumber']);

    $BASE_URL = 'https://api.telegram.org/bot';
    $BOT_TOKEN = '5965719168:AAHr88kMLtftie_KuiOAaFPCdP2z1IG0ox4';
    $GROUP_ID = '-1001643994402';

    $orderText = "<b>Новый заказ!</b>\nТариф: <b>$orderType</b>\nКомпания: <b>$companyName</b>\nНомер телефона: <b>$companyPhoneNumber</b>";

    $request_url = $BASE_URL . $BOT_TOKEN . '/sendMessage';
    $data = array('chat_id' => $GROUP_ID, 'text' => $orderText, 'parse_mode' => 'HTML');

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($request_url, false, $context);
    if ($result === FALSE) { 
        return "ERROR 400";
    }
    return 'OK 200';
}
