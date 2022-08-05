<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <SCript>
        function cong(a) {
            var sl=a;
            var t=document.getElementById("textbox").value;
            document.getElementById("textbox").value=parseInt(t)+1;
            if(t >(sl-1)){
                document.getElementById("textbox").value=parseInt(t)+0;
                alert("Đã đạt tối đa số lượng trong kho");
            }
        }
        function tru() {
            var t=document.getElementById("textbox").value;
            document.getElementById("textbox").value=parseInt(t)-1;
            if(t <2){
                document.getElementById("textbox").value=parseInt(t)+0;
            }
        }
    </SCript>
</head>
<body>
<div class="content">
    <div class="inside">

		<div class="details">
			<section class="details-box-img">
				<figure class="box-img">
					<img src='content/images/products/<?php echo $pro->pro_image?>' >
				</figure>
			</section>
			<section class="details-box-info">
				<div class="info-details">
					<h2 class="title-product"><?php echo $pro->pro_name?></h2>
					<div class="gach-ngang"></div>
					<div class="memory">
						<p class="details-text"> Chọn dung lượng:<span> 128GB</span></p>
						<div class="memory-list">
							<span>1TB</span>
							<span>256GB</span>
							<span>512GB</span>
							<span>128GB</span>
						</div>
					</div>
					<div class="luotxem-ngaynhap">
						<p class="details-text">Ngày nhập: <span><?php echo $pro->pro_date?></span></p>
						<p class="details-text">Số lượt xem: <span><?php echo $pro->pro_view?> <i class="far fa-eye"></i></span></p>
                        <p class="details-text">Tình Trạng: <span>
                            <?php if($pro->pro_number>10){
                                echo "<span style='font-weight: bold;'>Còn hàng</span>";
                            }else if($pro->pro_number<=10 &&$pro->pro_number>0){
                                echo "<span style='color:red; font-weight: bold;'>Sắp hết hàng</span>";
                            }else{
                                echo "<span style='color:red; font-weight: bold;'>Hết hàng</span>";
                            } ?></span></p>
                        <del class="details-text" style="color: gray;">Giá cũ: <?php echo number_format($pro->pro_price)?> VNĐ</del>
						<p class="details-text">Giảm giá: <span><?php echo $pro->pro_discount?>%</span></p>
                        <?php $price= $pro->pro_price-$pro->pro_price/100*$pro->pro_discount;?>
					</div>
					<div class="gach-ngang1"></div>
					<div class="details-gia">
                        <p class="details-text">Giá bán: <?php echo number_format($price); ?> VNĐ</p>
					</div>
					<div class="add">
                        <form action="" method="post"enctype="multipart/form-data" >
                            <input type="hidden" name="productID" value="<?php echo $pro->productID?>">
                            <input type="hidden" name="pro_name" value="<?php echo $pro->pro_name?>">
                            <input type="hidden" name="pro_image" value="<?php echo $pro->pro_image?>">
                            <input type="hidden" name="pro_price" value="<?php echo $pro->pro_price?>">
                            <div class="buttons_added">
                                <input class="minus is-form" type="button" value="-" onclick="tru()">
                                <input readonly aria-label="quantity" class="input-qty" max="10" min="1" name="number" id="textbox" type="number" value="1">
                                <input class="plus is-form" type="button" value="+" onclick="cong(<?php echo $pro->pro_number?>)">
                            </div>
                            <?php if( $pro->pro_number>0){
                                echo "<button class='btn-add' name='controller' value='add_cart'>Thêm vào giỏ hàng</button>";
                            } else {
                                echo '<b style="text-align: center; padding-left: 50px;" class="text-success">Sản phẩm đã hết hàng</b>';
                            }?>
                        </form>
						
					</div>
				</div>
			</section>
		</div>
		<div class="tabset">
        <!-- Tab 1 -->
        <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
        <label for="tab1">Mô tả</label>
        <!-- Tab 2 -->
        <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
        <label for="tab2">Thông tin bổ sung </label>
        <!-- Tab 3 -->
        <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
        <label for="tab3">Hỏi đáp</label>
        <div class="tab-panels">
            <section id="marzen" class="tab-panel">
                <h2>Mô Tả</h2>
                <p><?php echo $pro->pro_detail?></p>
   
            </section>
            <section id="rauchbier" class="tab-panel">
                <h2>Đại lý ủy quyền Apple (Apple Authorized Reseller) là gì?</h2>
                <p><strong></strong> Đại lý uỷ quyền Apple – Apple Authorised Reseller là đơn vị ủy quyền của Apple,
                    cung cấp đến người dùng các sản phẩm phần cứng, phần mềm chính hãng Apple.</p>
                <p><strong></strong> Để trở thành một Apple Authorised Reseller (AAR), đơn vị kinh doanh phải đáp ứng đủ
                    một vài yêu cầu khắt khe của Apple về: dịch vụ kinh doanh, dịch vụ chăm sóc khhàng, vị trí đặt cửa
                    hàng,… và đặc biệt phải đáp ứng đủ yêu cầu về doanh số bán sản phẩm Apple chính hãng trong một năm.
                </p>
            </section>
            <section id="dunkles" class="tab-panel">
                <h2>Hỏi đáp</h2>
                <strong>iPhone 13 pro giá bao nhiêu?</strong><br>
                <p><strong>iPhone 13 pro có mấy màu? Dung lượng iPhone 13 pro là bao nhiêu?<br>
                    </strong> iPhone 13 pro hiện có giá dự kiến thấp nhất là 29.290.000đ với phiên bản 128BGB, giá
                    32.290.000đ với phiên bản 256GB, giá 38.790.000đ với phiên bản 512GB, và phiên bản iPhone 13 Pro 1TB
                    có giá 43.790.000đ</p>
                <p><strong></strong> iPhone 13 pro có 4 màu: màu Graphite, Silver, Gold, Blue. iPhone 13 pro bao gồm các
                    dung lượng 128GB, 256GB, 512GB và đặc biệt bản iPhone 13 Pro 1TB lần đầu xuất hiện</p>
                <strong>iPhone 13 pro khi nào ra mắt? Khi nào bán iPhone 13 Pro?</strong>
                <p>iPhone 13 Pro chính thức được Apple giới thiệu vào ngày 15/09/2021. Tại Việt Nam, iPhone 13 pro được
                    ShopDunk bán vào ngày 22/10/2021, quý khách có thể đăng ký tại các kênh của ShopDunk để trở thành
                    người sở hữu iPhone 13 pro chính hãng sớm nhất tại Việt Nam. ShopDunk chính thức nhận đặt cọc từ
                    ngày 15/10/2021.</p>
                   
            </section>
        </div>

        <h2 class="title-ten-loai">Hàng cùng loại</h2>
        <div class="card-list">
            <?php
            $pro_extend=ProductDB::getProductByCategoryId_limit($pro->CategoryID);
            foreach ($pro_extend as $key=> $value):
            ?>
                <div class="card">
                    <div class="card-img">
                        <a href=".?controller=detail_product&ID=<?php echo $value->productID?>">
                            <img src="content/images/products/<?php echo $value->pro_image ?>">
                        </a>
                    </div>
                    <div class="card-text">
                        <a href=".?controller=detail_product&ID=<?php echo $value->productID?>">
                            <p><?php echo $value->pro_name ?></p>
                            <p class="card-gia">Giá từ: <?= number_format($value->pro_price) ?>&nbsp;VNĐ</p>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    
</div>
</body>
</html>