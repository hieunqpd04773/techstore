
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Bootstrap JavaScript -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="content/css/shopping-cart.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <SCript>
            function cong(productID) {
                var t=document.getElementById(productID).value;
                document.getElementById(productID).value=parseInt(t)+1;

            }
            function tru(productID) {
                var t=document.getElementById(productID).value;
                document.getElementById(productID).value=parseInt(t)-1;
              
            }
    </SCript>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="content-wrap col-md-12 col-sm-12 col-xs-12">
                <!-- Begin Heading 2 -->
                <div class="title-page">
                    <h2>Giỏ hàng</h2>
                </div>
                <!-- End Heading 2 -->

                <!-- Cart Form -->
                <div class="form">
                    <form class="cart-form">
                        <table class="cart-table">
                            <!-- Table Header -->
                            <thead>
                                <tr>
                                    <th class="product-remove"></th>
                                    <th class="product-thumbnail"></th>
                                    <th class="product-name">Sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tạm tính</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Begin Line 2 -->

                                <?php 

                                    $tongtien_sp=0;
                                    $tam_tinh=0;
                                    $ship=30000;
                                    if(!empty($_SESSION['mycart'])){
                                    $i=0;
                                    foreach ($_SESSION['mycart'] as $cart){
                                
                                    $id=$cart['productID'];
                                    $productID=$id;
                                    $pro_image="content/images/products/".$cart['pro_image'];
                                    $tongtien_sp+=(int)$cart['pro_price']*(int)$cart['number'];
                                ?>
                                <form action="" method="post"enctype="multipart/form-data">
                                <tr>
                                    <input type="hidden" name="productID" value="<?php echo $productID;?>">
                                    <td class="product-remove">
                                                <a href=".?controller=delete_cart&ID=<?php echo $cart['productID'];?>"><i name="delete-cart"class="fas fa-times"></i></a>
                                    </td>

                                    <td class="product-thumbnail">
                                        
                                        <img id="img1" src="<?php echo "$pro_image" ?>" alt="">
                                    </td>

                                    <td style="text-align: left;" class="product-name">
                                            <a class="remove" href=".?controller=detail_product&ID=<?php echo$cart['productID']; ?>"><?php echo $cart['pro_name'];?></a>
                                    </td>

                                    <td class="product-price">
                                        <span>
                                            <?php echo $cart['pro_price'];?>
                                            <span>VNĐ</span>
                                            
                                        </span>
                                    </td>
                                    
                                    <td class="product-quantity">
                                        <div class="buttons_added">
                                            <input class="minus is-form" type="button" value="-" onclick="tru(<?php echo $id;?>)">
                                            <input style="width:50px; !important"  aria-label="quantity" class="input-qty" min="1" name="number" id="<?php echo $id;?>" type="number" value="<?php echo $cart['number']; ?>">
                                            <input class="plus is-form" type="button" value="+" onclick="cong(<?php echo $id; ?>)">
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span style="font-size: 14px; font-weight: bold;">
                                            <p ><?php echo $tongtien_sp; ?><span>VNĐ</span></p>
                                        </span>
                                    </td>
                                </tr>
                                <?php
                                    $tam_tinh+=$tongtien_sp;
                                    $i+=1;
                                    }
                                }else{?>
                                    <tr>
                                        <td><p>Chưa có sản phẩm nào trong giỏ hàng</p></td>
                                    </tr>
                                <?php }?>
                                <!-- End Line 2 -->

                                <!-- Begin Coupon, Update Cart -->
                                <tr>
                                    <td colspan="6" class="">
                                        <div class="coupon">
                                            <label></label>
                                                <input id="input1" type="text" placeholder="Mã ưu đãi" />
                                                <button id="button2" type="submit" class="button">Áp dụng</button>
                                            
                                        </div>
                                            <button id="button1" name="update_cart" class="button" type="submit">Cập nhật giỏ hàng</button>
                                    </td>
                                </tr>
                                </form>
                                <!-- End Coupon, Update Cart -->

                            </tbody>
                            <!-- End Table Body -->
                        </table>
                    </form>
            <div class="thanh-toan">
                <div class="dang-ky-thanh-toan">
                <?php if(!empty($_SESSION['check_login_3'])){
                        extract($_SESSION['check_login_3']);
                ?>
                <form action="" method="post" class="form-dang-nhap" id="kiem_loi_form" enctype="multipart/form-data">
                    <h2>Thông tin tài khoản</h2>
                    <div class="form-group-login">
                        <label for="">Họ và Tên</label><br>
                        <input readonly name="user_name" value="<?php echo $user_name ?>" id="ho_ten" type="text" class="form-input">
                    </div>
                    <div class="form-group-login">
                        <label for="">Email</label><br>
                        <input readonly name="user_email" value="<?php echo $user_email?>" type="email" id="email" class="form-input">
                    </div>
                    <div class="form-group-login">
                        <label for="">Số Điện Thoại</label><br>
                        <input readonly name="user_phone" value="<?php echo $user_phone?>" type="number" id="so_dien_thoai" class="form-input">
                    </div>
                    <div class="form-group-login">
                        <label for="">Địa Chỉ</label><br>
                        <input name="order_address" type="text" value="<?php echo $user_address?>" id="dia_chi" class="form-input">
                    </div>
                    <div class="form-group-login">
                        <label for="">Ghi chú</label><br>
                        <textarea name="order_note" class="form-input" id="" cols="67" rows="4" placeholder="Nhập ghi chú ở đây"></textarea>
                    </div>
                    <input name="vai_tro" value="0" type="hidden">
                    <input name="order_status" value="1" type="hidden">
                    <input name="mat_khau" value="<?=$mat_khau?>" type="hidden">
                    <input name="userID" value="<?php echo $userID?>" type="hidden">  
                <?php }else{
                        echo '<b style="text-align:center; margin-top:100px;" class="text-success">Đăng nhập để tiến hành thanh toán</b>';
                }?>
            </div>
                    <div class="cart-collaterals">
                        <div class="cart_totals">
                            <table class="table1">
                                <thead>
                                    <th class="th1" colspan="2">Cộng giỏ hàng</th>
                                </thead>
                                <tbody>
                                    <tr></tr>
                                    <th>Tạm tính</th>
                                    <td>
                                        <strong>
                                        <span>
                                            <?php echo number_format($tam_tinh);?>
                                            <span>VNĐ</span>
                                        </span>
                                        </strong>
                                    </td>


                                    <tr></tr>
                                    <th>Giao hàng</th>
                                    <td>
                                        <strong>
                                            <span>
                                                <?php echo number_format($ship);?>  
                                                <span>VNĐ</span>
                                            </span>
                                        </strong>
                                    </td>

                                    <tr></tr>
                                    <th>Tổng</th>
                                    <td>
                                        <strong>
                                            <span>
                                                <?php
                                                    $thanh_toan=$tam_tinh+$ship;
                                                    echo number_format($thanh_toan);
                                                    
                                                ?>
                                                <input type="hidden" name="order_total" value="<?php echo $thanh_toan ?>"> 
                                                <span>VNĐ</span>
                                            </span>
                                        </strong>
                                    </td>
                                </tbody>
                                <?php if(!empty($_SESSION['check_login_3']) && !empty($_SESSION['mycart'])){?>
                                <tfoot>
                                    <!-- Thanh _toán -->
                                    <th colspan="2">
                                        <div>
                                            <input type="hidden" name="order_total" value="<?php echo $thanh_toan;?>">
                                            <button onclick="return confirm('Bạn muốn thanh toán đơn hàng?')" class="btn-login" style="width: 100%;" name="controller" value="insert_order">Tiến hành đặt hàng</button>
                                        
                                            
                                        </div>
                                    </th>
                                </tfoot>
                                <?php }?>
                                </form>
                            </table>
                        </div>
                    </div>
                    <!--End Cart Total -->

                    </div>
                </div>
                <!-- End Cart Form -->

            </div>
        </div>
    </div>
</body>
</html>