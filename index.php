<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" />          <!-- Overall styling !-->
        <link rel="stylesheet" type="text/css" href="slide_style.css" />    <!-- Image slider styling !-->
        <title></title>
    </head>
    <body>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="functions.js"></script>                      

        <img src="imgs/big_bkgd.png" id="bg" alt="">
        
        <div id="wrapper">
            <div id="head">
                <div id="title">
                    <h1><a href="index.php">Page of Simpler</a></h1>
                </div>

                <div id="head_menu">
                    <a href ="index.php" class="menu_item">Home</a>
                    <a href ="projects.php" class="menu_item">Projects</a>
                    <a href ="news.php" class="menu_item">News</a>
                    <a href ="about.php" class="menu_item">About</a>
                    <a href ="bugs.php" class="menu_item">Bugs</a>
                    <a href ="stats.php" class="menu_item">Stats</a>
                    <a href ="login_screen.php" class="menu_item">Admin</a>
                </div>
            </div>

            <div id="main">
                <div id="top">
                    <div id="slide_show_border">
                        <div id="next_slide">
                            <div id="next_slide_image">
                                <img id="slide_image" src="imgs\papageno_wide.bmp"/>
                            </div>
                            <div id="next_slide_about">
                                <h3>Papageno Sandbox</h3>
                                A 2D sandbox game with simulated physical objects.<br><br>There's two modes, paused and dynamic. In the paused mode no objects gets simulated and you can move them around without 
                                any gravity, you can also scale objects in this mode. In the dynamic mode objects collide with each other and gets affected by gravity,
                                applying a rubberband force to a object is also only possible in this mode.
                                <br><br><a href="projects.php" class="read_more">» Read more</a>
                            </div>
                        </div>

                        <div id="current_slide">
                            <div id="current_slide_image">
                                <img id="slide_image" src="imgs\banzai2.bmp"/>
                            </div>
                            <div id="current_slide_about" name ="test">
                                <h3>Banzai</h3>
                                Banzai is a chess game with support for playing online. It follows the standard rules of chess and makes
                                sure that you can't do any invalid moves.<br>You can also chat with your opponent as you play and send him applauds
                                if you think he did a good move.<br><br>
                                <br><br><a href="projects.php" class="read_more">» Read more</a>
                            </div>
                        </div>
                    </div>
                </div> 

                <div id="middle">
                    <h2>Latest news</h2>
                    <h2 class="latest_tweets">Latest tweets</h2>
                     <div id="latest_news">
                        <h3>Banzai released</h3>
                        My latest project Banzai is now ready to be released. Banzai is a chess game with support for playing online. It follows the standard rules of chess and makes
                        sure that you can't do any invalid moves.<br><br>You can also chat with your opponent as you play and send him applauds
                        if you think he did a good move.<br><br>
                        
                        <li>Chat in multiplayer</li>
                        <li>Online mode</li>
                        <li>List of all active games</li>
                        <li>In-game registering</li>

                        <br>If you are interested in the source code then take a look at my <a class="read_more" href="https://github.com/simplerr/Banzai">github repo</a>.<br>
                        You can download the game from <a class="read_more" href="projects.php">here</a>.
                        
                        <br><br>Cheers!
                        
                         <p class ="author">Posted by simpler 24/1/12</p>
                    </div>
                    <div id="twitter_feed">
                        <script src="http://widgets.twimg.com/j/2/widget.js"></script>
                        <script>
                        new TWTR.Widget({
                          version: 2,
                          type: 'profile',
                          rpp: 4,
                          interval: 30000,
                          width: 250,
                          height: 325,
                          theme: {
                            shell: {
                              background: '#4d4d4d',
                              color: '#ffffff'
                            },
                            tweets: {
                              background: '#3d3d3d',
                              color: '#ffffff',
                              links: '#0ebebe'
                            }
                          },
                          features: {
                            scrollbar: false,
                            loop: false,
                            live: true,
                            behavior: 'all'
                          }
                        }).render().setUser('simplerrr').start();
                        </script>
                    </div>
                </div>
            </div>
            <div id="footer">
                <p>Copyright © 2011 Axel Blackert</p>
            </div>
        </div>
    </body>
</html>
