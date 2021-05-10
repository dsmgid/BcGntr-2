<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            width: 100%;
            margin: 0in .1875in;
            }
        .label{
            width: 3.025in; /* plus .6 inches from padding */
            height: 120px; /* plus .125 inches from padding */
            padding: .125in .3in 0;
            margin-right: .125in; /* the gutter */

            float: left;

            text-align: center;
            overflow: hidden;

            outline: 1px dotted; /* outline doesn't occupy space like border does */
            }
        .page-break  {
            clear: left;
            display:block;
            page-break-after:always;
            }
      </style>
  </head>
  <body>
    <div class="container mt-5">
        @php
            $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
        @endphp
        @foreach ($print as $item)
        <div class="label">
            {{ $item->nama }}
            <br> <img src="data:image/png;base64,{{ base64_encode($generator->getBarcode($item->barcode, $generator::TYPE_UPC_A))  }}" height="74" width="200">
            <br> Rp. {{ number_format($item->harga,2,',','.') }}
            <br>
        </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
			  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			  crossorigin="anonymous"></script>
    @yield('footer')
  </body>
</html>
