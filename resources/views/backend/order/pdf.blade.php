<!DOCTYPE html>
<html>
<head>
  <title>Order @if($order)- {{$order->order_number}} @endif</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Poppins', sans-serif;">

@if($order)
<style type="text/css">
  :root {
    --primary-color: #4f6df5;
    --secondary-color: #6c757d;
    --accent-color: #10b981;
    --light-bg: #f8f9fa;
    --border-color: #e9ecef;
  }

  body {
    color: #333;
    line-height: 1.6;
    background-color: #fff;
  }

  .invoice-header {
    background: linear-gradient(135deg, var(--primary-color) 0%, #647dee 100%);
    padding: 20px 30px;
    color: white;
    border-radius: 8px 8px 0 0;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  }

  .site-logo {
    margin-top: 10px;
  }

  .site-logo img {
    height: 50px;
  }

  .invoice-right-top h3 {
    margin-top: 15px;
    color: white;
    font-size: 28px;
    font-weight: 600;
  }

  .invoice-left-top {
    border-left: 4px solid var(--primary-color);
    padding-left: 20px;
    padding-top: 20px;
    margin-top: 30px;
  }

  .invoice-left-top h6 {
    color: var(--secondary-color);
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 15px;
  }

  .invoice-left-top h3 {
    color: var(--primary-color);
    font-weight: 600;
    margin-bottom: 15px;
  }

  .address p {
    margin: 0;
    line-height: 1.8;
    font-size: 14px;
    color: var(--secondary-color);
  }

  .address p strong {
    color: #495057;
    font-weight: 500;
  }

  thead {
    background: var(--primary-color);
    color: white;
  }

  .table th {
    font-weight: 500;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 0.5px;
  }

  .table td {
    vertical-align: middle;
  }

  .authority h5 {
    color: var(--primary-color);
    font-weight: 500;
  }

  .thanks h4 {
    color: var(--accent-color);
    font-size: 22px;
    font-weight: 500;
    margin-top: 30px;
  }

  .site-address h4 {
    color: white;
    font-weight: 600;
    margin-bottom: 10px;
  }

  .site-address p {
    line-height: 1.6;
    margin-bottom: 5px;
    font-size: 14px;
    opacity: 0.9;
  }

  .site-address a {
    color: white;
    text-decoration: none;
  }

  .table-bordered {
    border: 1px solid var(--border-color);
    border-radius: 8px;
    overflow: hidden;
  }

  .table-header {
    padding: 12px 20px;
    background-color: var(--light-bg);
    border-bottom: 1px solid var(--border-color);
    font-weight: 500;
    color: var(--primary-color);
    font-size: 16px;
  }

  .table tfoot th {
    background-color: var(--light-bg);
    font-weight: 500;
  }

  .total-row {
    font-weight: 600;
    color: var(--primary-color);
  }

  .invoice-description {
    padding: 0 30px;
  }

  .order_details {
    margin-top: 30px;
  }

  .authority {
    margin-top: 50px;
  }

  .authority p {
    color: var(--secondary-color);
    margin-bottom: 5px;
  }

  .status-badge {
    display: inline-block;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;
  }

  .status-processing {
    background-color: #fff3cd;
    color: #856404;
  }

  .status-completed {
    background-color: #d4edda;
    color: #155724;
  }

  .status-pending {
    background-color: #cce5ff;
    color: #004085;
  }

  .payment-method {
    display: flex;
    align-items: center;
    margin-top: 10px;
  }

  .payment-method i {
    margin-right: 10px;
    font-size: 20px;
    color: var(--primary-color);
  }
</style>

<div class="container-fluid p-0">
  <div class="invoice-header">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="float-left site-logo">
          <img src="{{asset('backend/img/logo.png')}}" alt="Company Logo">
        </div>
      </div>
      <div class="col-md-6">
        <div class="float-right site-address text-right">
          <h4>{{env('APP_NAME')}}</h4>
          <p>{{env('APP_ADDRESS')}}</p>
          <p>Phone: <a href="tel:{{env('APP_PHONE')}}">{{env('APP_PHONE')}}</a></p>
          <p>Email: <a href="mailto:{{env('APP_EMAIL')}}">{{env('APP_EMAIL')}}</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="invoice-description">
    <div class="row">
      <div class="col-md-7">
        <div class="invoice-left-top">
          <h6>Invoice to</h6>
          <h3>{{$order->first_name}} {{$order->last_name}}</h3>
          <div class="address">
            <p>
              <strong>Country: </strong>
              {{$order->country}}
            </p>
            <p>
              <strong>Address: </strong>
              {{ $order->address1 }} OR {{ $order->address2}}
            </p>
            <p><strong>Phone:</strong> {{ $order->phone }}</p>
            <p><strong>Email:</strong> {{ $order->email }}</p>

            <div class="payment-method mt-3">
              <i class="fas fa-credit-card"></i>
              <span><strong>Payment Method:</strong> {{ strtoupper($order->payment_method) }}</span>
            </div>

            <div class="mt-2">
              <span class="status-badge status-{{ strtolower($order->condition) }}">
                {{ ucfirst($order->condition) }}
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="invoice-right-top text-right">
          <h3>Invoice #{{$order->order_number}}</h3>
          <p class="mb-1"><strong>Date:</strong> {{ $order->created_at->format('F d, Y') }}</p>
          <p><strong>Due Date:</strong> {{ $order->created_at->addDays(7)->format('F d, Y') }}</p>

          @if($order->payment_status === 'paid')
          <div class="mt-3">
            <span class="status-badge" style="background-color: #d4edda; color: #155724;">
              <i class="fas fa-check-circle"></i> PAID
            </span>
          </div>
          @else
          <div class="mt-3">
            <span class="status-badge" style="background-color: #fff3cd; color: #856404;">
              <i class="fas fa-exclamation-circle"></i> PENDING PAYMENT
            </span>
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>

  <section class="order_details">
    <div class="table-header">
      <h5>Order Details</h5>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col" class="col-6">Product</th>
          <th scope="col" class="col-2">Price</th>
          <th scope="col" class="col-2">Quantity</th>
          <th scope="col" class="col-2">Total</th>
        </tr>
      </thead>
      <tbody>
      @foreach($order->cart_info as $cart)
      @php
        $product=DB::table('products')->select('title')->where('id',$cart->product_id)->get();
      @endphp
        <tr>
          <td>
            <span>
              @foreach($product as $pro)
                {{$pro->title}}
              @endforeach
            </span>
          </td>
          <td>${{number_format($cart->price,2)}}</td>
          <td>x{{$cart->quantity}}</td>
          <td><span>${{number_format($cart->price * $cart->quantity,2)}}</span></td>
        </tr>
      @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th scope="col" colspan="3" class="text-right">Subtotal:</th>
          <th scope="col">${{number_format($order->sub_total,2)}}</th>
        </tr>

        @if($order->coupon > 0)
        <tr>
          <th scope="col" colspan="3" class="text-right">Discount:</th>
          <th scope="col">-${{number_format($order->coupon,2)}}</th>
        </tr>
        @endif

        <tr>
          @php
            $shipping_charge = DB::table('shippings')->where('id', $order->shipping_id)->pluck('price');
            $shipping_price = isset($shipping_charge[0]) ? $shipping_charge[0] : 0;
          @endphp
          <th scope="col" colspan="3" class="text-right">Shipping:</th>
          <th>${{number_format($shipping_price,2)}}</th>
        </tr>
        <tr class="total-row">
          <th scope="col" colspan="3" class="text-right">Total:</th>
          <th>${{number_format($order->total_amount,2)}}</th>
        </tr>
      </tfoot>
    </table>
  </section>

  <div class="row mt-4">
    <div class="col-md-6">
      <div class="thanks">
        <h4>Thank you for your business!</h4>
        <p class="text-muted">We appreciate your trust in us. If you have any questions about this invoice, please contact our support team.</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="authority text-right">
        <p>-----------------------------------</p>
        <h5>Authority Signature</h5>
        <p class="text-muted">{{env('APP_NAME')}} Team</p>
      </div>
    </div>
  </div>

  <div class="footer mt-5 pt-3 text-center text-muted">
    <p>This is computer generated invoice and does not require physical signature.</p>
    <p>{{env('APP_NAME')}} | {{env('APP_ADDRESS')}} | {{env('APP_PHONE')}}</p>
  </div>
</div>

@else
  <div class="alert alert-danger">Invalid Order</div>
@endif

<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
