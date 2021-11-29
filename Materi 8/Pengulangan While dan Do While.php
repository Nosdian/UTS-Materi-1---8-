
<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1>Pengulangan While dan Do While(Materi 8)</h1>

    <?php 
   $hewan = ['anjing','babi','Kucing','domba','kupu-kupu'];
   
   $i = 5;

   do{
     echo '------';
     echo $hewan[$i]. "<br>";
     $i++;
   }while( $i < count($hewan));
    
  ?>