<?php include 'header.php'; ?>
<?php
    $activePage = 'profile';
?>

<main class="page">
    <div class="container mx-auto mt-5">
        <div class="w-full max-w-md mx-auto">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="" method="post" autocomplete="off"
                enctype="multipart/form-data">

                <h2 class="text-2xl mb-4 text-center font-bold">Register Form</h2>
                <p class="text-gray-600 text-sm text-center mb-6">Please fill out the form to create your account.</p>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name <span
                            class="text-red-500">*</span></label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" name="name" type="text" placeholder="Name" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address <span
                            class="text-red-500">*</span></label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="address" name="address" type="text" placeholder="Address" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="mobile_number">Mobile Number <span
                            class="text-red-500">*</span></label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="mobile_number" name="mobile_number" type="text" placeholder="Mobile Number"
                        pattern="[0-9]{10}" title="Mobile number must be 10 digits" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="profile_picture">Profile
                        Picture</label>
                    <input type="file" name="profile_picture" id="profile-picture"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        onchange="previewImage()">
                    <img id="preview-image" src="#" alt="Preview Image" class="mt-2" style="display: none;">
                    <button type="button" onclick="clearImage()" id="clear-image-btn"
                        class="mt-2 px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 focus:outline-none"
                        style="display: none;">Clear Image</button>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">Gender <span
                            class="text-red-500">*</span></label>
                    <select name="gender"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email <span
                            class="text-red-500">*</span></label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" name="email" type="email" placeholder="Email" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username <span
                            class="text-red-500">*</span></label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" name="username" type="text" placeholder="Username" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password <span
                            class="text-red-500">*</span></label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" name="password" type="password" placeholder="Password" required>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Confirm
                        Password <span class="text-red-500">*</span></label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="confirm-password" name="confirm-password" type="password" placeholder="Confirm Password"
                        required>
                </div>
                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="terms" style="padding-left: 2%;">I
                        agree to the <a href="#" class="text-blue-500 hover:underline">T & C</a> and <a href="#"
                            class="text-blue-500 hover:underline">Privacy Policy</a> <span
                            class="text-red-500">*</span></label>
                </div>


                <p class="text-sm text-gray-600 mb-4">Fields marked with <span class="text-red-500">*</span> are
                    mandatory.</p>

                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        name="register">
                        Register
                    </button>
                </div>
                <p class="text-sm text-gray-600 mt-4">
                    Already have an account? <a href="login.php" class="text-blue-500 hover:text-blue-700">Login</a>
                </p>

            </form>
        </div>
    </div>
</main>
<?php include('footer.php'); ?>