<?php
    if (isset($_POST['submit'])) {
    //    print_r($_POST['nome']); 
    //    print_r('<br>');
    //    print_r($_POST['email']);
    //    print_r('<br>');
    //    print_r($_POST['telefone']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $dataNascimento = $_POST['dataNascimento'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $result = mysqli_query($conexao, 
    "INSERT INTO usuarios(nome,email,telefone,dataNascimento,endereco,bairro,cidae,estado) 
     VALUES('$nome','$email','$telefone','$dataNascimento','$endereco','$bairro','$cidade','$estado')");


    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light Up</title>
    <link rel="shortcut icon" href="img/logo-removebg.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img class="logo" src="img/logo-removebg.png" alt="logomarca"> 
    </header>
    <section>
        <div class="box">
            <form action="formulario.php" method="post">
                <fieldset id="fieldset">
                    <legend>Cadastro de usuário</legend>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">E-mail</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                        <label for="tel" class="labelInput">Telefone</label>
                    </div>
                    <br><br>
                    <label for="dataNascimento">Data de nascimento</label>
                    <input type="date" name="dataNascimento" id="dataNascimento" required>
                    <br><br><br>
                    <div class="inputBox">
                        <input type="text" name="endereco" id="endereco" class="inputUser" required>
                        <label for="endereco" class="labelInput">Endereço</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="bairro" id="bairro" class="inputUser" required>
                        <label for="bairro" class="labelInput">Bairro</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for="cidade" class="labelInput">Cidade</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="estado" id="estado" class="inputUser" required>
                        <label for="estado" class="labelInput">Estado</label>
                    </div>
                    <br><br>
                    <input type="submit" name="submit" id="submit">
                </fieldset>
            </form>
        </div>
    </section>
    
</body>
</html>