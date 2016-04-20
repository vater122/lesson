<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="true" name="mssmarttagspreventparsing" />
    <meta http-equiv="imagetoolbar" content="no" />
    <title>Новостной Блог</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/png">
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" />

    <!-- IE fixes -->
    <!--[if IE 7]>
    <style type="text/css">
        #logo {top:50px;}
        #menu {margin:50px 0 0 500px;}
    </style>
    <![endif]-->
    <!--[if lte IE 6]>
    <style type="text/css">
        #hdl {margin:0px 0 0 250px;}
        #logo {top:50px;}
        #menu {margin:50px 0 0 500px;}
    </style>
    <script src="/template/js/DD_belatedPNG_0.0.7a-min.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('#logo, .mh, .mw, .mt, .mi, .rss_twitt, .rss, #TwitterCounter, .avatar_frame, .pop_posts');
    </script>
    <![endif]-->

    <script type="text/javascript">
        /*
         * Simple JS function for setting the search value
         */
        function clS(t){
            var srch = document.getElementById('s'), val = srch.value.toString().toLowerCase(), re = /^\s+$/;
            if(t) {
                if(val == 'Search' || val == 'search'){
                    srch.value = '';
                }
            } else {
                if(val == 'Search' || val == 'search' || val == '' || re.test(val)) {
                    srch.value = 'Search';
                }
            }
        }
    </script>


</head>

