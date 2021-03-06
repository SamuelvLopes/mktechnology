
<!-- Start Breadcrumbs Section -->
<section class="breadcrumbs-section background_bg" data-img-src="image/cart-breadcrumbs-img.jpg">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-12">
                <div class="page_title text-center">
                	<h1>Carrinho</h1>
                    <ul class="breadcrumb justify-content-center">
                    	<li><a href="index.html">home</a></li>
                        <li><a href="#">shop</a></li>
                        <li><span>cart</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Header Section -->



<!-- Start Cart Section -->
<section class="cart-section pt_large">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="cart-table table-responsive">
                	<table class="table table-bordered text-center">
                    	<thead>
                        	<tr class="row-1">
                            	<th class="row-title"><p>Item</p></th>
                                <th class="row-title"><p>Nome</p></th>
                                <th class="row-title"><p>Valor</p></th>
                                <th class="row-title"><p>Quantidade</p></th>
                                <th class="row-title"><p>Subtotal</p></th>
                                <th class="row-title"><p></p></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                               
                                foreach($produtos as $linha){
                                    $subtotal=$linha['valor']*$linha['qtd'];
                                 echo'<tr class="row-2">
                            	<td class="row-close close-1" data-title="product-remove"><a href="#"><i class="ion-close-circled"></i></a></td>
                            	<td class="row-img"><img style="width:115px" src="'.$linha['url'].'" alt="cart-img"></td>
                                <td class="product-name" data-title="Product"><a href="#">'.$linha['nome'].'</a></td>
                                <td class="product-price" data-title="Price"><p>R$ '.$linha['valor'].'</p></td>
                                <td class="product-quantity" data-title="Quantity">
                                	<div class="quantity_filter">
                                        <input type="button" value="-" class="minus">
                                        <input class="quantity-number qty" type="text" value="'.$linha['qtd'].'" min="1" max="10">
                                        <input type="button" value="+" class="plus">
                               		</div>
                                </td>
                                <td class="product-total" data-title="Subprice"><p>R$  '.$subtotal.'</p></td>
                                <td class="row-close close-2" data-title="product-remove"><a href="#"><i class="ion-close-circled"></i></a></td>
                            </tr>
                            ';
                                }
                            ?>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="12">
                                    <ul class="table-btn">
                                        <li><a href="shop.html" class="btn btn-secondary"><i class="fa fa-chevron-left"></i>Continue Shopping</a></li>
                                        <li><a href="#" class="btn btn-primary"><i class="fa fa-refresh"></i>Update cart</a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Cart Section -->


<!-- Start Cart Box Section -->
<section class="cart-box-section pb_large">
	<div class="container">
    	<div class="row justify-content-between">
        	<div class="col-lg-4 col-md-6">
            	<div class="cart-inner-box box-1 text-center">
                	<div class="ci-title">
                    	<h6>Cupom</h6>
                    </div>
                    <div class="ci-caption">
                    	<p>Digite seu cupom de desconto</p>
                        <form>
                        	<input required="" class="form-control" type="text" placeholder="Coupon Code">
                            <button class="btn btn-secondary" type="submit">Aplicar cupom de desconto</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="cart-inner-box box-2 text-center">
                	<div class="ci-title">
                    	<h6>Detalhamento</h6>
                    </div>
                    <div class="ci-caption">
                        <ul>
                        	<li>Subtotal <span>R$ <?php $total?></span></li>
                            <li>Total <span>$237.00</span></li>

                        </ul>
                    </div>
                    <div class="ci-btn">
                        <a href="checkout" class="btn btn-primary btn-block rounded-0">Seguir para Pagamento</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Cart Box Section -->