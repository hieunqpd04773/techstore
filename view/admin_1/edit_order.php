<h1 class="alert alert-secondary">CẬP NHẬT THÔNG TIN ĐƠN HÀNG</h1>
<form action="index.php?ma_dh=<?=$ma_dh?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-sm-6">
            <label>MÃ ĐƠN HÀNG</label>
            <input type="text" class="form-control" readonly name="ma_dh" value="<?=$don_hang2[0][0]?>">
            <input type="hidden" class="form-control" readonly name="ma_tk" value="<?=$don_hang2[0][6]?>">
        </div>

        <div class="form-group col-sm-6">
            <label>TỔNG TIỀN</label>
            <input name="tong_tien" readonly value="<?=number_format($don_hang2[0][1]);?>" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>ĐỊA CHỈ</label>
            <input name="dia_chi" type="text" value="<?=$don_hang2[0][2]?>" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>NGÀY ĐẶT MUA</label>
            <input name="ngay_dat_mua" type="text" readonly value="<?=$don_hang2[0][4]?>" class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-6">
            <label>GHI CHÚ</label>
            <input name="ghi_chu" value="<?=$don_hang2[0][3]?>" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <label>TÌNH TRẠNG</label>
            <select name="tinh_trang" class="form-control" id="">
                <?php echo $don_hang2[0][5] ?>
                <?php if($don_hang2[0][5]==1){?>
                    <option value="1" selected>Đang xử lý</option>
                    <option value="2">Đang giao hàng</option>
                    <option value="3">Đã giao hàng</option>
                    <option value="4">Trả hàng</option>
                    <option value="5">Đã hủy đơn</option>
                <?php }else if($don_hang2[0][5]==2){?>
                    <option value="1" >Đang xử lý</option>
                    <option value="2" selected>Đang giao hàng</option>
                    <option value="3">Đã giao hàng</option>
                    <option value="4">Trả hàng</option>
                    <option value="5">Đã hủy đơn</option>
                <?php }else if($don_hang2[0][5]==3){?>
                    <option value="1" >Đang xử lý</option>
                    <option value="2" >Đang giao hàng</option>
                    <option value="3" selected>Đã giao hàng</option>
                    <option value="4">Trả hàng</option>
                    <option value="5">Đã hủy đơn</option>
                <?php }else if($don_hang2[0][5]==4){?>
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
            <button name="btn_update" class="btn btn-secondary">Cập nhật</button>
            <a href="index.php?btn_list" class="btn btn-secondary">Danh sách</a>
        </div>
    </div>
</form>