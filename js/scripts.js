(function($) {

  'use strict'



  $('.product-carousel').owlCarousel({
    loop: true,
    margin: 30,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
      400: {
        items: 2
      },
      576: {
        items: 3
      },
      992: {
        items: 4
      }
    }
  });


  //======================
  // Mobile menu
  //======================
  $('#mobile-menu-toggler').on('click', function(e) {
    e.preventDefault();
    $('.navbar-nav').slideToggle();
  })
  $('.has-menu-child').append('<i class="menu-dropdown ti-angle-down"></i>');

  if ($(window).width() <= 991) {
    $('.menu-dropdown').on('click', function() {
      $(this).prev().slideToggle('slow');
      $(this).toggleClass('ti-angle-down ti-angle-up')
    })
  }
})(jQuery);
//===========animated scrollbar==========//
let progress = document.getElementById("progesber");
let totalHeight = document.body.scrollHeight -
  window.innerHeight;
window.onscroll = function() {
  let progressHeight = (window.pageYOffset / totalHeight) * 100;
  progress.style.height = progressHeight + "0%";
}
//==============neon btn click===============//
$(document).ready(function() {
  $(".button_neon").click(function() {
    $(".group_click_function").slideToggle();
  })
})
//mobile menu===============================//
$(document).ready(function() {
  $(".bar_mobile_menu").click(function() {
    $(".mobile_menu_ul").addClass("mobile_menu_show").slideToggle();
  })
})
//========================================================//
$(document).ready(function() {
  $(".click_opt_box").click(function() {
    $(".mobile_menu").slideToggle();
  })
})
//==============slider click change===============//
$(document).ready(function() {
  $(".btn_change").click(function() {
    $(".change_click_2").toggleClass("active");
  });
  $(".btn_change").click(function() {
    $(".change_click_1").toggleClass("active");
  });
})

//========================================heading text animation===============================//
setInterval(function() {
  if (document.getElementsByClassName("text_1")[0].classList.contains("active_1")) {
    document.getElementsByClassName("text_1")[1].classList.add("active_1");
    document.getElementsByClassName("text_1")[0].classList.remove("active_1");
  } else if (document.getElementsByClassName("text_1")[1].classList.contains("active_1")) {

    document.getElementsByClassName("text_1")[0].classList.add("active_1");
    document.getElementsByClassName("text_1")[1].classList.remove("active_1");
  }
}, 1000)


//========================================slider new===============================//
setInterval(function() {
  if (document.getElementsByClassName("sliderimg")[0].classList.contains("active")) {
    document.getElementsByClassName("sliderimg")[1].classList.add("active");
    document.getElementsByClassName("sliderimg")[0].classList.remove("active");
  } else if (document.getElementsByClassName("sliderimg")[1].classList.contains("active")) {
    document.getElementsByClassName("sliderimg")[0].classList.add("active");
    document.getElementsByClassName("sliderimg")[1].classList.remove("active");
  }
}, 10000)
//==========================================================//
//=========================spicfic design spasial effict===================//
//===========================jQuery function==================================================//
//============================================================================================//
$(document).ready(function() {
  $(".clr_1").click(function() {
    $(".spicfic_background").addClass("glob_1");
    $(".spicfic_background").removeClass("glob_2");
    $(".spicfic_background").removeClass("glob_3");
    $(".spicfic_background").removeClass("glob_4");
    $(".spicfic_background").removeClass("glob_5");
    $(".spicfic_background").removeClass("glob_6");
  });

  $(".clr_2").click(function() {
    $(".spicfic_background").addClass("glob_2");
    $(".spicfic_background").removeClass("glob_1");
    $(".spicfic_background").removeClass("glob_3");
    $(".spicfic_background").removeClass("glob_4");
    $(".spicfic_background").removeClass("glob_5");
    $(".spicfic_background").removeClass("glob_6");
  });

  $(".clr_3").click(function() {
    $(".spicfic_background").addClass("glob_3");
    $(".spicfic_background").removeClass("glob_2");
    $(".spicfic_background").removeClass("glob_1");
    $(".spicfic_background").removeClass("glob_4");
    $(".spicfic_background").removeClass("glob_5");
    $(".spicfic_background").removeClass("glob_6");
  });

  $(".clr_4").click(function() {
    $(".spicfic_background").addClass("glob_4");
    $(".spicfic_background").removeClass("glob_3");
    $(".spicfic_background").removeClass("glob_2");
    $(".spicfic_background").removeClass("glob_1");
    $(".spicfic_background").removeClass("glob_5");
    $(".spicfic_background").removeClass("glob_6");
  });

  $(".clr_5").click(function() {
    $(".spicfic_background").addClass("glob_5");
    $(".spicfic_background").removeClass("glob_4");
    $(".spicfic_background").removeClass("glob_3");
    $(".spicfic_background").removeClass("glob_2");
    $(".spicfic_background").removeClass("glob_1");
    $(".spicfic_background").removeClass("glob_6");
  });

  $(".clr_6").click(function() {
    $(".spicfic_background").addClass("glob_6");
    $(".spicfic_background").removeClass("glob_5");
    $(".spicfic_background").removeClass("glob_4");
    $(".spicfic_background").removeClass("glob_3");
    $(".spicfic_background").removeClass("glob_2");
    $(".spicfic_background").removeClass("glob_1");
  });
});

