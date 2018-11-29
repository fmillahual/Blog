<?php
require_once('../crud/crudUsuario.php');
require_once('../model/usuarios.php');

$crud = new CrudUsuario();
$user = new Usuario();


if(isset($_POST['insert'])){
  $user->setNombre($_POST['nombre']);
  $user->setEmail($_POST['email']);
  $user->setFoto($_POST['foto']);
  $user->setClave($_POST['clave']);
  $crud->InsertarUsuario($user);}
  header('location: ../Index.php');
}
 ?>
