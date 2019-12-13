jQuery(document).ready(function ($) {
    //start timer for nav menu-top
    jQuery( "li.bt" ).each(function() {
        let ee = jQuery( this ).index();
        let liall = jQuery('li.bt');
        let licount = liall.length;
        jQuery( this ).attr( "data-timer",licount-ee );
    });
    let timer={};

    $('.menu-top > ul > li').hover(function () {
        let tag = $(this);
        let timerAttr = tag.attr('data-timer');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {
            $('> ul',tag).slideDown();
        },300);
    },function () {
        let tag = $(this);
        let timerAttr = tag.attr('data-timer');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {
            $('> ul',tag).slideUp();
        },300);
    });
//end timer for nav menu-top
//start slider-top
    let sliderTag = $('.carosel');
    let sliderItems = sliderTag.find('.item');
    let numItems = sliderItems.length;
    let sliderNavigators = sliderTag.find('.slider-navigator ul li');
    let timeOut = 6000;
    let nextSlide = 1;
    function slider(){
        if (nextSlide>numItems) {
            nextSlide=1;
        }
        if (nextSlide<1) {
            nextSlide=numItems;
        }
        sliderItems.hide();
        sliderItems.eq(nextSlide-1).fadeIn(200);
        sliderNavigators.removeClass('active');
        sliderNavigators.eq(nextSlide-1).addClass('active');
        nextSlide++;
    }
    slider();
    let sliderInterval = setInterval(slider,timeOut);
    sliderTag.mouseleave(function () {
        clearInterval(sliderInterval);
        sliderInterval = setInterval(slider,timeOut);
    });
    function goToPrev(){
        nextSlide=nextSlide-2;
        slider();
    }

    function goToSlide(index) {
        nextSlide = index;
        slider();
    }
    $('.carosel .slider-navigator li').click(function () {
        let index = $(this).index();
        goToSlide(index+1);
        clearInterval(sliderInterval);

    });
    $("a.next").click(function () {
        slider();
        clearInterval(sliderInterval);
    });
    $("a.prev").click(function () {
        goToPrev();
        clearInterval(sliderInterval);

    });
//end slider-top
//start timer for slider-offer
//     $('.flipTimer').flipTimer({
//         direction:'down',
//         date:'November 18,2018 11:17:04',
//         callback:function () {
//             $('.slider-offer-end').fadeIn(200);
//         }
//     });


//end timer for slider-offer
//start slider-offer
    let sliderTagOffer = $('.slider-offer');
    let sliderItemsOffer = sliderTagOffer.find('.item');
    let numItemsOffer = sliderItemsOffer.length;
    let sliderNavigatorsOffer = sliderTagOffer.find('.slide-offer-left .slider-offer-list li');
    let timeOutOffer = 6000;
    let nextSlideOffer = 1;
    function sliderOffer(){
        if (nextSlideOffer>numItemsOffer) {
            nextSlideOffer=1;
        }
        if (nextSlideOffer<1) {
            nextSlideOffer=numItemsOffer;
        }
        sliderItemsOffer.hide();
        sliderItemsOffer.eq(nextSlideOffer-1).fadeIn(200);
        sliderNavigatorsOffer.removeClass('active');
        sliderNavigatorsOffer.eq(nextSlideOffer-1).addClass('active');
        nextSlideOffer++;
    }
    sliderOffer();
    let sliderIntervalOffer = setInterval(sliderOffer,timeOutOffer);
    sliderTagOffer.mouseleave(function () {
        clearInterval(sliderIntervalOffer);
        sliderIntervalOffer = setInterval(sliderOffer,timeOutOffer);
    });
    function goToSlideOffer(index) {
        nextSlideOffer = index;
        sliderOffer();
    }
    $('.slide-offer-left .slider-offer-list li').click(function () {
        clearInterval(sliderIntervalOffer);
        let indexoffer = $(this).index();
        goToSlideOffer(indexoffer+1);

    });
//end slider-offer
//start all-slider



//end all-slider

