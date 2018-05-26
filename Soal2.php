<?php
for ($N = 1; $N <= 100; $N++)
{
    if($N % 3 == 0 && $N % 5 ==0){
        echo $N." = FizzBuzz<br>";
    }
    else if($N % 3 == 0){
        echo $N." = Fizz<br>";
    }
    else if($N % 5 == 0){
        echo $N." = Buzz<br>";
    }
    else {
        echo $N." = <br>";
    }
}
?>