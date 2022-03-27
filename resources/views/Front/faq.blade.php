@extends('layout.front_layout.masterAbout')

@section('content')

<div class="about__content mr-0">

    <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb bg-light">
            <li class="breadcrumb-item m-0"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item m-0"><a href="about-us.html">About Us</a></li>
            <li class="breadcrumb-item active m-0" aria-current="page">FAQ</li>
        </ol>
    </nav>

    <div class="card about__content--body">

        <h1 class="title ml-0">FAQ</h1>

        <div class="accordion w-100" id="accordionExample">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingOne">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How will I create an account?
                        </button>
                    </h3>
                </div>
                <div id="collapseOne" class="collapse ml-0 show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <p><strong>Step 1:</strong> On top right corner of our website, there’s a “Log in” icon. Click it and on the next page, click on “Sign Up”. Enter necessary information there.</p>
                        <p class="mt-2"><strong>Step 2:</strong> Check your e-mail inbox and click on the account activation link on the mail sent by TechshopBD. Consider checking spam if you don’t find our mail in your primary inbox.</p>
                        <p class="mt-2"><strong>Step 3:</strong> On top right corner of our website, click on the “Log in” icon. Then on the “Sign In” page, enter necessary details.</p>
                        <p class="mt-2">Opening a TechshopBD account is mandatory to buy any product from TechshopBD. This is how you will track your order and how we will contact you if there are any questions or problems with your order. From your account, you can add and edit address.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion w-100 mt-3" id="accordionExample2">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingTwo">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            How will I shop in TechShopBD?
                        </button>
                    </h3>
                </div>
                <div id="collapseTwo" class="collapse ml-0" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <p><strong>Step 1:</strong> Create your TechshopBD account (or log in if you already have one). Details have been discussed on “How will I create an account?” section of FAQ.</p>
                        <p class="mt-2"><strong>Step 2:</strong> Find your desired product(s) from our product categories, from highlighted products on homepage or by searching using our search box.</p>
                        <p class="mt-2"><strong>Step 3:</strong> On product page, select the amount by using the ‘+’ & ‘-’ icons or by writing on the amount field. Then click on the “Add to Cart” button. Add as many products as you want by following step 2 and 3.</p>
                        <p class="mt-2"><strong>Step 4:</strong> Click on the “Cart icon” located on top right corner of our page (there’ll be a red mark with a number on the cart icon). You’ll be able to see all the products and their amount in the cart. You can edit the amount of any product or remove product(s) from here. When you’re done, click on “Next Step”.</p>
                        <p class="mt-2"><strong>Step 5:</strong> Write your shipping address and select delivery method. Then click on “Continue to payment”. Then select your preferred payment method and click on “Confirm Order”.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion w-100 mt-3" id="accordionExample3">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingThree">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            How will I place PCB order?
                        </button>
                    </h3>
                </div>
                <div id="collapseThree" class="collapse ml-0" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>Click on “PCB” on the top bar of our website (side bar if you’re on a mobile phone). Then follow the “PCB Order Guideline” on that page.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion w-100 mt-3" id="accordionExample5">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingFive">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                            I made a mistake and ordered the wrong product/entered the wrong shipping address/shipping method. How can I modify my order?
                        </button>
                    </h3>
                </div>
                <div id="collapseFive" class="collapse ml-0" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>You cannot edit anything in your cart after placing order. But we can modify your order if you want. For that, contact us through our hotline number (9am – 8pm) or email address. You can also ask for modification when we call you for verification of your order (we verify every order by talking with the customer over phone before packaging). Please note that it’s not possible to modify anything, even by us, if your product has already been shipped (handed over to the courier service).</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion w-100 mt-3" id="accordionExample6">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingSix">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            How can I change quantities of items once I've added them to my cart?
                        </button>
                    </h3>
                </div>
                <div id="collapseSix" class="collapse ml-0" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>If you have added an item to your shopping cart and then realize you want, say 10 of them instead of 2, you can easily edit the amount. To do that, click on the “Cart icon” located on top right corner of our page (there’ll be a red mark with a number on the cart icon). You’ll be able to see all the products and their amount in the cart. You can edit the amount of any product or remove product(s) from here.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion w-100 mt-3" id="accordionExample7">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingSeven">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                            I found the item I want, but I can't add it to my cart. Why not?
                        </button>
                    </h3>
                </div>
                <div id="collapseSeven" class="collapse ml-0" aria-labelledby="headingSeven" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>The product might be “out of stock”. You can add it to your wishlist (by clicking on the heart icon). You can check for availably of that product from your wishlist. To view wishlist, click on your account icon (top right corner of our webpage).</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion w-100 mt-3" id="accordionExample8">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingEight">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                            How can I get quote for my order and/or a shipping quote?
                        </button>
                    </h3>
                </div>
                <div id="collapseEight" class="collapse ml-0" aria-labelledby="headingEight" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>All of our pricing and availability information is online, so we are not able to provide quotes for under 250 pieces of an item. If you want less than 250 of an item, just place your order through our website, and all shipping, applicable tax and costs for items will be available during checkout. And we provide invoice/ money receipt in a printed form for each purchase which can be used as a physical documentation of your order.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion w-100 mt-3" id="accordionExample9">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingNine">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                            What shipping options do you have?
                        </button>
                    </h3>
                </div>
                <div id="collapseNine" class="collapse ml-0" aria-labelledby="headingNine" data-parent="#accordionExample">
                    <div class="card-body">
                        <p><strong>Courier Service:</strong> Your product(s) will be delivered by our partner courier service. If you shipping address is within Dhaka city (metro), you’ll get your product(s) in 2-3 working days. Outside Dhaka city, product(s) arrives in 3-5 working days.</p>
                        <p class="mt-2"><strong>Express Delivery:</strong> This service ensures that you’ll receive product(s) within 24 hours of placing order and is available only in Dhaka metro. Instead of courier service, we’ll send our own delivery man to your address. The delivery charge is a little bit higher than courier service but it’s worth the extra expense if you’re in urgent need. Moreover, if you place order before 10 am, you’ll receive products on the same day, within 12 hours in most cases.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion w-100 mt-3" id="accordionExample10">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingTen">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                            How much will it cost to ship my order?
                        </button>
                    </h3>
                </div>
                <div id="collapseTen" class="collapse ml-0" aria-labelledby="headingTen" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>Shipping costs will vary depending what shipping method you choose. Once you’ve selected your desired shipping method, you’ll be able to see your total shipping cost. Our shipping charge is BDT 40 for general courier service delivery and BDT 100 for express delivery. In addition to shipping charges, we also charge a BDT 15.00 handling fee on all orders. Please note that shipping charge might change at any time.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion w-100 mt-3" id="accordionExample11">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingEleven">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                            What payment methods do you accept?
                        </button>
                    </h3>
                </div>
                <div id="collapseEleven" class="collapse ml-0" aria-labelledby="headingEleven" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>We accept Payment through “bKash” and “Cash on Delivery”. If you choose bKash, you’ve to pay while placing order. And if you choose “Cash on Delivery”, you’ll have to pay after receiving the product(s).</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion w-100 mt-3" id="accordionExample12">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingTwelve">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                            Why is my order in “Hold” status?
                        </button>
                    </h3>
                </div>
                <div id="collapseTwelve" class="collapse ml-0" aria-labelledby="headingTwelve" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>This indicates your order needs human interaction before it can be released for shipment. Orders in this status usually get cleared quickly. We will contact you if we need additional information.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion w-100 mt-3" id="accordionExample13">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingThirteen">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                            How can I get my order shipped out today?
                        </button>
                    </h3>
                </div>
                <div id="collapseThirteen" class="collapse ml-0" aria-labelledby="headingThirteen" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>An “Express Delivery” order placed before 10:00 am will be shipped out that day. If it is after 10:00 am, we cannot guarantee that your order will ship that same day. However, all hope is not lost! Please call us as soon as you can with your order number to request your order be expedited and we will do all we can to make sure it gets processed quickly. Please note that, there’s no option to deliver products in the same day if you choose “courier service” as delivery method while placing order.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion w-100 mt-3" id="accordionExample14">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingFourteen">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                            How can I get an invoice for my order?
                        </button>
                    </h3>
                </div>
                <div id="collapseFourteen" class="collapse ml-0" aria-labelledby="headingFourteen" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>We normally provide a physical copy of invoice along with the product(s) inside a box. Also an invoice is mailed to the account email address of the customer.</p>
                        <p class="mt-2">In case you need to see the invoice, you can find a standard Invoice, showing the value of your order, shipping charges and what you paid, under "My Orders" in your TechShopBD account. Once in Order History, click on the order number you need an invoice for, and then you can print that order.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion w-100 mt-3" id="accordionExample15">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingFifteen">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen">
                            Do you ship to any place?
                        </button>
                    </h3>
                </div>
                <div id="collapseFifteen" class="collapse ml-0" aria-labelledby="headingFifteen" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>We can ship products to any place in Bangladesh where courier service is available.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion w-100 mt-3" id="accordionExample16">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingSixteen">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                            Where do you take the classes?
                        </button>
                    </h3>
                </div>
                <div id="collapseSixteen" class="collapse ml-0" aria-labelledby="headingSixteen" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>All of our classes are taken at our office in Karwan Bazar, Dhaka. You do have to be here for the class. Fees for classes does not include transportation to and from Karwan Bazar, or lodging, or anything else - just the class and sometimes the hardware.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion w-100 mt-3" id="accordionExample17">
            <div class="card">
                <div class="card-header w-100 pl-1" id="headingSeventeen">
                    <h3 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="true" aria-controls="collapseSeventeen">
                            I made something that I think you guys can use. How can I get it into TechshopBD?
                        </button>
                    </h3>
                </div>
                <div id="collapseSeventeen" class="collapse ml-0" aria-labelledby="headingSeventeen" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>Currently we don’t sell products on behalf of 3rd party entities on our website. If you own a company / you’re a distributor and you think that your products are something that we might be interested in, you can approach us to buy the product(s) from you and resell it on our website.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection