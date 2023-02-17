<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imgs/logo.png" type="image/x-icon">
    <title>Want Blood ?</title>
</head>

<body class=" h-max bg-red-50">
    <?php
    $active = "need";
    include('head.php'); ?>

    <section class="w-[80%] m-auto mt-10 ">
        <h1 class="max-w-2xl mb-8 text-4xl font-bold tracking-tight leading-none md:text-5xl xl:text-5xl text-red-700">Need Blood</h1>
        <form name="needblood" action="" method="POST">
            <div class="grid md:grid-cols-2 md:gap-6 my-5">
                <div class="relative z-0 w-full mb-6 group">
                    <label for="countries" class="peer-focus:font-medium mb-5 text-sm text-gray-500 dark:text-gray-400 ">Select your Blood Group <span class="text-red-600 text-xl">*</span></label>
                    <select id="blood" name="blood" class="bg-transparent border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-red-500 dark:focus:border-red-500 mt-5" required>
                        <option value="">Select</option>
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
                <div class="relative z-0 w-full mb-6 group">
                    <textarea name="address" required id="floating_textarea" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-red-500 focus:outline-none focus:ring-0 focus:border-red-600 peer pt-8" placeholder=" " required></textarea>
                    <label for="floating_textarea" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-red-600 peer-focus:dark:text-red-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Reason, why do you need blood? <span class="text-red-600 text-xl">*</span></label>
                </div>
            </div>
            <input type="submit" name="search" value="Search" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"></input>

        </form>

    </section>

    <div class="min-h-[41vh] mb-5 flex flex-col flex-wrap justify-evenly items-center md:flex-row lg:flex-row md:py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <?php if (isset($_POST['search'])) {

            $bg = $_POST['blood'];
            $sql = "select * from donor_details join blood where donor_details.donor_blood=blood.blood_id AND donor_blood='{$bg}' order by rand() limit 100";
            $result = mysqli_query($conn, $sql) or die("query unsuccessful.");
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

        <?php
                }
            } else {

                echo '<div class="flex p-4 mb-4 text-sm text-red-700 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800 w-[90%] lg:w-[60%] md:w-[60%] m-auto mt-10 " role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                <div>
                  <span class="font-medium">Sorry !</span> No Donor Found For your search Blood Group
                </div>
              </div>';
            }
        } ?>
    </div>
    </div>
    </div>

    <?php include 'footer.php' ?>

</body>

</html>