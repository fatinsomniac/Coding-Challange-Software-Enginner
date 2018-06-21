<?php
echo"
<body style='background: #ff8080;color:white;font-weight: bold;font-size: 200%;'>
</body>
";
function print_deret_fibonacci($jumlah)
{
  $angka_pertama=0;
  $angka_kedua=1;
  
  $hasil = "$angka_kedua";
  for ($i=0; $i < $jumlah-1; $i++)
  {
    $output = $angka_kedua + $angka_pertama;
    $hasil = $hasil." $output";
  
    $angka_pertama = $angka_kedua;
    $angka_kedua = $output;
  }
  return $hasil;
}
  
function piramida_fibonacci($tingkat){
  for ($i=1; $i < $tingkat+1; $i++)
  {
    echo print_deret_fibonacci($i);
    echo "<br>";
  }
}
piramida_fibonacci(8);
?>