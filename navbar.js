document.addEventListener('DOMContentLoaded', function() {
    const navbarItems = document.querySelectorAll('.navbar a');

    function removeActiveClass() {
        navbarItems.forEach(nav => nav.classList.remove('active'));
    }

    navbarItems.forEach(item => {
        item.addEventListener('click', function(event) {
            removeActiveClass();

            event.currentTarget.classList.add('active');
        });
    });

    const currentPage = window.location.pathname.split('/').pop();
    navbarItems.forEach(item => {
        if (item.getAttribute('href') === currentPage) {
            item.classList.add('active');
        }
    });
});
