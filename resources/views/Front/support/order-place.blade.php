@extends('layout.front_layout.masterAbout')

@section('content')


<div class="about__content mr-0">
    <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb bg-light">
            <li class="breadcrumb-item m-0"><a href="../index.html">Home</a></li>
            <li class="breadcrumb-item active m-0" aria-current="page">Order and Purchase</li>
        </ol>
    </nav>
    <div class="card about__content--body">
        <h1 class="title ml-0">Order and Purchase</h1>
        <div class="body-text">
            <p>
                To buy any product from TechshopBD, you must create an account on <a href="../index.html">www.techshopbd.com</a> and then place order using your account. This is the only way to get products from TechshopBD. <strong>We do not accept orders placed through e-mail, SMS or phone call. We don’t sell any product offline.</strong>
            </p>

            <h3 class="sub-title mt-4">Shipping Options:</h3>
            <p class="mt-3">
                <strong>Courier Service:</strong> If you chose this option, your product(s) will be delivered by our partner courier service. If you shipping address is within Dhaka city (metro), you’ll get your product(s) in 2-3 working days. Outside Dhaka city, product(s) arrives in 3-5 working days.
            </p>
            <p class="mt-3">
                <strong>Express Delivery:</strong> This service ensures that you’ll receive product(s) within 24 hours of placing order and is available only in Dhaka metro. Instead of courier service, we’ll send our own delivery man to your address. The delivery charge is a little bit higher than courier service but worth the extra expense if you’re in urgent need. Moreover, if you place order before 10 am, you’ll receive products on the same day, within 12 hours in most cases.
            </p>

            <h3 class="sub-title mt-4">Order Status Information:</h3>
            <p class="mt-3">
                When you place your order, it will enter through a series of steps during fulfillment.
            </p>
            <ul class="process__list">
                <li class="process__list--item">
                    <span><strong>1. Processing</strong> - </span> This indicates that we've received your order.
                </li>
                <li class="process__list--item">
                    <span><strong>2. Verified</strong> - </span> The order has been verified by calling you.
                </li>
                <li class="process__list--item">
                    <span><strong>3. Shipped</strong> - </span> Your order has been completely packaged and moved to our shipping dock. It's ready to go!
                </li>
                <li class="process__list--item">
                    <span><strong>4. Hold</strong> - </span> This indicates your order needs human interaction before it can be released for shipment. Orders in this status usually get cleared quickly. We will contact you if we need additional information.
                </li>
                <li class="process__list--item">
                    <span><strong>5. Others</strong> - </span> There are a few other order status flags but do not apply to the vast majority of orders. If you see any of them on your order, please call/ email us and we'll explain the state of your order.
                </li>
            </ul>

            <h3 class="sub-title mt-4">Cancelling an Order:</h3>
            <p class="mt-3">
                If your order is in the Processing or Verified status, you can cancel your order by calling us on our hotline number (09678 110 110) which is available from 9 am to 6 pm. Outside this timeframe, as we’ll be unavailable, you can leave a message on <a href="../index.html"><span class="__cf_email__" data-cfemail="34574147405b595146475146425d5751744051575c475c5b4456501a575b59">[email&#160;protected]</span></a>. But due to normal variations in shipping speed, your order may have already been shipped by the time we get the message. If that is the case, it will not be possible to cancel your order. To avoid any trouble, please make sure you want everything in your cart before clicking on 'Place Order'.
            </p>

            <h3 class="sub-title mt-4">Delivery and Payment Options:</h3>
            <p class="mt-3">
                In Dhaka city and other Zilla cities, you’re guaranteed to get home delivery. But on places elsewhere, you may or may not get home delivery depending on whether or not your shipping address is located inside the coverage area of our partner courier service. If not, then you might need to go to your nearest courier service office to collect your product(s). You can contact our customer care representatives (09678 110 110) to know how you’re supposed to receive your product(s).
            </p>
            <p>
                For payment, we accept both “cash on delivery” and “digital payment” (bkash and others if available). You’re supposed to pay for the product(s) after receiving it from the delivery man if you choose cash on delivery. But for purchasing using digital payment, you’ll have to pay in advance and we’ll send the product(s) to you only after you complete the payment. 
            </p>

            <h3 class="sub-title mt-4">Need Help?</h3>
            <p class="mt-3">
                If you have any question related to order and shipment, feel free to contact us.
            </p>
            <p>
                <strong>E-mail:</strong> <a href="../index.html"><span class="__cf_email__" data-cfemail="284b5d5b5c47454d5a5b4d5a5e414b4d685c4d4b405b4047584a4c064b4745">[email&#160;protected]</span></a> 
            </p>
            <p>
                <strong>Hotline:</strong> 09678 110 110 (9 am – 8 pm) 
            </p>

        </div>

    </div>
</div>

@endsection