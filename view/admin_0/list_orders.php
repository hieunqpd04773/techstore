<h3 class="alert alert-secondary">DANH SÁCH ĐƠN HÀNG</h3>
<!-- <a href="index.php">Thêm mới</a> --> 
<table class="table">
<table class="table">
        <thead class="alert-secondary">
            <tr>
                
                <th style="width: 80px;">MÃ ĐH</th>
                <th>TÊN KHÁCH HÀNG</th>
                <th>TỔNG TIỀN</th>
                <th>NGÀY ĐẶT</th>
                <th>ĐỊA CHỈ</th>
                <th>GHI CHÚ</th>
                <th>TÌNH TRẠNG</th>
                <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>

        <tbody>
        <?php
            foreach($orders as $key => $value):
                $user=userDB::getUserById($value-> userID);
               
        ?>
            <tr>
                
                <td><?php echo $value-> order_ID ?></td>
                <td><?php echo $user-> user_name ?></td>
                <td><?php echo number_format($value-> order_total)?> VNĐ</td>
                <td><?php echo $value-> order_date ?></td>
                <td><?php echo $value-> order_address?></td>
                <td><?php echo $value-> order_note?></td>
                <td><?php  
                        if($value->order_status==1){
                            echo "Đang Xử Lý";
                        }else if($value->order_status==2){
                            echo "Đang Giao Hàng";
                        }
                        else if($value->order_status==3){
                            echo "Đã Giao Hàng";
                        }
                        else if($value->order_status==4){
                            echo "Trả";
                        }
                        else if($value->order_status==5){
                            echo "Đã Hủy";
                        }
                    ?>
                </td>
                <td>
                    <a href=".?role=c_0&action=edit_order&ID=<?php echo $value->order_ID; ?>" class="btn btn-secondary btn-sm">Sửa</a>
                    <a href=".?role=c_0&action=detail_order&ID=<?php echo $value->order_ID; ?>" class="btn btn-secondary btn-sm">View</a>
                    <a href=".?role=c_0&action=delete_order&ID=<?php echo $value->order_ID; ?>" class="btn btn-secondary btn-sm">Xóa</a>
                </td>
            </tr>
        <?php 
           endforeach;
        ?>
        </tbody>

        <tfoot>
        </tfoot>
        
</table>

