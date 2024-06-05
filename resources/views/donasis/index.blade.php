<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <title>Donations</title>
    </head>

    <body class="bg-blue-100 text-gray-900">
        <div class="max-w-6xl mx-auto p-6 bg-white shadow-md rounded">
            <header class="flex justify-between items-center bg-gradient-to-r from-purple-500 to-pink-500 p-4 rounded">
                <div class="text-white text-lg font-bold">GIFTOON</div>
                <h1 class="text-white text-2xl font-bold">Donations</h1>
            </header>
            <main class="mt-4 space-y-4">
                @foreach($donasis as $donasi)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover" src="{{ asset('images/' . $donasi->gambar) }}" alt="Donation Image">
                    <div class="p-4">
                        <h2 class="text-xl font-bold mb-2">{{ $donasi->nama_donasi }}</h2>
                        <p class="text-gray-700 mb-4">{{ $donasi->keterangan_donasi }}</p>
                        <p class="font-bold text-right text-gray-700">RP. {{ $donasi->jumlah_uang }}</p>
                        <p class="font-bold text-right text-gray-700">Status: {{ $donasi->selesai ? 'Selesai' : 'Belum Selesai' }}</p>
                    </div>
                    <a href="{{ route('donasis.show', $donasi->id) }}" class="text-blue-500 hover:text-blue-700">Lihat</a>
                </div>
                @endforeach
            </main>
        </div>
    </body>
</x-app-layout>
