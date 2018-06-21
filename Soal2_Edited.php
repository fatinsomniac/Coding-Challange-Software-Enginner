<?php
$a="
<head>
<style>
#grad1 {
    height: 10px;
    background: red; /* For browsers that do not support gradients */
    background: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1)); /* Standard syntax (must be last) */
}
body {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    font-size: 150%;
  }
</style>
</head>
<body>
<div id='grad1'></div>
</body>
";
for ($N = 1; $N <= 100; $N++)
{
    echo "$a";
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