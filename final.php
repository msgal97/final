<!DOCTYPE HTML>
<html>
<head>
<style>
<link rel="stylesheet" type="text/css" href="final.css">
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $fateErr = $websiteErr = "";
$name = $email = $fate = $comment = $website = "";


   if (empty($_POST["fate"])) {
     $fateErr = "fate is required";
   } else {
     $fate = test_input($_POST["fate"]);
   }


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>How Are You Surviving Finals???</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   <br><br>

   <input type="radio" name="fate" <?php if (isset($fate) && $fate=="Skipping through a field of daisies!") echo "checked";?>  value="You are going places kid!">Skipping through a field of daisies!
   <input type="radio" name="fate" <?php if (isset($fate) && $fate=="Not enough coffee to survive!") echo "checked";?>  value="Procrastination got the best of you!">Not enough coffee to survive!
   <span class="error">* <?php echo $fateErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Destination:</h2>";

echo $fate;
?>

</body>
</html>
