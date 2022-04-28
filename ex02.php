<!DOCTYPE html>
<html>
    <head>
        <title>Ex. 2</title>
    </head>
    <body>
        <form method="post" action="./ex2handler.php">
<?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
        
		$qs = [ "What was the goal of the Jacobite uprising?",
			"What was the goal that inspired the Republican Party to first form?",
			"What was Euromaidan (2014)?",
			"Which flag did Hong Kong protesters fly while fighting for their democracy?",
			"Which is the coolest 20th-century western historical figure?"];
		$q0 = [ "The restoration of the House of Stuart to the British Throne.",
			"The installation of William III and Mary II.",
			"William Wallace.",
			"THEY MAY TAKE OUR LIVES, BUT THEY WILL NEVER TAKE OUR FREEDOM.",
			"a0"];
		$q1 = [ "The upholding of slavery.",
			"The abolition of slavery.",
			"The elimination of income tax.",
			"Adherence to the gold standard.",
			"a1" ];
		$q2 = [ "A pro-Russian revolt against the government of Georgia.",
			"A pro-European revolt against the government of Russia.",
			"A pro-western revolt against the government of China.",
			"An anti-Russian revolt against the government of Ukraine.",
			"a3" ];
		$q3 = [ "The Hong Kong Flag.",
			"The British Flag.",
			"The American Flag.",
			"The Chinese Flag.",
			"a2" ];
		$q4 = [ "Alan Turing",
			"Amelia Earhart",			
			"Winston Churchill",
			"Douglas MacArthur",
			"Martin Luther King, Jr.",
			"Dwight Eisenhower",
			"Teddy Roosevelt",
			"all of the above",
			"a7" ];
        
		for ($i = 0; $i < sizeof($qs); $i++)
		{
			print "<p>" . $qs[$i] . "</p>";
			$opts = ${"q".$i};
            // print_r($opts);
			for ($e = 0; $e < (sizeof($opts)-1); $e++)
			{
				print '<input type="radio" id="q'. $i . 'a' $e . '" ' .
                      'name="q' . $i .'a' . $e . '" value ="q' . $i . 'a' . $e . '" />';
				// print '<label for="q'. $i . 'a' $e . '" >' . $opts[$e] . '</label><br/>';
			}
            // print '<input type="hidden" name="q' +$i + 'ans" value="'$opts[sizeof(opts)-1]'" />';
        }

	?>
	</form>
    </body>
</html>
