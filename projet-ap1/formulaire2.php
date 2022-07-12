<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <form action="traitement2.php" method="post">
        <div class="form-group row">
            <label class="control-label col-sm-2" for="NomClient">Nom:</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="NomClient" id="NomClient" placeholder="Nom">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="PrenomClient">Prénom:</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="PrenomClient" id="PrenomClient" placeholder="Prénom">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="CP">CP:</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="CP" id="CP" placeholder="CP">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="DateNaissance">DateNaissance:</label>
            <div class="col-sm-6">
            <textarea class="form-control" rows="3" name="DateNaissance" id="DateNaissance"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="NumTelephone">NumTelephone:</label>
            <div class="col-sm-6">
            <textarea class="form-control" rows="3" name="NumTelephone" id="NumTelephone"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="PoidsClient">PoidsClient:</label>
            <div class="col-sm-6">
            <textarea class="form-control" rows="3" name="PoidsClient" id="PoidsClient" ></textarea>
            </div>
        </div>
        <div class="radio">
           
            <label  name="Sportive" for="Sportive">Sportive :</label><br>
            <label class="radio-inline"><input type="radio" name="Sportive" value="oui">oui</label>

            <label class="radio-inline"><input type="radio" name="Sportive" value="non">non</label>
          
            
        </div><br>
        <div class="radio">
            <label  name="idCategorie" for="idTarif">Quelle est votre tarif ?</label><br>
            <label class="radio-inline"><input type="radio" name="idTarif" value="1">10 €</label>

            <label class="radio-inline"><input type="radio" name="idTarif" value="2">95 €</label>

            <label class="radio-inline"><input type="radio" name="idTarif" value="3">150 €</label>
        </div><br>
        <div class="radio">
            <label  name="idCategorie" for="idNiveau">Quelle est votre Niveau ?</label><br>
            <label class="radio-inline"><input type="radio" name="idNiveau" value="1">Debutent</label>

            <label class="radio-inline"><input type="radio" name="idNiveau" value="2">Semi-Pro</label>

            <label class="radio-inline"><input type="radio" name="idNiveau" value="3">Pro</label>
        </div><br>
        
        
        

         <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</body>
</html>