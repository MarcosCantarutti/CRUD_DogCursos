<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP&MYSQL</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div class="container">
            <a href="?pagina=home"><img src="./assets/logo.png" alt="logo"></a>
            <nav id="menu">
                <ul>
                    <li><a href="?pagina=cursos">Cursos</a></li>
                    <li><a href="?pagina=alunos">Alunos</a></li>
                    <li><a href="?pagina=matriculas">Matriculas</a></li>
                    <?php if (isset($_SESSION['login'])) { ?>
                        <li><a href="logout.php"><?php echo $_SESSION['usuario']; ?>(sair)

                            </a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>

    </header>

    <div id="conteudo" class="container">