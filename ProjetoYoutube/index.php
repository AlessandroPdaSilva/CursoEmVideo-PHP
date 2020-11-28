<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Projeto Youtube </title>
    <style> html,body{background:#27303a;color:rgb(201,201,201);font-size:larger;} pre{color:rgb(201,201,201);font-size:larger;}</style>
</head>
<body>
    <pre>
        <?php // main
            require_once "Video.php";
            require_once "Usuario.php";
            require_once "Visualizacao.php";

            $video = new Video(" Matue - Flow ");
            $usuario1 = new Usuario("vitor", 9, "M","vitinho2009");

            $video = new Video(" Matue - Flow ");
            $usuario2 = new Usuario("marcos", 21, "M","marcos001");

            $visual1 = new Visualizacao($usuario1,$video); // vitor assiste Matue - Flow
            $visual2 = new Visualizacao($usuario2,$video);

            $visual1-> avaliarPorc(50);
            $visual2-> avaliar(7);
            
            print_r($visual1);
            print_r($visual2);

        ?>
    </pre>
</body>
</html>