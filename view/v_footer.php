<footer id="footer">
            <div id="top-footer">
                <div class="row">
                    <div class="col">
                        <h4>Thông tin </h4>
                        <div class="contact">
                            <ul>
                                <li> <a href="#">Giới thiệu </a></li>
                                <li> <a href="#">Khuyến mại </a></li>
                                <li> <a href="#">Tuyển dụng </a></li>
                                <li>
                                    <a href="#">Chương trình liên kết</a>
                                </li>
                                <li> <a href="#">Hệ thống của hàng </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <h4>Chính sách </h4>
                        <div class="contact">
                            <ul>
                                <li> <a href="#">Chính sách đổi trả </a></li>
                                <li> <a href="#">Chính sách bảo mật </a></li>
                                <li> <a href="#">Chính sách hoạt động chung </a></li>
                                <li> <a href="#">Chính sách trả góp</a></li>
                                <li> <a href="#">Chính sách bảo hành </a></li>
                                <li> <a href="#">Chính sách Ship – COD </a></li>
                                <li><a href="#">Hướng dẫn Check IMEI </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <h4>Liện hệ </h4>
                        <div class="contact">
                            <ul>
                                <li> <a href="#">Gọi tư vấn mua hàng: <b> 1900.6626</b></a></li>
                                <li> <a href="#">Gọi khiếu nại: <b> 0886.308.688 </b></a></li>
                                <li> <a href="#">Dành cho Doanh nghiệp & Đối tác:<b> 0972.927.907 </b></a></li>
                                <li> <a href="#">Thiết bị của chúng tôi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                      <div class="contact_inf">
                       <div class="contact__img">
                            <img src="<?=$CONTENT_URL?>/images/products/tich.jpg" alt="">
                       </div>
                       <div class="contact__visa">
                             <img src="<?=$CONTENT_URL?>/images/products/visa.jpg" alt="">
                       </div>
                       <div class="form">
                           <div class="from_Register">
                            <p>Đăng ký nhận tin từ iFanStore</p>  
                           </div>
                            <div class="from_p">
                                <p> Nhận thông tin sản phẩm mới và chương trình khuyến mại của iFanStore</p>
                            </div>
                       </div>
                      </div>
                        <form action="" class="emailform">
                            <input id="input1" type="text" placeholder="Vui lòng nhập địa chỉ Email"><button id="button1" type="submit"><i class="fas fa-paper-plane"></i>&nbsp;Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
            <div id="copyrigt">
                <p>© 2022 Công ty CP HHD Việt Nam<br>
    
                    Giấy chứng nhận ĐKDN số 0107465657 do Sở kế hoạch và đầu tư thành phố Hà Nội cấp ngày 08 tháng 06 năm 2021. Địa chỉ: Số 428, Phường Hòa An, Quận Cẩm Lệ, Thành phố Đà Nẵng, Việt Nam<br>
                    Điện thoại: 0247.305.9999.<br>
                    Email: lienhe@iFanStore.com.<br>
                    Đại diện pháp luật: NGUYỄN QUANG HIẾU</p><br>
            </div>
        </footer>
    </div>
    <script>
    function myOverlay(){
    var y = document.getElementById("overlay");
    if (y.className =="overlay-hide"){
    y.className ="overlay";
    }else{
    y.className = "overlay-hide";
    }
    }
    
    </script>
    <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>