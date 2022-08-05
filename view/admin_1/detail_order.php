<h3 class="alert alert-secondary">CHI TIẾT ĐƠN HÀNG</h3>
    <?php
        
    ?>
    <form action="" method="post">
        <h3>MÃ ĐƠN HÀNG: <?php echo $ID;?></h3> 
        <table class="table">
            <thead class="alert-secondary">
                <tr>
                    <th>TÊN SP</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($details as $key => $value):
                    $pro=ProductDB::getProductById($value->productID)

                ?>
                <tr>
                    <td><?php echo $pro-> pro_name?></td>
                    <td><?php echo $value-> number; ?></td>
                    <td><?php echo $value-> price;?></td>
                </tr>
                <?php 
                    endforeach
                ?>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="7">
                    <a href="index.php" class="btn btn-secondary">Quay lại</a>
                </td>
            </tr>
            </tfoot>
        </table>
    </form>