<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>
<head>


  <meta charset='UTF-8'>
  <meta name="robots" content="noindex">
  <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
 

  <!-- <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'> -->


<script>
  try{Typekit.load({ async: true });}catch(e){}
</script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>

<link rel="stylesheet" type="text/css" href="css/style.css">



</head>
  <body>
<!-- 

A concept for a chat interface. 

Try writing a new message! :)


Follow me here:
Twitter: https://twitter.com/thatguyemil
Codepen: https://codepen.io/emilcarlsson/
Website: http://emilcarlsson.se/

-->
<style type="text/css">
  body {
    font-family: 'georgia';
  }
</style>

<div id="frame">
	<div id="sidepanel">

	</div>
	<div class="content">
		<div class="contact-profile">
			<img src="img/emil.png" alt="" />
			<h1>#tagChatter</h1>
		</div>
		<div class="messages">
			<ul>
			</ul>
		</div>


    <!-- <div style="background-color: gray">
		<div class="message-input" style="width: 70%">
			<div class="wrap">
			<input type="text" placeholder="Escreva a sua mensagem..." />
			<i class="fa fa-paperclip attachment" aria-hidden="true"></i>
			<button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			</div>
		</div>
    </div> -->


    <div class="message-input">
      <img class="img-me" style="width: 80px; padding: 15px; border-radius: 10px 10px 10px 10px; float: left;" src="img/blank.png" alt="" />
        <div class="wrap">
          <input style="vertical-align: middle;margin: 22px 15px; height: 40px" type="text" placeholder="Escreva a sua mensagem..." />
          <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
        </div>
    </div>


	</div>
</div>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

<script type="text/javascript" src="js/script.js"></script>

</body>
</html>