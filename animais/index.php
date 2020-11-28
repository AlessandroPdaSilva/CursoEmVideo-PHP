<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Animais </title>
    <style> html,body{background:#27303a;color:rgb(201,201,201);font-size:larger;} pre{color:rgb(201,201,201);font-size:larger;}</style>
</head>
<body>
    <pre>
        <?php
             
            require_once "Mamiferos.php";
            require_once "Reptil.php";
            require_once "Peixe.php";
            require_once "Ave.php";

            $mami = new Mamiferos();
            $reptil = new Reptil();
            $peixe = new Peixe();
            $ave = new Ave();

            $reptil-> locomover();
             
            print_r($mami);
            print_r($reptil);
            print_r($peixe);
            print_r($ave);

        ?>
    </pre>
</body>
</html>