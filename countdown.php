<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>countdown</title>
	<link rel="stylesheet" type="text/css" href="_website/assets/css/flipdown.css">
	<script src="_website/assets/js/flipdown.js"></script>
</head>
<body>

<style type="text/css">
    .rotor-group-heading{
        display:none;
    }

    @media(min-width: 960px){
    	.flipdown{
    		transform: scale(0.6);
    		transform-origin: left;
    	}
    }
</style>
<div id="flipdown" class="flipdown"></div>
<script type="text/javascript">
	<?php
	$countdown_to = (isset($_GET['to'])) ? $_GET['to'] : date("Y-m-d");
	?>
    document.addEventListener('DOMContentLoaded', () => {
      // Unix timestamp (in seconds) to count down to
      var twoDaysFromNow = (new Date("<?=$countdown_to?>").getTime() / 1000);

      // Set up FlipDown
      var flipdown = new FlipDown(twoDaysFromNow).start().ifEnded(() => {
          console.log('The countdown has ended!');
      });
    });
</script>

</body>
</html>