<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> objetos compostos </title>
    <style> html,body{background:#27303a;color:rgb(201,201,201);font-size:larger;} pre{color:rgb(201,201,201);font-size:larger;}</style>
</head>
<body>
        <pre>
        <?php // main
            require_once "Lutadores.php";
            require_once "luta.php";
            // lutadores
            $lutador = array();
            $lutador[0] = new lutador(
                'leo','Brasil','25',//nome,nacio,idad
                '1.7','90',//alt,peso,
                '3','1','1');//vit,derrot,emp

            $lutador[1]= new lutador(
                'diego','portugal','23',//nome,nacio,idad
                 '1.7','90',//alt,peso,
                '3','1','1');//vit,derrot, emp                
            
            // luta    
            $luta = new Luta();
            $luta-> marcarluta($lutador[0],$lutador[1]);
            $luta-> lutar();

            
            

        ?>
        </pre>

</body>
</html>