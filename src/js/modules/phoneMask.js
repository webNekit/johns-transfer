import IMask from "imask";

function phoneMask(){
    const element = document.getElementById('contact-phone-input');
    const maskOptions = {
    mask: '+{7}(000)000-00-00'
    };
    const mask = IMask(element, maskOptions);
}

export default phoneMask;