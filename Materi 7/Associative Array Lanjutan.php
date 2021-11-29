
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