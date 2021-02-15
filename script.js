document.addEventListener("DOMContentLoaded", function () {

  const cartImg = document.getElementById('cart-counter');
  const clickCell = document.getElementById('carousel');
  const clickNum = document.getElementById('counter');
  console.log(clickNum);
  console.log(clickCell);
  let clicks = 0;
  cartImg.style.display = 'none';
  clickCell.addEventListener('click', function (event) {
    clicks += 1;
    if (clicks > 0) {
      cartImg.style.display = 'flex';
    };  
    console.log(clicks);
    clickNum.innerHTML = clicks;
  });

  
  $('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#0"]')
  $("a").on('click', function (event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
 
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1600, function () {
        window.location.hash = hash;
      })
    }
  });


  const elem = document.querySelector('.carousel');
  const flkty = new Flickity(elem, {

    cellAlign: 'left',
    wrapAround: true,
    freeScroll: true,
    autoPlay: true,
  })

});

function openShoopingCart() {
  document.getElementById("shooping-cart-form").style.display = "flex";
}

function closeShoopingCart() {
  document.getElementById("shooping-cart-form").style.display = "none";
}
let sendBtn = document.getElementById('send');
let message = document.getElementById('message');
let character1 = document.getElementById('character1');
let character2 = document.getElementById('character2');
let package1 = document.getElementById('package1');
let package2 = document.getElementById('package2');
let hand1 = document.getElementById('hand1');
let hand2 = document.getElementById('hand2');

let state = false;

const animate = () => {
    if(!state){
        state = true;
        //both characters comes in
        message.classList.add("slide-down"); 
        character1.classList.add("slide-right1");
        character2.classList.add("slide-left");    
        //package is delivered     
        setTimeout(() => {
                package1.style.visibility = "hidden"
                package2.style.visibility = "visible"
        }, 2550);            

        //character1 leaves
        setTimeout(() => {
            character1.style.transform = "scaleX(-1)";
            character1.classList.add("slide-left1");
            //character1.classList.remove("slide-right1");
        }, 2700);

        //character2 leaves
        setTimeout(() => {
            character2.style.transform = "scaleX(1)";
            character2.classList.add("slide-right");
        }, 3000);
        
        setTimeout(() => {
            package2.style.visibility = "hidden";
        },4000);

        //show "sent" message
        setTimeout(() => {
            message.innerText = "SENT";
            message.classList.add("slide-up");
        },4200);
    }
}

//send button is clicked
sendBtn.addEventListener('click', animate);