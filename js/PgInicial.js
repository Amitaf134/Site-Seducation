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
   

