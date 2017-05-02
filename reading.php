<?php

include('tools/header.php');
include('tools/config.php');
require_once('tools/readingClass.php');

$reading = new Reading;

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

if (isset($_GET['id'])) 
{
	$id = $_GET['id'];
	$data = $reading->fetch_data($id);
	
?>

<div id = 'intro'><br />This card is absolutely the one you need to see at this moment in your miserable life. </div>
        
<hr size = '1'>
    
<div id = 'left-block'>
		<div id = 'tarot-pic'><img src = "<?php echo $data['image']; ?>"></div>
</div>

<div id = 'right-block'>
<div class="h1-left"><?php echo $data['title']; ?></div><br/>
    <div class="box">
    <?php echo $data['content']; ?>
        <br /><br />
	    <div class = "new-reading-button">
	    	<a href='reading.php?id=<?php echo getRandom(); ?>'">NOT GOOD ENOUGH? GET ANOTHER</a>
	    </div>
    </br/></box>

<p><a href="http://thegamecrafter.com/games/darkana-tarot">Buy the Darkana deck</a> | <a href="https://play.google.com/store/apps/details?id=com.galaxytone.tarot.darkana&hl=en">Get the Droid app</a><br /><br/></p>
    <br /><br />
<hr size = '1'>

<?php
	include('tools/footer.php');
	} else {
	header('Location: index.php');
	exit();
}
?> 
</div>