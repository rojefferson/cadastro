<?php
include("processForm.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cadastro</title>
    <!--===============================================================================================-->
      <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">

    
      <!--===============================================================================================-->
      <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
      <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
      <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
  </head>
 <body>
  <div class="container-contact100">
		<div class="wrap-contact100">
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="contact100-form validate-form">
        <span class="contact100-form-title">
					Cadastro
				</span>
        <div class="wrap-input100 validate-input bg1" data-validate="Digite o nome completo">
					<span class="label-input100">Nome Completo *</span>
					<input class="input100" type="text" name="nome" placeholder="Nome completo">
				</div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Digite seu e-mail (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="email" placeholder="E-mail ">
				</div>

        <div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Data Nascimento *</span>
					<input class="input100" type="date" name="dataNascimento" placeholder="">
				</div>

        <div class="wrap-input100 validate-input bg1" data-validate="CPF">
					<span class="label-input100">CPF *</span>
					<input class="input100" type="text" name="cpf" placeholder="CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite um CPF no formato: xxx.xxx.xxx-xx"  >
				</div>

        <div class="wrap-input100 validate-input bg1" data-validate="Nome da mãe">
					<span class="label-input100">Nome da Mãe *</span>
					<input class="input100" type="text" name="NomeMae" placeholder="Nome da mãe">
				</div>
        
        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Veiculo">
					<span class="label-input100">Veiculo *</span>
					<input class="input100" type="text" name="veiculo" placeholder="Veiculo">
				</div>
        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Digite o modelo">
					<span class="label-input100">Ano\modelo *</span>
					<input class="input100" type="text" name="ano" placeholder="Digite o modelo">
				</div>
    
        <div class="wrap-input100 validate-input bg1" data-validate="CAA">
					<span class="label-input100">CAA *</span>
					<input class="input100" type="text" name="caa" placeholder="Número de registro na Semob disponível no App da uber">
				</div>

        <button type="submit" class="contact100-form-btn" name="register">Cadastrar</button>
          
      </form>
    </div>
  </div>


  
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</body>


