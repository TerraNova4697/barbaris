<?php

include(get_theme_file_path( '/includes/back/barbaris_constants.php' ));



add_action('rest_api_init', 'barbaris_quiz_endpoint');

function barbaris_quiz_endpoint() {
    register_rest_route( 'barbaris/v1', 'quiz', array(
        'methods' => WP_REST_Server::CREATABLE,
        'callback' => 'barbaris_handle_quiz'
    ));
}

function barbaris_handle_quiz ( WP_REST_Request $request) {
    $block = sanitize_text_field($request['block']);
    $companyName = sanitize_text_field($request['companyName']);
    $employees = sanitize_text_field($request['employees']);
    $companyPhoneNumber = sanitize_text_field($request['phoneNumber']);
    $position = sanitize_text_field($request['position']);

    $BASE_URL = 'https://api.telegram.org/bot';
    $BOT_TOKEN = '5965719168:AAHr88kMLtftie_KuiOAaFPCdP2z1IG0ox4';
    $GROUP_ID = '-1001643994402';

    $orderText = "<b>Новая компания!</b>\nКомпания: <b>$companyName</b>\nКоличество сотрудников: <b>$employees</b>\nДолжность: <b>$position</b>\nНомер телефона: <b>$companyPhoneNumber</b>\nБлок квиза: <b>$block</b>";

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
