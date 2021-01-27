<?php

include("fonctions.php");
bddConnect();
?>
<?php if(isset($_SESSION['USER'])=='EN'){
echo "<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modal\">
  Enregistrer animation
</button>";
}
?>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouvel Animation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="insertanim" method ="post" action="trt_enreg_anim.php">
          <label>Code anime</label>
          <select class="custom-select" name="CODEANIM" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="6">10</option>
          </select>

          <label>Code type animation</label>
          <select class="newAnimation" name="CODETYPEANIM">
            <option value="">Choisissez un type d'animation</option>
            <?php
            $req = "SELECT NOMTYPEANIM, CODETYPEANIM FROM TYPE_ANIM;";
            $res = mysqli_query(bddConnect(), $req);
            while ($lignes = mysqli_fetch_assoc($res)) {
              echo "<option value=".$lignes['CODETYPEANIM'].">".$lignes['CODETYPEANIM']."</option>";
            }
            ?>
          </select>




          <label>Nom animation</label>
          <input class="form-control"  name="NOMANIM" type="text" placeholder="Default input">

          <label>Date and time</label>
          <input name="DATEVALIDITEANIM" class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">


          <label>Durée</label>
          <input class="form-control"  name="DUREEANIM" type="text" placeholder="Default input">

          <label>Limite age</label>
          <select class="custom-select" name="LIMITEAGE" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value="1">5</option>
            <option value="2">6</option>
            <option value="3">7</option>
            <option value="4">8</option>
            <option value="5">9</option>
            <option value="6">10</option>

          </select>


          <label>Tarif animation</label>
          <input class="form-control" type="text" name="TARIFANIM" placeholder="Default input">

          <label>Nombre place anim:</label>
          <input class="form-control" type="text" name="NBREPLACEANIM" placeholder="Default input">

          <label>Description animation:</label>
          <input class="form-control" type="text" name="DESCRIPTANIM" placeholder="Default input">

          <label>Commentaire:</label>
          <input class="form-control" type="text" name="COMMENTANIM"placeholder="Default input">

          <label>Difficulte animation:</label>
          <input class="form-control" type="text" name="DIFFICULTEANIM" placeholder="Default input">




        </div>
        <div class="modal-footer">
          <button type="button"  class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          <button type="submit" name="button" form="insertanim" class="btn btn-primary">Ajouter</button>

        </form>

      </div>
    </div>
  </div>
</div>
<?php
mysqli_set_charset(bddConnect(), "utf8");
$req = "SELECT* FROM ANIMATION";
$res = mysqli_query(bddConnect(), $req);

while($ligne = mysqli_fetch_assoc($res))
{
  $NOMANIM =$ligne['NOMANIM'];
  $DATECREATIONANIM = $ligne['DATECREATIONANIM'];
  $DATEVALIDITEANIM = $ligne['DATEVALIDITEANIM'];
  $DUREEANIM = $ligne['DUREEANIM'];
  $LIMITEAGE = $ligne['LIMITEAGE'];
  $TARIFANIM= $ligne['TARIFANIM'];
  $NBREPLACEANIMs = $ligne['NBREPLACEANIM'];
  $DESCRIPTANIM = $ligne['DESCRIPTANIM'];
  $COMMENTANIM = $ligne[	'COMMENTANIM'];
  $DIFFICULTEANIM =  $ligne['DIFFICULTEANIM'];


    echo "<div class=\"card\" style=\"width: 18rem;\">
    <img src=\"bellemontagne.jpg\" class=\"card-img-top\" alt=\"...\">
    <div class=\"card-body\">
    <h5 class=\"card-title\">".$NOMANIM."</h5>
    <p class=\"card-text\">".$DESCRIPTANIM."</p>s
    <a href=\"activite.php\" class=\"btn btn-primary\">Go somewhere</a>
    </div>
    </div>";
    mysqli_close(bddConnect());

  }
?>
