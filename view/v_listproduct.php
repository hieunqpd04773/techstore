<div class="content">
    <div class="inside">
        <h2 class="title-ten-loai">
        <?php echo $cate_name->categoryname;?>
        </h2>
        <div class="card-list">
        <?php
            foreach($list_product as $key => $value):
        ?>
                <div class="card">
                <?php
                        if($value->pro_discount>0){
                    ?>
                    <p style="font-weight: bole;"  class="card-special">- <?=number_format($value->pro_discount)?>%</p>
                    <?php
                        }
                    ?>
                    <div class="card-img">
                    <a href=".?controller=detail_product&ID=<?php echo $value->productID?>">
                        <img src="content/images/products/<?php echo $value->pro_image;?>">
                    </a>
                    </div>
                    <div class="card-text">
                    <a href=".?controller=detail_product&ID=<?php echo $value->productID ?>">
                        <p><?php echo $value->pro_name;?>
                    </p>
                        <p class="card-gia">Giá từ: <?php echo $value->pro_price; ?> VNĐ</p>
                    </a>
                    </div>
                </div>
        <?php endforeach ?> 
        </div>          
    </div>
</div>