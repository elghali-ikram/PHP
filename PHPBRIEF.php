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
                <input type="number" class="form-control" value="<?php if(isset($_POST['morroco1'])) echo $_POST['morroco1']; ?>" name="morroco1">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control" value="<?php if(isset($_POST['croatia1'])) echo $_POST['croatia1']; ?>" name="croatia1">
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
                <input type="number" class="form-control" value="<?php if(isset($_POST['belgique1'])) echo $_POST['belgique1']; ?>" name="belgique1">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control" value="<?php if(isset($_POST['canada1'])) echo $_POST['canada1']; ?>" name="canada1">
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
                <input type="number" class="form-control" value="<?php if(isset($_POST['belgique2'])) echo $_POST['belgique2']; ?>" name="belgique2">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control" value="<?php if(isset($_POST['morroco2'])) echo $_POST['morroco2']; ?>" name="morroco2">
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
                <input type="number" class="form-control" value="<?php if(isset($_POST['croatia2'])) echo $_POST['croatia2']; ?>" name="croatia2">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control" value="<?php if(isset($_POST['canada2'])) echo $_POST['canada2']; ?>" name="canada2">
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
                <input type="number" class="form-control" value="<?php if(isset($_POST['croatia3'])) echo $_POST['croatia3']; ?>" name="croatia3">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control" value="<?php if(isset($_POST['belgique3'])) echo $_POST['belgique3']; ?>" name="belgique3">
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
                <input type="number" class="form-control" value="<?php if(isset($_POST['canada3'])) echo $_POST['canada3']; ?>" name="canada3">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control" value="<?php if(isset($_POST['morroco3'])) echo $_POST['morroco3']; ?>" name="morroco3">
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
  function getdata()
  {
    $array1 = array();
    foreach ($_POST as $key => $value) {
      if (!empty($value) || $value==0) {
        $array1["$key"] = "$value";
      }
    }
    $valuesd = array_values($array1);
    $keysd = array_keys($array1);
    $standings = array();
    $table1 = array();
    for ($i=0; $i <count($keysd) ; $i++) {
      array_push($table1, substr($keysd[$i], 0, -1));
    }
    foreach ($table1 as $team) {
      $standings[$team] = array("name" => "","points" => 0,"goals" => 0,"match" => 0,"wins" => 0,"draws" => 0,"loses" => 0,"goals_in" => 0,"+/-" => 0,"matches" => array( ));
    }
    for ($i = 0; $i < count($valuesd) - 1; $i += 2) {
      echo substr($keysd[$i], 0 , -1);
      echo substr($keysd[$i+1], 0 , -1);
      $standings[substr($keysd[$i], 0 , -1)]["matches"][substr($keysd[$i+1], 0 , -1)]["oppenent"] =substr($keysd[$i+1], 0 , -1) ;
      $standings[substr($keysd[$i+1], 0 , -1)]["matches"][substr($keysd[$i], 0 , -1)]["oppenent"] =substr($keysd[$i], 0 , -1) ;
      if ($valuesd[$i] > $valuesd[$i + 1]) {
        echo "kbar";
        $standings[substr($keysd[$i+1], 0 , -1)]["matches"][substr($keysd[$i], 0 , -1)]["points"] +=3;
        $standings[substr($keysd[$i], 0 , -1)]["matches"][substr($keysd[$i+1], 0 , -1)]["points"] +=0 ;
        $standings[substr($keysd[$i+1], 0 , -1)]["matches"][substr($keysd[$i], 0 , -1)]["goals"] +=$valuesd[$i];
        $standings[substr($keysd[$i], 0 , -1)]["matches"][substr($keysd[$i+1], 0 , -1)]["goals"] += $valuesd[$i+1];
        $standings[substr($keysd[$i], 0 , -1)]["matches"][substr($keysd[$i+1], 0 , -1)]["goals in"] += $valuesd[$i];
        $standings[substr($keysd[$i+1], 0 , -1)]["matches"][substr($keysd[$i], 0 , -1)]["goals in"] +=$valuesd[$i+1];
        $standings[substr($keysd[$i], 0 , -1)]["points"] += 3;
        $standings[substr($keysd[$i], 0 , -1)]["goals"] += $valuesd[$i];        
        $standings[substr($keysd[$i+1], 0 , -1)]["goals"] += $valuesd[$i+1];
        $standings[substr($keysd[$i], 0 , -1)]["match"] += 1;
        $standings[substr($keysd[$i+1], 0 , -1)]["match"] += 1;
        $standings[substr($keysd[$i], 0 , -1)]["wins"] += 1;
        $standings[substr($keysd[$i+1], 0 , -1)]["loses"] += 1;
        $standings[substr($keysd[$i+1], 0 , -1)]["goals_in"] += $valuesd[$i];
        $standings[substr($keysd[$i], 0 , -1)]["goals_in"] += $valuesd[$i+1];
      }
      elseif($valuesd[$i] < $valuesd[$i+1])
      {
        $standings[substr($keysd[$i+1], 0 , -1)]["matches"][substr($keysd[$i], 0 , -1)]["goals"] +=$valuesd[$i];
        $standings[substr($keysd[$i], 0 , -1)]["matches"][substr($keysd[$i+1], 0 , -1)]["goals"] += $valuesd[$i+1];
        $standings[substr($keysd[$i], 0 , -1)]["matches"][substr($keysd[$i+1], 0 , -1)]["points"] +=3 ;
        $standings[substr($keysd[$i+1], 0 , -1)]["matches"][substr($keysd[$i], 0 , -1)]["points"] +=0;
        $standings[substr($keysd[$i], 0 , -1)]["matches"][substr($keysd[$i+1], 0 , -1)]["goals in"] += $valuesd[$i];
        $standings[substr($keysd[$i+1], 0 , -1)]["matches"][substr($keysd[$i], 0 , -1)]["goals in"] +=$valuesd[$i+1];
        $standings[substr($keysd[$i+1], 0 , -1)]["points"] += 3;
        $standings[substr($keysd[$i+1], 0 , -1)]["goals"] += $valuesd[$i+1];
        $standings[substr($keysd[$i], 0 , -1)]["goals"] += $valuesd[$i]; 
        $standings[substr($keysd[$i], 0 , -1)]["match"] += 1;
        $standings[substr($keysd[$i+1], 0 , -1)]["match"] += 1; 
        $standings[substr($keysd[$i+1], 0 , -1)]["wins"] += 1;
        $standings[substr($keysd[$i], 0 , -1)]["loses"] += 1;
        $standings[substr($keysd[$i+1], 0 , -1)]["goals_in"] += $valuesd[$i];
        $standings[substr($keysd[$i], 0 , -1)]["goals_in"] += $valuesd[$i+1];  
      }
      elseif($valuesd[$i] == $valuesd[$i+1])
      {
        $standings[substr($keysd[$i+1], 0 , -1)]["matches"][substr($keysd[$i], 0 , -1)]["goals"] +=$valuesd[$i];
        $standings[substr($keysd[$i], 0 , -1)]["matches"][substr($keysd[$i+1], 0 , -1)]["goals"] += $valuesd[$i+1];
        $standings[substr($keysd[$i], 0 , -1)]["matches"][substr($keysd[$i+1], 0 , -1)]["points"] +=1 ;
        $standings[substr($keysd[$i+1], 0 , -1)]["matches"][substr($keysd[$i], 0 , -1)]["points"] +=1;
        $standings[substr($keysd[$i], 0 , -1)]["matches"][substr($keysd[$i+1], 0 , -1)]["goals in"] += $valuesd[$i];
        $standings[substr($keysd[$i+1], 0 , -1)]["matches"][substr($keysd[$i], 0 , -1)]["goals in"] +=$valuesd[$i+1];
        $standings[substr($keysd[$i+1], 0 , -1)]["points"] +=1;
        $standings[substr($keysd[$i], 0 , -1)]["points"] +=1;
        $standings[substr($keysd[$i+1], 0 , -1)]["goals"] += $valuesd[$i];
        $standings[substr($keysd[$i], 0 , -1)]["goals"] += $valuesd[$i+1];
        $standings[substr($keysd[$i], 0 , -1)]["match"] += 1;
        $standings[substr($keysd[$i+1], 0 , -1)]["match"] += 1;
        $standings[substr($keysd[$i], 0 , -1)]["draws"] += 1;
        $standings[substr($keysd[$i+1], 0 , -1)]["draws"] += 1;
        $standings[substr($keysd[$i+1], 0 , -1)]["goals_in"] += $valuesd[$i];
        $standings[substr($keysd[$i], 0 , -1)]["goals_in"] += $valuesd[$i+1]; 
      }     
      $standings[substr($keysd[$i+1], 0 , -1)]["matches"][substr($keysd[$i], 0 , -1)]["+/-"] =$standings[substr($keysd[$i+1], 0 , -1)]["matches"][substr($keysd[$i], 0 , -1)]["goals"] -  $standings[substr($keysd[$i+1], 0 , -1)]["matches"][substr($keysd[$i], 0 , -1)]["goals in"];
      $standings[substr($keysd[$i], 0 , -1)]["matches"][substr($keysd[$i+1], 0 , -1)]["+/-"] = $standings[substr($keysd[$i], 0 , -1)]["matches"][substr($keysd[$i+1], 0 , -1)]["goals"] - $standings[substr($keysd[$i], 0 , -1)]["matches"][substr($keysd[$i+1], 0 , -1)]["goals in"];
      $standings[substr($keysd[$i], 0, -1)]["name"] =substr($keysd[$i], 0, -1); 
      $standings[substr($keysd[$i+1], 0, -1)]["name"] =substr($keysd[$i+1], 0, -1);       
      $standings[substr($keysd[$i], 0, -1)]["+/-"] = $standings[substr($keysd[$i], 0, -1)]["goals"] - $standings[substr($keysd[$i], 0, -1)]["goals_in"];       
      $standings[substr($keysd[$i+1], 0, -1)]["+/-"] = $standings[substr($keysd[$i+1], 0, -1)]["goals"] - $standings[substr($keysd[$i+1], 0, -1)]["goals_in"];       

    }
    echo "<pre>";
            print_r($standings);
    echo "</pre>";
    uasort($standings, function ($a, $b) {
      print_r($a["matches"][$b["name"]]) ;
      print_r($b["matches"][$a["name"]]) ;
      if ($a['points'] === $b['points']) {
        if ($a['+/-'] === $b['+/-']) {
            if ($a['goals'] === $b['goals']) {
              if ($a["matches"][$b["name"]]["points"]==$b["points"]) {
                if ($a["matches"][$b["name"]]["+/-"]==$b["+/-"]) {
                  if ($a["matches"][$b["name"]]["goals"]==$b["goals"]) {
                  return 0;
                  }
                  return ($a["matches"][$b["name"]]["goals"]==$b["goals"])? -1 : 1;
                }
                return ($a["matches"][$b["name"]]["+/-"]==$b["+/-"])? -1 : 1;
              }
                return ($a["matches"][$b["name"]]["points"]==$b["points"])? -1 : 1;
            }
            return ($a['goals'] > $b['goals']) ? -1 : 1;
        }
        return ($a['+/-'] > $b['+/-']) ? -1 : 1;
    }
    return ($a['points'] > $b['points']) ? -1 : 1;
  });
  echo "<pre>";
  print_r($standings);
  echo "</pre>";
  }
  getdata();
  ?>
</body>
</html>