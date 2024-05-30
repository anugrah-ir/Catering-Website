@extends('layouts.app')

@section('content')
<nav class="z-2 navbar fixed-top" style="padding-top:75px">
    <div class="container d-flex justify-content-center">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#buffet" style="color:#070952">Buffet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#prasmanan" style="color:#070952">Prasmanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#nasi-kotak" style="color:#070952">Nasi Kotak</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tumpeng" style="color:#070952">Tumpeng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#others" style="color:#070952">Others</a>
            </li>
        </ul>
    </div>
</nav>

<section id="buffet" class="content-section" style="padding-top: 110px; background-color:#DF86A1">
    <div class="container-fluid">
        <h2 class="text-center">Buffet</h2>
        <div class="row justify-content-center">
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="prasmanan" class="content-section" style="padding-top: 110px; background-color:#DF86A1">
    <div class="container-fluid">
        <h2 class="text-center">Prasmanan</h2>
        <div class="row justify-content-center">
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="nasi-kotak" class="content-section" style="padding-top: 110px; background-color:#DF86A1">
    <div class="container-fluid">
        <h2 class="text-center">Nasi Kotak</h2>
        <div class="row justify-content-center">
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="tumpeng" class="content-section" style="padding-top: 110px; background-color:#DF86A1">
    <div class="container-fluid">
        <h2 class="text-center">Tumpeng</h2>
        <div class="row justify-content-center">
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">Buffet 1</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="Buffet 1" style="width: 350px; height: auto; padding:15px">
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi</li>
                                <li>Sayur Gudeg</li>
                                <li>Ayam Bacem</li>
                                <li>Sambel Krecek</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Bacem</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <button class="btn btn-primary inc-btn">-</button>
                                <span class="mx-2 quantity" style="padding-top: 10px">0</span>
                                <button class="btn btn-primary inc-btn">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const quantityElements = document.querySelectorAll('.quantity');
        quantityElements.forEach(quantityElement => {
            const decreaseButton = quantityElement.previousElementSibling;
            const increaseButton = quantityElement.nextElementSibling;

            decreaseButton.addEventListener('click', function () {
                let currentQuantity = parseInt(quantityElement.textContent);
                if (currentQuantity > 0) {
                    quantityElement.textContent = currentQuantity - 1;
                }
            });

            increaseButton.addEventListener('click', function () {
                let currentQuantity = parseInt(quantityElement.textContent);
                quantityElement.textContent = currentQuantity + 1;
            });
        });
    });
</script>

@endsection

