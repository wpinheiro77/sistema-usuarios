<?php
  $host   = "mysql:dbname=blog;host=localhost";
  $dbuser = "root";
  $dbpass = "";

  try{
    $pdo = new PDO($host,$dbuser,$dbpass);
  } catch(PDOException $e) {
    echo "Erro de conexão... <br/>";
    echo "Erro: ".$e->getMessage();
  }
?>