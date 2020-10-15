<?php 

$countries = json_decode(file_get_contents('countries_large.geo.json'),true);

ini_set('memory_limit', '64M');



$parsedCountries = [];
foreach ($countries ['features'] AS $country)
{
  
  
    $name=$country['properties']['ADMIN'];
    $code=$country['properties']['ISO_A3'];

    $parseCountries[]=array(
        'name'=> $name,
        'code'=> $code,
        
    );

}



$output2['status']['code'] = "200";
$output2['status']['name'] = "ok";
$output2['status']['description'] = "mission saved";

$output2['data'] = $parseCountries;

header('Content-Type: application/json; charset=UTF-8');

echo json_encode($output2)
?>



