<h3 class="alert alert-secondary">THÊM MỚI SẢN PHẨM</h3>
    <form action="" method="post" enctype="multipart/form-data" name="checkForm" onsubmit="return validForm() && checkTypeOfImage();">
        <div class="row">
            <div class="form-group col-sm-4">
                <label>MÃ SẢN PHẨM</label>
                <input type="hidden" name="productID" value="<?php echo $product-> productID ?>">
                <input readonly value="<?php echo $product-> productID ?>" class="form-control">
            </div>

            <div class="form-group col-sm-4">
                <label>TÊN SẢN PHẨM</label>
                <input name="pro_name" value="<?php echo $product-> pro_name ?>" class="form-control">
                <span id="tenSP-error"></span>
            </div>

            <div class="form-group col-sm-4">
                <label>ĐƠN GIÁ</label>
                <input name="pro_price" value="<?php echo $product-> pro_price ?>" class="form-control">
                <span id="donGia-error"></span>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-4">
                <label>GIẢM GIÁ(%)</label>
                <input name="pro_discount" value="<?php echo $product-> pro_discount ?>" class="form-control">
                <span id="giamGia-error"></span>
            </div>

            <div class="form-group col-sm-4">
                <label>HÌNH ẢNH</label>
                <input id="pro_image1" name="pro_image1" value="<?php echo $product-> pro_image ?>" name="pro_image" type="hidden" class="form-control">
                <input id="pro_image" name="pro_image" type="file" class="form-control">
                <span id="hinh-error"></span>
            </div>

            <div class="form-group col-sm-4">
                <label>LOẠI HÀNG</label>
                <select name="CategoryID" class="form-control">
                <?php foreach ($category as $key => $value): ?>
	  						<option value="<?php echo $value->CategoryID; ?>" >
	  							<?php echo $value->categoryname; ?>	  							
	  						</option>
	  					<?php endforeach ?>	
                </select>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-4">
                <label>NGÀY NHẬP</label>
                <input type="date" name="pro_date" value="<?php echo $product-> pro_date ?>" class="form-control">
                <span id="ngayNhap-error"></span>
                <!--datepicker -->
            </div>
            <div class="form-group col-sm-4">
                <label>SỐ LƯỢNG</label>
                <input name="pro_number" value="<?php echo $product-> pro_number ?>" type="number" class="form-control">
                <span id="soLuong-error"></span>
            </div>

            <div class="form-group col-sm-4">
                <label>SỐ LƯỢT XEM</label>
                <input name="pro_view" value="<?php echo $product-> pro_view ?>" readonly class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-12">
                <label>MÔ TẢ</label>
                <textarea name="pro_detail" value="" class="form-control" rows="4"><?php echo $product-> pro_detail ?></textarea>
            </div>

            <div class="form-group col-sm-12">
                <button type="submit" name="action" value="update_product" class="btn btn-secondary">Update</button>
                <button type="reset" class="btn btn-secondary">Nhập lại</button>
                <a href="index.php?btn_list" class="btn btn-secondary">Danh sách</a>
            </div>
        </div>
    </form>