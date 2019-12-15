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

				<h1>Taylor Yang<span></span></h1>
				<p>Software Engineer</p>

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
                     <li>IT service</li>
                     <span class="meta-sep">•</span>								
                     <li>
                        <a rel="skills tag" title="" href="#">Top 10 most used services</a>
                     </li>
                  </ul>
               </div> 
                     
            </header>

            <div class="entry-content-media">
               <div class="post-thumb" style="max-width: 500px;margin: auto;">
                  <img src="<?php echo $path;?>images/tyang/<?php echo basename(__FILE__, '.php') ?>.jpg">
               </div> 
            </div> 		

            <div class="experiences">
               <!-- <p class="lead"> -->
               <h5>Description</h5>
               <p>
                    We examine what organizations are doing to stay relevant and competitive in this 
                    fast-paced world, and which ones are doing it best. We then strategize using smart tools 
                    and global resources in order to understand the implications of every choice our clients 
                    can make. Get in touch to learn more about how this service can help you.
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