const loginLink = document.querySelector(".login__link");
const loginPopup = document.querySelector(".modal__login");
const loginClose = loginPopup.querySelector(".modal__close");

const callbackLink = document.querySelectorAll(".callback__link");
const callbackPopup = document.querySelector(".modal__callback");
const callbackClose = callbackPopup.querySelector(".callback__close");


try {
    loginLink.addEventListener("click", function (evt) {
        evt.preventDefault()
        loginPopup.classList.add("modal__show")
    });
    
    loginClose.addEventListener('click', function (evt) {
        evt.preventDefault()
        loginPopup.classList.remove('modal__show')
    })
} catch {

}

callbackLink.forEach(item => {
    item.addEventListener("click", function (evt) {
        evt.preventDefault()
        callbackPopup.classList.add("modal__show")
    });
})

callbackClose.addEventListener('click', function (evt) {
    evt.preventDefault()
    callbackPopup.classList.remove('modal__show')
})
