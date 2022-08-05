const urlCate = 'http://localhost:3000/categories';
const urlPro = 'http://localhost:3000/products';
const urlProList = 'http://localhost:3000/products?&_limit=9&_sort=id&_order=desc';
const urlProSale = 'http://localhost:3000/products?&_limit=6&_sort=price&_order=asc';
const urlProCart = 'http://localhost:3000/products';
const urlOrders = 'http://localhost:3000/orders';
var id = null;

// FORMAT NUMBER
function numberWithCommas(x) {
    x = x.toString();
    var pattern = /(-?\d+)(\d{3})/;
    while (pattern.test(x))
        x = x.replace(pattern, "$1,$2");
    return x;
}

// LIST CATEGORIES
function loadListCate() {
    fetch(urlCate, {
        method: 'GET'
    }).then((response) => response.json()).then((data) => {
        console.log(data)
        var strContent = "";
        data.forEach(element => {
            strContent += `
               <li class="list-group-item"><a href="related.html?id=${element.id}">${element.name}</a></li>
          `
        });
        document.querySelector('#cate').innerHTML = strContent;
    })
}

// SALE PRODUCT
function loadSaleProduct() {
    fetch(urlProSale, {
        method: 'GET'
    }).then((response) => response.json()).then((data) => {
        console.log(data)
        var strContent = "";
        data.forEach(element => {
            strContent += `
        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-4"><a href="detail.html?id=${element.id}"><img
                style="width:80px;"
                src="../public/uploads/product/${element.image}"
                alt=""></a></div>
                <div class="col-sm-8">${element.name} <br><br><b>${numberWithCommas(element.price)} VNĐ</b></div>
            </div>
        </li>
          `
        });
        console.log(data.length);
        document.querySelector('#sale-pro').innerHTML = strContent;
    })
}


// LIST PRODUCT
function loadListProduct() {
    fetch(urlProList, {
        method: 'GET'
    }).then((response) => response.json()).then((data) => {
        console.log(data)
        var strContent = "";
        data.forEach(element => {
            strContent += `
            <div class="sanpham">
            <a href="detail.html?id=${element.id}"><span class="chi-tiet">CHI TIẾT</span></a>

            <a href="detail.html?id=${element.id}"><img
                    src="../public/uploads/product/${element.image}" alt=""><span
                    class='hang-moi'>Hàng mới</span></a>
            <div class="glow-wrap">
                <i class="glow"></i>
            </div>
            <div class="text">
                <div class="name" style="margin-top:7px;">
                    <span style="font-size: 17px;">Giày thể thao ${element.name}</span>
                </div>
                <div class="price" style="font-size: 15px;padding-top: 5px;">
                    <span style="font-weight: bolder;">${numberWithCommas(element.price)} VNĐ</span>
                </div>
            </div>
        </div>
          `
        });
        document.querySelector('#pro').innerHTML = strContent;
    })
}


//  SEARCH PRODUCT
function loadSearchProduct() {
    const urlParams = new URLSearchParams(window.location.search);
    keywords = urlParams.get('keywords');
    console.log(keywords);
    var urlSearch = urlPro + "?name_like=" + keywords;

    fetch(urlSearch, {
        method: 'GET'
    }).then((response) => response.json()).then((data) => {
        console.log(data)
        var strContent = "";
        data.forEach(element => {
            strContent += `
            <div class="sanpham">
            <a href="detail.html?id=${element.id}"><span class="chi-tiet">CHI TIẾT</span></a>

            <a href="detail.html?id=${element.id}"><img
                    src="../public/uploads/product/${element.image}" alt=""><span
                    class='hang-moi'>Hàng mới</span></a>
            <div class="glow-wrap">
                <i class="glow"></i>
            </div>
            <div class="text">
                <div class="name" style="margin-top:7px;">
                    <span style="font-size: 17px;">Giày thể thao ${element.name}</span>
                </div>
                <div class="price" style="font-size: 15px;padding-top: 5px;">
                    <span style="font-weight: bolder;">${numberWithCommas(element.price)} VNĐ</span>
                </div>
            </div>
        </div>
          `
        });
        document.querySelector('#search').innerHTML = strContent;
    })
}


