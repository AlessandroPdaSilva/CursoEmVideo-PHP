<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> test</title>
    <style> html,body{background:#27303a;} pre{color:rgb(201,201,201);font-size:larger;}</style>
</head>
<body>
    <pre>
    <?php // main
        require_once "contaBanco.php";

        $conta1 = new contaBanco;
        $conta2 = new contaBanco;
        $conta1 -> abrirConta(111,"cc","alessandro"); // numeroconta,tipo,nome
        $conta2 -> abrirConta(222,"cp","bia"); // numeroconta,tipo,nome
        
        $conta1-> depositar(5);
        $conta1-> depositar(10);
        $conta1-> sacar(2);
        

        $conta2-> depositar(30);
        $conta2-> sacar(10);
       
        

        
        

        print_r($conta1);
        print_r($conta2);


    ?>
    </pre>
</body>
</html>