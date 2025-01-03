<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Music Player</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" />
    <style>
        main .song-side::before{
    background: url('img/diljit/diljit-bg.png');
    background-repeat: no-repeat;

}
    </style>
</head>
<body>
    <main>
        <div class="menu-side">
            <a href="index.html" style="text-decoration:none"><h1>Melodix</h1></a>
            <div class="playlist">
                <h4><span></span><i class="bi bi-music-note-beamed"></i>Playlist</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i>Last Listening</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i>Recommended</h4>
            </div>
            <div class="menu-song">
                <li class="songItem">
                    <span>01</span>
                    <img src="img/1.jpg" alt="">
                    <h5>On My Way <br>
                       <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id ="1"></i>
                </li>
                <li class="songItem">
                    <span>02</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                       <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id ="2"></i>
                </li>
                <li class="songItem">
                    <span>03</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                       <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id ="3"></i>
                </li>
                <li class="songItem">
                    <span>04</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                       <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id ="4"></i>
                </li>
                <li class="songItem">
                    <span>05</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                       <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id ="5"></i>
                </li>
                <li class="songItem">
                    <span>06</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                       <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id ="6"></i>
                </li>
                <li class="songItem">
                    <span>07</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                       <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id ="7"></i>
                </li>
                <li class="songItem">
                    <span>08</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                       <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playlistPlay bi-play-circle-fill" id ="8"></i>
                </li>
            </div>
        </div>

        <div class="song-side">
            <nav>
                <ul>
                    <li>Discover <span></span></li>
                    <li>MY LIBRARY</li>
                    <li>RADIO</li>
                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search Music...">
                </div>
                <div class="user">
                    <img src="img/KDS CODER.png" alt="">
                </div>
            </nav>
            <div class="content">
                <h1>Arjit Singh</h1>
                <p>You were the shadow to my light did you fell us Another start you fade <br>
                    Away afraid our aim is out of sight Wanna aee us Alive</p>
                    <div class="buttons">
                        <button>Play</button>
                        <button>Follow</button>
                    </div>
            </div>
            <div class="popular-song">
                <div class="h4">
                    <h4>Popular Song</h4>
                    <div class="btn-s">
                        <i class="bi bi-arrow-left-short" id="pop-song-left"></i>
                        <i class="bi bi-arrow-right-short" id="pop-song-right"></i>
                    </div>
                </div>
                <div class="pop-song">
                    
                    <li class="songItem">
                        <div class="img-play">
                            <img src="img/2.jpg" alt="">
                            <i class="bi playlistPlay bi-play-circle-fill" id="9"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>

                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="img/2.jpg" alt="">
                            <i class="bi playlistPlay bi-play-circle-fill" id="10"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>

                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="img/2.jpg" alt="">
                            <i class="bi playlistPlay bi-play-circle-fill" id="11"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>

                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="img/2.jpg" alt="">
                            <i class="bi playlistPlay bi-play-circle-fill" id="12"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>

                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="img/2.jpg" alt="">
                            <i class="bi playlistPlay bi-play-circle-fill" id="13"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>

                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="img/2.jpg" alt="">
                            <i class="bi playlistPlay bi-play-circle-fill" id="14"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>

                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img-play">
                            <img src="img/2.jpg" alt="">
                            <i class="bi playlistPlay bi-play-circle-fill" id="15"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>

                        </h5>
                    </li>
                </div>
            </div>
            <div class="popular-artists">
                <div class="h4">
                    <h4>Popular Artists </h4>
                    <div class="btn-s">
                        <i class="bi bi-arrow-left-short" id="pop-artist-left"></i>
                        <i class="bi bi-arrow-right-short" id="pop-artist-right"></i>
                    </div>
                </div>
                <div class="item">
                <li>
                       <a href="arjit.php"> <img src="img/arijit.jpeg" alt=""></a>
                    </li>
                    <li>
                       <a href="yoyo.php"> <img src="img/yoyo.jpeg" alt=""></a>
                    </li>
                    <li>
                      <a href="diljit.php"><img src="img/Diljit_Dosanjh.jpg" alt=""></a>  
                    </li>
                    <li>
                       <a href="anjum.php"> <img src="img/anjum.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="yunus.php"><img src="img/yunus.jpg" alt=""></a>
                    </li>
                    <li>
                        <img src="img/justin-bieber-lede.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/alan.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/akhil.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/rap.png" alt="">
                    </li>
                    <li>
                        <img src="img/eminem.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/bohemia.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/neha.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/atif.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/dhvani.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/akhil.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/lanadelray.webp" alt="">
                    </li>
                    <li>
                       <a href="arjit.php"> <img src="img/arijit.jpeg" alt=""></a>
                    </li>
                    <li>
                        <img src="img/yoyo.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/Diljit_Dosanjh.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/anjum.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/yunus.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/justin-bieber-lede.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/alan.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/akhil.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/rap.png" alt="">
                    </li>
                    <li>
                        <img src="img/eminem.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/bohemia.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/neha.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/atif.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/dhvani.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/akhil.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/lanadelray.webp" alt="">
                    </li>
                    
                </div>
            </div>
        </div>

        <div class="master-play">
            <div class="wave" id="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/2.jpg" alt="" id="poster-master-play">
            <h5 id="title">
                Alan Walker <br>
                <div class="subtitle">On my way</div>
            </h5>
            <div class="icons">
                <i class="bi shuffle bi-music-note-beamed">next</i>
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="next"></i>
               <a href=""  id="download-music"><i class="bi bi-cloud-arrow-down-fill"></i></a>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:30</span>
            <div class="vol">
                <i class="bi bi-volume-up-fill" id="vol-icon"></i>
                <input type="range" min="0" max="100" id="vol">
                <div class="vol-bar"></div>
                <div class="dot" id="vol-dot"></div>
            </div>
        </div>
    </main>


    <script src="arjit.js"></script>

</body>
</html>