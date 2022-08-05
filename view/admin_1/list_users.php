<h3 class="alert alert-secondary">DANH SÁCH KHÁCH HÀNG</h3>
<form action="" method="post">
    <table class="table">
        <thead class="alert-secondary">
            <tr>
               
                <th>MÃ TÀI KHOẢN</th>
                <th>HỌ VÀ TÊN</th>
                <th>ĐỊA CHỈ EMAIL</th>
                <th>HÌNH ẢNH</th>
                <th>VAI TRÒ?</th>
                <th></th>
            </tr>
        </thead>

        <tbody>

        <?php
            foreach($users as $key => $value):
        ?>

            <tr>
                
                <td><?php echo $value->username ?></td>
                <td><?php echo $value->user_name ?></td>
                <td><?php echo $value->user_email ?></td>
                <td><img style="width :80px;" src='content/images/users/<?php echo $value->user_image ?>' ></td>
                <td><?php echo $value->user_role?></td>
                <td>
                    <a href=".?role=c_1&action=edit_user&ID=<?php echo $value->userID; ?>" class="btn btn-secondary btn-sm">Sửa</a>
                    <a href=".?role=c_1&action=delete_user&ID=<?php echo $value->userID; ?>" class="btn btn-secondary btn-sm">Xóa</a>
                </td>
            </tr>

        <?php 
           endforeach
        ?>
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