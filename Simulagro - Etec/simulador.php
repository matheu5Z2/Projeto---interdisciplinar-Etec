<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Simulagro - Simulador </title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="mobile.css">
  <script data-ad-client="ca-pub-3336241605503282" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
  <div class="logo-principal">
    <a href="index.html"><img src="Img/logo 2.png"></a>
  </div>
  <header class="col-100 menu">
    <div class="menu-principal">
      <div class="menu-seçao">
        <div class="menu-toggle">
          <div class="one"></div>
          <div class="two"></div>
          <div class="three"></div>
        </div>
        <div class="home">
          <ul>
            <li><a href="simulador.php">Simulador</a></li>
            <li><a href="produtos.html">produtos</a></li>
            <li><a href="cursos.html">Cursos</a></li>
            <li><a href="origem.html">Origem</a></li>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="saiba-mais.html">Saiba Mais</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header> 

  <div class="banner-p">
    <img src="Img/Banner-simulado.png">
  </div>
  <div class="borda-pg"></div>

  <div class="container">

      <h2> Produtos </h2>

      <form class="select-box" action="result.php" method="POST">
        <select class="" name="produto">
          <option disabled="" selected=""> Selecione </option>
          <option class="selected" value="Algodão"> Algodão </option>
          <option class="selected" value="Arroz"> Arroz </option>
          <option class="selected" value="Banana-Nanica"> Banana-Nanica </option>
          <option class="selected" value="Cacau"> Cacau </option>
          <option class="selected" value="Café"> Café </option>
          <option class="selected" value="Cana de açucar"> Cana de açucar </option>
          <option class="selected" value="Carne-Bovina"> Carne-Bovina </option>
          <option class="selected" value="Carne-Suína"> Carne-Suína </option>
          <option class="selected" value="Celulose"> Celulose </option>
          <option class="selected" value="Frango"> Frango </option>
          <option class="selected" value="Laranja"> Laranja </option>
          <option class="selected" value="Leite"> Leite </option>
          <option class="selected" value="Milho"> Milho </option>
          <option class="selected" value="Minério de Ferro"> Minério de Ferro </option>
          <option class="selected" value="Petróleo"> Petróleo </option>
          <option class="selected" value="Soja"> Soja </option>

        </select>
        <input type="submit" value="Avançar" class="button" >
      </form>
    </div>  


    <div class="col-100">
      <main class="menu-rodape">
        <footer class="rodape">
          <div class="creditos">
            <ul>
              <li> Entre em contato
                <p> Contato: 11 99815-4099 </p>
                <p> E-mail: matheus.oyver@gmail.com </p>
                <p> Instagram: simulagro.etec </p>
              </li>
              <li> Apoio
                <p> Agradecimentos: </p>
                <p> Autores do Site: ETEC Guaianazes - ADM </p>
              </li>
            </ul>
          </div>
        </footer>
      </main>
    </div>

    <script src="java.JS"></script>
    <script src="Simu.js"></script>

  </body>
  </html>