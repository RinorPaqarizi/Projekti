function changeForm(number){
    var divList= document.getElementsByClassName('forms');
    if(number==0){
      divList[0].classList.remove('hidden');
      divList[0].classList.add('form-style');
      divList[1].classList.add('hidden');
      divList[1].classList.remove('form-style');
    }else{
      divList[1].classList.remove('hidden');
      divList[1].classList.add('form-style');
      divList[0].classList.add('hidden');
      divList[0].classList.remove('form-style');
    }
  
  
  
  }


  function validateForm() {
    let username = document.forms["mainForm2"]["username"].value;
    if (!username) {
        alert("Username must be filled out");
        preventDefault()
    }
    let password = document.forms["mainForm2"]["password"].value;
    if (!password) {
        alert("Password must be filled out");
        preventDefault()
    }
    let password1 = document.forms["mainForm2"]["password1"].value;
    if (!password1) {
        alert("Password must be filled out");
        preventDefault()
    }else if(password1!=password){
      alert("Passwords match");
      preventDefault()
    }
  
    return true
  }
  

  
  
  