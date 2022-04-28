<!DOCTYPE html>
<html>
    <head>
        <title>Store Page Backend</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php 
        $prod = [
            "McDonalds fries",
            "Wendy's Fries",
            "BK Fries"
        ];
        $prod_price = [
            2.5,
            3,
            0.5
        ];
        $ship = [
                "7d" => "7-Day",
                "1d" => "Overnight",
                "3d" => "3-Day"
        ];
        $ship_price = [
            "7d" => 0,
            "1d" => 50,
            "3d" => 5
        ];
        ?>
        <h1>Welcome, <?php echo $_POST["e"]; ?>!</h1>
        <p>Your password is <?php echo $_POST["pw"]; ?>!</p>
        
        <h2>Receipt</h2>
        <table>
            <thead>
                <th>&nbsp;</th>
                <th>Quantity</th>
                <th>Cost Per Item</th>
                <th>Subtotal</th>
            </thead>
            <?php 
            $total = 0;
            for ($i = 0; $i <sizeof($prod); $i++)
            {
                print "<tr>";
                print "<th>" . $prod[$i] . "</th>";
                print "<td>" . $_POST['prod' . $i] . "</td>";
                print "<td>\$ " . $prod_price[$i] . "</td>";
                print "<td>\$ " . $prod_price[$i] * $_POST["prod" . $i] . "</td>";
                print "</tr>";
                
                $total += $prod_price[$i] * $_POST["prod" . $i];
            }
            print "<tr><th colspan='2'>Shipping</th>" .
                  '<td>' . $ship[$_POST["shp"]] . '</td>' .
                  '<td>$ ' . $ship_price[$_POST["shp"]] . '</td>';
            $total += $ship_price[$_POST["shp"]];
            
            print '<tr><th colspan="3">Total Cost</th><td>$ ' . $total . '</tr>';
            ?>
        </table>
    </body>
</html>