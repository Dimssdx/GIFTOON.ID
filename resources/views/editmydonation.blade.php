<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <title>Edit My Donation</title>
    </head>

    <body class="bg-blue-100 text-gray-900">
        <div class="max-w-6xl mx-auto p-6 bg-white shadow-md rounded">
            <header class="flex justify-between items-center bg-gradient-to-r from-purple-500 to-pink-500 p-4 rounded">
                <div class="text-white text-lg font-bold">GIFTOON</div>
                <h1 class="text-white text-2xl font-bold">Claim Donation</h1>
            </header>
            <main class="mt-4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img class="w-full h-48 object-cover" src="{{ asset('images/' . $donasi->gambar) }}" alt="Donation Image">
                    <div class="p-4">
                        <h2 class="text-xl font-bold mb-2">Judul: {{ $donasi->nama_donasi }}</h2>
                        <p class="text-gray-700 mb-4">Keterangan: {{ $donasi->keterangan_donasi }}</p>
                        <p class="text-gray-700 mb-4">Uang Terkumpul: Rp {{ $donasi->jumlah_uang }}</p>
                        <form action="{{ route('donasis.update', $donasi->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" name="status" value="selesai" class="bg-gradient-to-r from-purple-500 to-pink-500 text-white py-2 px-4 rounded">Akhiri Donasi</button>
                            <button type="submit" name="delete" value="true" class="bg-gradient-to-r from-purple-500 to-pink-500 text-white py-2 px-4 rounded">Tarik Dana dan Tutup Donasi</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </body>
</x-app-layout>
