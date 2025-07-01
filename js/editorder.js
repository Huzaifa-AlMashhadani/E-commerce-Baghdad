const 
form = document.querySelector(".login-form form"),
BtnSumbit = form.querySelector("button"),
MasgWoring = document.querySelector(".wornig_maseg"),
loder = document.querySelector(".LodeR");


form.onsubmit = (e)=>{
e.preventDefault()
}



BtnSumbit.onclick = ()=>{
    loder.style.display = "flex";
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/editorder.php")
    xhr.onload = ()=>{
     if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
         let data = xhr.response;
         if(data === "sucses"){   
            location.href = "ordersDashbord.php";

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