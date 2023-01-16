<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
  <link rel="stylesheet" href="PHP.css">
</head>

<body>
  <div class="d-flex flex-column gap-3">
    <form method="post" class="d-flex flex-column gap-3">
      <div class="w-100 d-flex justify-content-center align-self-center mt-5 gap-3">
        <div class="d-flex flex-column gap-3">
          <div class="card text-center">
            <div class="card-header">
              21/11/2022 11:00
            </div>
            <div class="card-body d-flex">
              <div class=" d-flex gap-4">
                <img src="images.jfif" class="rounded-circle" width="40px" height="40px">
                <label class="align-self-center">Morrocco</label>
                <input type="number" class="form-control"  name="morroco1">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control"   name="croatia1">
                <label class="align-self-center">Croatia</label>
                <img src="croatia.png" class="rounded-circle" width="40px" height="40px">
              </div>
            </div>
          </div>
          <div class="card text-center">
            <div class="card-header">
              21/11/2022 11:00
            </div>
            <div class="card-body d-flex">
              <div class="d-flex gap-4">
                <img src="belgique.png" class="rounded-circle" width="40px" height="40px">
                <label class="align-self-center">Belgique</label>
                <input type="number" class="form-control"  name="belgique1">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control "  name="canada1">
                <label class="align-self-center">Canada</label>
                <img src="canada.jfif" class="rounded-circle" width="40px" height="40px">

              </div>
            </div>
          </div>
          <div class="card text-center">
            <div class="card-header">
              21/11/2022 11:00
            </div>
            <div class="card-body d-flex">
              <div class=" d-flex gap-4">
                <img src="belgique.png" class="rounded-circle" width="40px" height="40px">
                <label class="align-self-center">Belgique</label>
                <input type="number" class="form-control"  name="beljique2">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control"  name="morroco2">
                <label class="align-self-center">Morrocco</label>
                <img src="images.jfif" class="rounded-circle" width="40px" height="40px">

              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column gap-3">
          <div class="card text-center">
            <div class="card-header">
              21/11/2022 11:00
            </div>
            <div class="card-body d-flex">
              <div class=" d-flex gap-4">
                <img src="croatia.png" class="rounded-circle" width="40px" height="40px">
                <label class="align-self-center">Croatia</label>
                <input type="number" class="form-control"  name="croatia2">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control"  name="canada2">
                <label class="align-self-center">Canada</label>
                <img src="canada.jfif" class="rounded-circle" width="40px" height="40px">
              </div>
            </div>
          </div>
          <div class="card text-center">
            <div class="card-header">
              21/11/2022 11:00
            </div>
            <div class="card-body d-flex">
              <div class=" d-flex gap-4">
                <img src="croatia.png" class="rounded-circle" width="40px" height="40px">
                <label class="align-self-center">Croatia</label>
                <input type="number" class="form-control"  name="croatia3">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control" name="belgique3">
                <label class="align-self-center">Belgique</label>
                <img src="belgique.png" class="rounded-circle" width="40px" height="40px">
              </div>
            </div>

          </div>
          <div class="card text-center">
            <div class="card-header">
              21/11/2022 11:00
            </div>
            <div class="card-body d-flex">
              <div class=" d-flex gap-4">
                <img src="canada.jfif" class="rounded-circle" width="40px" height="40px">
                <label class="align-self-center">Canada</label>
                <input type="number" class="form-control"  name="canada3">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control"  name="morroco3">
                <label class="align-self-center">Morrocco</label>
                <img src="images.jfif" class="rounded-circle" width="40px" height="40px">
              </div>
            </div>
          </div>
        </div>
      </div>
      <button type="submit" name="on" id="on" class="w-25 align-self-center btn btn-primary">RESULT</button>
    </form>
    <div class="w-50   align-self-center gap-3">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Selection</th>
            <th>Pts</th>
            <th>PAR</th>
            <th>GAN</th>
            <th>EMP</th>
            <th>PER</th>
            <th>G.F</th>
            <th>G.C</th>
            <th>+/-</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $simulate = array(
            "morrocco" => array("PTS" => $pts = 0, "PAR" => $par = 0, "GAN" => $gan = 0, "EMP" => $emp = 0, "PER" => $per = 0, "G.F" => $gf = 0, "G.C" => $gc = 0, "+/-" => $diff = 0),
            "croatia" => array("PTS" => $pts = 0, "PAR" => $par = 0, "GAN" => $gan = 0, "EMP" => $emp = 0, "PER" => $per = 0, "G.F" => $gf = 0, "G.C" => $gc = 0, "+/-" => $diff = 0)
          );
          foreach ($simulate as $key => $value) {
            echo "<tr><td>" . $key . "</td>";
            foreach ($value as $x => $y) {
              echo "<td>" . $y . "</td>";
            }
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php 
    $body = print_r($_POST, true);
    $count = 0;
    $array1 = array();
    foreach ($_POST as $key => $value) {
      global $count,$array1;
      if(!empty($value))
      {
        array_push($array1,"$key => $value" );
         $count++;    
         echo substr($key, -1)."</br>";
         echo $key . $value."</br>" ;
      }
    }
    for ($i=0; $i < count($array1)-1 ; $i+=5) {
    echo $array1[$i]."</br>";
    echo $array1[$i+1];
 
      // foreach ($array1[$i] as $key => $value) {
      //   foreach ($array1[$i+1] as $x => $y) {
      //     # code...
      //   }

      // }
    }




  ?>

</body>

</html>