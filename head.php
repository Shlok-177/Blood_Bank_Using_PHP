<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />

</head>
<style>
    .act {
        background-color: #c81e1e;
        color: white;
        border-radius: 10px;
    }
</style>

<body class="bg-red-50">
    <header>
        <nav class=" px-4 lg:px-6 py-2.5">
            <div class="flex flex-row flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="home.php" class="flex items-center<?php if ($active == 'home') echo "class='act'"; ?>">
                    <img src="./imgs/logo.png" class="mr-3 h-6 sm:h-9 img" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap ">Blood Bank</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="justify-between items-center w-[100%] lg:flex lg:w-auto lg:order-1  sticky sm:fixed" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="home.php" class="block py-2 pr-4 pl-3 text-gray-700 lg:p-0 lg:hover:text-red-700 lg:hover:bg-transparent <?php if ($active == 'home') echo 'act '; ?>" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="about_us.php" class="block py-2 pr-4 pl-3 text-gray-700  lg:hover:bg-transparent lg:hover:text-red-700 lg:p-0  <?php if ($active == 'about') echo 'act'; ?>">About Us</a>
                        </li>
                        <li>
                            <a href="why_donate_blood.php" class="block py-2 pr-4 pl-3 text-gray-700   lg:hover:bg-transparent  lg:hover:text-red-700 lg:p-0  <?php if ($active == 'why') echo 'act'; ?>">Why Donate Blood?</a>
                        </li>
                        <li>
                            <a href="donate_blood.php" class="block py-2 pr-4 pl-3 text-gray-700   lg:hover:bg-transparent  lg:hover:text-red-700 lg:p-0  <?php if ($active == 'donate') echo 'act'; ?>">Become A Donor</a>
                        </li>
                        <li>
                            <a href="need_blood.php" class="block py-2 pr-4 pl-3 text-gray-700    lg:hover:bg-transparent  lg:hover:text-red-700 lg:p-0 <?php if ($active == 'need') echo 'act'; ?>">Want Blood</a>
                        </li>
                        <li>
                            <a href="contact_us.php" class="block py-2 pr-4 pl-3 text-gray-700   lg:hover:bg-transparent  lg:hover:text-red-700 lg:p-0 <?php if ($active == 'contact') echo 'act'; ?> ">Contact US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
</body>

</html>