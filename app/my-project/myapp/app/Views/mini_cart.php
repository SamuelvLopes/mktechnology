<?php  


                        echo"<div class='cart-info'>";
                            foreach($produtos as $item){
								
                                echo"<div class='cart-prodect d-flex'>
                                    <div class='cart-img'>
                                        <img src='".$item['url']."' alt='cart-img'>
                                    </div>
                                    <div class='cart-product'>
                                        <a href='#'>".$item['nome']."(".$item['qtd']." UND)</a>
                                        <p>R$ ".$item['valor']*$item['qtd']."</p>
                                    </div>
                                    <a href='#' class='close-icon d-flex align-items-center'><i class='ion-close'></i></a>
                                </div>";
							$total=$total+$item['valor']*$item['qtd'];
							}
							echo"
                            </div>
                                <div class='price-prodect d-flex align-items-center justify-content-between'>
                                <p class='total'>total</p>
                                <p class='total-price' id='preco_total'>R$ $total</p>
                            </div>
                                <div class='cart-btn'>
                                <a href='carrinho' class='btn btn-primary'>Carrinho</a>
                            </div>";
                            ?>
							
							