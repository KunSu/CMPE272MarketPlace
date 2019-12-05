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

				<h1>Lijuan Hou<span></span></h1>
				<p>Software Engineer | Baby feeder</p>

			</div>			    

		</div> <!-- /row -->	   

   </section> <!-- /page-title -->
       


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
<img with="400" height="400" src="<?php echo $path;?>images/lijuan/1.jpg">
    </div>
</div>
<div>
    Hong Kong-style milk tea is a tea drink made from black tea and milk (usually evaporated milk or condensed milk). It is usually part of lunch in Hong Kong tea culture. Although originating from Hong Kong, it is found overseas in restaurants serving Hong Kong cuisine and Hong Kong-style western cuisine. In the show Top Eat 100 aired on 4 February 2012, Hong Kong-style milk tea is ranked number 4 in Hong Kong cuisines. Hong Kongers consume a total of 900 million glasses/cups a year. Hong Kong style milk tea is listed on the representative list of the Intangible Culture Heritage of Hong Kong in 2017 by Intangible Culture Heritage Office which under the Leisure and Culture Department.
</div>
<?php
    include "$path/productFooter.php";?>
</body>

</html>
