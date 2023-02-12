<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
  <?php
// define variables and set to empty values
$cauthuerr = "";
$cauthu = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["cauthu"])) {
        $cauthuerr = "Gender is required";
      } else {
        $cauthu = test_input($_POST["gender"]);
      }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>BẦU CHỌN CẦU THỦ</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    cauthu:
    <input type="radio" name="cauthu" <?php if (isset($cauthu) && $cauthu=="ronaldo") echo "checked";?> value="ronaldo">ronaldo
    <input type="radio" name="cauthu" <?php if (isset($cauthu) && $cauthu=="messi") echo "checked";?> value="messi">messi
    <input type="radio" name="cauthu" <?php if (isset($cauthu) && $cauthu=="neymar") echo "checked";?> value="neymar">neymar 
    <input type="radio" name="cauthu" <?php if (isset($cauthu) && $cauthu=="suarez") echo "checked";?> value="suarez">suarez
    <input type="radio" name="cauthu" <?php if (isset($cauthu) && $cauthu=="mpappe") echo "checked";?> value="mpappe">mpappe
    <input type="radio" name="cauthu" <?php if (isset($cauthu) && $cauthu=="halland") echo "checked";?> value="halland">halland
    <input type="radio" name="cauthu" <?php if (isset($cauthu) && $cauthu=="hazard") echo "checked";?> value="hazard">hazard
    <input type="radio" name="cauthu" <?php if (isset($cauthu) && $cauthu=="debruyne") echo "checked";?> value="debruyne">debruyne
    <input type="radio" name="cauthu" <?php if (isset($cauthu) && $cauthu=="kross") echo "checked";?> value="kross">kross
    <input type="radio" name="cauthu" <?php if (isset($cauthu) && $cauthu=="modric") echo "checked";?> value="modric">modric
    <span class="error">* <?php echo $cauthuerr;?></span>
    <br><br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $player = (int) $_POST["player"];
      // Lưu số phiếu bầu của cầu thủ này vào database
      // ...
      echo "Bạn đã bầu chọn cho cầu thủ $player.<br>";
      // Lấy 3 cầu thủ có số phiếu bầu cao nhất từ database
      // ...
      echo "3 cầu thủ có số phiếu bầu cao nhất là:<br>";
      echo "Cầu thủ X<br>";
      echo "Cầu thủ Y<br>";
      echo "Cầu thủ Z<br>";
    }
    ?>
  </body>
</html>