
document.addEventListener("DOMContentLoaded", function() {
    // Get the current page's filename (e.g., 'services.html')
    const currentPage = window.location.pathname.split('/').pop();

    // Select all the links inside the nav
    const navLinks = document.querySelectorAll('nav a');

    // Loop through each link
    navLinks.forEach(link => {
        // Get the href from the link
        const linkPage = link.getAttribute('href');

        // If the link's href matches the current page, add the 'active' class
        if (linkPage === currentPage) {
            link.classList.add('active');
        }
    });
});