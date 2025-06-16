<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/home.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <h1>Bem vindo à página principal da Locadora</h1>
        <a href="../index.php">Voltar para o Login</a><br>
        <a href="../php/logout.php">Sair</a>
        <p>Você está logado como:
            <?php
            session_start();
            if (isset($_SESSION['user'])) {
                echo htmlspecialchars($_SESSION['user']);
            } else {
                echo "Usuário não logado.";
            }
            ?>
        <div class="navigation">
            <h2>Menu de Navegação</h2>
            <ul>
                <li><a href="../pages/locadora.html">Filmes</a></li><br>
                <li><a href="../pages/sobre.php">Sobre Nós</a></li><br>
            </ul>
        </div>
    </div>
</body>

</html>