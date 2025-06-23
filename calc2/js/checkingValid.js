function checkingValid() {
  const input=document.getElementById('main_value');

    input.addEventListener('input',function(){
    this.value = this.value.replace(/[^0-9()+\-*/.]/g,'');
    });

    //input.value=result;
}

window.onload = checkingValid;


