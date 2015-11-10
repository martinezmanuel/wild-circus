<?php
session_start();
// $errors = [];
  $errors = array(); 
if(!array_key_exists('name', $_POST) || $_POST['name'] == '') {
  $errors ['name'] = "You did'nt put your name";
  }
    if(array_key_exists('country', $_POST)) {// 
  $errors ['country'] = "You didn't put your country";
  }
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $errors ['mail'] = "you did'nt put your email";
  }
if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
  $errors ['message'] = "You didn't put a message";
  }

  if(!empty($errors)){ 
  $_SESSION['errors'] = $errors;
  $_SESSION['inputs'] = $_POST;
  header('Location: contact.php');
  }else{
  $_SESSION['success'] = 1;
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $headers .= 'FROM:' . htmlspecialchars($_POST['email']);
  $to = 'postmaster@integration-wild-code-school.nhvs.fr'; 
  $subject = 'Message send by' . htmlspecialchars($_POST['name']) .' - <i>' . htmlspecialchars($_POST['email']) .'</i>';
  $message_content = '
  <table>
  <tr>
  <td><b>Who send you a mail:</b></td>
  </tr>
  <tr>
  <td>'. $subject . '</td>
  </tr>
  <tr>
  <td><b>What in the mail:</b></td>
  </tr>
  <tr>
  <td>'. htmlspecialchars($_POST['message']) .'</td>
  </tr>
  </table>
  ';
mail($to, $subject, $message_content, $headers);
  header('Location: contact.php');
  }
  ?>