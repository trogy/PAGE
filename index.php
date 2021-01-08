<?php
if(!isset($_COOKIE['DC_SESSION'])){
$cookie_value = uniqid("USR");
$cookie = setcookie("DC_SESSION", $cookie_value, time() + (86400 * 30), "/");
} ?>
  <!DOCTYPE html>
    <html>
    <head>
      <style>
      .blinking {
      -webkit-animation: 1s blink ease infinite;
      -moz-animation: 1s blink ease infinite;
      -ms-animation: 1s blink ease infinite;
      -o-animation: 1s blink ease infinite;
      animation: 1s blink ease infinite;

    }

    @keyframes "blink" {
      from, to {
        opacity: 0;
      }
      50% {
        opacity: 1;
      }
    }

    @-moz-keyframes blink {
      from, to {
        opacity: 0;
      }
      50% {
        opacity: 1;
      }
    }

    @-webkit-keyframes "blink" {
      from, to {
        opacity: 0;
      }
      50% {
        opacity: 1;
      }
    }

    @-ms-keyframes "blink" {
      from, to {
        opacity: 0;
      }
      50% {
        opacity: 1;
      }
    }

    @-o-keyframes "blink" {
      from, to {
        opacity: 0;
      }
      50% {
        opacity: 1;
      }
    }
      /* width */
    ::-webkit-scrollbar {
      width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

        body {
          background: #007bff;
          background: linear-gradient(to right, #0062E6, #33AEFF);
        }
        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 40px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        /* ---------------------------------------------------
            SIDEBAR STYLE
        ----------------------------------------------------- */

        .wrapper {
            background: linear-gradient(to right, #ffffff, #0090ff);
           position: fixed;
            display: flex;
            width: 100%;
            align-items: stretch;
        }

        #sidebar {
          height: 100vh;
          position: relative;
            min-width: 250px;
            max-width: 250px;
            background-color: transparent;
            color: #000000;
            transition: all 0.3s;
            border-right: 2px solid #FFFFFF;
            background:rgba(0,0,0,0.6);
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #f0f0f0;
            opacity: 100%;
        }

        #sidebar a{
          color:#FFFFFF;
        }

        #sidebar ul.components {
                  padding-left: 30px;
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li a:hover {
            color: #7386D5;
            background: #fff;
        }

        #sidebar.copyright{

        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #fff;
            background: #6d7fcc;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }


        a.download {
            background: #fff;
            color: #7386D5;
        }

        a.article,
        a.article:hover {
            background: #6d7fcc !important;
            color: #fff !important;
        }
        .dash-module{
          min-width: 310px;
          width:40vw;
          max-height: 250px;
          color: black;
          margin:5px;
          padding: 10px;
          background-color: white;
          border-radius: 5px;
          -webkit-box-shadow: 5px 5px 15px -6px rgba(0,0,0,0.74);
          -moz-box-shadow: 5px 5px 15px -6px rgba(0,0,0,0.74);
          box-shadow: 5px 5px 15px -6px rgba(0,0,0,0.74);
          overflow-y: scroll;
        }
        .dash{
          display: flex;
          flex-wrap: wrap;
          justify-content: center;

        }
        .sidebar-user{
          min-width: 250px;
          max-width: 250px;
          position: absolute;
          bottom: 0;
          width: 100%;
          background-color: white;
          display:flex;
          flex-direction: row;
        }
        .sidebar-user-img{
          width: 30%;
        }
        .sidebar-user-id{
          padding:5px;
          width: 60%;
          min-height: 50px;
        }
        @media only screen and (max-device-width: 480px) {
          .sidebar-user-id{
            padding:5px;
            margin-bottom: 60px;
            width: 60%;
            min-height: 50px;
          }
          .dash{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-bottom: 60px;
          }
            }

        /* ---------------------------------------------------
            CONTENT STYLE
        ----------------------------------------------------- */

        #content {
            width: 100%;
            height: 100vh;
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
            color:white;
            overflow-y: scroll;
            overflow-x: visible;
      }

        /* ---------------------------------------------------
            MEDIAQUERIES
        ----------------------------------------------------- */

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }
            #sidebar.active {
                margin-left: 0;
            }
            #sidebarCollapse span {
                display: none;
            }
        }
        .dot {
  height: 25px;
  width: 25px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
}
.Popup{;
    position:fixed;
top:0;
left:0;
background:rgba(0,0,0,0.6);
z-index:5;
width:100%;
height:100%;
    z-index: 10;
};
</style>
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="mobile-web-app-capable" content="yes">
        <title>Job Tracker</title>
        <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="wrapper">
            <!-- Sidebar  -->
            <div id="sidebar">
                <div class="sidebar-header">
                  <h5> PAGE By Trogy.NZ</h5>
                </div>

                <ul class="components">
                  <li>
                      <h5><a href="index.php">Home</a></h5>
                  </li>
                </ul>
                <div class="sidebar-user">
                  <div class="sidebar-user-img">
                    <img src="https://ui-avatars.com/api/?name=North+Shore&background=0D8ABC&color=fff&rounded=true" alt="" style="width:100%;">
                  </div>
                  <div class="sidebar-user-id">
                    <p style="padding-bottom:5px; margin-bottom:0px;">Built By Trogy.NZ</p>
                  </div>
                </div>
            </div>
            <!-- Page Content  -->
            <div id="content">
              <div id="Popup"></div>
                        <button type="button" id="sidebarCollapse" class="btn">
                            <i class="fas fa-bars"></i>
                            <span>Toggle Sidebar</span>
                        </button>
                        <br>  <br>
                        <h2 style="text-align:center;" class="animate__animated animate__fadeInUp"> Welcome</h2>
                        <h5 style="text-align:center;" class="animate__animated animate__fadeInUp"> </h5>
                        <br><br>
                        <script>
                        $(document).ready(function(){
                            $("#orange").load("API/Orange.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                            $("#red").load("API/Red.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                            $("#green").load("API/Green.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                            $("#purple").load("API/Purple.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                            $("#arrivals").load("API/Station.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                            $("#complete").load("API/Jobs.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                        });

                        </script>
                        <div class="dash animate__animated animate__fadeInUp animate__delay-1s">
                          <div class="dash-module animate__animated animate__fadeInUp animate__delay-1s">
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s" id="SA_Title"> Station Arrivals</h3>
                            <hr class="animate__animated animate__fadeIn animate__delay-2s">
                            <p class="animate__animated animate__fadeIn animate__delay-2s"> <div id=arrivals></div> </p>
                          </div>
                          <div class="dash-module animate__animated animate__fadeInUp animate__delay-1s">
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s" id="OR_Title"> Orange Jobs</h3>
                            <hr class="animate__animated animate__fadeIn animate__delay-2s">
                            <p class="animate__animated animate__fadeIn animate__delay-2s"> <div id=orange></div> </p>
                          </div>
                          <div class="dash-module animate__animated animate__fadeInUp animate__delay-1s">
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s" id="JB_Title"> Complete Jobs</h3>
                            <hr class="animate__animated animate__fadeIn animate__delay-2s">
                            <p class="animate__animated animate__fadeIn animate__delay-2s"> <div id=complete></div> </p>
                          </div>
                          <div class="dash-module animate__animated animate__fadeInUp animate__delay-1s">
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s" id="RD_Title"> Red Jobs</h3>
                            <hr class="animate__animated animate__fadeIn animate__delay-2s">
                            <p class="animate__animated animate__fadeIn animate__delay-2s"> <div id=red></div> </p>
                          </div>
                          <div class="dash-module animate__animated animate__fadeInUp animate__delay-1s">
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s" id="GR_Title"> Green Jobs</h3>
                            <hr class="animate__animated animate__fadeIn animate__delay-2s">
                            <p class="animate__animated animate__fadeIn animate__delay-2s"> <div id=green></div> </p>
                          </div>
                          <div class="dash-module animate__animated animate__fadeInUp animate__delay-1s">
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s" id="PU_Title"> Purple Jobs</h3>
                            <hr class="animate__animated animate__fadeIn animate__delay-2s">
                            <p class="animate__animated animate__fadeIn animate__delay-2s"> <div id=purple></div> </p>
                          </div>
                          <div class="dash-module animate__animated animate__fadeInUp animate__delay-1s">
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s"> Debug</h3>
                            <hr class="animate__animated animate__fadeIn animate__delay-2s">
                            <p class="animate__animated animate__fadeIn animate__delay-2s"> Modules after this contain debug information </p>
                          </div>
                          <div class="dash-module animate__animated animate__fadeInUp animate__delay-1s">
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s"> Orange Content</h3>
                            <hr class="animate__animated animate__fadeIn animate__delay-2s">
                            <p class="animate__animated animate__fadeIn animate__delay-2s"> <div id=orange_content></div> </p>
                          </div>
                          <div class="dash-module animate__animated animate__fadeInUp animate__delay-1s">
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s"> Green Content</h3>
                            <hr class="animate__animated animate__fadeIn animate__delay-2s">
                            <p class="animate__animated animate__fadeIn animate__delay-2s"> <div id=green_content></div> </p>
                          </div>
                          <div class="dash-module animate__animated animate__fadeInUp animate__delay-1s">
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s"> Arrivals Content</h3>
                            <hr class="animate__animated animate__fadeIn animate__delay-2s">
                            <p class="animate__animated animate__fadeIn animate__delay-2s"> <div id=arrivals_content></div> </p>
                          </div>
                          <div class="dash-module animate__animated animate__fadeInUp animate__delay-1s">
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s"> Complete Jobs Content</h3>
                            <hr class="animate__animated animate__fadeIn animate__delay-2s">
                            <p class="animate__animated animate__fadeIn animate__delay-2s"> <div id=jobs_content></div> </p>
                          </div>
                          <div class="dash-module animate__animated animate__fadeInUp animate__delay-1s">
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s"> Purple Content</h3>
                            <hr class="animate__animated animate__fadeIn animate__delay-2s">
                            <p class="animate__animated animate__fadeIn animate__delay-2s"> <div id=purple_content></div> </p>
                          </div>
                          <div class="dash-module animate__animated animate__fadeInUp animate__delay-1s">
                            <h3 class="animate__animated animate__fadeIn animate__delay-2s"> Red Content</h3>
                            <hr class="animate__animated animate__fadeIn animate__delay-2s">
                            <p class="animate__animated animate__fadeIn animate__delay-2s"> <div id=red_content></div> </p>
                          </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });

            setInterval(function(){
                $("#red_content").load("API/Change_Red.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                $("#purple_content").load("API/Change_Purple.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                $("#jobs_content").load("API/Change_Jobs.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                $("#orange_content").load("API/Change_Orange.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                $("#green_content").load("API/Change_Green.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                $("#arrivals_content").load("API/Change_Station.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                $("#orange").load("API/Orange.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                $("#red").load("API/Red.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                $("#green").load("API/Green.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                $("#purple").load("API/Purple.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                $("#arrivals").load("API/Station.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
                $("#complete").load("API/Jobs.php?k=<?php echo $_COOKIE['DC_SESSION'];?>&iset=<?php echo time();?>");
            }, 5000);


        </script>
    </body>

    </html>
