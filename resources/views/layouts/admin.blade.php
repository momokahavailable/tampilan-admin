<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Tailwind CSS assumed -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <nav class="bg-white shadow-md p-4 flex items-center justify-between">
        <!-- Left: Home -->
        <div class="flex items-center space-x-4">
            <a href="#" class="text-xl font-bold text-blue-600">Home</a>
        </div>

        <!-- Middle: Search -->
        <div class="flex-1 mx-4">
            <input type="text" placeholder="Search..." class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <!-- Right: Chat & Profile -->
        <div class="flex items-center space-x-4">
            <a href="#" class="text-gray-600 hover:text-blue-600">💬 Chat</a>
            <a href="#" class="text-gray-600 hover:text-blue-600">👤 Profile</a>
        </div>
    </nav>

    <main class="p-6">
        @yield('content')
    </main>

</body>
</html>
