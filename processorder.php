<?php
    $tireqty = $_POST['tireqty'];
    $oilqty = $_POST['oilqty'];
    $sparkqty = $_POST['sparkqty'];
    
    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);
?>
<html>
  <head>
    <title>Bob's Auto Parts - Order Results</title>
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <?php 
        echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
        echo "Your order is as follows: <br/>";
        echo htmlspecialchars($tireqty)." tires.<br/>";
        echo htmlspecialchars($oilqty)." bottles of oil.<br/>";
        echo htmlspecialchars($sparkqty)." spark plugs.<br/>";
    ?>
    
  </body>
</html>