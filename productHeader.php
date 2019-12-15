<?php $path = "../../";

?>

<div id="top"></div>
<div id="preloader">
    <div id="status">
        <img src="images/loader.gif" height="60" width="60" alt="">
        <div class="loader">Loading...</div>
    </div>
</div>

<header id="main-header">

<div class="row header-inner">

        <div class="logo">
            <a href="<?php echo $path;?>index.php">Puremedia.</a>
        </div>

        <nav id="nav-wrap">

            <a class="mobile-btn" href="<?php echo $path;?>#nav-wrap" title="Show navigation">
            <span class='menu-text'>Show Menu</span>
            <span class="menu-icon"></span>
            </a>
        <a class="mobile-btn" href="<?php echo $path;?>#" title="Hide navigation">
            <span class='menu-text'>Hide Menu</span>
            <span class="menu-icon"></span>
        </a>

            <ul id="nav" class="nav">
            <li><a href="<?php echo $path;?>index.php#hero">Home.</a></li>
                <li class="current"><a href="<?php echo $path;?>index.php#portfolio">Works.</a></li>
            <li><a href="<?php echo $path;?>index.php#services">Services.</a></li>
            <li><a href="<?php echo $path;?>index.php#about">About.</a></li>
            <li><a href="<?php echo $path;?>index.php#journal">Blog.</a></li>
            <li><a href="<?php echo $path;?>index.php#contact">Contact.</a></li>
            <li><a href="<?php echo $path;?>login.php">Login.</a></li>
            <li><a href="<?php echo $path;?>histories.php">Histories.</a></li>
            </ul> 

        </nav> <!-- /nav-wrap -->

    </div> <!-- /header-inner -->

</header>