$(document).ready(function() {
  $(".clr_1").click(function() {
    $(".specific_hold").addClass("text_color_1");
    $(".specific_hold").removeClass("text_color_2");
    $(".specific_hold").removeClass("text_color_3");
    $(".specific_hold").removeClass("text_color_4");
    $(".specific_hold").removeClass("text_color_5");
    $(".specific_hold").removeClass("text_color_6");
  });

  $(".clr_2").click(function() {
    $(".specific_hold").addClass("text_color_2");
    $(".specific_hold").removeClass("text_color_1");
    $(".specific_hold").removeClass("text_color_3");
    $(".specific_hold").removeClass("text_color_4");
    $(".specific_hold").removeClass("text_color_5");
    $(".specific_hold").removeClass("text_color_6");
  });

  $(".clr_3").click(function() {
    $(".specific_hold").addClass("text_color_3");
    $(".specific_hold").removeClass("text_color_1");
    $(".specific_hold").removeClass("text_color_2");
    $(".specific_hold").removeClass("text_color_4");
    $(".specific_hold").removeClass("text_color_5");
    $(".specific_hold").removeClass("text_color_6");
  });

  $(".clr_4").click(function() {
    $(".specific_hold").addClass("text_color_4");
    $(".specific_hold").removeClass("text_color_1");
    $(".specific_hold").removeClass("text_color_2");
    $(".specific_hold").removeClass("text_color_3");
    $(".specific_hold").removeClass("text_color_5");
    $(".specific_hold").removeClass("text_color_6");
  });

  $(".clr_5").click(function() {
    $(".specific_hold").addClass("text_color_5");
    $(".specific_hold").removeClass("text_color_1");
    $(".specific_hold").removeClass("text_color_2");
    $(".specific_hold").removeClass("text_color_3");
    $(".specific_hold").removeClass("text_color_4");
    $(".specific_hold").removeClass("text_color_6");
  });

  $(".clr_6").click(function() {
    $(".specific_hold").addClass("text_color_6");
    $(".specific_hold").removeClass("text_color_1");
    $(".specific_hold").removeClass("text_color_2");
    $(".specific_hold").removeClass("text_color_3");
    $(".specific_hold").removeClass("text_color_4");
    $(".specific_hold").removeClass("text_color_5");
  });
});
//==========================================================//
//=========================spicfic design spasial effict===================//
//====================jQuery function END==================================================//
//============================================================================================//
