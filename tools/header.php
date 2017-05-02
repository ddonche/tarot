<?php 

include_once('config.php');
require_once('readingClass.php');

$reading = new Reading;

if (isset($_GET['id'])) 
{
  $id = $_GET['id'];
  $data = $reading->fetch_data($id);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php if(isset($title)){ echo $title; }?></title>
	<link rel="stylesheet" href="https://jandenhale.com/tarot/tools/main.css">

<meta property="og:url"                content="https://jandenhale.com/tarot/reading.php?id=<?php echo $_GET['id']; ?>" />
<meta property="og:site_name"          content="Inappropriate Tarot Readings" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php echo $data['title']; ?>" />
<meta property="og:description"        content="<?php echo $data['content']; ?>" />
<meta property="og:image:url"          content="<?php echo $data['image']; ?>" />
<meta property="fb:app_id"             content="1687902004761548" />
</head>

<?php } ?>
     
<body>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="donate.php">Donate $1</a></li>
    </ul>
  </nav>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1687902004761548',
      xfbml      : true,
      version    : 'v2.5'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
    FB.ui({
      method: 'share_open_graph',
      action_type: 'og.likes',
      action_properties: JSON.stringify({
      object:'https://apps.facebook.com/inappropriate-tarot/reading.php?id=<?php echo $_GET['id']; ?>',
      })
    }, function(response){});

  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

</script>