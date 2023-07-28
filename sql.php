<?php
$dsn = 'mysql:host=localhost;dbname=userinformation';
$username = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    //create datatable 
    $sql = 'CREATE TABLE IF NOT EXISTS '.$_POST['name'].' (id INT(11) NOT NULL auto_increment PRIMARY KEY,name TEXT,email TEXT,player TEXT,vehicle TEXT) DEFAULT CHARSET="utf8"';
    //SQL文を実行
    $result = $dbh->query($sql);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $player = $_POST['player'];
    $vehicle = $_POST['vehicle'];

    $sql = "INSERT INTO $name (name, email, player, vehicle) VALUES (:name, :email, :player, :vehicle)"; // テーブルに登録するINSERT INTO文を変数に格納　VALUESはプレースフォルダーで空の値を入れとく
    $stmt = $dbh->prepare($sql); //値が空のままSQL文をセット
    $params = array(':name' => $name, ':email' => $email, ':player' => $player, ':vehicle' => $vehicle); // 挿入する値を配列に格納
    $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行

} catch (PDOException $e) {
    echo "<p>Failed : " . $e->getMessage()."</p>";
    exit();
}
?>