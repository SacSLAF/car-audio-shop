<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Test</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-2xl max-w-md w-full">
            <h1 class="text-4xl font-bold text-amber-600 text-center mb-4">
                🎵 Car Audio Shop
            </h1>
            <p class="text-gray-600 text-center mb-6">
                Tailwind CSS is working!
            </p>
            <div class="flex flex-col gap-3">
                <button class="bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition duration-300">
                    Shop Now
                </button>
                <button class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                    Learn More
                </button>
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded">
                    <p class="font-bold">Success!</p>
                    <p>Tailwind is properly configured.</p>
                </div>
            </div>
            <div class="mt-6 grid grid-cols-2 gap-2">
                <div class="bg-red-100 p-3 rounded text-center text-red-700">Red</div>
                <div class="bg-blue-100 p-3 rounded text-center text-blue-700">Blue</div>
                <div class="bg-green-100 p-3 rounded text-center text-green-700">Green</div>
                <div class="bg-yellow-100 p-3 rounded text-center text-yellow-700">Yellow</div>
            </div>
        </div>
    </div>
</body>
</html>
