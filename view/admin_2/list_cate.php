<h3 class="alert alert-secondary">DANH SÁCH LOẠI HÀNG</h3>
<!-- <a href="index.php">Thêm mới</a> --> 
<table class="table">
<table class="table">
        <thead class="alert-secondary">
            <tr>
                
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th>HÌNH ẢNH</th>
                <th>ĐẶC BIỆT</th>
                <th>HÀNH ĐỘNG</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($categories as $key => $value): ?>
            <tr>
                
                <td><?php echo $value->CategoryID ?></td>
                <td><?php echo $value->categoryname?></td>
                <td><img style="width :80px;" src='content/images/products/<?php echo $value->cate_img ?>' ></td>
                <td><?php if($value->cate_role==0){
                    echo "Bình thường";
                    }else{
                        echo "Đặc biệt";
                    }
                     ?>
                </td>
    
                <td>
                    <a href=".?role=c_2&action=edit_category&ID=<?php echo $value->CategoryID; ?>" class="btn btn-secondary btn-sm">Sửa</a>
                    <a href=".?role=c_2&action=delete_category&ID=<?php echo $value->CategoryID; ?>" class="btn btn-secondary btn-sm">Xóa</a>
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

