<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iFanStore</title>
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
    <link rel="shortcut icon" type="image/png" href="content/images/products/Apple-logo.png"/>
</head>
<body>
    <a href="javascript:void(0);" onclick="myLogin()"><div class="overlay-hide" id="overlay"></div></a>
    <div class="wrapper">
        <header>
            <div class="top-header">
                <div class="inside">
                    <div class="top-header-content">
                    <a href=".?controller">
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
                            <a href=".?controller=view_cart"><i class="fas fa-shopping-bag"></i></a>
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
            

        