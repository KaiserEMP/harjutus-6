<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
	harjtus-6
	</title>
</head>

<body>

	<h2>Tingimuslaused</h2>

		<?php $a = 4 ?>
		<?php $b = 5 ?>

		<?php 
			if ($a > $b)  {
				echo "4 on väiksem kui 5";
			} elseif ($a < $b) {
				echo "yoloswag";
			}
			
		?>

		<?php $age = 15 ?>
		<?php $age_limit = 18 ?>

		<br><br>

    <?php 
    if ( $age >= 18) {
        echo "oled vanamees";
    } elseif ($age < 18) {
        echo "sorry, kasva veel! vanus peaks" . ("  $age_limit  ") . "olema";
    }
	?>

	<br><br>

			<?php $r = 3 ?>
		<?php $t = 3 ?>
				<?php $y = 4 ?>
		<?php $u = 5 ?>



<?php
    if (($r == $t) && ($y > $u)) {

    	echo "võrdne ja suurem";

        // Kui a on väiksem kui b ning b on suurem kui c, siis käivitatakse see koodiplokk.
        // (Mõlema komponentlause tõeväärtus on "true")
    }
    if (($r == $t) || ($y > $u)) {
	echo "ainult 1 on õige";
    }
?>
	<br><br>
	<?php  
	if (isset($nothing) == false) {
	echo "False";
	} ?>
	<br>
	<?php if (!isset($nothing) == true){
	echo "True";	
	}
	?>

	<h3>switcxh</h3>

	<?php $current_language = "ru" ?>

		<?php switch($current_language) {
			case 'et':
			echo "Sup my brother from another mother";
			case 'ru':
			echo "Sup моего брата от другой матери";
			break;
			case 'li':
			echo "Sup veljeni toisesta äiti";
			} 
			?>






</body>

</html>