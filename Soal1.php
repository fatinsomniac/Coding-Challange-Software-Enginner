<?php

@$nilai1 = $_POST['nilai1'];
$form="
<form method='POST'>
            Masukan nilai = 
            <input type='text' name='nilai1' value='$nilai1'><br><br>
            <input type='submit' name='submit' value='CHECK'><br><br>
";
        
$form1="</form>";  
echo "$form $form1";

if ($nilai1 == '') {
                echo '';
            } else if ($nilai1 >= 0) {
                echo '<b>' . $nilai1 . ' Bilangan positif </b>';
            } else if ($nilai1 < 0) {
                echo '<b>'. $nilai1 . ' Bilangan negatif </b>';
            }	
?>