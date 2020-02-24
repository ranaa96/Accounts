<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
session_start();
$ecount=$_SESSION['e'];
$scount=$_SESSION['s'];
$pcount=$_SESSION['p'];

echo('<form method="POST">');
echo("<h4> Expenses</h4>");
echo("<table><tr><td>Desc</td><td>Value</td><td>Date</td></tr>");
for($x=0;$x<$ecount;$x++){
    echo("<tr><td><input type='text' name='desc$x'></td><td><input type='number' name='valueE$x'></td><td><input type='date' name='date$x'></td></tr>");


}
echo("</table>");



echo("<h4> Sales</h4>");
 echo("<table><tr><td>Desc</td><td>Value</td><td>Date</td></tr>");
 for($x=0;$x<$scount;$x++){
     echo("<tr><td><input type='text' name='desc$x'></td><td><input type='number' name='valueS$x'></td><td><input type='date' name='date$x'></td></tr>");
 
 
 }
 echo("</table>");

echo("<h4> purchase</h4>");
 echo("<table><tr><td>Desc</td><td>Value</td><td>Date</td></tr>");
for($x=0;$x<$pcount;$x++){
    echo("<tr><td><input type='text' name='desc$x'></td><td><input type='number' name='valueP$x'></td><td><input type='date' name='date$x'></td></tr>");


}
echo("</table>");
echo(' 
<br>
<input type="submit" value="Show" name="btnShow">');
if ( isset($_POST['btnShow'])){
 
    $incomesales=0;
    $outcomeE=0;
    $outcomeP=0;
    for($x=0;$x<$ecount;$x++){
    
        $_SESSION['ve']= $_POST['valueE'.$x];
       $outcomeE+=  $_SESSION['ve'];

    }
    for($x=0;$x<$scount;$x++){
        $_SESSION['vs']= $_POST['valueS'.$x];
        $incomesales+=$_SESSION['vs'];

    }
    for($x=0;$x<$pcount;$x++){
        $_SESSION['vp']= $_POST['valueP'.$x];
        $outcomeP+= $_SESSION['vp'];

    }
    $_SESSION['outcomeE']=$outcomeE;
    $_SESSION['outcomeP']=$outcomeP;
    $_SESSION['incomeS']= $incomesales;
    header('location:final.php');


    }
echo('</form>');
?>
 
</body>
</html>