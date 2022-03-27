@extends('layout.front_layout.masterAbout')

@section('content')

<div class="about__content mr-0">
    <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb bg-light">
            <li class="breadcrumb-item m-0"><a href="../index.html">Home</a></li>
            <li class="breadcrumb-item active m-0" aria-current="page">Sourcing Support</li>
        </ol>
    </nav>
    <div class="card about__content--body">
        <h1 class="title ml-0">Sourcing Support</h1>
        <div class="body-text">
            <p>
                You can import electronic components and equipment from outside Bangladesh through our “International Sourcing” service. We’ll buy the product(s) on behalf of you and deliver it to your address. You can get products from abroad that are not available on our website in 30-45 working days after placing an international sourcing order.
            </p>

            <h3 class="sub-title mt-4">Product Types:</h3>
            <p class="mt-3">
                Only products that are similar to the existing products on our website are eligible to be bought using our international sourcing service. As TechshopBD is focused on selling products related to embedded system, DIY electronics and robotics, it’s mandatory that customers ask for similar products to be imported from abroad. Any request to purchase product(s) which is/are not in-line with our existing products will be rejected.
            </p>

            <h3 class="sub-title mt-4">Product Sources:</h3>
            <ul class="process__list">
                <li class="process__list--item">
                    <span>-</span> Our official distributors (Sparkfun, Pololu, DFRobot, Adafruit, Seeedstudio, Hobbyking, Waveshare)
                </li>
                <li class="process__list--item">
                    <span>-</span> Aliexpress, Alibaba or similar online store based in china
                </li>
            </ul>

            <h3 class="sub-title mt-4">Order Procedure:</h3>
            <ul class="process__list">
                <li class="process__list--item">
                    <span>1.</span> Send mail to <a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="b7c4d8c2c5d4ded9d0f7c3d2d4dfc4dfd8c7d5d399d4d8da">[email&#160;protected]</a> to place order. Your mail should have the following.
                    <ul class="process__list mt-2">
                        <li class="process__list--item">
                            <span>a.</span> Name of product(s)
                        </li>
                        <li class="process__list--item">
                            <span>b.</span> Online link of product(s) on supplier website 
                        </li>
                        <li class="process__list--item">
                            <span>c.</span>Amount of product(s)
                        </li>
                        <li class="process__list--item">
                            <span>d.</span> Expected date of delivery
                        </li>
                    </ul>
                </li>
                <li class="process__list--item">
                    <span>2.</span> Our representative will contact you within a short time and inform you about total payable price, availability of product(s) and expected date of delivery.
                </li>
                <li class="process__list--item">
                    <span>3.</span> Upon agreement with our representative, you’ll have to pay “half” of your total payable amount in advance. We’ll provide you a money receipt / invoice for your advance payment.
                </li>
                <li class="process__list--item">
                    <span>4.</span> When the product(s) arrives, we’ll inform you. You can either collect the product(s) from our office or get home delivery (delivery charge will be added for home delivery). 
                </li>
                <li class="process__list--item">
                    <span>5.</span> Pay us rest of your total payable amount after receiving your product(s).
                </li>
            </ul>

            <h3 class="sub-title mt-4">Terms and Conditions:</h3>
            <ul class="process__list mt-3">
                <li class="process__list--item">
                    <span>-</span> TechshopBD holds the right to cancel your order at any time without stating any reason. In case of cancellation, the money that we charged from you as advanced payment will be given back to you. TechshopBD won’t give any cancellation fee to the client.
                </li>
                <li class="process__list--item">
                    <span>-</span> The 45 workings days limit to import product(s) might not be fulfilled on occasional cases. 
                </li>
                <li class="process__list--item">
                    <span>-</span> Order cannot be changed/cancelled AFTER the customer makes advanced payment. 
                </li>
                <li class="process__list--item">
                    <span>-</span> TechshopBD hold the right to modify any part of the international sourcing policy any time without any prior notice.
                </li>
            </ul>
        </div>

    </div>
</div>

@endsection