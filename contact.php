<?php 
session_start();
include('config/dbcon.php');
include('include/header.php');
?>

<div class="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center contact-header">
                <h1>CONTACT US</h1>

                <div class="breadcrumb col-md-12">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="contact.php" class="active">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex flex-row gap-5">
                <div class="col-md-6">
                    <form action="functions/contactFunction.php" method="post">
                        <div class="contact-subtitle">
                            <h2>Book a call or fill out the form below and we’ll get back to you once we’ve processed
                                your request.</h2>
                        </div>
                        <div class="d-flex flex-row gap-3">
                            <div class="col-md-6 mt-4">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="col-md-6 mt-4">
                                <label for="business">Business</label>
                                <input type="text" class="form-control" name="business">
                            </div>
                        </div>

                        <div class="d-flex flex-row gap-3">
                            <div class="col-md-6 mt-4">
                                <label for="email">Corporate Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>

                            <div class="col-md-6 mt-4">
                                <label for="phone">Phone</label>
                                <input type="number" class="form-control" name="phone">
                            </div>
                        </div>

                        <div class="d-flex flex-row gap-3">
                            <div class="col-md-6 mt-4">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" name="subject" placeholder="Project Management">
                            </div>

                            <div class="col-md-6 mt-4">
                                <label for="budget">Project Budget (min. RS 15k)</label>
                                <input type="number" class="form-control" name="budget" placeholder="Budget">
                            </div>
                        </div>

                        <div class="col-md-12 mt-4 mb-4">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control"
                                placeholder="Please include project details, duration, tech stack, IT professionals needed, and other relevant info"
                                rows="5"></textarea>
                        </div>

                        <p class="contact-para">Please be informed that when you click the Send button, Tetra Labs will
                            process your personal
                            data in accordance with our Privacy Policy for the purpose of providing you with appropriate
                            information.</p>

                        <button type="submit" class="btn btn-primary float-end mb-5 contact-btn"
                            name="contactSubmitBtn">Submit</button>
                    </form>
                </div>

                <div class="col-md-6">
                    <div class="right-column-content">
                        <h2 class="right-column-title">What happens next?</h2>
                        <ul class="timeline-list">
                            <li class="timeline-item">
                                <span class="timeline-number">01</span>
                                <p class="timeline-text">We will get back to you shortly to detail your project needs
                                    and sign an NDA to ensure the confidentiality of information.</p>
                            </li>
                            <li class="timeline-item">
                                <span class="timeline-number">02</span>
                                <p class="timeline-text">After examining requirements, our analysts and developers
                                    devise a project proposal with the scope of works, team size, time, and cost
                                    estimates.</p>
                            </li>
                            <li class="timeline-item">
                                <span class="timeline-number">03</span>
                                <p class="timeline-text">We arrange a meeting with you to discuss the offer and come to
                                    an agreement.</p>
                            </li>
                            <li class="timeline-item">
                                <span class="timeline-number">04</span>
                                <p class="timeline-text">We sign a contract and start working on your project as quickly
                                    as possible.</p>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<?php 
include('include/footer.php');
?>