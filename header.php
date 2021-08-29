<?php
require_once("connection.php");
require_once("function_core.php");
?>
<?php
$img=get_images($connect,'main_admin_picture_one');
foreach ($img as $key) {
  $main_img_one=$key['images'];
}
$img=get_images($connect,'main_admin_picture_tow');
foreach ($img as $key) {
  $main_img_tow=$key['images'];
}
$img=get_images($connect,'sazzad_tambnill');
foreach ($img as $key) {
  $sazzad=$key['images'];
}
$img=get_images($connect,'silon_tambnill');
foreach ($img as $key) {
  $silon=$key['images'];
}
$img=get_images($connect,'lopa_tambnill');
foreach ($img as $key) {
  $lopa=$key['images'];
}
$img=get_images($connect,'consiment_tambnill');
foreach ($img as $key) {
  $consiment=$key['images'];
}
$img=get_images($connect,'Responsive_icon');
foreach ($img as $key) {
  $responsive_icon=$key['images'];
}
$img=get_images($connect,'Responsive_main_picture');
foreach ($img as $key) {
  $res_main_pic=$key['images'];
}

$img=get_images($connect,'Footer_developer_img');
foreach ($img as $key) {
  $footer_dev=$key['images'];
}
$img=get_images($connect,'Footer_map_img');
foreach ($img as $key) {
  $footer_map=$key['images'];
}
$img=get_images($connect,'Sazzad_load_more_pic');
foreach ($img as $key) {
  $sazzad_load=$key['images'];
}
$img=get_images($connect,'Proudect_main_silon');
foreach ($img as $key) {
  $main_silon=$key['images'];
}
$img=get_images($connect,'Proudect_main_sazzad');
foreach ($img as $key) {
  $main_sazzad=$key['images'];
}
$img=get_images($connect,'Proudect_main_lopa');
foreach ($img as $key) {
  $main_lopa=$key['images'];
}
$img=get_images($connect,'Proudect_main_con');
foreach ($img as $key) {
  $main_consiment=$key['images'];
}

