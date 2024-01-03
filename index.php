<?php

// Set your OData service URL
$url = 'https://services.odata.org/TripPinRESTierService/Airlines';

$data = file_get_contents($url);

$json_data = json_decode($data);

// echo $json_data;
// print_r($json_data);

// Accéder à la propriété @odata.context
echo $json_data->{'@odata.context'};  // Affiche "https://services.odata.org/TripPinRESTierService/(S(x4aibxjfrygeybs53pozbatr))/$metadata#Airlines"
echo "<br>";

// Accéder au tableau de valeurs (value)
$values = $json_data->value;

// Parcourir le tableau d'objets stdClass
foreach ($values as $value) {
    // Accéder aux propriétés de chaque objet stdClass
    echo $value->{'@odata.etag'} . "<br>";    // Affiche la valeur de @odata.etag
    echo $value->AirlineCode . "<br>";        // Affiche la valeur de AirlineCode
    echo $value->Name . "<br>";               // Affiche la valeur de Name
    echo "<br>";
}

// $curl_options = array(
//     CURLOPT_URL            => $url,
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_FOLLOWLOCATION => false,
//     CURLOPT_HTTPHEADER     => array(
//         'Content-Type: application/json',
//     )
// );

// $ch = curl_init();
// curl_setopt_array($ch, $curl_options);



// // Exécuter la requête cURL
// $response = curl_exec($ch);

// // Vérifier si la requête a réussi
// if ($response === false) {
//     // Gérer les erreurs si la requête a échoué
//     die('Erreur lors de la requête GET.');
// }

// // Fermer la session cURL
// curl_close($ch);

// echo $response;



// // Convertir les données JSON en tableau PHP
// $json_data = json_decode($response, true);


// // Vérifier si la conversion a réussi
// if ($json_data === null) {
//     // Gérer les erreurs si la conversion a échoué
//     die('Erreur lors de la conversion des données JSON.');
// }

// // Afficher les données résultantes
// print_r($json_data);


// echo $response;
?>