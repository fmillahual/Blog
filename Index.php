<?php
require_once('crud/crud_usuario.php');
require_once('model/usuarios.php');
$crud = new CrudUsuario();
$user = new Usuario();
$listaUsuario = $crud->LeerUsuario();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
    <div id="top-menu">
        <nav>
          <ul>
              <li><a href="#">inicio</a></li>
              <li><a href="#">santiago</a>
                  <ul id="sub-santiago">
                      <li><a href="#">¿Lugar de oportunidades?</a></li>
                      <li><a href="#">¿Cuanto cuesta vivir?</a></li>
                      <li><a href="#">¿Vivir solo o acompañado?</a></li>
                  </ul>
              </li>
              <li><a href="#">rentabilidad</a>
                  <ul id="sub-economia">
                      <li><a href="">Como buscar trabajo</a></li>
                      <li><a href="">Trabajos rentables</a></li>
                  </ul>
              </li>
              <li><a href="#">tips</a></li>
              <li><a href="#">contacto</a></li>
          </ul>
        </nav>
    </div>

<div id="redes-sociales">
<a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook fa-2x"></i></a><br><br>
<a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a><br><br>
<a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
</div>


<div class="contenido">
  <main>
    <article>
      <h2>¿Ultimo post?</h2>
      <img src="img/santiago.jpg" alt="">
      <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
     </p>
     <p>
     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       <a href="#">Continuar leyendo...</a>
    </p>
    </article>

    <article>
      <h2>¿Penultimo post?</h2>
      <img src="img/santiago.jpg" alt="">
      <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
     </p>
     <p>
     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       <a href="#">Continuar leyendo...</a>
    </p>
    </article>

    <article>
      <h2>¿Ante penultimo post?</h2>
      <img src="img/santiago.jpg" alt="">
      <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
     </p>
     <p>
     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       <a href="#">Continuar leyendo...</a>
    </p>

    </article>

    <article>
      <h2>¿Segundo post?</h2>
      <img src="img/santiago.jpg" alt="">
      <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
     </p>
     <p>
     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       <a href="#">Continuar leyendo...</a>
    </p>
    </article>

    <article>
      <h2>¿Primer post?</h2>
      <img src="img/santiago.jpg" alt="">
      <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
     </p>
     <p>
     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
       <a href="#">Continuar leyendo...</a>
    </p>
    </article>
  </main>
</div>

<aside class="aside-contenido">
  <img src="img/me.jpg" alt="">
  <p id="autor">Autor del sitio...
  </p>
</aside>


<aside class="aside-categorias">
  <img src="img/me.jpg" alt="">
  <p id="autor">Autor del sitio...
  </p>
</aside>



<div class="comentarios">
  <h3>dejanos tu comentario</h3>
  <form class="comment-style"action="index.html" method="post">
    <textarea class="text-style"name="comentar" rows="8" cols="80" placeholder="¿Que pasa por tu cabeza?"></textarea>
    <input class="autor text-style" type="text" name="autor" value="" placeholder="Tu nombre">
    <input class="email text-style" type="email" name="" value="" placeholder="Tu email (no se vera en los comentarios)"><br>
    <input class="btn-comentar" type="submit" name="" value="Comentar">
  </form>
</div>

<footer>
<?php foreach ($listaUsuario as $usuario) { ?>
 <p> <?php echo $usuario->getNombre(); ?> </p>
 <p> <?php echo $usuario->getEmail(); ?> </p>
<?php } ?>
</footer>

</body>
</html>
