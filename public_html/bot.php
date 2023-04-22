<?php
    #Token
    $token = "6048100130:AAElJF71MWrhkD4VyqzOWrS9CmP-wBl0qR4";
    #WebSite 
    $website = "https://api.telegram.org/bot".$token;

    $input = file_get_contents('php://input');
    $update = json_decode($input, TRUE);

    $chatId = $update['message']['chat']['id'];
    $message = $update['message']['text'];

    switch($message) {
        case '/start':
            $response = "Iniciando BOT McFly Soluciones Informaticas";
            sendMessage($chatId, $response);
            break;
        case 'Carne':
            $response = "Pasillo 1";
            sendMessage($chatId, $response);
            break;
        case 'Queso':
            $response = "Pasillo 1";
            sendMessage($chatId, $response);
            break;
        case 'Jamón':
            $response = "Pasillo 1";
            sendMessage($chatId, $response);
            break;
        default:
            $response = "No te he entendido";
            sendMessage($chatId, $response);
            break;
    }

    function sendMessage($chatId, $response) {
        $url = $GLOBALS['website'].'/sendMessage?chat_id=' . $chatId . '&parse_mode=HTML&text='.urlencode($response);
        file_get_contents($url);
    }
?>
