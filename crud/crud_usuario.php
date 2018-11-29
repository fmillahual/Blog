<?php
require_once('C:\xampp\htdocs\Blog\config\conn.php');


class CrudUsuario{

  public function __construct(){}

  public function InsertarUsuario($usuario){
    $con = Condb::enabledCon();
    $insert=$con->prepare('INSERT INTO USUARIO VALUES(:nombre,:email,:foto,:clave)');
    $insert->bindValue('nombre', $usuario->getNombre());
    $insert->bindValue('email', $usuario->getEmail());
    $insert->bindValue('foto', $usuario->getFoto());
    $insert->bindValue('clave', $usuario->getClave());
    $insert->execute();
  }


  public function LeerUsuario(){
    $con = Condb::enabledCon();
    $list=[];
    $sql="SELECT * FROM usuario";
    var_dump($sql);
    $read = $con->query($sql);
    

    foreach ($read->fetchAll() as $usuario) {
      $user = new Usuario();
      $user->setId($usuario['id']);
      $user->setNombre($usuario['nombre']);
      $user->setEmail($usuario['email']);
      $user->setFoto($usuario['foto']);
      $user->setClave($usuario['clave']);
      $list[]=$user;
    }
    return $list;
  }



public function EliminarUsuario($id){
    $con = Condb::enabledCon();
    $delete=$con->prepare('DELETE USUARIO WHERE id=:id');
    $delete->bindValue('id', $id);
    $delete->execute();
}

public function BuscarUsuario($id){
  $con = Condb::enabledCon();
  $select=$con->prepare('SELECT * FROM USUARIO WHERE id=:id');
  $select->bindValue('id', $id);
  $select->execute();
  $user=$select->fetch();
  $usuario = new Usuario();
  $usuario->setId($user['id']);
  $usuario->setNombre($user['nombre']);
  $usuario->setFoto($user['foto']);
  $usuario->setClave($user['clave']);
  return $usuario;
}


public function ActualizarUsuario($usuario){
  $con = Condb::enabledCon();
  $update = $con->prepare('UPDATE USUARIO SET nombre=:nombre, email=:email, foto=:foto, clave=:clave');
  $update->bindValue('nombre', $usuario->getNombre());
  $update->bindValue('email', $usuario->getEmail());
  $update->bindValue('foto', $usuario->getFoto());
  $update->bindValue('clave', $usuario->getClave());
  $update->execute();
}

}
 ?>
