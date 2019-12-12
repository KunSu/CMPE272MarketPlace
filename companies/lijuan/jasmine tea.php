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
<img with="400" height="400" src="<?php echo $path;?>images/lijuan/10.jpg">
    </div>
</div>
<div>
Jasmine tea (Chinese: 茉莉花茶; pinyin: mòlìhuā chá or Chinese: 香片; pinyin: xiāng piàn) is tea scented with the aroma of jasmine blossoms. Typically, jasmine tea has green tea as the tea base; however, white tea and black tea are also used. The resulting flavour of jasmine tea is subtly sweet and highly fragrant. It is the most famous scented tea in China.

The jasmine plant is believed to have been introduced into China from eastern South Asia via India during the Han Dynasty (206 BC to 220 AD), and was being used to scent tea around the fifth century. However, jasmine tea did not become widespread until the Qing Dynasty (1644 to 1912 AD), when tea started to be exported in large quantities to the West. Nowadays, it's still a common drink served in tea shops around the world.

The jasmine plant is grown at high elevations in the mountains. Jasmine tea produced in the Chinese province of Fujian has the best reputation. Jasmine tea is also produced in the provinces of Hunan, Jiangsu, Jiangxi, Guangdong, Guangxi, and Zhejiang. Japan is also known for the production of jasmine tea, especially in Okinawa Prefecture, where it is called Sanpin-cha (さんぴん茶).

Modern biological studies have shown that drinking jasmine tea can have health and immunity benefits. Jasmine tea contains several different kinds of antioxidants that provide protection to the membranes of red blood cells; this added protection helps fend off free radical-induced oxidation of the red blood cells.

</div>
<?php
       $include_name = basename(__FILE__, '.php');
       include "$path/comment_rating.php"
      ?>
</section>
<?php
    include "$path/productFooter.php";?>
</body>

</html>
