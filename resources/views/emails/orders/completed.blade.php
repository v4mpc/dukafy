<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

<style>
    
:root { --blue:#007bff; --indigo:#6610f2; --purple:#6f42c1; --pink:#e83e8c; --red:#dc3545; --orange:#fd7e14; --yellow:#ffc107; --green:#28a745; --teal:#20c997; --cyan:#17a2b8; --white:#fff; --gray:#6c757d; --gray-dark:#343a40; --primary:#007bff; --secondary:#6c757d; --success:#28a745; --info:#17a2b8; --warning:#ffc107; --danger:#dc3545; --light:#f8f9fa; --dark:#343a40; --breakpoint-xs:0; --breakpoint-sm:576px; --breakpoint-md:768px; --breakpoint-lg:992px; --breakpoint-xl:1200px; --font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol"; --font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace; }
*, ::after, ::before { box-sizing: border-box; }
html { font-family: sans-serif; line-height: 1.15; text-size-adjust: 100%; -webkit-tap-highlight-color: transparent; }
article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section { display: block; }
body { margin: 0px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"; font-size: 1rem; font-weight: 400; line-height: 1.5; color: rgb(33, 37, 41); text-align: left; background-color: rgb(255, 255, 255); }
[tabindex="-1"]:focus { outline: 0px !important; }
hr { box-sizing: content-box; height: 0px; overflow: visible; }
h1, h2, h3, h4, h5, h6 { margin-top: 0px; margin-bottom: 0.5rem; }
p { margin-top: 0px; margin-bottom: 1rem; }
abbr[data-original-title], abbr[title] { text-decoration: underline dotted; cursor: help; border-bottom: 0px; }
address { margin-bottom: 1rem; font-style: normal; line-height: inherit; }
dl, ol, ul { margin-top: 0px; margin-bottom: 1rem; }
ol ol, ol ul, ul ol, ul ul { margin-bottom: 0px; }
dt { font-weight: 700; }
dd { margin-bottom: 0.5rem; margin-left: 0px; }
blockquote { margin: 0px 0px 1rem; }
dfn { font-style: italic; }
b, strong { font-weight: bolder; }
small { font-size: 80%; }
sub, sup { position: relative; font-size: 75%; line-height: 0; vertical-align: baseline; }
sub { bottom: -0.25em; }
sup { top: -0.5em; }
a { color: rgb(0, 123, 255); text-decoration: none; background-color: transparent; }
a:hover { color: rgb(0, 86, 179); text-decoration: underline; }
a:not([href]):not([tabindex]) { color: inherit; text-decoration: none; }
a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover { color: inherit; text-decoration: none; }
a:not([href]):not([tabindex]):focus { outline: 0px; }
code, kbd, pre, samp { font-family: monospace, monospace; font-size: 1em; }
pre { margin-top: 0px; margin-bottom: 1rem; overflow: auto; }
figure { margin: 0px 0px 1rem; }
img { vertical-align: middle; border-style: none; }
svg:not(:root) { overflow: hidden; }
table { border-collapse: collapse; }
caption { padding-top: 0.75rem; padding-bottom: 0.75rem; color: rgb(108, 117, 125); text-align: left; caption-side: bottom; }
th { text-align: inherit; }
label { display: inline-block; margin-bottom: 0.5rem; }
button { border-radius: 0px; }
button:focus { outline: -webkit-focus-ring-color auto 5px; }
button, input, optgroup, select, textarea { margin: 0px; font-family: inherit; font-size: inherit; line-height: inherit; }
button, input { overflow: visible; }
button, select { text-transform: none; }
[type="reset"], [type="submit"], button, html [type="button"] { -webkit-appearance: button; }
input[type="checkbox"], input[type="radio"] { box-sizing: border-box; padding: 0px; }
input[type="date"], input[type="datetime-local"], input[type="month"], input[type="time"] { -webkit-appearance: listbox; }
textarea { overflow: auto; resize: vertical; }
fieldset { min-width: 0px; padding: 0px; margin: 0px; border: 0px; }
legend { display: block; width: 100%; max-width: 100%; padding: 0px; margin-bottom: 0.5rem; font-size: 1.5rem; line-height: inherit; color: inherit; white-space: normal; }
progress { vertical-align: baseline; }
[type="number"]::-webkit-inner-spin-button, [type="number"]::-webkit-outer-spin-button { height: auto; }
[type="search"] { outline-offset: -2px; -webkit-appearance: none; }
[type="search"]::-webkit-search-cancel-button, [type="search"]::-webkit-search-decoration { -webkit-appearance: none; }
::-webkit-file-upload-button { font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; -webkit-appearance: button; }
output { display: inline-block; }
summary { display: list-item; cursor: pointer; }
template { display: none; }
[hidden] { display: none !important; }
hr { margin-top: 1rem; margin-bottom: 1rem; border-width: 1px 0px 0px; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; border-top-style: solid; border-top-color: rgba(0, 0, 0, 0.1); }
code, kbd, pre, samp { font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }
code { font-size: 87.5%; color: rgb(232, 62, 140); word-break: break-word; }
a > code { color: inherit; }
kbd { padding: 0.2rem 0.4rem; font-size: 87.5%; color: rgb(255, 255, 255); background-color: rgb(33, 37, 41); border-radius: 0.2rem; }
kbd kbd { padding: 0px; font-size: 100%; font-weight: 700; }
pre { display: block; font-size: 87.5%; color: rgb(33, 37, 41); }
pre code { font-size: inherit; color: inherit; word-break: normal; }
.row { display: flex; flex-wrap: wrap; margin-right: -15px; margin-left: -15px; }
.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto { position: relative; width: 100%; min-height: 1px; padding-right: 15px; padding-left: 15px; }
.table { width: 100%; max-width: 100%; margin-bottom: 1rem; background-color: transparent; }
.table td, .table th { padding: 0.75rem; vertical-align: top; border-top: 1px solid rgb(222, 226, 230); }
.table thead th { vertical-align: bottom; border-bottom: 2px solid rgb(222, 226, 230); }
.table tbody + tbody { border-top: 2px solid rgb(222, 226, 230); }
.table .table { background-color: rgb(255, 255, 255); }
.table .thead-dark th { color: rgb(255, 255, 255); background-color: rgb(33, 37, 41); border-color: rgb(50, 56, 62); }
.table .thead-light th { color: rgb(73, 80, 87); background-color: rgb(233, 236, 239); border-color: rgb(222, 226, 230); }
.card { position: relative; display: flex; -webkit-box-orient: vertical; -webkit-box-direction: normal; flex-direction: column; min-width: 0px; word-wrap: break-word; background-color: rgb(255, 255, 255); background-clip: border-box; border: 1px solid rgba(0, 0, 0, 0.125); border-radius: 0.25rem; }
.card > hr { margin-right: 0px; margin-left: 0px; }
.card > .list-group:first-child .list-group-item:first-child { border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; }
.card > .list-group:last-child .list-group-item:last-child { border-bottom-right-radius: 0.25rem; border-bottom-left-radius: 0.25rem; }
.card-body { -webkit-box-flex: 1; flex: 1 1 auto; padding: 1.25rem; }
.card-header { padding: 0.75rem 1.25rem; margin-bottom: 0px; background-color: rgba(0, 0, 0, 0.03); border-bottom: 1px solid rgba(0, 0, 0, 0.125); }
.card-header:first-child { border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0px 0px; }
.card-header + .list-group .list-group-item:first-child { border-top: 0px; }
.card-deck .card { margin-bottom: 15px; }
.card-group > .card { margin-bottom: 15px; }
.card-columns .card { margin-bottom: 0.75rem; }
.mr-auto, .mx-auto { margin-right: auto !important; }
.ml-auto, .mx-auto { margin-left: auto !important; }
.text-right { text-align: right !important; }
.text-center { text-align: center !important; }
.text-white { color: rgb(255, 255, 255) !important; }
body { background: rgb(226, 225, 224); margin: 5px; }
.card { margin: 0px auto 10px; float: none; }
</style>

    <style>
        body {
            background: #e2e1e0;
            margin: 5px 5px 5px 5px;
        }





        .bold {
            font-family: Helvetica;
            font-weight: bold;
        }




        .card {
            margin: 0 auto;
            /* Added */
            float: none;
            /* Added */
            margin-bottom: 10px;
            /* Added */
        }
    </style>
</head>

<body>


    <div class="card mx-auto" style="width:550px">
        <div class="card-header text-white text-center" style="background:{{getColorCode($settings)}}">
            Order Summary
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="invoice-title">

                        <h3 class="pull-right">Order # {{$order->id}}</h3>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <address>
                                        <strong>Billed To:</strong><br>
                                {{$order->customer->first_name}} {{$order->customer->last_name}}<br>
                                {{$order->customer->phone}}<br>
                                {{$order->customer->email}}<br>
                                {{$order->customer->address}}
                                        </address>
                        </div>
                        <div class="col-sm-6 text-right">
                            <address>
                                        <strong>Shipping To:</strong><br>
                                        {{$order->customer->first_name}}<br>
                                        {{$order->customer->phone}}<br>
                                        {{$order->customer->email}}<br>
                                        {{$order->customer->address}}
                                        </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <address>
                                            <strong>Payment Method:</strong><br>
                                           Cash On Delivery<br>
                                            
                                        </address>
                        </div>
                        <div class="col-sm-6 text-right">
                            <address>
                                            <strong>Order Date:</strong><br>
                                {{$order->created_at->toFormattedDateString()}}<br><br>
                                        </address>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">

                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td><strong>Item</strong></td>
                                <td class="text-center"><strong>Unit Price(TZS)</strong></td>
                                <td class="text-center"><strong>Quantity</strong></td>
                                <td class="text-right"><strong>Total(TZS)</strong></td>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($order->products as $product)


                            <tr>
                                <td>{{$product->name}}</td>
                                <td class="text-center">{{number_format($product->price)}}</td>
                                <td class="text-center">{{$product->pivot->quantity}}</td>
                                <td class="text-right">{{number_format($product->pivot->quantity*$product->price)}}</td>
                            </tr>

                            @endforeach
                            <tr>
                                <td class="no-line"></td>
                                <td class="no-line"></td>
                                <td class="no-line text-center"><strong>Grand Total</strong></td>
                                <td class="no-line text-right">{{number_format($order->totalCost())}} TZS</td>
                            </tr>
                        </tbody>
                    </table>



                </div>
            </div>

            @if ($order->customer->comment)
            <div class="row">
                <div class="col-sm-12">
                    <address>
                            <strong>Comment:</strong><br>
                        <p><em>{{$order->customer->comment}}</em></p>
                            </address>
                </div>

            </div>
            @endif




        </div>

    </div>

</body>

</html>