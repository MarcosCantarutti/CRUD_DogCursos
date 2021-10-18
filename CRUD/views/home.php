<?php
if (isset($_GET['erro'])) { ?>
    <div>
        <p style="color: red">Erro! Usuario ou senha invalido.</p>
    </div>

<?php }; ?>


<h1>
    Bem vindos a Dog Cursos
</h1>

<form method="post" action="login.php">
    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" placeholder="Nome do usuario">
    <br>
    <label for="senha">Senha</label>
    <input type="password" name="senha" placeholder="Digite a senha">
    <br>
    <input type="submit" value="Entrar">
</form>