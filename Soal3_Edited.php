<?php
@$teksawal= $_POST['teksawal'];
$form="
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
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

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    width: 300px;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #3CBC8D;
	font-size: 16px;
	color: white;
    resize: none;
}
</style>
</head>
<body>
<center>
<div class='middle'>
        <form method='POST'>
                <label for='fname'><b>Masukan Kata/Kalimat</b></label> 
                <textarea name='teksawal'>$teksawal</textarea><br><br>
                <input type='submit' name='submit' value='CHECK'>
        </form>
    </div>
</center>
</body>
";
$teksperbaikan = str_replace('q', 'k', $teksawal);
echo "$form<br><br>";
echo "<center>
<body style='background: #ff8080;'>
<div>
$teksperbaikan
</div>
</body>
<center>";
?>