//============================get_text sql data=============================//
//============================get_text sql data=============================//
//============================get_text sql data=============================//
//============================get_text sql data=============================//
$text_admin=get_text($connect,'main admin');
  foreach ($text_admin as $text ) {
    $main_admin=$text['text'];
  };
 $text_admin=get_text($connect,'what_i_heading');
  foreach ($text_admin as $text ) {
      $what_i_heading=$text['text'];
   };
   $text_admin=get_text($connect,' what_i_desc ');
    foreach ($text_admin as $text ) {
        $what_i_desc =$text['text'];
     }
  $text_admin=get_text($connect,'web_design');
   foreach ($text_admin as $text ) {
          $web_design=$text['text'];
    }
  $text_admin=get_text($connect,' web_design_desc ');
    foreach ($text_admin as $text ) {
        $web_design_desc =$text['text'];
    }
  $text_admin=get_text($connect,'web_development');
   foreach ($text_admin as $text ) {
          $web_development=$text['text'];
     }
 $text_admin=get_text($connect,'web_development_desc');
       foreach ($text_admin as $text ) {
           $web_development_desc=$text['text'];
       }

 $text_admin=get_text($connect,'wordpress');
    foreach ($text_admin as $text ) {
     $wordpress=$text['text'];
   }


   $text_admin=get_text($connect,'wordpress_desc');
     foreach ($text_admin as $text ) {
         $wordpress_desc =$text['text'];
     }
   $text_admin=get_text($connect,'bug_fix');
    foreach ($text_admin as $text ) {
           $bug_fix=$text['text'];
      }
  $text_admin=get_text($connect,'bug_fix_desc');
     foreach ($text_admin as $text ) {
      $bug_fix_desc=$text['text'];
    }
    $text_admin=get_text($connect,'html');
      foreach ($text_admin as $text ) {
          $html =$text['text'];
      }
    $text_admin=get_text($connect,'html_desc');
     foreach ($text_admin as $text ) {
            $html_desc=$text['text'];
       }
   $text_admin=get_text($connect,'css');
      foreach ($text_admin as $text ) {
       $css=$text['text'];
     }
     $text_admin=get_text($connect,'css_desc');
       foreach ($text_admin as $text ) {
           $css_desc =$text['text'];
       }
     $text_admin=get_text($connect,'javascript');
      foreach ($text_admin as $text ) {
             $javascript=$text['text'];
        }
    $text_admin=get_text($connect,'javascript_desc');
       foreach ($text_admin as $text ) {
        $javascript_desc=$text['text'];
      }
      $text_admin=get_text($connect,'php');
        foreach ($text_admin as $text ) {
            $php=$text['text'];
        }
      $text_admin=get_text($connect,'php_desc');
       foreach ($text_admin as $text ) {
              $php_desc=$text['text'];
         }
         //========================================//
         //===========Proudect_section==============//

      $text_admin=get_text($connect,'proudect_section_heading');
        foreach ($text_admin as $text ) {
        $proudect_section_heading=$text['text'];
      }
      $text_admin=get_text($connect,'proudect_section_desc');
        foreach ($text_admin as $text ) {
        $proudect_section_desc=$text['text'];
      }
      $text_admin=get_text($connect,'sample_one_name');
        foreach ($text_admin as $text ) {
        $sample_one_name=$text['text'];
      }

      $text_admin=get_text($connect,'sample_one_desc');
        foreach ($text_admin as $text ) {
        $sample_one_desc=$text['text'];
      }

      $text_admin=get_text($connect,'sample_tow_name');
        foreach ($text_admin as $text ) {
        $sample_tow_name=$text['text'];
      }

      $text_admin=get_text($connect,'sample_tow_desc');
        foreach ($text_admin as $text ) {
        $sample_tow_desc=$text['text'];
      }

      $text_admin=get_text($connect,'sample_three_name');
        foreach ($text_admin as $text ) {
        $sample_three_name=$text['text'];
      }

      $text_admin=get_text($connect,'sample_three_desc');
        foreach ($text_admin as $text ) {
        $sample_three_desc=$text['text'];
      }

      $text_admin=get_text($connect,'sample_four_name');
        foreach ($text_admin as $text ) {
        $sample_four_name=$text['text'];
      }

      $text_admin=get_text($connect,'sample_four_desc');
        foreach ($text_admin as $text ) {
        $sample_four_desc=$text['text'];
      }

      $text_admin=get_text($connect,'button_proudect_section');
        foreach ($text_admin as $text ) {
        $button_proudect_section=$text['text'];
      }
      //========================================//
      //===========services_section==============//

      $text_admin=get_text($connect,'services_section');
        foreach ($text_admin as $text ) {
        $services_section=$text['text'];
      }
      $text_admin=get_text($connect,'services_section_desc');
        foreach ($text_admin as $text ) {
        $services_section_desc=$text['text'];
      }

      $text_admin=get_text($connect,'blog_site_desc');
        foreach ($text_admin as $text ) {
        $blog_site=$text['text'];
      }
      $text_admin=get_text($connect,'services_blog_title');
        foreach ($text_admin as $text ) {
        $services_blog_title=$text['text'];
      }
      $text_admin=get_text($connect,'Wordpress_services_desc');
        foreach ($text_admin as $text ) {
        $Wordpress_services=$text['text'];
      }
      $text_admin=get_text($connect,'services_wordpress_title');
        foreach ($text_admin as $text ) {
        $services_wordpress_title=$text['text'];
      }
      $text_admin=get_text($connect,'portfollio_desc');
        foreach ($text_admin as $text ) {
        $portfollio=$text['text'];
      }
      $text_admin=get_text($connect,'services_portfollio_title');
        foreach ($text_admin as $text ) {
        $services_portfollio_title=$text['text'];
      }
      $text_admin=get_text($connect,'e_commerce_desc');
        foreach ($text_admin as $text ) {
        $e_commerce=$text['text'];
      }
      $text_admin=get_text($connect,'services_ecommerce_title');
        foreach ($text_admin as $text ) {
        $services_ecommerce_title=$text['text'];
      }

      //========================================//
      //===========responsive_section==============//

      $text_admin=get_text($connect,'responsive_section_text');
        foreach ($text_admin as $text ) {
        $responsive_section_text=$text['text'];
      }
      $text_admin=get_text($connect,'res_desc');
        foreach ($text_admin as $text ) {
        $res_desc=$text['text'];
      }
      //========================================//
      //===========skill_section==============//
      //=========================================//

      $text_admin=get_text($connect,'skill_section_text');
        foreach ($text_admin as $text ) {
        $skill_section_text=$text['text'];
      }
      $text_admin=get_text($connect,'skill_section_desc');
        foreach ($text_admin as $text ) {
        $skill_section_desc=$text['text'];
      }
      //========================================//
      //===========contuct_section==============//
      //=========================================//

      $text_admin=get_text($connect,'contuct_section_name');
        foreach ($text_admin as $text ) {
        $contuct_section_name=$text['text'];
      }
      $text_admin=get_text($connect,'contuct_section_desc');
        foreach ($text_admin as $text ) {
        $contuct_section_desc=$text['text'];
      }
      //========================================//
      //===========load more section sazzad==============//
      //=========================================//

      $text_admin=get_text($connect,'Load_more_section_desc');
        foreach ($text_admin as $text ) {
        $Load_more_section_desc=$text['text'];
      }

      //===========footer section=============//
      $text_admin=get_text($connect,'footer_section_location_text');
        foreach ($text_admin as $text ) {
        $footer_section_location_text=$text['text'];
      }
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- All CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <script src="js/jquery-3.4.1.min.js"></script>
  <style type="text/css">


  </style>
  <title>Sazzad – One Page high-Porfermance portfollio</title>
