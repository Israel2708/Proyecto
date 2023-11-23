<?php
for ($i=1; $i<=100 ; $i++) { 
    echo "<br>";
    if ($i%3==0 && $i%5==0) {
        echo "FizzBuzz";
    }
    elseif ($i%7==0 ) {
        echo "BOOM ";
    }
    elseif ($i%3==0 ) {
        echo "Fizz ";
    }
    elseif ($i%5==0) {
        echo "Buzz ";
    }
    else {
        echo $i;
    }
}
?>