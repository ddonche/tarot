<div id= "credits">
    <ul>
        <li>&copy; <?php echo date('Y'); ?> by Daniel Donche Jr | 
        	<a href="https://jandenhale.com/tarot/donate.php">Like this app? Donate $1</a> | 
        	<a href="https://jandenhale.com/tarot/privacy.php">Privacy</a> | 
        	<a href="https://jandenhale.com/tarot/terms.php">Terms</a> </li>
        <li>
            <small>
<?php

$stm2 = <<<SQL
SELECT *
FROM `readings`
SQL;

$numReadings = $pdo->query($stm2);

$totalReadings = $numReadings->rowCount();
echo "There are " . $totalReadings . " tarot readings so far.";
?>
            </small>
        </li>
    </ul>
</div>