</head>

<body>
  <div class="progesber specific_hold" id="progesber"></div>
     <div class="serollpath"></div>
  <section class="header_section spicfic_background">
    <div class="top_menu spicfic_background">
      <marquee scrollamount="5" direction="right">
        <span class="top_menu_heading specific_hold"><span>Welcome to Freelancher <label style="color:gold">Sazzad.</label>
      </span></span>
      </marquee>
    </div>
    <ul class="top_menu_list">
      <li><a class="ti-facebook icon_top_menu specific_hold" href="#"></a></li>
      <li><a class="ti-instagram icon_top_menu specific_hold" href="#"></a></li>
      <li><a class="ti-linkedin icon_top_menu specific_hold" href="#"></a></li>
      <li><a class="ti-google icon_top_menu specific_hold" href="#"></a></li>
    </ul>
    <div class="container_1">
      <div class="group group_1 spicfic_background">
        <div class="col span_1_of_4">
          <div class="color_box_spicfic">
            <p class="clr_1 btn_strong glob_1">.</p>
            <p class="clr_2 btn_strong glob_2"></p>
            <p class="clr_3 btn_strong glob_3"></p>
            <p class="clr_4 btn_strong glob_4"></p>
            <p class="clr_5 btn_strong glob_5"></p>
            <p class="clr_6 btn_strong glob_6"></p>
          </div>
          <a href="index.php"><h1 class="logo_box_top"><img class="main_logo" src="images/logo_4.png"></img></h1></a>
        </div>
        <div class="col span_3_of_4">
          <div class="main_menu">
            <ul class="main_menu_list">
              <li><a class="specific_hold" href="index.php#Home">Home</a></li>
              <li><a class="specific_hold" href="index.php#do">Do</a></li>
              <li><a class="specific_hold" href="index.php#work">Work</a></li>
              <li><a class="specific_hold" href="index.php#Services">Services</a></li>
              <li><a class="specific_hold" href="#skill">Skills</a></li>
              <li><a class="specific_hold" href="#footer">Footer</a></li>
            </ul>
          </div>
        </div>
        <p class="ti-align-justify bar_mobile_menu specific_hold"></p>
      </div>
    </div>
    <!--mobile menu------------------>
  </section>
  <div class="mobile_menu ">
    <ul class="mobile_menu_ul">
      <li><a class="specific_hold" href="index.php#home">Home</a></li>
      <li><a class="specific_hold" href="index.php#do">Do</a></li>
      <li><a class="specific_hold" href="index.php#work">Work</a></li>
      <li><a class="specific_hold" href="index.php#Services">Services</a></li>
      <li><a class="specific_hold" href="index.php#skill">Skills</a></li>
      <li><a class="specific_hold" href="index.php#footer">Footer</a></li>
    </ul>
    </div>
