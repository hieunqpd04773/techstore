<div class="dang-ky-page">
            <div class="dang-ky">
                <form action="" method="post" class="form-dang-nhap" id="kiem_loi_form" enctype="multipart/form-data">
                    <h2>Đăng Ký</h2>
                    <div class="form-group-login">
                        <label for="">Tên Đăng Nhập(Username)</label><br>
                        <input name="username" id="username" type="text" class="form-input">
                    </div>
                    <div class="form-group-login">
                        <label for="">Họ và Tên</label><br>
                        <input  name="user_name" id="ho_ten" type="text" class="form-input">
                    </div>
                    <div class="form-group-login">
                        <label for="">Mật Khẩu</label><br>
                        <input name="user_pass" id="mat_khau" type="password" class="form-input">
                    </div>
                    <div class="form-group-login">
                        <label for="">Email</label><br>
                        <input name="user_email" type="email" id="email" class="form-input">
                    </div>
                    <div class="form-group-login">
                        <label for="">Số Điện Thoại</label><br>
                        <input name="user_phone" type="number" id="so_dien_thoai" class="form-input">
                    </div>
                    <div class="form-group-login">
                        <label for="">Hình Ảnh</label><br>
                        <input name="user_image"  type="file" id="up_hinh" class="form-input">
                    </div>
                    <div class="form-group-login">
                        <label for="">Địa Chỉ</label><br>
                        <input name="user_address" type="text" id="dia_chi" class="form-input">
                        <input type="hidden" value="3" name="user_role">
                    </div>
                    <div class="form-group-login">
                        <button class="btn-login" name="controller" value="save_user">Đăng Ký</button>
                    </div>
                    <input name="vai_tro" value="0" type="hidden">
                    <input name="kich_hoat" value="1" type="hidden">  
                    <input name="ma_tk"  type="hidden">  
                </form>
            </div>
        </div>