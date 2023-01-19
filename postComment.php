<?php
include('./dbConfig.php');
$imageId = $_GET['image_id'];$symptoms = implode(',', $_POST['symptoms']);//これでcheckboxをDBに入れられた！
$comment = $_POST['comment'];
$comment2 = $_POST['comment2'];


if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($comment) && !empty($comment2)) {
  $insert = $db->query("INSERT INTO comments (image_id, comment , comment2, symptoms)
             VALUES (" . $imageId . ",'" . $comment . "' ,'" . $comment2 . "','" . $symptoms . "') ");


  if ($insert) {
    $uri = $_SERVER['HTTP_REFERER'];
    header('Location: ' . $uri, true, 303);
    exit();
  }
}else{
  $uri = $_SERVER['HTTP_REFERER'];
  header('Location: ' . $uri, true, 303);
  exit();

}

ini_set('display_errors', "On");
