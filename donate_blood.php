<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imgs/logo.png" type="image/x-icon">
    <title>Donate Blood</title>
</head>

<body>
    <?php
    $active = "donate";
    include('head.php'); ?>

    <section class="w-[80%] m-auto mt-10 mb-10 lg:mb-0  min-h-[77.5vh]">
        <h1 class="max-w-2xl mb-8 text-4xl font-bold tracking-tight leading-none md:text-5xl xl:text-5xl text-red-700">Donate Blood</h1>

        <form name = "donor" action = "savedata.php" method = "POST">
            <div class="grid md:grid-cols-2 md:gap-6 my-5">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="fullname" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                    <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Full Name <span class="text-red-600 text-xl">*</span></label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="number" name="mobileno" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                    <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890) <span class="text-red-600 text-xl">*</span></label>
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6 my-5">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="email" name="emailid" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                    <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email ID <span class="text-red-600 text-xl">*</span></label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="number" name="age" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required />
                    <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Age <span class="text-red-600 text-xl">*</span></label>
                </div>
            </div>

            <div class="grid md:grid-cols-2 md:gap-6 my-5">
                <div class="relative z-0 w-full mb-6 group">

                    <label for="countries" class="peer-focus:font-medium mb-5 text-sm text-gray-500 dark:text-gray-400 ">Select your Gender <span class="text-red-600 text-xl">*</span></label>
                    <select id="countries" name="gender" class="bg-transparent border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500 mt-5">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="FeMale">Female</option>
                    </select>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <label for="countries" class="peer-focus:font-medium mb-5 text-sm text-gray-500 dark:text-gray-400 ">Select your Blood Group <span class="text-red-600 text-xl">*</span></label>
                    <select id="blood" name = "blood" class="bg-transparent border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500 mt-5">
                        <option value = "">Select</option>
                        <?php
                        include 'conn.php';
                        $sql = "select * from blood";
                        $result = mysqli_query($conn, $sql) or die("query unsuccessful.");
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <option value=" <?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div>
                <div class="relative z-0 w-full mb-6 group">
                    <textarea name="address" required id="floating_textarea" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer" placeholder=" " required></textarea>
                    <label for="floating_textarea" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-0 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address <span class="text-red-600 text-xl">*</span></label>
                </div>

            </div>


            <input type="submit" name = "submit" value="submit"  class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"></input>
        </form>

    </section>

    <?php include 'footer.php' ?>

</body>

</html>