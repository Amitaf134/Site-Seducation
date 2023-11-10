<script src="sos/jquery-3.7.1.min.js" 
hrf="/path/to/your/slick-carousel.js" 
href="jmill/slick.js"></script>


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

$(document).ready(function() {
  $('.my-carousel').slick({
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    initialSlide: 0,
    slidesToScroll: true,
    centerMode: true,
    arrows: false
  });
});

   window.onload = function() {

    //inicializando o djabo do carousel
    var carousel = document.getElementById("caousel-id");
    var carousel_conatainer = document.getElementById("carousel-conatainer-id");

    //adicionar/remover imagens do tal carousel
    function add_image(image) {
      var image_container = document.createElement("div");
      image_container.classList.add("carousel-item");
      var image = image.cloneNode(true);
      image_container.appendChild(image);
      carousel_container.appendChild(image_container);
    
    }

    function remove_image(image) {
      image.parentNode.removeChild(image);
      carousel_container.removeChild(image.parentNode);
    
    }

    /*carroussel YIPEEE*/
    
/* seleciona todos os "control" das setas*/
const controls = document.querySelectorAll(".control");
let currentItem = 0;
/*intems na classe/disponíveis*/
const items = document.querySelectorAll(".items");
const maxItems = items.length;

/* evento click para as setas*/
controls.forEach((control) => {
  control.addEventListener('click', (e) => {
    isLeft = e.target.classList.contains("arrow-left");

    if (isLeft) {
      currentItem -= 1;
    } else {
      currentItem += 1;
    } 

    if (currentItem >= maxItems) {
      currentItem = 0;
    }

    if (currentItem < 0) {
      currentItem = maxItems - 1;
    }

    items.forEach((item) => item.classList.remove("current-item"));

    items[currentItem].scrollIntoView({
      behavior: "smooth",
      inline: "center"
    });

    items[currentItem].classList.add("current-item");
  });
});
    
   }

