<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Visma taxi</title>

	
	<link rel="stylesheet" type="text/css" href="css/visma.css">
	<link rel="stylesheet" type="text/css" href="css/orders.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600&display=swap" rel="stylesheet">

</head>
<body>

<div class="nav">

 	<div class="headline"><div><img src="img/logo.svg" style="width:128px;"></div><div style="padding-left: 10px; font-size: 28px;">Taxi
 	</div></div>

 	<div class="links"></div>

 </div>

 <div class="container">


 
 <div class="loginbox">
 <h1 style="padding-bottom: 25px;">Logga in</h1> 
 

 <form action="" method="POST">
 <label>Email <?php echo $erroruser; ?></label>
 <input type="text" name="user" placeholder="Ange email">
 <label>Lösenord <?php echo $errorpassword; ?></label>
 <input type="password" name="password" placeholder="Ange lösenord">
 
<button type="submit">Logga in</button>
</form>

	
 </div>

 </div>

 </body>

</html>