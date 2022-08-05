<div id="navbar">
                <div class="menu" id="menu">
                    <div class="inside">
                        <ul id="list-category">
                            <li><a href="index.php"><i style="font-size: 24px" class="fab fa-apple"></i></a></li>
                            <?php foreach ($categories as $key => $value): ?>
                                <li><a href=".?controller=list_product_byID&categoryID=<?php echo $value->CategoryID ?>"><?php echo $value->categoryname; ?></a></li>
                            <?php endforeach?>
                            <li><a href="">Phụ kiện</a></li>
                            <li><a href="">Dịch vụ</a></li>
                            <li><a href="">Khuyến mại</a></li>
                            <li><a href="">Giới thiệu</a></li>
                            <li>
                                <form action="<?=$SITE_URL?>/san-pham/liet-ke.php">
                                    <input class="input-search" type="text" placeholder="Bạn muốn mua gì?" name="keyword">
                                    <button class="submit-search" type="submit"><i class="fa fa-search"></i></button>
                                </form>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>