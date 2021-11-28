<?php

    if(isset($_POST['submit']))
    {
        //print_r($_POST['nome']);
        //print_r('<br>');
        //print_r($_POST['loja']);
        //print_r('<br>');
        //print_r($_POST['telefone']);
        //print_r('<br>');
        //print_r($_POST['casa']);
        //print_r('<br>');
        //print_r($_POST['data_entrega']);
        //print_r('<br>');
        //print_r($_POST['caixa']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $loja = $_POST['loja'];
        $telefone = $_POST['telefone'];
        $casa = $_POST['casa'];
        $data_entrega = $_POST['data_entrega'];
        $caixa = $_POST['caixa'];

        $result = mysqli_query($conexao, "INSERT INTO encomendas(nome, casa, telefone, tipo_encomenda, data_entrega, loja) VALUES('$nome', '$loja', '$telefone', '$casa', '$data_entrega', '$caixa')");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | PI1</title>
    <b>SiCEC - Univesp PI1 | POLO TIETE</b>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de encomendas</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="casa" id="casa" class="inputUser" required>
                    <label for="casa" class="labelInput">Casa</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Tipo encomenda:</p>
              
                <input type="radio" id="caixa" name="caixa" value="caixa" required>
                <label for="caixa">Caixa</label>
                <br>
             
                <br><br>
                <label for="data_entrega"><b>Data da entrega:</b></label>
                <input type="date" name="data_entrega" id="data_entrega" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="loja" id="loja" class="inputUser" required>
                    <label for="loja" class="labelInput">Loja</label>
                </div>
                <br><br>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>