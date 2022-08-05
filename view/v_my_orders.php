<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="content/css/shopping-cart.css">
    <link rel="stylesheet" href="content/css/don-hang.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="content-wrap col-md-12 col-sm-12 col-xs-12">
                <!-- Begin Heading 2 -->
                <div class="title-page">
                    <h2>Đơn hàng của bạn</h2>
                </div>
                <!-- End Heading 2 -->
                <!-- Cart Form -->
                <div class="form">
                    <form class="cart-form">
                        <table class="cart-table">
                            <!-- Table Header -->
                            <thead>
                                <tr>
                                    <th class="product-remove">Mã ĐH</th>
                                    <th class="product-thumbnail">Ngày đặt mua</th>
                                    <th class="product-name">Tổng tiền</th>
                                    <th class="product-price">Địa chỉ</th>
                                    <th class="product-quantity">Ghi chú</th>
                                    <th class="product-subtotal">Tình trạng</th>
                                    <th class="product-subtotal">Chi tiết</th>
                                    <th class="product-subtotal">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($myOrders as $key=>$value):?>
                               <tr>
                                    <td><?php echo $value-> order_ID; ?></td>
                                    <td><?php echo $value-> order_date ?></td>
                                    <td class="product-price" ><?php echo number_format($value-> order_total)?> VNĐ</td>
                                    <td><?php echo $value-> order_address?></td>
                                    <td><?php echo $value-> order_note?></td>
                                    <td><?php if($value->order_status==1){
                                        echo "Đang xử lý";
                                        }elseif($value->order_status==2){
                                            echo "Đang giao hàng";
                                        }elseif($value->order_status==3){
                                            echo "Đã giao hàng";
                                        }elseif($value->order_status==4){
                                            echo "Trả hàng";
                                        }else{
                                            echo "Đã hủy đơn";
                                        }
                                        ?></td>
                                        
                                    <td><a href=".?controller=my_orders_detail&order_ID=<?php echo $value-> order_ID;?>" class='btn btn-secondary'>Xem</a></td>
                                    <td><?php if($value->order_status==1){?>
                                        <a class='btn btn-secondary' onclick="return confirm('Bạn chắc chắn hủy đơn hàng?')" href=".?controller=huydon&ID=<?php echo $value-> order_ID;;?>">Hủy đơn</a>
                                        <?php }?>
                                    </td>
                                    <?php endforeach?>
                               </tr>
                            </tbody>
                            <!-- End Table Body -->
                        </table>
                    </form>
                </div>
            </div>
        <!-- ĐƠN HÀNG CHI TIẾT -->
        <?php if(!empty($detail)){?>
            <div class="content-wrap col-md-12 col-sm-12 col-xs-12">
                <!-- Begin Heading 2 -->
                <div class="title-page">
                    <h2>Chi tiết đơn hàng mã <?php echo $order_ID;?></h2>
                </div>
                <!-- End Heading 2 -->
                <!-- Cart Form -->
               
                <div class="form">
                    <form class="cart-form">
                        <table class="cart-table">
                            <!-- Table Header -->
                            <thead>
                                <tr>
                                    <th class="product-remove">Mã ĐH</th>
                                    <th class="product-thumbnail">Tên Sản Phẩm</th>
                                    <th class="product-price">Số lượng</th>
                                    <th class="product-name">Giá Tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                        foreach($detail as $key => $value):
                                        $product=productDB::getProductById($value->productID); 
                                ?>    
                               <tr>
                                    <td><?php echo $value->order_ID; ?></td>
                                    <td><?php echo $product->pro_name; ?></td>
                                    <td><?php echo $value->number;?></td>
                                    <td class="product-price" ><?php echo number_format($value->price);?> VNĐ</td>
                               </tr>
                               <?php endforeach?>
                                  
                            </tbody>
                            <!-- End Table Body -->
                        </table>
                    </form>
                </div>
            </div>
        <?php }else{?>
            <b style="text-align:center; margin-top:100px;" class="text-success">Chọn đơn hàng để xem chi tiết</b>
        <?php }?>
        </div>
    </div>
</body>
</html>
