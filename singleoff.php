
<?php
  
	$id = $_GET['id'];
	require_once("db/conexao.php");
	$query = "SELECT * FROM anuncio WHERE codanuncio = $id";
	$result = mysqli_query($con,$query);
	$dados = mysqli_fetch_array($result);
	
	
?>


<!DOCTYPE html>
<html>
<head>
<title>Item</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>			
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

</head>
<body> 
<!--header-->	
<div class="header" >
	<div class="top-header" >		
		<div class="container">
		<div class="top-head" >
			<div class="header-para">
                <ul class="iniciar">
                
                    
                    
                    
                    
                
                </ul>
				<ul class="social-in">
					<li><a href="#"><i> </i></a></li>						
					<li><a href="#"><i class="ic"> </i></a></li>
					<li><a href="#"><i class="ic1"> </i></a></li>
					
				</ul>			
			</div>	
			
			<ul class="header-in">
				
				<li><a href="404.html">sobre nos</a> </li>
				<li><a href="contact.html">   contate aqui</a></li>
				<li ><a href="db/sair.php" >   sair</a></li>
			</ul>
			<div class="search-top">
				<div class="search">
					<form>
						<input type="text" value="pesquise" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'pesquise ';}" >
						<input type="submit" value="" >
					</form>
				</div>

				<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	
	
	
	
	
	
	<!--Categorias-->
	


			

	
			<div class="header-top">
			<div class="container">
				<div class="head-top">
					<div class="logo">
						<a href="home.php"><img src="images/logo.png" alt=""></a>
					</div>
					<div class="top-nav">
						<ul class="megamenu skyblue">
							<li class="active grid">
									<h4>Categorias: </h4>
								

							<li><a href="#">Produtos e Outros</a>

							<li class="grid"><a href="#">Veículos</a>

							<li class="grid"><a href="health.php">Imóveis</a>





								<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
					
		
<div class="content">
	<div class="container">
		<div class="single">
				<div class="col-md-9 top-in-single">
					<div class="col-md-5 single-top">	
						<ul id="etalage">
							<li>
							<?php
									include 'db/exibe_anuncio.php';
									 ?>
								
							<?php
										$arquivo = $dados['arquivo'];
										$caminho = 'db/upload/' . $arquivo;
										?>
								<a href="optionallink.html">
									<img class="etalage_thumb_image img-responsive" src="<?php echo $caminho; ?>" alt="" >
									<img class="etalage_source_image img-responsive" src="<?php echo $caminho; ?>" alt="" >
									
								</a>
							</li>
							
						</ul>

					</div>	
					<div class="col-md-7 single-top-in">
						<?php
						
						
						
						?>
						<div class="single-para">
							<h4><?=$dados['nome']?></h4>
							<p><?=$dados['descricao']?></p>
							<p>Contato: <?=$dados['contato']?></p>
							<p>Condição: <?=$dados['condicao']?></p>
							<p>Finalidade: <?=$dados['finalidade']?></p>
							<div class="star-on">
								
							<div class="clearfix"> </div>
							</div>
							
								<label  class="add-to">R$<?=$dados['preco']?></label>
                                      
                            <div class="cart-at grid_1 simpleCart_shelfItem">
								
							
						</div>

					</div>
				<div class="clearfix"> </div>
				  <!----- tabs-box ---->
		<div class="sap_tabs">	
				     
						
					      </div>
					 </div>
					 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>	
</div>
				</div>
                                                       
	 <BR>
	 



				<div class="clearfix"> </div>		
		</div>

<br>
         <br>
	

	<!--footer-->
	 <div class="footer">
        <div class="container">
            <br>
            <div class="col-md-3 footer-left">
                <br> <br> 
                <a href="home.php"><img src="images/logo.png" alt=""></a>
                <p class="footer-class">© 2019 <a href="https://www.instagram.com/foursale_/" target="_blank">Instagram</a> </p>
            </div>
            <div class="col-md-2 footer-middle">

            </div>
            <div class="col-md-4 footer-left">

                <ul class="term">


                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 footer-right">
                <br>
                <br>
                <br>
                <h5>Desenvolvedores</h5>
                <ul>
                    <li>Igor Rafael da Conceição</li><br>
                    <li>Igor Vinícius</li><br>
                    <li >Andrey Diogenes</li><br>
                    <li>Sarah Oliveira</li><br>
                    <li>Isabella Luiza</li><br>
                    <li>Jonathan Andrade</li><br>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <script type="text/javascript">
                        $(document).ready(function() {
                            /*
                            var defaults = {
                                  containerID: 'toTop', // fading element id
                                containerHoverID: 'toTopHover', // fading element hover id
                                scrollSpeed: 1200,
                                easingType: 'linear' 
                             };
                            */

                            $().UItoTop({ easingType: 'easeOutQuart' });

                        });
                    </script>
                <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>
        </div>    

</body>
</html>
    
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
 