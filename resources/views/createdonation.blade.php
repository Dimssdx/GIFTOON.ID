<x-app-layout>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <title>Create Donation</title>
    </head>

    <body class="bg-blue-100 text-gray-900">
        <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded">
            <header class="flex justify-between items-center bg-gradient-to-r from-purple-500 to-pink-500 p-4 rounded">
                <div class="text-white text-lg font-bold">GIFTOON</div>
                <h1 class="text-white text-2xl font-bold">Create Donations</h1>
            </header>
            <main class="mt-4">
                <div class="bg-gray-200 rounded-lg h-48 flex items-center justify-center">
                    <span class="text-gray-500">Image Placeholder</span>
                </div>
                <form class="mt-4">
                    <label class="block text-pink-500 font-bold mb-2" for="title">Judul :</label>
                    <input class="w-full px-4 py-2 mb-4 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded" type="text" id="title" name="title">

                    <label class="block text-pink-500 font-bold mb-2" for="description">Keterangan :</label>
                    <textarea class="w-full px-4 py-2 h-24 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded" id="description" name="description"></textarea>

                    <button class="mt-4 px-6 py-2 bg-blue-500 text-white rounded shadow">Buka Donasi</button>
                </form>
            </main>
        </div>
    </body>

    </html>


</x-app-layout>