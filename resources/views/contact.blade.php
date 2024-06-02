@extends('layouts.app')

@section('content')

<section style="padding: 100px; background-color:#DF86A1;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-center">
                <h2 style="color: #070952;">Lokasi Kami</h2>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d246.95621335272298!2d112.67274443416129!3d-7.967976910916713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6299d3909895f%3A0x62e2478a835c464b!2sIkan%20Pari%20Pedas%20Jingkrak!5e0!3m2!1sen!2sid!4v1716221586323!5m2!1sen!2sid" 
                    width="100%" 
                    height="450" 
                    style="border:0; margin-top: 20px;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <p style="color: #070952; margin-top: 20px;">Jalan Locari No.90 RT03 RW01 Sekarpuro<br>Kecamatan Pakis Kabupaten Malang 65154</p>
            </div>
            <div class="col-md-6 text-center d-flex flex-column align-items-center justify-content-center">
                <img src="images/logo.png" alt="Ny. Ayu Catering" style="max-width: 250px; border-radius: 50%;">
                <h2 style="color: #070952; margin-top: 20px;">Ny. Ayu Catering</h2>
                <p style="color: #070952;">+62 821-9823-7561</p>
                <p style="color: #070952;">Professional Service</p>
                <a href="https://wa.me/6282198237561" class="btn btn-success" style="margin-top: 20px;">Hubungi WhatsApp</a>
            </div>
        </div>
    </div>
</section>

@endsection