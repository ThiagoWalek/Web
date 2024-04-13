function claro(){
    // Cor do body
    document.body.style.backgroundColor = 'white';
    // Variaveis
    var h1_h2 = document.getElementsByClassName('normal')
    var h1_h2_vermelho = document.getElementsByClassName('bg')

    // Define a cor do texto de todos os elementos 'h1' e 'h2' com a classe 'normal' para branco
    for (var i = 0; i < h1_h2_vermelho.length; i++) {
        h1_h2_vermelho[i].style.color = '#8b0000';
    }
    // Define a cor do texto de todos os elementos 'h1' e 'h2' com a classe 'normal' para branco
    for (var i = 0; i < h1_h2.length; i++) {
        h1_h2[i].style.color = 'black';
    }

    
}

function escuro(){
    // Cor do body
    document.body.style.backgroundColor = '#333333';
    // Variaveis
    var td = document.getElementsByTagName('td');
    var h1_h2 = document.getElementsByClassName('normal')
    var h1_h2_vermelho = document.getElementsByClassName('bg')

    // Define a cor do texto de todos os elementos 'h1' e 'h2' com a classe 'normal' para vermelho
    for (var i = 0; i < h1_h2_vermelho.length; i++) {
        h1_h2_vermelho[i].style.color = '#ff0000';
    }
    // Define a cor do texto de todos os elementos 'h1' e 'h2' com a classe 'normal' para branco
    for (var i = 0; i < h1_h2.length; i++) {
        h1_h2[i].style.color = 'white';
    }
    // Define a cor de fundo de todos os elementos 'td' para branco
    for (var j = 0; j < td.length; j++) {
        td[j].style.backgroundColor = 'white';
    }
}