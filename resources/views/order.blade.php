@extends('layouts.app')

@section('content')
<nav class="z-2 navbar fixed-top" style="padding-top:75px; background-color:#020873">
    <div class="container d-flex justify-content-center">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#buffet" style="color:#DF6589">Buffet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#prasmanan" style="color:#DF6589">Prasmanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#nasi-kotak" style="color:#DF6589">Nasi Kotak</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tumpeng" style="color:#DF6589">Tumpeng</a>
            </li>
        </ul>
    </div>
</nav>

<section id="buffet" class="content-section" style="padding-top: 125px; background-color:#DF86A1">
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
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>
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
                                <li>Nasi Liwet</li>
                                <li>Sayur Manisa</li>
                                <li>Opor Ayam</li>
                                <li>Terik Tahu</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Telor Areh</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>                            
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
                                <li>Nasi Putih</li>
                                <li>Sayur Asem</li>
                                <li>Empal Gepuk/Ayam</li>
                                <li>Kremes</li>
                                <li>Dadar Jagung</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Ikan Asin</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">45k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>                            
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
                                <li>Rawon/Soto</li>
                                <li>Telor</li>
                                <li>Tempe Mendoan</li>
                                <li>Masi Putih/Lontong</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">45k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="prasmanan" class="content-section" style="padding-top: 125px; background-color:#DF86A1">
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
                                <li>Sub Ayam</li>
                                <li>Capcay</li>
                                <li>Ayam Saus Inggris</li>
                                <li>Nasi Goreng Hongkong</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nugget</li>
                                <li>Nasi Putih</li>
                                <li>Es Pelangi</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">50k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>
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
                                <li>Sup Merah</li>
                                <li>Ayam Goreng</li>
                                <li>Tumis Jamur Kuping</li>
                                <li>Telor</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Nasi Goreng</li>
                                <li>Bakmie Goreng</li>
                                <li>Acar</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">50k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>
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
                                <li>Nasi Putih</li>
                                <li>Nasi Goreng</li>
                                <li>Soup Kimlo</li>
                                <li>Daging Sapi Teriyaki</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Bihun Goreng</li>
                                <li>Tumis Jagung</li>
                                <li>Puding</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">65k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>
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
                                <li>Nasi Putih</li>
                                <li>Sup Sehat</li>
                                <li>Ayam Tahu Jepang</li>
                                <li>Udang Krispi</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Babykol Ayam Jamur</li>
                                <li>Bakmie Goreng</li>
                                <li>Es Dawet</li>
                                <li>Air Mineral</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">65k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="nasi-kotak" class="content-section" style="padding-top: 125px; background-color:#DF86A1">
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
                                <li>Nasi Putih</li>
                                <li>Sambel Goreng</li>
                                <li>Kentang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Mie</li>
                                <li>Acar</li>
                                <li>Ayam Bakar</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">18k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>
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
                                <li>Nasi Kuning</li>
                                <li>Kering Tempe</li>
                                <li>Sambel Goreng Kentang</li>
                                <li>Telor</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Mie</li>
                                <li>Acar</li>
                                <li>Ayam Goreng</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">20k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>
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
                                <li>Nasi Putih</li>
                                <li>Krengsengan</li>
                                <li>Bali Telor</li>
                                <li>Tumis Buncis</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Gorengan</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">28k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>
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
                                <li>Nasi Putih</li>
                                <li>Sayur Asem</li>
                                <li>Ayam Goreng</li>
                                <li>Tongkol Balado</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Tempe Mendoan</li>
                                <li>Sambel</li>
                                <li>Kerupuk</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">25k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="tumpeng" class="content-section" style="padding-top: 125px; background-color:#DF86A1">
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
                                <li>Nasi Putih</li>
                                <li>Sambel Goreng Kentang</li>
                                <li>Mie</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Acar</li>
                                <li>Ayam Bakar</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">20k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>
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
                                <li>Nasi Kuning</li>
                                <li>Kering Tempe</li>
                                <li>Sambel Goreng Kentang</li>
                                <li>Telor</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Mie</li>
                                <li>Acar</li>
                                <li>Ayam Goreng</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">25k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>
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
                                <li>Nasi Putih</li>
                                <li>Urap Sayur</li>
                                <li>Tempe Bacem</li>
                                <li>Telor Pindang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Ayam Bumbu</li>
                                <li>Sayur Lodeh</li>
                                <li>Terik Tahu</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">30k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>                            </div>
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
                                <li>Nasi Putih/Kuning</li>
                                <li>Ayam Goreng/Crispy</li>
                                <li>Sambel Goreng Kentang</li>
                            </ul>
                        </div>
                        <div class="col-md-3" style="padding-top:25px">
                            <ul>
                                <li>Sate Kambing</li>
                                <li>Kering Tempe</li>
                                <li>Mie</li>
                            </ul>
                        </div>
                        <div class="col-md-3 d-flex flex-column align-items-end" style="padding-top:25px">
                            <div><button type="button" class="btn btn-primary custom-btn rounded-pill">35k/Pak</button></div>
                            <div class="d-flex align-items-center" style="padding:25px">
                                <div class="cart-form" style="margin-right: 30px">
                                    <form action="{{ route('add.to.cart') }}" method="post" class="box secondary" id="form">
                                        @csrf
                                        <input type="hidden" name="productId" value="{{ $item->id }}">
                                        <input type="hidden" name="productName" value="{{ $item->name }}">
                                        <input type="hidden" name="productPrice" value="{{ $item->price }}">
                                        <label for="quantity" style="color: #DF6589;">Qty:</label>
                                        <input type="number" name="quantity" id="quantity" min="0" value="0" class="input-box" style="width: 50px; border-color: #DF6589;">
                                        <button class="btn btn-primary" type="submit" style="border-color: #DF6589; background-color: transparent;"><i class="bi bi-cart-plus" style="color: #DF6589;"></i></button>
                                    </form>
                                </div>                            </div>
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
    function addToCart(productId) {
        const quantity = document.querySelector('.cart-input').value;

        fetch('{{ route('add.to.cart') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                productId: productId,
                quantity: quantity
            })
        }).then(response => response.json())
          .then(data => {
              if (data.success) {
                  alert('Item berhasil ditambahkan ke keranjang!');
              }
          });
    }
</script>

@endsection