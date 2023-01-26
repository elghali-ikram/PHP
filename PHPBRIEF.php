<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
</head>
<body>
  <!-- ================================forms build ================================ -->
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
                <input type="number" class="form-control" name="morroco1" id="morroco1" value="<?php if (isset($_POST['morroco1'])) echo $_POST['morroco1']; ?>">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control" name="croatia1" id="croatia1" value="<?php if (isset($_POST['croatia1'])) echo $_POST['croatia1']; ?>">
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
                <input type="number" class="form-control" name="belgique1" id="belgique1" value="<?php if (isset($_POST['belgique1'])) echo $_POST['belgique1']; ?>">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control" name="canada1" id="canada1" value="<?php if (isset($_POST['canada1'])) echo $_POST['canada1']; ?>">
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
                <input type="number" class="form-control" name="belgique2" id="belgique2" value="<?php if (isset($_POST['belgique2'])) echo $_POST['belgique2']; ?>">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control" name="morroco2" id="morroco2" value="<?php if (isset($_POST['morroco2'])) echo $_POST['morroco2']; ?>">
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
                <input type="number" class="form-control" name="croatia2" id="croatia2" value="<?php if (isset($_POST['croatia2'])) echo $_POST['croatia2']; ?>">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control" name="canada2" id="canada2" value="<?php if (isset($_POST['canada2'])) echo $_POST['canada2']; ?>">
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
                <input type="number" class="form-control" name="croatia3" id="croatia3" value="<?php if (isset($_POST['croatia3'])) echo $_POST['croatia3']; ?>">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control" name="belgique3" id="belgique3" value="<?php if (isset($_POST['belgique3'])) echo $_POST['belgique3']; ?>">
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
                <input type="number" class="form-control" name="canada3" id="canada3" value="<?php if (isset($_POST['canada3'])) echo $_POST['canada3']; ?>">
              </div>
              <div class=" d-flex gap-4">
                <input type="number" class="form-control" name="morroco3" id="morroco3" value="<?php if (isset($_POST['morroco3'])) echo $_POST['morroco3']; ?>">
                <label class="align-self-center">Morrocco</label>
                <img src="images.jfif" class="rounded-circle" width="40px" height="40px">
              </div>
            </div>
          </div>
        </div>
      </div>
      <button type="submit" name="on" id="on" class="w-25 align-self-center btn btn-primary">RESULT</button>
    </form>
    <?php
        //========================= function for get and sort data ================================

  function getdata()
  {
    $array1 = array();
    $standings = array();
    $table1 = array();
    $table2 = array();
    $sort = array();
    $sort1 = array();
    $Table = array();
    //========================= get all input not empty ================================
    foreach ($_POST as $key => $value) {
      if (!empty($value) || $value == 0) {
        $array1["$key"] = "$value";
      }
    }
    $valuesd = array_values($array1);
    $keysd = array_keys($array1);
    for ($i = 0; $i < count($keysd); $i++) {
      array_push($table1, substr($keysd[$i], 0, -1));
      array_push($table2, substr($keysd[$i], 0, -1));
    }
    //========================= check the data ================================
    foreach ($table1 as $team) {
      $standings[$team] = array("name" => "", "points" => 0, "goals" => 0, "match" => 0, "wins" => 0, "draws" => 0, "loses" => 0, "goals_in" => 0, "+/-" => 0);
      foreach ($table2 as $value) {
        $standings[$team]["matches"][$value] = array("oppenent" => "", "points" => 0, "goals" => 0, "goals in" => 0, "+/-" => 0);
      }
    }
        //========================= fill array ================================

    for ($i = 0; $i < count($valuesd) - 1; $i += 2) {
      $standings[substr($keysd[$i], 0, -1)]["name"] = substr($keysd[$i], 0, -1);
      $standings[substr($keysd[$i + 1], 0, -1)]["name"] = substr($keysd[$i + 1], 0, -1);
      $standings[substr($keysd[$i], 0, -1)]["matches"][substr($keysd[$i + 1], 0, -1)]["oppenent"] = substr($keysd[$i + 1], 0, -1);
      $standings[substr($keysd[$i + 1], 0, -1)]["matches"][substr($keysd[$i], 0, -1)]["oppenent"] = substr($keysd[$i], 0, -1);
      if ($valuesd[$i] > $valuesd[$i + 1]) {
        $standings[substr($keysd[$i], 0, -1)]["points"] += 3;
        $standings[substr($keysd[$i], 0, -1)]["goals"] += $valuesd[$i];
        $standings[substr($keysd[$i + 1], 0, -1)]["goals"] += $valuesd[$i + 1];
        $standings[substr($keysd[$i], 0, -1)]["match"] += 1;
        $standings[substr($keysd[$i + 1], 0, -1)]["match"] += 1;
        $standings[substr($keysd[$i], 0, -1)]["wins"] += 1;
        $standings[substr($keysd[$i + 1], 0, -1)]["loses"] += 1;
        $standings[substr($keysd[$i + 1], 0, -1)]["goals_in"] += $valuesd[$i];
        $standings[substr($keysd[$i], 0, -1)]["goals_in"] += $valuesd[$i + 1];
        $standings[substr($keysd[$i + 1], 0, -1)]["matches"][substr($keysd[$i], 0, -1)]["points"] += 3;
        $standings[substr($keysd[$i], 0, -1)]["matches"][substr($keysd[$i + 1], 0, -1)]["points"] += 0;
        $standings[substr($keysd[$i + 1], 0, -1)]["matches"][substr($keysd[$i], 0, -1)]["goals"] += $valuesd[$i];
        $standings[substr($keysd[$i], 0, -1)]["matches"][substr($keysd[$i + 1], 0, -1)]["goals"] += $valuesd[$i + 1];
        $standings[substr($keysd[$i], 0, -1)]["matches"][substr($keysd[$i + 1], 0, -1)]["goals in"] += $valuesd[$i];
        $standings[substr($keysd[$i + 1], 0, -1)]["matches"][substr($keysd[$i], 0, -1)]["goals in"] += $valuesd[$i + 1];
      } elseif ($valuesd[$i] < $valuesd[$i + 1]) {
        $standings[substr($keysd[$i + 1], 0, -1)]["points"] += 3;
        $standings[substr($keysd[$i + 1], 0, -1)]["goals"] += $valuesd[$i + 1];
        $standings[substr($keysd[$i], 0, -1)]["goals"] += $valuesd[$i];
        $standings[substr($keysd[$i], 0, -1)]["match"] += 1;
        $standings[substr($keysd[$i + 1], 0, -1)]["match"] += 1;
        $standings[substr($keysd[$i + 1], 0, -1)]["wins"] += 1;
        $standings[substr($keysd[$i], 0, -1)]["loses"] += 1;
        $standings[substr($keysd[$i + 1], 0, -1)]["goals_in"] += $valuesd[$i];
        $standings[substr($keysd[$i], 0, -1)]["goals_in"] += $valuesd[$i + 1];
        $standings[substr($keysd[$i + 1], 0, -1)]["matches"][substr($keysd[$i], 0, -1)]["goals"] += $valuesd[$i];
        $standings[substr($keysd[$i], 0, -1)]["matches"][substr($keysd[$i + 1], 0, -1)]["goals"] += $valuesd[$i + 1];
        $standings[substr($keysd[$i], 0, -1)]["matches"][substr($keysd[$i + 1], 0, -1)]["points"] += 3;
        $standings[substr($keysd[$i + 1], 0, -1)]["matches"][substr($keysd[$i], 0, -1)]["points"] += 0;
        $standings[substr($keysd[$i], 0, -1)]["matches"][substr($keysd[$i + 1], 0, -1)]["goals in"] += $valuesd[$i];
        $standings[substr($keysd[$i + 1], 0, -1)]["matches"][substr($keysd[$i], 0, -1)]["goals in"] += $valuesd[$i + 1];
      } elseif ($valuesd[$i] == $valuesd[$i + 1]) {
        $standings[substr($keysd[$i + 1], 0, -1)]["matches"][substr($keysd[$i], 0, -1)]["goals"] += $valuesd[$i];
        $standings[substr($keysd[$i], 0, -1)]["matches"][substr($keysd[$i + 1], 0, -1)]["goals"] += $valuesd[$i + 1];
        $standings[substr($keysd[$i], 0, -1)]["matches"][substr($keysd[$i + 1], 0, -1)]["points"] += 1;
        $standings[substr($keysd[$i + 1], 0, -1)]["matches"][substr($keysd[$i], 0, -1)]["points"] += 1;
        $standings[substr($keysd[$i], 0, -1)]["matches"][substr($keysd[$i + 1], 0, -1)]["goals in"] += $valuesd[$i];
        $standings[substr($keysd[$i + 1], 0, -1)]["matches"][substr($keysd[$i], 0, -1)]["goals in"] += $valuesd[$i + 1];
        $standings[substr($keysd[$i + 1], 0, -1)]["points"] += 1;
        $standings[substr($keysd[$i], 0, -1)]["points"] += 1;
        $standings[substr($keysd[$i + 1], 0, -1)]["goals"] += $valuesd[$i];
        $standings[substr($keysd[$i], 0, -1)]["goals"] += $valuesd[$i + 1];
        $standings[substr($keysd[$i], 0, -1)]["match"] += 1;
        $standings[substr($keysd[$i + 1], 0, -1)]["match"] += 1;
        $standings[substr($keysd[$i], 0, -1)]["draws"] += 1;
        $standings[substr($keysd[$i + 1], 0, -1)]["draws"] += 1;
        $standings[substr($keysd[$i + 1], 0, -1)]["goals_in"] += $valuesd[$i];
        $standings[substr($keysd[$i], 0, -1)]["goals_in"] += $valuesd[$i + 1];
      }
      $standings[substr($keysd[$i + 1], 0, -1)]["matches"][substr($keysd[$i], 0, -1)]["+/-"] = $standings[substr($keysd[$i + 1], 0, -1)]["matches"][substr($keysd[$i], 0, -1)]["goals"] -  $standings[substr($keysd[$i + 1], 0, -1)]["matches"][substr($keysd[$i], 0, -1)]["goals in"];
      $standings[substr($keysd[$i], 0, -1)]["matches"][substr($keysd[$i + 1], 0, -1)]["+/-"] = $standings[substr($keysd[$i], 0, -1)]["matches"][substr($keysd[$i + 1], 0, -1)]["goals"] - $standings[substr($keysd[$i], 0, -1)]["matches"][substr($keysd[$i + 1], 0, -1)]["goals in"];
      $standings[substr($keysd[$i], 0, -1)]["+/-"] = $standings[substr($keysd[$i], 0, -1)]["goals"] - $standings[substr($keysd[$i], 0, -1)]["goals_in"];
      $standings[substr($keysd[$i + 1], 0, -1)]["+/-"] = $standings[substr($keysd[$i + 1], 0, -1)]["goals"] - $standings[substr($keysd[$i + 1], 0, -1)]["goals_in"];
    }
      //=========== sort the teams ==============
    uasort($standings, function ($a, $b) {
      if ($a['points'] === $b['points']) {
        if ($a['+/-'] === $b['+/-']) {
          if ($a['goals'] === $b['goals']) {
            return 0;
            // if ($a["matches"][$b["name"]]["points"]==$b["matches"][$a["name"]]["points"]) {
            //   if ($a["matches"][$b["name"]]["+/-"]==$b["matches"][$a["name"]]["+/-"]) {
            //     if ($a["matches"][$b["name"]]["goals"]==$b["matches"][$a["name"]]["goals"]) {
            //       return 0;
            //     }
            //     return ($a["matches"][$b["name"]]["goals"] < $b["matches"][$a["name"]]["goals"])? -1 : 1;
            //   }
            //   return ($a["matches"][$b["name"]]["+/-"] < $b["matches"][$a["name"]]["+/-"])? -1 : 1;
            // }
            // return ($a["matches"][$b["name"]]["points"] < $b["matches"][$a["name"]]["points"])? -1 : 1;
          }
          return ($a['goals'] > $b['goals']) ? -1 : 1;
        }
        return ($a['+/-'] > $b['+/-']) ? -1 : 1;
      }
      return ($a['points'] > $b['points']) ? -1 : 1;
    });   
    //=========== sort the teams with special case ==============
    for ($i = 0; $i < count($keysd) ; $i++) {
      if ($standings[substr($keysd[$i], 0, -1)]["+/-"] == $standings[substr($keysd[$i + 1], 0, -1)]["+/-"] && $standings[substr($keysd[$i + 1], 0, -1)]["+/-"] == $standings[substr($keysd[$i + 2], 0, -1)]["+/-"]) {
        array_push($sort, $standings[substr($keysd[$i], 0, -1)]);
        array_push($sort, $standings[substr($keysd[$i + 1], 0, -1)]);
        array_push($sort, $standings[substr($keysd[$i + 2], 0, -1)]);
        array_push($sort1, $standings[substr($keysd[$i + 3], 0, -1)]);
          break;
      }
      else{
        foreach ($standings as $team) {
          array_push($sort,$team);
        }
        break;
      }
    }
    if(count($sort)!=count($standings))
    {
      for ($j=0; $j < count($sort); $j++) {
        if ($sort[$j]["matches"][$sort1[0]["name"]]["goals"] < $sort1[0]["matches"][$sort[$j]["name"]]["goals"]) {
          $sort[$j]["points"] -= 3;
          $sort[$j]["wins"] -= 1;
          $sort[$j]["goals"] -= $sort[$j]["matches"][$sort1[0]["name"]]["goals in"];
          $sort[$j]["goals_in"] -= $sort[$j]["matches"][$sort1[0]["name"]]["goals"];
        }
        elseif ($sort[$j]["matches"][$sort1[0]["name"]]["goals"] > $sort1[0]["matches"][$sort[$j]["name"]]["goals"]) {
          $sort[$j]["goals"] -= $sort[$j]["matches"][$sort1[0]["name"]]["goals in"];
          $sort[$j]["goals_in"] -= $sort[$j]["matches"][$sort1[0]["name"]]["goals"];
        }
        elseif($sort[$j]["matches"][$sort1[0]["name"]]["goals"] == $sort1[0]["matches"][$sort[$j]["name"]]["goals"])
        {
          $sort[$j]["points"] -= 1;
          $sort[$j]["goals"] -= $sort[$j]["matches"][$sort1[0]["name"]]["goals in"];
          $sort[$j]["goals_in"] -= $sort[$j]["matches"][$sort1[0]["name"]]["goals"];
        }
        $sort[$j]["+/-"] = $sort[$j]["goals"] - $sort[$j]["goals_in"];
      }
      uasort($sort, function ($a, $b) {
        if ($a['points'] === $b['points']) {
          if ($a['+/-'] === $b['+/-']) {
            if ($a['goals'] === $b['goals']) {
              return 0;
            }
            return ($a['goals'] > $b['goals']) ? -1 : 1;
          }
          return ($a['+/-'] > $b['+/-']) ? -1 : 1;
        }
        return ($a['points'] > $b['points']) ? -1 : 1;
      });
      for ($i=0; $i < count($sort); $i++) {
        foreach ($standings as $key => $value) {
          if($sort[$i]["name"]==$standings[$key]["name"])
          {
              $sort[$i] = $standings[$key];
          }
        } 
      }
    }
    $Table = array_merge($sort, $sort1);
      return $Table;
  }
  ?>
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
          //=========== builds table ==============
          $array1 = getdata();
          for ($i=0; $i < count($array1) ; $i++) { 
            echo "<tr>";
            foreach ($array1[$i] as $x => $y) {
              if ($x!="matches") {
                echo "<td>" . $y . "</td>";
              }
            }
            echo "</tr>";     
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>