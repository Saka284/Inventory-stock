<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice Product Keluar</title>


</head>

<style>
     #table-data {
        border-collapse: collapse;
        padding: 3px;
    }

    #table-data td, #table-data th {
        border: 1px solid black;
    }

    .title {
        display: flex;
        align-items: center;
    }

    .logo-text {
        margin-left: 10px;
    }

    .logo-container {
        width: 100%;
        max-width: 100px;
        float: left;
    }
</style>

<body>
    <body>
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    <div class="logo-container">
                                        <img src="../public/image_asset/polines.jpg" style="width:100%;">
                                    </div>
                                    <span class="logo-text"><h2>INVOICE PRODUCT KELUAR</h2></span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>


        <table border="0" id="table-data" width="80%">
            <tr>
                <td width="70px">Invoice ID</td>
                <td width="">: {{ $product_keluar->id }}</td>
                <td width="30px">Created</td>
                <td>: {{ $product_keluar->tanggal }}</td>
            </tr>

            <tr>
                <td>Telepon</td>
                <td>: {{ $product_keluar->customer->telepon }}</td>
                <td>Alamat</td>
                <td>: {{ $product_keluar->customer->alamat }}</td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>: {{ $product_keluar->customer->nama }}</td>
                <td>Email</td>
                <td>: {{ $product_keluar->customer->email }}</td>
            </tr>

            <tr>
                <td>Product</td>
                <td >: {{ $product_keluar->product->nama }}</td>
                <td>Quantity</td>
                <td >: {{ $product_keluar->qty }}</td>
            </tr>

        </table>

        {{--<hr  size="2px" color="black" align="left" width="45%">--}}


        <table border="0" width="80%">
            <tr align="right">
                <td>Hormat Kami</td>
            </tr>
        </table>

    <table border="0" width="80%">
        <tr align="right">
            <td><img src="../public/singsaka.png" width="100px" height="100px"></td>
        </tr>

    </table>
        <table border="0" width="80%">
            <tr align="right">
                <td>Saka Wijaya</td>
            </tr>
        </table>
</div>
