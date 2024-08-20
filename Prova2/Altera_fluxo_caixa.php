<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $sql = "SELECT * FROM fluxo_caixa WHERE id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Altera_fluxo_caixa_exe.php" method="post">
       <fieldset>
        <legend>Cadastro de Fluxo de caixa</legend>
        <div>
            <label for="data">Data:</label>
            <input type="radio" 
                    name="data" 
                    id="data"
                    value="<?php echo $row['data']?>">
        </div>
        <div>
            <label for="tipo">Tipo:</label>
            <input type="radio" name="tipo" id="entrada" value="entrada" <?php echo $row['tipo'] == 1 ? "checked" : "" ?> /><label id="entrada">Entrada</label>
            <input type="radio" name="tipo" id="saida" value="saida" <?php echo $row['tipo'] == 0 ? "checked" : "" ?> /><label id="saida">Saida</label>
        </div>
        <div>
            <label for="valor">Valor:</label>
            <input type="number" 
                    name="valor" 
                    id="valor"
                    value="<?php echo $row['valor']?>">
        </div>
        <div>
            <label for="historico">Histórico:</label>
            <input type="text" 
                    name="historico" 
                    id="historico"
                    value="<?php echo $row['historico']?>">
        </div>
        <div>
            <label for="cheque">Cheque:</label>
            <select name="cheque" id="cheque">
                <option value="Sim" <?php echo $row['cheque'] == "Sim" ? "selected" : "" ?>>Sim</option>
                <option value="Não" <?php echo $row['cheque'] == "Não" ? "selected" : "" ?>>Não</option>
            </select>   
        </div>
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <div>
            <button type="submit">Alterar</button>
        </div>
</body>
</html>