// LOAD RELATED PRODUCT
function loadRelatedProduct() {
    const urlParams = new URLSearchParams(window.location.search);
    id = urlParams.get('id');
    console.log(id);
    var urlRelatedPro = urlPro + "?cate_id=" + id;
    console.log(urlRelatedPro);

    fetch(urlRelatedPro, {
        method: 'GET'
    }).then((response) => response.json()).then((data) => {
        console.log(data)
        var strContent = "";
        data.forEach(element => {
            strContent += `
            <div class="sanpham">
            <a href="detail.html?id=${element.id}"><span class="chi-tiet">CHI TIẾT</span></a>

            <a href="detail.html?id=${element.id}"><img
                    src="../public/uploads/product/${element.image}" alt=""><span
                    class='hang-moi'>Hàng mới</span></a>
            <div class="glow-wrap">
                <i class="glow"></i>
            </div>
            <div class="text">
                <div class="name" style="margin-top:7px;">
                    <span style="font-size: 17px;">Giày thể thao ${element.name}</span>
                </div>
                <div class="price" style="font-size: 15px;padding-top: 5px;">
                    <span style="font-weight: bolder;">${numberWithCommas(element.price)} VNĐ</span>
                </div>
            </div>
        </div>
          `
        });
        document.querySelector('#related').innerHTML = strContent;
    })
}



// DETAIL PRODUCT
function detailProduct() {
    const urlParams = new URLSearchParams(window.location.search);
    id = urlParams.get('id');
    console.log(id);
    var urlDetailPro = urlPro + "/" + id;
    fetch(urlDetailPro)
        .then(res => res.json())
        .then(data => {
                var strContent = `
                <div class="col-md-4" style="padding-left: 0px">
            <div class="spchitiet">
                <img src="../public/uploads/product/${data.image}" alt="" style="width:100%;">
            </div>
        </div>
        <div class="col-md-5">
            <div class="thongtinsp">
                <ul>
                    <li>
                        <h5 style="font-size: 30px;">${data.name}</h5>
                        <p> </p>
                    </li>
                    <li style = "font-size:30px;">${numberWithCommas(data.price)} VNĐ</li>
                    <li style="margin-top: 15px;"><span style="line-height: 25px;font-size: 15px;text-align: justify;">${data.detail}</span></li>
                    <li class="size" style="margin-top: 20px;">
                        <div class="soluong"><h4>SIZE: 37, 38, 39, 40, 41, 42</h4></div>
                    </li>
                    <li class="soluong1" style="margin-top: 27px;">
                        <input type="number" placeholder="1" readonly>
                      <button onclick="addCart(${data.id})" type="submit" style="margin-top:-5px;" class="btn btn-dark">THÊM VÀO GIỎ HÀNG</button> 
                    </li>
                    <li style="margin-top: 25px;">-----------------------------------------------------------------</li>
                    <li>Mã: # ${data.id}</li>
                    -----------------------------------------------------------------
                    <li>Tag: #Giày đẹp, #Giày năng động </li>
                </ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="thanhtoan">
               <div class="row">
               <h4>HỖ TRỢ THANH TOÁN</h4>
                <ul>
                    <li> <img src="../public/css/chi-tiet-sp/img/l2.png" alt=""> </li>
                    <li> <img src="../public/css/chi-tiet-sp/img/l1.png" alt=""> </li><br>
                    <li> <img src="../public/css/chi-tiet-sp/img/l4.png" alt=""> </li>
                    <li> <img src="../public/css/chi-tiet-sp/img/l3.png" alt=""> </li>
                </ul>
               </div>
               <div class="row">
                 <a href="#"><img <img src="../public/css/chi-tiet-sp/img/SALE.png" alt="" style="width:80%"></a>  
               </div>
            </div>
        </div>
                `;
                document.querySelector('#detail-pro').innerHTML = strContent;
            }
        )
  }








  // -------------------------------------------
  // SHOPPING CART

  // ADD CART
  async function addCart(id_product) {
    // Lấy dữ liệu cart
    let cart = localStorage.getItem("cart");
    if (cart == null) {
        cart = [];
    } else {
        // Chuyển cart về file Json
        cart = JSON.parse(cart);
    }

    // Check id đã tồn tại trong local Storage
    let existed = cart.map(o => o.id).indexOf(id_product);
    if (existed == -1) {
        let product = await fetch(`${urlProCart}/${id_product}`)
            .then(res => res.json())
        product.quantity = 1;
        cart.push(product);
        localStorage.setItem("cart", JSON.stringify(cart));
    } else {
        cart[existed].quantity += 1;
        localStorage.setItem("cart", JSON.stringify(cart));
    }

    window.location.href = 'cart.html';
}


