
<?php
include('include/header.php');
?>

<div class="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center contact-header">
                <h1 class="text-white">TECHNOLOGY WE USE</h1>

                <div class="breadcrumb col-md-12">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="pricing.php" class="active">TECHNOLOGY</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="technologies">
    <div class="container">
        <div class="tech-heading mt-3 mb-5 text-center">
            <h1>Technologies We Use<span class="dot mb-4">.</span></h1>
        </div>
        <div class="tech-grid">
            <div class="tech-item"><img src="images/html-logo-removebg-preview.png" alt="HTML5"></div>
            <div class="tech-item"><img src="images/css-removebg-preview.png" alt="CSS3"></div>
            <div class="tech-item"><img src="images/php-removebg-preview.png" alt="PHP"></div>
            <div class="tech-item"><img src="images/laravel-removebg-preview.png" alt="Laravel"></div>
            <div class="tech-item"><img src="images/js1-removebg-preview.png" alt="JavaScript"></div>
            <div class="tech-item"><img src="images/nodejs-removebg-preview.png" alt="Node.js"></div>
            <div class="tech-item"><img src="images/wordpress-removebg-preview.png" alt="WordPress"></div>
            <div class="tech-item"><img src="images/java-removebg-preview.png" alt="java"></div>
            <div class="tech-item"><img src="images/aws-removebg-preview.png" alt="AWS"></div>
            <div class="tech-item"><img src="images/angu-removebg-preview.png" alt="Angular"></div>
            <div class="tech-item"><img src="images/react-removebg-preview.png" alt="react"></div>
            <div class="tech-item"><img src="images/git-removebg-preview.png" alt="git"></div>
        </div>
    </div>
</section>

<?php 
include('recent.php');
include('mission.php');
?>
<div class="contact-tetra mb-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 contact-redirector">
                <h2>LET'S GET YOUR PROJECT STARTED! WITH THE BEST DIGITAL MARKETING AGENCY</h2>
                <button class="btn-contact"><a href="contact.php">Contact With Us</a></button>
            </div>
        </div>
    </div>
</div>
<?php
include('include/footer.php');
?>

<style>
.technologies {
    padding: 50px 20px;
    background-color: #ffffff;
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
}


.tech-heading {
    flex: 1;
    text-align: left;
}

.tech-heading h1 {
    font-size: 2.5rem;
    font-weight: bold;
    margin: 0;
    color: #333;
}

.tech-heading .dot {
    color: #ffcc00;
}

.tech-grid {
    flex: 2;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    justify-items: center;
}

.tech-item {
    width: 200px;
    background-color: #000000;
    padding: 10px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
}

.tech-item img {
    width: 50px;
    height: 50px;
}

.tech-item:hover {
    transform: translateY(-10px);
}

</style>