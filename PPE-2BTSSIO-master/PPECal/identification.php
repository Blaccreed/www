<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="vva.css" >
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <div class="containerIndex">
      <font size="+5"><center style="color: white">connexion</center></font>
      <form action="trt_login.php" method="post" class="form-example">
        <div class="form-group" id="email">
          <label style="color: white" for="exampleInputEmail1">User</label>
          <input type="text" name="user" class="form-control form-control-lg" id="exampleInput"  placeholder="Entrer user">
        </div>
        <div class="form-group" id="motdepasse">
          <label style="color: white" for="exampleInputPassword1">Mot de Passe</label>
          <input type="password" name="mdp" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mot de passe">
        </div>
      <button type="submit" class="btn btn-primary btn-lg btn-block" >Se connecter</button>
     </form>
   </div>


<img class="logoIndex" src="images/logoRemove.png" alt="">




  </body>
</html>
