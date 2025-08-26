<!doctype html>
<?php 
  if (session_status() === PHP_SESSION_NONE) {
        session_start();
  }
      $_SESSION['numero']=null;
    
  include "config.php";
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <h1>Jogo da adivinhação</h1>
    <?php if(!empty($_SESSION['mensagem'])):?>
    <div
      class="alert alert-secondary alert-dismissible fade show"
      role="alert"
    >
      <button
        type="button"
        class="btn-close"
        data-bs-dismiss="alert"
        aria-label="Close"
      ></button>
      <strong>Erro:</strong><?php echo $_SESSION['mensagem'];?>
    </div>
    
    <script>
      var alertList = document.querySelectorAll(".alert");
      alertList.forEach(function (alert) {
        new bootstrap.Alert(alert);
      });
    </script>
    <?php 
      $_SESSION['mensagem']=null;
    ?>
    <?php endif;?>
    
      <form action="<?php echo RAIZ_PROJETO;?>controller/controlador_de_dados.php" method="get">
        <div class="cartas">
          <div class="img-container">
            <img src="assets/img/carta1.png" alt="erro">
          </div>
          <div class="form-check form-check-inline">
            <label for="v1s">Sim</label>
            <input class="form-check-input" type="radio" name="v1" value="sim"/>
            <br>
            <label for="v1n">Não</label>
            <input class="form-check-input" type="radio" name="v1" value="nao"/>
          </div>
        </div>
        <div class="cartas">
          <div class="img-container">
            <img src="assets/img/carta2.png" alt="erro">
          </div>
          <div class="form-check form-check-inline">
            <label for="v2s">Sim</label>
            <input class="form-check-input" type="radio" name="v2" value="sim"/>
            <br>
            <label for="v2n">Não</label>
            <input class="form-check-input" type="radio" name="v2" value="nao"/>
          </div>
        </div>
        <div class="cartas">
          <div class="img-container">
            <img src="assets/img/carta3.png" alt="erro">
          </div>
          <div class="form-check form-check-inline">
            <label for="v3s">Sim</label>
            <input class="form-check-input" type="radio" name="v3" value="sim"/>
            <br>
            <label for="v3n">Não</label>
            <input class="form-check-input" type="radio" name="v3" value="nao"/>
          </div>
        </div>
        <div class="cartas">
          <div class="img-container">
            <img src="assets/img/carta4.png" alt="erro">
          </div>
          <div class="form-check form-check-inline">
            <label for="v4s">Sim</label>
            <input class="form-check-input" type="radio" name="v4" value="sim"/>
            <br>
            <label for="v4n">Não</label>
            <input class="form-check-input" type="radio" name="v4" value="nao"/>
          </div>
        </div>
        <div class="cartas">
          <div class="img-container">
            <img src="assets/img/carta5.png" alt="erro">
          </div>
          <div class="form-check form-check-inline">
            <label for="v5s">Sim</label>
            <input class="form-check-input" type="radio" name="v5" value="sim"/>
            <br>
            <label for="v5n">Não</label>
            <input class="form-check-input" type="radio" name="v5" value="nao"/>
          </div>
        </div>
        <div class="button-area">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        
      </form>
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
