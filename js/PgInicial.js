function barraPesq(){
    var barra = document.getElementById('brPesq').style.visibility;
    document.getElementById('brPesq').style.visibility = 'visible';
}

function barraV(){
    var barra = document.getElementById('brPesq').style.visibility;
    document.getElementById('brPesq').style.visibility = 'hidden';
}

function mostrarB(){
    var br = document.getElementById('brPesq');
    br.style.visibility= 'visible';


    br.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
          e.preventDefault();
          var texto = document.getElementById('brPesq').value;
          console.log(texto);
        }
      });
}


var soma = 0;

function curtir(){
  var btLIke = document.getElementById('like').src;
  soma = soma + 1;
  if(soma % 2 == 0){
    btLIke = document.getElementById('like').src = 'img/curtido.png';
 }else{
  btLIke = document.getElementById('like').src = 'img/curtir.png';
 }
  
}



var btEsquerda = document.getElementById('esquerda');
var btDireita = document.getElementById('direita');

var div1 = document.getElementById('gallery1').style.display;
var div1 = document.getElementById('gallery2').style.display;

 btEsquerda.addEventListener('click',function(){
  document.getElementById('gallery1').style.display = 'flex';
  document.getElementById('gallery2').style.display = 'none';
 });
 
 btDireita.addEventListener('click',function(e){
  document.getElementById('gallery1').style.display= 'none';
  document.getElementById('gallery2').style.display = 'flex';

 });
