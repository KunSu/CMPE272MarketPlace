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
                  <img src="<?php echo $path;?>images/junyanwang/<?php echo basename(__FILE__, '.php') ?>.jpg">
               </div> 
            </div> 		

            <div class="experiences">
               <!-- <p class="lead"> -->
               <h5>Description</h5>
               <p>
                  Join Doc McStuffins, Vampirina, Timon and Mickey for a high-energy musical celebration. Show off your moves, catch bubbles and laugh yourself silly at a fun-filled party featuring favorite Disney Junior Characters and music. Get in the groove on the dance floor as DJ Deejay gets the celebration started—playing songs you know from the shows you love. Host Finn Fiesta welcomes Disney Junior pals to this star-studded event, and you get to say hello by “spinning” them in: ready, set, twirl! Now, join Doc McStuffins and cure your dance fever during a fun-filled, feel-good musical number. Fill the room with “Zuka Zama Zum Zum” alongside Timon from The Lion Guard. And get down and boo-gie with everyone’s favorite vampire girl, Vampirina. While you shake it up, special guest Mickey Mouse from Mickey and the Roadster Racers is driving in from Hot Dog Hills to join the excitement. The suspense builds as you await his arrival. Can he make it in time to be part of the festivities? Come find out… at a party packed with interactive fun and surprises for kids of all ages!
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