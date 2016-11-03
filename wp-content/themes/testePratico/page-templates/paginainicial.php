<?php


 /**
  * Template Name: Pagina Inicial
  *
  * @package WordPress
  * @subpackage Twenty_Fourteen
  * @since Twenty Fourteen 1.0
  */

get_header(); ?>

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




					<!-- <form action="demo_form.asp">
  						Nome: <input type="text" name="fname"><br>
  						Descrição: <input type="text" name="desc"><br>
  						<input type="submit" value="Submit">
					</form>
					<select>
  					<option value="Faxina">Faxina</option>
  					<option value="Lava e passa">Lava e passa</option>
  					<option value="Eletricista">Eletricista</option>
  					<option value="Faz tudo">Faz tudo</option>
					</select> -->


            <section id="Pessoa">
              <!-- <div class="div-imagem">
                <img class="imagem-pessoa" src="http://www.esquerda.net/sites/default/files/fernando_pessoa_1_0.jpg" />
              </div>
              <div class="nome-desc">
                <h2 class="h2-nome">Josefina</h2>
                <p>
                  ajfnvasnoadncoasdncoasndcoansdcosandcpsnadpcnsdocnod
                </p>
              </div> -->
              <div class="row">
                <div class="col-md-4 div-imagem">
                  <img class="imagem-pessoa" src="http://www.esquerda.net/sites/default/files/fernando_pessoa_1_0.jpg" />
                </div>
                <div class="col-md-8">
                  <h2 class="h2-nome">Josefina</h2>
                  <p>
                    ajfnvasnoadncoasdncoasndcoansdcosandcpsnadpcnsdocnod
                  </p>
                </div>
              </div>

            </section>

            <section>
              <div class="servicos">
                <h4>Serviços</h4>
                <ul>
                  <li>Faxina completa</li>
                  <li>Meia faxina</li>
                </ul>
              </div>
            </section>




<!--mostra a imagem numa div-->
			<!-- <img src="<?php echo $image_object['sizes']['thumbnail']; ?>" alt="<?php echo $image_object['alt']; ?>" title="<?php echo $image_object['title']; ?>" /> -->
<!--mostra a descrição customizada-->
			<!-- <p>
				<?php the_cfc_field('infopaginainicial', 'sobre-nos', get_the_ID() ); ?>
			</p> -->



<?php
get_footer();
