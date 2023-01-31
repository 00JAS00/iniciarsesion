<?php 
  try{

    $user='root';
    $password='';
    $dbname='usuario';
    $dsn="mysql:host=localhost;dbname=$dbname";
    $dbh= new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $e){
    echo $e->getMessage();
  }
  // Prepare

  $stmt = $dbh->prepare("INSERT INTO registro_usuarios (id,nombre, apellido, email, contrasena) VALUES (':nombre', ':apellido', ':email', ':contraseña')");

  // Bind

  $stmt->bindValue(':nombre', $_POST['nombre']);
  $stmt->bindValue(':apellido', $_POST['apellido']);
  $stmt->bindValue(':email', $_POST['email']);
  $stmt->bindValue(':contrasena', $_POST['contrasena']);
  
  // Excecute

  $stmt->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>registro completo has sido hackeado</h1>
    <script>alert("has sido hackeado jeje")</script>
</body>
</html>