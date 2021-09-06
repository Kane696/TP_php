<!-- A partir d’un tableau de notes obtenues dans une classe, coder des fonctions qui permettent : -->
<!-- d’afficher tous les éléments d'un tableau -->

<?php
    function displayArr() {
        $notes = array(12, 8, 2, 19);

        foreach ($notes as $element) {
            echo $element . "<br />";
        }
    }
    displayArr();
?>
<br>

<!-- calcule la moyenne de la classe -->
<?php
    function calcAverage() {
        $notes = array(12, 8, 2, 19);
        $result = array_sum($notes) / count($notes);
        echo "La moyenne de la classe est de : $result";
    }
    calcAverage();
?>
<br>

<!-- combien de personne on eu la moyenne -->
<?php
    function getAverage() {
        $notes = array(12, 8, 2, 19);
        $arr_counts = [];
        foreach ($notes as $element) {
            if($element >= 10) {
                $arr_counts[] = $element;
            }
        }
        echo "Il y a " . " " . count($arr_counts) . " " . " personnes qui ont eu la moyenne.";
    }
    getAverage();
?>
<br>

<!-- vérifie si une personne a eu 20 -->
<?php
    function searchArr() {
        $notes = array(12, 8, 2, 19);
        
        if(in_array(20, $notes)) {
            echo "Le nombre existe dans le tableau.";
        } else {
            echo "Le nombre n'existe pas dans le tableau.";
        }
    }
    searchArr();
?>
<br>

<!-- détermine la meilleure note -->
<?php
    function noteMax() {
        $notes = array(12, 8, 2, 19);
        $result = max($notes);
        echo "La meilleure note est $result.";
    }
    noteMax();
?>
<br>


<?php
    $notes = [];
    $numbers = $_POST["numbers"];
    array_push($notes, $numbers);
    echo "Note entré:" . " " . $numbers;
?>