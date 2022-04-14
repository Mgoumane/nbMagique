<?php

$nombre=$_POST["prop"];
  $cache=$_POST["nbMagique"];
$essai=$_POST["essai"] ;
//echo' '.$cache.'';


if($nombre === $cache){
  echo '
  
  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="index.css">

<title>jeu</title>
</head>
<body  class="bg-warning bg-gradient pt-5">

<section class="container pb-5 ">
    <h1 class="d-flex justify-content-center pb-5 fw-bold ">Bravo tu réussi en '.$essai.' essais</h1>
    <div class="row  ">
      <div class="col-md-2 "></div>
      <div class="col-md-8 pt-5 pb-5 border border-5 border-success bg-light bg-gradient rounded-3">
        <?php
        //tirage aléatoire
        $nbMagique = rand(1, 100);
        ?>
        <h4 class=" d-flex justify-content-center pt-5">Bravo tu as gagné!</h4>
        <h4 class=" d-flex justify-content-center pt-5">'.$nombre.' est bien le nombre magique  </h4>

        <a class="d-flex justify-content-center pt-5" href="https://nbmagique.000webhostapp.com/"><input type="submit" value="Recomencer" class="btn btn-secondary btn-lg  btn-success"></a>
      </div>
      
      <div class="col-md-2 "></div>
    </div>



  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
  
  ';


}else{
  if($nombre < $cache){
    $essai++ ;
 
  echo '
  
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="index.css">

<title>jeu</title>
</head>
<body  class="bg-warning bg-gradient pt-5">

<section class="container pb-5 ">
    <h1 class="d-flex justify-content-center pb-5 fw-bold ">Bonne chance !</h1>
    <div class="row  ">
      <div class="col-md-2 "></div>
      <div class="col-md-8 pt-5  border border-5 border-success bg-light bg-gradient rounded-3">
        <?php
        //tirage aléatoire
        $nbMagique = rand(1, 100);
        ?>
        <h4 class=" d-flex justify-content-center pt-5"> '.$nombre.' < nombre magique  </h4>
        <h4 class=" d-flex justify-content-center pt-5">Retente ta chance !</h4>

        <form class="pt-5 pb-5 " method="POST" action="jeu.php">
          <div class="row pb-5">
            <div class="col-2"></div>
            <div class="col-8 d-flex justify-content-center">
              <input type="text" name="prop">
            <input type="hidden" name="nbMagique" value="'.$cache.'">
            <input type="hidden" name="essai" value="'.$essai.'" >
            
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
  <a class="d-flex justify-content-center " href="https://nbmagique.000webhostapp.com/"><input type="submit" value="Recomencer" class="btn btn-secondary btn-lg  btn-success"></a>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
  

  ';
  } else {
    $essai++ ;
 
  echo '
  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="index.css">

<title>jeu</title>
</head>
<body  class="bg-warning bg-gradient pt-5">

<section class="container pb-5 ">
    <h1 class="d-flex justify-content-center pb-5 fw-bold ">Bonne chance</h1>
    <div class="row  ">
      <div class="col-md-2 "></div>
      <div class="col-md-8 pt-5  border border-5 border-success bg-light bg-gradient rounded-3">
        <?php
        //tirage aléatoire
        $nbMagique = rand(1, 100);
        ?>
        <h4 class=" d-flex justify-content-center pt-5">'.$nombre.' > nombre magique  </h4>
        <h4 class=" d-flex justify-content-center pt-5">Retente ta chance !</h4>

        <form class="pt-5 pb-5 " method="POST" action="jeu.php">
          <div class="row pb-5">
            <div class="col-2"></div>
            <div class="col-8 d-flex justify-content-center">
              <input type="text" name="prop">
            <input type="hidden" name="nbMagique" value="'.$cache.'">
            <input type="hidden" name="essai" value="'.$essai.'" >

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
  <a class="d-flex justify-content-center " href="https://nbmagique.000webhostapp.com/"><input type="submit" value="Recomencer" class="btn btn-secondary btn-lg  btn-success"></a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
  ';
  }
}
