document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function() {
        // Simple example: increment a counter in local storage
        let cartCount = localStorage.getItem('cartCount') || 0;
        cartCount = parseInt(cartCount) + 1;
        localStorage.setItem('cartCount', cartCount);
        alert('Product added to cart! Total items: ' + cartCount);
    });
});

function addToCart(productName, price) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let product = { name: productName, price: price, quantity: 1 };
    let existingProduct = cart.find(p => p.name === productName);

    if (existingProduct) {
        existingProduct.quantity += 1; // Increase quantity if product already exists in cart
    } else {
        cart.push(product); // Add new product to cart
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    alert(productName + " added to cart.");
}


function displayCartItems() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let cartItemsContainer = document.querySelector('.cart-items');
    let totalPrice = 0;

    cartItemsContainer.innerHTML = ''; // Clear existing items

    cart.forEach((item, index) => {
        let div = document.createElement('div');
        div.className = 'cart-item';
        div.innerHTML = `
            <img src="product_image_placeholder.jpg" alt="${item.name}" class="product-image">
            <div class="item-details">
                <p>${item.name}</p>
                <p>$${item.price}</p>
                <input type="number" value="${item.quantity}" min="1" onchange="updateQuantity(${index}, this.value)"> <!-- Quantity -->
                <button onclick="removeFromCart(${index})">Remove</button>
            </div>
        `;
        cartItemsContainer.appendChild(div);
        totalPrice += item.price * item.quantity;
    });

    document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
}

function removeFromCart(index) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    displayCartItems();
}

function updateQuantity(index, quantity) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart[index].quantity = quantity;
    localStorage.setItem('cart', JSON.stringify(cart));
    displayCartItems();
}

window.onload = displayCartItems;