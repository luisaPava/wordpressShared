<?php


 /**
  * Template Name: Pagina Inicial
  *
  * @package WordPress
  * @subpackage Twenty_Fourteen
  * @since Twenty Fourteen 1.0
  */

//get_header(); ?>

<!-- div {
	text-align: center;
	font-size: 10;
}

#main-content {

} -->

<!--pega a url da imagem-->
<?php
global $post;
$image_object = get_cfc_field('infopaginainicial', 'imagem-de-fundo', $post->ID );
?>

<style>
	body {
		background: url(<?php echo $image_object['sizes']['thumbnail']; ?>);
		background-size: cover;
		background-position: center;
	}
	.main-content {
		/* Aplica estilo a todos com a classe main-content */
	}
	.main-content, .content-area {
		/* Aplica estilo a todos com a classe main-content ou content-area */
	}
	.main-content.content-area {
		/* Aplica estilo a todos com a classe main-content e content-area */
	}

</style>


<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				<div>
					<form action="demo_form.asp">
  						Nome: <input type="text" name="fname"><br>
  						Descrição: <input type="text" name="desc"><br>
  						<input type="submit" value="Submit">
					</form>
					<select>
  					<option value="Faxina">Faxina</option>
  					<option value="Lava e passa">Lava e passa</option>
  					<option value="Eletricista">Eletricista</option>
  					<option value="Faz tudo">Faz tudo</option>
					</select>
				</div>
<!--mostra a imagem numa div-->
			<!-- <img src="<?php echo $image_object['sizes']['thumbnail']; ?>" alt="<?php echo $image_object['alt']; ?>" title="<?php echo $image_object['title']; ?>" /> -->
<!--mostra a descrição customizada-->
			<p>
				<?php the_cfc_field('infopaginainicial', 'sobre-nos', get_the_ID() ); ?>
			</p>


		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
//get_sidebar();
//get_footer();
