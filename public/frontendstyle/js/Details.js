$(document).ready(function(){
    $('.product-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
          autoplay: true,
  autoplaySpeed: 2500,
        arrows: false,
        fade: true,
        dots : true,
        asNavFor: '.product-thumbnail'
    });
    
    $('.product-thumbnail').slick({
        slidesToShow: 3,
         autoplay: true,
  autoplaySpeed: 2500,
        slidesToScroll: 2,
        asNavFor: '.product-slider',
        dots: true,
        centerMode: false,
        focusOnSelect: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 4
                }
            }
        ]
    });



$('.prodcutrow').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
   dots: true,
    arrows: false,
});







});


document.addEventListener('DOMContentLoaded', function() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            tabBtns.forEach(b => b.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });
            
            this.classList.add('active');
            const tabId = this.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
        });
    });
    
    const minusBtn = document.querySelector('.quantity-btn.minus');
    const plusBtn = document.querySelector('.quantity-btn.plus');
    const quantityInput = document.querySelector('.quantity-input');
    
    minusBtn.addEventListener('click', function() {
        let value = parseInt(quantityInput.value);
        if (value > 1) {
            quantityInput.value = value - 1;
        }
    });
    
    plusBtn.addEventListener('click', function() {
        let value = parseInt(quantityInput.value);
        quantityInput.value = value + 1;
    });
    
    quantityInput.addEventListener('change', function() {
        if (parseInt(this.value) < 1) {
            this.value = 1;
        }
    });
    
    // const addToCartBtn = document.querySelector('.add-to-cart-btn');
    // addToCartBtn.addEventListener('click', function() {
    //     const quantity = parseInt(quantityInput.value);
    //     alert(`Added ${quantity} Chinese Cabbage(s) to your cart!`);
    // });
});