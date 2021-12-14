<?php
	$data=$this->view_data;
	$user_email = $data["user_email"];
	$status = $data["status"];
?>
<div class="container">
	<?php 
		if($status==true){
			if(!empty($_GET['resend'])){
				?>
				<h4 class="text-info bold animated bounce"><i class="fa fa-envelope"></i> Email verifikasi telah terkirim</h4>
				<?php
			}
			else{
				?>
				<h4 class="text-info bold"><i class="fa fa-envelope"></i>Link verifikasi email terkirim</h4>
				<?php
			}
		?>
			<div class="text-muted">Lakukan verifikasi pada email anda</div>
			<hr />
			<div>
				<a href="<?php print_link("index/send_verify_email_link/$user_email?resend=true") ?>" class="btn btn-primary"><i class="fa fa-envelope"></i>Kirim ulang email</a>
			</div>
			<?php
		}
		else{
			?>
			<div><i class="fa fa-envelope"></i>Lakukan verifikasi pada email anda</div>
			<hr />
			<div>
				<a href="<?php print_link("index/send_verify_email_link/$user_email?resend=true") ?>" class="btn btn-primary"><i class="fa fa-envelope"></i>Kirim ulang email</a>
			</div>
			<?php
		}
	?>
	<?php
		if(DEVELOPMENT_MODE){
			$mailbody = $this->view_data["mailbody"];
			?>
			<hr />
			<div class="bg-light p-4 border">
				<div class="text-danger">
					<h3>
						<b>Disclaimer:</b> You are seeing this because you published under development mode.
						<br />We understand that sending email in localhost might be problematic.
					</h3>
					<div class="text-muted">To edit the email template, browse to :- <i>app/view/partials/index/emailverify_template.html</i></div>
				</div>
				<hr />
				<?php  echo $mailbody; ?>
			</div>
			
			<?php
		}
	?>
</div>


