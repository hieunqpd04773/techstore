<h3 class="alert alert-secondary">CHỈNH SỬA LOẠI HÀNG</h3>
    <form action="" method="post" enctype="multipart/form-data" name="checkForm" onsubmit="return validForm() && checkTypeOfImage();">
        <div class="row">
            <div class="form-group col-sm-6">
                <label>Mã loại</label>
                <input type="hidden" name="categoryID" value="<?php echo $category-> CategoryID ?>">
                <input name="ma_loai"  value="<?php echo $category-> CategoryID ?>" class="form-control" readonly>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label>Tên loại</label>
                <input name="categoryname" value="<?php echo $category-> categoryname ?>" class="form-control">
                <span id="ten-loai-error"></span>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label>Hình</label>
                <input  type="hidden" value="<?php echo $category-> cate_img ?>" name="cate_img1" id="">
                <input id="cate_img" type="file" name="cate_img" class="form-control" onfocusout="checkTypeOfImage()">
                <span id="hinh-error"></span>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label>Trạng thái</label>
                <div class="form-control">
                    <label class="radio-inline"><input name="cate_role" value="0" type="radio" checked>Bình thường</label>
                    <label class="radio-inline"><input name="cate_role" value="1" type="radio" >Đặc biệt</label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-12">
                <button name="action" value="update_category" class="btn btn-secondary">Update</button>
                <button type="reset" class="btn btn-secondary">Nhập lại</button>
                <a href="index.php?btn_list" class="btn btn-secondary">Danh sách</a>
            </div>
        </div>
    </form>