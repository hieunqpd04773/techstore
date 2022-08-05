<div class="content-wrap col-md-12 col-sm-12 col-xs-12">
                <!-- Begin Heading 2 -->
                <div class="title-page">
                    <h2>Chi tiết đơn hàng mã <?php echo $ma_dh; ?></h2>
                </div>
                <!-- End Heading 2 -->
                <!-- Cart Form -->
                <div class="form">
                    <form class="cart-form">
                        <table class="cart-table">
                            <!-- Table Header -->
                            <thead>
                                <tr>
                                    <th class="product-remove">Mã ĐH</th>
                                    <th class="product-thumbnail">Tên Sản Phẩm</th>
                                    <th class="product-price">Số lượng</th>
                                    <th class="product-name">Giá Tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(!empty($don_hang_chi_tiet_all)){
                                        foreach($don_hang_chi_tiet_all as $don_hang_chi_tiet){
                                        extract($don_hang_chi_tiet);
                                        $san_pham=san_pham_select_by_id($don_hang_chi_tiet[1]);
                                        extract($san_pham);
                               ?>       
                               <tr>
                                    <td><?php echo $ma_dh; ?></td>
                                    <td><?php echo $ten_sp; ?></td>
                                    <td><?php echo $don_hang_chi_tiet[2];?></td>
                                    <td class="product-price" ><?php echo number_format($don_hang_chi_tiet[3]);?> VNĐ</td>
                               </tr>
                               <?php }} else{?>
                                    <tr><td colspan="4"><b style="text-align:center; margin-top:100px;" class="text-success">Chọn đơn hàng để xem chi tiết</b></td></tr>
                               <?php }?>
                            </tbody>
                            <!-- End Table Body -->
                        </table>
                    </form>
                </div>
            </div>