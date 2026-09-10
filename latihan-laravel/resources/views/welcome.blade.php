<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Halaman Depan - Maharani Tri Wahyuningrum</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Styles / Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 dark:bg-neutral-900 text-gray-800 dark:text-gray-100 font-sans antialiased min-h-screen flex flex-col justify-center items-center p-6">

    <div class="max-w-md w-full bg-white dark:bg-neutral-800 rounded-xl shadow-lg border border-gray-200 dark:border-neutral-700 p-8 text-center">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">
            Identitas Mahasiswa
        </h1>

        <div class="space-y-4 text-left bg-gray-50 dark:bg-neutral-900 p-4 rounded-lg border border-gray-100 dark:border-neutral-700">
            <div>
                <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">Nama Lengkap</span>
                <span class="text-lg font-medium text-gray-800 dark:text-gray-200">Maharani Tri Wahyuningrum</span>
            </div>
            <hr class="border-gray-200 dark:border-neutral-700">
            <div>
                <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider">NIM</span>
                <span class="text-lg font-mono font-semibold text-indigo-600 dark:text-indigo-400">H1H024012</span>
            </div>
        </div>

        <p class="mt-6 text-xs text-gray-400">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </p>
    </div>

</body>
</html>