<?php

// session_start();
include("functions.php");


// if(isset($_POST['signup'])) {

$name = $_POST["name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$lpw = password_hash($lpw, PASSWORD_DEFAULT);

$pdo = db_conn();



$sql = "INSERT INTO gs_user_table(id,name,lid,lpw,kanri_flg,life_flg)
VALUES(NULL, :a1, :a2, :a3, :a4, :a5)";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $lid, PDO::PARAM_STR);
$stmt->bindValue(':a3', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':a4', $kflg = 0, PDO::PARAM_STR);
$stmt->bindValue(':a5', $lflg = 1, PDO::PARAM_STR);
$res = $stmt->execute();


if($stmt){ ?>
  <div class="alert alert-success" role="alert">登録しました</div>
  <?php } else{ ?>
  <div class="alert alert-danger" role="alert">エラー発生しました。</div>
  <?php
  }


if($res==false){
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("sqlError:".$error[2]);
  }else{
    //５．index.phpへリダイレクト
    header ("Location: login2.php");

}

?>






