const navItems = document.querySelector('.nav__items');
const openNavBtn = document.querySelectror('.#open__nav-btn');
const closeNavBtn = document.querySelectror('#close__nav-btn');

const openNav = () => {
    navItems.style.display = 'flex';
    openNavBtn.style.display = 'none';
    closeNavBtn.style.display = 'inline-block';

}
const closeNav = () => {
    navItems.style.display = 'none';
    openNavBtn.style.display = 'inline-block';
    closeNavBtn.style.display = 'none';

}

openNavBtn.addEventListener('click', openNav);
closeNavBtn.addEventListener('click'closeNav);


const sidebar = document.querySelector('aside');
const showSidebarBtn = document.querySelector('#show__sidebar-btn');
const hideSidebarBtn = document.querySelector('#hide__sidebar-btn');

const showSidebar = () => {
    sidebar.style.left = '0';
    showSidebarBtn.style.display = 'none';
    hideSidebarBtn = 'inline-block';
}

const hideSidebar = () => {
    sidebar.style.left = '-100';
    showSidebarBtn.style.display = 'none';
    hideSidebarBtn = 'inline-block';
}
showSidebarBtn.addEventListener('click', showSidebar);
hideSidebarBtn.addEventListener('click', hideSidebar);
