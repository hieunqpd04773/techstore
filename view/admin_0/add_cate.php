<h3 class="alert alert-secondary">THÊM MỚI LOẠI HÀNG</h3>
    <form action="" method="post" enctype="multipart/form-data" name="checkForm" onsubmit="return validForm() && checkTypeOfImage();">
        <div class="row">
            <div class="form-group col-sm-6">
                <label>Mã loại</label>
                <input name="ma_loai" value="auto number" class="form-control" readonly>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label>Tên loại</label>
                <input name="categoryname" class="form-control">
                <span id="ten-loai-error"></span>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label>Hình</label>
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
                <button name="action" value="save_category" class="btn btn-secondary">Thêm mới</button>
                <button type="reset" class="btn btn-secondary">Nhập lại</button>
                <a href="index.php?btn_list" class="btn btn-secondary">Danh sách</a>
            </div>
        </div>
    </form>