<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
    <div class="carousel-item active">
    <img src="content/images/products/slide.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="content/images/products/sildeiphone.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="content/images/products/slideiwatch.jpg" class="d-block w-100" alt="...">
    </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>

<div class="content">
    <div class="inside">
        <h2 class="title-listcard">Sản Phẩm</h2>
        <div class="card-list" id="list-products">
        <?php foreach ($cateIndex as $key => $value): ?>
            <div class="card">
                <div class="card-img">
                <a href="">
                    <img src="content/images/products/<?php echo $value->cate_img ?>" style="width: 250px; height: 250px">
                </a>
                </div>
                <div class="card-text">
                <a href="chi-tiet.php?ma_sp=<?=$ma_sp?>">
                    <p><?php echo $value->categoryname ?></p>
                </a>
                </div>
            </div>
        <?php endforeach?>
    </div>
</div>