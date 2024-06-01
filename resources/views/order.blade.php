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
                @php
                    $item = App\Models\Menu::find(1);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                @php
                    $item = App\Models\Menu::find(2);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                @php
                    $item = App\Models\Menu::find(3);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                @php
                    $item = App\Models\Menu::find(4);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
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
                @php
                    $item = App\Models\Menu::find(5);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                @php
                    $item = App\Models\Menu::find(6);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                @php
                    $item = App\Models\Menu::find(7);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                @php
                    $item = App\Models\Menu::find(8);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
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
                @php
                    $item = App\Models\Menu::find(9);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                @php
                    $item = App\Models\Menu::find(10);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                @php
                    $item = App\Models\Menu::find(11);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                @php
                    $item = App\Models\Menu::find(12);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
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
                @php
                    $item = App\Models\Menu::find(13);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                @php
                    $item = App\Models\Menu::find(14);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                @php
                    $item = App\Models\Menu::find(15);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10" style="padding: 5px; margin: 25px; background-color:#070952;">
                @php
                    $item = App\Models\Menu::find(16);
                @endphp
                <div style="padding-top: 5px; margin: 15px; color:#DF6589">
                    <h4 style="margin-left: 15px">{{ $item->name }}</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/images3.png" class="img-fluid" alt="{{ $item->name }}" style="width: 350px; height: auto; padding:15px">
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
                                <button class="btn btn-primary inc-btn" data-product-id="{{ $item->id }}" data-product-name="{{ $item->name }}" data-product-price="{{ $item->price }}">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid" style="padding: 50px; background-color:#DF86A1">
    <div class="row">
        <div class="col-md-12 text-end">
            @auth <!-- Periksa apakah pengguna sudah login -->
                <a href="/keranjang" class="btn btn-primary rounded-pill" style="margin-right: 100px">Periksa Keranjang</a>
            @else
                <a href="/login" class="btn btn-primary rounded-pill" style="margin-right: 100px">Login untuk Periksa Keranjang</a>
            @endauth
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Bagian untuk menangani tombol tambah dan kurangi
        const quantityElements = document.querySelectorAll('.quantity');
        quantityElements.forEach(quantityElement => {
            const increaseButton = quantityElement.nextElementSibling;
            const decreaseButton = increaseButton.previousElementSibling; // Tambahkan baris ini untuk memilih tombol pengurangan

            increaseButton.addEventListener('click', function () {
                let currentQuantity = parseInt(quantityElement.textContent) + 1;
                quantityElement.textContent = currentQuantity;
                
                const productId = this.getAttribute('data-product-id');
                const productName = this.getAttribute('data-product-name');
                const productPrice = this.getAttribute('data-product-price');
                updateCart(productId, productName, productPrice, currentQuantity);
            });

            // decreaseButton.addEventListener('click', function () {
            //     let currentQuantity = parseInt(quantityElement.textContent) - 1;
            //     if (currentQuantity >= 0) {
            //         quantityElement.textContent = currentQuantity;
                    
            //         const productId = this.getAttribute('data-product-id');
            //         const productName = this.getAttribute('data-product-name');
            //         const productPrice = this.getAttribute('data-product-price');
            //         updateCart(productId, productName, productPrice, currentQuantity);
            //     } else {
            //         // Jika currentQuantity < 0, atur nilainya menjadi 0
            //         currentQuantity = 0;
            //         quantityElement.textContent = currentQuantity;
            //     }
            // });
        });

        function updateCart(productId, productName, productPrice, quantity) {
            fetch('{{ route('update.cart') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    productId: productId,
                    productName: productName,
                    productPrice: productPrice,
                    quantity: quantity
                })
            }).then(response => response.json())
              .then(data => {
                  if (data.success) {
                      console.log('Item added to cart');
                  }
              });
        }
    });
</script>

@endsection