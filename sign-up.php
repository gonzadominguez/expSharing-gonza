<!-- type="password"
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <title></title>
  </head>
  <body background ="images/registro.jpg">

      <p><?php echo (isset($_COOKIE["errors"])) ? $_COOKIE["errors"] : "";  ?></p>
      <p><?php echo (isset($_COOKIE["success"])) ? $_COOKIE["success"] : "";  ?></p>

  <section class="container">
    <header class="main-header">

        <a href="#" class="toggle-nav">
          <span class="ion-navicon-round"></span>
        </a>
      <img src="images/logoresponsive.png" alt="logotipo" class="logonav">

      <nav class="main-nav">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Registrarse</a></li>
          <li><a href="loginn.html">Iniciar Sesión</a></li>
          <li><a href="FAQS.html">FAQs</a></li>
        </ul>
      </nav>
    </header>
    <section class="body-full">
      <div class="body-logo">
        <img src="images/logo.png" alt="logotipo" class="logo">
      </div>
      <div class="body-form">
        <div class="titular">Registrarse</div>
        <form action="save.php" class="log" method="post" enctype="multipart/form-data">
                <div class="info-login">
                  <div class="label">
                    <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Nombre"
                    value= "<?php echo (isset($_COOKIE["name"])) ? $_COOKIE["name"] : "";  ?>"
                    >
                  </div>
                  <br>
                  <div class="label">
                    <input
                    type="text"
                    name="lastname"
                    id="lastname"
                    placeholder="Apellido"
                    value= "<?php echo (isset($_COOKIE["lastname"])) ? $_COOKIE["lastname"] : "";  ?>"
                    >
                  </div>
                  <br>

                  <div class="label">
                    <input
                    type="text"
                    name="username"
                    id="username"
                    placeholder="Nombre de Usuario"
                    value= "<?php echo (isset($_COOKIE["username"])) ? $_COOKIE["username"] : "";  ?>"
                    >
                    </div>
                    <br>

                    <div class="label">
                      <input
                      type="email"
                      name="useremail"
                      id="useremail"
                      placeholder="Correo electronico "
                      value= "<?php echo (isset($_COOKIE["useremail"])) ? $_COOKIE["useremail"] : "";  ?>"
                      >
                    </div>

                    <br>

                    <div class="label">
                      <input
                      name="pass"
                      id="pass"
                      placeholder="contraseña">
                    </div>

                    <br>

                    <div class="label">
                      <input
                      type="password"
                      name="equals_pass"
                      id="equals_pass"
                      placeholder="Repetir contraseña">
                    </div>

                    <br>

                    <div class="label">
                      <input
                      type="file"
                      name="profile_pic"
                      id="profile_pic">
                    </div>

                    <br>
                      <button type="submit">Ingresar</button>
                  </form>

            <!-- <br>
            <div class="label">
              <input type="text" name="" value="" placeholder="Email">
            </div>
            <br>
            <div class="label">
              <input type="password" name="" value="" placeholder="Contraseña">
            </div>
            <br>
            <div class="label">
              <input type="password" name="" value="" placeholder="Repetir Contraseña">
            </div>
            <br>
            <div class="label">
              <input type="text" name="" value="" placeholder="Localidad y provincia">
            </div>



            <br>
            <div class="categorias">
          <select>
            <option value="Categorias">Categorias</option>
            <option value="culinaria">Culinaria</option>
            <option value="deportes extremos ">Deportes extremos </option>
            <option value="confecciones">Confecciones</option>
          </select>
          </div>

          <br>
          <div class="textarea">
            <textarea name="name" rows="5" cols="30"></textarea>
          </div> -->

        </div>
      <div class="corte"></div>
    </section>
    <footer>
      <div>English - Portuguese - Home - Registrarse -  Iniciar Sesión - FAQ's - Políticas de uso</div>
    </footer>
  </section>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script>
      $('.toggle-nav').click(function(){
        $('.main-nav').slideToggle(250);
      });
      </script>
  </script>
  </body>
</html> -->
