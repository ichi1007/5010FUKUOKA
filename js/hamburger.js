'use strict';

const initMenu = () => {
    const btn = document.getElementById('hamburger-btn');
    const menu = document.getElementById('hamburger-menu');
    
    if (!btn || !menu) {
        console.error('Required elements not found');
        return;
    }

    btn.addEventListener('click', (e) => {
        btn.classList.toggle('active');
        menu.classList.toggle('active');
        document.body.classList.toggle('menu-open');
    });
};

document.addEventListener('DOMContentLoaded', () => {
    initMenu();
});