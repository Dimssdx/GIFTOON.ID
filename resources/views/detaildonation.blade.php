<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <title>Detail Donasi</title>
    </head>

    <body class="bg-blue-100 text-gray-900">
        <div class="max-w-6xl mx-auto p-6 bg-white shadow-md rounded">
            <header class="flex justify-between items-center bg-gradient-to-r from-purple-500 to-pink-500 p-4 rounded">
                <div class="text-white text-lg font-bold">GIFTOON</div>
                <h1 class="text-white text-2xl font-bold">Make a Donation</h1>
            </header>
            <main class="mt-4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover" src="{{ asset('images/' . $donasi->gambar) }}" alt="Donation Image">
                    <div class="p-4">
                        <h2 class="text-xl font-bold mb-2">Judul: {{ $donasi->nama_donasi }}</h2>
                        <p class="text-gray-700 mb-4">Keterangan: {{ $donasi->keterangan_donasi }}</p>
                        <p class="text-gray-700 mb-4">Uang Terkumpul: Rp {{ $donasi->jumlah_uang }}</p>
                        <form action="{{ route('donasis.donate', $donasi->id) }}" method="POST">
                            @csrf
                            <label for="nominal" class="block text-gray-700">Isi Nominal:</label>
                            <input type="number" name="nominal" id="nominal" class="w-full p-2 border border-gray-300 rounded mb-4" required>
                            <button type="submit" class="bg-gradient-to-r from-purple-500 to-pink-500 text-white py-2 px-4 rounded">Berikan Donasi</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </body>
</x-app-layout>
