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

            <h1>Junyan Wang<span></span></h1>
				<p>Software Engineer | Gourmet | Traveller</p>

			</div>			    

		</div> <!-- /row -->	   

   </section> <!-- /page-title -->

   <!-- Content
   ================================================== -->
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
                  <img src="<?php echo $path;?>images/junyanwang/<?php echo basename(__FILE__, '.php') ?>.jpg">
               </div> 
            </div> 		

            <div class="experiences">
               <!-- <p class="lead"> -->
               <h5>Description</h5>
               <p>
                  Beware of the Dark Side during a Character Experience with Darth Vader at an exclusive location for VIP members! Feared throughout the galaxy for his ruthlessness, his mastery of the Force choke, and, of course, his menacing helmet, Darth Vader awaits visitors of all ages at Star Wars Launch Bay. When your imperial entanglement is over, you’ll receive complimentary downloads of photos from your thrilling encounter. The imposing and mysterious Darth Vader leads the Galactic Empire using the power of the dark side. This infamous Sith Lord serves at the bidding of his master, Darth Sidious. Together, they rule the galaxy as master and apprentice.
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