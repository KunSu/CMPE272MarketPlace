<?php 
   $path = "../../";
   require_once "$path/cookies.php";
   require_once "$path/productsViewDB.php";
   set_cookies(basename(__FILE__, '.php'));
   add_product_view_count(basename(__FILE__, '.php'));
   update_view_count_productDB(basename(__FILE__, '.php')); 
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
         echo '<aside class="product">';
         echo "<p>Last five most visited pages within One company</p>";
         get_product_view_count();
         echo "<p>Last five most visited pages from all</p>";
         get_top_five();
         echo "</aside>";
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
    <div class="post-thumb" style="max-width: 500px;margin: auto;">
<img with="400" height="400" src="<?php echo $path;?>images/lijuan/5.jpg">
    </div>
</div>
<div>
    The Chinese name of "mango pomelo sago" (楊枝甘露) comes from the concept of dropping manna from a willow branch which makes people feel refreshed when they taste it. It was also the secret tool of the Guanyin according to the traditional Chinese mythology Journey to the West.
This dessert was said to be invented by Lei Garden in 1984 when it decided to set up its first branch in Singapore. Given that it wanted to create a new dessert which is in line with the taste of Singaporeans.Wong Wing-chee, the former head chef of the Lei Garden, invented mango pomelo sago as a new dish of the Lei Garden. Due to the tropical rainforest climate in Southeast Asia, he intentionally invented this dessert to make people feel cooler after having a taste of it. Inspired by the local ingredients in Singapore, Wong decided to make a dessert featuring mango, pomelo and sago.
However, there is another version of the origin saying that this dessert was invented by the Lei Garden in order to make good use of the leftover pomelo after making Lo Hei in Chinese New Year.
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
