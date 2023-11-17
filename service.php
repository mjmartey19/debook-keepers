<!DOCTYPE html>
<html lang="en">

    <?php
     $title = "Our Services";
    include('head.php');
    ?>

    <body>


    <?php
    $menu_link_1 ="";
    $menu_link_2 ="active";
    $menu_link_3 ="";
    $menu_link_4 ="";

    include('header.php');
    ?>
<!-- ABOUT SECTION START -->
<div class="about">
    <div class="title-container">
        <img src="slides/1.jpg" alt="">
        <h1>SERVICES</h1>
    </div>

    <div class="who">
        <h1>ACCOUNTING</h1>
        <p>
            We recording financial transactions pertaining to businesses
            Regardless of the size of a business. Debookkeepers summarize, analyze, and report transactions to oversight agencies, regulators, and tax collection entities.
        </p>
    </div>
    <div class="who">
        <h1>TAX ADVISOR</h1>
        <p>
            We provides advice on strategies to minimize taxes owed while staying within the scope of the law and regulation. We are well versed in tax laws, IRS guidelines, and we represent businesses before tax authorities and courts in order to resolve issues relating to tax.
        </p>
    </div>

</div>
<!-- ABOUT SECTION START -->
<?php
    include('footer.php');
    ?>
    </body>
    <script src="js/script.js"></script>

</html>