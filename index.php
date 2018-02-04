<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spirit8 - Digital Agency One Page Template</title>
    <meta name="description" content="Spirit8 is a Digital agency one page template built based on bootstrap framework. This template is design by Robert Berki and coded by Jenn Pereira. It is simple, mobile responsive, perfect for portfolio and agency websites. Get this for free exclusively at ThemeForces.com">
    <meta name="keywords" content="bootstrap theme, portfolio template, digital agency, onepage, mobile responsive, spirit8, free website, free theme, themeforces themes, themeforces wordpress themes, themeforces bootstrap theme">
    <meta name="author" content="ThemeForces.com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <style>
    #tf-professor {
        padding: 80px 0;
    }
    .papers {
        position: relative;
        width: 90%;
        padding: 2em;
        margin: 0px auto;
        margin-top: 40px;
        font-size: 16px;
    }
    .papers, .papers:before, .papers:after {
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: inset 0 0 30px rgba(0,0,0,0.1), 1px 1px 3px rgba(0,0,0,0.2);
    }
    .papers:before, .papers:after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        -webkit-transform: rotateZ(2.5deg);
        -o-transform: rotate(2.5deg);
        transform: rotateZ(2.5deg);
        z-index: -1;
    }
    :before, :after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .papers:after {
        -webkit-transform: rotateZ(-2.5deg);
        -o-transform: rotate(-2.5deg);
        transform: rotateZ(-2.5deg);
    }
    .papers img{
        max-width: 100%;
    }
    .papers h2{
        margin: 30px 0;
        font-size: 40px;
    }
    .papers h2 span{
        font-size: 22px;
    }

    #tf-services .about-list{
        text-align: left;
        max-width: 300px;
        margin: 12px auto 20px auto;
    }





    #tf-plans{
        background: url(../img/05.jpg);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        color: #ffffff;
    }

    #tf-plans .overlay{
        background: -moz-linear-gradient(top,  rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.73) 17%, rgba(0,0,0,0.66) 35%, rgba(0,0,0,0.55) 62%, rgba(0,0,0,0.4) 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.8)), color-stop(17%,rgba(0,0,0,0.73)), color-stop(35%,rgba(0,0,0,0.66)), color-stop(62%,rgba(0,0,0,0.55)), color-stop(100%,rgba(0,0,0,0.4))); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.73) 17%,rgba(0,0,0,0.66) 35%,rgba(0,0,0,0.55) 62%,rgba(0,0,0,0.4) 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.73) 17%,rgba(0,0,0,0.66) 35%,rgba(0,0,0,0.55) 62%,rgba(0,0,0,0.4) 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.73) 17%,rgba(0,0,0,0.66) 35%,rgba(0,0,0,0.55) 62%,rgba(0,0,0,0.4) 100%); /* IE10+ */
        background: linear-gradient(to bottom,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0.73) 17%,rgba(0,0,0,0.66) 35%,rgba(0,0,0,0.55) 62%,rgba(0,0,0,0.4) 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc000000', endColorstr='#66000000',GradientType=0 ); /* IE6-9 */
        padding: 80px 0;
        background-attachment: fixed;
    }
    #plan {
        padding: 30px 0;
    }
    #plan .item{
        display: block;
        width: 100%;
        height: auto;
    }

    #plan .item p {
        font-weight: 400;
        margin: 30px 0;
        color: #d1d1d1;
    }

    #plan table{
        text-align: left;
    }
    #plan .td_title{
        max-width: 400px;
        height: 50px;
    }


    #testimonial .td_title{
        max-width: 580px;
        /* height: 50px; */
    }
    </style>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Spirit8</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#tf-home" class="page-scroll">Home</a></li>
            <li><a href="#tf-about" class="page-scroll">About</a></li>
            <li><a href="#tf-team" class="page-scroll">Team</a></li>
            <li><a href="#tf-services" class="page-scroll">Services</a></li>
            <li><a href="#tf-works" class="page-scroll">Portfolio</a></li>
            <li><a href="#tf-testimonials" class="page-scroll">Testimonials</a></li>
            <li><a href="#tf-contact" class="page-scroll">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1><strong><span class="color">軟體工程實驗室</span></strong> && <strong><span class="color">軟體開發與測試實驗室</span></strong></h1>
                <p class="lead"><strong>SELab</strong> & <strong>SDTLab</strong></p>
                <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
            </div>
        </div>
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="image/welcome.png" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h4>About us</h4>
                            <h2>關於<strong>軟體工程</strong></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro">它涉及到程式設計語言、資料庫、軟體開發工具、系統平台、標準、設計模式等方面。其後的幾十年裡，各種有關軟體工程的技術、思想、方法和概念不斷被提出，軟體工程逐步發展為一門獨立的科學。</p>
                        <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>軟體工程</strong> - <em>Software Engineering</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>軟體開發</strong> - <em>Software Development</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>軟體測試</strong> - <em>Software Testing</em>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Professor Page
    ==========================================-->
    <div id="tf-professor" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2><strong>指導</strong>教授</h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="papers text-center">
                        <img src="image/mugshot/wkc-A.png" alt="">
                        <h2>陳偉凱 <span>教授</span></h2>
                        <p>美國北卡州大 電機電腦工程系<br>計算機工程碩士</p>
                        <p>美國北卡州大 電機電腦工程系<br>計算機工程博士</p>
                        <p>宏裕科技大樓 1523</p>
                        <p>wkc@csie.ntut.edu.tw</p>
                        <p><a href="http://www.cc.ntut.edu.tw/~wkchen" target="blank">http://www.cc.ntut.edu.tw/~wkchen</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="papers text-center">
                        <img src="./image/mugshot/cliu-A.png" alt="">
                        <h2>劉建宏<span>教授</span></h2>
                        <p>美國南加州大學<br>電機工程碩士</p>
                        <p>美國德州大學 阿靈頓分校<br>計算機科學與工程博士</p>
                        <p>宏裕科技大樓 1521</p>
                        <p>cliu@ntut.edu.tw</p>
                        <p><a href="http://www.cc.ntut.edu.tw/~cliu" target="blank">http://www.cc.ntut.edu.tw/~cliu</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Research Section
    ==========================================-->
    <div id="tf-services" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2><strong>研究</strong>重點</h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <!-- <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small> -->
            </div>
            <!-- <div class="space"></div> -->
            <div class="row">
                <div class="col-md-4 col-sm-12 service">
                    <i class="fa fa-desktop"></i>
                    <h4><strong>Software Engineering</strong></h4>
                    <ul class="about-list">
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>Object-Oriented Analysis and Design</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>Design Patterns</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>Agile Process</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>Visual Language</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>Personal Process Improvement</em>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6 service">
                    <i class="fa fa-mobile"></i>
                    <h4><strong>Software Testing</strong></h4>
                    <ul class="about-list">
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>Android App Testing</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>Cloud Testing Service</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>Web & Web Service Testing</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>GUI Testing</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>Game Testing</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>Embedded Testing</em>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6 service">
                    <i class="fa fa-bullhorn"></i>
                    <h4><strong>Software Development</strong></h4>
                    <ul class="about-list">
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>App Development</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>HTML5 Application Development</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>Computer Games</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>E-learning</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <em>Wearable Device App</em>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Plans Section
    ==========================================-->
    <div id="tf-plans" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2><strong>研究</strong>計畫</h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="plan" class="owl-carousel owl-theme">
                            <?php
                            $handle = fopen("data/projects.json","rb");
                            $content = "";
                            while (!feof($handle)) {
                                    $content .= fread($handle, 10000);
                            }
                            fclose($handle);
                            
                            $items_count = 1;

                            $content = json_decode($content);
                            echo "<div class=\"item\"><table class=\"table\"><tbody>";
                            foreach ($content as $key => $value) {
                                if($items_count>10){
                                    echo "</tbody></table></div>";
                                    echo "<div class=\"item\"><table class=\"table\"><tbody>";
                                    $items_count = 1;
                                }
                                
                                echo "
                                <tr>
                                    <td>$value->year</td>
                                    <td>$value->unit</td>
                                    <td class=\"td_title\">$value->project_name</td>
                                    <td>$value->comments</td>
                                </tr>
                                ";
                                $items_count++;
                            }
                            echo "</tbody></table></div>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Page
    ==========================================-->
    <div id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2>實驗室<strong>成員</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div id="team" class="owl-carousel owl-theme row">
                    <?php
                    $handle = fopen("data/members.json","rb");
                    $content = "";
                    while (!feof($handle)) {
                            $content .= fread($handle, 10000);
                    }
                    fclose($handle);

                    $content = json_decode($content);
                    foreach ($content as $key => $value) {
                        $photo = $value->photo . '-A.png';
                        if($value->photo == 'none'){
                            $photo = 'none.png';
                        }
                        echo "
                        <div class=\"item\">
                            <div class=\"thumbnail\">
                                <img src=\"image/mugshot/$photo\" alt=\"...\" class=\"img-circle team-img\">
                                <div class=\"caption\">
                                    <h3>$value->name</h3>
                                    <p>$value->year 級</p>
                                    <p>論文題目</p>
                                </div>
                            </div>
                        </div>
                        ";
                    }
                    ?>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Portfolio Section
    ==========================================-->
    <div id="tf-works">
        <div class="container"> <!-- Container -->
            <div class="section-title text-center center">
                <h2>研究室<strong>設備</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <!-- <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small> -->
            </div>
            <!-- <div class="space"></div> -->

            <div class="categories">
                
                <ul class="cat">
                    <li class="pull-left"><h4>Filter by Type:</h4></li>
                    <li class="pull-right">
                        <ol class="type">
                            <li><a href="#" data-filter="*" class="active">All</a></li>
                            <li><a href="#" data-filter=".web">Web Design</a></li>
                            <li><a href="#" data-filter=".photography">Photography</a></li>
                            <li><a href="#" data-filter=".app" >Mobile App</a></li>
                            <li><a href="#" data-filter=".branding" >Branding</a></li>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div id="lightbox" class="row">

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/01.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 photography app">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/02.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/03.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/04.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/05.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 app">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/06.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 photography web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/07.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/08.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Testimonials Section
    ==========================================-->
    <div id="tf-testimonials" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2><strong>Group</strong> Meeting</h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="testimonial" class="owl-carousel owl-theme">
                            <?php
                            $handle = fopen("data/presentationHistory.json","rb");
                            $content = "";
                            while (!feof($handle)) {
                                    $content .= fread($handle, 10000);
                            }
                            fclose($handle);
                            
                            $items_count = 1;

                            $content = json_decode($content);
                            echo "<div class=\"item\"><table class=\"table\"><tbody>";
                            foreach ($content as $key => $value) {
                                if($items_count>10){
                                    echo "</tbody></table></div>";
                                    echo "<div class=\"item\"><table class=\"table\"><tbody>";
                                    $items_count = 1;
                                }
                                
                                echo "
                                <tr>
                                    <td>$value->date</td>
                                    <td>$value->name</td>
                                    <td class=\"td_title\">$value->topic</td>
                                </tr>
                                ";
                                $items_count++;
                            }
                            echo "</tbody></table></div>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2><strong>新生</strong>專區</h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                        <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>            
                    </div>

                    <!-- <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" class="btn tf-btn btn-default">Submit</button>
                    </form> -->

                </div>
            </div>

        </div>
    </div>

    <nav id="footer">
        <div class="container">
            <div class="pull-left fnav">
                <p>ALL RIGHTS RESERVED. COPYRIGHT © 2014. Designed by <a href="https://dribbble.com/shots/1817781--FREEBIE-Spirit8-Digital-agency-one-page-template">Robert Berki</a> and Coded by <a href="https://dribbble.com/jennpereira">Jenn Pereira</a></p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>

    <script src="js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>