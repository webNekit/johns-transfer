function phoneFormat(){
    const phoneElements = document.querySelectorAll('[data-phone-number]');
    phoneElements.forEach(function(element) {
        const rawPhoneNumber = element.getAttribute('data-phone-number');
        if (rawPhoneNumber && rawPhoneNumber.length === 11 && rawPhoneNumber.startsWith('7') && /^\d+$/.test(rawPhoneNumber)) {
            const formattedPhoneNumber = `+7(${rawPhoneNumber.slice(1, 4)})${rawPhoneNumber.slice(4, 7)}-${rawPhoneNumber.slice(7, 9)}-${rawPhoneNumber.slice(9)}`;
            element.textContent = formattedPhoneNumber;
        }
    });
}

export default phoneFormat;