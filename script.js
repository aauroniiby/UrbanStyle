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
