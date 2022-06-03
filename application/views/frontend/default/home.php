<!DOCTYPE html>
<html>
<head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;

}
.mySlides {display: none;}
img {vertical-align: middle;}
/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin-bottom: 5px;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/4 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 2.5s;
}

.front-text{
    text-align: right;
}

.home-fact-area{
    margin-top: 3px;
    margin-bottom:10px;
}

.course-carousel-area{
    background-color: #F7DEF6;
}

.about-area2{
    background-color: #DDA0D2;
}


@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

/* Teacher Area */

div.gallery {
  margin: 17px;
  border: 2px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

</style>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="img/img (1).jpg" height="400px" style="width: 100%;">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 /4</div>
  <img src="img/img (2).jpg" height="400px" style="width: 100%;">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="img/img (3).jpg" height="400px" style=" width: 100%;">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="img/img (4).jpg" height="400px" style=" width: 100%;">
  <div class="text">Caption Four</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="img/img (4).jpg" height="400px" style=" width: 100%;">
  <div class="text">Caption Four</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="img/img (4).jpg" height="400px" style=" width: 100%;">
  <div class="text">Caption Four</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="img/img (4).jpg" height="400px" style=" width: 100%;">
  <div class="text">Caption Four</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script> 
</body>
</html>
<section class="home-fact-area">
    <div class="container-lg">
        <div class="row">
            <?php $courses = $this->crud_model->get_courses(); ?>
            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                    <i class="fas fa-bullseye float-left"></i>
                    <div class="text-box">
                        <h4><?php
                        $status_wise_courses = $this->crud_model->get_status_wise_courses();
                        $number_of_courses = $status_wise_courses['active']->num_rows();
                        echo $number_of_courses.' '.get_phrase('online_courses'); ?></h4>
                        <p><?php echo get_phrase('explore_a_variety_of_fresh_topics'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                    <i class="fa fa-check float-left"></i>
                    <div class="text-box">
                        <h4><?php echo get_phrase('expert_instruction'); ?></h4>
                        <p><?php echo get_phrase('find_the_right_course_for_you'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                    <i class="fa fa-clock float-left"></i>
                    <div class="text-box">
                        <h4><?php echo get_phrase('lifetime_access'); ?></h4>
                        <p><?php echo get_phrase('learn_on_your_schedule'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Courses -->
<section class="course-carousel-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h2 class="course-carousel-title"><?php echo get_phrase('top').' 10 '.get_phrase('latest_courses'); ?></h2>
                <div class="course-carousel">
                    <?php
                    $latest_courses = $this->crud_model->get_latest_10_course();
                    foreach ($latest_courses as $latest_course):?>
                    <div class="course-box-wrap">
                        <a href="<?php echo site_url('home/course/'.slugify($latest_course['title']).'/'.$latest_course['id']); ?>">
                            <div class="course-box">
                                <div class="course-image">
                                    <img src="<?php echo $this->crud_model->get_course_thumbnail_url($latest_course['id']); ?>" alt="" class="img-fluid">
                                </div>
                                <div class="course-details">
                                    <h5 class="title"><?php echo $latest_course['title']; ?></h5>
                                    <p class="instructors">
                                        <?php
                                        $instructor_details = $this->user_model->get_all_user($latest_course['user_id'])->row_array();
                                        echo $instructor_details['first_name'].' '.$instructor_details['last_name']; ?>
                                    </p>
                                    <div class="rating">
                                        <?php
                                        $total_rating =  $this->crud_model->get_ratings('course', $latest_course['id'], true)->row()->rating;
                                        $number_of_ratings = $this->crud_model->get_ratings('course', $latest_course['id'])->num_rows();
                                        if ($number_of_ratings > 0) {
                                            $average_ceil_rating = ceil($total_rating / $number_of_ratings);
                                        }else {
                                            $average_ceil_rating = 0;
                                        }

                                        for($i = 1; $i < 6; $i++):?>
                                        <?php if ($i <= $average_ceil_rating): ?>
                                            <i class="fas fa-star filled"></i>
                                        <?php else: ?>
                                            <i class="fas fa-star"></i>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                    <span class="d-inline-block average-rating"><?php echo $average_ceil_rating; ?></span>
                                </div>
                                <?php if ($latest_course['is_free_course'] == 1): ?>
                                    <p class="price text-right"><?php echo get_phrase('free'); ?></p>
                                <?php else: ?>
                                    <?php if ($latest_course['discount_flag'] == 1): ?>
                                        <p class="price text-right"><small><?php echo currency($latest_course['price']); ?></small><?php echo currency($latest_course['discounted_price']); ?></p>
                                    <?php else: ?>
                                        <p class="price text-right"><?php echo currency($latest_course['price']); ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>
</section>

<!-- Top Courses -->
<section class="course-carousel-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h2 class="course-carousel-title"><?php echo get_phrase('top_courses'); ?></h2>
                <div class="course-carousel">
                    <?php $top_courses = $this->crud_model->get_top_courses()->result_array();
                    $cart_items = $this->session->userdata('cart_items');
                    foreach ($top_courses as $top_course):?>
                    <div class="course-box-wrap">
                        <a href="<?php echo site_url('home/course/'.slugify($top_course['title']).'/'.$top_course['id']); ?>" class="has-popover">
                            <div class="course-box">
                                <!-- <div class="course-badge position best-seller">Best seller</div> -->
                                <div class="course-image">
                                    <img src="<?php echo $this->crud_model->get_course_thumbnail_url($top_course['id']); ?>" alt="" class="img-fluid">
                                </div>
                                <div class="course-details">
                                    <h5 class="title"><?php echo $top_course['title']; ?></h5>
                                    <p class="instructors"><?php echo $top_course['short_description']; ?></p>
                                    <div class="rating">
                                        <?php
                                        $total_rating =  $this->crud_model->get_ratings('course', $top_course['id'], true)->row()->rating;
                                        $number_of_ratings = $this->crud_model->get_ratings('course', $top_course['id'])->num_rows();
                                        if ($number_of_ratings > 0) {
                                            $average_ceil_rating = ceil($total_rating / $number_of_ratings);
                                        }else {
                                            $average_ceil_rating = 0;
                                        }

                                        for($i = 1; $i < 6; $i++):?>
                                        <?php if ($i <= $average_ceil_rating): ?>
                                            <i class="fas fa-star filled"></i>
                                        <?php else: ?>
                                            <i class="fas fa-star"></i>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                    <span class="d-inline-block average-rating"><?php echo $average_ceil_rating; ?></span>
                                </div>
                                <?php if ($top_course['is_free_course'] == 1): ?>
                                    <p class="price text-right"><?php echo get_phrase('free'); ?></p>
                                <?php else: ?>
                                    <?php if ($top_course['discount_flag'] == 1): ?>
                                        <p class="price text-right"><small><?php echo currency($top_course['price']); ?></small><?php echo currency($top_course['discounted_price']); ?></p>
                                    <?php else: ?>
                                        <p class="price text-right"><?php echo currency($top_course['price']); ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>

                    <div class="webui-popover-content">
                        <div class="course-popover-content">
                            <?php if ($top_course['last_modified'] == ""): ?>
                                <div class="last-updated"><?php echo get_phrase('last_updater').' '.date('D, d-M-Y', $top_course['date_added']); ?></div>
                            <?php else: ?>
                                <div class="last-updated"><?php echo get_phrase('last_updater').' '.date('D, d-M-Y', $top_course['last_modified']); ?></div>
                            <?php endif; ?>

                            <div class="course-title">
                                <a href="<?php echo site_url('home/course/'.slugify($top_course['title']).'/'.$top_course['id']); ?>"><?php echo $top_course['title']; ?></a>
                            </div>
                            <div class="course-meta">
                                <span class=""><i class="fas fa-play-circle"></i>
                                    <?php echo $this->crud_model->get_lessons('course', $top_course['id'])->num_rows().' '.get_phrase('lessons'); ?>
                                </span>
                                <span class=""><i class="far fa-clock"></i>
                                    <?php
                                    $total_duration = 0;
                                    $lessons = $this->crud_model->get_lessons('course', $top_course['id'])->result_array();
                                    foreach ($lessons as $lesson) {
                                        if ($lesson['lesson_type'] != "other") {
                                            $time_array = explode(':', $lesson['duration']);
                                            $hour_to_seconds = $time_array[0] * 60 * 60;
                                            $minute_to_seconds = $time_array[1] * 60;
                                            $seconds = $time_array[2];
                                            $total_duration += $hour_to_seconds + $minute_to_seconds + $seconds;
                                        }
                                    }
                                    echo gmdate("H:i:s", $total_duration).' '.get_phrase('hours');
                                    ?>
                                </span>
                                <span class=""><i class="fas fa-closed-captioning"></i><?php echo ucfirst($top_course['language']); ?></span>
                            </div>
                            <div class="course-subtitle"><?php echo $top_course['short_description']; ?></div>
                            <div class="what-will-learn">
                                <ul>
                                    <?php
                                    $outcomes = json_decode($top_course['outcomes']);
                                    foreach ($outcomes as $outcome):?>
                                    <li><?php echo $outcome; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="popover-btns">
                            <?php if (is_purchased($top_course['id'])): ?>
                                <div class="purchased">
                                    <a href="<?php echo site_url('home/my_courses'); ?>"><?php echo get_phrase('already_purchased'); ?></a>
                                </div>
                            <?php else: ?>
                                <?php if ($top_course['is_free_course'] == 1):
                                    if($this->session->userdata('user_login') != 1) {
                                        $url = "#";
                                    }else {
                                        $url = site_url('home/get_enrolled_to_free_course/'.$top_course['id']);
                                    }?>
                                    <a href="<?php echo $url; ?>" class="btn add-to-cart-btn big-cart-button" onclick="handleEnrolledButton()"><?php echo get_phrase('get_enrolled'); ?></a>
                                <?php else: ?>
                                    <button type="button" class="btn add-to-cart-btn <?php if(in_array($top_course['id'], $cart_items)) echo 'addedToCart'; ?> big-cart-button-<?php echo $top_course['id'];?>" id = "<?php echo $top_course['id']; ?>" onclick="handleCartItems(this)">
                                        <?php
                                        if(in_array($top_course['id'], $cart_items))
                                        echo get_phrase('added_to_cart');
                                        else
                                        echo get_phrase('add_to_cart');
                                        ?>
                                    </button>
                                    <button type="button" class="wishlist-btn <?php if($this->crud_model->is_added_to_wishlist($top_course['id'])) echo 'active'; ?>" title="Add to wishlist" onclick="handleWishList(this)" id = "<?php echo $top_course['id']; ?>"><i class="fas fa-heart"></i></button>
                                <?php endif; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
</div>
</section>

<!-- Teacher's Section
<section class="teacher-are">
    <div class="glarry">
        <h3> They are Our Course Teacher </h3>
<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="img/img (1).JPG" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="img/img (1).JPG" alt="Forest" width="650" height="450">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="img/img (1).JPG" alt="Northern Lights" width="650" height="450">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_Teacher.jpg">
    <img src="img/img (1).JPG" alt="Mountains"width="650" height="450">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_Teacher.jpg">
    <img src="img/img (1).JPG" alt="Mountains" width="650" height="450">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_Teacher.jpg">
    <img src="img/img (1).JPG" alt="Mountains"width="650" height="450">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_Teacher.jpg">
    <img src="img/img (1).JPG" alt="Mountains" width="650" height="450">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>


 </div>                
</section> -->

<!-- New section-->
<!--? About Area-2 Start -->
<section class="about-area2 fix pb-padding">
            <div class="support-wrapper align-items-center justify-content-center">
                <div class="right-content2">
                    <!-- img -->
                    <div class="right-img">
                        <img src="img/gallery/about3.png" alt="">
                    </div>
                </div>
                <div class="left-content2 align-items-center justify-content-center">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-20 ">
                        <div class="front-text">
                            <h2>Take the next step toward your personal and professional goals with us.</h2>
                            <p>Contact with us from Freelanicng Career Institute.</p>
                            <a href="http://localhost/E_Learning/home/sign_up" class="btn">Join now for Free</a>
                        </div>
                    </div>
                </div>
            </div>
</section>

<script type="text/javascript">
function handleWishList(elem) {

    $.ajax({
        url: '<?php echo site_url('home/handleWishList');?>',
        type : 'POST',
        data : {course_id : elem.id},
        success: function(response)
        {
            if (!response) {
                window.location.replace("<?php echo site_url('login'); ?>");
            }else {
                if ($(elem).hasClass('active')) {
                    $(elem).removeClass('active')
                }else {
                    $(elem).addClass('active')
                }
                $('#wishlist_items').html(response);
            }
        }
    });
}

function handleCartItems(elem) {
    url1 = '<?php echo site_url('home/handleCartItems');?>';
    url2 = '<?php echo site_url('home/refreshWishList');?>';
    $.ajax({
        url: url1,
        type : 'POST',
        data : {course_id : elem.id},
        success: function(response)
        {
            $('#cart_items').html(response);
            if ($(elem).hasClass('addedToCart')) {
                $('.big-cart-button-'+elem.id).removeClass('addedToCart')
                $('.big-cart-button-'+elem.id).text("<?php echo get_phrase('add_to_cart'); ?>");
            }else {
                $('.big-cart-button-'+elem.id).addClass('addedToCart')
                $('.big-cart-button-'+elem.id).text("<?php echo get_phrase('added_to_cart'); ?>");
            }
            $.ajax({
                url: url2,
                type : 'POST',
                success: function(response)
                {
                    $('#wishlist_items').html(response);
                }
            });
        }
    });
}

function handleEnrolledButton() {
    $.ajax({
        url: '<?php echo site_url('home/isLoggedIn');?>',
        success: function(response)
        {
            if (!response) {
                window.location.replace("<?php echo site_url('login'); ?>");
            }
        }
    });
}
</script>
