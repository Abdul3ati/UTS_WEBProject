<?=
form_open('login/proses_login');
?>

<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/img/bg-01.jpg');">
			<div class="wrap-login100">
                
				<form class="login100-form alidate-form">
                    
                <span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="unamel" id="unamel" required="" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" d="pwd1" name="pwd1" required="" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                    <?php 
                    if(isset($pesan))
                    {
                        echo $pesan;
                    }else{
                        echo "Masukkan username dan password anda";
                    }
                    ?>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
                        </button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<?=
form_close();
?>