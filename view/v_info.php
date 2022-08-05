<div class="dang-nhap" id="dang-nhap">
    <h2>Thông tin tài khoản</h2>
    <form action="">
    <div class="form-group-login">
        <label for="">Xin chào: <?php echo $info['user_name'] ?></label><br>
        <img src='content/images/users/<?php echo $info['user_image'] ?>'>
    </div>
    <div class="form-group-login">
        <a style='color: black;' href=".?controller=my_orders&userID=<?php echo $info['userID'] ?>"><label for=""> Thông tin đơn hàng</label></a><br>
        <?php
	    if(number_format($info['user_role'])<3) {
	    	echo "<a style='color: black;' href='.?role=c_$info[user_role]'><label>Quản trị website</label></a>";
	    }
	    ?>
    </div>
    <div class="form-group-login">
        <button class="btn-login"  name="role" value="logout">Đăng xuất</button>
    </div>
    <div class="form-group-login">
        <div class="form-group-login-more">
            <li><a href="tai-khoan/quen-mk.php">Đổi mật khẩu</a></li>
            <li><a href="tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a></li>
        </div>
    </div>
    </form>
</div>