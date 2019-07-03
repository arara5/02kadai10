<?php
//$_SESSION使うよ！
session_start();

//※htdocsと同じ階層に「includes」を作成してfuncs.phpを入れましょう！
//include "../../includes/funcs.php";
include "funcs.php";
sessChk();

//1. POSTデータ取得
$name   = filter_input( INPUT_POST, "name" );
$pname  = filter_input( INPUT_POST, "pname" );
$naiyou = filter_input( INPUT_POST, "naiyou" );
$kekka   = filter_input( INPUT_POST, "kekka" );
$id     = filter_input( INPUT_POST, "id" );

//2. DB接続します
$pdo = db_con();

//３．データ登録SQL作成
$sql = "UPDATE gs_an_table SET name=:name,pname=:pname,kekka=:kekka,naiyou=:naiyou WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':pname', $pname, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kekka', $kekka, PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
    sqlError($stmt);
} else {
    //５．index.phpへリダイレクト
    header("Location: select.php");
    exit;
}
