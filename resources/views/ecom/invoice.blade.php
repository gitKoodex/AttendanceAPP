{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
    </ol>
  </div>
  <div class="row">
    <div class="col-lg-12">
      
      <div class="card">
        <div class="card-header"> Invoice <strong>01/01/01/2018</strong> <span class="float-right">
        <strong>Status:</strong> Pending</span> </div>
        <div class="card-body">
          <div class="row mb-5">
            <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
              <h6>From:</h6>
              <div> <strong>Webz Poland</strong> </div>
              <div>Madalinskiego 8</div>
              <div>71-101 Szczecin, Poland</div>
              <div>Email: info@webz.com.pl</div>
              <div>Phone: +48 444 666 3333</div>
            </div>
            <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
              <h6>To:</h6>
              <div> <strong>Bob Mart</strong> </div>
              <div>Attn: Daniel Marek</div>
              <div>43-190 Mikolow, Poland</div>
              <div>Email: marek@daniel.com</div>
              <div>Phone: +48 123 456 789</div>
            </div>
            <div class="mt-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-xs-start">
              <div class="row align-items-center">
                <div class="col-sm-9"> 
                  <div class="brand-logo mb-3">
                    <img class="logo-abbr mr-2" src="{{ asset('images/logo.png') }}" alt="">
                    <img class="logo-compact" src="{{ asset('images/logo-text.png') }}" alt="">
                  </div>
                  <span>Please send exact amount: <strong class="d-block">0.15050000 BTC</strong>
                  <strong>1DonateWffyhwAjskoEwXt83pHZxhLTr8H</strong></span><br>
                  <small class="text-muted">Current exchange rate 1BTC = $6590 USD</small>
                </div>
                <div class="col-sm-3 mt-3"> <img src="{{ asset('images/qr.png') }}" class="img-fluid width110"> </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th class="center">#</th>
                  <th>Item</th>
                  <th>Description</th>
                  <th class="right">Unit Cost</th>
                  <th class="center">Qty</th>
                  <th class="right">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="center">1</td>
                  <td class="left strong">Origin License</td>
                  <td class="left">Extended License</td>
                  <td class="right">$999,00</td>
                  <td class="center">1</td>
                  <td class="right">$999,00</td>
                </tr>
                <tr>
                  <td class="center">2</td>
                  <td class="left">Custom Services</td>
                  <td class="left">Instalation and Customization (cost per hour)</td>
                  <td class="right">$150,00</td>
                  <td class="center">20</td>
                  <td class="right">$3.000,00</td>
                </tr>
                <tr>
                  <td class="center">3</td>
                  <td class="left">Hosting</td>
                  <td class="left">1 year subcription</td>
                  <td class="right">$499,00</td>
                  <td class="center">1</td>
                  <td class="right">$499,00</td>
                </tr>
                <tr>
                  <td class="center">4</td>
                  <td class="left">Platinum Support</td>
                  <td class="left">1 year subcription 24/7</td>
                  <td class="right">$3.999,00</td>
                  <td class="center">1</td>
                  <td class="right">$3.999,00</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-5"> </div>
            <div class="col-lg-4 col-sm-5 ml-auto">
              <table class="table table-clear">
                <tbody>
                  <tr>
                    <td class="left"><strong>Subtotal</strong></td>
                    <td class="right">$8.497,00</td>
                  </tr>
                  <tr>
                    <td class="left"><strong>Discount (20%)</strong></td>
                    <td class="right">$1,699,40</td>
                  </tr>
                  <tr>
                    <td class="left"><strong>VAT (10%)</strong></td>
                    <td class="right">$679,76</td>
                  </tr>
                  <tr>
                    <td class="left"><strong>Total</strong></td>
                    <td class="right"><strong>$7.477,36</strong><br>
                    <strong>0.15050000 BTC</strong></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection			