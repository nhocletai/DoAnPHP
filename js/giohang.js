const btn = document.querySelectorAll(".buy")
//console.log(btn)

btn.forEach(function(button,index) {
  button.addEventListener("click", function(event) {

    var btnItem = event.target
    var product = btnItem.parentElement.parentElement
    //lấy giá trị của sp
    var productImg = product.querySelector("img").src
    var productName = product.querySelector("h3").innerText // h3 là tên sp
    var productMoney = product.querySelector("h2").innerText  // h2 là tiền


    addcart(productImg,productName,productMoney)
  })
})
//Thêm sp
function addcart(productImg,productName,productMoney) {
  var addtr = document.createElement("tr")
  var cartItem = document.querySelectorAll("tbody tr")
  for(var i = 0; i < cartItem.length; i++) {
    var productT = document.querySelectorAll(".title")
    if(productT[i].innerHTML ==  productName) {
      alert("Sản phẩm đã có trong giỏ hàng")
      return
    }
    
  }
  var trcontent = '<tr><td style="display:flex; align-items: center; font-weight: bold"><img style="width:70px" src="'+productImg+'" alt=""><span class = "title">'+productName+'</span></td><td><span class="price">'+productMoney+'</span></td><td><input style="width: 40px; outline:none;" type="number" value="1" min="1"></td><td style = "cursor: pointer;"><ion-icon name="trash-outline" class = "cart-delete"></ion-icon></td></tr>'
  addtr.innerHTML = trcontent
  var cartTable = document.querySelector("tbody")
  // console.log(cartTable)
  cartTable.append(addtr)
  cartTotal()
  inputChange()
  deleteCart()
}
//Tính tổng
function cartTotal() {
  var cartItem = document.querySelectorAll("tbody tr")
  var sum = 0
  for(var i = 0; i < cartItem.length; i++) {
    var inputValue = cartItem[i].querySelector("input").value
    var productMoney = cartItem[i].querySelector(".price").innerText.replace("VNĐ", "")
    //console.log(productMoney)
    totalA = inputValue * productMoney * 1000
    
    //console.log(sum) 
    sum += totalA
    
  }
  var cartTotalA = document.querySelector(".price-total span ")
  cartTotalA.innerHTML = sum.toLocaleString("de-DE") + " VNĐ"
}
//Xoá sp
function deleteCart() {
  var cartItem = document.querySelectorAll("tbody tr")
  for(var i = 0; i < cartItem.length; i++) {
    var productT = document.querySelectorAll(".cart-delete")
    productT[i].addEventListener("click",function(event){
        var cartDelete = event.target
        var cartItemR = cartDelete.parentElement.parentElement
        cartItemR.remove()
        cartTotal()
    })
    
  }
}
function inputChange() {
  var cartItem = document.querySelectorAll("tbody tr")
  for(var i = 0; i < cartItem.length; i++) {
    var inputValue = cartItem[i].querySelector("input")
    inputValue.addEventListener("change", function(){
      cartTotal()
    })
    
  }
}

