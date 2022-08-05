
<h3 class="alert alert-secondary">QUẢN LÝ HÀNG HÓA</h3>
<form action="index.php" method="post">
    
</form>
<form action="index.php" method="post">
    <table class="table">
        <thead class="alert-secondary">
            <tr>
                
                <th>MÃ SP</th>
                <th>TÊN SP</th>
                <th>HÌNH ẢNH</th>
                <th>ĐƠN GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>GIẢM GIÁ</th>
                <th>LƯỢT XEM</th>
                <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                foreach($products as $key => $value) :              
            ?>
            <tr>
               
                <td><?php echo $value-> productID?></td>
                <td><?php echo $value->  pro_name?></td>
                <td><img style="width :80px;" src='content/images/products/<?php echo $value->pro_image?>'  ></td>
                <td><?php echo number_format($value-> pro_price,0) ?>vnđ</td>
                <td><?php echo $value-> pro_number ?></td>
                <td><?php echo $value-> pro_discount?>%</td>
                <td><?php echo $value-> pro_view?></td>
                <td>
                    <a href=".?role=c_2&CategoryID=<?php echo $value->CategoryID ?>&action=edit_product&ID=<?php echo $value->productID; ?>" class="btn btn-secondary btn-sm">Sửa</a>
                    <a href=".?role=c_2&action=delete_product&ID=<?php echo $value->productID; ?>" class="btn btn-secondary btn-sm">Xóa</a>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>

        <tfoot>
            <tr>
                <td colspan="7">
                    <a href="index.php" class="btn btn-secondary">Nhập thêm</a>
                </td>
            </tr>
        </tfoot>
    </table>
</form>
