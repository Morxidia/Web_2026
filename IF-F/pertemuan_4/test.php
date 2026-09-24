<!DOCTYPE html>
<html>
  <head>
    <title>Coba</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <main>
      <?php 
        echo "<h1>Hello World</h1>";
        echo date("D F Y");
        // variable declaration 
        $tanggal = date("D F Y");
        $namaArr = array("Laras", "Ran", "wildan");
        $namaAsc = array("Laras"=>2.3, "Ran"=>3.2, "wildan"=>1.3);
        for($i = 0; $i < count($namaArr); $i++){
          if($i == 0){
            echo "<p class='text-danger'>ini hari: 
                  $tanggal,<br/>  dan nama adalah  
                  $namaArr[$i]</p>";
          }
          else{
            echo "<p class='text-primary'>ini hari: 
                  $tanggal,<br/>  dan nama adalah
                  $namaArr[$i]</p>";
          }
        }

        // foreach(Array as Key => Value)
        foreach($namaAsc as $key => $val){
          echo "<p class='text-primary'>ini hari: 
                    $tanggal,<br/>$key dan IPK adalah
                    $val </p>";
        }
      ?>
      <form action="sendData.php" method="POST">
        <input type="checkbox" name="hobby[]" value="Anime" >Anime</input >
        <input type="checkbox" name="hobby[]" value="Funko" >Funko</input >
        <input type="checkbox" name="hobby[]" value="Punk" >Punk</input >
        <button>Submit</button>
      </form>
    </main>
  </body>
</html>