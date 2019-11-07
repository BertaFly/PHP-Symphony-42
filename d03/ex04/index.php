<?php

include "vendor/tcdent/php-restclient/restclient.php";

$api = new RestClient([
  'base_url' => "http://api.openweathermap.org/data/2.5"
]);

$result = $api->get("forecast", [
  'id' => "Kiev,UA",
  "units" => "metric",
  "APPID" => "a21c516dc326348e3eff7a700f81f4f6"
]);

if($result->info->http_code == 200) {
  $newFile = fopen(__DIR__ . "/weather.txt", "w");
  fwrite($newFile, json_encode($result->decode_response()->list[1]));
  fclose($newFile);
}
