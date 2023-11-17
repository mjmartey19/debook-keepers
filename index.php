<!DOCTYPE html>
<html lang="en">

    <?php
    $title = "Debookkeepers";
    include('head.php');
    ?>

    <body>


    <?php
    $menu_link_1 ="active";
    $menu_link_2 ="";
    $menu_link_3 ="";
    $menu_link_4 ="";

    include('header.php');
    ?>
    <!-- SLIDER SECTION START -->
    <div class="slider-wrapper">
        <div id="slider">
            <div class="slide1">
                <img src="slides/1.jpg" width="100%" />
            </div>
            <div class="slide1">
                <img src="slides/3.jpeg" width="100%" />
            </div>
            <div class="slide1">
                <img src="slides/2.jpg" width="100%" />
            </div>

            <!-- <div class="slide1">
                <img src="slides/4.jpeg" width="100%" />
            </div> -->
        </div>
        <div id="slider-direction-nav"></div>
        <div id="slider-control-nav"></div>
    </div>
    <!-- SLIDER SECTION END -->
    <!-- HOME SECTION START -->
    <div class="home">
        <div class="home-title">
            <h3>Hello, we are your Ghanaian accountants.</h3>
            <span>Accounting, bookkeeping and tax advisory services</span>
        </div>
        <div class="flex-container">
            <div class="image">
                <img src="images/business.svg" alt="">
            </div>
            <div class="home-desc">
                <p>We offer a whole spectrum of accounting services in Ghana. We assembled a really competent staff. Each of our clients is assigned a personal account manager, whose job it is to make sure that they receive services that not only meet but also exceed their needs in the areas of accounting, bookkeeping administration, consulting, and tax advice.
                    We have a very diverse and professional team in Ghana, which enables us to offer the whole spectrum of services related to accounting, bookkeeping, tax, and VAT compliance to both individuals and businesses.
                </p>
                <div class="btn">
                    <a href="contact.php#get-started">Get Started Now</a>
                </div>
            </div>
        </div>

        <div class="consult">
            <div class="flex-container">
                <div class="desc">
                    <h1> TAX AND ACCOUNT CONSULT</h1>
                    <span>Ask all your questions to our experts right now</span>
                </div>
                <div class="btn">
                    <a href="contact.php#get-started">Get Started Now</a>
                </div>
            </div>
        </div>
        <div class="service">
        <div class="service-title">
            <h3>Benefits</h3>
            <span>Professional & Affordable</span>
        </div>
            <div class="box-container">
                <div class="box">
                    <img src="images/icon_8.jpg" alt="">
                    <h2>Annual Financial Report</h2>
                    <p>Annual accounts or financial statements can be prepared for all businesses</p>
                </div>
                <div class="box">
                    <img src="images/icon_2.jpg" alt="">
                    <h2>Online Invoicing</h2>
                    <p>Create expert invoices online and take advantage of premium invoice design and online payment options.</p>
                </div>
                <div class="box">
                    <img src="images/icon_3.jpg" alt="">
                    <h2>Real-Time Accounting</h2>
                    <p>Make your businMaking smarter business decisions is made possible by having access to real-time and current financial information about your firm.</p>
                </div>
                <div class="box">
                    <img src="images/icon_4.jpg" alt="">
                    <h2>Accept PayPal Payments</h2>
                    <p>By accepting PayPal payments, your clients may quickly and securely pay your bills using their PayPal accounts.</p>
                </div>
                <div class="box">
                    <img src="images/icon_5.jpg" alt="">
                    <h2>Consolidated Reporting</h2>
                    <p>Utilizing the combined financial information from the main business and its subsidiaries, the consolidated financial statement depicts the company's financial situation.</p>
                </div>
                <div class="box">
                    <img src="images/icon_1.jpg" alt="">
                    <h2>Multi-currency Accounting</h2>
                    <p>Track earnings and losses with automatic currency conversions as you conduct business in more than 160 different currencies.</p>
                </div>
                <div class="box">
                    <img src="images/icon_7.jpg" alt="">
                    <h2>Bank-grade Security</h2>
                    <p>Behind our 256-bit encrypted secure storage, we safeguard your data. We go above and above to protect your data in the most impenetrable way possible.</p>
                </div>
                <div class="box">
                    <img src="images/icon_6.jpg" alt="">
                    <h2>Reduce your Tax Burden</h2>
                    <p>Utilize the fundamental, long-term business methods and tactics that can help you lower your business's tax liability.</p>
                </div>
                <div class="box">
                    <img src="images/icon_9.jpg" alt="">
                    <h2>Timely Filing Tax Returns</h2>
                    <p>When filing your tax returns, we'll make sure they're accurate and submitted on time. If we don't hear from you by the due date, we'll automatically extend your return.</p>
                </div>
                
            </div>
        </div>
    </div>
    <!-- HOME SECTION ENDS -->
    <?php
    include('footer.php');
    ?>
    </body>
    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/lean-slider.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var slider = $('#slider').leanSlider({
                directionNav: '#slider-direction-nav',
                controlNav: '#slider-control-nav'
            });
        });
    </script>

</html>