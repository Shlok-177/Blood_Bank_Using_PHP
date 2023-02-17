<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imgs/logo.png" type="image/x-icon">
    <title>About Us</title>
</head>

<body>
    <?php
    $active = "about";
    include('head.php'); ?>

<section class="mt-5 mb-12">
        <div class="grid max-w-screen-xl  pl-6 py-5 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-8 text-4xl font-bold tracking-tight leading-none md:text-5xl xl:text-6xl text-red-700">About Us</h1>
                <p class="text-xl pr-5  pb-5 font-light leading-10 text-justify">A blood bank is a location where blood donation bags are gathered from blood donation events and kept together. A section of a hospital laboratory known as a "blood bank" is where blood products are stored and where the necessary testing is done to lower the risk of transfusion-related incidents. A suitable and organised management approach must be used to manage the blood bag that is collected from blood donation events. The blood bag needs to be handled gently and meticulously since it pertains to someone's life. The creation of a Web-based Blood Bank and Donation Management System (BBDMS) is suggested in order to give the blood bank management capabilities for handling blood bags and recording the names of those who wish to donate blood and who are in need.</p>

            </div>
            <div class="lg:mt-0 lg:col-span-5 lg:flex">
                <img src="./imgs/hero-1.png" class="w-[900px] object-cover" alt="mockup">
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>

</html>