<body>
<!-- Wrap Div -->
<div id="wrap">

    <!-- Header -->
    <div id="hdr">

        <!-- Top Menu -->
        <div id="hdl">
            <a href="#" class="hl">About Us</a>
            <a href="#" class="hl">Contact Us</a>
            <a href="#" class="hl">Login</a>
        </div>

        <!-- Search form -->
        <form id="search_form" method="get" action="">
            <input class="search_field" type="text" value="Search" onfocus="clS(1);" onblur="clS(0);"  name="s" id="s" />
            <input class="search_button" type="submit"  value="" id="searchsubmit" />

        </form>

        <!-- Logo -->
        <div id="logo">
            <a href="/index.php">qwer</a>
        </div>

        <!-- Main Menu -->
        <div id="menu">
            <a class="mh" href="/index.php">Home</a>
            <a class="mt" href="#">Tutuorials</a>
            <a class="mw" href="#">Wallpapers</a>
            <a class="mi" href="#">Inspiration</a>
        </div>

    </div>

    <!-- Container -->
    <div id="cnt">

        <!-- Left Container -->
        <div id="lcnt">
            <?php foreach($item as $row): ?>
            <!-- Post -->
            <div class="post">

                <!-- Post Details -->
                <div class="post_inf">

                    <span><?php echo $row['date']; ?></span><br />
                    <span class="posn"><?php echo $row['author']; ?></span><br />
                    <span class="posc">3 Comments</span>

                </div>

                <!-- Post Title - Permalink -->
                <h1>
                    <a href="#"><?php echo $row['title']; ?></a>
                </h1>

                <!-- Post Content -->
                <img src="/template/images/art_pic1.jpg" alt="art_pic1" />

                <p><?php echo $row['content']; ?></p>

                <br>
                <div>
                    <strong>Редактировать новость</strong>
                    <form action="/index.php?ctrl=Admin&act=update" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
                        <p><input type="text" name="title" value="">  Заголовок</p>
                        <p><input type="text" name="content" value="">  Новость</p>
                        <p><input type="submit" value="Редактировать"></p>
                    </form>
                </div>
                <div>
                    <form action="/index.php?ctrl=Admin&act=delete&id=<?php echo $row['id']; ?>" method="post">
                        <p><input type="submit" value="Удалить"/></p>
                    </form>
                </div>
                <br>
            </div>
            <?php endforeach; ?>

            <h2>
                <a href="#">1 comment</a>
            </h2>

            <!-- Comments -->
            <div class="comments">

                <!-- Comment -->
                <div class="comment">

                    <div class="comm_hdr">
                        <p>1. Persia Emily <span> | February 20, 2009 04:33</span></p>
                    </div>

                    <div class="avat">
                        <img src="/template/images/avatar.jpg" alt="avatar" />
                        <img src="/template/images/avatar_frame.png" alt="avatar_frame" class="avatar_frame" />
                    </div>

                    <p class="comm_txt">
                        How excited I am! Coquette Part4 comes out!<br />
                        I love Dryicons' products very much! <br />
                        <br />
                        They're all good!
                    </p>

                </div>


            </div>

            <h2>Post your comments</h2>

            <!-- Comment Form -->
            <form id="cmnt_frm" method="post" action="">
                <p><input type="text" name="author" size="22" tabindex="1" id="author"/><label>Name <span>(required)</span></label></p>
                <p><input type="text" name="email" size="22" tabindex="2" id="email"/><label>Mail <span>(will not be published) (required)</span></label></p>
                <p><input type="text" name="url" size="22" tabindex="3" id="url"/><label>Website</label></p>
                <p>
                    <textarea name="comment" cols="65" rows="10" tabindex="4" id="comment"></textarea>
                </p>
                <p>
                    <input type="submit" name="submit" value="Post comment" tabindex="5" id="submit"/>
                </p>

            </form>

        </div>

        <!-- Right Container -->
        <div id="rcnt">
            <div class="rss_twitt">
                <!-- RSS Box -->
                <a href="http://feeds.feedburner.com/DryIconsFreeGraphics" class="rss"><img height="26" width="88" alt="" style="border: 0pt none ;" src="http://feeds.feedburner.com/~fc/DryIconsFreeGraphics?bg=DEDEDC&amp;fg=444444&amp;anim=0"/></a>
                <!-- Twitter Counter Box -->
                <script type="text/javascript" language="JavaScript" src="http://twittercounter.com/embed/dryicons/444444/DEDEDE"></script>
            </div>

            <!-- Sponsored Ads -->
            <h2>Sponsored Ads</h2>

            <div class="l_lnk">

                <a href="#"><img src="/template/images/sponsor_ads1.jpg" alt="spon_ad_1" /></a>
                <a href="#"><img src="/template/images/sponsor_ads2.jpg" alt="spon_ad_2" /></a>
                <a href="#"><img src="/template/images/sponsor_ads3.jpg" alt="spon_ad_3" /></a>
                <div>
                    <a target="_blank" href="http://dryicons.com/advertise">Advertise Here</a>
                </div>

            </div>

            <!-- Popular Wallpapers -->
            <h2>Popular Wallpapers</h2>

            <a class="wall" href="#"><img src="/template/images/pop_wall1.jpg" alt="pop_wall_1" /></a>
            <a class="wall" href="#"><img src="/template/images/pop_wall2.jpg" alt="pop_wall_2" /></a>

            <!-- Popular Posts -->
            <h2>Popular Posts</h2>

            <a class="pop_posts" href="#">Logo Design Process Tutorial</a>
            <a class="pop_posts" href="#">Great use of pop music in great films</a>
            <a class="pop_posts" href="#">Icon design tutorial: How to make a Calendar icon</a>
            <a class="pop_posts" href="#">1st Anniversary and Graphics Giveaway Winners</a>
            <a class="pop_posts" href="#">Smashing Magazine and DryIcons collaboration</a>

        </div>

        <br style="clear: both;"/>

    </div>

</div>

<!-- Footer -->
<div id="foo">

    <!-- Footer Container -->
    <div id="foo_d">

        <!-- Footer Menu -->
        <div id="foo_menu">

            <a href="#">Home</a><span>.</span>
            <a href="#">Tutorials</a><span>.</span>
            <a href="#">Wallpapers</a><span>.</span>
            <a href="#">Inspiration</a><span>.</span>
            <a href="#">About Us</a><span>.</span>
            <a href="#">Contact Us</a>

        </div>
        <!-- DryIcons credit: Do not remove the following code if you are using this template under the DryIcons Free License Terms of Use
         If you'd like to use this theme without the obligatory back-link to http://dryicons.com/ please
         consider using it under the DryIcons Commercial License Terms
         For details see http://dryicons.com/terms/ -->

        <p>&copy;2009 blogair. All rights reserved. Template and Icons by <a target="_blank" href="http://dryicons.com">DryIcons</a></p>

    </div>

</div>

</body>

</html>

