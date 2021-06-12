<?php   ?>


<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="shortcut icon" href="https://www.youtube.com/s/desktop/df22805b/img/favicon.ico" type="image/x-icon">
					<link rel="icon" href="https://www.youtube.com/s/desktop/df22805b/img/favicon_32.png" sizes="32x32">
						<link rel="icon" href="https://www.youtube.com/s/desktop/df22805b/img/favicon_48.png" sizes="48x48">
							<link rel="icon" href="https://www.youtube.com/s/desktop/df22805b/img/favicon_96.png" sizes="96x96">
								<link rel="icon" href="https://www.youtube.com/s/desktop/df22805b/img/favicon_144.png" sizes="144x144">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>

let base_endpoint = "https://www.youtube.com/embed/";


function loadVideo(){

 let url = document.getElementById('video_id').value;
  

 document.getElementById('ytubeVideo').src = base_endpoint + url.split('/')[url.split('/').length-1]+"?autoplay=1";
}

</script>

</head>
<body>
<table style="
    margin: 112px;
">
<tr><td>
<input type="text" id="video_id" /></td></tr><tr><td>
<center><button onclick="loadVideo()" class="btn btn-success btn-lg">Load</button></center></td></tr>
</table>


</br>
</hr>
<iframe  width="500" height="500" src="<?php echo 'https://www.youtube.com/embed/' . $_GET["id"] . '?autoplay=1'; ?>" id="ytubeVideo">
</iframe>


</body>
</html>
