<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pessoas 2</title>
    <style> html,body{background:#27303a;color:rgb(201,201,201);font-size:larger;} pre{color:rgb(201,201,201);font-size:larger;}</style>
</head>
<body>
    <pre>
        <?php
            require_once "Visitante.php";
            require_once "Aluno.php";
            require_once "Professor.php";
            require_once "Bolsista.php";
            require_once "Tecnico.php";

            $v = new Visitante();
            $a = new Aluno();
            $prof = new Professor();
            $bols = new Bolsista();
            $tec = new Tecnico();

            $a-> setNome("Joao");
            $a-> pagarMensalidade();
            $bols-> setNome("Daniele");
            $bols-> pagarMensalidade();



            print_r($v);
            print_r($a);
            print_r($prof);
            print_r($bols);
            print_r($tec);

        ?>
    </pre>
</body>
</html>