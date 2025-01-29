window.addEventListener("load", () => {
    const LodeR = document.querySelector(".LodeR");
  
    // dark Mode Button | :)
    const BtnChanchMode = document.getElementById("darckMode"),
      BtnChanchModeW = document.getElementById("darckMode-w"),
      BackgColor = document.getElementById("BackgColor");
    // Saerch Js Items Selector


  
    BtnChanchMode.onclick = () => {
      BackgColor.classList.toggle("darckModeActive");
      localStorage.setItem("Mode", "var(--darck-mode)");
      BtnChanchMode.style.display = "none";
      BtnChanchModeW.style.display = "block";
      BackgColor.style.background = localStorage.Mode;
    };
    BtnChanchModeW.onclick = () => {
      BackgColor.classList.toggle("darckModeActive");
      localStorage.setItem("Mode", "var(--back-color-2)");
      BtnChanchModeW.style.display = "none";
      BtnChanchMode.style.display = "block";
      BackgColor.style.background = localStorage.Mode;
    };
  
    if (localStorage.Mode == "var(--back-color-2)") {
      BtnChanchModeW.style.display = "none";
      BackgColor.style.background = localStorage.Mode;
    }
    if (localStorage.Mode == "var(--darck-mode)") {
      BtnChanchMode.style.display = "none";
      BackgColor.style.background = localStorage.Mode;
    }
  
    LodeR.style.display = "none";
  });
  
  const Add_Order = document.querySelector("h2.add-order");
  const Add_Form_Order = document.getElementById("Add_Form_Order");
  const addorder = document.querySelector(".contant");
  const DisOrderForm = document.querySelector(".DisOrderForm");
  
  

  
  const ImageOrder1 = document.getElementById("Image1"),
    ImageOrder2 = document.getElementById("Image2"),
    InputImage1 = document.getElementById("image1"),
    InputImage2 = document.getElementById("image2"),
    ImageOrder3 = document.getElementById("Image3"),
    ImageOrder4 = document.getElementById("Image4"),
    InputImage3 = document.getElementById("image3"),
    InputImage4 = document.getElementById("image4");
  
  InputImage1.onchange = () => {
    ImageOrder1.src = URL.createObjectURL(InputImage1.files[0]);
  };
  InputImage2.onchange = () => {
    ImageOrder2.src = URL.createObjectURL(InputImage2.files[0]);
  };
  InputImage3.onchange = () => {
    ImageOrder3.src = URL.createObjectURL(InputImage3.files[0]);
  };
  InputImage4.onchange = () => {
    ImageOrder4.src = URL.createObjectURL(InputImage4.files[0]);
  };
  
  
  const ClintPrice = document.getElementById("ClintPrice"),
  PriceWroing = document.getElementById("PriceWorin");
  
  ClintPrice.addEventListener('keyup', ()=>{
   if(ClintPrice.value > 1000000){
   ClintPrice.style.border = '1px solid red';
   PriceWroing.style.color = "red";
   PriceWroing.style.fontSize = "19px";
   PriceWroing.style.display = "block";
   PriceWroing.textContent = "هل انت متاكد ان السعر " + ClintPrice.value +" دينار ؟"
   
   
   }else{
     ClintPrice.style.border = 'none';
     PriceWroing.style.display = "none";
   }
   if(ClintPrice.value < 10000){
     ClintPrice.style.border = '1px solid red';
     PriceWroing.style.color = "red";
     PriceWroing.style.fontSize = "19px";
     PriceWroing.style.display = "block";
     PriceWroing.textContent = "يرجى كتابة السعر بشكل صحيح ";
     
    
   }
   
   
  })
  