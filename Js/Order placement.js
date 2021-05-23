// function Log_in(){
//   if (!localStorage.getItem('key','Username'){
//     window.location.href= 'Login.html'
//   }
//   else{
//     location.reload('Order placement.html')
//   }
// }
// window.onload(Log_in())

// ready statement
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

// check ready for any button
function ready() {
    //remove button
    var removeCartbuttons = document.getElementsByClassName("remove-button")
    for (var i = 0; i < removeCartbuttons.length; i++) {
        var button = removeCartbuttons[i]
        button.addEventListener('click', removeCartItems)
    }

    // quantity button
    var quantityInputs = document.getElementsByClassName('quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }
    // product_details js
    var addToCartButtons = document.getElementsByClassName('button2')
    for (var i = 0; i < addToCartButtons.length; i++) {
    var button = addToCartButtons[i]
    button.addEventListener('click', addToCartClicked)
    }

    // Order alert
    document.getElementById('order-button')[0].addEventListener('click', orderClicked)
}

// function to alert the user the order complete

function orderClicked(){
    alert (" Order complete! Thank you for your purchase. ")
    var orderItems = document.getElementsByClassName('products')
    while (orderItems.hasChildNodes()){
        orderItems.removeChild(orderItems.firstChild)
    }
    updateCartTotal()
}



// function remove item in carts (order placement)
function removeCartItems(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.parentElement.remove()
    updateCartTotal()
}


// function change the quantity of items (order placement)
function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}


// function product-js
function addToCartClicked(event) {
    var button = event.target;
    var shopItem = button.parentElement.parentElement;

    var title = shopItem.getElementsByClassName('product-name')[0].innerText;
    var price = shopItem.getElementsByClassName('product-price')[0].innerText;
    var imageSrc = shopItem.getElementsByClassName('product-img')[0].src;

    var key_title = shopItem.getElementsByClassName('product-name')[0].id;
    var key_price = shopItem.getElementsByClassName('product-price')[0].id;
    var key_imageSrc = shopItem.getElementsByClassName('product-img')[0].src;

    localStorage.setItem(key_title, title);
    localStorage.setItem(key_price, price);
    localStorage.setItem(key_imageSrc, imageSrc);

    addItemtoCart(title,price,imageSrc);
    }

function addItemtoCart(title,price,imageSrc) {
    alert("The item has been added to cart")
    var cartRow = document.createElement('div');
    var cartItem = document.getElementsByClassName('products')[0]
    var cartRowContents = `<img src=" ${imageSrc} " alt="Sneakers">
                  <div class="product-info">
                    <h2 id = "4" class="pro-name"> ${title} </h2>
                    <h2 id = "5" class="pro-price"> ${price} </h2>
                    <p class="product-quantity">Quantity <input class = "quantity-input" type="number" value="1">
                    <p class="product-remove">
                    <button class="remove-button"> Remove</button>
                    </p>
                  </div>
                </div>`
    cartRow.innerHTML = cartRowContents
    cartItem.append(cartRow)
}

// function update item in carts (order placement)
function updateCartTotal(){
    var cartContainer = document.getElementsByClassName('product-info')
    var total = 0
    for (var i = 0; i < cartContainer.length; i++){
        var cartContain = cartContainer[i]
        var priceElement = cartContain.getElementsByClassName('pro-price')[0]
        var quantityElement = cartContain.getElementsByClassName('quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round (total * 100) / 100
    document.getElementsByClassName("sub-total")[0].innerText = "$" + total
    document.getElementsByClassName("total-price")[0].innerText = "$" + total
}


// function add coupon by input
function addCoupon() {
    couponInputs = document.getElementById("DiscountCoupon").value;
    var code1 = "COSC2430-HD"
    var code2 = "COSC2430-DI"
    var total_price = document.getElementsByClassName("total-price")[0].innerText;
    if (couponInputs == code1) {
        alert('Your bill has been discounted 20%');

        // test
        var cartContainer = document.getElementsByClassName('product-info')
        var total = 0
        for (var i = 0; i < cartContainer.length; i++){
            var cartContain = cartContainer[i]
            var priceElement = cartContain.getElementsByClassName('pro-price')[0]
            var quantityElement = cartContain.getElementsByClassName('quantity-input')[0]
            var price = parseFloat(priceElement.innerText.replace('$', ''))
            var quantity = quantityElement.value
            total = total + (price * quantity)
        }
        total = Math.round (total * 100) / 100
        document.getElementsByClassName("total-price")[0].innerText = "$" +(total - (total/5))
        // test
    }
    else if (couponInputs == code2) {
        alert('Your bill has been discounted 10%');
        var cartContainer = document.getElementsByClassName('product-info')
        var total = 0
        for (var i = 0; i < cartContainer.length; i++){
            var cartContain = cartContainer[i]
            var priceElement = cartContain.getElementsByClassName('pro-price')[0]
            var quantityElement = cartContain.getElementsByClassName('quantity-input')[0]
            var price = parseFloat(priceElement.innerText.replace('$', ''))
            var quantity = quantityElement.value
            total = total + (price * quantity)
        }
        total = Math.round (total * 100) / 100
        document.getElementsByClassName("total-price")[0].innerText = "$" +(total - (total*0.1))
    }
    else{
        alert('Invalid coupon');
    }
}
