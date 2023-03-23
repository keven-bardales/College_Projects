let imgs = document.getElementsByClassName('card-img-top');
let titulos = document.getElementsByClassName('card-title');
let precios = document.getElementsByClassName('precio');
let btnsBuy = document.getElementsByClassName('btn-link');
let btnModal = document.getElementById('modal');
let cancel = document.getElementById('cancel');
let games = [];


for(let i = 0; i < btnsBuy.length; i++){
    let game = new Object();
    btnsBuy[i].onclick = function(){

        game={                       
            'img':imgs[i].getAttribute('src'),
            'titulo':titulos[i].textContent,
            'precio':parseFloat(precios[i].textContent),
            
        }

        games.push(game);
        console.table(game);

    }
}


function listCart(){

    let table = '';
    let body = document.getElementById('body');
    let subtotal = 0;
    let total = 0;
    let impuesto = 0;

    for(i = 0; i < games.length; i++){
        var objimg = new Image();
        let objimg2;
        objimg2 = objimg.src = '/img/iconos/eliminar.png';
        table += '<tr>';

        table += '<td> <img class="img-modal" src= " ' + games[i].img + ' "> </td>'
        table += '<td>' +games[i].titulo + '</td>';
        table += '<td> $ ' + games[i].precio + '</td>';
        table+='<td><a href="#" onclick="removeGame('+i+')"><img src="'+objimg2+'" ></a></td>';


        table += '</tr>';

        subtotal += games[i].precio;
        impuesto = subtotal * 0.15;
        total = subtotal + impuesto;        

    }

    table += '<tr>';

    table += '<td>Subtotal</td>';
    table += '<td></td>';
    table += '<td> $ ' + subtotal.toFixed(2) + '</td>';    
    table += '<td></td>';

    table += '</tr>';


    table += '<tr>';

    table += '<td>Impuesto</td>';
    table += '<td></td>';
    table += '<td> $ ' + impuesto.toFixed(2) + '</td>';
    
    table += '<td></td>';   

    table += '</tr>';

    table += '<tr>';

    table += '<td>Total</td>';
    table += '<td></td>';
    table += '<td> $ ' + total.toFixed(2) + '</td>';
    
    table += '<td></td>'   

    table += '</tr>';

    body.innerHTML = table;

    

}

btnModal.onclick = function() {
    listCart();
}

function removeGame(posicion){
    games.splice(posicion,1)
    listCart();
}

cancel.onclick = function btnCancelar(){
    for(let i = 0; i <= games.length; i++){
        games.splice(i,games.length)
        listCart();
    }
}