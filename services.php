<?php
include('include/header.php');
?>
<div class="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center contact-header">
                <h1>SERVICES</h1>

                <div class="breadcrumb col-md-12">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="services.php" class="active">SERVICES</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    <section class="services">
        <div class="container">
            <h1 class="service-head">We Shape The Perfect Solutions<span class="dot">.</span></h1>
            <p class="service-para">We are committed to providing our customers with exceptional service while offering our employees the best training.</p>
            <div class="services-grid">
                <div class="service-card">
                    <div class="icon">01</div>
                    <div class="service-content">
                        <h2>Website Development</h2>
                    </div>
                </div>
                <div class="service-card">
                    <div class="icon">02</div>
                    <div class="service-content">
                        <h2>UI/UX Designing</h2>
                    </div>
                </div>
                <div class="service-card">
                    <div class="icon">03</div>
                    <div class="service-content">
                        <h2>SEO Services & Content Writing</h2>
                    </div>
                </div>
                <div class="service-card">
                    <div class="icon">04</div>
                    <div class="service-content">
                        <h2>Mobile App Development</h2>
                    </div>
                </div>
                <div class="service-card">
                    <div class="icon">05</div>
                    <div class="service-content">
                        <h2>Graphic Designing</h2>
                    </div>
                </div>
                <div class="service-card">
                    <div class="icon">06</div>
                    <div class="service-content">
                        <h2>Digital Marketing</h2>
                    </div>
                </div>

                <div class="service-card">
                    <div class="icon">07</div>
                    <div class="service-content">
                        <h2>Website Managing</h2>
                    </div>
                </div>

                <div class="service-card">
                    <div class="icon">08</div>
                    <div class="service-content">
                        <h2>Application Development</h2>
                    </div>
                </div>

                <div class="service-card">
                    <div class="icon">09</div>
                    <div class="service-content">
                        <h2>Custom Software Development</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
.services {
    padding: 50px 20px;
    text-align: center;
    max-width: 1200px;
    margin: 0 auto;
}

.service-head {
    font-size: 3rem;
    margin-bottom: 20px;
    text-transform: uppercase;
    position: relative;
}

.service-head .dot {
    color: #ff0000;
}

.service-para {
    font-size: 1rem;
    margin-bottom: 50px;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
}

.service-card {
    background-color: #1b2257;
    padding: 20px;
    border-radius: 10px;
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.service-card:hover {
    transform: translateY(-10px);
}

.icon {
    font-size: 2rem;
    color: #ff0000;
    margin-bottom: 15px;
}

.service-content h2 {
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0;
    color: #ffffff;
}

.service-content {
    text-align: center;
}

</style>