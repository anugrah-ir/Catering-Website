@extends('layouts.app')

@section('content')
<section style="background-image: url('images/Banner.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; color: white; padding: 100px 0; text-align: center;">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
            <h1 class="text-center" style="padding: 150px; color:#FFFFFF; font-size: 50px;">“Pilihan Utama Catering: Kualitas <br>Terbaik, Harga Bersahabat”</h1>
            </div>
        </div>
    </div>
</section>

<section style="padding: 25px; background-color:#DF86A1">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row" style="padding-top: 25px; margin: 25px; background-color:#070952;">
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 mb-4">
                                <img src="images/1_Kiri Atas.jpg" class="img-thumbnail img-fluid" alt="Gambar 1">
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-4">
                                <img src="images/2_Tengah Atas.jpg" class="img-thumbnail img-fluid" alt="Gambar 2">
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-4">
                                <img src="images/3_Kanan Atas.jpg" class="img-thumbnail img-fluid" alt="Gambar 3">
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-4">
                                <img src="images/4_Kiri Bawah.jpg" class="img-thumbnail img-fluid" alt="Gambar 4">
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-4">
                                <img src="images/5_Tengah Bawah.jpg" class="img-thumbnail img-fluid" alt="Gambar 5">
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-4">
                                <img src="images/6_Kanan Bawah.jpg" class="img-thumbnail img-fluid" alt="Gambar 6">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4" style="padding-top: 125px; margin: 25 px; background-color: #070952; color: #DF86A1;">
                        <h1 style="font-size: 50px">Kenapa Harus Kami?</h1><br><br>
                        <ul style="font-size: 20px">
                            <li>Bahan baku terbaik untuk kualitas tinggi dan rasa konsisten tanpa mengorbankan harga</li>
                            <li>Tim yang siap melayani dengan ramah dan cepat tanggap</li>
                            <li>Beragam pilihan menu yang disesuaikan dengan selera pelanggan</li>
                            <li>Mengikuti tren kuliner terbaru dan terus berinovasi</li>
                            <li>Pilihan terpercaya untuk berbagai acara dengan eksekusi detail dan profesional</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background-color:#DF86A1; padding: 50px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col"  style="margin-left: 50px; padding: 25px;">
                <div style="color:#070952">
                    <p style="font-size: 20px">Variasi Menu</p>
                    <h3 style="font-size: 40px; font-weight: Bold">Berbagai Menu Ny. Ayu Catering</h3>
                    <p>Ny. Ayu Catering mengedepankan variasi manu, setiap menu telah melalui proses <br>kurasi dan dirancang khusus sehingga dapat teruji kelezatan dan kebersihannya </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div style="display: flex">
                    <div class="rounded card" style="flex: 1; background-color:#070952; color:white; padding: 30px; margin-left: 50px; margin-right: 15px">
                        <img src="images/Bufffet.jpg" class="card-img" alt="Gambar 1" style="width: 100%; height: auto">
                        <div class="card-img-overlay text-center" style="padding-top: 100px">
                            <h5 class="card-title" style="font-size: 35px">Buffet</h5>
                            <p class="card-text" style="font-size: 18px">Menikmati kelezatan <br>beragam hidangan di buffet</p>
                        </div>
                    </div>
                    <div class="rounded card" style="flex: 1; background-color:#070952; color:white; padding: 30px;  margin-left: 15px; margin-right: 15px">
                        <img src="images/Prasmanan.jpg" class="card-img" alt="Gambar 2" style="width: 100%; height: auto">
                        <div class="card-img-overlay text-center" style="padding-top: 100px">
                            <h5 class="card-title" style="font-size: 35px">Prasmanan</h5>
                            <p class="card-text" style="font-size: 18px">Keseruan memilih di prasmanan</p>
                        </div>
                    </div>
                    <div class="rounded card" style="flex: 1; background-color:#070952; color:white; padding: 30px;  margin-left: 15px; margin-right: 15px">
                        <img src="images/Nasi Kotak.jpg" class="card-img" alt="Gambar 3" style="width: 100%; height: auto">
                        <div class="card-img-overlay text-center" style="padding-top: 100px">
                            <h5 class="card-title" style="font-size: 35px">Nasi Kotak</h5>
                            <p class="card-text" style="font-size: 18px">Praktisnya nasi kotak untuk acara</p>
                        </div>
                    </div>
                    <div class="rounded card" style="flex: 1; background-color:#070952; color:white; padding: 30px;  margin-left: 15px; margin-right: 50px">
                        <img src="images/Tumpeng.jpg" class="card-img" alt="Gambar 4" style="width: 100%; height: auto">
                        <div class="card-img-overlay text-center" style="padding-top: 100px">
                            <h5 class="card-title" style="font-size: 35px">Tumpeng</h5>
                            <p class="card-text" style="font-size: 18px">Keanggunan tumpeng sebagai <br>simbol syukur dan kebersamaan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color:#DF86A1; color:#070952">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 style="text-decoration: underline; text-align: center; padding-top: 25px; font-size: 40px; font-weight: Bold">Catering Service</h2>
            </div>
        </div>
        <div class="row text-center" style="padding: 10px; margin: 50px;">
            <div class="col-md-4">
                <h3 style="font-size: 35px;">Wedding Service</h3>
                <p style="font-size: 20px;">Buat hari istimewa Anda lebih <br>berkesan dengan layanan Wedding Service <br>kami yang elegan dan lezat</p>
            </div>
            <div class="col-md-4">
                <h3 style="font-size: 35px;">Daily Catering</h3>
                <p style="font-size: 20px;">Nikmati hidangan lezat setiap hari <br>dengan layanan Daily Catering kami <br>yang praktis dan bergizi</p>
            </div>
            <div class="col-md-4">
                <h3 style="font-size: 35px;">School Catering</h3>
                <p style="font-size: 20px;">Sajikan makanan sehat dan menyenangkan <br>untuk anak-anak dengan School Catering <br>kami yang penuh gizi</p>
            </div>
        </div>
        <div class="row text-center" style="padding: 25px; margin: 50px;">
            <div class="col-md-4">
                <h3 style="font-size: 35px;">Office Catering</h3>
                <p style="font-size: 20px;">Tingkatkan produktivitas tim Anda <br>dengan Office Catering kami yang menyediakan <br>menu lezat dan bervariasi</p>
            </div>
            <div class="col-md-4">
                <h3 style="font-size: 35px;">Various Cakes</h3>
                <p style="font-size: 20px;">Manjakan lidah Anda dengan berbagai <br>pilihan kue lezat dari koleksi Various Cakes <br>kami yang menggoda</p>
            </div>
            <div class="col-md-4">
                <h3 style="font-size: 35px;">Tumpeng</h3>
                <p style="font-size: 20px;">Rayakan momen spesial dengan <br>Tumpeng istimewa kami yang autentik <br>dan penuh cita rasa</p>
            </div>
        </div>
    </div>
