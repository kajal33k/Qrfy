<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - QR Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-4xl bg-white rounded-lg shadow-lg flex">
        <!-- Left Side - Registration Form -->
        <div class="w-full md:w-1/2 p-8">
            <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">Create an Account</h2>
            
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Full Name</label>
                    <input type="text" name="name" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Email Address</label>
                    <input type="email" name="email" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Password</label>
                    <input type="password" name="password" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                
                <div>
                    <label class="block text-gray-700 font-medium mb-2">Confirm Password</label>
                    <input type="password" name="confirm_password" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>
                
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 rounded-lg font-semibold hover:bg-blue-600 transition">
                    Register
                </button>
            </form>
            
            <p class="text-center text-sm text-gray-600 mt-4">
                Already have an account? <a href="{{route('frontend.login')}}" class="text-blue-500 font-medium hover:underline">Sign in</a>
            </p>
        </div>

        <!-- Right Side - Feature Illustration -->
        <div class="hidden md:block w-1/2 bg-blue-50 p-8 rounded-r-lg border-l border-gray-200">
            <div class="h-full flex flex-col justify-center items-center">
                <img src="https://cdn-icons-png.flaticon.com/512/2994/2994590.png" 
                     alt="User management" 
                     class="w-48 h-48 mb-6">
                
                <h3 class="text-xl font-semibold text-gray-800 mb-2">User Management</h3>
                <p class="text-gray-600 text-center mb-6">
                    Invite team members and manage permissions<br>
                    for different folders and sections
                </p>

                <div class="space-y-4 w-full max-w-xs">
                    <div class="flex items-center p-3 bg-white rounded-lg shadow-sm">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mr-3">
                            <i class='bx bx-folder text-green-600'></i>
                        </div>
                        <span class="text-gray-700">Folder permissions</span>
                    </div>
                    
                    <div class="flex items-center p-3 bg-white rounded-lg shadow-sm">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mr-3">
                            <i class='bx bx-shield-alt text-blue-600'></i>
                        </div>
                        <span class="text-gray-700">Role-based access</span>
                    </div>
                    
                    <div class="flex items-center p-3 bg-white rounded-lg shadow-sm">
                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center mr-3">
                            <i class='bx bx-user-plus text-purple-600'></i>
                        </div>
                        <span class="text-gray-700">Team invitations</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>