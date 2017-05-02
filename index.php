<head>
    <link rel="stylesheet" href="https://jandenhale.com/tarot/tools/main.css">
</head>
<?php
include('tools/config.php');
function getRandom() {
//This fucking code works.
global $pdo;
$stm2 = <<<SQL
SELECT *
FROM `readings`
SQL;

$numReadings = $pdo->query($stm2);

$totalReadings = $numReadings->rowCount();
srand((double)microtime()*1000000);
$id = rand(0, ($totalReadings)-1);

echo $id;
}

?>
<div class="box">
    <div class = "new-reading-button">
        <a href='https://jandenhale.com/tarot/reading.php?id=<?php echo getRandom(); ?>'>GET YOUR INAPPROPRIATE TAROT READING</a>
    </div>
    </br/>
</div>