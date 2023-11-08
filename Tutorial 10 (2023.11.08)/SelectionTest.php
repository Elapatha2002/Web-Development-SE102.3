<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $unit = 85;
    
    if($unit<=50)
        $bill=$unit*3.50;
    else if($unit>50 && $unit<=100)
        $bill=50*3.50+($unit-50)*4.00;
    else if($unit>100 && $unit<=150)
        $bill=100*4.00+($unit-100)*5.20;
    else
        $bill=150*5.20+($unit-150)*6.50;
    echo "Electricity bill = Rs.".$bill;
    ?>
</body>
</html>