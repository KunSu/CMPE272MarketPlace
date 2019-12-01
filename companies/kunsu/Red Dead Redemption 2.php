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

				<h1>Kun Su<span></span></h1>
				<p>Software Engineer | Puzzle Solver | Game Maker</p>

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
                     <li>PlayStation 4</li>
                     <span class="meta-sep">•</span>								
                     <li>
                        <a rel="skills tag" title="" href="#">Top 10 Games of All Time</a>
                     </li>
                  </ul>
               </div> 
                     
                  </header>

            <div class="entry-content-media">
               <div class="post-thumb">
                  <img src="<?php echo $path;?>images/kunsu/<?php echo basename(__FILE__, '.php') ?>.jpg">
               </div> 
            </div> 		

            <div class="experiences">
               <!-- <p class="lead"> -->
               <h5>Description</h5>
               <p>
               The highest rated game on PlayStation 4*
America, 1899. The end of the wild west era has begun as lawmen hunt down the last remaining outlaw gangs. Those who will not surrender or succumb are killed.
After a robbery goes badly wrong in the western town of Blackwater, Arthur Morgan and the Van der Linde gang are forced to flee. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive. As deepening internal divisions threaten to tear the gang apart, Arthur must make a choice between his own ideals and loyalty to the gang who raised him.
From the creators of Grand Theft Auto V and Red Dead Redemption, Red Dead Redemption 2 is an epic tale of life in America at the dawn of the modern age.
With the gameplay of Red Dead Redemption 2 as its foundation, Red Dead Online transforms the vast and deeply detailed landscapes, cities, towns and habitats of Red Dead Redemption 2 into a new, living online world ready to be shared by multiple players. Create and customize your character, tailor your abilities to suit your play style and head out into a new frontier full of things to experience.
*Sourced by Metacritic
This item cannot be returned or refunded, please visit to learn more.
                </p>

               <!-- <p>Lorem ipsum Nisi enim est proident est magna occaecat dolore proident eu ex sunt consectetur consectetur dolore enim nisi exercitation adipisicing magna culpa commodo deserunt ut do Ut occaecat. Lorem ipsum Veniam consequat quis aliquip dolore minim ex labore dolor Excepteur Duis velit in officia Excepteur officia officia officia cillum ut elit in fugiat incididunt ea ad Ut ut ea ea dolor ex dolor eu magna voluptate irure consectetur.</p> -->
            </div>

            			 
         </div> <!-- /entry -->	      

      </div> <!-- /portfolio-content -->
   </section>

   <!-- Footer
   ================================================== -->
   <?php include "$path/productFooter.php";?>
</body>

</html>