
function validateForm() {
  var patientName = document.getElementById('patientName').value;
  var UserName = document.getElementById('UserName').value;
  var vacType = document.getElementById('vacType').value;
  var Cno = document.getElementById('Cno').value;
  var mail = document.getElementById('mail').value;
  var cardNumber = document.getElementById('cardNumber').value;
  var cardExpiry = document.getElementById('cardExpiry').value;
  var securityCode = document.getElementById('securityCode').value;

  if (patientName === '') {
    alert('Please enter the Patient Name!');
    return false;
  }
  if (UserName === '') {
    alert('Please enter the User Name!');
    return false;
  }
  if (vacType === '') {
    alert('Please enter the Vaccine Type!');
    return false;
  }
  if (Cno === '') {
    alert('Please enter the Contact Number!');
    return false;
  }
  if (mail === '') {
    alert('Please enter Email Address!');
    return false;
  }
  if (cardNumber === '') {
    alert('Please enter the Card Number!');
    return false;
  }
  if (cardExpiry === '') {
    alert('Please enter the Card Expiry Date!');
    return false;
  }
  if (securityCode === '') {
    alert('Please enter the Security Code!');
    return false;
  }
  else{
  alert('Payment was Done Sucessfully!');
  return true;
  }
}

function cancelForm() {
  resetForm();
  alert('Form canceled');
}


function submitForm() {

  if (validateForm()) {
    alert('Form submitted');
    resetForm();
  }
}

function resetForm() {
  document.getElementById('patientName').value = '';
  document.getElementById('UserName').value = '';
  document.getElementById('vacType').value = '';
  document.getElementById('Cno').value = '';
  document.getElementById('mail').value = '';
  document.getElementById('cardNumber').value = '';
  document.getElementById('cardExpiry').value = '';
  document.getElementById('securityCode').value = '';
}

   function showPaymentMethodDetails(paymentMethod) {
  var creditDebitDetails = document.getElementById('creditDebitDetails');
    var paypalDetails = document.getElementById('paypalDetails');
  var amexDetails = document.getElementById('amexDetails');
    var otherDetails = document.getElementById('otherDetails');

   if (paymentMethod === 'credit-debit') {
      creditDebitDetails.style.display = 'block';
     paypalDetails.style.display = 'none';
      amexDetails.style.display = 'none';
     otherDetails.style.display = 'none';
   } else if (paymentMethod === 'paypal') {
     creditDebitDetails.style.display = 'none';
     paypalDetails.style.display = 'block';
      amexDetails.style.display = 'none';
     otherDetails.style.display = 'none';
  } else if (paymentMethod === 'amex') {
    creditDebitDetails.style.display = 'none';
     paypalDetails.style.display = 'none';
      amexDetails.style.display = 'block';
      otherDetails.style.display = 'none';
   } else if (paymentMethod === 'other') {
      creditDebitDetails.style.display = 'none';
      paypalDetails.style.display = 'none';
      amexDetails.style.display = 'none';
     otherDetails.style.display = 'block';
    }
  }
  