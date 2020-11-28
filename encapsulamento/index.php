<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> encapsulamento</title>
    <style> html,body{background:#27303a;color:rgb(201,201,201);font-size:larger;} pre{color:rgb(201,201,201);font-size:larger;}</style>
</head>
<body>
    
        <?php // main
        require_once"ControleRemoto.php"; 

        $controle = new ControleRemoto();
        $controle-> ligar();
        $controle-> pause();
        


        $controle-> abrirMenu();
       
        
        

        ?>
    

</body>
</html>