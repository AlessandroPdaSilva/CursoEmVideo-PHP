<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cachorro </title>
    <style> html,body{background:#27303a;color:rgb(201,201,201);font-size:larger;} pre{color:rgb(201,201,201);font-size:larger;}</style>
</head>
<body>
    <pre>
        <?php // main
            require_once "Cachorro.php";
            require_once "Lobo.php";

            $c = new Cachorro();
            $l = new Lobo();

            $c-> emitirSom();

            $c-> reagirHora(13,30);
            $c-> reagirHora(20,30);
        ?>
    </pre>
</body>
</html>