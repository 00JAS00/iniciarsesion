<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Shop login</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./css/style.css">

</head>
<body>
  
<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Registrarse</a></li>
        <!-- <li class="tab"><a href="#login">Ingresar</a></li> -->
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Registrate para ganar un premio</h1>
          
          <form action="registro.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nombre <span class="req">*</span>
              </label>
              <input type="text" name="nombre"id="nombre" required autocomplete="off"/>
            </div>
        
            <div class="field-wrap">
              <label>
                Apellido<span class="req">*</span>
              </label>
              <input type="text" name="apellido"id="apellido"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" name="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Establece una contraseña<span class="req">*</span>
            </label>
            <input type="password"name="contrasena" class="contrasena"required autocomplete="off"/>
          </div>
          
          <button type="submit" name="envio"class="button button-block">Terminar registro</button>
          
          </form>

        </div>
        <!-- lo comente porque no llegue a hacer el inicio -->
    <!--     <div id="login">   
          <h1>Inicia y Reclama tu premio</h1>
          
          <form action="registro.php" method="post">
          
            <div class="field-wrap">
              <label>
                Email<span class="req">*</span>
              </label>
              <input type="email" class="email"required autocomplete="off"/>
            </div>
          
            <div class="field-wrap">
              <label>
                Contraseña<span class="req">*</span>
              </label>
              <input type="password" name="contrasena" class="contrasena"required autocomplete="off"/>
            </div>
            
            <button type="submit"  class="button button-block" >ingresar</button>
          
          </form>

        </div> -->
        
      </div><!-- tab-content -->
      
</div>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="./script.js"></script>

</body>
</html>