// SHOW CART
function showCart() {
    let cart = localStorage.getItem("cart");
    if (cart == null) {
        cart = [];
    } else {
        // Chuyển cart về file Json
        cart = JSON.parse(cart);
    }
    var total = 0;
    var totalNumber = 0;
    var strContent = "";
    var strTotal = "";
    console.log(cart);
    cart.forEach(data => {
        total += data.price * data.quantity;
        data.quantity = Number(data.quantity);
        totalNumber +=  data.quantity;
        strContent += `
                <tr>
                    <td>${data.name}</td>
                    <td><img src="../public/uploads/product/${data.image}" alt="" style = "width:80px;"></td>
                    <td>${numberWithCommas(data.price)}</td>
                    <td><input min = 1 class="form-control" type="number" onblur="updateCart(${data.id})" id="quantity-${data.id}" value ="${data.quantity}"  style="width:50px;"></td>
                    <td>${numberWithCommas(data.price*data.quantity)}</td>
                    <td><a onclick="deleteCart(${data.id})" style = "color:black;"><i class="fa fa-times-circle" aria-hidden="true"></i></a></td>
                </tr>
        `;
    });
    
    strTotal = `
        <table class="table">
        <thead>
        <tr>
            <th>TỔNG SỐ LƯỢNG</th>
            <th></th>
            
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Tổng phụ</td>
            <td style = "text-align:right;">${numberWithCommas(total)} VNĐ</td>
        </tr>
        <tr>
            <td>Giao hàng</td>
            <td style = "text-align:right;">Giao hàng miễn phí <br>
            Ứơc tính cho Việt Nam <br>
            Đổi địa chỉ</td>
        </tr>
        <tr>
            <td>Tổng</td>
            <td style = "text-align:right;"><b>${numberWithCommas(total)} VNĐ</b></td>
        </tr>
        <tr>
            <td colspan="2"><a onclick = "checkAfterCheckOut(${total})"><button id="pay" class = "btn btn-danger" style = "width:100%;">TIẾN HÀNH THANH TOÁN</button></a></td>
        </tr>
        </tbody>
    </table>
    `;
    
    document.querySelector('#list-cart').innerHTML = strContent;
    document.querySelector('#total').innerHTML = strTotal;
    document.querySelector('#totalNumber').innerHTML = totalNumber;


}

// HÀM CHECK SỐ LƯỢNG TRƯỚC KHI CHECKOUT 
function checkAfterCheckOut(total) {
    if(total === 0){
        alert('GIỎ HÀNG CỦA BẠN CHƯA CÓ SẢN PHẨM NÀO. VUI LÒNG TIẾN HÀNH MUA HÀNG <3!');
        document.querySelector('#pay').disabled = true;
    }else{
        window.location.href = 'checkout.html';
    }

}


// SHOW NUMBER PRODUCT IN CART
function showNumberCart() {
    let cart = localStorage.getItem("cart");
    if (cart == null) {
        cart = [];
    } else {
        // Chuyển cart về file Json
        cart = JSON.parse(cart);
    }
    var totalNumber = 0;
    cart.forEach(data => {
        data.quantity = Number(data.quantity);
        totalNumber +=  data.quantity;
    });
    
    document.querySelector('#totalNumber').innerHTML = totalNumber;
}


// UPDATE CART
function updateCart(id) {
    var number = document.querySelector('#quantity-' + id).value;
    let cart = localStorage.getItem("cart");
    if (cart == null) {
        cart = [];
    } else {
        // Chuyển cart về file Json
        cart = JSON.parse(cart);
    }

    let existed = cart.map(o => o.id).indexOf(id);
    cart[existed].quantity = number;
    localStorage.setItem("cart", JSON.stringify(cart));

    showCart();
}


