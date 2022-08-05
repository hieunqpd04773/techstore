<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SM Mobile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c2e05c0cf1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="content/css/index.css">
    <link rel="stylesheet" href="content/css/details.css">
    <link rel="stylesheet" href="content/css/login.css">
    <link rel="stylesheet" href="content/css/cart-so-luong.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="content/js/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="content/css/jquery-ui.min.css">
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="content/js/cart-so-luong.js"></script>
    <link rel="shortcut icon" type="image/png" href="../public/images/modern-flat-mobile-icon-illustration-free-vector.jpg"/>
</head>
<body>
    <a href="javascript:void(0);" onclick="myLogin()"><div class="overlay-hide" id="overlay"></div></a>
    <div class="wrapper">
        <header>
            <div class="top-header">
                <div class="inside">
                    <div class="top-header-content">
                    <a href="index.html">
                        <figure class="logo-ifan">
                            <img src="content\images\products\LOGO-IFAN.png" alt="">
                        </figure>
                    </a>
                    <div class="top-header-right">
                        <div class="top-header-right-item">
                            <img src="content\images\products\auto1-150x98.png" alt="">
                        </div>
                        <div class="top-header-right-item">
                            <p><i class="fas fa-phone-alt"></i> 19002121</p>
                        </div>
                        <div class="top-header-right-item">
                            <p><i class="fas fa-map-marker-alt"></i>  Địa Chỉ</p>
                        </div>
                        <div class="top-header-right-item">
                            <a href="giohang.html"><i class="fas fa-shopping-bag"></i></a>
                        </div>
                        <div class="top-header-right-item">
                            <a href="javascript:void(0);" onclick="myLogin()"><i class="fas fa-user"></i></a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <script>
                function myLogin(){
                var y = document.getElementById("dang-nhap");
                if (y.className =="dang-nhap"){
                y.className +="-show";
                myOverlay();
                }else{
                y.className = "dang-nhap";
                myOverlay();
                }
              }
            </script>
            <div id="navbar">
                <div class="menu" id="menu">
                    <div class="inside">
                        <ul id="list-category">
                            <li><a href="index.html"><i style="font-size: 24px" class="fab fa-apple"></i></a></li>
                            <?php foreach ($categories as $key => $value): ?>
                                <li><a href="index.html"><?php echo $value->categoryname; ?></a></li>
                            <?php endforeach?>

                            <li><a href="">Phụ kiện</a></li>
                            <li><a href="">Dịch vụ</a></li>
                            <li><a href="">Khuyến mại</a></li>
                            <li><a href="">Giới thiệu</a></li>
                            <li>
                                <form action="<?=$SITE_URL?>/san-pham/liet-ke.php">
                                    <input class="input-search" type="text" placeholder="Bạn muốn mua gì?" name="keyword">
                                    <button class="submit-search" type="submit"><i class="fa fa-search"></i></button>
                                </form>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="content/images/products/slide.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="content/images/products/sildeiphone.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="content/images/products/slideiwatch.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
          <div class="content">
              <div class="inside">
                  <h2 class="title-listcard">Sản Phẩm</h2>
                  <div class="card-list" id="list-products">
                    <?php foreach ($cateIndex as $key => $value): ?>
                        <div class="card">
                            <div class="card-img">
                            <a href="">
                                <img src="content/images/products/<?php echo $value->cate_img ?>" style="width: 250px; height: 250px">
                            </a>
                            </div>
                            <div class="card-text">
                            <a href="chi-tiet.php?ma_sp=<?=$ma_sp?>">
                                <p><?php echo $value->categoryname ?></p>
                            </a>
                            </div>
                        </div>
                    <?php endforeach?>
                  </div>
          <!--Sản phẩm yêu thích-->
         
          </div>
        <footer id="footer">
            <div id="top-footer">
                <div class="row">
                    <div class="col">
                        <h4>Thông tin </h4>
                        <div class="contact">
                            <ul>
                                <li> <a href="#">Giới thiệu </a></li>
                                <li> <a href="#">Khuyến mại </a></li>
                                <li> <a href="#">Tuyển dụng </a></li>
                                <li>
                                    <a href="#">Chương trình liên kết</a>
                                </li>
                                <li> <a href="#">Hệ thống của hàng </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <h4>Chính sách </h4>
                        <div class="contact">
                            <ul>
                                <li> <a href="#">Chính sách đổi trả </a></li>
                                <li> <a href="#">Chính sách bảo mật </a></li>
                                <li> <a href="#">Chính sách hoạt động chung </a></li>
                                <li> <a href="#">Chính sách trả góp</a></li>
                                <li> <a href="#">Chính sách bảo hành </a></li>
                                <li> <a href="#">Chính sách Ship – COD </a></li>
                                <li><a href="#">Hướng dẫn Check IMEI </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <h4>Liện hệ </h4>
                        <div class="contact">
                            <ul>
                                <li> <a href="#">Gọi tư vấn mua hàng: <b> 1900.6626</b></a></li>
                                <li> <a href="#">Gọi khiếu nại: <b> 0886.308.688 </b></a></li>
                                <li> <a href="#">Dành cho Doanh nghiệp & Đối tác:<b> 0972.927.907 </b></a></li>
                                <li> <a href="#">Thiết bị của chúng tôi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                      <div class="contact_inf">
                       <div class="contact__img">
                            <img src="<?=$CONTENT_URL?>/images/products/tich.jpg" alt="">
                       </div>
                       <div class="contact__visa">
                             <img src="<?=$CONTENT_URL?>/images/products/visa.jpg" alt="">
                       </div>
                       <div class="form">
                           <div class="from_Register">
                            <p>Đăng ký nhận tin từ iFanStore</p>  
                           </div>
                            <div class="from_p">
                                <p> Nhận thông tin sản phẩm mới và chương trình khuyến mại của iFanStore</p>
                            </div>
                       </div>
                      </div>
                        <form action="" class="emailform">
                            <input id="input1" type="text" placeholder="Vui lòng nhập địa chỉ Email"><button id="button1" type="submit"><i class="fas fa-paper-plane"></i>&nbsp;Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
            <div id="copyrigt">
                <p>© 2022 Công ty CP HHD Việt Nam<br>
    
                    Giấy chứng nhận ĐKDN số 0107465657 do Sở kế hoạch và đầu tư thành phố Hà Nội cấp ngày 08 tháng 06 năm 2021. Địa chỉ: Số 428, Phường Hòa An, Quận Cẩm Lệ, Thành phố Đà Nẵng, Việt Nam<br>
                    Điện thoại: 0247.305.9999.<br>
                    Email: lienhe@iFanStore.com.<br>
                    Đại diện pháp luật: NGUYỄN QUANG HIẾU</p><br>
            </div>
        </footer>
    </div>
    <script>
    function myOverlay(){
    var y = document.getElementById("overlay");
    if (y.className =="overlay-hide"){
    y.className ="overlay";
    }else{
    y.className = "overlay-hide";
    }
    }
    
    </script>
    <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>