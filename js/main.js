
function validate(number){
    var inputList = document.getElementsByClassName("input");


    if(number==0){
    
      if(inputList[0].value== "" || inputList[1].value== ""){
        document.getElementById("submit").disabled =true;
        document.getElementById("submit").style.backgroundColor="gray";
      }else{
        
        document.getElementById("submit").disabled =false;
      }



    }else if(number==1){

      if(inputList[3].value=="" || inputList[4].value=="" || inputList[5].value==""){
        document.getElementById("submit1").disabled =true; 
        document.getElementById("submit1").style.backgroundColor="gray";

      }else{
      
        document.getElementById("submit1").disabled =false;
      
        
      }
    }

  }
  function refresh(t){
    setTimeout("window.location.reload();",t);
  }
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

