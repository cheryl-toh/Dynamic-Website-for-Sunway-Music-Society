
const paymenttng = document.querySelector(".tng")
const paymentfpx = document.querySelector(".bank")
const paymentcard = document.querySelector(".card")
const tng = document.getElementById('tng-btn')
const fpx = document.getElementById('fpx-btn')
const cd = document.getElementById('card-btn')

tng.addEventListener('click', () =>{
    paymenttng.style.display = "initial";
    paymentfpx.style.display = "none";
    paymentcard.style.display = "none";  
})


fpx.addEventListener('click', () =>{
    paymenttng.style.display = "none";
    paymentfpx.style.display = "initial";
    paymentcard.style.display = "none";  
})

cd.addEventListener('click', () =>{
    paymenttng.style.display = "none";
    paymentfpx.style.display = "none";
    paymentcard.style.display = "initial";  
})