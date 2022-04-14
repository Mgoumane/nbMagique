<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="index.css">

  <title>jeu</title>
</head>


<body class="bg-warning bg-gradient pt-5">


  <section class="container pb-5 ">
    <h1 class="d-flex justify-content-center pb-5 fw-bold ">CHOISI UN NOMBRE ENTRE 1 ET 100</h1>
    <div class="row  ">
      <div class="col-md-2 "></div>
      <div class="col-md-8 pt-5 pb-5 border border-5 border-success bg-light bg-gradient rounded-3">
        <?php
        //tirage aléatoire
        $nbMagique = rand(1, 100);
        //echo' '.$nbMagique.'';

        $essai=1;
        ?>
        <h4 class=" d-flex justify-content-center pt-5">Allez propose un nombre !</h4>


        <form class="pt-5 pb-5 " method="POST" action="jeu.php">
          <div class="row pb-5">
            <div class="col-2"></div>
            <div class="col-8 d-flex justify-content-center">
              <input type="text" name="prop">
            <input type="hidden" name="nbMagique" value="<?php echo $nbMagique ?>">
            <input type='hidden' name="essai" value="<?php echo $essai ?>" >
            </div>
            <div class="col-2"></div>
            
          </div>
          <div class="row">
          <div class="col-2"></div>
            <div class="col-8 d-flex justify-content-center">
              <input type="submit" value="JOUER" class="btn btn-secondary btn-lg  btn-success">
            </div>
            <div class="col-2"></div>

            
          </div>


        </form>

      </div>
      <div class="col-md-2 "></div>
    </div>



  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>