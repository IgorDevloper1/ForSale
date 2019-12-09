<?php
require_once("bloqueio.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Anuncio</title>
</head>

<body>
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
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start menu -->
    <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>
        $(document).ready(function() {
            $(".megamenu").megamenu();
        });
    </script>
    </head>

    <body>
        <!--header-->
        <div class="header">
            <div class="top-header">
                <div class="container">
                    <div class="top-head">
                        <div class="header-para">
                            <ul class="social-in">
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i class="ic"> </i></a></li>
                                <li><a href="#"><i class="ic1"> </i></a></li>

                            </ul>
                        </div>

                        <ul class="header-in">
                            <li><a href="home.php"> Home</a></li>
                            <li><a href="404.html"> Fale Conosco</a> </li>
                            <li><a href="contact.html"> Sair</a></li>
                        </ul>

                        <div class="search-top">
                            <div class="search">
                                <form>
                                    <input type="text" value="Pesquise Aqui" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search about something ?';}">
                                    <input type="submit" value="">
                                </form>
                            </div>

                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!---->

            <div class="header-top">
                <div class="container">
                    <div class="head-top">
                        <div class="logo">
                            <a href="index.html"><img src="images/logo.png" alt=""></a>
                        </div>
                        <div class="top-nav">
                            <ul class="megamenu skyblue">

                                <div class="col-md-9 page-content">
                                    <div class="inner-box category-content">
                                        <h2 class="title-2"><strong> <i class="icon-docs"></i> Publicar um anúncio grátis</strong></h2>
                                        <div class="row">
                                            <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />




                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <form enctype="multipart/form-data" class="form-horizontal" id="form-ads" data-parsley-validate id="createAd-1" method="POST" action="db/cad_anuncio.php">
                                                        <input type="hidden" value="<?= $_SESSION['codigo'] ?>">

                                                        <!-- Category -->
                                                        <div class="form-group required ">
                                                            <label for="parent" class="control-label col-md-3">Categoria<sup>*</sup></label>
                                                            <div class="col-md-8">
                                                                <select name="categoria" id="parent" class="form-control selecter" data-parsley-errors-container="#parent-errors" required>
                                                                    <option value=""> Selecione uma categoria </option>
                                                                    <option value="1" data-type="classified"> Produtos e Outros </option>

                                                                    <option value="2" data-type="vehicles"> Serviços </option>
                                                                    <option value="3" data-type="property"> Imóveis </option>
                                                                </select>
                                                                <input type="hidden" name="parent_type" id="parent_type" value="">
                                                                <div id="parent-errors"></div>
                                                            </div>
                                                        </div>

                                                        <!-- Ad Type -->
                                                        <input name="ad_type" id="ad_type8" value="8" type="hidden">

                                                        <!-- Ad title -->
                                                        <div class="form-group required ">
                                                            <label for="titulo" class="control-label col-md-3">Título do anúncio<sup>*</sup></label>
                                                            <div class="col-md-8">
                                                                <input name="titulo" class="form-control" data-parsley-errors-container="#title-errors" minlength="8" maxlength="70" required name="title" type="text" value="">
                                                                <div id="title-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group required ">
                                                            <label for="telefone" class="control-label col-md-3">Telefone<sup>*</sup></label>
                                                            <div class="col-md-8">
                                                                <input name="telefone" class="form-control" data-parsley-errors-container="#title-errors" minlength="8" maxlength="30" required name="title" type="text" placeholder="(xx)xxxxx-xxxx" value="">
                                                                <div id="title-errors"></div>
                                                            </div>
                                                        </div>


                                                        <!-- Describe ad -->
                                                        <div class="form-group required ">
                                                            <label class="col-md-3 control-label" for="descricao">Descrição <sup>*</sup></label>
                                                            <div class="col-md-8">
                                                                <textarea class="form-control" name="descricao" rows="10" minlength="8" maxlength="4000" data-parsley-errors-container="#description-errors" required></textarea>

                                                                <div id="description-errors"></div>
                                                                <p class="help-block">Descreva seu anúncio, para os usuários terem mais informações sobre ele!<br>Opte Por Qualidades!</p>
                                                            </div>
                                                        </div>


                                                        <!-- Condition : Used or New? -->
                                                        <div id="newBloc" class="form-group required ">
                                                            <label class="col-md-3 control-label">Condição <sup>*</sup></label>
                                                            <div class="col-md-8">
                                                                <select name="condicao" id="new" class="form-control selecter" data-parsley-errors-container="#new-errors" required>
                                                                    <option value="" selected="selected">Selecione uma opção</option>
                                                                    <option value="1"> Produto Usado </option>
                                                                    <option value="2"> Produto Novo </option>
                                                                </select>
                                                                <div id="new-errors"></div>
                                                            </div>
                                                        </div>

                                                        <!-- Situation : Disponível/Alugado/Vendido? -->

                                                        <!-- Object : Vender/Alugar -->
                                                        <div id="conditionBloc" class="form-group required ">
                                                            <label class="col-md-3 control-label">Finalidade <sup>*</sup></label>
                                                            <div class="col-md-4">
                                                                <select name="finalidade" id="condition" class="form-control selecter" data-parsley-errors-container="#condition-errors" required>
                                                                    <option value="1" selected="selected"> Vender </option>
                                                                    <option value="2"> Alugar </option>
                                                                </select>
                                                                <div id="condition-errors"></div>
                                                            </div>

                                                            <!-- Negociation -->
                                                            <div class="col-md-4">
                                                                <div class="checkbox">

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Price -->
                                                        <div id="priceBloc" name="preco" class="form-group required ">
                                                            <label for="preco" class="control-label col-md-3">Preço <sup>*</sup></label>
                                                            <div class="col-md-8">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">R$ </span>
                                                                    <input id="price" name="preco" class="form-control input-md show-price" placeholder="Preço" type="text">
                                                                </div>
                                                                <div id="price-errors"></div>
                                                            </div>



                                                            <!-- Pictures -->
                                                            <input id="csrf-token" name="imagem" type="hidden" value="">
                                                            <div id="picturesBloc" class="form-group required ">
                                                                <label class="col-md-3 control-label" for="pictures"> Imagens <sup>*</sup></label>
                                                                <div class="col-md-8">
                                                                    <div id="pictureDropzone" class="dropzone">

                                                                        <div class="fallback">
                                                                            <input  type="file" id="arquivo" name="arquivo" required />
                                                                        </div>
                                                                        <div class="dropzone-previews" id="dropzonePreview"></div>


                                                                    </div>
                                                                    <!-- Dropzone Preview Template -->
                                                                    <div id="preview-template" style="display: none;">

                                                                        <div class="dz-preview dz-file-preview">
                                                                            <div class="dz-image"><img data-dz-thumbnail=""></div>

                                                                            <div class="dz-details">
                                                                                <div class="dz-size"><span data-dz-size=""></span></div>
                                                                                <div class="dz-filename"><span data-dz-name=""></span></div>
                                                                            </div>
                                                                            <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                                                                            <div class="dz-error-message"><span data-dz-errormessage=""></span></div>
                                                                            <div class="dz-buttons">
                                                                                <button class="btn btn-danger btn-xs" data-dz-remove><i class="fas fa-trash" aria-hidden="true"></i> Remover</button>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- End Dropzone Preview Template -->
                                                                   
                                                                 <input style="display:none;" required min="1" data-parsley-errors-container="#picture-errors" data-parsley-min-message="Você deve adicionar pelo menos 1 foto e aguardar a finalização do upload." name="has_picture" type="text" value="0">
                                                                


                                                                    <div id="picture-errors"></div>
                                                                    <p class="help-block">Adicione até 1 foto no seu anúncio. </p>
                                                                </div>
                                                                <div id="sessionImages"></div>
                                                            </div>

                                                            <!-- Country -->
                                                            <input id="country" name="country" type="hidden" value="BR">

                                




                                                                <!-- Captcha -->

                                                                <!-- Terms -->
                                                                <div class="form-group required ">
                                                                    <label class="col-md-3 control-label"></label>
                                                                    <div class="col-md-8">

                                                                    </div>
                                                                </div>

                                                                <!-- Button  -->
                                                                <div class="form-group">
                                                                    <label class="col-md-4 control-label"></label>
                                                                    <div class="col-md-4">
                                                                        <button id="createAdBtn" class="btn btn-success btn-lg btn-block"> Enviar Anúncio </button>
                                                                    </div>
                                                                </div>


                                                    </form>
                                                    




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

                                                                $().UItoTop({
                                                                    easingType: 'easeOutQuart'
                                                                });

                                                            });
                                                        </script>
                                                        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

                                                    </div>



    </body>

</html>