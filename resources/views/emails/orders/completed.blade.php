<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="{{asset('initial_screen/css/bootstrap.min.css')}}" rel="stylesheet" />

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
        <div class="card-header text-white text-center" style="background:{{$colour_code}}">
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
                                        {{$order->customer->first_name}} {{$order->customer->last_name}}<br>
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