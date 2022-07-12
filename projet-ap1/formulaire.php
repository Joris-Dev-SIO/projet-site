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
            <label class="control-label col-sm-2" for="email">Nom:</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="prenom">Prénom:</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="ville">Ville:</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" name="ville" id="ville" placeholder="Ville">
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2" for="demande">Demande de renseignements:</label>
            <div class="col-sm-6">
            <textarea class="form-control" rows="3" name="demande" id="demande"></textarea>
            </div>
        </div>
        
        <div class="form-group row">
        <label class="control-label col-sm-2" name="civilite" for="civilite">Civilité :</label>
        <select class="form-select" name="civilite">
            <option value="monsieur">Monsieur</option>
            <option value="madame">Madame</option>
            <option value="mademoiselle">Mademoiselle</option>
        </select>
        </div>
        <div class="form-group row">
        <label class="control-label col-sm-12" name="idfonction" for="idFonction">Quelle est votre fonction ?</label>
        </div>
        <div class="radio">
            <label class="radio-inline"><input type="radio" name="idFonction" value="1">etudiant</label>

            <label class="radio-inline"><input type="radio" name="idFonction" value="2">Amateur</label>

            <label class="radio-inline"><input type="radio" name="idFonction" value="3">Professionnel</label>
        </div>
            

        <div class="form-group row">
        Quels sont vos catégories préférées :
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="categories[]" value="1">Aventures</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="categories[]" value="2">Espionnage</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="categories[]" value="3">Policier</label>
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</body>
</html>