<div class="dang-nhap" id="dang-nhap">
    <form  method="post" id="form_register" class="form-dang-nhap">
        <h2>Đăng Nhập</h2>
        <div class="form-group-login">
            <label for="">Tên Đăng Nhập</label><br>
            <input name="username" type="text"  class="form-input">
        </div>
        <div class="form-group-login">
            <label for="">Mật Khẩu</label><br>
            <input name="user_pass" type="password"  class="form-input">
        </div>
        <div class="form-group-login">
            <input name="ghi_nho" type="checkbox" class="form-input">
            <label for="">Ghi nhớ tài khoản?</label>
        </div>
        <div class="form-group-login">
        <button class="btn-login" name="role" value="login">Đăng nhập</button>
        </div>
        <div class="form-group-login">
            <div class="form-group-login-more">
                <li><a href=".?controller=signup">Quên mật khẩu?</a></li>
                <li><a href=".?controller=signup">Đăng ký thành viên</a></li>
            </div>
        </div>
    </form>
</div>