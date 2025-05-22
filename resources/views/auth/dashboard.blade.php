@extends('auth.app')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
            <h4 class="text-sm font-semibold text-gray-700 dark:text-gray-200">Total Users</h4>
            <p class="text-2xl font-bold text-gray-900 dark:text-white">123</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
            <h4 class="text-sm font-semibold text-gray-700 dark:text-gray-200">Active Orders</h4>
            <p class="text-2xl font-bold text-gray-900 dark:text-white">45</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
            <h4 class="text-sm font-semibold text-gray-700 dark:text-gray-200">Revenue</h4>
            <p class="text-2xl font-bold text-gray-900 dark:text-white">Rp 12.500.000</p>
        </div>
    </div>

    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow">
        <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Welcome back, {{ Auth::user()->name }}</h3>
        <p class="text-gray-600 dark:text-gray-300">This is your Laravel 10 Blade dashboard. You can customize this area with charts, tables, or any widgets you need.</p>
    </div>
@endsection
