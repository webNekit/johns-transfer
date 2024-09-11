function dropdown() {
    document.addEventListener('DOMContentLoaded', function () {
        const buttonLanguage = document.getElementById('buttonLanguage');
        const languageDropdown = document.getElementById('languageDropdown');
    
        let isDropdownVisible = false;
    
        function showDropdown() {
            isDropdownVisible = true;
            languageDropdown.classList.add('show');
        }
    
        function hideDropdown() {
            isDropdownVisible = false;
            languageDropdown.classList.remove('show');
        }
    
        buttonLanguage.addEventListener('click', function (event) {
            event.stopPropagation(); // Останавливаем всплытие события
            if (!isDropdownVisible) {
                showDropdown();
            } else {
                hideDropdown();
            }
        });
    
        document.addEventListener('click', function (event) {
            if (!buttonLanguage.contains(event.target) && !languageDropdown.contains(event.target)) {
                if (isDropdownVisible) {
                    hideDropdown();
                }
            }
        });
    
        buttonLanguage.addEventListener('mouseenter', showDropdown);
        buttonLanguage.addEventListener('mouseleave', function () {
            if (!languageDropdown.contains(event.relatedTarget)) {
                hideDropdown();
            }
        });
    
        languageDropdown.addEventListener('mouseenter', showDropdown);
        languageDropdown.addEventListener('mouseleave', function () {
            if (!buttonLanguage.contains(event.relatedTarget)) {
                hideDropdown();
            }
        });
    });
    

}

export default dropdown;