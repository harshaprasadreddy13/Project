function calculateTotal() {
    const totalElement = document.getElementById('totalPrice');
    let total = 0;

    // Check Chicken Pizza
    const chickenPizzaCheckbox = document.getElementById('pizza1');
    const chickenPizzaQuantity = parseInt(document.getElementById('quantity1').value) || 0;
    if (chickenPizzaCheckbox.checked) {
        total += chickenPizzaQuantity * parseInt(chickenPizzaCheckbox.getAttribute('data-price'));
    }

    // Check Cheesy Vegetable Pizza
    const veggiePizzaCheckbox = document.getElementById('pizza2');
    const veggiePizzaQuantity = parseInt(document.getElementById('quantity2').value) || 0;
    if (veggiePizzaCheckbox.checked) {
        total += veggiePizzaQuantity * parseInt(veggiePizzaCheckbox.getAttribute('data-price'));
    }

    totalElement.textContent = total;
}

function processOrder(event) {
    event.preventDefault();
    // Here you can handle the form submission (e.g., sending data to a server)
    alert('Order placed successfully!');
    // Optionally reset the form or update UI
    document.getElementById('totalPrice').textContent = '0';
}
