  var divSliders=document.getElementsByClassName('slides');
  var sIndex=0;

  document.getElementsByClassName('prev')[0].addEventListener('click', function (event){
  
    divSliders[sIndex].classList.remove('active');
    divSliders[sIndex].classList.add('not-active');
  
    
    sIndex--;
    console.log(sIndex);
    if(sIndex<1) sIndex=5;
   
      divSliders[sIndex].classList.add('active');
    divSliders[sIndex].classList.remove('not-active');
    
  })




  document.getElementsByClassName('next')[0].addEventListener('click', function (event){
 
    divSliders[sIndex].classList.remove('active');
    divSliders[sIndex].classList.add('not-active');

    
    sIndex++;
    console.log(sIndex);
    if(sIndex==divSliders.length) sIndex=0;
    console.log(sIndex);
    divSliders[sIndex].classList.add('active');
    divSliders[sIndex].classList.remove('not-active');

  })