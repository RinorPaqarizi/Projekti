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


function validate() {
  var username = document.getElementsByClassName("input")[3].value;
  
  if (username == "") {
      alert("Username must be filled out");
     
  }
  var password =  document.getElementsByClassName("input")[4].value;
 
  if (password=="") {
      alert("Password must be filled out");
      
  }
  var password1 =  document.getElementsByClassName("input")[5].value;
 
  if (password1=="") {
      alert("Password must be filled out");
     
  }else if(password1!=password){
    alert("Passwords dont match");
    
  }
  
}