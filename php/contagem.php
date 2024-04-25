<?php
$numeroinicio = filter_input(INPUT_GET, "startNumber", FILTER_VALIDATE_INT);
//filter_var($numeroinicio, FILTER_VALIDATE_INT);
$numerofinal = filter_input(INPUT_GET, "finalNumber", FILTER_VALIDATE_INT);

function renderizaListaContagemRegressiva(int $inicial, int $final)
{
    for ($i = $inicial; $i >= $final; $i--) {
        echo "<li> $i </li>";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1> Contagem Regressiva</h1>
    </header>
    <section>
        <ul>
           <?php renderizaListaContagemRegressiva($numeroinicio,$numerofinal); ?>
        </ul>
    </section>
    <section>
        <ul>
            <?php for ($i = $numeroinicio; $i >= $numerofinal; $i--) {
                ?>
                <li class="item-da-lista">
                    <?php echo $i; ?>
                </li>
                <?php
            }
            ?>
        </ul>
    </section>
    <section>
        <ul>
            <?php for ($i = $numeroinicio; $i >= $numerofinal; $i--) {
                echo "<li class=\"item-da-lista\">" . $i . "</li>";
            }
            ?>
        </ul>
    </section>
</body>

</html>