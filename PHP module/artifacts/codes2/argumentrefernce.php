<?php
         function addFive($num) {
            $num += 5;
			// echo $num;
         }
         
         function addSix(&$num) {
            $num += 6;
			// echo $num;
         }
         
         $orignum = 10;
         addFive( $orignum );
         
         echo "Original Value is $orignum<br />";
         
         addSix( $orignum );
         echo "Original Value is $orignum<br />";
      ?>
