<?php
     error_reporting(E_ALL & ~E_NOTICE);
     session_start();

     include 'head.php';
     include 'nav.php';

     $nome_fun = $_POST['nome_fun'];
     $cpf_fun = $_POST['cpf_fun'];
     $rg_fun = $_POST['rg_fun'];
     $telefone_fun = $_POST['telefone_fun'];
     $uf_fun = $_POST['uf_fun'];
     $cidade_fun = $_POST['cidade_fun'];
     $add_fun = $_POST['add_fun'];
     $add_num_fun = $_POST['add_num_fun'];
     $id_loja = $_POST['id_loja'];

       include_once('dbconn.php');
       $sql = "INSERT INTO `funcionarios` (nome_fun, cpf_fun, rg_fun, telefone_fun, uf_fun, cidade_fun, add_fun, add_num_fun, id_loja) VALUES('$nome_fun', '$cpf_fun', '$rg_fun', '$telefone_fun', '$uf_fun', '$cidade_fun', '$add_fun', '$add_num_fun,'$id_loja')";
       mysqli_query($conn, $sql);

//INSERT INTO `funcionarios`(`id_fun`, `nome_fun`, `cpf_fun`, `rg_fun`, `telefone_fun`, `uf_fun`, `cidade_fun`, `add_fun`, `add_num_fun`, `id_loja`) VALUES
?>
