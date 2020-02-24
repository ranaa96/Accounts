<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 
</head>
<body>
<form method="POST">
<label>count of expenses</label>
    <input type="number" name="eCount"> <br>
    <label>count of sales</label>
    <input type="number" name="sCount"><br>
    <label>count of purchase</label>
    <input type="number" name="pCount"><br>
    <input type="submit" value="Create form" name="btnCreate">
    <?php
    session_start();
    if ( isset($_POST['btnCreate'])){

    $_SESSION['e']= $_POST['eCount'];
    $_SESSION['s']=$_POST['sCount'];
    $_SESSION['p']=$_POST['pCount'];
     header('location:enter.php');


    }


    ?>
    </form>
</body>
</html>