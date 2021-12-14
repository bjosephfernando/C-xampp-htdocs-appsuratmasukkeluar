<div class="container">
	<h3>Atur Ulang Password</h3>
	<hr />
	<div class="row">
		<div class="col-sm-6">
			<?php $page_link = $this->set_current_page_link(); ?>
			<form method="post" action="<?php print_link($page_link); ?>">
				<?php Html::csrf_token(); ?>
				<?php 
					$this :: display_page_errors();			
				?>
				<div class="form-group">
					<label>Password Baru</label>
					<input placeholder="Masukkan password baru" required value="" class="form-control default" name="password" id="txtpass" type="password" />
				</div>
				<div class="form-group">
					<label>Konfirmasi Password Baru</label>
					<input placeholder="Masukkan ulang password" required class="form-control default" name="cpassword" id="txtcpass" type="password" />
				</div>
				<div class="mt-2 "><button  class="btn btn-success" type="submit">Ubah Password</button></div>
			</form>
		</div>
	</div>
</div>
