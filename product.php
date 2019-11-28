
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/test.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="font/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=K2D:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/set1.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  

</head>

<body>
    <header class="nav-top head">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#">
                        <!-- <img src="img/logo.png" class="logo" alt=""> -->
                        SHOP NHUẬN LINH
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse nav-right" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Trang Chủ
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about-us.php">Giới Thiệu</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="product.php">Sản Phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Liên Hệ</a>
                            </li>
                           <li class="nav-item">
                           <a class="nav-link"href="session.php"><i class="fa fa-cart-plus" aria-hidden="true" ></i>Giỏ Hàng</a>
                           </li>
                      </div>
                        </ul>
                        
                         
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div class="banner">
        <div class="autoplay css_slider">
            <img src="img/00.jpg" alt="">
            <img src="img/1.jpg" alt="">
            <img src="img/2.jpg" alt="">
            <img src="img/3.jpg" alt="">
        </div>
    </div>
    <div class="container body-archive">
        <div class="col-xs-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="#">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item">Sản phẩm</li>
                </ol>
            </nav>
        </div>
       
        <div>
     
                    <div>
                    <h2 align="center">Sản Phẩm Bán Chạy</h2>
                <div class="container"> 
                <div class="row"> 
                <?php require("configsever.php");?>
                    <?php 
                        // error_reporting(0);
                        $query = "SELECT * FROM san_pham";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0)
                        {
                            while ($row = mysqli_fetch_assoc($result)) 
                            {   
                                
                                $id=$row['id'];
                                $name=$row['ten'];
                                $gia=$row['gia'];
                                $img=$row['hinhanh'];
                                $content=$row['noidung'];
                                echo "<div class='col-md-4 col-sm-6 new-box'> ";
                                echo "<div class='products'> <img class='img-fluid' src='$img' alt=''> ";
                                echo "  <div class='products-details animate'> ";
                                echo "   <div class='products-header'> ";
                                echo "   <h1>  $name  </h1> ";
                                echo "  <h3> Giá: $gia </h3> ";
                                echo "  </div> ";
                                echo "    <div class='products-detail'> ";
                                echo "   <p>$content</p> ";
                                echo "   <div class='social'> <a href='https://www.facebook.com/Linhnhi.nhongnheo/about?lst=100007129333094%3A100007129333094%3A1573740601/' class='social-icon facebook animate'><span class='fa fa-facebook'></span></a> <a href='https://twitter.com/thinphm34098405' class='social-icon twitter animate'><span class='fa fa-twitter'></span></a> <br> <br>";
                                echo "<a href='order-by.php?action=add&chonhang=$id' class=''><img src='img/icon.png'/><span>Chọn Đặt Hàng </span></a>";
                                echo "<a href='session.php?page=products&action=add&themgiohang=$id'  ><img src='img/icon.png'/><span>Thêm Giỏ Hàng</span></button></a>";
                                 echo "<a href='blog-des.php?page=products&action=add&id=$id'  ><img src='img/icon.png'/><span>Thông tin <br> chi tiết</span></button></a>";


                                echo "  </div> ";
                                echo "  </div> ";
                                echo " </div> ";
                                echo " </div> ";
                                echo " </div> ";
                            }
                        }
                  ?>
             
                </div> 
                </div> 
  
                        
                            
                    </div>
                    </div>
                    </div>
                   

    <!-- post liên quan -->
    <div class="container ">
        <h3>MỘT SỐ SẢN PHẨM TƯƠNG TỰ</h3>
        <span>------</span>
        <div class="col-xs-12">
            <div class="slider-related row">
                <div class="item-slider-related">
                    <a href=""><img src="img/37.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Các Sản Phẩm Còn Lại</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> November 12, 2019 </span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/38.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Các Sản Phẩm Còn Lại</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> November 12, 2019 </span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/39.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Các Sản Phẩm Còn Lại</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> November 12, 2019 </span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/40.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Các Sản Phẩm Còn Lại</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> November 12, 2019 </span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/41.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Các Sản Phẩm Còn Lại</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> November 12, 2019 </span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/42.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Các Sản Phẩm Còn Lại</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> November 12, 2019 </span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/43.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Các Sản Phẩm Còn Lại</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> November 12, 2019 </span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/45.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Các Sản Phẩm Còn Lại</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> November 12, 2019 </span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
                <div class="item-slider-related">
                    <a href=""><img src="img/46.jpg" alt=""></a>
                    <h5 class="tl-related"><a href="">Các Sản Phẩm Còn Lại</a></h5>
                    <div class="time-new"><span><i class="fa fa-clock-o"></i> November 12, 2019 </span> - <span><i class="fa fa-user-circle"></i> SHOP NHUẬN LINH</span></div>
                </div>
            </div>
        </div>
    </div>
                            <div class="footer">
                <div class="container ft-top">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="title_ft">SHOP NHUẬN LINH</h3>
                            <span class="border-span"></span>
                            <p>
                               👏👏NGƯỜI TA THƯỜNG NÓI NGƯỜI ĐẸP VÌ LỤA<br>
                                🌟 LÚA TỐT VÌ PHÂN<br>
                                🌟Là con gái đẹp thôi chưa đủ <br>
                                🌟Quan trọng là cách ăn mặc của mình<br>
                                🎋LÀ CON GÁI PHẢI XINH <br>
                                👉👉👉Cái khó là bạn chọn đúng trang phục phù hợp với mình <br>
                                🌸🌸MẶC LÀ ĐẸP<br>
                                🌸🌸HÃY ĐẾN VỚI SHOP NHUẬN LINH <br>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h3 class="title_ft">Sản phẩm</h3>
                            <span class="border-span"></span>
                            <p>
                                <a href="/">ĐẦM NỮ</a>
                            </p>
                            <p>
                                <a href="">ĐỒ NỮ STREETWEAR</a>
                            </p>
                            <p>
                                <a href="">SET</a>
                            </p>
                            <p>...</p>
                        </div>
                        <div class="col-md-3">
                            <h3 class="title_ft">Liên hệ</h3>
                            <span class="border-span"></span>
                            <p>
                                <i class="fa fa-map-marker"></i> 180 Cao Lỗ ,Phường 4 , Quận 8</p>
                            <p>
                                <i class="fa fa-phone-square"></i> 0943202538</p>
                            <p>
                                <i class="fa fa-envelope"></i> mainhuanlinh@gmail.com</p>
                            <p>
                                <i class="fa fa-envelope"></i>
                                <i class="fa fa-envelope"></i>
                                <i class="fa fa-envelope"></i>
                                <i class="fa fa-envelope"></i>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h3 class="title_ft">FanPage</h3>
                            <span class="border-span"></span>
                            <iframe 
                                width="100%" height="200" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                        </div>
                    </div>
                </div>
                <div class="ft_bottom">
                    <div class="container">
                        <div class="col-xs-12">
                            Copyright © 2019 NHUẬN LINH. All Rights Reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a id="scroll-top" class='scroll-top' title="Back to top" href="#">
            <i class="fa fa-arrow-up"></i>
        </a>
</body>
<script defer > window.onload = function(){ setTimeout(function(){var chatJsElement = document.createElement("script"); chatJsElement.src = "https://app.ohchat.net/clients/43770/code.php"; chatJsElement.setAttribute("defer", "defer"); document.getElementsByTagName("body")[0].appendChild(chatJsElement);}, 300) }; </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
     <script type="text/javascript" src="http://demo.iwebs.vn/api/js/noel.js"></script>
    <script type="text/javascript" src="js/noel.js"></script> 
    </html>