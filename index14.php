<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alphabet is Vowel or Consonant.</title>
</head>
<body>
    <!-- 3. Write a php program to check whether an alphabet is a vowel or consonant
    Test Data :
    k
    Expected Output :
    The alphabet is a consonant. -->
    <h1>Check whether the Alphabet is Vowel or Consonant.</h1>
    <form action="#" method="POST">
        <label>Enter your Alphabet</label>
        <input type="text" name="a1">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $a1 = $_POST['a1'];
    if($a1=='a'||$a1=='e'||$a1=='i'||$a1=='o'||$a1=='u'||$a1=='A'||$a1=='E'||$a1=='I'||$a1=='O'||$a1=='U')
        echo $a1 . " is a Vowel.";
    else 
        echo $a1 . " is a Consonant.";
    }
?>
