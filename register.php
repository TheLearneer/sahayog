<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - Sahayog</title>
   <link rel="icon" href="https://img.icons8.com/ios-filled/50/000000/pray.png" type="image/x-icon">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h1 class="text-5xl text-center font-bold uppercase" id='title'>
                  <i class="fas fa-praying-hands"></i>
                  SAHAYOG
                </h1>
                <h2 class="mt-6 text-center text-xl font-semibold text-gray-600">Register an Account!</h2>
            </div>

            <?php include 'user/includes/error.php'; ?>

            <form class="mt-8 space-y-6" action="register_action.php" method="POST">
                <div class="rounded-md">
                  <div>
                    <label for="firstname" class="sr-only">First Name</label>
                    <input id="firstname" name="firstname" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="First Name" />
                  </div>
                  <div>
                    <label for="middlename" class="sr-only">Middle Name</label>
                    <input id="middlename" name="middlename" type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Middle Name" />
                  </div>
                  <div>
                    <label for="lastname" class="sr-only">Last Name</label>
                    <input id="lastname" name="lastname" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Last Name" />
                  </div>
                  <div class="mt-5">
                  	<label for="dob" class="sr-only">Date of Birth</label>
				          	<input id="dob" name="dob" type="date" required class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" />
                  </div>
                  <div class="my-5">
                    <label for="gender" class="sr-only">Gender</label>
                    <div class="flex flex-wrap gap-x-5 items-center">
                      <div class="flex items-center">
                        <input id="male" name="gender" type="radio" value="male" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
                        <label for="male" class="ml-1 block text-sm font-medium text-gray-700"> Male </label>
                      </div>
                      <div class="flex items-center">
                        <input id="female" name="gender" type="radio" value="female" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
                        <label for="female" class="ml-1 block text-sm font-medium text-gray-700"> Female </label>
                      </div>
                      <div class="flex items-center">
                        <input id="other" name="gender" type="radio" value="other" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
                        <label for="other" class="ml-1 block text-sm font-medium text-gray-700"> Other </label>
                      </div>
                    </div>
                  </div>

                  <div>
                    <label for="address1" class="sr-only">Permanent Address</label>
                    <input id="address1" name="address1" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Permanent Address" />
                  </div>
                  <div>
                    <label for="address2" class="sr-only">Temporary Address</label>
                    <input id="address2" name="address2" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Temporary Address" />
                  </div>

                  <div class="my-5">
                    <label for="mobile" class="sr-only">Mobile</label>
                    <input id="mobile" name="mobile" type="text" required class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Mobile Number" />
                  </div>

                  <div>
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" name="email" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email Address" />
                  </div>
                  <div>
                    <label for="username" class="sr-only">Username</label>
                    <input id="username" name="username" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Username" />
                  </div>
                  
                  <div class="mt-5">
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password" />
                  </div>
                  <div>
                    <label for="password2" class="sr-only">Confirm Password</label>
                    <input id="password2" name="password2" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirm Password" />
                  </div>
                </div>

                <div>
                    <button id="login" type="submit" name="btn_register" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <span>Sign Up</span>
                    </button>
                </div>
				<div class="text-center text-sm">
                  	Already have an account?
                  	<a href="login" class="text-purple-500">
                    	Sign in here
                  	</a>
                </div>
            </form>
        </div>
	</div>
</body>
</html>