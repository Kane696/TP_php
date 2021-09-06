<!-- Réaliser un site internet sur lequel l’utilisateur doit entrer son nom, prénom, âge et si c’est un homme
ou non.
Le site devra lui répondre si c’est un homme ou une femme, majeur ou non.
Pensez à protéger votre code !  -->

<html>
    <form action="ex_2.php" method="POST">
        Prénom: <input type="text" name="prenom"><br>
        Nom: <input type="text" name="nom"><br>
        Êtes-vous un homme ?<input type="checkbox" name="homme" id=""><br>
        Age: <input type="number" name="age"><br>
        <input type="submit" value="Envoyer">
    </form>
</html>

<?php
    $age = $_POST["age"];
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];

    $name = $_POST["prenom"]. " " . $_POST["nom"];

    if(isset($prenom) && $prenom === ""){
        echo "Le champ prénom est vide !" . "<br>";
    }

    if(isset($nom) && $nom === ""){
        echo "Le champ nom est vide !" . "<br>";
    }
    
    if(isset($_POST["homme"])){
        $sexe = " un homme";
    } else {
        $sexe = "une femme";
    }

    if(isset($age) && $age === "" ){
        echo "Le champ âge est vide !" . "<br>";
    } else {
        if($age >= 18) {
            $checkMajority = "majeur";
        } else {
            $checkMajority = "mineur";
        }
    }  
    echo "Bonjour, $name. Vous êtes $sexe $checkMajority.";
?>
<a href="ex_2.php">Nouvel utulisateur</a>