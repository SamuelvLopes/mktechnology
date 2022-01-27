$(document).ready(function () {
    var intervalo = window.setInterval(function () {
        console.log('init cart');
        define_preco();    }, 1000);
    atualizar_carrinho();
    define_contador();
    define_preco();
})

function add_carrinho(qtd,codigo) {
    $.post('carrinho/add', { qtd: qtd, codigo: codigo }, function (retorno) {
        if (retorno != null) {
            console.log(retorno)
            atualizar_carrinho();
            define_contador();
            define_preco();
        }
    });
}
function define_contador() {
    $.post('carrinho/count', {  }, function (retorno) {
        if (retorno != null) {
            document.getElementById("contador_carrinho").innerHTML = "<span>" + retorno + "</span>";
        }
    });

    }
function define_preco() {
    
    document.getElementById("expositor_preco").innerHTML = document.getElementById("preco_total").innerHTML;;
      
}
function atualizar_carrinho() {
    $.post('carrinho/mini_cart', { }, function (retorno) {
        if (retorno != null) {
            document.getElementById("mini_cart").innerHTML = retorno;
        }
    });


}

func