// DELETE CART
function deleteCart(id) {
    let cart = localStorage.getItem("cart");
    if (cart == null) {
        cart = [];
    } else {
        // Chuyển cart về file Json
        cart = JSON.parse(cart);
    }

    let existed = cart.map(o => o.id).indexOf(id);
    cart = cart.filter(item => item !== cart[existed]);
    localStorage.setItem("cart", JSON.stringify(cart));
    showCart();
}



// SHOW CHECKOUT
function showCheckOut() {
    let cart = localStorage.getItem("cart");
    if (cart == null) {
        cart = [];
        document.querySelector('')
    } else {
        // Chuyển cart về file Json
        cart = JSON.parse(cart);
    }
    var total = 0;
    var strContent = "";
    console.log(cart);
    cart.forEach(data => {
        total += data.price * data.quantity;
        strContent += `
        <tr>
        <td>${data.name} x ${data.quantity}</td>
        <td style = "text-align:right;">${numberWithCommas(data.quantity*data.price)} VNĐ</td>
    </tr>
    
        `;
    });

    strContent += `
    <tr>
    <td><b>Tổng phụ</b></td>
    <td style = "text-align:right;"><b>${numberWithCommas(total)} VNĐ</b></td>
</tr>
<tr>
    <td><b>Giao hàng</b></td>
    <td style = "text-align:right;">Giao hàng miễn phí <br>
    Ứơc tính cho Việt Nam <br>
    Đổi địa chỉ</td>
</tr>
<tr>
    <td><b>TỔNG</b></td>
    <td style = "text-align:right;"><b>${numberWithCommas(total)} VNĐ</b></td>
</tr>
<tr>
    <td colspan="2"><i>Quý khách vui lòng kiểm tra lại thông tin giao hàng và thông tin đơn hàng để tiến hành đặt hàng. Quý khách có thể tra cứu tình trạng đơn hàng tại BIGSHOES.com. Chúc quý khách ngày mới tốt lành !</i></td>
</tr>
<tr>
        <td><button type="submit" onclick="checkOut()" class="btn btn-danger"><b>ĐẶT HÀNG</b></button></td>
        <td></td>
</tr>
    `
    
    document.querySelector('#show-cart').innerHTML = strContent;
}



// TIẾN HÀNH ĐẶT HÀNG
function checkOut() {
    let cart = localStorage.getItem("cart");
    if (cart == null) {
        cart = [];
    } else {
        // Chuyển cart về file Json
        cart = JSON.parse(cart);
    }
    var today = new Date();
    var created_date = today.getHours() + ":" + today.getMinutes()+ '- Ngày: ' + today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();

    // CHECK FORM THÔNG TIN ĐẶT HÀNG
    customer_name = document.querySelector('#customer_name').value;
    customer_address = document.querySelector('#customer_address').value;
    customer_email = document.querySelector('#customer_email').value;
    customer_phone_number = document.querySelector('#customer_phone_number').value

    if(customer_name === "" || customer_address === "" || customer_email === "" || customer_phone_number === ""){
        alert('QUÝ KHÁCH VUI LÒNG ĐIỀN ĐẦY ĐỦ THÔNG TIN ĐỂ ĐẶT HÀNG !');
    }else{
            data = {
                customer_name : customer_name,
                customer_address : customer_address,
                customer_email : customer_email,
                customer_phone_number : customer_phone_number,
                created_date : created_date,
                status : 0,
                order_detail : cart
        }
    
        fetch(`${urlOrders}`,{
            method : 'POST',
            headers: {
                "Content-Type" : "application/json"
            },
            body : JSON.stringify(data)
        }).then(() => {
            alert('ĐƠN HÀNG ĐÃ ĐƯỢC DUYỆT VÀ SẼ SỚM VẬN CHUYỂN ĐẾN QUÝ KHÁCH <3');
        }).then(() => {
            window.location.href = 'index.html';
        })
    }
}


