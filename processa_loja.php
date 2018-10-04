 <?php 
 
    session_start();
     error_reporting(E_ALL & ~E_NOTICE);
     include 'static/head.php';
     include 'static/nav.php';

    $nome_loja = $_POST['nome_loja'];
    $uf = $_POST['uf'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $cep = $_POST['cep'];
    $numero = $_POST['numero'];
    $fone_loja = $_POST['fone_loja'];

        include_once('dbconn.php');
        $sql = "INSERT INTO enderecos (uf, cidade, bairro, rua, cep, numero) VALUES ('$uf', '$cidade', '$bairro', '$rua', '$cep', '$numero')";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_query($conn, $sql)) 
        {
            $last_id = mysqli_insert_id($conn);
            echo "New record created successfully. Last inserted ID is: " . $last_id;
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

mysqli_close($conn);

        /*while($row = mysqli_fetch_array($result)){
            $id_add = $row['id_add'];
        }

        $sqli = "INSERT INTO lojas (nome_loja, fone_loja) VALUES ('$nome_loja', '$fone_loja')";
        $query = mysqli_query($conn, $sqli);*/
