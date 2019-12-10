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
    <div class="post-thumb">
    <img with="400" height="400" src="<?php echo $path;?>images/lijuan/6.jpg">
    </div>
    </div>
    <div class="experiences">
    <h5>Description</h5>
    <p>
    Bubble tea, also called pearl tea or Boba, is a drink which comes from Taichung, Taiwan. It is made by mixing black tea with non-dairy creamer or milk and adding round "pearl" tapioca. There are many flavors other than the original one. Green tea can be used instead of black tea. Extra items such as honey, coffee or cocoa can be added. Pudding or coconut cubes can be used instead of pearl tapioca.

    When it was first invented, not many people were interested in it. But after a bubble tea maker was interviewed on a Japanese TV program, it became popular among people of all ages. The popularity of bubble tea can be seen not only in Taiwan but also in other countries such as South Korea, Japan, Hong Kong, China, Southeast Asia, Australia, Canada and the USA.

    Bubble tea has now arrived in England and the rest of Europe.
    </P>
    </div>
    </section>
<?php
    include "$path/productFooter.php";?>
</body>

</html>
