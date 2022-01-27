
<!-- Start Slider Section -->
<section class="slider pt-0">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    	<div class="carousel-inner">
            <div class="carousel-item active slider-area background_bg" data-img-src="image/slider-img-1.jpg">
                <div class="banner_slide_content right-align">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-7 col-9">
                                <div class="slider-caption">
                                    <h1 class="animation" data-animation="fadeInDown" data-animation-delay="0.2s" style='color:#fff'>Volta as aulas com 50% off</h1>
                                   <a href="nimplementado" class="btn btn-primary animation" data-animation="fadeInUp" data-animation-delay="1s">Veja agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item slider-area background_bg" data-img-src="image/slider-img-2.jpg">
                <div class="banner_slide_content right-align">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-7 col-9">
                                <div class="slider-caption text-right">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item slider-area background_bg" data-img-src="image/slider-img-3.jpg">
                <div class="banner_slide_content center-align">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-7 col-9">
                                <div class="slider-caption text-center">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        </ol>
    </div>
</section>
<!-- End Slider Section -->

<!-- Start Offer Banner Section -->
<section class="offer-banners">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-sm-4 text-center">
            	<a href="#" class="offer-banner same-hover"><img src="image/offer-banner-1.jpg" alt="offer-banner"></a>
            </div>
            <div class="col-sm-4 text-center">
            	<a href="#" class="offer-banner same-hover"><img src="image/offer-banner-2.jpg" alt="offer-banner"></a>
            </div>
            <div class="col-sm-4 text-center">
            	<a href="#" class="offer-banner same-hover"><img src="image/offer-banner-3.jpg" alt="offer-banner"></a>
            </div>
        </div>
    </div>
</section>
<!-- End Offer Banner  Section -->

<!-- Start Popular Products Section -->
<section class="popular-products">
	<div class="container">
    	<div class="row">
        	<div class="col-12">
            	<div class="title text-center">
                	<h4>PRODUTOS</h4>
                </div>
            </div>
        </div>
		<div class="row">
			<div class="col-12">
				<div class="products-slider4 same-nav owl-carousel owl-theme" data-margin="30" data-dots="false" data-nav="true">
					                    
                <?php
                $pop="";
                foreach($produtos as $produto){
                $descricao="Sem legenda";
                $url=$produto['url'];
                $nome=$produto['nome'];
                $valor=$produto['valor'];
                $valormaior=$valor+5;
                $tag=md5("$url $nome");
                echo"
                    <div class='item'>
                    	<div class='product-box common-cart-box'>
                        	<div class='product-img common-cart-img'>
                            	<img src='$url' alt='product-img'>
                                <div class='hover-option'>
                                	<div class='add-cart-btn'>
                                    	<a href='#' class='btn btn-primary'>Adicionar ao carrinho</a>
                                    </div>
                                	<ul class='hover-icon'>
                                    	<li><a href='#'><i class='fa fa-heart'></i></a></li>
                                        <li><a href='#pop-$tag' class='quickview-popup-link'><i class='fa fa-eye'></i></a></li>
                                        <li><a href='#'><i class='fa fa-refresh'></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class='product-info common-cart-info text-center'>
                            	<a href='product-detail.html' class='cart-name'> $nome</a>
                                <p class='cart-price'><del>R$ $valormaior</del><br>R$ $valor</p>
                            </div>
                        </div>
                    </div>
                    

";

$pop="$pop
<div id='pop-$tag' class='white-popup quickview-popup mfp-hide'>
    <button type='button' class='mfp-close' data-dismiss='modal' aria-label='Close'>
        <span aria-hidden='true'><i class='ion-close-round'></i></span>
    </button>
    <div class='row'>
        <div class='col-md-5'>
             <div class='product-image'>
                <img id='product_img' src='$url' data-zoom-image='image/product1.png'/>
             </div>
             <div id='pr_item_gallery' class='product_gallery_item owl-thumbs-slider owl-carousel owl-theme'>
                <div class='item'>
                  
                </div>
            </div>
        </div>
        <div class='col-md-7'>
            <div class='quickview-product-detail'>
                <h2 class='box-title'> $nome</h2>
                <h3 class='box-price'><del>R$ $valormaior</del>R$ $valor</h3>
                <p class='box-text'>$descricao</p>
                <p class='stock'>Disponibilidade: <span>Em estoque</span></p>
                <div class='quantity-box'>
                    <p>Quantidade:</p>
                    <div class='input-group'>
                    	<input type='button' value='-' class='minus'>
                        <input class='quantity-number qty' type='text' value='1' min='1' max='10'>
                        <input type='button' value='+' class='plus'>
                    </div>
                    <div class='quickview-cart-btn'>
                        <a href='#' class='btn btn-primary'><img src='image/cart-icon-1.png' alt='cart-icon-1'> Adicionar ao carrinho</a>
                    </div>
                </div>
                <div class='box-social-like d-sm-flex justify-content-between'>
                    <ul class='hover-icon box-like'>
                        <li><a href='#'><i class='fa fa-heart'></i></a></li>
                        <li><a href='#'><i class='fa fa-refresh'></i></a></li>
                    </ul>
                    <ul class='hover-icon box-social'>
                        <li><a href='#'><i class='fa fa-facebook'></i></a></li>
                        <li><a href='#'><i class='fa fa-twitter'></i></a></li>
                        <li><a href='#'><i class='fa fa-linkedin'></i></a></li>
                        <li><a href='#'><i class='fa fa-pinterest-p'></i></a></li>
                        <li><a href='#'><i class='fa fa-google-plus'></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
";
                }
                ?>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Popular Products Section -->
<?php echo $pop;?>