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

				<h1>Zijian Guan<span></span></h1>
				<p>Software Engineer</p>

			</div>

		</div> <!-- /row -->

   </section> <!-- /page-title -->

   <!-- Content
   ================================================== -->
   <section id="content">
      <?php
         get_cookies();
         echo "<br>" ;
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
                     <li>C4 WebService Company</li>
                     <span class="meta-sep">•</span>
                     <li>
                        <a rel="skills tag" title="" href="#">Top 10 most popular services</a>
                     </li>
                  </ul>
               </div>

            </header>

            <div class="entry-content-media">
               <div class="post-thumb" style="max-width: 500px;margin: auto;">
                  <img src="<?php echo $path;?>images/zijian/<?php echo basename(__FILE__, '.php') ?>.png">
               </div>
            </div>

            <div class="experiences">
               <!-- <p class="lead"> -->
               <h5>Description</h5>
               <p>
                  C4 company will provide you the Word Press services! You just need to tell us what you want to do and we will handle the rest of the jobs!
               </p>

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
