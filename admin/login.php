<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login to Admin Dashbord</title>
	<link rel="shortcut icon" href="../imgs/logo.png" type="image/x-icon">
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />
	<style>
		.img::before {
			content: "";
			background-image: url('../imgs/bg.jpg');
			background-size: cover;
			position: absolute;
			top: 0px;
			right: 0px;
			bottom: 0px;
			left: 0px;
			opacity: 0.5;
		}
	</style>
</head>

<body class="img">

	<!-- component -->
	<div class="min-h-scree py-6 mt-20 w-[90%] m-auto flex flex-col justify-center sm:py-12">
		<div class="relative py-3 sm:max-w-xl sm:mx-auto">
			<div class="absolute rounded-2xl inset-0 bg-gradient-to-r from-red-300 to-red-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
			</div>
			<div class="relative px-4 py-10 rounded-2xl bg-white shadow-lg sm:rounded-3xl sm:p-20">
				<div class="max-w-md mx-auto">
					<div>
						<h1 class="text-2xl font-semibold">Login To Admin Dashbord</h1>
					</div>
					<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="divide-y divide-gray-200">
							<div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
								<div class="relative">
									<input autocomplete="off" id="text" name="username" type="text" class="peer placeholder-transparent h-10 w-full border-0 border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600 focus:ring-0 focus:ring-offset-0" placeholder="Email address" />
									<label for="text" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">User Name</label>
								</div>
								<div class="relative">
									<input autocomplete="off" id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-0 border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600 focus:ring-0 focus:ring-offset-0" placeholder="Password" />
									<label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
								</div>
								<div class="relative">
									<input type="submit" name="login" class="bg-red-500 text-white rounded-md px-2 py-1 hover:cursor-pointer"></input>
								</div>
							</div>
							<?php
							include 'conn.php';

							if (isset($_POST["login"])) {

								$username = mysqli_real_escape_string($conn, $_POST["username"]);
								$password = mysqli_real_escape_string($conn, $_POST["password"]);

								$sql = "SELECT * from admin_info where admin_username='$username' and admin_password='$password'";
								$result = mysqli_query($conn, $sql) or die("query failed.");

								if (mysqli_num_rows($result) > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										session_start();
										$_SESSION['loggedin'] = true;
										$_SESSION["username"] = $username;
										header("Location: dashboard.php");
										echo 'sab kuch sahi hai bro';
									}
								} else {
									echo '<div class="p-4 mb-2 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
									<span class="font-medium">Username and Password are not match</span>
								  </div>';
								}
							}
							?>

					</form>
				</div>
			</div>
		</div>
	</div>
	</div>

</body>

</html>