</section>

<section style="padding: 25px; background-color:#DF86A1">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div style="padding: 5px; margin: 25px; background-color:#070952; display: flex; justify-content: space-between;">
                    <div style="padding: 50px; background-color: #070952; color: #DF86A1; flex: 1;">
                    <h2>Bagaimana cara memesan Ny. Ayu Catering?</h2>
                    <p>Ny. Ayu Catering dapat dipesan melalui nomor hotline yang tersedia. Anda akan terhubung oleh Advisor kami untuk selanjutnya dapat menentukan jenis acara, pilihan menu, jumlah pax, serta waktu dan tempat acara.</p>

                    <h2>Berapa Jumlah minimum pemesanan?</h2>
                    <p>Jenis nasi kotak minimum pemesanan 20 pax.<br>
                    Untuk pesanan prasmanan minimum 50 pax.<br>
                    Segera konsultasikan dengan Advisor kami melalui nomor Hotline untuk mendapatkan penawaran terbaik.</p>

                    <h2>Berapa harga jasa Ny. Ayu Catering?</h2>
                    <p>Harga bervariasi tergantung pada jumlah pax dan jenis produk (prasmanan/non prasmanan). Dapatkan penawaran terbaik dengan menghubungi nomor Hotline.</p>

                    <h2>Batas waktu pemesanan berapa hari sebelum?</h2>
                    <p>Pemesanan untuk acara jumlah besar adalah H-14 sebelum acara. Kami memerlukan waktu untuk menyiapkan segala kebutuhan untuk acara Anda.</p>

                    <h2>Apakah saya bisa mendapatkan Food Testing?</h2>
                    <p>Ya. Anda bisa mendapatkan Food Testing secara Gratis saat Anda memesan untuk jenis acara rangkaian Pernikahan. Konsultasikan dengan Advisor kami untuk mendapatkan penawaran terbaik.</p>
                    </div>
                    <div class="col-12 col-md-5">
                        <img src="images/QnA.jpg" class="img-fluid"alt="Gambar 1" style="padding: 10px; margin-right: 10px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
