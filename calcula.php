<?php
    $pessoa1 = $_POST["pessoa1"] ?? "";
    $idade1 = (int) ($_POST["idade1"] ?? 0);
    $pessoa2 = $_POST["pessoa2"] ?? "";
    $idade2 = (int) ($_POST["idade2"] ?? 0);
    $operacao = $_POST["calculo"] ?? "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Resultado</h1>

        <div>
            <?php if ($operacao === "compara") { ?>
                <?php if ($idade1 > $idade2) { ?>
                    <p>
                        <strong><?= $pessoa1 ?></strong> é mais velho que <strong><?= $pessoa2 ?></strong>.
                    </p>
                <?php } else if ($idade1 < $idade2) { ?>
                    <p>
                        <strong><?= $pessoa2 ?></strong> é mais velho que <strong><?= $pessoa1 ?></strong>.
                    </p>
                <?php } ?>
            <?php } else if ($operacao === "maioridade") { ?>

            <?php } ?>
        </div>
    </main>
</body>
</html>