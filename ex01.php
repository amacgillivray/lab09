<!DOCTYPE html>
<html>
    <head>
        <title>Exercise 01</title>
    </head>
    <body><?php 
        print "<table>";

	print "<tr><th>&nbsp;</th>";
	for ($i = 1; $i <= 100; $i++)
        {
		print "<th>" . $i . "</th>";
	}
	print "</tr>";

        for ($i = 1; $i <= 100; $i++)
        {
            print "<tr>";
            print "<th>" . $i . "</th>";
            for ($e = 1; $e <= 100; $e++)
            {
                print "<td>";
                print $e*$i; 
                print "</td>";
            }
            print "</tr>";
        }

        print "</table>";
?>  </body>
</html>
