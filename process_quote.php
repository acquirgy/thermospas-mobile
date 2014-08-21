<?php

if(!isset($_POST) || $_POST['validate'] != 'valid') {
  header('Location: /quote'); exit();
}

session_start();

require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/HtDb.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/HtEmail.php');

$db = new HtDb();
$email = new HtEmail();

$submission = array(
  'name' => isset($_POST['name']) ? $_POST['name'] : 'not provided',
  'ht_use' => isset($_POST['ht_use']) ? $_POST['ht_use'] : 'not provided',
  'ht_seating' => isset($_POST['ht_seating']) ? $_POST['ht_seating'] : 'not provided',
  'ht_location' => isset($_POST['ht_location']) ? $_POST['ht_location'] : 'not provided',
  'ht_jets' => isset($_POST['ht_jets']) ? $_POST['ht_jets'] : 'not provided',
  'ht_owner' => isset($_POST['ht_owner']) ? $_POST['ht_owner'] : 'not provided',
  'ht_siteinspection' => isset($_POST['ht_siteinspection']) ? $_POST['ht_siteinspection'] : 'not provided',
  'address1' => isset($_POST['address']) ? $_POST['address'] : 'not provided',
  'city' => isset($_POST['city']) ? $_POST['city'] : 'not provided',
  'state' => isset($_POST['state']) ? $_POST['state'] : 'not provided',
  'zipcode' => isset($_POST['zipcode']) ? $_POST['zipcode'] : 'not provided',
  'email' => isset($_POST['email']) ? $_POST['email'] : 'not provided',
  'phone' => isset($_POST['phone']) ? $_POST['phone'] : 'not provided',
  'iref' => isset($_SESSION['iref']) ? $_SESSION['iref'] : 'IPPC_M',
  'ht_date' => date("Y-m-d")
);

// Insert record into database if ajax (first portion of form submit)
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
  $_SESSION['ht_id'] = $db->insert('ht_form', $submission);
  $result = $_SESSION['ht_id'] ? 'success' : 'error';
  echo json_encode($result); exit();

} else {

  // Update the record with the remaining info
  $db->update('ht_form', $submission, 'ht_id', $_SESSION['ht_id']);

  // Send email
  $submission = $db->get('ht_form', array('ht_id', $ht_id));
  $email->sendSubmission($submission, 'mobile landing page');

  // Redirect
  header('Location: confirmation.php');
}
