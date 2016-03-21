<?php
include_once("icl/aviy_code.php");
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>CorePT | Fitness together.</title>
<?php include_once("icl/header/meta_tags.php"); ?>
<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
</script>
</head>
<body>
<header class="mHdr1 pF">
    <header class="mHdr1b fL">
        <div class="mHdr1ba">
            <div class="mHdMu">
                <span></span><span></span><span></span>
            </div>
            <div class="mnLg1 fR dI">CorePT</div>
        </div>
    </header>
    <div class="mHin1">
        <div class="fL">

        </div>
        <!-- login module start -->
        <div class="fR lgnLgc">
            <span id="s5In" onclick="s5In()"></span>
            <form action="lGnFrm.php" method="get" id="lGnFrm">
                <div>
                    <input type="text" class="" placeholder="Username"/>
                    <span></span>
                </div>
                <div>
                    <input type="password" class="" placeholder="Password"/>
                    <span></span>
                </div>
                <input type="submit" value="Login" id="" class="btn1">
            </form>
            <button id="sNpBtn" class="btn2" onclick="upTgle('sNpdLg')">Sign Up</button>
            <!-- search logic -->
            <div class="sChCntr dN">
                <div class="dI">
                    <input type="text" class="sChHd1" placeholder="Search">
                    <span></span>
                </div>
                <button id="bCkBtn" class="btn1" onclick="bCkBtn1()">Back</button>
            </div>
        </div>
        <!-- login module end -->
    </div>
</header>
<dialog id="sNpdLg" class="sNpbde dN fR pF">
    <form action="sNpFrm.php" method="post" id="sNpFrm">
        <header>Join It's Free!!!</header>
        <div>
            <input type="text" id="" placeholder="@Username"/>
            <span></span>
        </div>
        <div>
            <input type="password" id="" placeholder="Password"/>
            <span></span>
        </div>
        <div>
            <input type="password" id="" placeholder="Re-type Password"/>
            <span></span>
        </div>
        <div>
            <input type="text" id="" placeholder="Age"/>
            <span></span>
        </div>
        <select>
            <option selected>Select a gender</option>
            <option id="sM" value="sM">Male</option>
            <option id="sM" value="sF">Fe Male</option>
        </select>
        <input type="submit" value="Lets Join!" id="" class="btn1 dB">
    </form>
</dialog>
<!--- body header start -->
<aside class="sB3">
    <nav class="sB3Inr">
        <i id="icn1"></i>
        <i id="icn2" onclick="sBrTgLd()"></i>
        <i id="icn3" onclick="sBrTgLd()"></i>
        <i id="icn4" onclick="sBrTgLd()"></i>
        <i id="icn5" onclick="sBrTgLd()"></i>
        <i id="icn6" onclick="sBrTgLd()"></i>
        <i id="icn7" onclick="sBrTgLd()"></i>
        <i id="icn8" onclick="sBrTgLd()"></i>
        <i id="icn9" onclick="sBrTgLd()"></i>
        <i id="icn10" onclick="sBrTgLd()"></i>
    </nav>
</aside>
<dialog class="sBrdlG dN">
    <header>
        <div class="sBrInr">
            <bdi id="sBr1a">Feed</bdi>
            <div class="fR">
                <div class="mNuOpt1 cP" onclick="upTgle('sBrTglX')"><span></span><span></span><span></span></div>
            </div>
        </div>
    </header>
    <nav class="sBrTglC fR">
        <ul id="sBrTglX" class="dN pF">
            <li>Feed page</li>
            <li>Full screen</li>
            <li>Update</li>
            <li>Most Recent</li>
            <li>Top Post</li>
        </ul>
    </nav>
    <div class="sBrpSt_HlDr scroll_y">
        <!---------------------- sidebar user post render -->
        <!-- user post -->
        <div class="sBrpSt_CtNr">
            <header>
                <img class="usrImg_Mn1 fL dI" src="img/temp/tempUsr.jpg">
                <bdi>@fitjunkie25</bdi>
                <time>2 mins ago</time>
            </header>
            <section class="sBrpSt_Bdy fntSze1">
                Did a few pushups & situps today, stated to feel a bit out of shape since i've been sick. I was also getting a bit lazy beforehand.'
            </section>
            <section class="sBrpSt_Ftr">
                <div class="sBrpSt_optn">
                    <div>
                        <span id="sBrRplyBtn1_" class="cP" onclick="sBrRply1('sBrRply_')">Reply</span>
                        <span id="Pnt_Nt"></span>
                        <span>5</span>
                    </div>
                    <div>
                        <span class="cP">&#8593;</span>
                        <span id="Pnt_Nt"></span>
                        <span>47</span>
                    </div>
                    <div>
                        <span class="cP">&#8595;</span>
                        <span id="Pnt_Nt"></span>
                        <span>2</span>
                    </div>
                </div>
                <div id="sBrRply_" class="sBrpSt_Rply1 dN">
                    <textarea class="sB_Rply" type="text" placeholder="What would you like to comment?"></textarea>
                </div>
                <div class="sBrpSt_Cmnt">
                    <header>
                        <img class="usrImg_Mn1 fL dI" src="img/temp/tempUsr.jpg">
                        <bdi>@fitjunkie25</bdi>
                        <time>2 mins ago</time>
                    </header>
                    <section class="sBrpSt_Bdy fntSze2">
                        <div class="RplyLne"></div>
                        Did a few pushups & situps today, stated to feel a bit out of shape since i've been sick. I was also getting a bit lazy beforehand.
                        <div class="sBrpSt_optn">
                            <div>
                                <span id="sBrRplyBtn1_" class="cP" onclick="sBrRply1('sBrRply_')">Reply</span>
                                <span id="Pnt_Nt"></span>
                                <span>5</span>
                            </div>
                            <div>
                                <span class="cP">&#8593;</span>
                                <span id="Pnt_Nt"></span>
                                <span>47</span>
                            </div>
                            <div>
                                <span class="cP">&#8595;</span>
                                <span id="Pnt_Nt"></span>
                                <span>2</span>
                            </div>
                        </div>
                    </section>

                <div id="sBrRply_" class="sBrpSt_Rply1 dN">
                    <textarea class="sB_Rply" type="text" placeholder="What would you like to comment?"></textarea>
                </div>
                </div>
            </section>
        </div>
        <!-- post end -->
    </div>
</dialog>
<section id="main">
    <header>Welcome</header>

</section>
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_footer.js"><\/script>');
// -->
</script>
</body>
</html>