//start collapse c-box in search page
    $(".c-box-header-check").click(function () {
        $(this).toggleClass('arrow');
        let p_box = $(this).parents('.c-box');
        let boxes = p_box.find('.c-box-header-check-content');
        boxes.slideToggle(300);
    });
    $('.product-info-pro-size ul li span').click(function () {
        $('.product-info-pro-size ul li').removeClass('active');
        $(this).parents('.product-info-pro-size ul li').addClass('active');
    });
//end collapse c-box in search page
//start tabs single product
    $('.product-nav-all li').click(function () {
        $('.product-nav-all li').removeClass('active');
        $(this).addClass('active');
        let index_nav = $(this).index();
        let sec_nav = $('.product-nav-child section');
        sec_nav.fadeOut(0);
        sec_nav.eq(index_nav).fadeIn(200);

    });
//end tabs single product

//start zoom single product image

    $('.zoom-product').elevateZoom({
        'zoomWindowOffetx' : -900,
        'easing' : true,
        'zoomWindowOffety' : -20,
        'borderSize' : 1,
        'zoomWindowWidth' : 450,
        'zoomWindowHeight' : 550,
    });
    $('.gallert-left').mCustomScrollbar({
        scrollInertia: 1000,
        autoHideScrollbar: true,
        mouseWheel:{
            enabled: true,
            disableOver: ["select", "textarea"]
        },
        keyboard:{
            enable: true,
            scrollType: "stepless",
            scrollAmount: "auto"
        },
        documentTouchScroll: true,
        advanced:{
            autoExpandHorizontalScroll: false,
            autoScrollOnFocus: "input,textarea,button",
            updateOnContentResize: true,
            updateOnImageLoad: true,
            updateOnSelectorChange: true


        },
        theme: "3d-dark"
    });

//end zoom single product image

//start show single product gallery



    let productGallery = $('.gallert-right');
    let allGallery = $('#product_gallery');
    let productGalleryItems = $('.gallert-left .gallery_items');
    $('.dark').click(function () {
        allGallery.fadeOut(500);
    });
    $('.add-user-address-header .close').click(function () {
        allGallery.fadeOut(500);
    });
    $('.add_address').click(function () {
        allGallery.fadeIn(300);
    });
    function ShowGallery(index) {
        productGalleryItems.removeClass('active');
        productGalleryItems.eq(index).addClass('active');
    }
    productGallery.find('.close').click(function () {
        allGallery.fadeOut(300);
    });

    productGalleryItems.click(function () {
        let gallery_item_index = $(this).index();
        ShowGallery(gallery_item_index);
        let main_image = $(this).attr('data-main-image');
        productGallery.find('.main_image').attr('src', main_image);
    });
    $('.product-gallery-item ul li').click(function () {
        let gallery_item_index = $(this).index();
        ShowGallery(gallery_item_index);
        let main_image = $(this).attr('data-main-image');
        productGallery.find('.main_image').attr('src', main_image);
        allGallery.fadeIn(300);
    });
    $(".selectpicker").selectpicker();

//end show single product gallery



});
function sliderScroll(direction,tag) {
    let i_tag = jQuery(tag);
    let allSliderTag = i_tag.parents(".all-slider-content");
    let allSliderUl = allSliderTag.find(".all-slider-main ul");
    let allSliderItems = allSliderUl.find("li");
    let allSliderItemsNuber = allSliderItems.length;
    let allSliderNumbers = Math.ceil(allSliderItemsNuber/3);
    let maxNegativeMargin = -(allSliderNumbers-1) * 940;
    allSliderUl.css('width',allSliderItemsNuber*310+(allSliderItemsNuber * 5));
    let marginRightNow;
    let marginRightOld = allSliderUl.css('margin-right');
    marginRightOld = parseFloat(marginRightOld);

    if (direction === 'right'){
        marginRightNow = marginRightOld + 940;
    }
    if (direction === 'left'){
        marginRightNow = marginRightOld - 940;
    }
    if (marginRightNow < maxNegativeMargin){
        marginRightNow = 0;
    }
    if (marginRightNow > 0){
        marginRightNow = maxNegativeMargin;
    }
    allSliderUl.animate({'marginRight' : marginRightNow}, 500);
}