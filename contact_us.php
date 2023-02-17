<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imgs/logo.png" type="image/x-icon">
    <title>Contact Us</title>
</head>

<body class="bg-red-50">

    <?php
    $active = "contact";
    include('head.php'); ?>
    <?php
    if (isset($_POST["send"])) {
        $name = $_POST['fullname'];
        $number = $_POST['contactno'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $conn = mysqli_connect("localhost", "root", "", "blood_donation") or die("Connection error");
        $sql = "insert into contact_query (query_name,query_mail,query_number,query_message ,query_status) values('{$name}','{$email}','{$number}','{$message}' , '2')";
        $result = mysqli_query($conn, $sql) or die("query unsuccessful.");
        echo '<div id="alert-3" class="flex p-4 mb-4 text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
        Message Sent, We will contact you shortly.
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </div>';
    } ?>

    <div class="text-center w-full">
        <h1 class="mt-8 text-4xl font-bold tracking-tight leading-none md:text-5xl xl:text-5xl text-red-700">Contact Us
        </h1>

    </div>
    <div class="max-w-screen-xl mt-24 px-8 pl-7 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-5 lg:mx-auto bg-white text-gray-900 rounded-lg shadow-lg min-h-[500px] sm:w-[90%] mb-16">
        <div class="flex flex-col justify-between">
            <div>
                <h2 class="text-4xl lg:text-5xl font-bold leading-tight text-red-700">Let's Save life together!</h2>
                <div>
                    <?php
                    include 'conn.php';
                    $sql = "select * from contact_info";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <br>
                            <p>
                            <h4 class="text-2xl text-red-700 font-bold">Address : <span class="text-lg text-black font-normal"> <?php echo $row['contact_address']; ?> </span></h4> <br>
                            </p>
                            <p>
                            <h4 class="text-2xl font-bold text-red-700">Contact Number : <span class="text-lg text-black font-normal"> <?php echo $row['contact_phone']; ?> </span></h4> <br>
                            </p>
                            <p>
                            <h4 class="text-2xl font-bold text-red-700"> Email: <span class="text-lg font-normal text-black"> <a href="mailto:contact@shlokjadeja.tech"><?php echo $row['contact_mail']; ?></a> </span> </h4> <br>
                            </a></b>
                            </p>
                    <?php }
                    } ?>
                </div>
                <img src="./imgs/contact.jpg" class="w-[500px] h-[300px]" alt="">

            </div>
        </div>
        <form name="sentMessage" method="post">
            <div class="">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="fullname" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                    <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 pb-2">Full Name <span class="text-red-600 text-xl">*</span></label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="number" name="contactno" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                    <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890) <span class="text-red-600 text-xl">*</span></label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="email" name="email" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                    <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 mb-6">Email ID <span class="text-red-600 text-xl">*</span></label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <textarea name="message" required id="floating_textarea" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required></textarea>
                    <label for="floating_textarea" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Message <span class="text-red-600 text-xl">*</span></label>
                </div>
                <div class="mt-8">
                    <input type="submit" name="send" value="Send Message" class="uppercase text-sm font-bold tracking-wide bg-red-700 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">

                    </input>
                </div>
            </div>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>