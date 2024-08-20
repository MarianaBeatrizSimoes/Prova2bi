<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('includes/conexao.php');
    $sql = "SELECT * FROM fluxo_caixa";
    $result = mysqli_query($con,$sql);
    ?>
    <h1>Listagem Fluxo de caixa</h1>
    <a href="Cadastro_fluxo_caixa.html">Cadastrar novo fluxo de caixa</a>
    <table align="center" border="1" width="500">
       <tr>
         <th>Código</th>
         <th>Data</th>
         <th>Tipo</th>
         <th>Valor</th>
         <th>Histórico</th>
         <th>Cheque</th>
         <th>Alterar</th>
         <th>Excluir</th>
        </tr>
        <?php //mysqli_fetch_array lê uma linha por vez
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['data']."</td>";
            echo "<td>".$row['tipo']."</td>";
            echo "<td>".$row['valor']."</td>";
            echo "<td>".$row['historico']."</td>";
            echo "<td>".$row['cheque']."</td>";
            echo "<td><a href='Altera_fluxo_caixa.php?id=".$row['id']."'>Alterar</a></td>";
            echo "<td><a href='Excluir_fluxo_caixa.php?id=".$row['id']."'>Deletar</a></td>";
            echo "</tr>";
        }
        ?>
         
    </table>
</body>
</html>