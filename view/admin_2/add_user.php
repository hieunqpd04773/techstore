<h3 class="alert alert-secondary">THÊM MỚI KHÁCH HÀNG</h3>
    <form action="" method="post" enctype="multipart/form-data" name="checkForm" onsubmit="return validForm();">
        <!-- phần hình ảnh chú ý phần enctype="multipart/form-data", có thuộc tính này input files mới lấy được 
giá trị về -->
        <div class="row">
            <div class="form-group col-sm-6">
                <label>USERNAME (Tên đăng nhập)</label>
                <input name="username" class="form-control">
                <span id="userName-error"></span>
            </div>

            <div class="form-group col-sm-6">
                <label>HỌ VÀ TÊN</label>
                <input name="user_name" class="form-control">
                <span id="hoTen-error"></span>
            </div>

            <div class="form-group col-sm-6">
                <label>MẬT KHẨU</label>
                <input name="user_pass" type="password" class="form-control">
                <span id="matKhau-error"></span>
            </div>
            <div class="form-group col-sm-6">
                <label>VAI TRÒ?</label>
                <div class="form-control">
                    <label style="margin-right: 8px;" class="radio-inline"><input name="user_role" value="0" type="radio">Khách hàng</label>
                    <label style="margin-right: 8px;" class="radio-inline"><input name="user_role" value="1" type="radio" >Quản trị CC</label>
                    <label style="margin-right: 8px;" class="radio-inline"><input name="user_role" value="2" type="radio" >Quản trị C1 </label>
                    <label style="margin-right: 8px;" class="radio-inline"><input name="user_role" value="3" type="radio" >Quản trị C2 </label>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="form-group col-sm-6">
                <label>ĐỊA CHỈ EMAIL</label>
                <input id="user_email" name="user_email" class="form-control" onfocusout="checkEmail()">
                <span id="email-error"></span>
            </div>

            <div class="form-group col-sm-6">
                <label>HÌNH ẢNH</label>
                <input id="user_image" name="user_image" type="file" class="form-control" onfocusout="checkTypeOfImage()">
                <span id="hinh-error"></span>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label>ĐỊA CHỈ</label>
                <input name="user_address" class="form-control">
            </div>

            <div class="form-group col-sm-6">
                <label>SĐT</label>
                <input id="user_phone" name="user_phone" type="number" class="form-control" onfocusout="checksoDienThoai()">
                <span id="soDienThoai-error"></span>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-12">
                <button name="action"  value="save_user" class="btn btn-secondary">Thêm mới</button>
                <button type="reset" class="btn btn-secondary">Nhập lại</button>
                <a href="index.php?btn_list" class="btn btn-secondary">Danh sách</a>
            </div>
        </div>
    </form>