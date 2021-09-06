<!-- Créer un formulaire contenant une zone de saisie pour le nom, le revenu et un bouton OK pour
soumettre le formulaire.
Le but de ce formulaire est de permettre le calcul de l’impôt pour une personne.
Le taux de l’impôt est de 15% pour des revenus inférieurs à 15 000 euros et
de 20 % pour des revenus supérieurs à 15 000. -->

<html>
    <form action="ex_4.php" method="POST">
        Name: <input type="text" name="name"><br>
        Income: <input type="number" name="income"><br>
        <input type="submit" value="OK">
    </form>
</html>

<?php
    $name = $_POST["name"];
    $income = $_POST["income"];
    
    if($income < 15000){
        $resulat = $income * 15 / 100;
    } else {
        $resulat = $income * 20 / 100;
    }   
    echo "L'impôt de $name est de $resulat$.";
?>
