<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SubtitleHUB</title>
  
  <?=add_style('bootstrap.min')?>
  <?=add_style('jquery-confirm')?>

  <?=add_jscript('jquery-3.1.1.min')?>
  <?=add_jscript('jquery-confirm')?>
  <?=add_jscript('jquery-validate.min')?>
  <?=add_jscript('bootstrap.min')?>

  <script>var baseUrl = '<?=base_url()?>';</script>
  <?=add_jscript('hub-script')?>

  <link href="https://fonts.googleapis.com/css?family=Bitter:400,400i,700|Catamaran:300,400,500,600,700|Open+Sans:300,300i,400,400i,600,600i,700,700i|Rokkitt:400,700" rel="stylesheet">

  <?=add_style('font-awesome.min')?>
  <?=add_style('hub-style')?>
</head>
<body>
	<div class="panel">
    <div class="panel-heading">
      <h3 class="panel-title text-center"><span>SubtitleHUB</span> <small>by&nbsp;SubAdictos.Net</small></h3>
    </div>
    <div class="panel-body">
	    <div class="grid">
	      <form action="<?=base_url().$goto?>" method="POST" class="form login">
	        <div class="form__field">
	          <label for="login__username"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Usuario</span></label>
	          <input id="login__username" type="text" name="username" class="form__input" placeholder="Usuario" data-required data-describedby="loginUsername-description" data-description="errorLoginUser">
	        </div>
	        <div id="loginUsername-description" class="popup"></div>
	        <!-- <div class="popup">
					  <span class="popup-text">Campo obligatorio</span>
					</div> -->
	        <div class="form__field">
	          <label for="login__password"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg><span class="hidden">Contraseña</span></label>
	          <input id="login__password" type="password" name="password" class="form__input" placeholder="Contraseña" data-required data-describedby="loginPassword-description" data-description="errorLoginPass">
	        </div>
	        <div id="loginPassword-description" class="popup"></div>
	        <div class="unauth">Usuario y/o contraseña incorrecto.</div>
	        <div class="form__field">
	          <input type="submit" value="Iniciar sesión">
	        </div>
	      </form>
	    </div>
      <div class="wikia">
        Inicia sesión con tu usuario de <span style="display: inline-block;">wiki-adictos</span> o&nbsp;regístrate&nbsp;<a href="http://wiki-adictos.subadictos.net/newaccount.php" target="_blank">aquí</a> para empezar a traducir con <i><a href="<?=base_url()?>subshuffle">Subshuffle</a></i>, la&nbsp;nueva herramienta de SubAdictos.
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" class="icons"><symbol id="arrow-right" viewBox="0 0 1792 1792"><path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"/></symbol><symbol id="lock" viewBox="0 0 1792 1792"><path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/></symbol><symbol id="user" viewBox="0 0 1792 1792"><path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"/></symbol></svg>
  </body>
</html>