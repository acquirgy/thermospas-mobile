<?php

if(!isset($_POST) || $_POST['validate'] != 'valid') {
  header('Location: /'); exit();
}

session_start();

require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/HtDb.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/classes/HtEmail.php');

$db = new HtDb();
$email = new HtEmail();

$submission = array(
  'fname' => isset($_POST['first_name']) ? $_POST['first_name'] : 'not provided',
  'lname' => isset($_POST['last_name']) ? $_POST['last_name'] : 'not provided',
  'address1' => isset($_POST['address']) ? $_POST['address'] : 'not provided',
  'city' => isset($_POST['city']) ? $_POST['city'] : 'not provided',
  'state' => isset($_POST['state']) ? $_POST['state'] : 'not provided',
  'zipcode' => isset($_POST['zip']) ? $_POST['zip'] : 'not provided',
  'email' => isset($_POST['email']) ? $_POST['email'] : 'not provided',
  'phone' => isset($_POST['phone']) ? $_POST['phone'] : 'not provided'
);

// Insert record into database
$ht_id = $db->insert('ht_form', $submission);

// Update our session with record id so it can be used on confirmation page
$_SESSION['ht_id'] = $ht_id;

// Send email
//$submission = $db->get('ht_form', array('ht_id', $ht_id));
//$email->sendSubmission($submission, 'mobile landing page');

header('Location: confirmation.php');