const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");


nextBtn.addEventListener("click", ()=> form.classList.add('secActive'));

// nextBtn.addEventListener("click", ()=> {
    // allInput.forEach(input => {
        // if(true){
            // form.classList.add('secActive');
        // }else{
        //     form.classList.remove('secActive');
        // }
    // })
// })

backBtn.addEventListener("click", () => form.classList.remove('secActive'));