function exibir_categoria(categorias) {
    let elementos = document.getElementsByClassName('box_produto');
    console.log(elementos);

    for (var i= 0; i < elementos.length; i++) {
        console.log(elementos[i].id);
        if (categorias == elementos[i].id)
            elementos[i].style = "display: inline-block";
        else
            elementos[i].style = "display:none";
    }
}

let exibir_todos = () => {
    let elementos = document.getElementsByClassName('box_produto');
    for (var i= 0; i < elementos.length; i++) {
            elementos[i].style = "display: inline-block";
    }
}

function destaque(imagem) {
    console.log(imagem);

    if (imagem.style.width == '120px') {
        imagem.style.width = '180px';
    }
    else {
        imagem.style.width = '120px';
    }
}

