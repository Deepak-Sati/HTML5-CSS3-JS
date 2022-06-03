<!DOCTYPE html>
<html>              
  <head>
     <title>PHP FORM</title>
     <style>.error{ color: #FF0000;}</style>
  </head>
  
  <body>
     <?php 
     $name=$phone=$gender=$add="";
     $nameEr=$phoneEr=$genderEr=$addEr="";
     if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            if(empty($_POST["name"]))
              $nameEr="Name is Required";
            else{
              $name=$_POST["name"];
                 if(!preg_match("/^[A-Za-z ]*$/" , $name))
                    $nameEr="CONTAINS ONLY LETTERS";
               }

            if(empty($_POST["phone"]))
              $phoneEr="Phone number is Required";
            else{
              $phone=$_POST["phone"];
                 if(!preg_match("/^[0-9 ]*$/" , $phone)) 
                   $phoneEr="CONTAINS ONLY NUMBERS";
              }
            if(!empty($_POST["add"]))
              $add=$_POST["add"];
            if(empty($_POST["gender"]))
              $genderEr="Gender is Required";
            else
              $gender=$_POST["gender"];    
 }
     ?>
<h1>GET CONNECTED</h1><br><br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          Name  <input type="text" name="name"> <span class="error">*<?php echo $nameEr;?></span><br><br>
          Phone Number <input type="text" name="phone"> <span class="error">*<?php echo $phoneEr;?></span><br><br>
          Address  <textarea name="add" rows="5" cols="40"></textarea><br><br>
          Gender <input type="radio" name="gender" value="male">Male
                 <input type="radio" name="gender" value="female">Female <span class="error">*<?php echo $genderEr;?></span>
          <br><br><br>
          <input type="submit" value="submit" name="submit"> 
    </form>
<br>

<?php
echo "<h2>Your Input :</h2><br>";
echo "$name<br>";
echo "$phone<br>";
echo "$add<br>";
echo "$gender<br>";      
?>
</body>
</html>
