
// window.onscroll = function() {myFunction()};

// var header = document.getElementById("myHeader");
// var sticky = header.offsetTop;

// function myFunction() {
//     if (window.pageYOffset > sticky) {
//         header.classList.add("sticky");
//     } else {
//         header.classList.remove("sticky");
//     }
// }



window.onscroll = function() {myFunction()};
var header = document.getElementById("header");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("headerSticky");
    } else {
        header.classList.remove("headerSticky");
    }
}



$('#surprise-home-content').hide();
$('#btnToggle').on('click',
  function() {
    $('#main-home-content, #surprise-home-content').toggle();
    window.scrollTo(0, 0);
  }
);


$(document).ready(function(){
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
// scroll body to 0px on click
$('#back-to-top').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 400);
    return false;
});
});


$(function(e) {
  var $open = $('.js-searchOpen');
  var $close = $('.js-searchClose');
  var $body = $('body');
  var $lay = $('.search-overlay');
  var $input = $('.search-form > .search');
  
  $open.on('click', function(e) {
    e.preventDefault(); 
    $body.addClass('-hide'); 
    $lay.addClass('-show'); 
    $input.focus(); // focus
  });
  // .js-searchClose
  $close.on('click', function(e) {
    e.preventDefault();
    $body.removeClass('-hide'); 
    $lay.removeClass('-show'); // .search-overlay .-show
  });
});




$(document).ready(function(){
$(window).scroll(function () {   
   
 if($(window).scrollTop() > 50) {
    $('#user-sidebar').css('position','fixed');
    $('#user-sidebar').css('top','95px'); 
    $('#user-sidebar').css('width','inherit'); 
    $('#user-sidebar').css('padding-right','15px'); 
    $('#user-sidebar').css('z-index','0'); 
 }

 else if ($(window).scrollTop() <= 95) {
    $('#user-sidebar').css('position','');
    $('#user-sidebar').css('top','');
    $('#user-sidebar').css('width',''); 
    $('#user-sidebar').css('padding-right',''); 
    $('#user-sidebar').css('z-index',''); 

 }  
    if ($('#user-sidebar').offset().top + $("#user-sidebar").height() > $("#footer").offset().top) {
        $('#user-sidebar').css('top',-($("#user-sidebar").offset().top + $("#user-sidebar").height() - $("#footer").offset().top));
    }
});
});


$('.filter-active').on('click', function(e) {
    e.preventDefault();
    $('.filter-wrapper').slideToggle();
})


$('.add-note').on('click', function(e) {
    e.preventDefault();
    $('.add-textarea').slideToggle();
})



$('body').on('click', '.password-control', function(){
    if ($('#password-input').attr('type') == 'password'){
        $(this).addClass('view');
        $('#password-input').attr('type', 'text');
    } else {
        $(this).removeClass('view');
        $('#password-input').attr('type', 'password');
    }
    return false;
});

$(document).ready(function(){
  $("#hide").click(function(){
    $(".search-icon-display").hide();
  });
  $("#show").click(function(){
    $(".search-icon-display").show();
  });
});



$('.home-main-carousel').owlCarousel({
    loop:true,
    rewind:false,
    margin:0,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:10000,
    responsiveClass:true,
    responsive:{
       0:{
        items:1,
    },
    480:{
        items:1,
    },
    768:{
        items:1,
    },
    1024:{
        items:1,
    },
    1380:{
        items:1,
    },
    1580:{
        items:1,
    }
}
})



$('.addvertise-carousel').owlCarousel({
    loop:true,
    rewind:false,
    margin:30,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:15000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        480:{
            items:1,
        },
        768:{
            items:2,
        },
        1024:{
            items:3,
        },
        1380:{
            items:3,
        },
        1580:{
            items:3,
        }
    }
})



$('.special-food-carousel').owlCarousel({
    loop:true,
    rewind:false,
    margin:30,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:10000,
    responsiveClass:true,
    responsive:{
       0:{
        items:1,
    },
    480:{
        items:1,
    },
    768:{
        items:2,
    },
    1024:{
        items:3,
    },
    1380:{
        items:3,
    },
    1580:{
        items:3,
    }
}
})



$('.menu-carousel').owlCarousel({
    loop:false,
    rewind:false,
    margin:30,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:15000,
    responsiveClass:true,
    responsive:{
       0:{
        items:3,
    },
    480:{
        items:3,
    },
    768:{
        items:4,
    },
    1024:{
        items:7,
    },
    1380:{
        items:7,
    },
    1580:{
        items:7,
    }
}
})



$('.testimonial-carousel').owlCarousel({
    loop:true,
    rewind:false,
    margin:30,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:15000,
    responsiveClass:true,
    responsive:{
       0:{
        items:1,
    },
    480:{
        items:1,
    },
    768:{
        items:1,
    },
    1024:{
        items:1,
    },
    1380:{
        items:1,
    },
    1580:{
        items:1,
    }
}
})



$('.other-food-carousel').owlCarousel({
    loop:true,
    rewind:false,
    margin:10,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:13000,
    responsiveClass:true,
    responsive:{
       0:{
        items:1,
    },
    480:{
        items:1,
    },
    768:{
        items:2,
    },
    1024:{
        items:5, 
    },
    1380:{
        items:5,
    },
    1580:{
        items:5,
    }
}
})



$('.favourites-carousel').owlCarousel({
    loop:true,
    rewind:false,
    margin:5,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:15000,
    responsiveClass:true,
    responsive:{
       0:{
        items:1,
    },
    480:{
        items:1,
    },
    768:{
        items:2,
    },
    1024:{
        items:3,
    },
    1380:{
        items:3,
    },
    1580:{
        items:3,
    }
}
})



$('.list-category-slider').owlCarousel({
    loop:true,
    rewind:false,
    margin:0,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:15000,
    responsiveClass:true,
    responsive:{
       0:{
        items:1,
    },
    480:{
        items:1,
    },
    768:{
        items:2,
    },
    1024:{
        items:3,
    },
    1380:{
        items:3,
    },
    1580:{
        items:3,
    }
}
})