<html>
	 	 <?php 
			get_header();
		 ?>
		 <div style="display: none;">
		 <?php 
		 	get_footer();
		  ?>
		</div>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		</head>
	 <div class="">

	 	<section class="slider-principal">
	 		<a class="previousLink" href="#">Anterior</a>
	 		<div class="slider-p-imagem">
	 			<img src="<?php echo plugins_url( '/img/slide-img-2.jpg', __FILE__ ); ?>" class="image-show img1">
	 			<img src="<?php echo plugins_url( '/img/slide-img-1.jpg', __FILE__ ); ?>" class="image-hidden">
	 		</div>
	 		<a class="nextLink" href="#">Próxima</a>	
	 	</section>

	 	<section class="ideias-presentes col-md">
	 	 <h3 class="idpresentes">Ideias para presentes</h3>
	 		<div class="row fullWidth">
		 		<div class="box col-md-4">
		 			<div class="imagem-1"></div>
		 			<span class="preco1">A partir de R$ 99.90</span>
		 		</div>	
		 		<div class="box col-md-4">
		 			<div class="imagem-1"></div>
		 			<span class="preco1">A partir de R$ 99.90</span>
		 		</div>	
		 		<div class="box col-md-4">
		 			<div class="imagem-1"></div>
		 			<span class="preco1">A partir de R$ 99.90</span>
		 		</div>
	 		</div>
	 	</section>

	 	<section class="acervo-pack">
	 		<h3 class="acervo-font idpresentes">Acervo</h3>
	 		<div  class="acervo">
	 			<div class="acervo-imagens-home"></div>
	 		</div>
	 	</section>

	 	<section class="kit-de-quadros">
	 		<div class="imagem-kit-de-quadros"></div>
	 	</section>

	 	<section class="corporativo">
	 		<a href="#">
	 		<img src="<?php echo plugins_url( '/img/corporativo-img-1.jpg', __FILE__ ); ?>" class="img-responsive img-corporativo">
	 		</a>
	 	</section>
	</div>

	 <script type="text/javascript">
	 	$(document).ready(function(){

	 		$(".img-responsive").mouseover(function(){
				$(".img-responsive").fadeTo("slow", 0.65);
			});

			$(".img-responsive").mouseout(function(){
				$(".img-responsive").fadeTo("slow", 1);
			});

	 		$(".nextLink").on("click", function(e){
	 			var currentActiveImage = $(".image-show");
	 			var nextActiveImage = currentActiveImage.next();

	 			if (nextActiveImage.length == 0) {
	 				nextActiveImage = $(".img1").first();
	 			}

	 			currentActiveImage.removeClass("image-show").addClass("image-hidden").css("z-index", -10);
	 			nextActiveImage.addClass("image-show").removeClass("image-hidden").css("z-index", 20);

	 			$(".slider-principal").not([currentActiveImage, nextActiveImage]).css("z-index",1);

	 			e.preventDefault();

	 		});

	 		$(".previousLink").on("click", function(e){
	 			var currentActiveImage = $(".image-show");
	 			var nextActiveImage = currentActiveImage.prev();

	 			if (nextActiveImage.length == 0) {
	 				nextActiveImage = $(".img1").last();
	 			}

	 			currentActiveImage.removeClass("image-show").addClass("image-hidden").css("z-index", -10);
	 			nextActiveImage.addClass("image-show").removeClass("image-hidden").css("z-index", 20);

	 			$(".slider-principal").not([currentActiveImage, nextActiveImage]).css("z-index",1);

	 			e.preventDefault();

	 		});
	 	});
	 	
	 </script>
</html>


