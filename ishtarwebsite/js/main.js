window.addEventListener("load", ()=>{
    const LodeR = document.querySelector(".LodeR");
   




    LodeR.style.display = "none";

// hoem page saerch items element 
const saerchInput = document.querySelector("#saerch"),
// the element p in the item box || p is hiddn :)
ItemNames = document.querySelectorAll("#ItemName"),
// the box items in home page || section saerch items 
Items = document.querySelectorAll("#Item");




    // saerch input code 
saerchInput.addEventListener("keyup", ()=>{
    const inputvalus = saerchInput.value.toLowerCase();
    Items.forEach((item)=>{
        // selectin p in the element item || p has name of item 
       const ItemsText = item.querySelector("p").textContent.toLowerCase();

    //    how and hiddn item 
       if(ItemsText.includes(inputvalus)){
        item.style.display = 'block';
       }else{
        item.style.display = 'none';
       }
    });
});





})

// window.addEventListener("load", ()=>{
//     const LodeR = document.querySelector(".LodeR")


//     LodeR.style.display = "none";

// })