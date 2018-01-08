<!DOCTYPE html>
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
<body>
	<div class="col-sm-12">
		<a href="#">
			<section class="metacrilato col-sm-3">
				<span>Metacrilato</span>
			</section>
		</a>
		<a href="#">
			<section class="impressao col-sm-3">
				<span>Impressão</span>
			</section>
		</a>

		<a href="#">
			<section class="impressaoUV col-sm-3">
				<span>Impressão UV</span>
			</section>
		</a>

		<a href="#">
			<section class="canvas col-sm-3">
				<span>Canvas</span>
			</section>
		</a>
	</div>
</body>
<style type="text/css">
	.col-sm-3{
		position: relative;
		margin-left: auto;
		margin: 2%;
		width: 370px;
		height: 250px;
		box-shadow: 5px 10px 18px #878787;
		text-align: center;
		left: 3%;
	}
	.col-sm-12{
		position: relative;
		margin-top: 3%;
	}
	.cor-fundo{
		background-color: gray;
		color: white;	
		box-shadow: 5px 10px 18px #e8e8e8;
	}
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$(".metacrilato").mouseover(function(){
			$(".metacrilato").fadeTo("slow", 0.45);
			$(".metacrilato").addClass("cor-fundo");
		});
		$(".metacrilato").mouseout(function(){
			$(".metacrilato").fadeTo("slow", 1);
			$(".metacrilato").removeClass("cor-fundo");
		});

		$(".impressao").mouseover(function(){
			$(".impressao").fadeTo("slow", 0.45);
			$(".impressao").addClass("cor-fundo");
		});
		$(".impressao").mouseout(function(){
			$(".impressao").fadeTo("slow", 1);
			$(".impressao").removeClass("cor-fundo");
		});

		$(".impressaoUV").mouseover(function(){
			$(".impressaoUV").fadeTo("slow", 0.45);
			$(".impressaoUV").addClass("cor-fundo");
		});
		$(".impressaoUV").mouseout(function(){
			$(".impressaoUV").fadeTo("slow", 1);
			$(".impressaoUV").removeClass("cor-fundo");
		});

		$(".canvas").mouseover(function(){
			$(".canvas").fadeTo("slow", 0.45);
			$(".canvas").addClass("cor-fundo");
		});
		$(".canvas").mouseout(function(){
			$(".canvas").fadeTo("slow", 1);
			$(".canvas").removeClass("cor-fundo");
		});
	});	
</script>

</html>