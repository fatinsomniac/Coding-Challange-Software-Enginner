<?php
@$teksawal= $_POST['teksawal'];
$form="
<form method=POST>
Name: <input type='text' name='teksawal' value='$teksawal'><br><br>
	  <input type='submit' name='submit' value='Proses'>
</form>
";
$teksperbaikan = str_replace('q', 'k', $teksawal);
echo "$form";
echo "$teksperbaikan";
?>