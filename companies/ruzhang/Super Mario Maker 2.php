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

				<h1>Ru Zhang<span></span></h1>
				<p>Nintendo | Gamer</p>

			</div>

		</div> <!-- /row -->

   </section> <!-- /page-title -->

   <!-- Content
   ================================================== -->
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
                     <li>Nintendo Switch</li>
                     <span class="meta-sep">•</span>
                     <li>
                        <a rel="skills tag" title="" href="#">Top 10 rated games</a>
                     </li>
                  </ul>
               </div>

            </header>

            <div class="entry-content-media">
               <div class="post-thumb">
                  <img src="<?php echo $path;?>images/ruzhang/<?php echo basename(__FILE__, '.php') ?>.png">
               </div>
            </div>

            <div class="experiences">
               <!-- <p class="lead"> -->
               <h5>Description</h5>
               <p>
Super Mario Maker 2 is a side-scrolling platform game and game creation system developed and published by Nintendo for the Nintendo Switch. It is the sequel to Super Mario Maker, and it was released worldwide on June 28, 2019.               </p>

            </div>

         </div> <!-- /entry -->

      </div> <!-- /portfolio-content -->
      <?php
       $include_name = basename(__FILE__, '.php');
       include "$path/comment_rating.php"
      ?>
   </section>

   <!-- Footer
   ================================================== -->
   <?php include "$path/productFooter.php";?>
</body>

</html>
