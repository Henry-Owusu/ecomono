var paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener('submit', payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  var amountTd = document.getElementById('amount');
  var amountToBeConverted = parseFloat(amountTd.innerText.replace(/\$/g, '')); 
  var amount = amountToBeConverted * 100;
  var handler = PaystackPop.setup({
    key: 'pk_test_6e1ea5c069fc80f3af7e5aee0197c4ca4395cb68', // Replace with your public key
    email: document.getElementById('email-address').value,
    amount: amount,
    currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
    ref: "" + Math.floor(Math.random() * 1000000000 + 1), // Replace with a reference you generated
    callback: function(response) {
      $.ajax
      ({
        url: "ecomono/actions/payment_action.php?reference=" + response.reference,
        method: "GET",
        success: function(){
          window.location.href = '../../payment_success.php';
          // paymentForm.onsubmit()
        }
      });
      var reference = response.reference;
      alert('Payment complete Reference: ' + reference);
      
    },
    onClose: function() {
      alert('Transaction was not completed, window closed.');
    },
    
  });
  handler.openIframe();
}