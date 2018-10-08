<?php
/**
 * Created by PhpStorm.
 * User: 00660
 * Date: 08/10/2018
 * Time: 09:25
 */

require_once("config.php");

$thiago = new Usuario();
$thiago->loadById(1644);
echo $thiago;