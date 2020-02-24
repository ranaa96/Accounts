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
    $_SESSION['outcomeE'];
    $_SESSION['outcomeP'];
    echo("<h4>Income</h4>");
    echo ($_SESSION['incomeS']);
    echo("<h4>Outcome</h4>");
    echo("<h6>Expenses</h6>");
    echo ($_SESSION['outcomeE']);
    echo("<h6>Purchase</h6>");
    echo ($_SESSION['outcomeP']);
    echo("<h4>Net Profit</h4>");
    $outcomeAll;$net;
    $outcomeAll=$_SESSION['outcomeE']+$_SESSION['outcomeP'];
    $net=$_SESSION['incomeS']-$outcomeAll;
    echo ($net);

    
    
    
    ?>

</body>
</html>