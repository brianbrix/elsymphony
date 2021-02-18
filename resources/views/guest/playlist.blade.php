@extends('guest.header')
@section('title')
Elsymphony
@endsection
@section('content')
<style>
/* Font Family
================================================== */

@import url("//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400");

/* CSS Reset
================================================== */




/* Basic Styles
================================================== */



* {
-webkit-tap-highlight-color:rgba(0,0,0,0);
-webkit-tap-highlight-color:transparent;
}


/* Typography
================================================== */

h1,h6,p { color:#808080; font-weight:200; }
h1 { font-size:42px; line-height:44px; margin:20px 0 0; }
h6 { font-size:18px; line-height:20px; margin:4px 0 20px; }
p { font-size:18px; line-height:20px; margin:0 0 2px; }


/* Links
================================================== */

a,a:visited { color:#ddd; outline:0; text-decoration:underline; }
a:hover,a:focus { color:#bbb; }
p a,p a:visited { line-height:inherit; }


/* Misc.
================================================== */

.add-bottom { margin-bottom:20px !important; }
.left { float:left; }
.right { float:right; }
.center { text-align:center; }


/* Custom Styles
================================================== */

/* Highlight Styles */
::selection { background-color:#262223; color:#444; }
::-moz-selection { background-color:#262223; color:#444; }


/* Audio Player Styles
================================================== */

/* Default / Desktop / Firefox */
audio { margin:0 15px 0 14px; width:670px; }
#mainwrap { /* add box-shadow or other styles here */ }
#audiowrap { background-color:#231F20; margin:0 auto; }
#plwrap { margin:0 auto; }
#tracks { min-height:65px; position:relative; text-align:center; text-decoration:none; top:13px; }
#nowPlay { display:inline; }
#npTitle { margin:0; padding:21px; text-align:right; }
#npAction { padding:21px; position:absolute; }
#plList { margin:0; }
#plList li { background-color:#231F20; cursor:pointer; margin:0; padding:21px 0; }
#plList li:hover { background-color:#262223; }
.plItem { position:relative; }
.plTitle { left:50px; overflow:hidden; position:absolute; right:65px; text-overflow:ellipsis; top:0; white-space:nowrap; }
.plNum { padding-left:21px; width:25px; }
.plLength { padding-left:21px; position:absolute; right:21px; top:0; }
.plSel,.plSel:hover { background-color:#262223!important; cursor:default!important; }
a[id^="btn"] { background-color:#231F20; color:#C8C7C8; cursor:pointer; font-size:50px; margin:0; padding:0 27px 11px; text-decoration:none; }
a[id^="btn"]:last-child { margin-left:-4px; }
a[id^="btn"]:hover,a[id^="btn"]:active { background-color:#262223; }
a[id^="btn"]::-moz-focus-inner { border:0; padding:0; }

/* IE 9 */
html[data-useragent*="MSIE 9.0"] audio { margin-left:9px; outline:none; width:680px; }
html[data-useragent*="MSIE 9.0"] #audiowrap { background-color:#000; }
html[data-useragent*="MSIE 9.0"] #tracks { min-height:57px; top:5px; }
html[data-useragent*="MSIE 9.0"] a[id^="btn"] { background-color:#000; }
html[data-useragent*="MSIE 9.0"] a[id^="btn"]:hover { background-color:#080808; }
html[data-useragent*="MSIE 9.0"] #plList li { background-color:#000; }
html[data-useragent*="MSIE 9.0"] #plList li:hover { background-color:#080808; }
html[data-useragent*="MSIE 9.0"] .plSel,
html[data-useragent*="MSIE 9.0"] .plSel:hover { background-color:#080808!important; }

/* IE 10 */
html[data-useragent*="MSIE 10.0"] audio { margin-left:6px; width:687px; }
html[data-useragent*="MSIE 10.0"] #audiowrap { background-color:#000; }
html[data-useragent*="MSIE 10.0"] #tracks { min-height:60px; top:8px; }
html[data-useragent*="MSIE 10.0"] a[id^="btn"] { background-color:#000; }
html[data-useragent*="MSIE 10.0"] a[id^="btn"]:hover { background-color:#080808; }
html[data-useragent*="MSIE 10.0"] #plList li { background-color:#000; }
html[data-useragent*="MSIE 10.0"] #plList li:hover { background-color:#080808; }
html[data-useragent*="MSIE 10.0"] .plSel,
html[data-useragent*="MSIE 10.0"] .plSel:hover { background-color:#080808!important; }

/* IE 11 */
html[data-useragent*="rv:11.0"] audio { margin-left:2px; width:695px; }
html[data-useragent*="rv:11.0"] #audiowrap { background-color:#000; }
html[data-useragent*="rv:11.0"] #tracks { min-height:60px; top:8px; }
html[data-useragent*="rv:11.0"] a[id^="btn"] { background-color:#000; }
html[data-useragent*="rv:11.0"] a[id^="btn"]:hover { background-color:#080808; }
html[data-useragent*="rv:11.0"] #plList li { background-color:#000; }
html[data-useragent*="rv:11.0"] #plList li:hover { background-color:#080808; }
html[data-useragent*="rv:11.0"] .plSel,
html[data-useragent*="rv:11.0"] .plSel:hover { background-color:#080808!important; }

/* All Apple Products */
html[data-useragent*="Apple"] audio { margin:0; width:100%; }
html[data-useragent*="Apple"] #audiowrap { background-color:#000; }
html[data-useragent*="Apple"] #tracks { min-height:64px; top:12px; }
html[data-useragent*="Apple"] a[id^="btn"] { background-color:#000; }
html[data-useragent*="Apple"] a[id^="btn"]:hover { background-color:#080808; }
html[data-useragent*="Apple"] #plList li { background-color:#000; }
html[data-useragent*="Apple"] #plList li:hover { background-color:#080808; }
html[data-useragent*="Apple"] .plSel,
html[data-useragent*="Apple"] .plSel:hover { background-color:#080808!important; }

/* IOS 7 */
html[data-useragent*="OS 7"] body { color:#373837; }
html[data-useragent*="OS 7"] audio { margin-left:3px; width:690px; }
html[data-useragent*="OS 7"] #audiowrap { background-color:#e6e6e6; }
html[data-useragent*="OS 7"] #tracks { min-height:75px; top:23px; }
html[data-useragent*="OS 7"] a[id^="btn"] { background-color:#e6e6e6; color:#373837; }
html[data-useragent*="OS 7"] a[id^="btn"]:hover { background-color:#eee; }
html[data-useragent*="OS 7"] #plList li { background-color:#e6e6e6; }
html[data-useragent*="OS 7"] #plList li:hover { background-color:#eee; }
html[data-useragent*="OS 7"] .plSel,
html[data-useragent*="OS 7"] .plSel:hover { background-color:#eee!important; }

/* IOS 8 */
html[data-useragent*="OS 8"] body { color:#373837; }
html[data-useragent*="OS 8"] audio { margin-left:6px; width:694px; }
html[data-useragent*="OS 8"] #audiowrap { background-color:#e4e4e4; }
html[data-useragent*="OS 8"] #tracks { min-height:75px; top:23px; }
html[data-useragent*="OS 8"] a[id^="btn"] { background-color:#e4e4e4; color:#373837; }
html[data-useragent*="OS 8"] a[id^="btn"]:hover { background-color:#eee; }
html[data-useragent*="OS 8"] #plList li { background-color:#e4e4e4; }
html[data-useragent*="OS 8"] #plList li:hover { background-color:#eee; }
html[data-useragent*="OS 8"] .plSel,
html[data-useragent*="OS 8"] .plSel:hover { background-color:#eee!important; }

/* IOS 9 */
html[data-useragent*="OS 9"] body { color:#373837; }
html[data-useragent*="OS 9"] audio { margin-left:6px; width:694px; }
html[data-useragent*="OS 9"] #audiowrap { background-color:#d5d5d5; }
html[data-useragent*="OS 9"] #tracks { min-height:75px; top:23px; }
html[data-useragent*="OS 9"] a[id^="btn"] { background-color:#d5d5d5; color:#373837; }
html[data-useragent*="OS 9"] a[id^="btn"]:hover { background-color:#eee; }
html[data-useragent*="OS 9"] #plList li { background-color:#d5d5d5; }
html[data-useragent*="OS 9"] #plList li:hover { background-color:#eee; }
html[data-useragent*="OS 9"] .plSel,
html[data-useragent*="OS 9"] .plSel:hover { background-color:#eee!important; }

/* Chrome */
html[data-useragent*="Chrome"] body { color:#5a5a5a; }
html[data-useragent*="Chrome"] audio { margin-left:9px; width:677px; }
html[data-useragent*="Chrome"] #audiowrap { background-color:#fafafa; }
html[data-useragent*="Chrome"] #tracks { min-height:64px; top:12px; }
html[data-useragent*="Chrome"] a[id^="btn"] { background-color:#fafafa; color:#5a5a5a; }
html[data-useragent*="Chrome"] a[id^="btn"]:hover { background-color:#eee; }
html[data-useragent*="Chrome"] #plList li { background-color:#fafafa; }
html[data-useragent*="Chrome"] #plList li:hover { background-color:#eee; }
html[data-useragent*="Chrome"] .plSel,
html[data-useragent*="Chrome"] .plSel:hover { background-color:#eee!important; }

/* Chrome / Android / Tablet */
html[data-useragent*="Chrome"][data-useragent*="Android"] body { color:#373837; }
html[data-useragent*="Chrome"][data-useragent*="Android"] audio { margin-left:4px; width:689px; }
html[data-useragent*="Chrome"][data-useragent*="Android"] #audiowrap { background-color:#fafafa; }
html[data-useragent*="Chrome"][data-useragent*="Android"] #tracks { min-height:75px; top:23px; }
html[data-useragent*="Chrome"][data-useragent*="Android"] a[id^="btn"] { background-color:#fafafa; color:#373837; }
html[data-useragent*="Chrome"][data-useragent*="Android"] a[id^="btn"]:hover { background-color:#eee; }
html[data-useragent*="Chrome"][data-useragent*="Android"] #plList li { background-color:#fafafa; }
html[data-useragent*="Chrome"][data-useragent*="Android"] #plList li:hover { background-color:#eee; }
html[data-useragent*="Chrome"][data-useragent*="Android"] .plSel,
html[data-useragent*="Chrome"][data-useragent*="Android"] .plSel:hover { background-color:#eee!important; }


/* Audio Player Media Queries
================================================== */

/* Tablet Portrait */
@media only screen and (min-width: 768px) and (max-width: 959px) {
audio { width:526px; }
html[data-useragent*="MSIE 9.0"] audio { width:536px; }
html[data-useragent*="MSIE 10.0"] audio { width:543px; }
html[data-useragent*="rv:11.0"] audio { width:551px; }
html[data-useragent*="OS 7"] audio { width:546px; }
html[data-useragent*="OS 8"] audio { width:550px; }
html[data-useragent*="OS 9"] audio { width:550px; }
html[data-useragent*="Chrome"] audio { width:533px; }
html[data-useragent*="Chrome"][data-useragent*="Android"] audio { margin-left:4px; width:545px; }
}

/* Mobile Landscape */
@media only screen and (min-width: 480px) and (max-width: 767px) {
audio { width:390px; }
html[data-useragent*="MSIE 9.0"] audio { width:400px; }
html[data-useragent*="MSIE 10.0"] audio { width:407px; }
html[data-useragent*="rv:11.0"] audio { width:415px; }
html[data-useragent*="OS 7"] audio { width:410px; }
html[data-useragent*="OS 8"] audio { width:414px; }
html[data-useragent*="OS 9"] audio { width:414px; }
html[data-useragent*="Chrome"] audio { width:397px; }
html[data-useragent*="Chrome"][data-useragent*="Mobile"] audio { margin-left:4px; width:410px; }
#npTitle { width:245px; }
}

/* Mobile Portrait */
@media only screen and (max-width: 479px) {
audio { width:270px; }
html[data-useragent*="MSIE 9.0"] audio { width:280px; }
html[data-useragent*="MSIE 10.0"] audio { width:287px; }
html[data-useragent*="rv:11.0"] audio { width:295px; }
html[data-useragent*="OS 7"] audio { width:290px; }
html[data-useragent*="OS 8"] audio { width:294px; }
html[data-useragent*="OS 9"] audio { width:294px; }
html[data-useragent*="Chrome"] audio { width:277px; }
html[data-useragent*="Chrome"][data-useragent*="Mobile"] audio { margin-left:4px; width:290px; }
#npTitle { width:167px; }
}


</style>
<div class="aboutbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="abouttitlepage">
                        <h2>Playlist</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- music-box  -->

      <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
        <div class="column center">
            <h1>Elsymphony</h1>
            <h6>music playlist</h6>
        </div>
        <div class="column add-bottom">
            <div id="mainwrap">
                <div id="nowPlay">
                    <span class="left" id="npAction" style="margin-top: 30px;">Paused...</span>
                    <span class="right" id="npTitle"></span>
                </div>
                <div id="audiowrap">
                    <div id="audio0">
                        <audio preload id="audio1" controls="controls">Your browser does not support HTML5 Audio!</audio>
                    </div>
                    <div id="tracks">
                        <a id="btnPrev" aria-label="Previous">&laquo;</a>
                        <a id="btnNext" aria-label="Next">&raquo;</a>
                    </div>
                </div>
                <div id="plwrap">
                    <ul id="plList">
                        <li>
                            <div class="plItem">
                                <div class="plNum">01.</div>
                                <div class="plTitle">All This Is - Joe L.'s Studio</div>
                                <div class="plLength">2:46</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">02.</div>
                                <div class="plTitle">The Forsaken - Broadwing Studio (Final Mix)</div>
                                <div class="plLength">8:31</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">03.</div>
                                <div class="plTitle">All The King's Men - Broadwing Studio (Final Mix)</div>
                                <div class="plLength">5:02</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">04.</div>
                                <div class="plTitle">The Forsaken - Broadwing Studio (First Mix)</div>
                                <div class="plLength">8:32</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">05.</div>
                                <div class="plTitle">All The King's Men - Broadwing Studio (First Mix)</div>
                                <div class="plLength">5:05</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">06.</div>
                                <div class="plTitle">All This Is - Alternate Cuts</div>
                                <div class="plLength">2:49</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">07.</div>
                                <div class="plTitle">All The King's Men (Take 1) - Alternate Cuts</div>
                                <div class="plLength">5:45</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">08.</div>
                                <div class="plTitle">All The King's Men (Take 2) - Alternate Cuts</div>
                                <div class="plLength">5:27</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">09.</div>
                                <div class="plTitle">Magus - Alternate Cuts</div>
                                <div class="plLength">5:46</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">10.</div>
                                <div class="plTitle">The State Of Wearing Address (fucked up) - Alternate Cuts</div>
                                <div class="plLength">5:25</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">11.</div>
                                <div class="plTitle">Magus - Popeye's (New Years '04 - '05)</div>
                                <div class="plLength">5:54</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">12.</div>
                                <div class="plTitle">On The Waterfront - Popeye's (New Years '04 - '05)</div>
                                <div class="plLength">4:41</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">13.</div>
                                <div class="plTitle">Trance - Popeye's (New Years '04 - '05)</div>
                                <div class="plLength">13:17</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">14.</div>
                                <div class="plTitle">The Forsaken - Popeye's (New Years '04 - '05)</div>
                                <div class="plLength">8:13</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">15.</div>
                                <div class="plTitle">The State Of Wearing Address - Popeye's (New Years '04 - '05)</div>
                                <div class="plLength">7:03</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">16.</div>
                                <div class="plTitle">Magus - Popeye's (Valentine's Day '05)</div>
                                <div class="plLength">5:44</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">17.</div>
                                <div class="plTitle">Trance - Popeye's (Valentine's Day '05)</div>
                                <div class="plLength">10:47</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">18.</div>
                                <div class="plTitle">The State Of Wearing Address - Popeye's (Valentine's Day '05)</div>
                                <div class="plLength">5:37</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">19.</div>
                                <div class="plTitle">All This Is - Smith St. Basement (01/08/04)</div>
                                <div class="plLength">2:49</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">20.</div>
                                <div class="plTitle">Magus - Smith St. Basement (01/08/04)</div>
                                <div class="plLength">5:46</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">21.</div>
                                <div class="plTitle">Beneath The Painted Eye - Smith St. Basement (06/06/03)</div>
                                <div class="plLength">13:08</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">22.</div>
                                <div class="plTitle">Innocence - Smith St. Basement (06/06/03)</div>
                                <div class="plLength">5:16</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">23.</div>
                                <div class="plTitle">Magus - Smith St. Basement (06/06/03)</div>
                                <div class="plLength">5:47</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">24.</div>
                                <div class="plTitle">Madness Explored - Smith St. Basement (06/06/03)</div>
                                <div class="plLength">4:52</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">25.</div>
                                <div class="plTitle">The Forsaken - Smith St. Basement (06/06/03)</div>
                                <div class="plLength">8:44</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">26.</div>
                                <div class="plTitle">All This Is - Smith St. Basement (12/28/03)</div>
                                <div class="plLength">3:01</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">27.</div>
                                <div class="plTitle">Magus - Smith St. Basement (12/28/03)</div>
                                <div class="plLength">6:10</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">28.</div>
                                <div class="plTitle">Madness Explored - Smith St. Basement (12/28/03)</div>
                                <div class="plLength">5:06</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">29.</div>
                                <div class="plTitle">Trance - Smith St. Basement (12/28/03)</div>
                                <div class="plLength">12:33</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">30.</div>
                                <div class="plTitle">The Forsaken - Smith St. Basement (12/28/03)</div>
                                <div class="plLength">8:57</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">31.</div>
                                <div class="plTitle">All This Is (Take 1) - Smith St. Basement (Nov. '03)</div>
                                <div class="plLength">4:55</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">32.</div>
                                <div class="plTitle">All This Is (Take 2) - Smith St. Basement (Nov. '03)</div>
                                <div class="plLength">5:46</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">33.</div>
                                <div class="plTitle">Beneath The Painted Eye (Take 1) - Smith St. Basement (Nov. '03)</div>
                                <div class="plLength">14:06</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">34.</div>
                                <div class="plTitle">Beneath The Painted Eye (Take 2) - Smith St. Basement (Nov. '03)</div>
                                <div class="plLength">13:26</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">35.</div>
                                <div class="plTitle">The Forsaken (Take 1) - Smith St. Basement (Nov. '03)</div>
                                <div class="plLength">8:38</div>
                            </div>
                        </li>
                        <li>
                            <div class="plItem">
                                <div class="plNum">36.</div>
                                <div class="plTitle">The Forsaken (Take 2) - Smith St. Basement (Nov. 03)</div>
                                <div class="plLength">8:37</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
     <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src='http://api.html5media.info/1.1.8/html5media.min.js'></script>

        <script src="js/index.js"></script>


    @endsection
    @section('scripts')
    <script>
    // html5media enables <video> and <audio> tags in all major browsers
    // External File: http://api.html5media.info/1.1.8/html5media.min.js


    // Add user agent as an attribute on the <html> tag...
    // Inspiration: http://css-tricks.com/ie-10-specific-styles/
    var b = document.documentElement;
    b.setAttribute('data-useragent', navigator.userAgent);
    b.setAttribute('data-platform', navigator.platform);


    // HTML5 audio player + playlist controls...
    // Inspiration: http://jonhall.info/how_to/create_a_playlist_for_html5_audio
    // Mythium Archive: https://archive.org/details/mythium/
    jQuery(function ($) {
        var supportsAudio = !!document.createElement('audio').canPlayType;
        if (supportsAudio) {
            var index = 0,
                playing = false,
                mediaPath = '//archive.org/download/mythium/',
                extension = '',
                tracks = [{
                    "track": 1,
                    "name": "All This Is - Joe L.'s Studio",
                    "length": "02:46",
                    "file": "JLS_ATI"
                }, {
                    "track": 2,
                    "name": "The Forsaken - Broadwing Studio (Final Mix)",
                    "length": "08:31",
                    "file": "BS_TF"
                }, {
                    "track": 3,
                    "name": "All The King's Men - Broadwing Studio (Final Mix)",
                    "length": "05:02",
                    "file": "BS_ATKM"
                }, {
                    "track": 4,
                    "name": "The Forsaken - Broadwing Studio (First Mix)",
                    "length": "08:32",
                    "file": "BSFM_TF"
                }, {
                    "track": 5,
                    "name": "All The King's Men - Broadwing Studio (First Mix)",
                    "length": "05:05",
                    "file": "BSFM_ATKM"
                }, {
                    "track": 6,
                    "name": "All This Is - Alternate Cuts",
                    "length": "02:49",
                    "file": "AC_ATI"
                }, {
                    "track": 7,
                    "name": "All The King's Men (Take 1) - Alternate Cuts",
                    "length": "05:45",
                    "file": "AC_ATKMTake_1"
                }, {
                    "track": 8,
                    "name": "All The King's Men (Take 2) - Alternate Cuts",
                    "length": "05:27",
                    "file": "AC_ATKMTake_2"
                }, {
                    "track": 9,
                    "name": "Magus - Alternate Cuts",
                    "length": "05:46",
                    "file": "AC_M"
                }, {
                    "track": 10,
                    "name": "The State Of Wearing Address (fucked up) - Alternate Cuts",
                    "length": "05:25",
                    "file": "AC_TSOWAfucked_up"
                }, {
                    "track": 11,
                    "name": "Magus - Popeye's (New Years '04 - '05)",
                    "length": "05:54",
                    "file": "PNY04-05_M"
                }, {
                    "track": 12,
                    "name": "On The Waterfront - Popeye's (New Years '04 - '05)",
                    "length": "04:41",
                    "file": "PNY04-05_OTW"
                }, {
                    "track": 13,
                    "name": "Trance - Popeye's (New Years '04 - '05)",
                    "length": "13:17",
                    "file": "PNY04-05_T"
                }, {
                    "track": 14,
                    "name": "The Forsaken - Popeye's (New Years '04 - '05)",
                    "length": "08:13",
                    "file": "PNY04-05_TF"
                }, {
                    "track": 15,
                    "name": "The State Of Wearing Address - Popeye's (New Years '04 - '05)",
                    "length": "07:03",
                    "file": "PNY04-05_TSOWA"
                }, {
                    "track": 16,
                    "name": "Magus - Popeye's (Valentine's Day '05)",
                    "length": "05:44",
                    "file": "PVD_M"
                }, {
                    "track": 17,
                    "name": "Trance - Popeye's (Valentine's Day '05)",
                    "length": "10:47",
                    "file": "PVD_T"
                }, {
                    "track": 18,
                    "name": "The State Of Wearing Address - Popeye's (Valentine's Day '05)",
                    "length": "05:37",
                    "file": "PVD_TSOWA"
                }, {
                    "track": 19,
                    "name": "All This Is - Smith St. Basement (01/08/04)",
                    "length": "02:49",
                    "file": "SSB01_08_04_ATI"
                }, {
                    "track": 20,
                    "name": "Magus - Smith St. Basement (01/08/04)",
                    "length": "05:46",
                    "file": "SSB01_08_04_M"
                }, {
                    "track": 21,
                    "name": "Beneath The Painted Eye - Smith St. Basement (06/06/03)",
                    "length": "13:08",
                    "file": "SSB06_06_03_BTPE"
                }, {
                    "track": 22,
                    "name": "Innocence - Smith St. Basement (06/06/03)",
                    "length": "05:16",
                    "file": "SSB06_06_03_I"
                }, {
                    "track": 23,
                    "name": "Magus - Smith St. Basement (06/06/03)",
                    "length": "05:47",
                    "file": "SSB06_06_03_M"
                }, {
                    "track": 24,
                    "name": "Madness Explored - Smith St. Basement (06/06/03)",
                    "length": "04:52",
                    "file": "SSB06_06_03_ME"
                }, {
                    "track": 25,
                    "name": "The Forsaken - Smith St. Basement (06/06/03)",
                    "length": "08:44",
                    "file": "SSB06_06_03_TF"
                }, {
                    "track": 26,
                    "name": "All This Is - Smith St. Basement (12/28/03)",
                    "length": "03:01",
                    "file": "SSB12_28_03_ATI"
                }, {
                    "track": 27,
                    "name": "Magus - Smith St. Basement (12/28/03)",
                    "length": "06:10",
                    "file": "SSB12_28_03_M"
                }, {
                    "track": 28,
                    "name": "Madness Explored - Smith St. Basement (12/28/03)",
                    "length": "05:06",
                    "file": "SSB12_28_03_ME"
                }, {
                    "track": 29,
                    "name": "Trance - Smith St. Basement (12/28/03)",
                    "length": "12:33",
                    "file": "SSB12_28_03_T"
                }, {
                    "track": 30,
                    "name": "The Forsaken - Smith St. Basement (12/28/03)",
                    "length": "08:57",
                    "file": "SSB12_28_03_TF"
                }, {
                    "track": 31,
                    "name": "All This Is (Take 1) - Smith St. Basement (Nov. '03)",
                    "length": "04:55",
                    "file": "SSB___11_03_ATITake_1"
                }, {
                    "track": 32,
                    "name": "All This Is (Take 2) - Smith St. Basement (Nov. '03)",
                    "length": "05:46",
                    "file": "SSB___11_03_ATITake_2"
                }, {
                    "track": 33,
                    "name": "Beneath The Painted Eye (Take 1) - Smith St. Basement (Nov. '03)",
                    "length": "14:06",
                    "file": "SSB___11_03_BTPETake_1"
                }, {
                    "track": 34,
                    "name": "Beneath The Painted Eye (Take 2) - Smith St. Basement (Nov. '03)",
                    "length": "13:26",
                    "file": "SSB___11_03_BTPETake_2"
                }, {
                    "track": 35,
                    "name": "The Forsaken (Take 1) - Smith St. Basement (Nov. '03)",
                    "length": "08:38",
                    "file": "SSB___11_03_TFTake_1"
                }, {
                    "track": 36,
                    "name": "The Forsaken (Take 2) - Smith St. Basement (Nov. '03)",
                    "length": "08:37",
                    "file": "SSB___11_03_TFTake_2"
                }],
                trackCount = tracks.length,
                npAction = $('#npAction'),
                npTitle = $('#npTitle'),
                audio = $('#audio1').bind('play', function () {
                    playing = true;
                    npAction.text('Now Playing...');
                }).bind('pause', function () {
                    playing = false;
                    npAction.text('Paused...');
                }).bind('ended', function () {
                    npAction.text('Paused...');
                    if ((index + 1) < trackCount) {
                        index++;
                        loadTrack(index);
                        audio.play();
                    } else {
                        audio.pause();
                        index = 0;
                        loadTrack(index);
                    }
                }).get(0),
                btnPrev = $('#btnPrev').click(function () {
                    if ((index - 1) > -1) {
                        index--;
                        loadTrack(index);
                        if (playing) {
                            audio.play();
                        }
                    } else {
                        audio.pause();
                        index = 0;
                        loadTrack(index);
                    }
                }),
                btnNext = $('#btnNext').click(function () {
                    if ((index + 1) < trackCount) {
                        index++;
                        loadTrack(index);
                        if (playing) {
                            audio.play();
                        }
                    } else {
                        audio.pause();
                        index = 0;
                        loadTrack(index);
                    }
                }),
                li = $('#plList li').click(function () {
                    var id = parseInt($(this).index());
                    if (id !== index) {
                        playTrack(id);
                    }
                }),
                loadTrack = function (id) {
                    $('.plSel').removeClass('plSel');
                    $('#plList li:eq(' + id + ')').addClass('plSel');
                    npTitle.text(tracks[id].name);
                    index = id;
                    audio.src = mediaPath + tracks[id].file + extension;
                },
                playTrack = function (id) {
                    loadTrack(id);
                    audio.play();
                };
            extension = audio.canPlayType('audio/mpeg') ? '.mp3' : audio.canPlayType('audio/ogg') ? '.ogg' : '';
            loadTrack(index);
        }
    });

    </script>
    @endsection