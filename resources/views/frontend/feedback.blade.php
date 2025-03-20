<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback & QR Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css">
</head>
<body class="bg-gradient-to-br from-blue-500 to-teal-600 flex justify-center items-center min-h-screen p-6">
    <div class="bg-white max-w-md w-full p-8 rounded-xl shadow-2xl">
        <!-- Logo -->
        <div class="flex justify-center mb-6 ">
            <img src="{{ asset('asset/img/logo.png') }}" alt="Logo" class="h-24 w-24 p-1 bg-blue-800 object-cover rounded-full shadow-md">
        </div>

        <!-- Contact Icons -->
        <div class="flex justify-center space-x-4 text-gray-700 text-3xl mb-6">
            <a href="tel:+1234567890" class="hover:text-blue-500 transition"><i class='bx bx-phone'></i></a>
            <a href="mailto:yourname@gmail.com" class="hover:text-red-500 transition"><i class='bx bxl-gmail'></i></a>
            <a href="https://wa.me/yourwhatsapp" class="hover:text-green-500 transition"><i class='bx bxl-whatsapp'></i></a>
            <a href="https://linkedin.com/in/yourprofile" class="hover:text-blue-700 transition"><i class='bx bxl-linkedin'></i></a>
            <a href="https://instagram.com/yourprofile" class="hover:text-pink-500 transition"><i class='bx bxl-instagram'></i></a>
        </div>

        <!-- Feedback Section -->
        <h2 class="text-2xl font-bold text-gray-800 text-center">Give Feedback</h2>
        <p class="text-gray-600 text-center mb-4">We value your feedback and suggestions.</p>

        <!-- Star Rating -->
        <div class="flex justify-center items-center gap-2 mb-4">
            <span class="text-red-500 font-semibold">Ratings*</span>
            <div id="rating" class="flex space-x-1 text-yellow-500 text-3xl cursor-pointer">
                <span data-value="1" class="star">&#9734;</span>
                <span data-value="2" class="star">&#9734;</span>
                <span data-value="3" class="star">&#9734;</span>
                <span data-value="4" class="star">&#9734;</span>
                <span data-value="5" class="star">&#9734;</span>
            </div>
        </div>

        <!-- Feedback Form -->
        <form id="feedback-form" class="space-y-4 hidden">
            <input type="text" placeholder="Business Name*" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            <input type="email" placeholder="Email" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            <input type="tel" placeholder="Phone" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            <input type="text" placeholder="Address" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            <textarea placeholder="Description" required class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"></textarea>
            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-teal-500 text-white p-3 rounded-lg font-semibold hover:opacity-90 transition">Submit</button>
            <div class="flex justify-center font-bold text-gray-700 mt-4"><p>Powered by <strong>Company</strong></p></div>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const ratingStars = document.querySelectorAll("#rating .star");
            const feedbackForm = document.getElementById("feedback-form");
            let selectedRating = 0;

            ratingStars.forEach(star => {
                star.addEventListener("click", function () {
                    selectedRating = this.getAttribute("data-value");
                    updateStars(selectedRating);
                    feedbackForm.classList.remove("hidden"); // Show the form
                });
            });

            function updateStars(rating) {
                ratingStars.forEach((star, index) => {
                    star.innerHTML = index < rating ? "&#9733;" : "&#9734;"; // Filled or empty star
                });
            }
        });
    </script>
</body>
</html>
