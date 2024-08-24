
document.addEventListener('DOMContentLoaded', function () {
    // Smooth scroll effect for internal links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Scroll-triggered animations
    const workCategories = document.querySelectorAll('.work-category');
    const options = {
        threshold: 0.3
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                observer.unobserve(entry.target);
            }
        });
    }, options);

    workCategories.forEach(category => {
        observer.observe(category);
    });
});



function showContent(tabName, event) {
    var i;
    var x = document.getElementsByClassName("tab-content");
    var buttons = document.getElementsByClassName("tab-btn");

    // Hide all tab content
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
        x[i].classList.remove("active-content");
    }

    // Remove active class from all buttons
    for (i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove("active");
    }

    // Show the clicked tab's content and set the button as active
    document.getElementById(tabName).style.display = "block";
    document.getElementById(tabName).classList.add("active-content");
    event.currentTarget.classList.add("active");
}

// Display the default tab (Mission) content on page load
document.addEventListener("DOMContentLoaded", function () {
    showContent('mission', {
        currentTarget: document.querySelector('.tab-btn.active')
    });
});


document.addEventListener("DOMContentLoaded", function () {
    function animateCounter() {
        const counters = document.querySelectorAll('.count-number');
        const speed = 200; // Adjust the speed of the counter animation

        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-count');
                const count = +counter.innerText;
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 30);
                } else {
                    counter.innerText = target;
                }
            };

            updateCount();
        });
    }

    const countersSection = document.querySelector('.stats-section');
    const options = {
        threshold: 0.6
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter();
                observer.disconnect();
            }
        });
    }, options);

    observer.observe(countersSection);
});


document.addEventListener("DOMContentLoaded", function () {
    // Accordion functionality
    const accordionItems = document.querySelectorAll(".accordion-item");

    accordionItems.forEach(item => {
        const title = item.querySelector(".accordion-title");

        title.addEventListener("click", function () {
            const isActive = item.classList.contains("active");

            accordionItems.forEach(i => i.classList.remove("active"));

            if (!isActive) {
                item.classList.add("active");
            }
        });
    });

    // Scroll effect for progress bars
    const progressBars = document.querySelectorAll(".progress");

    const animateProgressBars = () => {
        progressBars.forEach(bar => {
            const value = bar.getAttribute("data-progress");
            bar.style.width = value + "%";
        });
    };

    const onScroll = () => {
        const triggerPoint = window.innerHeight * 0.8;

        progressBars.forEach(bar => {
            const barPosition = bar.getBoundingClientRect().top;

            if (barPosition < triggerPoint) {
                animateProgressBars();
                window.removeEventListener('scroll', onScroll);
            }
        });
    };

    window.addEventListener('scroll', onScroll);
});



// Scroll functions 
ScrollReveal({
    reset:true,
    distance :'60px',
    duration: 2500,
    delay: 400
});

ScrollReveal().reveal('.homeContent ,.portfolioHead', {delay:500, origin:'left'});
ScrollReveal().reveal('.service-item' ,  {delay:200, origin:'bottom'});
ScrollReveal().reveal('.img-first, .img-second', {delay:300, origin:'left' , setInterval:400});
ScrollReveal().reveal('.work-category', {delay:300, origin:'bottom' , setInterval:300});
ScrollReveal().reveal('.quality-item', {delay:300, origin:'bottom' , setInterval:200});
ScrollReveal().reveal('.benefits', {delay:400, origin:'right' , setInterval:200});
ScrollReveal().reveal('.project-details', {delay:300, origin:'bottom' , setInterval:300});





