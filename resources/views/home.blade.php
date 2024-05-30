@extends('layouts.app')

@section('content')
<section style="background-image: url('images/Banner.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; color: white; padding: 100px 0; text-align: center;">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
            <h1 class="text-center" style="padding: 150px; color:#FFFFFF">“Pilihan Utama Catering: Kualitas <br>Terbaik, Harga Bersahabat”</h1>
            </div>
        </div>
    </div>
</section>

<section style="padding: 25px; background-color:#DF86A1">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div style="padding: 5px; margin: 25px; background-color:#070952; display: flex;">
                    <div style="flex: 1;">
                        <div style="padding: 5px; margin: 5px;">
                            <img src="images/images.png" class="img-thumbnail" alt="Gambar 1" style="width: 310px; height: auto; margin-right: 10px;">
                            <img src="images/images.png" class="img-thumbnail" alt="Gambar 2" style="width: 310px; height: auto; margin-right: 10px;">
                            <img src="images/images.png" class="img-thumbnail" alt="Gambar 3" style="width: 310px; height: auto; margin-right: 10px;">
                        </div>
                        <div style="padding: 5px; margin: 5px;">
                            <img src="images/images.png" class="img-thumbnail" alt="Gambar 4" style="width: 310px; height: auto; margin-right: 10px;">
                            <img src="images/images.png" class="img-thumbnail" alt="Gambar 5" style="width: 310px; height: auto; margin-right: 10px;">
                            <img src="images/images.png" class="img-thumbnail" alt="Gambar 6" style="width: 310px; height: auto; margin-right: 10px;">
                        </div>
                    </div>
                    <div style="padding: 50px; background-color: #070952; color: white;">
                        <h1>Kenapa Harus Kami?</h1>
                            <ul>
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

<section style="background-color:#DF86A1; padding: 25px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div>
                    <p>Variasi Menu</p>
                    <h3>Berbagai Menu Ny. Ayu Catering</h3>
                    <p>Ny. Ayu Catering mengedepankan variasi manu, setiap menu telah melalui proses <br>kurasi dan dirancang khusus sehingga dapat teruji kelezatan dan kebersihannya </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div style="display: flex">
                    <div class="rounded card" style="flex: 1; background-color:#070952; padding: 30px; margin-left: 50px; margin-right: 15px">
                        <img src="images/images2.png" class="card-img" alt="Gambar 1" style="width: 100%; height: auto">
                        <div class="card-img-overlay text-center">
                            <h5 class="card-title">Nama</h5>
                            <p class="card-text">Penjelasan</p>
                        </div>
                    </div>
                    <div class="rounded card" style="flex: 1; background-color:#070952; padding: 30px;  margin-left: 15px; margin-right: 15px">
                        <img src="images/images2.png" class="card-img" alt="Gambar 2" style="width: 100%; height: auto">
                        <div class="card-img-overlay text-center">
                            <h5 class="card-title">Nama</h5>
                            <p class="card-text">Penjelasan</p>
                        </div>
                    </div>
                    <div class="rounded card" style="flex: 1; background-color:#070952; padding: 30px;  margin-left: 15px; margin-right: 15px">
                        <img src="images/images2.png" class="card-img" alt="Gambar 3" style="width: 100%; height: auto">
                        <div class="card-img-overlay text-center">
                            <h5 class="card-title">Nama</h5>
                            <p class="card-text">Penjelasan</p>
                        </div>
                    </div>
                    <div class="rounded card" style="flex: 1; background-color:#070952; padding: 30px;  margin-left: 15px; margin-right: 50px">
                        <img src="images/images2.png" class="card-img" alt="Gambar 4" style="width: 100%; height: auto">
                        <div class="card-img-overlay text-center">
                            <h5 class="card-title">Nama</h5>
                            <p class="card-text">Penjelasan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color:#DF86A1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 style="text-decoration: underline; text-align: center; margin-bottom: 30px;">Catering Service</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4" style="margin-bottom: 20px;">
                <h5>Wedding Service</h5>
                <p>Buat hari istimewa Anda lebih berkesan dengan layanan Wedding Service kami yang elegan dan lezat</p>
            </div>
            <div class="col-md-4" style="margin-bottom: 20px;">
                <h5>Daily Catering</h5>
                <p>Nikmati hidangan lezat setiap hari dengan layanan Daily Catering kami yang praktis dan bergizi</p>
            </div>
            <div class="col-md-4" style="margin-bottom: 20px;">
                <h5>School Catering</h5>
                <p>Sajikan makanan sehat dan menyenangkan untuk anak-anak dengan School Catering kami yang penuh gizi</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4" style="margin-bottom: 20px;">
                <h5>Office Catering</h5>
                <p>Tingkatkan produktivitas tim Anda dengan Office Catering kami yang menyediakan menu lezat dan bervariasi</p>
            </div>
            <div class="col-md-4" style="margin-bottom: 20px;">
                <h5>Various Cakes</h5>
                <p>Manjakan lidah Anda dengan berbagai pilihan kue lezat dari koleksi Various Cakes kami yang menggoda</p>
            </div>
            <div class="col-md-4" style="margin-bottom: 20px;">
                <h5>Tumpeng</h5>
                <p>Rayakan momen spesial dengan Tumpeng istimewa kami yang autentik dan penuh cita rasa</p>
            </div>
        </div>
    </div>
</section>

<section style="padding: 25px; background-color:#DF86A1">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div style="padding: 5px; margin: 25px; background-color:#070952; display: flex; justify-content: space-between;">
                    <div style="padding: 50px; background-color: #070952; color: white; flex: 1;">
                        <h1>Kenapa Harus Kami?</h1>
                        <ul>
                            <li>Bahan baku terbaik untuk kualitas tinggi dan rasa konsisten tanpa mengorbankan harga</li>
                            <li>Tim yang siap melayani dengan ramah dan cepat tanggap</li>
                            <li>Beragam pilihan menu yang disesuaikan dengan selera pelanggan</li>
                            <li>Mengikuti tren kuliner terbaru dan terus berinovasi</li>
                            <li>Pilihan terpercaya untuk berbagai acara dengan eksekusi detail dan profesional</li>
                        </ul>
                    </div>
                    <div style="flex-shrink: 0;">
                        <img src="images/images.png" alt="Gambar 1" style="width: 750px; height: auto;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
