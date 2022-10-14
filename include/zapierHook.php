<?php
function sendToZapier($data = []){
    $data_json = json_encode($data);
    $url = 'https://hooks.zapier.com/hooks/catch/5101390/b06smab/';
    
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Access-Control-Allow-Methods: POST'));

    // Pass user data in POST command
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
    
    // Execute curl and assign returned data
    $response  = curl_exec($ch);

    // Close curl
    curl_close($ch);

// See response if data is posted successfully or any error
print_r ($response);
}

function testing($data = []){
    echo json_encode($data);
}
    testing($_POST);
?>