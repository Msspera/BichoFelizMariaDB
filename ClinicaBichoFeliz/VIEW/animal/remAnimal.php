<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/MODEL/Animal.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/ClinicaBichoFeliz/BLL/bllAnimal.php';

    $id = $_GET['id'];
    
    $bll = new \BLL\bllAnimal;
    $bll->Delete($id);

    header("location: lstAnimal.php");
?>