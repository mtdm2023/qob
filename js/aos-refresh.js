// Initialize AOS
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS with default configuration
    AOS.init({
        duration: 1000,
        once: false,
        mirror: true
    });
});

// Function to refresh AOS animations
function refreshAOS() {
    // Clear all existing AOS animations
    const elements = document.querySelectorAll('[data-aos]');
    elements.forEach(element => {
        element.removeAttribute('data-aos-animate');
        element.classList.remove('aos-animate');
    });

    // Reinitialize AOS
    AOS.refresh();

    // Force recalculation of animations
    setTimeout(() => {
        AOS.refreshHard();
    }, 100);
}

// Add click event listeners to buttons that need AOS refresh
document.addEventListener('DOMContentLoaded', function() {
    // Get all buttons that should trigger AOS refresh
    const refreshButtons = document.querySelectorAll('.aos-refresh-trigger');
    
    refreshButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            refreshAOS();
        });
    });

    // Add event listener for owl carousel navigation
    const carouselNavButtons = document.querySelectorAll('.CarouselNav_btn');
    carouselNavButtons.forEach(button => {
        button.addEventListener('click', function() {
            refreshAOS();
        });
    });
});

// Optional: Refresh AOS on window resize
let resizeTimer;
window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        refreshAOS();
    }, 250);
});
