<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; ?> 
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <?php
        $nama = "Sekolah Koding 123";
        $_123 = "Mteri Baru";

        echo "<h1>$_123</h1>";
        echo "Halo ". $nama ."<br>";
        echo "Member";
      ?>
  </body>
</html>


<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
  <h1>4 TIPE DATA STRING</h1>

   <?php
    $nama  = "Kelas Coding";
    $nama2 = 'Belajar Coding';

    echo "Selamat datang di \$nama"; 
   ?>
  </body>
</html>


<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
   <h1>TIPE DATA INTEGER FLOAT</h1>
  

   <?php
    $nama  = "Kelas Coding";
    $nama2 = 'Belajar Coding';


    echo "Selamat datang di $nama <br>"; 

    $angka  =1000;
    $angka2 =100.123;

    echo $angka + $angka2;
   ?>
  </body>
</html>


<html>
  <head>
    <meta charset="utf-8">
    <title>Operartor Aritmatika</title>
  </head>
  <body>

    <?php
    echo "<h1>Kelas Coding</h1>";
    echo  "Halo <br>";
    echo  "Member";
    ?>

  Halo semuanya!
  
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
  <h1> Tipe Data String</h1>

   <?php
    $nama  = "Kelas Coding";
    $nama2 = 'Belajar Coding';


    echo "Selamat datang di \$nama"; 
   ?>
  </body>
</html>


<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Melita Belajar Coding";
    $nama2 = ' Materi PHP Pemula: Metode Penanganan String';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2.64;

    echo "angka hari ini adalah ". min($angka3, $angka, $angka2)
   ?>
  </body>
</html>


<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

  <?php
  $nama = "Belajar Dasar Dasar PHP";
  $_123 = "Materi PHP Pemula: Metode String(Materi 5)";

  echo "<h1>$_123</h1>";
  echo "Halo ". $nama."<br>";
  echo "Member";
  ?>
  </body><html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Melita  Coding";
    $nama2 = 'Belajar Coding';

    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2.64;

    $text = "Hai Semuanya Di sini";
    echo str_repeat(str_replace("Hai","Hello" , $text), 10);
   ?>
  </body>
</html>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Melita Belajar Coding";
    $nama2 = 'Materi PHP Pemula - Operator Matematika(Materi 5)';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =1;
    $angka3 =5;

    $angka *= $angka2;

    echo $angka;
   ?>
  </body>
</html>


<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Melita Belajar Coding";
    $nama2 = ' Materi PHP Pemula - Metode Matematika';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2.64;

    echo "angka hari ini adalah ". min($angka3, $angka, $angka2)
   ?>
  </body>
</html>


<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
    <h1>Materi PHP Pemula - Perkenalan Array(Materi 6)</h1>

  <?php
   
    $kotak  =array('Anjing', 'Kucing', 'Ikan');
    $nama   =['Meokmul', 'Leon', 'Pear'];

    
    print_r(  $kotak);
    echo $nama[0]

  ?>
  </body>
</html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Associative Array(Materi 6) </h1>

    <?php 

   
    $data = ['nama' => 'Melita',
             'umur'=>20,
             'sifat'=>'Care'];

    $data ['nama'] = " Melita Nisti";
    echo"Nama adalah".$data ['nama'];
      
      
    ?>
  </body>
</html>


<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
    <h1>Materi PHP Pemula -Metode Array</h1>

  <?php
    $angka  =[5, 10, 2, 1, 6];
    $kotak  =array('Anjing', 'Kucing', 'Ikan');
    $nama   =['Meokmul', 'Leon', 'Pear'];

    sort($angka);
    print_r( $angka);
     

  ?>
  </body>
</html>


<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <h1> Array Multi Dimensi </h1>
  <?php
    $data = array(
      array("programmer", "20", "Standar"),
      array("designer", "20", "Rajin"),
      array("manager", "20", "Rajin Banget"),
    );

    print_r($data);

    $data[2][0] ="proyek manager";
    echo $data[2][0];


  ?>
  </body>
</html> 


<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
    <h1> Associative Array lanjutan(Materi 7) </h1>
  <?php
    $data = array("nama" =>"Melita",
                  "umur" =>20,
                  "status" =>"Mahasiswi"
    );

     $data2 = array("Bias" =>"Doh Kyungsoo",
                  "Fandom" =>"EXOL"
    );
    print_r( array_merge($data, $data2));

  ?>
  </body>
</html> 



<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Pengulangan For dan Array</h1>

    <?php 

    $hewan = ['anjing','babi','cicak','domba'];

    for ($i=0; $i < count($hewan); $i++)
    {
      echo "-----------------";
      echo $hewan[$i];
      echo "----------------- <br>";
    }
    ?>
  </body>

  
<html>
  <head>
    <meta charset="utf=8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Pengulangan For Looping(Materi 8)</h1>

    <?php 

    for ($i=0; $i<5; $i++)
    {
      echo "-----------------";
      echo "Melita koding $i";
      echo "----------------- <br>";
    }
    ?>
  </body>
</html>


<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Pengulangan Foreach untuk Array asosiatif(Materi 8)</h1>

    <?php 

   
    $data = ['nama' => 'Melita',
             'umur'=>20,
             'sifat'=>'Care'];

      foreach($data as $key => $value){
        echo $value ."<br>"; 
      }
      
    ?>
  </body>
</html>

  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1>Pengulangan Foreach untuk Array(Materi 8)</h1>

    <?php 

    $hewan = ['anjing','babi','kucing','domba'];

    for ($i=0; $i < count($hewan) - 1; $i++)
    {
      echo "-----------------";
      echo $hewan[$i];
      echo "----------------- <br>";
    }

      foreach($hewan as $h){
        echo "-----------------";
        echo $h;
        echo "----------------- <br>";
    }
    ?>
  </body>
</html>


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