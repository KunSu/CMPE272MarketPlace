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
The Legend of Zelda: Breath of the Wild is an action-adventure game developed and published by Nintendo, released for the Nintendo Switch and Wii U consoles on March 3, 2017.               </p>

            </div>

         </div> <!-- /entry -->

      </div> <!-- /portfolio-content -->
   </section>

   <!-- Footer
   ================================================== -->
   <?php include "$path/productFooter.php";?>
</body>

</html>