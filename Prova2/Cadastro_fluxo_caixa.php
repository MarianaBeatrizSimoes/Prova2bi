<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <?php
     include('includes/conexao.php');
     $data = $_POST['data'];
     $tipo = $_POST['tipo'] == "Entrada" ? true : false;
     $valor = $_POST['valor'];
     $historico = $_POST['historico'];
     $cheque = $_POST['cheque'];
     echo "<h1>Dados do Fluxo Caixa</h1>";
     echo "Data: $data<br>";
     echo "Tipo: " . ($tipo ? "Entrada" : "Saida") . "<br>";
     echo "Valor: " . number_format($valor, 2, ".", "") . "<br>";
     echo "Histórico: $historico<br>";
     echo "Cheque: $cheque<br>";
     $tipo = $tipo ? 0:1;
     $sql = "INSERT INTO fluxo_caixa(data, tipo, valor, historico, cheque)";
     $sql .= "VALUES('".$data."','".$tipo."','".$valor."','".$historico."', '".$cheque."')";
     echo $sql;
     $result = mysqli_query($con,$sql);
     if($result){
         echo "<h2>Dados cadastrados com sucesso</h2>";
     }else{
         echo "<h2>Erro ao cadastrar</h2>";
         echo mysqli_error($con);
     }
    ?>
</body>
</html>