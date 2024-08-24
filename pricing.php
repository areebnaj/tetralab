
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 20px;
        }

        h1 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 40px;
        }

        .pricing-table {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .pricing-plan {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }

        .pricing-plan.popular {
            border-color: #7f63f4;
            background-color: #f2f1fd;
        }

        .pricing-plan h3 {
            font-size: 1.5rem;
            color: #333;
        }

        .pricing-plan p {
            font-size: 1rem;
            color: #666;
            margin: 15px 0;
        }

        .pricing-plan .price {
            font-size: 2.5rem;
            color: #333;
        }

        .pricing-plan .term {
            font-size: 0.875rem;
            color: #999;
        }

        .pricing-plan .discount {
            font-size: 0.875rem;
            color: #666;
            background-color: #d8d8ff;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 15px;
        }

        .pricing-plan .extra {
            font-size: 0.875rem;
            color: #7f63f4;
            margin-top: 15px;
            display: block;
        }

        .pricing-plan ul {
            text-align: left;
            margin-top: 20px;
            padding-left: 20px;
        }

        .pricing-plan ul li {
            margin-bottom: 10px;
            color: #333;
            font-size: 0.875rem;
            list-style: none;
            position: relative;
        }

        .pricing-plan ul li:before {
            content: '✔';
            color: #00b300;
            position: absolute;
            left: -20px;
            font-size: 1rem;
        }

        .pricing-plan.popular .badge {
            background-color: #7f63f4;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.75rem;
            margin-top: -40px;
            margin-bottom: 10px;
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
<?php 
include('include/header.php');
?>
<div class="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center contact-header">
                <h1 class="text-white">PRICING</h1>

                <div class="breadcrumb col-md-12">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="pricing.php" class="active">PRICING</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-5 mt-5">
<h1>Pick Your Perfect Plan</h1>
<p>Get started in complete confidence. Our 30-day money-back guarantee means it's risk-free.</p>
</div>
<div class="pricing-table mb-5 mt-5">
    <div class="pricing-plan">
        <h3>Premium</h3>
        <p>Everything you need to create your website.</p>
        <p class="discount">$11.99 <span>Save 75%</span></p>
        <p class="price">$2.99<span class="term">/mo</span></p>
        <p class="term">For 48-month term</p>
        <p class="extra">+3 months free</p>
        <ul>
            <li>100 websites</li>
            <li>~25,000 visits monthly</li>
            <li>100 GB SSD storage</li>
            <li>400,000 files and directories (inodes)</li>
            <li>Free pre-built templates</li>
            <li>Free automatic website migration</li>
            <li>Unlimited free SSL</li>
            <li>Free email</li>
            <li>Weekly Backups</li>
            <li>WordPress vulnerabilities scanner</li>
            <li>WordPress auto updates</li>
            <li>Standard WordPress acceleration</li>
            <li>Unlimited bandwidth</li>
            <li>Free domain ($9.99 value)</li>
        </ul>
    </div>

    <div class="pricing-plan popular">
        <div class="badge">MOST POPULAR</div>
        <h3>Business</h3>
        <p>Level up with more power and enhanced features.</p>
        <p class="discount">$13.99 <span>Save 71%</span></p>
        <p class="price">$3.99<span class="term">/mo</span></p>
        <p class="term">For 48-month term</p>
        <p class="extra">+3 months free</p>
        <ul>
            <li>100 websites</li>
            <li>~100,000 visits monthly</li>
            <li>200 GB NVMe storage</li>
            <li>600,000 files and directories (inodes)</li>
            <li>Free pre-built templates</li>
            <li>Free automatic website migration</li>
            <li>Unlimited free SSL</li>
            <li>Free email</li>
            <li>Daily and on-demand backups</li>
            <li>WordPress vulnerabilities scanner</li>
            <li>Smart WordPress auto updates</li>
            <li>Advanced WordPress acceleration</li>
            <li>Unlimited bandwidth</li>
            <li>Free domain ($9.99 value)</li>
        </ul>
    </div>

    <div class="pricing-plan">
        <h3>Cloud Startup</h3>
        <p>Enjoy optimized performance & powerful resources.</p>
        <p class="discount">$24.99 <span>Save 68%</span></p>
        <p class="price">$7.99<span class="term">/mo</span></p>
        <p class="term">For 48-month term</p>
        <p class="extra">+3 months free</p>
        <ul>
            <li>300 websites</li>
            <li>~200,000 visits monthly</li>
            <li>200 GB NVMe storage</li>
            <li>2,000,000 files and directories (inodes)</li>
            <li>Free pre-built templates</li>
            <li>Free automatic website migration</li>
            <li>Unlimited free SSL</li>
            <li>Free email</li>
            <li>Daily and on-demand backups</li>
            <li>WordPress vulnerabilities scanner</li>
            <li>Smart WordPress auto updates</li>
            <li>Advanced WordPress acceleration</li>
            <li>Unlimited bandwidth</li>
            <li>Free domain ($9.99 value)</li>
        </ul>
    </div>
</div>

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


