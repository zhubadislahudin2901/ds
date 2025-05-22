<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-white">
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-white dark:bg-gray-800 shadow-md">
            <div class="p-6 text-xl font-bold">MyApp</div>
            <nav class="px-4">
                <a href="{{ route('dashboard') }}" class="block py-2 px-4 rounded hover:bg-gray-200 dark:hover:bg-gray-700">Dashboard</a>
                <a href="#" class="block py-2 px-4 rounded hover:bg-gray-200 dark:hover:bg-gray-700">Users</a>
                <a href="#" class="block py-2 px-4 rounded hover:bg-gray-200 dark:hover:bg-gray-700">Settings</a>
            </nav>
        </aside>

        <!-- Main content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->
            <header class="bg-white dark:bg-gray-800 shadow px-6 py-4 flex justify-between items-center">
                <div class="text-lg font-semibold">Dashboard</div>
                <div>
                    <span>{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="ml-4 text-red-500 hover:underline">Logout</button>
                    </form>
                </div>
            </header>

            <!-- Page content -->
            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
