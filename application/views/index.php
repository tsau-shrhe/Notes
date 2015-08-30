<!DOCTYPE html>
<html>
    <head lang="zh-Hant-TW">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="">
        <title>ShrHe 學習筆記</title>
        <!-- Bootstrap core CSS -->
        <link href="./assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="./assets/css/bootstrap/starter-template.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="./assets/css/bootstrap/carousel.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
        footer{
        background-color: #f5f5f5;
        margin-bottom: -40px;
        }
        .jumbotron{
        background-color: #FFC2C2;
        margin-bottom: -40px;
        }
        a , a:hover {
            text-decoration:none;
            color :#696969;
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">ShrHe 筆記</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">HMTL</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JS</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PHP<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">PHP</a></li>
                                <li><a href="#">Codeigniter</a></li>
                            </ul>
                        </li>
                        <li><a href="#">ABOUT</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <!-- jumbotron-->
        <div class="jumbotron">
            <div class="container">
                <!--左文右圖-->
                <a href= <?php base_url();?>"User">
                <div class="row">
                    <div class="col-md-5 col-md-push-7">
                        <img class="img-responsive" src="./assets/img/index/user.png" data-src="holder.js/500x400/auto" alt="image">
                    </div>                    
                    <div class="col-md-7 col-md-pull-5">
                            <H1 class="text-center"><strong>《簡易會員系統》</strong></H1>
                            <h2 class="text-justify text-muted">使用CI搭配MYSQL製作簡易會員系統，可新增、更新、刪除、搜尋的系統.</h2>
                        <br>
                        <div class="row">
                            <a href="#"><div class="col-md-3"><h4>作者:Shrhe</h4></div></a>
                            <a href="#"><div class="col-md-4"><h4>類別:Codeigniter</h4></div></a>
                            <a href="#"><div class="col-md-5"><h4>建立日期:2015/08/24</h4></div></a>
                        </div>
                    </div>
                </div>
                </a>
                <hr>
                <!--左文右圖結束-->
                <!--左圖右文-->
                <a href=<?php base_url();?>"photo_upload">
                <div class="row">
                    <div class="col-md-5">
                        <img class="img-responsive" src="./assets/img/index/photo_upload.png" data-src="holder.js/500x400/auto" alt="image">
                    </div>
                    <div class="col-md-7">
                            <H1 class="text-center"><strong>《圖片上傳顯示》</strong></H1>
                            <h2 class="text-justify text-muted">限制上傳圖片格式為(JPG / PNG / GIF)及檔案容量小於500kb以下的圖片，上傳完閉後顯示圖片.</h2>
                        <br>
                        <div class="row">
                            <a href="#"><div class="col-md-3"><h4>作者:Shrhe</h4></div></a>
                            <a href="#"><div class="col-md-4"><h4>類別:Codeigniter</h4></div></a>
                            <a href="#"><div class="col-md-5"><h4>建立日期:2015/08/22</h4></div></a>
                        </div>
                    </div>
                </div>
                </a>
                <hr>
                <!--左圖右文結束-->
                <!--左文右圖-->
                <a href=<?php base_url();?>"holle/show">
                <div class="row">
                    <div class="col-md-5  col-md-push-7">
                        <img class="img-responsive" src="./assets/img/index/holle.png" data-src="holder.js/500x400/auto" alt="image">
                    </div>
                    <div class="col-md-7  col-md-pull-5">
                            <H1 class="text-center"><strong>《網站訪問人數》</strong></H1>
                            <h2 class="text-justify text-muted">Codeigniter的第一個練習作品，使用PHP讀取修改文字檔案方式，製作實用的網頁瀏覽人數累計功能.</h2>
                        <br>
                        <div class="row">
                            <a href="#"><div class="col-md-3"><h4>作者:Shrhe</h4></div></a>
                            <a href="#"><div class="col-md-4"><h4>類別:Codeigniter</h4></div></a>
                            <a href="#"><div class="col-md-5"><h4>建立日期:2015/08/15</h4></div></a>
                        </div>
                    </div>
                </div>
                </a>
                <hr>
                <!--左文右圖結束-->
                <!--<hr class="featurette-divider">-->
            </div>
        </div>
        <!-- jumbotron結束-->
        <footer class="footer">
            <div class="container" >
                <h4 class="text-muted text-center">
                <strong>Copyright © 2015 by Shrhe</strong>
                </h4>
            </div>
        </footer>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="./assets/js/v1.11.3.jquery.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="./assets/js/holder.min.js"></script>
    </body>
</html>