<?php

@$nilai1 = $_POST['nilai1'];
$form="
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
input[type=text], select {
    width: 240px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 120px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset] {
    width: 120px;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    width: 300px;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
<center>
<br><br>
    <div class='middle'>
        <form method='POST'>
                <label for='fname'><b>Masukan nilai</b></label> 
                <input id='lname' type='text' name='nilai1' value='$nilai1' required><br><br>
                <input type='submit' name='submit' value='CHECK'> <input type='reset' value='RESET'>
        </form>
    </div>
</center>
</body>
";  
echo "$form <br><br>";

echo "<center>";
if ($nilai1 == '') {
                echo '';
            } else if ($nilai1 > 0) {
                echo '<b>' . $nilai1 . ' Bilangan positif </b>';
            } else if ($nilai1 < 0) {
                echo '<b>'. $nilai1 . ' Bilangan negatif </b>';
            }else{
            	echo '<b>Nol</b>';
            }	
echo "</center>";
?>