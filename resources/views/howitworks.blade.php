<x-app-layout>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>How it Works</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <div class="content text-slate-50">
            <div class="section">
                <div class="image-section">
                    <img src="{{ asset('/img/header logo.png') }}" alt="How it Works" class="w-auto mx-auto">
                </div>
                <div class="text-section">
                    <p class="my-11 text-justify text-3xl font-semibold indent-1">Bagaimana Cara Kerja GIFTOON adalah platform penggalangan dana online yang membantu Anda mengumpulkan dana untuk berbagai kebutuhan, mulai dari bantuan medis, pendidikan, hingga proyek sosial. Dengan GIFTOON, Anda dapat dengan mudah membuat kampanye, membagikannya kepada komunitas Anda, dan mencapai target donasi Anda.</p>
                </div>
                <div class="image-section">
                    <img src="{{ asset('/img/center pic.png') }}" alt="How it Works" class="w-auto mx-auto">
                </div>
            </div>
            <div class="my-6 text-justify font-extrabold text-2xl">Bagaimana Cara Kerja GIFTOON? Inilah yang Harus Anda Ketahui Saat Menggalang Dana:</div>
            <div class="how-columns">
                <div class="column">
                    <h2>1. Membuka Galangan Donasi</h2>
                    <p>Mulailah dengan menekan tombol "Buka Donasi" dan ikuti langkah-langkah berikut:</p>
                    <p1>Isi Informasi dasar dan jelaskan tujuan penggalangan dana Anda dalam 1-3 paragraf. Tambahkan detail kampanye seperti:</p1>
                        <ul>
                            <li>-Siapa atau apa yang Anda galang dana.</li>
                            <li>-Gambar atau video utama yang mewakili kampanye Anda.</li>
                            <li>-Tentukan Target dana dan tetapkan jumlah target donasi yang ingin dicapai. Jangan khawatir, Anda bisa mengubahnya nanti jika diperlukan.</li>
                        </ul>
                </div>
                <div class="column">
                    <h2>2. Bagikan Kampanye Anda</h2>
                    <ul>
                        <li>Sebarkan Link Kampanye: Bagikan link kampanye Anda melalui pesan teks dan email kepada komunitas Anda untuk mulai mendapatkan dukungan.</li>
                        <li>Gunakan Media Sosial: Terus bagikan kampanye Anda di media sosial, cetak poster, atau tulis surat kepada orang-orang yang Anda kenal.</li>
                        <li>Tambah Anggota Tim: Ajak teman atau anggota keluarga yang Anda percayai untuk membantu menyebarkan informasi tentang kampanye Anda.</li>
                    </ul>
                </div>
                <div class="column">
                    <h2>3. Posting Pembaruan dan Ucapkan Terima Kasih kepada Donatur</h2>
                    <ul>
                        <li>Posting Pembaruan: Selama perjalanan penggalangan dana, Anda bisa memposting pembaruan kampanye untuk meningkatkan donasi dan menjaga donatur tetap terinformasi.</li>
                        <li>Ucapan Terima Kasih: Ucapkan terima kasih kepada donatur melalui dashboard kampanye Anda dengan mudah.</li>
                    </ul>
                </div>
                <div class="column">
                    <h2>4. Pengaturan Transfer Bank</h2>
                    <ul>
                        <li>Tambahkan Informasi Bank: Masukkan informasi bank Anda untuk mulai menerima dana (Anda tidak perlu mencapai target donasi untuk mulai menerima uang).</li>
                        <li>Tambahkan Penerima Manfaat: Jika Anda menggalang dana untuk orang lain, tambahkan mereka sebagai penerima manfaat.</li>
                    </ul>
                </div>
            </div>
            <div class="button-container">
                <a href="/create-donation" class="donate-button">Buka Donasi</a>
            </div>
            <div class="font-semibold text-2xl my-3">Mengapa Memilih GIFTOON?</div>
            <div class="contact-info my-2 font-normal ">
                <p class="background">Percayakan Penggalangan Dana Anda pada GIFTOON. Dengan GIFTOON, Anda mendapatkan platform terpercaya dan mudah digunakan untuk menggalang dana untuk berbagai kebutuhan. Kami berkomitmen membantu Anda mencapai tujuan dengan dukungan penuh dari komunitas kami.</p>
                <h3 class="my-2 text-lg">Hubungi Kami Jika Anda memiliki pertanyaan atau memerlukan bantuan, jangan ragu untuk menghubungi tim kami:</h3>
                <ul>
                    <li>Email: support@giftoon.com</li>
                    <li>Telepon: +62 123 456 7890</li>
                    <li>Alamat: Jl. Contoh No. 123, Jakarta, Indonesia</li>
                </ul>
                <h3 class="my-2 text-lg">Ikuti Kami di Media Sosial</h3>
                <p>Tetap terhubung dengan kami untuk mendapatkan update terbaru dan cerita inspiratif di:</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i> GIFTOON</a>
                    <a href="#"><i class="fab fa-twitter"></i> @giftoon_id</a>
                    <a href="#"><i class="fab fa-instagram"></i> @giftoon_id</a>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    </body>
</x-app-layout>