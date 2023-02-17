<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Blood Bank</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="./imgs/logo.png" type="image/x-icon">
</head>
<style>
    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        background-color: #F5F5F5;
        height: 1px;

    }

    ::-webkit-scrollbar {
        width: 0px;
        background-color: #c81e10;
        height: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #000000;

    }
</style>

<body>
    <?php
    $active = "home";
    include('head.php'); ?>


    <!-- Hero Section Start  -->
    <section class="mt-5">
        <div class="grid max-w-screen-xl  pl-6 py-5 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-8 text-4xl font-bold tracking-tight leading-none md:text-5xl xl:text-6xl text-red-700"># BE HERO </h1>
                <p class="max-w-2xl mb-8 font-light text-black lg:mb-8 md:text-5xl lg:text-5xl ">You don't to be a doctor for saving life.</p>
                <p class="text-2xl pb-5 font-light">One small donation can make a world of difference: <br> Give blood today.</p>
                <a href="donate_blood.php" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 ">
                    Become A Donor
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>

            </div>
            <div class="lg:mt-0 lg:col-span-5 lg:flex">
                <img src="./imgs/hero.png" class="w-[900px] object-cover" alt="mockup">
            </div>
        </div>
    </section>
    <!-- Hero Section End  -->


    <!-- Article Section Start  -->
    <section class="">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-red-600 ">Welcome to BloodBank & Donor Management System</h2>
                <p class="font-light text-black sm:text-xl ">Donating blood is a small act of kindness that can make a huge impact on someone's life. Give the gift of life and become a blood donor today.</p>
            </div>
            <div class="grid gap-8 lg:grid-cols-3">
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md h-[470px] overflow-x-hidden">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-red-600 "><a href="#">The need for blood</a></h2>
                    <p class="mb-5 font-light text-black ">Blood is an essential component of the human body, responsible for the proper functioning of our organs and systems. Blood transfusions are necessary for treating a variety of medical conditions, including anemia, cancer, and trauma. To maintain a sufficient supply of blood, regular donations are required. Blood is made up of several different components, including red blood cells, white blood cells, and platelets, each of which has a specific function and is used for different medical treatments. Blood shortages can occur during times of crisis or disaster, making it even more important for individuals to donate regularly.</p>
                </article>
                <article class="p-6 bg-white rounded-lg border  shadow-md h-[470px] overflow-x-hidden">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-red-600 "><a href="#">How to quickly deploy a static website</a></h2>
                    <ol class="list-disc mb-5 font-light text-black p-2">
                        <li>Understand your blood type and the importance of matching blood types during transfusions.</li>
                        <li>Donate blood regularly to help maintain a sufficient blood supply.</li>
                        <li>Know the eligibility requirements for donating blood and make sure you are healthy enough to give.</li>
                        <li>Take steps to improve your iron levels if you are prone to anemia.</li>
                        <li>Be aware of the signs and symptoms of blood disorders and seek medical attention if you suspect you have one.</li>
                        <li>Learn about the different components of blood and their functions.</li>

                    </ol>
                    </p>
                </article>
                <article class="p-6 bg-white rounded-lg border  shadow-md h-[470px] overflow-x-hidden">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-red-600 "><a href="#">Who you could Help</a></h2>
                    <p class="mb-2 font-light text-black p-2">
                        Someone needs blood somewhere in the world every two seconds.
                    <ol class="mb-5 font-light text-black p-2">
                        <li> 1) Those who experience emergencies or disasters can benefit from blood donations.</li>
                        <li>2) Patients who have blood loss during severe surgery.</li>
                        <li>3) Individuals who have had blood loss as a result of a stomach bleed.</li>
                        <li>4) Women who have life-threatening difficulties while pregnant or giving delivery.</li>
                        <li>5) People who suffer from cancer or severe anaemia that may be brought on by thalassemia or sickle cell anaemia.</li>
                    </ol>
                    </p>
                </article>
            </div>
        </div>
    </section>
    <!-- Article Section End  -->

    <!-- Blood Donor Section Start  -->
    <section>

        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-red-600 ">Blood Donor Names</h2>
        </div>

        <div class="flex flex-col flex-wrap justify-evenly items-center md:flex-row lg:flex-row md:py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <?php
            include 'conn.php';
            $sql = "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id order by rand() limit 6";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 w-[340px] mt-8">
                        <img class="" src="./imgs/donor.jpg" alt="" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-normal tracking-tight text-gray-900 dark:text-white"> <span class="font-bold">Name: </span> <?php echo $row['donor_name']; ?></h5>
                            <div class="card-body">
                                <p class="card-text">
                                    <b>Blood Group : </b> <b><?php echo $row['blood_group']; ?></b><br>
                                    <b>Mobile No. : </b> <?php echo $row['donor_number']; ?><br>
                                    <b>Gender : </b><?php echo $row['donor_gender']; ?><br>
                                    <b>Age : </b> <?php echo $row['donor_age']; ?><br>
                                    <b>Address : </b> <?php echo $row['donor_address']; ?><br>
                                </p>
                            </div>
                        </div>
                    </div>

            <?php }
            } ?>
        </div>
        <br>
        <!-- Blood Donor Section End  -->



    </section>

    <section class="">
        <div class="flex flex-col lg:flex-row justify-between items-center py-8 px-6  mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-0">
            <img class="w-full" src="./imgs/blood1.png" alt="dashboard image">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-bold text-red-700">BLOOD GROUPS</h2>
                <p class="mb-8 font-normal text-gray-900 md:text-lg">
                    Blood group of any human being will mainly fall in any one of the following groups.

                    <ol class="mb-6 font-normal text-gray-900 md:text-lg">

                        <li>A positive or A negative</li>
                        <li>B positive or B negative</li>
                        <li>O positive or O negative</li>
                        <li>AB positive or AB negative.</li>
                    </ol>
                        Your blood group is determined by the genes you inherit from your parents.
                        A healthy diet helps ensure a successful blood donation, and also makes you feel better!
                </p>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>

</html>