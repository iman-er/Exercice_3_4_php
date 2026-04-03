<!DOCTYPE html>
<html>
<body>

<form method="post">
    Entrer n : <input type="number" name="n">
    <input type="submit">
</form>

<?php

function table($n){
    for($i=1;$i<=10;$i++){
        echo $n." x ".$i." = ".($n*$i)."<br>";
    }
}

function triangle($n){
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
}

function carre($n){
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=$n;$j++){
            echo "*";
        }
        echo "<br>";
    }
}

function pairs($n){
    for($i=1;$i<=$n;$i++){
        if($i%2==0){
            echo $i." ";
        }
    }
    echo "<br>";
}

function somme($n){
    $s=0;
    for($i=1;$i<=$n;$i++){
        $s=$s+$i;
    }
    echo "Somme = ".$s."<br>";
}

function pair_impair($n){
    if($n%2==0){
        echo "Pair<br>";
    }else{
        echo "Impair<br>";
    }
}

if(isset($_POST['n'])){
    $n=$_POST['n'];

    table($n);
    echo "<br>";

    triangle($n);
    echo "<br>";

    carre($n);
    echo "<br>";

    pairs($n);

    somme($n);

    pair_impair($n);
}

?>

</body>
</html>
