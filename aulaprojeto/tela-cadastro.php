<?php
    if(isset ($_POST['submit']))
    {
        /* testar se as informações estão sendo enviadas
        print_r('Nome: ' . $_POST['nome']);
        print_r('<br>');

        print_r('Email: ' . $_POST['email']);
        print_r('<br>');

        print_r('Telefone: ' . $_POST['telefone']);
        print_r('<br>');

        print_r('Gênero: ' . $_POST['genero']);
        print_r('<br>');

        print_r('Data de nascimento: ' . $_POST['data_de_nascimento']);
        print_r('<br>');

        print_r('Cidade: ' . $_POST['cidade']);
        print_r('<br>');

        print_r('Estado: ' . $_POST['estado']);
        print_r('<br>');

        print_r('Endereço: ' . $_POST['endereço']);
        print_r('<br>'); */

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $datanasc = $_POST['data_de_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereço = $_POST['endereço'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, data_de_nascimento, cidade,
        estado, endereço) VALUES('$nome', '$email', '$telefone', '$genero', '$datanasc', '$cidade', '$estado', '$endereço')");

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="css/css-externo.css">
</head>
<body>

    <div class="box">
        <form action="tela-cadastro.php" method="POST">
            <fieldset>
                <legend>Cadastro de Clientes</legend> 

                <div class="inputbox">
                    <label for="nome"
                    class="labelinput">Nome completo:</label> 
                    <input type="text"
                    name="nome" id="nome"
                    class="inputuser"
                    required>
                    </div> <br> <br>

                <div class="inputbox">
                    <label for="email"
                    class="labelinput">E-mail:</label> 
                    <input type="email"
                    name="email" id="email"
                    class="inputuser"
                    required>
                   </div> <br> <br>

                <div class="inputbox">
                <label for="telefone"
                class="labelinput">Telefone:</label> 
                <input type="tel"
                name="telefone" id="telefone"
                class="inputuser"
                required>
                </div> <br> <br>

                <p> Selecione o seu gênero:</p>

                <input type="radio" name="genero" id="feminino" value="feminino" required>
                <label for="feminino" >Feminino</label>

                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino" >Masculino</label> <br> <br>

                <label for="data_de_nascimento"> Data de nascimento</label> 
                <input type="date" name="data_de_nascimento" id="data_de_nascimento" required> <br> <br>

                <div class="inputbox">
                    <label for="cidade"
                    class="labelinput">Cidade:</label> 
                    <input type="text"
                    name="cidade" id="cidade"
                    class="inputuser"
                    required>
                </div> <br> <br>
                
                <div class="inputbox">
                    <label for="estado"
                    class="labelinput">Estado:</label> 
                    <input type="text"
                    name="estado" id="estado"
                    class="inputuser"
                    required>
                </div> <br> <br>

                <div class="inputbox">
                    <label for="endereço"
                    class="labelinput">Endereço:</label>
                    <input type="text"
                    name="endereço" id="endereço"
                    class="inputuser"
                    required>
                </div> <br> <br>

                <input type="submit" name="submit" id="submit">

                   
            </fieldset>

        </form>

    </div>


    
</body>
</html>