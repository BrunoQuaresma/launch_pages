<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/styles/index.css">
  <title>Document</title>
</head>
<body>
  <?php include_once('./scripts/facebook_sdk.php') ?>

  <div class="container d-flex justify-content-center">
    <div class="col-md-5">
      <div class="card mt-5 mb-4 p-5">
        <h1 class="h3 text-center mb-4">
          3 Dicas de Como Elaborar<br>
          <strong class="h2">um <span class="text-primary">TCC Campeão</span></strong><br>
          <small class="h5 text-muted">Workshop no dia 28/12/2017</small>
        </h1>

        <div id="subscribe-description">
          <p class="text-center mb-4">
            Com 3 efetivas dicas o seu TCC será um sinônimo de sucesso e
            que representará muito mais que a sua conclusão de curso mas, também, o início da sua vida profissional.
          </p>

          <form class="mb-4" id="subscribe-form">
            <div class="form-group">
              <input name="email" type="email" required placeholder="Seu melhor e-mail" class="form-control form-control-lg">
            </div>

            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Quero me inscrever</button>
            </div>

            <div class="form-group text-center mb-0">
              <small class="text-muted">Seu e-mail está 100% livre de spam</small>
            </div>
          </form>
        </div>

        <div class="text-center mb-5 d-none" id="subscribe-success">
          <div class="mb-4 text-primary">
            <i class="fas fa-check-circle display-1"></i>
          </div>

          <span class="h3">Sua inscrição foi realizada com sucesso!</span>
        </div>

        <div>
          <div
            class="fb-like"
            data-href="https://www.facebook.com/nucleopcmg"
            data-layout="standard"
            data-action="like"
            data-size="small"
            data-show-faces="true"
            data-width="432"
          >
          </div>
        </div>
      </div><!-- ./card -->

      <div class="text-center text-light mb-5">
        <small>2017 Núcleo OPC mg - Todos os direitos reservados</small>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="./assets/scripts/index.js"></script>
</body>
</html>
