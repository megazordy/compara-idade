<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosso Primeiro Projeto</title>
</head>
<body>
    <main>
        <h1>Compara Idade</h1>
        <p>Informe os nomes e as idades de duas pessoas</p>

        <form action="calcula.php" method="post">
            <div>
                <label for="pessoa1">Nome da Pessoa 1</label>
                <input type="text" name="pessoa1" id="pessoa1" required>

                <label for="idade1">Idade</label>
                <input type="text" name="idade1" id="idade1">
            </div>

            <div>
                <label for="pessoa2">Nome da Pessoa 2</label>
                <input type="text" name="pessoa2" id="pessoa2">

                <label for="idade2">Idade</label>
                <input type="text" name="idade2" id="idade2">
            </div>

            <div>
                <label for="calculo">Operação</label>
                <select name="calculo" id="calculo">
                    <option value="compara">Comparar idades</option>
                    <option value="maioridade">Verificar Maioridade</option>
                </select>
            </div>

            <button type="submit">Prosseguir</button>
        </form>
    </main>
</body>
</html>