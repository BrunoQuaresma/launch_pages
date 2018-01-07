<?php

require_once 'config.php';

$videos = array(
  '10Cgb6lD7Sk',
  'BLeRrjI59yA',
  'KkotKqy4wLc',
  'RWNQEBQiSbc',
  'wwhMn1-wUZA',
  '_y1AwSCx2RY'
);

$videosName = array(
  '1. TCC Campeão - O que é o TCC?',
  '2. TCC Campeão - A Estrutura da Monografia',
  '3. TCC Campeão - A Estrutura de um Artigo Científico',
  '4. TCC Campeão - Perguntas Frequentes',
  '5. TCC Campeão - As 3 Dicas',
  '6. TCC Campeão - Dúvidas e Surpresa',
);

$videosDescription = array(
  'Você sabe o que é, para que serve um TCC e quais as opções de documentos você possui? Então assiste agora este vídeo!',
  'Você sabe como estrutura bem a sua monografia? Não? Então assista agora a este vídeo!',
  'Você sabe como estrutura bem um artigo científico? Se não sabe é bom você assistir agora a este vídeo!',
  'Aqui vou falar um pouco sobre as dúvidas mais frequentes que se tem quando se está fazendo um TCC.',
  'As 3 dicas para você fazer um ótimo trabalho de conclusão de curso.',
  'Neste vídeo eu respondo algumas dúvidas que foram enviadas para mim durante o workshop e no final compartilho com você uma ótima surpresa.'
);

$currentVideo = 0;

if(isset($_GET['video'])) {
  $currentVideo = $_GET['video'];
}

?>

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
  <title><?= $videosName[$currentVideo] ?></title>
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
        <h1 class="text-light h2 mx-1 text-center py-2 pb-3 py-md-5">
          <?= $videosName[$currentVideo] ?>
        </h1>
        <div class="col-12 col-md-10 pt-3 pt-md-1 pb-1 pb-md-5">
          <div class="embed-responsive embed-responsive-16by9 mb-5 mb-md-4">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $videos[$currentVideo] ?>?autoplay=0&rel=0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5 bg-primary text-light">
    <div class="container text-center">
      <h1 class="font-weight-light mb-4">Quer fazer um <b class="font-weight-bold text-warning">TCC incrível</b><br>e <b class="font-weight-bold text-warning">com tranquilidade?</b></h1>
      <a href="http://tcc-campeao.nucleoopcmg.com.br" class="btn btn-xl btn-warning">Sim! Eu quero!</a>
    </div>
  </div>

  <div class="py-5 container">
    <div class="row">
      <div class="col col-md-8 flex-1">
        <h3 class="mb-5 px-3">Deixe aqui os seus comentários!</h3>
        <div class="fb-comments" data-width="100%" data-href="<?= SITE_URL ?>" data-numposts="15"></div>
      </div>

      <div class="col col-md-4 flex-1">
        <h5 class="mb-3">Vídeos do Workshop</h5>

        <?php foreach($videos as $index => $video): ?>
          <div class="card p-2 mb-2">
            <div class="row">
              <div class="col-4 pr-0">
                <img class="w-100" src="https://img.youtube.com/vi/<?= $videos[$index] ?>/default.jpg" />
              </div>

              <div class="col-8">
                 <a href="<?= SITE_URL . '?video=' . $index ?>">
                  <b><?= $videosName[$index] ?></b>
                 </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
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
