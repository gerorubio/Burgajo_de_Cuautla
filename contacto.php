<?php
	include 'header.html';
    include ('scripts/contactform.php');
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/propio/contacto.css">
</head>
<body>
<h3 class="pt-4 text-center">Contáctanos</h3>
<p class="text-center">¿Deseas adquirir alguno de nuestros productos?<br>¿Tienes alguna pregunta? No dudes en contactarnos.</p>

<div class="container py-2">
	<div class="row">
        <div class="col-12 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label class="pt-1">Nombre</label>
                            <input type="text" name="nmbre" class="form-control" placeholder="Nombre" value="<?= $nombre ?>">
                            <span class="error"> <?= $nombre_error ?> </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        	<label class="pt-1">Correo electrónico</label>
                            <input type="text" name="crreo" class="form-control" placeholder="E-mail" value="<?= $correoDe ?>">
                            <span class="error"> <?= $email_error ?> </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label class="pt-1">Asunto</label>
                            <input type="text" name="asnto" class="form-control" placeholder="Asunto" value="<?= $asunto ?>">
                            <span class="error"> <?= $asunto_error ?> </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <label class="pt-1">Mensaje</label>
                            <textarea type="text" name="mnsje" rows="2" class="form-control md-textarea" placeholder="Mensaje" value="<?= $mensaje ?>"></textarea>
                            <span class="error"> <?= $mensaje_error ?> </span>
                        </div>
                    </div>
                </div>
                <div class="text-center text-md-left py-3">
                    <button type="submit" class="btn btn-success" name="enviar">Enviar</button>
                    <span class="exito"> <?= $mensaje_exito ?> </span>
                </div>
            </form>
        </div>
        <div class="col-md-3 text-center">
            
        </div>
    </div>
</div>

</body>
</html>


<?php 
	include 'footer.html';
?>