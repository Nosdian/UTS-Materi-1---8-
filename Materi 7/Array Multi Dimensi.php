
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
