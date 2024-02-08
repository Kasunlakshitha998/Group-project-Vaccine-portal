function validateForm() {
    var patientName = document.getElementById('patientName').value;
    var contactNo = document.getElementById('contactNo').value;
    var vaccineName = document.getElementById('vaccineName').value;
    var patientAge = document.getElementById('patientAge').value;
    var address = document.getElementById('address').value;
    var scheduleDate = document.getElementById('scheduleDate').value;
    var terms = document.getElementById('terms').value;

    if (patientName === '') {
      alert('Please enter the patient name');
      return false;
    }
    if (contactNo === '') {
      alert('Please enter the contact number');
      return false;
    }
    if (vaccineName === '') {
      alert('Please enter the name of the vaccine');
      return false;
    }
    if (patientAge === '') {
      alert('Please enter the patient age');
      return false;
    }
    if (address === '') {
      alert('Please enter the address');
      return false;
    }
    if (!terms.checked) {
      alert('Please agree to Terms & Conditions');
      return true;
    }
    else{
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
    document.getElementById('contactNo').value = '';
    document.getElementById('vaccineName').value = '';
    document.getElementById('patientAge').value = '';
    document.getElementById('address').value = '';
    document.getElementById('scheduleDate').value = '';
  }

 
  