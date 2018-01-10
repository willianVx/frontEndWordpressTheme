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
	 <div class="row">
	 	<?php 
	 		slider();
	 	 ?>
	 	<!-- <section class="slider-principal">
	 		<div class="slider-p-imagem">
	 			<img src="<?php //echo plugins_url( '/img/slide-img-2.jpg', __FILE__ ); ?>" class="image-show">
	 			<img src="<?php //echo plugins_url( '/img/slide-img-1.jpg', __FILE__ ); ?>" class="image-hidden">
	 		</div>	
	 	</section>
		-->
	 	<section class="ideias-presentes">
	 	 <h3 class="idpresentes">Ideias para presentes</h3>
	 		<div class="row">
		 		<div class="box col-md-4">
		 			<a href="#">
		 				<div class="photobloco">
				 			<div class="imagem-1 photobloco-img-1 "><img src="<?php echo plugins_url( '/img/photoblocos.jpg', __FILE__ ); ?>"></div>
				 			<div class="imagem-1 photobloco-img-2 image-hidden"><img src="<?php echo plugins_url( '/img/photoblocos-foco.jpg', __FILE__ ); ?>"></div>
			 			</div>
			 			<span class="preco1">Photobloco</span><br>
			 			<span class="preco1">A partir de R$ 99.90</span>
		 			</a>
		 		</div>		
		 		<div class="box col-md-4">
		 			<a href="#">
		 				<div class="porta-retrato">
				 			<div class="imagem-1 porta-retrato-img-1 "><img src="<?php echo plugins_url( '/img/porta-retrato.jpg', __FILE__ ); ?>"></div>
				 			<div class="imagem-1 porta-retrato-img-2 image-hidden"><img src="<?php echo plugins_url( '/img/porta-retrato-foco.jpg', __FILE__ ); ?>"></div>
			 			</div>
			 			<span class="preco1">Porta retrato</span><br>
			 			<span class="preco1">A partir de R$ 99.90</span>
		 			</a>
		 		</div>	
		 		<div class="box col-md-4">
		 			<a href="#">
		 				<div class="photolight">
				 			<div class="imagem-1 photolight-img-1"><img src="<?php echo plugins_url( '/img/photolight.jpg', __FILE__ ); ?>"></div>
				 			<div class="imagem-1 photolight-img-2 image-hidden"><img src="<?php echo plugins_url( '/img/photolight-foco.jpg', __FILE__ ); ?>"></div>
			 			</div>
			 			<span class="preco1">Photolight</span><br>
			 			<span class="preco1">A partir de R$ 99.90</span>
		 			</a>
		 		</div>
	 		</div>
	 	</section>

	 	<section class="produtos col-sm">

	 		<div class="meta7mm col-sm-3 preco2">
	 			<a href="#">
		 			<div class="meta7-img-1"><img src="<?php echo plugins_url( '/img/produtos-home/metacrilato-7mm.jpg', __FILE__ ); ?>"></div>
		 			<div class="image-hidden meta7-img-2"><img src="<?php echo plugins_url( '/img/produtos-home/metacrilato-7mm-foco.jpg', __FILE__ ); ?>"></div>
		 			<span>Metacrilato 7mm Padrão galeria</span><br>
		 			<span>A partir de R$ 99.00</span>
	 			</a>
	 		</div>
	 		<div class="meta5mm col-sm-3 preco2">
	 			<a href="#">
		 			<div class="meta5-img-1"><img src="<?php echo plugins_url( '/img/produtos-home/metacrilato-5mm.jpg', __FILE__ ); ?>"></div>
		 			<div class="image-hidden meta5-img-2"><img src="<?php echo plugins_url( '/img/produtos-home/metacrilato-5mm-foco.jpg', __FILE__ ); ?>"></div>
		 			<span>Metacrilato 5mm Padrão galeria</span><br>
		 			<span>A partir de R$ 99.00</span>
	 			</a>
	 		</div>
	 		<div class="meta4mm col-sm-3 preco2">
	 			<a href="#">
		 			<div class=""><img src="<?php echo plugins_url( '/img/produtos-home/metacrilato-4mm.jpg', __FILE__ ); ?>"></div>
		 			<div class="image-hidden"><img src="<?php echo plugins_url( '/img/produtos-home/metacrilato-4mm-foco.jpg', __FILE__ ); ?>"></div>
		 			<span>Metacrilato 4mm</span><br>
		 			<span>A partir de R$ 99.00</span>
	 			</a>
	 		</div>
	 		<div class="meta3mm col-sm-3 preco2">
	 			<a href="#">
		 			<div class=""><img src="<?php echo plugins_url( '/img/produtos-home/metacrilato-3mm.jpg', __FILE__ ); ?>"></div>
		 			<div class="image-hidden"><img src="<?php echo plugins_url( '/img/produtos-home/metacrilato-3mm-foco.jpg', __FILE__ ); ?>"></div>
		 			<span>Metacrilato 3mm</span><br>
		 			<span>A partir de R$ 99.00</span>
	 			</a>
	 		</div>
	 		<div class="meta5mmACM col-sm-3 preco2">
	 			<a href="#">
		 			<div class=""><img src="<?php echo plugins_url( '/img/produtos-home/metacrilato-ACM-2.jpg', __FILE__ ); ?>"></div>
		 			<div class="image-hidden"><img src="<?php echo plugins_url( '/img/produtos-home/metacrilato-ACM.jpg', __FILE__ ); ?>"></div>
		 			<span>Metacrilato 5mm ACM</span><br>
		 			<span>A partir de R$ 99.00</span>
	 			</a>
	 		</div>
	 		<div class="printUVps col-sm-3 preco2">
	 			<a href="#">
		 			<div class=""><img src="<?php echo plugins_url( '/img/produtos-home/UV-PS-3mm.jpg', __FILE__ ); ?>"></div>
		 			<div class="image-hidden"><img src="<?php echo plugins_url( '/img/produtos-home/UV-PS-3mm-foco.jpg', __FILE__ ); ?>"></div>
		 			<span>Impressão UV PS 3mm</span><br>
		 			<span>A partir de R$ 99.00</span>
	 			</a>
	 		</div>
	 	</section>

	 	<section class="acervo-pack col-sm-12">
	 		<h3 class="acervo-font idpresentes">Acervo</h3>
	 		<div  class="acervo">
	 			<div class="acervo-imagens-home"></div>
	 		</div>
	 	</section>

	 	<section class="kit-de-quadros col-sm-12">
	 		<div class="imagem-kit-de-quadros"><img src="<?php echo plugins_url( '/img/kit-de-quadros.jpg', __FILE__ ); ?>"></div>
	 	</section>

	 	<section class="corporativo col-sm-12">
	 		<a href="#">
	 		<img src="<?php echo plugins_url( '/img/corporativo-img-1.jpg', __FILE__ ); ?>" class="img-responsive img-corporativo">
	 		</a>
	 	</section>

	</div>


	 <script type="text/javascript">
	 	$(document).ready(function(){
	 		$(".photobloco-img-1").mouseover(function(){
	 			$(".photobloco-img-1").addClass("image-hidden");
	 			$(".photobloco-img-2").removeClass("image-hidden");
	 		});
	 		$(".photobloco-img-2").mouseout(function(){
	 			$(".photobloco-img-2").addClass("image-hidden");
	 			$(".photobloco-img-1").removeClass("image-hidden");
	 		});

	 		$(".porta-retrato-img-1").mouseover(function(){
	 			$(".porta-retrato-img-1").addClass("image-hidden");
	 			$(".porta-retrato-img-2").removeClass("image-hidden");
	 		});
	 		$(".porta-retrato-img-2").mouseout(function(){
	 			$(".porta-retrato-img-2").addClass("image-hidden");
	 			$(".porta-retrato-img-1").removeClass("image-hidden");
	 		});

	 		$(".photolight-img-1").mouseover(function(){
	 			$(".photolight-img-1").addClass("image-hidden");
	 			$(".photolight-img-2").removeClass("image-hidden");
	 		});
	 		$(".photolight-img-2").mouseout(function(){
	 			$(".photolight-img-2").addClass("image-hidden");
	 			$(".photolight-img-1").removeClass("image-hidden");
	 		});

	 		$(".img-responsive").mouseover(function(){
				$(".img-responsive").fadeTo("slow", 0.65);
			});

			$(".img-responsive").mouseout(function(){
				$(".img-responsive").fadeTo("slow", 1);
			});
	 	});
	 	

	 </script>

</html>
		<?php 
	 		custom_footer_ft();
	 	 ?>
