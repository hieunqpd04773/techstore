<h1 class="alert alert-secondary">CẬP NHẬT THÔNG TIN ĐƠN HÀNG</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-sm-6">
            <label>MÃ ĐƠN HÀNG</label>
            <input type="text" class="form-control" readonly name="order_ID" value="<?php echo $order->order_ID; ?>">
            <input type="hidden" class="form-control" readonly name="userID" value="<?php echo $order->userID; ?>">
        </div>

        <div class="form-group col-sm-6">
            <label>TỔNG TIỀN</label>
            <input name="order_total" readonly value="<?=number_format($order->order_total);?>" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>ĐỊA CHỈ</label>
            <input name="order_address" type="text" value="<?php echo $order->order_address; ?>" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>NGÀY ĐẶT MUA</label>
            <input name="order_date" type="text" readonly value="<?php echo $order->order_date; ?>" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-6">
            <label>GHI CHÚ</label>
            <input name="order_note" value="<?php echo $order->order_note; ?>" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>TÌNH TRẠNG</label>
            <select name="order_status" class="form-control" id="">
                <?php echo $order->order_status ?>
                <?php if($order->order_status==1){?>
                    <option value="1" selected>Đang xử lý</option>
                    <option value="2">Đang giao hàng</option>
                    <option value="3">Đã giao hàng</option>
                    <option value="4">Trả hàng</option>
                    <option value="5">Đã hủy đơn</option>
                <?php }else if($order->order_status==2){?>
                    <option value="1" >Đang xử lý</option>
                    <option value="2" selected>Đang giao hàng</option>
                    <option value="3">Đã giao hàng</option>
                    <option value="4">Trả hàng</option>
                    <option value="5">Đã hủy đơn</option>
                <?php }else if($order->order_status==3){?>
                    <option value="1" >Đang xử lý</option>
                    <option value="2" >Đang giao hàng</option>
                    <option value="3" selected>Đã giao hàng</option>
                    <option value="4">Trả hàng</option>
                    <option value="5">Đã hủy đơn</option>
                <?php }else if($order->order_status==4){?>
                    <option value="1" >Đang xử lý</option>
                    <option value="2" >Đang giao hàng</option>
                    <option value="3" >Đã giao hàng</option>
                    <option value="4" selected>Trả hàng</option>
                    <option value="5">Đã hủy đơn</option>
                <?php }else{?>
                    <option value="1" >Đang xử lý</option>
                    <option value="2" >Đang giao hàng</option>
                    <option value="3" >Đã giao hàng</option>
                    <option value="4">Trả hàng</option>
                    <option value="5"selected>Đã hủy đơn</option>
                <?php }?>
            </select>
            
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-12">
            <button name="action" value="update_order" class="btn btn-secondary">Cập nhật</button>
            <a href="index.php?btn_list" class="btn btn-secondary">Danh sách</a>
        </div>
    </div>
</form>