<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <title>Create Donations</title>
        <script>
            function previewImage() {
                const image = document.querySelector('#image');
                const imgPreview = document.querySelector('.img-preview');

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);

                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                };
            }
        </script>
    </head>

    <body class="bg-blue-100 text-gray-900">
        <div class="max-w-6xl mx-auto p-6 bg-white shadow-md rounded">
            <header class="flex justify-between items-center bg-gradient-to-r from-purple-500 to-pink-500 p-4 rounded">
                <div class="text-white text-lg font-bold">GIFTOON</div>
                <h1 class="text-white text-2xl font-bold">Create Donations</h1>
            </header>
            <main class="mt-4">
                <form action="{{ route('donations.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700">Upload Image:</label>
                        <img class="img-preview mb-2 w-full h-48 object-cover" alt="Image Preview">
                        <input type="file" name="image" id="image" class="w-full p-2 border border-gray-300 rounded" onchange="previewImage()" required>
                    </div>
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700">Judul:</label>
                        <input type="text" name="title" id="title" class="w-full p-2 border border-gray-300 rounded" required>
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700">Keterangan:</label>
                        <textarea name="description" id="description" class="w-full p-2 border border-gray-300 rounded" required></textarea>
                    </div>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Buka Donasi</button>
                </form>
            </main>
        </div>
    </body>
</x-app-layout>
