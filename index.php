<?php
/**
 * Created by PhpStorm.
 * User: 00660
 * Date: 08/10/2018
 * Time: 09:25
 */

require_once ("config.php");

$sql = new Sql("mysql:host=localhost;dbname=aapvr","root","aapvr");
$usuarios = $sql->select("select * from usuarios");

echo json_encode($usuarios);