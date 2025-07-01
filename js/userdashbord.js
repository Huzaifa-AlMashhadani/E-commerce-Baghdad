
window.addEventListener("load", ()=>{
  const LodeR = document.querySelector(".LodeR")


 
// dark Mode Button | :)
const BtnChanchMode = document.getElementById("darckMode"),

BtnChanchModeW = document.getElementById("darckMode-w"),
BackgColor = document.getElementById("BackgColor");
// Saerch Js Items Selector 
const SaerchInput = document.querySelector("#SaerchInput"),
Items = document.querySelectorAll(".Userdashbord .itme"); 



SaerchInput.addEventListener("keyup", ()=>{
  const  SaerchVlad = SaerchInput.value.toLowerCase()
  Items.forEach((item)=>{
   const itemname = item.querySelector("p").textContent.toLowerCase();
   if(itemname.includes(SaerchVlad)){
      item.style.display = 'block';
   }else(
    item.style.display = 'none'

   )
  })
})



BtnChanchMode.onclick = ()=>{
BackgColor.classList.toggle("darckModeActive"); 
localStorage.setItem("Mode", "var(--darck-mode)");
BtnChanchMode.style.display = 'none';
BtnChanchModeW.style.display = "block";
BackgColor.style.background = localStorage.Mode;

}
BtnChanchModeW.onclick = ()=>{
BackgColor.classList.toggle("darckModeActive"); 
localStorage.setItem("Mode", "var(--back-color-2)");
BtnChanchModeW.style.display = 'none';
BtnChanchMode.style.display = "block";
BackgColor.style.background = localStorage.Mode;

}

if(localStorage.Mode == "var(--back-color-2)"){
BtnChanchModeW.style.display = "none";
    BackgColor.style.background = localStorage.Mode;
}
if(localStorage.Mode == "var(--darck-mode)"){
BtnChanchMode.style.display = "none";
    BackgColor.style.background = localStorage.Mode;
}

LodeR.style.display = "none";

const ImageOrder1 = document.getElementById("Image1"),
 ImageOrder12 = document.getElementById("Image2"),
 InputImage1 = document.getElementById("image1"),
 InputImage2 = document.getElementById("image2");

 InputImage1.onchange = ()=>{
  ImageOrder1.src = URL.createObjectURL(InputImage1.files[0])
 }
 InputImage2.onchange = ()=>{
  ImageOrder12.src = URL.createObjectURL(InputImage2.files[0])
 }


 const ClintPrice = document.getElementById("ClintPrice"),
 PriceWroing = document.getElementById("PriceWorin");

 ClintPrice.addEventListener('keyup', ()=>{
  if(ClintPrice.value > 1000000){
  ClintPrice.style.border = '1px solid red';
  PriceWroing.style.color = "red";
  PriceWroing.style.fontSize = "19px";
  PriceWroing.style.display = "block";
  PriceWroing.textContent = "هل انت متاكد ان السعر اكثر من مليون دينار ؟"
  }else{
    ClintPrice.style.border = 'none';
    PriceWroing.style.display = "none";
  }
  if(ClintPrice.value < 1000){
    ClintPrice.style.border = '1px solid red';
    PriceWroing.style.color = "red";
    PriceWroing.style.fontSize = "19px";
    PriceWroing.style.display = "block";
    PriceWroing.textContent = "يرجى كتابة السعر بشكل صحيح "
  }
  
  
 })

 const enabolOrder = document.getElementById("enabolOrder"),
 disabolOrder = document.getElementById("disbolOrder"),
 orderForm = document.querySelector(".addorder");

 enabolOrder.onclick = ()=>{
  orderForm.style.display ="block";
 }

disabolOrder.onclick = ()=>{
  orderForm.style.zIndex = "-1";
  orderForm.style.display = "none";
}


 

})
