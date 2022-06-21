const switchLogin = document.querySelector('#s_login');
const switchRegister = document.querySelector('#s_register');

const login = document.querySelector('.login');
const register = document.querySelector('.register');

if (switchRegister != null && switchLogin != null) {
    switchRegister.onclick = () => {
        switchRegister.classList.add('on');
        switchLogin.classList.remove('on');

        register.classList.add('fade-in');
        register.classList.remove('fade-out');
        login.classList.remove('fade-in');
        login.classList.add('fade-out')
    }

    switchLogin.onclick = () => {
        switchLogin.classList.add('on');
        switchRegister.classList.remove('on');

        login.classList.add('fade-in');
        login.classList.remove('fade-out')
        register.classList.remove('fade-in');
        register.classList.add('fade-out');
    }
}

/* Menu mobile */
const btnHamburguer = document.querySelector('#btnHamburguer');
const header = document.querySelector('.header');
const overlay = document.querySelector('.overlay');

if (btnHamburguer != null) {
    btnHamburguer.addEventListener('click', () => {
        header.classList.toggle('open');

        if (header.classList.contains('open')) {
            overlay.classList.add('fade-in');
            overlay.classList.remove('fade-out');

        } else {
            overlay.classList.remove('fade-in');
            overlay.classList.add('fade-out');
        }
    })
}