<div class="whyWe">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="whyWe-img">
                    <div class="img-wrapper">
                        <img src="images/whywe2.jpeg" class="img-first" alt="Why We Image 1">
                        <img src="images/whywe1.webp" class="img-second" alt="Why We Image 2">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="section-title">Why Choose Tetra Labs?</h2>
                <h4 class="section-subtitle">Innovating for Tomorrow's Challenges</h4>
                <p class="section-description">
                    At Tetra Labs, we are committed to delivering cutting-edge solutions that drive your business
                    forward. Our expertise in diverse industries and dedication to excellence make us the perfect
                    partner for your success.
                </p>
                <ul class="benefits-list">
                    <li><i class="fa-solid fa-check"></i> Industry-leading expertise</li>
                    <li><i class="fa-solid fa-check"></i> Tailored solutions for your needs</li>
                    <li><i class="fa-solid fa-check"></i> Commitment to innovation and growth</li>
                </ul>
                <button class="btn btn-primary"><a href="#" class="btn-link">Discover More</a></button>

            </div>
            <div class="since-circle">
                <h5>Since 2022</h5>
            </div>
        </div>
    </div>
</div>




<style>
.whyWe {
    background-color: #f4f4f4;
    padding: 80px 0;
    position: relative;
}

.whyWe-img {
    position: relative;
}

.img-wrapper {
    position: relative;
}

.img-first {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.img-second {
    position: absolute;
    top: 90%;
    left: 60%;
    transform: translate(-50%, -50%);
    width: 60%;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    border: 4px solid #fff;
}

.since-circle {
    width: 80px;
    height: 80px;
    position: absolute;
    top: 60%;
    right: 15%;
    background-color: #1E2761;
    color: #fff;
    padding: 20px 20px;
    border-radius: 50%;
    text-align: center;
    font-weight: 700;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.since-circle h5{
    font-size: 16px;
}


.since-circle {
    border: none;
    outline: none;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    color: #fff;
    display: grid;
    place-items: center;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    animation: ripple 1.5s infinite;
}

@keyframes ripple {
    0% {
        box-shadow: 0 0 0 0 rgb(10, 48, 96, 0.4), 0 0 0 0 rgb(10, 48, 96, 0.4);
    }

    80% {
        box-shadow: 0 0 0 80px transparent, 0 0 0 120px transparent;
    }

    100% {
        box-shadow: 0 0 0 0 transparent, 0 0 0 0 transparent;
    }
}

.section-title {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 20px;
}

.section-subtitle {
    font-size: 1.5rem;
    font-weight: 500;
    margin-bottom: 20px;
    color: #1E2761;
}

.section-description {
    font-size: 1rem;
    line-height: 1.8;
    margin-bottom: 20px;
    color: #666;
}

.benefits-list {
    list-style: none;
    padding: 0;
    margin-bottom: 30px;
}

.benefits-list li {
    font-size: 1rem;
    margin-bottom: 10px;
    color: #333;
    display: flex;
    align-items: center;
}

.benefits-list i {
    color: #1E2761;
    margin-right: 10px;
}

.btn {
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.btn-primary {
    background-color: #1E2761;
    color: #fff;
    border: none;
}

.btn-primary:hover {
    background-color: #ffc107;
    color: #fff;
}

.btn-link {
    text-decoration: none;
    color: inherit;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .img-second {
        position: relative;
        top: auto;
        left: auto;
        transform: translate(0, 0);
        margin-top: 20px;
        width: 100%;
    }

    .since-circle {
        position: static;
        margin: 20px auto 0;
    }
}
</style>