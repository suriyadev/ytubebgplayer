<?php   ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script>

let base_endpoint = "https://www.youtube.com/embed/";


function loadVideo(){

 let url = document.getElementById('video_id').value;
  

 document.getElementById('ytubeVideo').src = base_endpoint + url.split('/')[url.split('/').length-1]+"?autoplay=1";
}

</script>

</head>
<body>

<input type="text" id="video_id" />

<button onclick="loadVideo()">Load</button>

<iframe width="420" height="345" src="" id="ytubeVideo">
</iframe>


</body>
</html>
