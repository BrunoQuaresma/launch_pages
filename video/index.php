<?php require_once 'config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include_once('./scripts/google_analytics.php') ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#693a76" />
  <meta property="og:image" content="<?= SITE_URL ?>/assets/images/facebook-share.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <link rel="icon" href="<?= SITE_URL ?>/favicon.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/styles/index.css">
  <title>3 Dicas de Como Elaborar um TCC Campeão - 28/12/2017</title>
  <meta content="Com 3 efetivas dicas, o seu TCC será um sinônimo de sucesso, que representará muito mais do que a sua conclusão de curso mas, também, o início da sua vida profissional." name="description">
</head>
<body>
  <?php include_once('./scripts/facebook_sdk.php') ?>

  <div id="top">
    <div class="container">
      <header class="py-4">
        <div class="row align-items-center">
          <div class="col-12 col-md-4 text-center text-md-left mb-4 mb-md-0">
             <img src="<?= SITE_URL ?>/assets/images/logo.png" class="logo">
          </div>

          <div class="col-12 col-md-8 ml-auto text-center text-md-right">
            <strong class="text-light">
              Workshop TCC Campeão
            </strong>

            <div class="ml-0 ml-md-4 fb-like" data-href="https://www.facebook.com/nucleopcmg" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
          </div>
        </div>
      </header>

      <div class="row justify-content-center">
        <h1 class="text-light h2 mx-1 text-center py-2 pb-3 py-md-5">3 Dicas de Como Elaborar um <span class="text-colored">TCC Campeão</span></h1>
        <div class="col-12 col-md-10 pt-3 pt-md-1 pb-1 pb-md-5">
          <div class="embed-responsive embed-responsive-16by9 mb-5 mb-md-4">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/n8HUATGl2ew"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5 d-flex flex-column align-items-center">
    <h3 class="text-center mb-5 px-3">Deixe aqui suas dúvidas ou comentários!</h3>

    <div class="col col-md-6 flex-1">
      <div class="fb-comments" data-width="100%" data-href="<?= SITE_URL ?>" data-numposts="15"></div>
    </div>
  </div>

  <footer class="text-center mb-3 mb-md-5">
    <small>2017 Núcleo OPC mg - Todos os direitos reservados</small>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="./assets/scripts/index.js"></script>
</body>
</html>
