<?php require_once('include/header.php'); ?>

<div class="wrapper sn_tt">
    <div class="page">
        <div class="main-container col1-layout gap">
            <div class="main">
                <div class="breadcrumbs">
                    <ul>
                        <li class="home">
                            <a href="images/" title="Go to Home Page">Home</a>
                            <span>/ </span>
                        </li>
                        <li class="blog">
                            <strong>News</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-main">
                    <div id="messages_product_view">
                    </div>
                    <div class="toolbar">
                        <div class="pager">
                            <p class="amount">
                                Items 1 to 10 of 11 total                    
                            </p>
                            <div class="limiter">
                                <label>Show</label>
                                <select onchange="setLocation(this.value)">
                                    <option value="images/news/?limit=10">
                                        10                
                                    </option>
                                </select>
                                per page        
                            </div>
                            <div class="pages">
                                <strong>Page:</strong>
                                <ol>
                                    <li class="current">1</li>
                                    <li><a href="images/news/?dir=desc&amp;order=created_time&amp;p=2">2</a></li>
                                    <li>
                                        <a class="next i-next" href="images/news/?dir=desc&amp;order=created_time&amp;p=2" title="Next">
                                        <img src="images/skin/frontend/base/default/images/pager_arrow_right.gif" alt="Next" class="v-middle">
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="sorter">
                            <div class="sort-by">
                                <label>Sort By</label>
                                <select onchange="setLocation(this.value)">
                                    <option value="images/news/?dir=asc&amp;order=created_time" selected="selected">
                                        Created At                
                                    </option>
                                    <option value="images/news/?dir=asc&amp;order=user">
                                        Added By                
                                    </option>
                                </select>
                                <a href="images/news/?dir=asc&amp;order=created_time" title="Set Ascending Direction"><img src="images/i_desc_arrow.png" alt="Set Ascending Direction" class="v-middle"></a>
                            </div>
                        </div>
                    </div>
                    <div class="blogwrapper">
                        <div class="postWrapper">
                            <div class="postimage">
                                <div class="post-featured-img"><img src="images/1576145542yoyotech-intel-blog-thumbnail.png" alt=""></div>
                            </div>
                            <div class="postTitle">
                                <h2><a href="images/news/upgrade-to-pc-gaming/">6 Reasons Why It’s Time To Upgrade &amp; Join The World Of PC Gaming</a></h2>
                                <h3>12/12/2019 9:49 AM</h3>
                            </div>
                            <div class="postContent std">
                                <div align="center" style="text-align: left;">&nbsp;It is the season to be jolly, the nights have drawn in and all you want to do is game (What’s new?!) but gone are the days of your parents paying for...</div>
                                <a class="aw-blog-read-more" href="images/news/upgrade-to-pc-gaming/">Read More</a>
                            </div>
                            <!--<div class="tags"><span>Tags:</span>
                                <ul class="tags">
                                            <li><a href="images/news/tag/pc/">pc</a></li>
                                            <li><a href="images/news/tag/+pc+gaming/"> pc gaming</a></li>
                                            <li><a href="images/news/tag/+yoyotech/"> yoyotech</a></li>
                                            <li><a href="images/news/tag/+streaming/"> streaming</a></li>
                                            <li><a href="images/news/tag/+youtube/"> youtube</a></li>
                                            <li><a href="images/news/tag/+pc+community/"> pc community</a></li>
                                            <li><a href="images/news/tag/+pc+master+race/"> pc master race</a></li>
                                            <li><a href="images/news/tag/+upgrade+pc/"> upgrade pc</a></li>
                                            <li><a href="images/news/tag/+graphics/"> graphics</a></li>
                                            <li><a href="images/news/tag/+upgrading+to+4K/"> upgrading to 4K</a></li>
                                            <li><a href="images/news/tag/+pc+mods/"> pc mods</a></li>
                                            <li><a href="images/news/tag/+FPS/"> FPS</a></li>
                                            <li><a href="images/news/tag/+60+FPS/"> 60 FPS</a></li>
                                            <li><a href="images/news/tag/+intel/"> intel</a></li>
                                            <li><a href="images/news/tag/+i5/"> i5</a></li>
                                            <li><a href="images/news/tag/+i7/"> i7</a></li>
                                            <li><a href="images/news/tag/+i9/"> i9</a></li>
                                            <li><a href="images/news/tag/+intel+gaming/"> intel gaming</a></li>
                                            <li><a href="images/news/tag/+intel+prcoessor/"> intel prcoessor</a></li>
                                            <li><a href="images/news/tag/+GAME/"> GAME</a></li>
                                    </ul></div>-->
                            <!--<div class="postDetails">
                                </div>-->
                        </div>
                        <div class="postWrapper">
                            <div class="postimage">
                                <div class="post-featured-img"><img src="images/1550761191x2-post-image.png" alt=""></div>
                            </div>
                            <div class="postTitle">
                                <h2><a href="images/news/warbird-x2-pcpro/">Warbird X2 Wins PC PRO Recommended</a></h2>
                                <h3>2/21/2019 2:59 PM</h3>
                            </div>
                            <div class="postContent std">
                                <p>Yoyotech Warbird X2 Wins the PC PRO Recommended award smashing the benchmarks PC Pro threw at the X2 scoring a 327 overall. Capable of handling 4K Gam...</p>
                                <a class="aw-blog-read-more" href="images/news/warbird-x2-pcpro/">Read More</a>
                            </div>
                            <!--<div class="tags"><span>Tags:</span>
                                <ul class="tags">
                                            <li><a href="images/news/tag/Warbird/">Warbird</a></li>
                                            <li><a href="images/news/tag/+X2/"> X2</a></li>
                                            <li><a href="images/news/tag/+PC+Pro/"> PC Pro</a></li>
                                            <li><a href="images/news/tag/+Recommended/"> Recommended</a></li>
                                    </ul></div>-->
                            <!--<div class="postDetails">
                                </div>-->
                        </div>
                        <div class="postWrapper">
                            <div class="postimage">
                                <div class="post-featured-img"><img src="images/1509104938n6-home-promo-award.jpg" alt=""></div>
                            </div>
                            <div class="postTitle">
                                <h2><a href="images/news/redback-n6-gpcoty/">Redback N6 Wins Gaming PC of the year!</a></h2>
                                <h3>10/27/2017 12:39 PM</h3>
                            </div>
                            <div class="postContent std">With Ryzen on the up and coming, our Redback N6 adds to the hype winning the PC PRO Gaming PC of the year award! Featuring a full temepered glass case...<a class="aw-blog-read-more" href="images/news/redback-n6-gpcoty/">Read More</a></div>
                            <!--<div class="tags"><span>Tags:</span>
                                <ul class="tags">
                                            <li><a href="images/news/tag/PC+PRO/">PC PRO</a></li>
                                            <li><a href="images/news/tag/Redback/">Redback</a></li>
                                    </ul></div>-->
                            <!--<div class="postDetails">
                                </div>-->
                        </div>
                        <div class="postWrapper">
                            <div class="postimage">
                                <div class="post-featured-img"><img src="images/1507220005n6ws-small.jpg" alt=""></div>
                            </div>
                            <div class="postTitle">
                                <h2><a href="images/news/redbackn6ws-pcpro/">Redback N6 WS Wins PC PRO Reccomended</a></h2>
                                <h3>10/5/2017 4:51 PM</h3>
                            </div>
                            <div class="postContent std">With one of the first ever AMD workstations featuring the latest Ryzen processors and the VEGA WX7100 professional workstation graphics the Redback N6...<a class="aw-blog-read-more" href="images/news/redbackn6ws-pcpro/">Read More</a></div>
                            <!--<div class="tags"><span>Tags:</span>
                                <ul class="tags">
                                            <li><a href="images/news/tag/Redback/">Redback</a></li>
                                            <li><a href="images/news/tag/PC+PRO/">PC PRO</a></li>
                                    </ul></div>-->
                            <!--<div class="postDetails">
                                </div>-->
                        </div>
                        <div class="postWrapper">
                            <div class="postimage">
                                <div class="post-featured-img"><img src="images/1506095461n5-home.jpg" alt=""></div>
                            </div>
                            <div class="postTitle">
                                <h2><a href="images/news/redbackn6-alist/">Redback N6 Wins PC PRO A-List Award</a></h2>
                                <h3>9/14/2017 1:44 PM</h3>
                            </div>
                            <div class="postContent std">With Ryzen on the up and coming, our Redback N6 adds to the hype winning the PC PRO A-List Award! Featuring a full temepered glass case to show off so...<a class="aw-blog-read-more" href="images/news/redbackn6-alist/">Read More</a></div>
                            <!--<div class="tags"><span>Tags:</span>
                                <ul class="tags">
                                            <li><a href="images/news/tag/Redback/">Redback</a></li>
                                            <li><a href="images/news/tag/PC+PRO/">PC PRO</a></li>
                                    </ul></div>-->
                            <!--<div class="postDetails">
                                </div>-->
                        </div>
                        <div class="postWrapper">
                            <div class="postimage">
                                <div class="post-featured-img"><img src="images/1507218393n5-small-pc-pro.jpg" alt=""></div>
                            </div>
                            <div class="postTitle">
                                <h2><a href="images/news/redbackn5-pcpro/">Redback N5 Wins PC PRO Reccomended</a></h2>
                                <h3>9/8/2017 8:19 AM</h3>
                            </div>
                            <div class="postContent std">The Redback N5 wins another award! PC PRO has given the N5 the reccomended award saying: "A brilliant showcase for the Ryzen 7 1700, the Redback is we...<a class="aw-blog-read-more" href="images/news/redbackn5-pcpro/">Read More</a></div>
                            <!--<div class="tags"><span>Tags:</span>
                                <ul class="tags">
                                            <li><a href="images/news/tag/Redback/">Redback</a></li>
                                            <li><a href="images/news/tag/PC+PRO/">PC PRO</a></li>
                                    </ul></div>-->
                            <!--<div class="postDetails">
                                </div>-->
                        </div>
                        <div class="postWrapper">
                            <div class="postimage">
                                <div class="post-featured-img"><img src="images/1507218481n5-small-active.jpg" alt=""></div>
                            </div>
                            <div class="postTitle">
                                <h2><a href="images/news/redbackn5-ca/">Redback N5 Wins Computer Active Award</a></h2>
                                <h3>9/7/2017 10:45 AM</h3>
                            </div>
                            <div class="postContent std">Computer Active says: " lightning fast, expandable and great for multitasking"<br>Able to handle all the latest AAA titles on max settings with ease, the ...<a class="aw-blog-read-more" href="images/news/redbackn5-ca/">Read More</a></div>
                            <!--<div class="tags"><span>Tags:</span>
                                <ul class="tags">
                                            <li><a href="images/news/tag/Redback/">Redback</a></li>
                                            <li><a href="images/news/tag/+Computer+Active/"> Computer Active</a></li>
                                    </ul></div>-->
                            <!--<div class="postDetails">
                                </div>-->
                        </div>
                        <div class="postWrapper">
                            <div class="postimage">
                                <div class="post-featured-img"><img src="images/1507217854n5-small.jpg" alt=""></div>
                            </div>
                            <div class="postTitle">
                                <h2><a href="images/news/redbackn5-cpc/">Redback N5 in Custom PC</a></h2>
                                <h3>9/7/2017 10:44 AM</h3>
                            </div>
                            <div class="postContent std">
                                <p>Able to handle all the latest AAA titles on max settings with ease, the Redback N5 doesn’t break a sweat. With a 250GB Solid State Drive where the OS ...</p>
                                <a class="aw-blog-read-more" href="images/news/redbackn5-cpc/">Read More</a>
                            </div>
                            <!--<div class="tags"><span>Tags:</span>
                                <ul class="tags">
                                            <li><a href="images/news/tag/Redback/">Redback</a></li>
                                            <li><a href="images/news/tag/+Custom+PC/"> Custom PC</a></li>
                                    </ul></div>-->
                            <!--<div class="postDetails">
                                </div>-->
                        </div>
                        <div class="postWrapper">
                            <div class="postimage">
                                <div class="post-featured-img"><img src="images/1507217200sp-shopper-small.jpg" alt=""></div>
                            </div>
                            <div class="postTitle">
                                <h2><a href="images/news/sp-advisor/">BlackBox SP in Tech Advisor</a></h2>
                                <h3>9/7/2017 10:43 AM</h3>
                            </div>
                            <div class="postContent std">With a plethora of RGB options, the BlackBox SP is one of our most flashiest systems. Recently the SP was featured in Computer Shopper Magazine earnin...<a class="aw-blog-read-more" href="images/news/sp-advisor/">Read More</a></div>
                            <!--<div class="tags"><span>Tags:</span>
                                <ul class="tags">
                                            <li><a href="images/news/tag/BlackBox/">BlackBox</a></li>
                                            <li><a href="images/news/tag/+Tech+Advisor/"> Tech Advisor</a></li>
                                    </ul></div>-->
                            <!--<div class="postDetails">
                                </div>-->
                        </div>
                        <div class="postWrapper">
                            <div class="postimage">
                                <div class="post-featured-img"><img src="images/1507216294sp-shopper-small.jpg" alt=""></div>
                            </div>
                            <div class="postTitle">
                                <h2><a href="images/news/blackboxsp-shopper/">BlackBox SP gets 4 Stars!</a></h2>
                                <h3>9/7/2017 9:13 AM</h3>
                            </div>
                            <div class="postContent std">With a plethora of RGB options, the BlackBox SP is one of our most flashiest systems. Recently the SP was featured in Computer Shopper Magazine earnin...<a class="aw-blog-read-more" href="images/news/blackboxsp-shopper/">Read More</a></div>
                            <!--<div class="tags"><span>Tags:</span>
                                <ul class="tags">
                                            <li><a href="images/news/tag/BlackBox/">BlackBox</a></li>
                                            <li><a href="images/news/tag/+Computer+Shopper/"> Computer Shopper</a></li>
                                    </ul></div>-->
                            <!--<div class="postDetails">
                                </div>-->
                        </div>
                    </div>
                    <div class="toolbar">
                        <div class="pager">
                            <p class="amount">
                                Items 1 to 10 of 11 total                    
                            </p>
                            <div class="limiter">
                                <label>Show</label>
                                <select onchange="setLocation(this.value)">
                                    <option value="images/news/?limit=10">
                                        10                
                                    </option>
                                </select>
                                per page        
                            </div>
                            <div class="pages">
                                <strong>Page:</strong>
                                <ol>
                                    <li class="current">1</li>
                                    <li><a href="images/news/?dir=desc&amp;order=created_time&amp;p=2">2</a></li>
                                    <li>
                                        <a class="next i-next" href="images/news/?dir=desc&amp;order=created_time&amp;p=2" title="Next">
                                        <img src="images/skin/frontend/base/default/images/pager_arrow_right.gif" alt="Next" class="v-middle">
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="sorter">
                            <div class="sort-by">
                                <label>Sort By</label>
                                <select onchange="setLocation(this.value)">
                                    <option value="images/news/?dir=asc&amp;order=created_time" selected="selected">
                                        Created At                
                                    </option>
                                    <option value="images/news/?dir=asc&amp;order=user">
                                        Added By                
                                    </option>
                                </select>
                                <a href="images/news/?dir=asc&amp;order=created_time" title="Set Ascending Direction"><img src="images/i_desc_arrow.png" alt="Set Ascending Direction" class="v-middle"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('include/footer.php'); ?>