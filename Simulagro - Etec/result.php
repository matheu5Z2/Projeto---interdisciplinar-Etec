<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script data-ad-client="ca-pub-3336241605503282" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>

    <?php
    
    if (isset($_POST['produto'])) {
        $produto = $_POST['produto'];
        switch ($produto) {
            case 'Arroz':
            include ('Arroz.html');
            break;
            
            case 'Algodão':
            include ('Algodao.html');
            break;

            case 'Banana-Nanica':
            include ('Banana.html');
            break;
            
            case 'Cacau':
            include ('Cacau.html');
            break;
            
            case 'Café':
            include ('Cafe.html');
            break;

            case 'Cana de açucar':
            include ('Cana.html');
            break;

            case 'Cana de açucar':
            include ('Cana.html');
            break;

            case 'Carne-Bovina':
            include ('Carne-Bovina.html');
            break;

            case 'Carne-Suína':
            include ('Carne-Suina.html');
            break;

            case 'Celulose':
            include ('Celulose.html');
            break;

            case 'Frangoa':
            include ('Frango.html');
            break;

            case 'Laranja':
            include ('Laranja.html');
            break;

            case 'Leite':
            include ('Leite.html');
            break;

            case 'Milho':
            include ('Milho.html');
            break;

            case 'Minério de Ferro':
            include ('Ferro.html');
            break;

            case 'Petróleo':
            include ('Petroleo.html');
            break;

            case 'Soja':
            include ('Soja.html');
            break;
        }
    }
    ?>

</body>
</html>