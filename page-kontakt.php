<?php 
/*
Template Name: Kontakt
*/
?>
<?php get_header(); ?>





<main>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<h1>Kontakt</h1>
						<form>
							
							<label>Namn</label>
							<input type="name" name="name" />
							<label>E-post</label>
							<input type="email" name="email" />
							<label>Meddelande</label>
							<textarea type="message" name="message"></textarea>
							<input type="submit" value="Skicka" name="submit" />

						</form>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?> 