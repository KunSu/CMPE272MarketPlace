<?php
   $path = "../../";
   require_once "$path/cookies.php";
   set_cookies(basename(__FILE__, '.php'));
   add_product_view_count(basename(__FILE__, '.php'));
?>

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->

<!--- Basic Head
================================================== -->
<?php include "$path/productHead.php"; ?>

<body>

   <!-- Header
   =================================================== -->
   <?php include "$path/productHeader.php"; ?>

   <!-- Page Title
   ================================================== -->
   <section id="page-title">	
   	  
		<div class="row">

			<div class="twelve columns">

				<h1>Lijuan Hou<span></span></h1>
				<p>Software Engineer | Baby feeder</p>

			</div>			    

		</div> <!-- /row -->	   

   </section> <!-- /page-title -->
       


<section id="content">
<?php 
    get_cookies(); 
echo "<br>";
get_product_view_count();
?>

<div class="row portfolio-content">

    <div class="entry tab-whole nine columns centered">

    <header class="entry-header">

    <h1 class="eåntry-title">
<?php echo basename(__FILE__, '.php') ?>
    </h1> 				 

    <div class="entry-meta">
    <ul>
    <li>Kiddos Kingdom</li>
    <span class="meta-sep">•</span>								
    <li>
    <a rel="skills tag" title="" href="#">Top 10 Popular Services</a>
    </li>
    </ul>
    </div> 

    </header>
<div class="entry-content-media">
    <div class="post-thumb">
<img with="400" height="400" src="<?php echo $path;?>images/lijuan/8.jpg">
    </div>
</div>
<div>
    Jin Xuan (Chinese: 金萱; pinyin: jīn xuān; literally: 'Golden Daylily'; pronounced [tɕín.ɕɥɛ́n]) is a variety of oolong tea developed in 1980. The tea is also known as #12 or as "Milk Oolong" (Nai Xiang). It originates from Taiwan. The taste is light, creamy, and flowery and sometimes compared to milk. This tea variety can be grown at higher altitudes, and the yield is about 20% higher compared to traditional tea varieties. These circumstances made it become one of the most popular varieties among tea farmers in Taiwan and Thailand. While genuine Jin Xuan naturally tastes milky, some producers produce artificial Jin Xuan through additives.
</div>
<?php
       $include_name = basename(__FILE__, '.php');
       include "$path/comment_rating.php"
      ?>
    </section>
<?php
    include "$path/productFooter.php";?>
</body>

</html>
