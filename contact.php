<?php
include("init.php");
$_SESSION['form_id'] = $fns->generate_token();
?>
<!DOCTYPE html>
<html lang="en">

    <?php
     $title = "Contact Us";
    include('head.php');
    ?>

    <body>


    <?php
    $menu_link_1 ="";
    $menu_link_2 ="";
    $menu_link_3 ="";
    $menu_link_4 ="active";

    include('header.php');
    ?>

     <!-- ABOUT SECTION START -->
     <div class="about">
        <div class="title-container">
            <img src="slides/1.jpg" alt="">
            <h1>CONTACT</h1>
        </div>
        <div class="contact-details" id="get-started">
            <h1>Meet Our Awesome Team</h1>
            <span>Always at Your Service</span>
            <div class="box-container">
                
                <div class="box">
                    <h3>Sales Team</h3>
                    <a href=""><i class="fas fa-phone icon"></i><span>+233202200082</span> </a>
                    <a href=""><i class="fas fa-envelope icon"></i><span>info@debookkeepersgh.com</span></a>
                </div>
                <div class="box">
                    <h3>Chat with Customer Service</h3>
                    <a href="https://api.whatsapp.com/send?phone=233248219345" target="_blank"><i class="fab fa-whatsapp icon"></i><span>Whatsap</span></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https:"><i class="fab fa-facebook icon"></i><span>Facebook Messanger</span></a>
                    <a href="+233242512650"><i class="fas fa-certificate icon"></i><span>Company Number: +233242512650</span></a>
                </div>
                
                <div class="box">
                    <h3>Business Hours</h3>
                    <a href=""><i class="far fa-clock"></i><span>Monday - Friday: 8AM to 5PM</span></a>
                    <a href=""><i class="far fa-clock"></i><span>Saturday: 8AM to 2PM</span></a>
                    <a href=""><i class="far fa-clock"></i><span>Sunday: Closed</span></a>
                </div>
            </div>
        </div>
        <a href="https://www.facebook.com/sharer/sharer.php?u=https://kuulchat.com&amp;quote=Checkout+https%3A%2F%2Fkuulchat.com%2F+.+They+provide+free+online+courses%2C+past+questions+%26+online+shopping+for+boarders." target="_blank"><span><i class="fab fa-facebook"></i></span></a>
        <section class="contact" id="contact">
            <div class="form-title">
                <h2>Ask us Your Questions</h2>
                <span>Consult with experienced team for a complete soluion for your business</span>
                </div>
            <div class="row">
                <div class="image">
                    <img src="images/contact.jpg" alt="">
                </div>
                <div class="form">
                <form action="process.php" method="POST" id="ContactForm">
                    <input type="hidden" name="<?php echo $_SESSION['form_id'];?>" value="1" />
					<div class="inputBox">
                        <input type="text" placeholder="Name *" name="name" class="name" required>
                        <input type="email" placeholder="Email" name="email" class="email">
                    </div>
                    <div class="inputBox">
                        <input type="tel" placeholder="Phone" name="phone" class="tel">
                        <input type="text" placeholder="Subject *" name="subject" class="subject" required>
                    </div>
                    <textarea placeholder="Message *" name="message" id="" cols="30" rows="10" class="message" required></textarea>
                    <div>
						<div class="remain-inline">
							<input type="submit" class="btn" value="send message">
						</div>
						<div class="remain-inline" style="padding: 20px 10px 10px 20px;">
							<div id="animation">
								<div class="spinner"></div>
							</div>
						</div>
					</div>
                </form>
				<div id="feedback"></div>
            </div>
            </div>
            
        </section>
    <!-- ABOUT SECTION START -->
   
    <?php
    include('footer.php');
    ?>
    </body>
    <script src="js/script.js"></script>
</html>