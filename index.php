<?php 
include('include/header.php');
?>

<div class="home">
    <div class="overlay"></div>
    <div class="container">
        <div class="row align-items-center" style="min-height: 80vh;">
            <div class="col-md-6 text-light">
                <h1 class="display-4 fw-bold">Unlock the potential with TETRALAB, your gateway to cutting-edge digital
                    innovation.</h1>
                <p class="lead">Our commitment and expertise drive exceptional solutions that elevate your business to
                    new heights. Ready to transform? Let’s connect.</p>
                <a href="contact.php" class="btn btn-primary btn-lg mt-3">Start Project</a>
            </div>
        </div>
        <div class="d-flex justify-content-center fixed-bottom rippleBtnDiv">
            <button class="btn-ripple">
                Let’s Talk
            </button>
        </div>
    </div>
</div>

<div class="service mt-5 py-5">
    <div class="container">
        <h2 class="text-center service-head mb-4">Pioneering the Future of Business with Cutting-Edge Solutions at Tetra Labs</h2>
        <div class="service-layer d-flex justify-content-center align-items-center flex-wrap">
            <div class="service-item text-center m-3">
                <img src="images/healthcare_tech.png" alt="Healthcare Tech" class="img-fluid">
                <h5 class="text-light mt-3">Healthcare Tech</h5>
            </div>
            <div class="service-item text-center m-3">
                <img src="images/e_commerce.png" alt="E-commerce" class="img-fluid">
                <h5 class="text-light mt-3">E-commerce</h5>
            </div>
            <div class="service-item text-center m-3">
                <img src="images/remote_learning.png" alt="Remote Learning" class="img-fluid">
                <h5 class="text-light mt-3">Remote Learning</h5>
            </div>
            <div class="service-item text-center m-3">
                <img src="images/supply_chain_visibility.png" alt="Supply Chain Tech" class="img-fluid">
                <h5 class="text-light mt-3">Supply Chain Visibility</h5>
            </div>
            <div class="service-item text-center m-3">
                <img src="images/data_monetization.png" alt="ERPM Software" class="img-fluid">
                <h5 class="text-light mt-3">ERPM Software</h5>
            </div>
            <div class="service-item text-center m-3">
                <img src="images/cloud_migration.png" alt="Data Monetization" class="img-fluid">
                <h5 class="text-light mt-3">Data Monetization</h5>
            </div>
            <div class="service-item text-center m-3">
                <img src="images/green_tech_solutions.png" alt="Green Tech Solutions" class="img-fluid">
                <h5 class="text-light mt-3">Green Tech Solutions</h5>
            </div>
        </div>
    </div>
</div>

<div id="about">
<?php
include ('whyWe.php');
include ('aboutTetra.php');
include ('ourworks.php');
include ('QualityofTetra.php');
?>
</div>


<div class="stats-section mt-5 mb-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3">
                <div class="stat-box">
                    <h1 class="count-number" data-count="2">0</h1>
                    <p>Years of Expertise</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-box">
                    <h1 class="count-number" data-count="8">0</h1>
                    <p>Successful Projects</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-box">
                    <h1 class="count-number" data-count="25">0</h1>
                    <p>Cup of Coffee</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="stat-box">
                    <h1 class="count-number" data-count="6">0</h1>
                    <p>Happy Clients</p>
                </div>
            </div>
        </div>
    </div>
</div>

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



