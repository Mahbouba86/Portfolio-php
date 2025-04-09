// Menu mobile
const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

menuBtn.addEventListener('click', () => {
    const isVisible = mobileMenu.classList.contains('hidden');
    if (isVisible) {
        mobileMenu.classList.remove('hidden');
    } else {
        mobileMenu.classList.add('hidden');
    }
});

/*
 * Validations formulaire avant envoi 
*/
// Le champs firstname et lastname doivent contenir au moins 2 caractères
const firstname = document.getElementById('firstname');
const lastname = document.getElementById('lastname');
firstname.addEventListener('input', () => {
    if (firstname.value.length < 2) {
        firstname.classList.add('border-red-500');
    } else {
        firstname.classList.remove('border-red-500');
    }
});
lastname.addEventListener('input', () => {
    if (lastname.value.length < 2) {
        lastname.classList.add('border-red-500');
    } else {
        lastname.classList.remove('border-red-500');
    }
});

// Le champs email doit être une adresse email valide
const email = document.getElementById('email');
email.addEventListener('input', () => {
    if (!email.value.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)) {
        email.classList.add('border-red-500');
    } else {
        email.classList.remove('border-red-500');
    }
});

// Le champs telephone doit être un numéro de téléphone valide
const telephone = document.getElementById('telephone');
telephone.addEventListener('input', () => {
    if (!telephone.value.match(/^[0-9]{10}$/)) {
        telephone.classList.add('border-red-500');
    } else {
        telephone.classList.remove('border-red-500');
    }
});

// Décompte le nombre de caractères dans le champs message
const messageInput = document.getElementById('message');
const messageLength = document.getElementById('message-length');

messageLength.textContent = '0';
messageInput.addEventListener('input', () => {
    messageLength.textContent = messageInput.value.length;
});