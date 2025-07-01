window.addEventListener("load", ()=>{
 const LodeR = document.querySelector(".LodeR");


 const addtoCard = document.querySelector('.addtoCard');
    const addorder = document.querySelector('.Addorder');
    disFrom = document.querySelector(".DisbolOrder"),
    chakorder = document.querySelector(".chacher"),
    
    
  

    addtoCard.onclick = ()=>{
        addorder.style.display = "block"

       
        
    }
    disFrom.onclick = ()=>{
       addorder.style.display = "none";
        
    }


    const ImageOrder1 = document.getElementById("Image1"),
 ImageOrder12 = document.getElementById("Image2"),
 InputImage1 = document.getElementById("image1"),
 ImageOrder3 = document.getElementById("Image3"),
 InputImage3 = document.getElementById("image3"),
 InputImage2 = document.getElementById("image2");

 InputImage1.onchange = ()=>{
  ImageOrder1.src = URL.createObjectURL(InputImage1.files[0])
 }
 InputImage2.onchange = ()=>{
  ImageOrder12.src = URL.createObjectURL(InputImage2.files[0])
 }
 InputImage3.onchange = ()=>{
  ImageOrder3.src = URL.createObjectURL(InputImage3.files[0])
 }


    const ActiveImageSlider = document.querySelector(".active");
    const ImageSliderNoActive = document.querySelectorAll(".activeImage img");
    const noactiveImage = document.querySelector(".noactive");
    const ImageActSRC = document.querySelector(".imageslider img");
    

    
    // imageslider
    
    
    ImageSliderNoActive.forEach((imga)=>{
    imga.addEventListener("click", ()=>{
     ImageActSRC.src = imga.src
    })
    })
LodeR.style.display = "none";

})
const 
form = document.querySelector(".login-form form.Orderfordata"),
formOeder = document.querySelector("form.FormOrder"),
BtnSumbit = form.querySelector("button.sned"),
schakout = form.querySelector("button.Sned"),
MasgWoring = document.querySelector(".wornig_maseg"),
loder = document.querySelector(".LodeR");
const addorder = document.querySelector('.Addorder');
const datatext = document.querySelector('.datatext');
const  CHdisebol = document.querySelector(".CHdisebol");



schakout.onclick = ()=>{
    chakorder.style.display = "block";
            datatext.style.display = "none";
            loder.style.display = "none";
}
CHdisebol.onclick = ()=>{
    chakorder.style.display = "none";
            datatext.style.display = "block";
            loder.style.display = "none";
}

form.onsubmit = (e)=>{
e.preventDefault()
}

BtnSumbit.onclick = ()=>{
    loder.style.display = "flex";
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/claint-order-add.php")
    xhr.onload = ()=>{
     if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
         let data = xhr.response;
         if(data === "sucses"){
            chakorder.style.display = "block";
            datatext.style.display = "none";
            loder.style.display = "none";
            location.href = "orderSubmit.php";
            // localStorage.setItem("userOrderId", data[0]);
            // localStorage.setItem("ImagesOrder", data[1]);


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

