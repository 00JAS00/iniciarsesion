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
        if (!$dbh) {
          echo'<script>alert("conexion fallida")</script>';
        }
        else{
          echo'<script>alert("conexion exitosa")</script>';
        }
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
  echo '<script>alert("llegaron los datos")</script>';
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
    <title>Document</title>
</head>
<body>
    <h1>registro completo has sido hackeado</h1>
    <script>alert("has sido hackeado jeje")</script>
</body>
</html>