<?php 
  if (isset($_POST['envio'])) {
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $contrasena=$_POST['contrasena'];


    $user="root";
    $password="";
    $dbname="usuario";
    $host="localhost";
    try{
    
        
        $dsn = "mysql:host=$host;dbname=$dbname";
    
        $dbh = new PDO($dsn, $user, $password);
    
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo $e->getMessage();
    } 
  
  // Prepare

  $stmt = $dbh->prepare("INSERT INTO registro_usuarios(nombre, apellido, email, contrasena) VALUES (?, ?, ?, ?)");

  // Bind
  


  
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $email=$_POST['email'];
    $contrasena=$_POST['contrasena'];
    $stmt->bindParam(1,$nombre);
    $stmt->bindParam(2,$apellido);
    $stmt->bindParam(3,$email);
    $stmt->bindParam(4,$contrasena);
  
    // Excecute

    $stmt->execute();
  }
  else{
    echo'<script>alert("no se cargaron los datos")</script>';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/registro.css">
    <title>TU PREMIO AQUI</title>
</head>
<body>
  <div>
    <script>alert('Felizidades Tu Premio es este hermoso paisaje')</script>
  </div>    

</body>