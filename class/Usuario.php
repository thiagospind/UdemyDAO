<?php
/**
 * Created by PhpStorm.
 * User: 00660
 * Date: 08/10/2018
 * Time: 15:34
 */

class Usuario{
    private $codigo;
    private $matricula;
    private $usuario;
    private $senha;

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($value){
            $this->codigo = $value;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($value){
        $this->matricula = $value;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($value){
        $this->usuario = $value;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($value){
        $this->senha = $value;
    }

    public function loadById($id){
        $sql = new Sql();
        $results = $sql->select("select * from usuarios where codigo = :id",array(
            ":id"=>$id
        ));
        if (count($results) > 0){
            $row = $results[0];

            $this->setCodigo($row['CODIGO']);
            $this->setMatricula($row['MATRICULA']);
            $this->setUsuario($row['USUARIO']);
            $this->setSenha($row['SENHA']);
        }
    }
    public static function getList(){
        $sql = new Sql();
        return $sql->select("select * from usuarios order by USUARIO");

    }

    public static function search($usuario){
        $sql = new Sql();
        return $sql->select("select * from usuarios where usuario like :search ",array(
            ':search'=>"%".$usuario."%"
        ));
    }

    public function login($usuario,$senha){
        $sql = new Sql();
        $results = $sql->select("select * from usuarios where usuario = :usuario and senha = :senha",array(
            ":usuario"=>$usuario,
            ":senha"=>$senha
        ));
        if (count($results) > 0){
            $row = $results[0];

            $this->setCodigo($row['CODIGO']);
            $this->setMatricula($row['MATRICULA']);
            $this->setUsuario($row['USUARIO']);
            $this->setSenha($row['SENHA']);
        } else {
            throw new Exception("Login e/ou senha inválidos");
        }
    }

    function __toString()
    {
        return json_encode(array(
            "codigo"=>$this->getCodigo(),
            "matricula"=>$this->getMatricula(),
            "usuario"=>$this->getUsuario(),
            "senha"=>$this->getSenha()
        ));
    }


}