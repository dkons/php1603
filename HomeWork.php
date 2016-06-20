My Home Work
<?php
function foo($a, $b, $c){
$D = $b * $b - 4 *$a *$c;
    if ($D < 0){
        echo "Нет корней";
    }
    elseif ($D >0){
        $x1 = (- $b + sqrt($D))/2*$a;
        $x2 = (- $b + sqrt($D))/2*$a;
            echo 'X1'. ' = ' . $x1;
            echo '<br>';
            echo 'X2'. ' = ' . $x2;
    }
};
foo (1,3,1);
?>
