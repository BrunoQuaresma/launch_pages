<?php

if(!has_valid_params()) {
  die(error());
}

$subscribes_file = './../subscribes.json';
$subscribes_content = file_get_contents($subscribes_file);
$subscribes = json_decode($subscribes_content, true);

$new_subscribe = new stdClass();
$new_subscribe->created_at = date('Y-m-d-H:i:s');
$new_subscribe->email = $_POST['email'];

array_push($subscribes, $new_subscribe);

file_put_contents($subscribes_file, json_encode($subscribes));

function has_valid_params() {
  return (
    isset($_POST['email']) &&
    !empty($_POST['email'])
  );
}

function error() {
  $error = '{"error": "email field is required"}';

  header('Content-Type: application/json');
  http_response_code(400);

  return $error;
}
