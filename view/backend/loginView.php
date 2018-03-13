<?php ob_start(); ?>

<div class="limiter">
	<div class="container-login100"
		style="background-image: url('public/login/images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
			<form class="login100-form validate-form" action="index.php?action=connectionMember" method="post">
				<span class="login100-form-title p-b-49"> Connection admin </span>

				<div class="wrap-input100 validate-input m-b-23"
					data-validate="Username is reauired">
					<span class="label-input100">identifiant</span> <input
						class="input100" type="text" name="username"
						placeholder="Type your username"> <span class="focus-input100"
						data-symbol="&#xf206;"></span>
				</div>

				<div class="wrap-input100 validate-input"
					data-validate="Password is required">
					<span class="label-input100">Mot de passe</span> <input
						class="input100" type="password" name="pass"
						placeholder="Type your password"> <span class="focus-input100"
						data-symbol="&#xf190;"></span>
				</div>

				<div class="text-right p-t-8 p-b-31">
					
					<a href="index.php?action=listPosts">retour à la page d'acceuil</a>
				</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn">Connection</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>

<div id="dropDownSelect1"></div>

<?php $contentForm = ob_get_clean(); ?>
<?php require('templateLogin.php'); ?>