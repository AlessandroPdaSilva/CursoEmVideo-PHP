<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pessoas </title>
    <style> html,body{background:#27303a;color:rgb(201,201,201);font-size:larger;} pre{color:rgb(201,201,201);font-size:larger;}</style>
</head>
<body>
    <pre>
        <?php // main  

            require_once "Pessoa.php";
            require_once "Aluno.php";
            require_once "Professor.php";
            require_once "Funcionario.php";

            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();

            $p1-> setNome("Marcos");
            $p2-> setNome("Pedro");
            $p3-> setNome("Lucas");
            $p4-> setNome("Maria");
            
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);

        ?>
    </pre>
</body>
</html>