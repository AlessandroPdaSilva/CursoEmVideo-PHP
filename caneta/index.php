<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> php </title>
    <style> html,body{background:#27303a;} pre{color:rgb(201,201,201);font-size:larger;}</style>
</head>
<body>
    <pre><!-- Main -->
    <?php 
        require_once "caneta.php";// pegando arquivo
        $caneta = new caneta("ficticio",0.6,"cyano");
        $caneta2 = new caneta("bic",0.8,"preto");


        print_r($caneta);
        print_r($caneta2)

    ?>
    </pre>
</body>
</html>