<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuario</title>
    <link rel="stylesheet" href="form.css/index.css">

</head>
<body>
    <div class="cadastar">
        <h2>Cadastro</h2>
        <form action="processar.php" method="POST">

            <div class="corpo">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="corpo">
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" required>
            </div>

            <div class="corpo">
                <label for="senha">Senha: </label>
                <input type="text" name="senha" id="senha" required>        
            </div>
            
            <button type="submit">Cadastar</button>


        </form>
    </div>
</body>
</html>
