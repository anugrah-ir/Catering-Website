@php
    use Carbon\Carbon;
    $currentDate = Carbon::now()->format('Y-m-d H:i:s');
    $dueDate = Carbon::now()->addDays(3)->format('Y-m-d H:i:s');
@endphp

<div class="container" style="padding: 50px;">
    <style>
        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #5D6975;
            text-decoration: underline;
        }

        body {
            color: #001028;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        header {
            padding: 10px 0;
            margin-bottom: 30px;
        }

        #logo {
            text-align: center;
            margin-bottom: 10px;
        }

        #logo img {
            width: 90px;
        }

        h1 {
            border-top: 1px solid  #5D6975;
            border-bottom: 1px solid  #5D6975;
            color: #5D6975;
            font-size: 2.4em;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 20px 0;
        }

        #project {
            float: left;
        }

        #project span {
            color: #5D6975;
            text-align: right;
            width: 52px;
            margin-right: 10px;
            display: inline-block;
            font-size: 0.8em;
        }

        #company {
            float: right;
            text-align: right;
        }

        #project div,
        #company div {
            white-space: nowrap;        
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table tr:nth-child(2n-1) td {
            background: #F5F5F5;
        }

        table th,
        table td {
            text-align: center;
        }

        table th {
            padding: 5px 20px;
            color: #5D6975;
            border-bottom: 1px solid #C1CED9;
            white-space: nowrap;        
            font-weight: normal;
        }

        table .service,
        table .desc {
            text-align: left;
        }

        table td {
            padding: 20px;
            text-align: right;
        }

        table td.service,
        table td.desc {
            vertical-align: top;
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1.2em;
        }

        table td.grand {
            border-top: 1px solid #5D6975;;
        }

        #notices .notice {
            color: #5D6975;
            font-size: 1.2em;
        }

        footer {
            color: #5D6975;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #C1CED9;
            padding: 8px 0;
            text-align: center;
        }
    </style>

    <header class="clearfix">
        <div id="logo">
            <img src="images/logo.png">
        </div>
        <h1>INVOICE</h1>
        <div id="company" class="clearfix">
            <div>Ny. Ayu Catering</div>
            <div>Jl. Locari No.90 RT.03 RW.01, Sekarpuro,<br /> Kecamatan Pakis, Kabupaten Malang, 65154</div>
            <div>+62 821-9823-7561</div>
            <div><a href="mailto:ny.ayucatering@gmail.com">ny.ayucatering@gmail.com</a></div>
        </div>
        <div id="project">
        @isset($user)
        <div><span>CLIENT</span> {{ $user->name }}</div>
        <div><span>EMAIL</span> <a href="mailto:{{$user->email}}">{{$user->email}}</a></div>
        @else
            <div><span>CLIENT</span></div> 
            <div><span>EMAIL</span>
        @endisset
            <div><span>DATE</span> {{ $currentDate }}</div>
            <div><span>DUE DATE</span> {{ $dueDate }}</div>
        </div>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Menu</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    @php
                        $product = $item->menu;
                    @endphp
                    <tr>
                        <td class="service">{{ $product->name }}</td>
                        <td class="desc">{{ $product->description ?? '-' }}</td>
                        <td class="unit">{{ number_format($product->price, 2) }}</td>
                        <td class="qty">{{ $item->quantity }}</td>
                        <td class="total">{{ number_format($item->total_price, 2) }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4">TOTAL :</td>
                    <td class="total">{{ number_format($cartItems->sum('total_price'), 2) }}</td>
                </tr>
            </tbody>
        </table>
    </main>
    <footer>
        Invoice was created on a computer and is valid without the signature and seal.
    </footer>
</div>
