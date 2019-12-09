<?php
   $path = "../../";
   require_once "$path/cookies.php";
   set_cookies(basename(__FILE__, '.php'));
   add_product_view_count(basename(__FILE__, '.php'));
?>

<?php
  $path = "../../";
   require_once "$path/config.php";
   $sql = "SELECT * FROM product";
   $result = mysqli_query($db_connection, $sql);

   // function get_product($db_connection)
   // {
   //    $sql = "SELECT id FROM product WHERE name = '"basename(__FILE__, '.php')"'"; 
   //    $result = mysqli_query($db_connection, $sql);
   //    return $result;
   // }
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
                     <li>C4 WebService Company</li>
                     <span class="meta-sep">•</span>								
                     <li>
                        <a rel="skills tag" title="" href="#">Top 10 most popular services</a>
                     </li>
                  </ul>
               </div> 
                     
            </header>

            <div class="entry-content-media">
               <div class="post-thumb">
                  <img src="<?php echo $path;?>images/zijian/<?php echo basename(__FILE__, '.php') ?>.png">
               </div> 
            </div> 		

            <div class="experiences">
               <!-- <p class="lead"> -->
               <h5>Description</h5>
               <p>
                  C4 company will provide you the best User Management System ever! You can specify those users which are allowed to get into your website, and those you do not allow.
               </p>
            </div>
            			 
         </div> <!-- /entry -->	      

      </div> <!-- /portfolio-content -->


      <div class = "comment">
         Leave your comment and rating below!
         
         <div class = "comment-rateScore">Rating: x/5</div>
         <div class = "comment-rating">
            Rate this product:
            <?php foreach(range(1,5) as $rating): ?> 
               <a href="../../rate.php?name=<?php echo basename(__FILE__, '.php')?>&rating=<?php echo $rating?>"><?php echo $rating;?></a>
            <?php endforeach; ?>
         </div>

         <?php include "$path/displayRatingReviews.php";?>
      </div>


   </section>

   <!-- Footer
   ================================================== -->
   <?php include "$path/productFooter.php";?>
</body>

</html>