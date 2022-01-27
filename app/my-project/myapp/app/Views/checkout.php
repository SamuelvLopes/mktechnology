
<!-- Start Breadcrumbs Section -->
<section class="breadcrumbs-section background_bg" data-img-src="image/checkout-breadcrumbs-img.jpg">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-12">
                <div class="page_title text-center">
                	<h1>Checkout</h1>
                    <ul class="breadcrumb justify-content-center">
                    	<li><a href="index.html">home</a></li>
                        <li><a href="#">shop</a></li>
                        <li><span>Checkout</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Header Section -->

<!-- Start Checkout Section -->
<section class="checkout-inner-page pt_large pb_large">	
	<div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="checkout-process">
                    <div id="accordion" class="checkout-parts accordion">
                    	<form role="form" action="" method="post">
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                        <a class="btn btn-link" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span>01</span>Registro de Compra</a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="check-tab">
                                            <div class="row">
                                                <div class="new-cous col-md-6">
                                                    <div class="form-title">
                                                        <p>registro</p>
                                                    </div>
                                                    <div class="chek-form">
                                                        <div class="form-check">
                                                            <input class="form-check-input" required type="radio" name="ddd" id="12" value="option1" checked>
                                                            <label class="form-check-label" for="12">Comprar sem conta</label>
                                                        </div>
                                                        
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="ddd" id="13" value="option2">
                                                            <label class="form-check-label" for="13">Criar Conta</label>
                                                        </div>
                                                        
                                                    </div>
                                                   	<p>Comprar na sua conta nao e obrigatorio mesmo que seja o indicado</p>
                                                    <button class="btn btn-primary btn-next" onclick='document.getElementById("segundo-menu").click()' type="button">Continue</button>
                                                </div>
                                                <div class="checkout-form col-md-6">
                                                    <div class="form-title">
                                                        <p>login</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" placeholder="insira seu email" value="" type="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Senha</label>
                                                        <input class="form-control" placeholder="insira sua senha" value="" type="password">
                                                    </div>
                                                    <div class="form-group forgot-password">
                                                        <a href="#">Esqueci a senha!</a>
                                                    </div>
                                                    <div class="form-group form-wizard-buttons">
                                                        <button class="btn btn-primary btn-submit" type="submit">Login</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header form-wizard-step">
                                    <h5>
                                         <a class="btn btn-link collapsed" id='segundo-menu' data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><span>02</span>Dados do cliente</a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                	<div class="card-body">
                                    	<div class="check-tab">
                                            <div class="checkout-form">
                                                <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Nome  <span class="required_sign">*</span></label>
                                                    <input id='nome' class="form-control required" placeholder="Insira seu nome" value="" type="text">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Sobrenome <span class="required_sign">*</span></label>
                                                    <input id='sobrenome' class="form-control required" placeholder="Insira seu sobrenome" value="" type="text">
                                                </div>
                                                 <div class="form-group col-md-6">
                                                    <label>CPF <span class="required_sign">*</span></label>
                                                    <input id='cpf' class="form-control required" placeholder="Insira seu CPF" value="" type="text">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Email <span class="required_sign">*</span></label>
                                                    <input id='email' class="form-control required" placeholder="Insira seu email" value="" type="email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Telefone <span class="required_sign">*</span></label>
                                                    <input input='telefone' class="form-control required" placeholder="Insira seu telefone" value="" type="text">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Cep <span class="required_sign">*</span></label>
                                                    <input input='cep' class="form-control required" placeholder="Insira seu CEP" value="" type="text">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Logradouro <span class="required_sign">*</span></label>
                                                    <input input='logradouro' class="form-control required" placeholder="Insira seu Logradouro" value="" type="text">
                                                </div>
                                                <div class="form-group col-md-6">
                                                        <label>Numero <span class="required_sign">*</span></label>
                                                        <input input='numero' class="form-control required" placeholder="Insira seu numero ou S/N" value="" type="text">
                                                    </div>
                                                <div class="form-group col-md-6">
                                                    <label>Pais <span class="required_sign">*</span></label>
                                                    <select class="js-example-placeholder-single js-states form-control" data-placeholder="Escolha seu pais">
                                                        <option></option>
                                                        <option value="1">india</option>
                                                        <option value="2">china</option>
                                                        <option value="3">United States (US)</option>
                                                        <option value="4">United Kingdome (UK)</option>
                                                        <option value="5">Canada</option>
                                                        <option value="6">U.A.E</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Cidade <span class="required_sign">*</span></label>
                                                    <input id='cidade' class="form-control required" placeholder="Insira sua cidade" value="" type="text">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Estado <span class="required_sign">*</span></label>
                                                    <input id='estado' class="form-control required" placeholder="Insira seu estado" value="" type="text">
                                                </div>
                                               
                                                <div class="form-group col-md-6">
                                                	<div class="form-check mt-md-3">
                                                        <label>Os dados de entrega sera os do comprador
                                                            <input id='dulicarpentrega' class="defult-check" type="checkbox" checked="checked">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="form-wizard-buttons text-md-right">
                                                        <button onclick="document.getElementById('terceiro-menu').click()" class="btn btn-primary btn-submit btn-next" type="button">Continuar</button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header form-wizard-step">
                                    <h5>
                                         <a class="btn btn-link collapsed" id="terceiro-menu" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span>03</span>Dados de entrega</a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                	<div class="card-body">
                                    	<div class="check-tab">
                                            <div class="checkout-form">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label> Nome <span class="required_sign">*</span></label>
                                                        <input class="form-control required" id="nome_entrega" placeholder="Insira seu nome" value="" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Sobrenome <span class="required_sign">*</span></label>
                                                        <input class="form-control required"  id="sobrenome_entrega" placeholder="Insira seu sobrenome" value="" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Email <span class="required_sign">*</span></label>
                                                        <input class="form-control required" id="email_entrega" placeholder="Insira seu email" value="" type="email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Telefone <span class="required_sign">*</span></label>
                                                        <input  class="form-control required" id="telefone_entrega" placeholder="Insira seu telefone" value="" type="text">
                                                    </div>
                                                 <div class="form-group col-md-6">
                                                    <label>Cep <span class="required_sign">*</span></label>
                                                    <input class="form-control required" id="cep_entrega" placeholder="Insira seu CEP" value="" type="text">
                                                </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Logradouro <span class="required_sign">*</span></label>
                                                        <input class="form-control required" id="logradou_entrega" placeholder="Insira seu Logradouro" value="" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Numero <span class="required_sign">*</span></label>
                                                        <input class="form-control required" id="numero_entrega" placeholder="Insira seu numero ou S/N" value="" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>pais <span class="required_sign">*</span></label>
                                                        <select class="js-example-placeholder-single js-states form-control" data-placeholder=">Selecione seu pais">
                                                            <option></option>
                                                            <option value="1">india</option>
                                                            <option value="2">china</option>
                                                            <option value="3">United States (US)</option>
                                                            <option value="4">United Kingdome (UK)</option>
                                                            <option value="5">Canada</option>
                                                            <option value="6">U.A.E</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Cidade <span class="required_sign">*</span></label>
                                                        <input class="form-control required" id="cidade_entrega" placeholder="Insira a cidade" value="" type="text">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Estado <span class="required_sign">*</span></label>
                                                        <input class="form-control required" id="estado_entrega" placeholder="Insira o estado" value="" type="text">
                                                    </div>
                                                    
                                                    <div class="form-group col-md-12">
                                                        <label>Notas para o entregador</label>
                                                        <textarea rows="3" class="form-control" id="nota_entrega" placeholder="Notas de entrega"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="form-wizard-buttons text-md-right">
                                                        	<button class="btn btn-primary btn-submit btn-next" onclick="document.getElementById('forma-pagamento-menu').click()" type="button">Continue</button>
                                                    	</div>
                                                    </div>
                                                </div>
                                            </div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header form-wizard-step">
                                    <h5>
                                        <a class="btn btn-link collapsed" id='forma-pagamento-menu' data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><span>04</span>Forma de Pagamento</a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                	<div class="card-body">
                                    	<div class="check-tab">
                                            <div class="checkout-form">
                                                <div class="chek-form">
                                                    <div class="form-check">
                                                        <input class="form-check-input" required type="radio" name="payment_option" id="exampleRadios3" value="option3" checked>
                                                        <label class="form-check-label" for="exampleRadios3">Pix</label>
                                                        <p data-method="option3" class="payment-text">Carregando qr code... </p>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios4" value="option4">
                                                        <label class="form-check-label" for="exampleRadios4">Credito</label>
                                                        <p data-method="option4" class="payment-text">Será cobrado do seu cartão de credito</p>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5" value="option5">
                                                        <label class="form-check-label" for="exampleRadios5">Boleto</label>
                                                        <p data-method="option5" class="payment-text">O boleto seguira juntamente a mercadoria</p>
                                                    </div>
                                                </div>
                                                <div class="form-wizard-buttons text-md-right">
                                                    <button onclick="document.getElementById('ultimo-menu').click()" class="btn btn-primary btn-next" type="button">Continue</button>
                                                </div>
                                            </div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ord_tab">
                                <div class="card-header form-wizard-step">
                                    <h5>
                                        <a class="btn btn-link collapsed" id='ultimo-menu' data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><span>05</span>Resumo</a>
                                    </h5>
                                </div>
                               	<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                	<div class="card-body">
                                    	<div class="check-tab">
                                        	<div class="order-table">
                                            	<div class="order-review-table table-responsive">
                                                	<table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr class="row-1">
                                                            <th class="row-title text-left">Product Name</th>
                                                            <th class="row-title">Valor</th>
                                                            <th class="row-title">Quantidade</th>
                                                            <th class="row-title">Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                    <?php
                                                        foreach($produtos as $linha){
                                                        
                                                        $valor=(float) $linha['valor'];
                                                        $valor=$valor*$linha['qtd'];
                                                    echo'
                                                        <tr class="row-2">
                                                            <td class="product-name">'.$linha['nome'].'</td>
                                                            <td class="product-price">$ '.$linha['valor'].'</td>
                                                            <td class="product-quantity">'.$linha['qtd'].'</td>
                                                            <td class="product-subtotal">'.$valor.'</td>
                                                        </tr>
                                                        ';
                                                        }
                                                        ?>

                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="row-4">
                                                            <td class="text-left" colspan="3">Subtotal</td>
                                                            <td class="pr_subtotal"><?php echo $total;?></td>
                                                        </tr>
                                                        <!--<tr class="row-5">
                                                            <td class="text-left" colspan="3">Cupom de desconto</td>
                                                            <td class="pr_subtotal">-$5.00</td>
                                                        </tr>-->
                                                        <tr class="row-6">
                                                            <td class="text-left" colspan="3">Total</td>
                                                            <td class="product-subtotal">R$<?php echo $total;?></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            	</div>
                                        	</div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="place-oreder-btn">
                        <a href="#" class="btn btn-secondary">Enviar Pedido</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
            	<div class="cart-inner-box box-2 text-center">
                	<div class="ci-title">
                    	<h6>Total</h6>
                    </div>
                    <div class="ci-caption">
                        <ul>
                        	<li>Subtotal <span>R$ <?php echo $total; ?></span></li>
                            <li>Frete <span>Gratis</span></li>
                            <!--<li>Codigo de desconto <span>-$5.00</span></li>-->
                        </ul>
                    </div>
                    <div class="ci-btn">
                        <ul>
                        	<li>Total<span>R$ <?php echo $total;?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Checkout Section -->