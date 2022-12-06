<?php
require_once('nav.php');
?>
<main class="py-5">
	<section id="listado" class="mb-5">
		<div class="container">
			<h2 class="mb-4">Login</h2>
			<form action="<?php echo FRONT_ROOT ?>Session/Login" method="post" class="bg-light-alpha p-5">
				<div class="row">
					<div class="col-lg-4">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" value="" require class="form-control">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" id="password" value="" require class="form-control">
						</div>
					</div>
				</div>
				<button type="submit" name="button" class="btn btn-dark ml-auto d-block">Login</button>
			</form>
		</div>
	</section>
</main>