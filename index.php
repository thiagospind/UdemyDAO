<?php
/**
 * Created by PhpStorm.
 * User: 00660
 * Date: 08/10/2018
 * Time: 09:25
 */

require_once("config.php");

//Carrega um usuário
//$thiago = new Usuario();
//$thiago->loadById(1644);
//echo $thiago;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega lista de usuarios pelo usuario
//$search = Usuario::search("andr");
//echo json_encode($search);

//Carrega um usuario usando login e a senha
//$usuario = new Usuario();
//$usuario->login("00817","123mudar");

//Insere Usuario
//$aluno = new Usuario();

//$aluno->setMatricula("00660");
//$aluno->setUsuario("660");
//$aluno->setSenha("123mudar");

//$aluno->insert();

//Atualiza Usuário

$usuario = new Usuario();
$usuario->loadById(1857);

$usuario->update("123","00660");

echo $usuario;