const storageType = localStorage;
const consentPropertyName = 'We have the cookie';

const shouldShowPopup = () => storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {

    const acceptFn = event => {
        saveToStorage(storageType);
        consentPopup.classList.add('consent-popup');
        consentPopup.style.visibility =('hidden')
    }
    const consentPopup = document.getElementById('consent-popup');
    const acceptBtn = document.getElementById('accept');
    acceptBtn.addEventListener('click', acceptFn);

    if (shouldShowPopup(storageType)) {
        consentPopup.classList.add('consent-popup');
        consentPopup.style.visibility =('hidden')
}
}