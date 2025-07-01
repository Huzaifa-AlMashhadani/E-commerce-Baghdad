const 
form = document.querySelector(".login-form form"),
inputs = document.querySelectorAll(".login-form form input"),
textAra = document.querySelector("textarea"),
inputsImage = document.querySelectorAll(".imageiplod label.imageuplod img"),
BtnSumbit = form.querySelector("button"),
MasgWoring = document.querySelector(".wornig_maseg"),
loder = document.querySelector(".LodeR");


form.onsubmit = (e)=>{
e.preventDefault()
}



BtnSumbit.onclick = ()=>{
    loder.style.display = "flex";
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/Admin-root-addOrder.php")
    xhr.onload = ()=>{
     if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
         let data = xhr.response;
         if(data === "sucses"){
            inputs.forEach((input) =>{
                input.value = null;
                textAra.value = "";
            })
            inputsImage.forEach((image) =>{
                image.src = "images/deflot.png";
            })            
            MasgWoring.style.display = "block";
            MasgWoring.style.background = "#00801094"
            
            MasgWoring.textContent = "تم ارسال الطلب بنجاع "
            loder.style.display = "none";

         }else{
            MasgWoring.style.background = "rgba(255, 0, 0, 0.505)"
            MasgWoring.style.display = "block";
            MasgWoring.textContent = data;
            loder.style.display = "none";
         }
        }
     }
    }
    let formdata = new FormData(form);
    xhr.send(formdata);
}