</head>
<body>
	<div class="container">
		<?php

	$email="alexdesigner@gmail.com";
	$assunto=$_POST['assunto'];
	$mensagem=$_POST['mensagem'];

	if (mail('$email', '$assunto', '$mensagem')):

?>

<p>email enviado</p>

<?php else:  ?>

<p>email não enviado</p>

<?php endif;  ?>
	</div>
</body>
</html>