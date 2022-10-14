<?php
function sendToZapier($data = [])
{
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

    return $response;
}

function exist($val)
{
    return isset($val) && !empty($val);
}

$data = [
    "nombre" => $_POST["cf-nombre"],
    "email" => $_POST["cf-email"],
    "tel" => $_POST["cf-tel"],
    "tema" =>  exist($_POST["cf-tema"]) ? $_POST["cf-tema"] : 'Nuevo lead de ' . $_POST['cf-proyecto'],
    "mensaje" => exist($_POST["cf-message"]) ? $_POST["cf-message"] : 'Estoy interezado en el proyecto',
];
$count = 0;
$no_data = [];
foreach ($data as $index => $d) {
    if (exist($d))
        $count++;
    else if ($index === "nombre" || $index === "email") {
        $no_data[] = $index;
        $count--;
    }
}
if ($count >= 3) {
    $r = json_decode(sendToZapier($data));
    if ($r->{'status'} === 'success') {
        echo json_encode(
            [
                'message' => 'Enviado con exito!',
                'data' => $data,
                'alert' => 'success'
            ]
        );
    } else {
        echo json_encode([
            'message' => 'Error en el Hook con Zapier!!',
            'alert' => 'error'
        ],);
    }
} else {
    // echo json_encode($no_data);
    echo json_encode([
        'message' => 'Faltan los datos: ' . $no_data,
        'alert' => 'error'
    ]);
}
$count = 0;
$no_data = [];
