<?php

include('./dbConfig.php');

$targetDirectory = 'images/';//画像が入るフォルダ
$fileName = basename($_FILES["file"]["name"]);//画像名をとりにいく
$targetFilePath = $targetDirectory . $fileName;//images/画像データ というパスができた
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);//拡張子を取得

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($fileName)) {//postImageForm からpost送信されている　画像名が空でないかも確認
    $arrImageTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $arrImageTypes)) {//8行目で取得した拡張しがこの配列の中に入っているか確認
        $postImageForServer = move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);//imagesフォルダに画像をアップロード

        if ($postImageForServer) {
            $insert = $db->query("INSERT INTO images (file_name) VALUES ('" . $fileName . "')");//imagesテーブルに保存
        }
    }
}

header('Location: ' . './html/index.php', true, 303);
exit();