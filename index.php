<?php require_once("header.php");

?>
<section class="banner_section spicfic_background" id="Home">
  <div class="banner">
    <div class="col span_1_of_2 contant_1">
        <h2 name="main_admin" class="heading customize_text specific_hold"><?php echo $main_admin ;?></h2>
        <h2 class="heading_description specific_hold">I am profassional
          <span class="text_1 color_2 text_fix">web-devloper.</span>
          <span class="text_1 color_1 active_1"> web-designer.</span>
        </h2>
      </div>
    </div>
    <div class="col span_1_of_2 contant_2">
      <div class="carusal">
        <div class="slidercontainer">
          <div class="img_box_1">
            <div class="img_box_2">

              <div class="sliderimg change_click_1 active"  alt="main_admin_picture1"><img src="images/<?php echo $main_img_one?>" /></div>
              <div class="sliderimg change_click_2 "><img src="images/<?php echo $main_img_tow?>"  alt="main_admin_picture2"/></div>
            </div>
          </div>
          <p class="ti-angle-right btn_change"></p>
          <p class="ti-angle-left btn_change"></p>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>
  <section class="what_i_do_section spicfic_background" id="do">
    <!---sbg carvr------------------------>
    <div class="container">
      <div class="group">
        <h2 name='what_i_heading' class="do_box_heading customize_text specific_hold"><?php echo $what_i_heading?></h2>
        <p  name="what_i_desc" class="little_description_2 specific_hold">
         <?php echo $what_i_desc?>
        </p>
      </div>
      <div class="group">
        <div class="col span_1_of_4 do_box_1 specific_hold">
          <div class="contant_4">
            <p class="ti-tablet ti_icon specific_hold"></p>
            <h3 name="web_design" class="do_box specific_hold">
              <?php echo $web_design?>

            </h3>
          </div>
          <p name="web_design_desc" class="do_box_description specific_hold">
            <?php echo $web_design_desc?>
          </p>
        </div>
        <div class="col span_1_of_4 do_box_1 specific_hold">
          <div class="contant_4">
            <p class="ti-joomla ti_icon specific_hold"></p>
            <h3 name="web_development" class="do_box specific_hold">  <?php echo $web_development?></h3>
          </div>
          <p name="web_development_desc" class="do_box_description specific_hold">
              <?php echo $web_development_desc?>
          </p>
        </div>
        <div class="col span_1_of_4 do_box_1 fix_1 specific_hold">
          <div class="contant_4">
            <p class="ti-wordpress ti_icon specific_hold"></p>
            <h3 name="wordpress" class="do_box specific_hold">  <?php echo $wordpress?></h3>
          </div>
          <p  name="wordpress_desc" class="do_box_description specific_hold"><?php echo $wordpress_desc?></p>
        </div>
        <div class="col span_1_of_4 do_box_1 clear_fix_1 specific_hold">
          <div class="contant_4">
            <p class="ti-settings ti_icon specific_hold"></p>
            <h3 name="bug_fix" class="do_box specific_hold"><?php echo $bug_fix?></h3>
          </div>
          <p name="bug_fix_desc" class="do_box_description specific_hold"><?php echo $bug_fix_desc?></p>
        </div>
        <div class="col span_1_of_4 do_box_1 clear_fix fix_1 specific_hold">
          <div class="contant_4">
            <p class="ti-html5 ti_icon specific_hold"></p>
            <h3 name="html5" class="do_box specific_hold"><?php echo $html?></h3>
          </div>
          <p name="html5_desc" class="do_box_description specific_hold"><?php echo $html_desc?></p>
        </div>
        <div class="col span_1_of_4 do_box_1 specific_hold">
          <div class="contant_4">
            <p class="ti-css3 ti_icon specific_hold"></p>
            <h3 name="css3" class="do_box specific_hold"><?php echo $css?></h3>
          </div>
          <p name="css3_desc" class="do_box_description specific_hold"><?php echo $css_desc?></p>
        </div>
        <div class="col span_1_of_4 do_box_1 fix_1 specific_hold">
          <div class="contant_4">
            <p class="ti-brush ti_icon specific_hold"></p>
            <h3 name="javascript" class="do_box specific_hold"><?php echo $javascript?></h3>
          </div>
          <p name="javascript_desc" class="do_box_description specific_hold"><?php echo $javascript_desc?></p>
        </div>
        <div class="col span_1_of_4 do_box_1 specific_hold">
          <div class="contant_4">
            <p class="ti-spray ti_icon specific_hold"></p>
            <h3 name="php" class="do_box specific_hold">
              <?php echo $php?>
            </h3>
          </div>
          <p name="php_desc" class="do_box_description specific_hold">
            <?php echo $php_desc?>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!--work_section----------->
  <!--work_section----------->
  <!--work_section----------->

  <section class="product_section spicfic_background" id="work">
    <div class="container">
      <div class="group group_new_2">
        <h2 class="do_box_heading customize_text specific_hold">
          <?php echo $proudect_section_heading?>
        </h2>
        <p class="little_description_2 specific_hold">
         <?php echo $proudect_section_desc?>
        </p class="specific_hold">
      </div>
      <div class="group product_box_5">
        <div class="product img col span_1_of_2 ">
          <div class="img_pro_box">
            <a href="sazzad_page_sample.php">
              <img src="images/<?php echo $sazzad?>" alt="sazzad_tambnill">
            </a>
          </div>
        </div>
        <div class="col span_1_of_2 product_box">
          <div class="space"></div>
          <h2 class="product_heading specific_hold">
         <?php echo $sample_one_name?>
          </h2>
          <p class="specific_hold">
         <?php echo $sample_one_desc?>
          </p>
        </div>
      </div>
      <div class="group grp_fix product_box_5">
        <div class="product img col span_1_of_2 fix_canten_1">
          <div class="img_pro_box">
            <a href="silon_page_sample.php">
              <img src="images/<?php echo $silon?>" alt="silon_tambnill">
            </a>
          </div>
        </div>
        <div class="col span_1_of_2 product_box fix_cantant_2">
          <div class="space"></div>
         <a href="silon_page_sample.php">
          <h2 class="product_heading P_h_fix specific_hold">
            <?php echo $sample_tow_name?>
          </h2>
         </a>
          <p class="specific_hold">
            <?php echo $sample_tow_desc?>
          </p>
        </div>
      </div>
      <div class="btn_hero group col span_4_of_4">
        <a class="button_neon button_click specific_hold specific_hold">
          <span id="one"></span>
          <span id="tow"></span>
          <span id="three"></span>
          <span id="four"></span>
          <?php echo $button_proudect_section?>
        </a>
      </div>
      <br>
      <div class="group group_click_function click_block product_box_5">
        <div class="product img col span_1_of_2 fix_canten_3">
          <div class="img_pro_box fix_margin_5">
           <a href="lopa_page_sample.php">
             <img src="images/<?php echo $lopa?>" alt="lopa_tambnill">
           </a>
          </div>
        </div>
        <div class="col span_1_of_2 product_box fix_cantant_2">
          <div class="space"></div>
          <a href="lopa_page_sample.php">
            <h2 class="product_heading specific_hold">
              <?php echo $sample_three_name?>
            </h2>
          </a>
          <p class="specific_hold">
            <?php echo $sample_three_desc?>
            </p>
        </div>
      </div>
      <div class="group group_click_function product_box_5">
        <div class="product img col span_1_of_2 fix_canten_1">
          <div class="img_pro_box">
           <a href="portfollio_page_sample.php">
             <img src="images/<?php echo $consiment?>" alt="consiment_tambnill">
           </a>
          </div>
        </div>
        <div class="col span_1_of_2 product_box fix_cantant_2">
          <div class="space"></div>
          <a href="portfollio_page_sample.php">
            <h2 class="product_heading P_h_fix specific_hold">
              <?php echo $sample_four_name?>
            </h2>
          </a>
          <p class="specific_hold">
              <?php echo $sample_four_desc?>
          </p>
        </div>
      </div>
    </div>
    <!--cliick btn function------------------------>
    </div>
  </section>
  <section class="services_section spicfic_background" id="Services">
    <div class="container">
      <div class="group">
        <h2 class="do_box_heading specific_hold">
          <?php echo $services_section?></h2>
        <p class="little_description_2 specific_hold">
          <?php echo $services_section_desc?>
        </p>
      </div>
      <div class="group">
        <div class="col span_1_of_4 do_box_1 services_1 specific_hold">
          <div class="contant_4">
            <p class="ti-desktop ti_icon specific_hold"></p>
            <h3 class="do_box specific_hold"><?php echo $services_blog_title ?></h3>
          </div>
          <p class="do_box_description specific_hold"><?php echo  $blog_site?></p>
        </div>
        <div class="col span_1_of_4 do_box_1 services_1 specific_hold">
          <div class="contant_4">
            <p class="ti-bag ti_icon specific_hold"></p>
            <h3 class="do_box specific_hold"><?php echo $services_ecommerce_title?></h3>
          </div>
          <p class="do_box_description specific_hold">
            <?php echo $e_commerce?>
           </p>
        </div>
        <div class="col span_1_of_4 do_box_1 fix_1 services_1 specific_hold">
          <div class="contant_4">
            <p class="ti-wordpress ti_icon specific_hold"></p>
            <h3 class="do_box specific_hold"><?php echo $services_wordpress_title?></h3>
          </div>
          <p class="do_box_description specific_hold">
            <?php echo $Wordpress_services?>
          </p>
        </div>
        <div class="col span_1_of_4 do_box_1 clear_fix_1 services_1 specific_hold">
          <div class="contant_4">
            <p class="ti-magnet ti_icon specific_hold"></p>
            <h3 class="do_box specific_hold"><?php echo $services_portfollio_title?></h3>
          </div>
          <p class="do_box_description specific_hold">
            <?php echo $e_commerce?>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="responsive_section spicfic_background">
    <div class="group">
      <img class="img_responsive_icon" src="images/<?php echo $responsive_icon?>" alt="responsive_icon">
      <div class="do_box_heading res_box specific_hold">
        <h1 class="box_res_2 specific_hold"><?php echo $responsive_section_text?>
        </h1>
      </div>
    </div>
    <div class="group">
      <img class="res_img" src="images/<?php echo $res_main_pic?>" alt="responsive_main_picture">
      <h3 class="responsive_paragraf specific_hold">
        <?php echo $res_desc?>
      </h3>
    </div>
  </section>
  <section class="spicfic_background skill_section" id="skill">
    <div class="container">
      <div class="group">
        <h2 class="do_box_heading specific_hold text_skill"><?php echo $skill_section_text?> </h2>
      <br>
        <p class="little_description_2 specific_hold">
         <?php echo $skill_section_desc?>
        </p>
      </div>
      <div class="group skill_group_box">
        <div class="text-left text-white specific_hold all_effect"><label class="ti-html5 mr-1 mb-0 mt-0"></label> Html5 : 87%</div>

        <div class="progress main_progress">
          <div class="text-left progress-bar progress-bar-striped bg-success  progress-bar-animated proghress_bar_animate" style="width:87%"><span class="text-left ml-3 span_progress text-white">Html</span></div>
        </div>
        <br>
        <div class="text-left text-white specific_hold all_effect"><label class="ti-css3 mr-1 mb-0 mt-0"></label> Css3 :80%</div>

        <div class="progress main_progress">
          <div class="text-left progress-bar progress-bar-striped bg-primary  progress-bar-animated proghress_bar_animate" style="width:80%"><span class="text-left ml-3 span_progress text-white ">Css3</span></div>
        </div>
        <br>
        <div class="text-left text-white specific_hold all_effect"><label class="ti-target mr-1 mb-0 mt-0"></label> Javascript : 65%</div>
        <div class="progress main_progress">
          <div class="text-left progress-bar progress-bar-striped bg-danger  progress-bar-animated proghress_bar_animate" style="width:65%"><span class="text-left ml-3 span_progress text-white ">Javascript</span></div>
        </div>
        <br>
        <div class="text-left text-white specific_hold all_effect"><label class="ti-settings mr-1 mb-0 mt-0"></label> jquery : 73%</div>
        <div class="progress main_progress">
          <div class="text-left progress-bar progress-bar-striped background_jquery progress-bar-animated proghress_bar_animate" style="width:73%"><span class="text-left ml-3 span_progress text-white ">jquery</span></div>
        </div>
        <br>
        <div class="text-left text-white specific_hold all_effect"><label class="ti-export mr-1 mb-0 mt-0"></label> Php :78%</div>
        <div class="progress main_progress">
          <div class="text-left progress-bar progress-bar-striped bg-warning  progress-bar-animated proghress_bar_animate" style="width:78%"><span class="text-left ml-3 span_progress text-white ">Php</span></div>
        </div>
        <br>
        <div class="text-left text-white specific_hold all_effect"><label class="ti-marker mr-1 mb-0 mt-0"></label> Mysql :77%</div>
        <div class="progress main_progress">
          <div class="text-left progress-bar progress-bar-striped bg-dark  progress-bar-animated proghress_bar_animate" style="width:77%"><span class="text-left ml-3 span_progress text-white ">Mysql</span></div>
        </div>
        <br>
        <div class="text-left text-white specific_hold all_effect"><label class="ti-android mr-1 mb-0 mt-0"></label> bootstrap:67%</div>
         <div class="progress main_progress">
           <div class="text-left progress-bar progress-bar-striped bg-info  progress-bar-animated proghress_bar_animate" style="width:67%"><span class="text-left ml-3 span_progress text-white">bootstrap</span></div>
         </div>
         <br>
       <div class="text-left text-white specific_hold all_effect"><label class="ti-wordpress mr-1 mb-0 mt-0"></label> wordpress :77%</div>
        <div class="progress main_progress">
          <div class="text-left progress-bar progress-bar-striped bg-success  progress-bar-animated proghress_bar_animate" style="width:77%"><span class="text-left ml-3 span_progress text-white">Wordpress</span></div>
        </div>
       </div>
    </div>
  </section>


  <section class="contuct_section spicfic_background">
    <div class="container">
      <div class="group">
        <h2 class="do_box_heading customize_text specific_hold"><?php echo $contuct_section_name?></h2>
        <p class="little_description_2 specific_hold">
          <?php echo $contuct_section_desc?>
        </p>
      </div>
      <div class="group">
        <div class="form_1 box">
          <form class="" method="post">
            <input type="text" name="" value="" id="name_user" placeholder="name*">
            <span id="name_error" style="color:#ff4949;margin-top:-10px;font-family:oswald;font-size: 17px;"></span>
            <input type="text" name="" value="" id="email_user" placeholder="Email*">
            <span id="email_error" style="color:#ff4949;margin-top:-10px;font-family:oswald;font-size: 17px;"></span>
            <input type="text" name="" value="" id="password_user" placeholder="password*">

            <span id="password_error" style="color:#ff4949;margin-top:-10px;font-family:oswald;font-size: 17px;"></span>
            <textarea class="textarier_size" name="name" id="user_massage" rows="8" cols="20" placeholder="your massage*"></textarea>
            <span id="massage_error" style="color:#ff4949;margin-top:-10px;font-family:oswald;font-size: 17px;"></span>
            <br><br>
            <button type="button" class="btn btn-primary btn-lg text-center" href="javascript:void(0)" onclick="get_in_tuch('sazzad')" >submit</button>

          </form>
        </div>
<script type="text/javascript">
function get_in_tuch(){
  var name=$("#name_user").val();
  var email=$("#email_user").val();
  var password=$("#password_user").val();
  var massage=$("#user_massage").val();
  var error="";
  if(name==''){
    $('#name_error').html("pleace enter name.");
    var error="yes";
  }else{
    $('#name_error').html("");
  }
  if(email==''){
    $('#email_error').html("pleace enter name.");
    var error="yes";
  }else{
 $('#email_error').html("");
  }
  if(password==''){
    $('#password_error').html("pleace enter your email carate password.");
    var error="yes";
  }else{
      $('#password_error').html("");
  }
  if(massage==''){
    $('#massage_error').html("pleace enter massage.");
    var error="yes";
  }else {
     $('#massage_error').html("");
  }
  if(error==''){
    jQuery.ajax({
         url: 'form_submit.php',
         type: 'post',
           data:"name="+name+"&email="+email+"&password="+password+"&massage="+massage,
         success: function(result) {
          alert(result);
         }
       });
  }
}



</script>
      </div>
    </div>
  </section>

<?php require_once('footer.php');?>
