<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
    
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php



if (!empty($_POST["name"]) && !empty($_POST["gender"])) {

    if (($_POST["gender"])=="female") {
        echo "<h2>Thanks Mrs $name</h2>";
        echo "<h2>Please check your info : </h2>";

    } 
    else if (($_POST["gender"])=="male") {
        echo "<h2>Thanks Mr $name</h2>";
        echo "<h2>Please check your info : </h2>";
    }
    else{
        echo "<h2>Thanks Mr/Mis $name</h2>";
        echo "<h2>Please check your info : </h2>";
    }
}

if (!empty($_POST["name"])) {
    echo "Your Name : ". $name."<br>";
} 
if (!empty($_POST["email"])) {
    echo "Your email : ". $email."<br>";
} 
if (!empty($_POST["website"])) {
    echo "Your website : ". $website."<br>";
} 
if (!empty($_POST["comment"])) {
    echo "Your comment : ". $comment."<br>";
} 
if (!empty($_POST["gender"])) {
    echo "Your gender : ". $gender."<br>";
} 

echo "<br>****************************************<br>file output<br>";

$fileName = "formInfo.txt" ;
$file = fopen($fileName , "r+");

if ($file == false ) {
   echo "<br>can not open the file<br>";
   exit();
}
else {

    if (!empty($_POST["name"])) {

        fwrite($file, "Your Name : ". $name." ");
    } 
    if (!empty($_POST["email"])) {

        fwrite($file, "Your email : ". $email." ");

    } 
    if (!empty($_POST["website"])) {

        fwrite($file, "Your website : ". $website." ");
     
    } 
    if (!empty($_POST["comment"])) {

        fwrite($file, "Your comment : ". $comment." ");
        
    } 
    if (!empty($_POST["gender"])) {

        fwrite($file, "Your gender : ". $gender." && ");
       
    } 
   // while(!feof($file)) {

        echo fread($file,filesize($fileName));

       
     // }
    

    fclose($file);
}


?>



</body>
</html>