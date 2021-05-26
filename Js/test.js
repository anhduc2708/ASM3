

function addItemtoCart() {
    alert("The item has been added to cart")
    var cartRow = document.createElement('div');
    var cartItem = document.getElementsByClassName('test')[0]
    var cartRowContents = `<img src=" " alt="Sneakers">
                  <div class="product-info">
                    <h2 id = "4" class="pro-name">  </h2>
                    <h2 id = "5" class="pro-price">  </h2>
                    <p class="product-quantity">Quantity <input class = "quantity-input" type="number" value="1">
                    <p class="product-remove">
                    <button class="remove-button"> Remove</button>
                    </p>
                  </div>
                </div>`
    cartRow.innerHTML = cartRowContents
    cartItem.append(cartRow)
}

var tag = document.createElement('div');
var cartRowContents = '<h1> hello </h1>'

// var cartRowContents = `<img src=" " alt="Sneakers">
//               <div class="product-info">
//                 <h2 id = "4" class="pro-name">  </h2>
//                 <h2 id = "5" class="pro-price">  </h2>
//                 <p class="product-quantity">Quantity <input class = "quantity-input" type="number" value="1">
//                 <p class="product-remove">
//                 <button class="remove-button"> Remove</button>
//                 </p>
//               </div>
//             </div>`
var hello_append = cartRowContents.innerHTML
// tag.innerHTML = cartRowContents
tag.appendChild(hello_append);
var element = document.getElementById("new");
element.appendChild(tag);
