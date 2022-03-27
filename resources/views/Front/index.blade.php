@extends('layout.front_layout.master')

@section('content')

<input id="user_track" type="hidden" value="anonymousUser" />
<input type="hidden" name="_csrf" value="e9621300-60fa-4f5d-967b-b2e6fd4e080d" />

<section class="main-content-section">
    <div class="content-section">
        <div class="d-flex">
            <div class="sidebar-category ml-0">
<div class="card">
    <div class="card-header w-100">
        <p class="sidebar-title text-uppercase"><img src="{{ asset('image/frontLogos/category-icon.png') }}" alt="icon"> <a href="category-list" class="text-white">Categories</a></p>
    </div>
    <div class="card-body p-0">
        <ul class="category-list">

            <li class="category-item js--category-item">
                <a href="category" class="text-capitalize category-name">Accessories <i class="fa fa-angle-right text-right"></i></a>

                <div class="dropdown-menu">
                    <a href="category" class="d-block">Connector</a><a href="browse/category5aaa.html?id=68" class="d-block">Cable</a><a href="browse/category3c6f.html?id=193" class="d-block">Computer Peripherals</a>
                </div>

            </li>

            <li class="category-item js--category-item">
                <a href="browse/category3ca5.html?id=53" class="text-capitalize category-name">Basic Component<i class="fa fa-angle-right text-right"></i></a>

                <div class="dropdown-menu">
                    <a href="browse/categoryf62c.html?id=36" class="d-block">Optocoupler</a><a href="browse/category4411.html?id=37" class="d-block">MOSFET</a><a href="browse/categorycdef.html?id=38" class="d-block">Transistor </a><a href="browse/category7df0.html?id=41" class="d-block">Regulator</a><a href="browse/category1e85.html?id=54" class="d-block">Diode</a><a href="browse/categorya9e4.html?id=55" class="d-block">Buzzer</a><a href="browse/categoryf8d4.html?id=65" class="d-block">Diac &amp; Triac</a><a href="browse/category2770.html?id=67" class="d-block">Thyristor / SCR</a><a href="browse/category8431.html?id=73" class="d-block">LED</a><a href="browse/category23df.html?id=74" class="d-block">Capacitor</a><a href="browse/category1a6a.html?id=75" class="d-block">Resistor</a><a href="browse/categoryd8c4.html?id=77" class="d-block">Inductor</a><a href="browse/category015d.html?id=182" class="d-block">Laser</a>
                </div>

            </li>

            <li class="category-item js--category-item">
                <a href="browse/categoryd625.html?id=117" class="text-capitalize category-name">Development Board<i class="fa fa-angle-right text-right"></i></a>

                <div class="dropdown-menu">
                    <a href="browse/categoryfb68.html?id=127" class="d-block">Arduino &amp; Accessories</a><a href="browse/category6d44.html?id=131" class="d-block">AVR Development Board</a><a href="browse/categorya262.html?id=132" class="d-block">PIC Development Board</a><a href="browse/categorya2ea.html?id=139" class="d-block">FPGA Development Board</a><a href="browse/category4238.html?id=142" class="d-block">ARM Development Board</a><a href="browse/category8562.html?id=170" class="d-block">Other Development Board</a><a href="browse/category6ce1.html?id=179" class="d-block">Raspberry Pi &amp; Accessories</a><a href="browse/category8513.html?id=201" class="d-block">ESP Development Board</a>
                </div>

            </li>

            <li class="category-item js--category-item">
                <a href="browse/category9b05.html?id=134" class="text-capitalize category-name">Display<i class="fa fa-angle-right text-right"></i></a>

                <div class="dropdown-menu">
                    <a href="browse/categoryb510.html?id=135" class="d-block">LCD, OLED &amp; E-Ink</a><a href="browse/category7147.html?id=136" class="d-block">DOT Matrix</a><a href="browse/category7567.html?id=137" class="d-block">Multi Segment</a><a href="browse/category3f91.html?id=157" class="d-block">LED Panel</a><a href="browse/category7cff.html?id=191" class="d-block">Display Driver</a>
                </div>

            </li>

            <li class="category-item js--category-item">
                <a href="browse/category6e03.html?id=13" class="text-capitalize category-name">General IC<i class="fa fa-angle-right text-right"></i></a>

                <div class="dropdown-menu">
                    <a href="browse/category87f1.html?id=14" class="d-block">74 Family</a><a href="browse/category7429.html?id=15" class="d-block">4000 Family</a><a href="browse/categorye371.html?id=18" class="d-block">Decoder</a><a href="browse/categorya9bc.html?id=19" class="d-block">Encoder</a><a href="browse/category2e5f.html?id=22" class="d-block">Inverter</a><a href="browse/categoryef73.html?id=33" class="d-block">OPAMP</a><a href="browse/categoryd5e8.html?id=34" class="d-block">Timer &amp; PWM</a><a href="browse/category4944.html?id=48" class="d-block">Transceiver</a><a href="browse/category2568.html?id=49" class="d-block">Gates</a><a href="browse/categoryfddb.html?id=52" class="d-block">Other IC</a><a href="browse/category3ebc.html?id=64" class="d-block">Converter</a><a href="browse/category47c2.html?id=83" class="d-block">Driver</a><a href="browse/category7845.html?id=85" class="d-block">EEPROM</a><a href="browse/category9bb2.html?id=111" class="d-block">LCD Driver</a><a href="browse/category79ff.html?id=112" class="d-block">Digital Rheostat </a><a href="browse/category39d7.html?id=145" class="d-block">RTC</a>
                </div>

            </li>

            <li class="category-item js--category-item">
                <a href="browse/category46f5.html?id=129" class="text-capitalize category-name">Home Automation<i class="fa fa-angle-right text-right"></i></a>

                <div class="dropdown-menu">
                    <a href="browse/categoryb7b8.html?id=204" class="d-block">SONOFF</a><a href="browse/category7251.html?id=205" class="d-block">Automatic Switch</a><a href="browse/category8f26.html?id=206" class="d-block">Automatic Light</a><a href="browse/categoryc0c1.html?id=207" class="d-block">Security System</a><a href="browse/categoryca2e.html?id=208" class="d-block">Timer</a><a href="browse/categoryc1fb.html?id=209" class="d-block">Remote</a>
                </div>

            </li>

            <li class="category-item js--category-item">
                <a href="browse/categorye935.html?id=143" class="text-capitalize category-name">Kits<i class="fa fa-angle-right text-right"></i></a>

                <div class="dropdown-menu">
                    <a href="browse/category2728.html?id=16" class="d-block">Starter Kits</a><a href="browse/category1e35.html?id=39" class="d-block">Advanced kits</a><a href="browse/category6396.html?id=42" class="d-block">Science Box</a><a href="browse/category0f0e.html?id=125" class="d-block">Robotic Kits</a>
                </div>

            </li>

            <li class="category-item js--category-item">
                <a href="browse/category3b75.html?id=126" class="text-capitalize category-name">Microcontroller<i class="fa fa-angle-right text-right"></i></a>

                <div class="dropdown-menu">
                    <a href="browse/category6fb5.html?id=31" class="d-block">PIC Microcontroller</a><a href="browse/category2580.html?id=43" class="d-block">AVR Microcontroller</a><a href="browse/categoryb3a3.html?id=110" class="d-block">Other Microcontrollers &amp; Accessories</a><a href="browse/category5cee.html?id=118" class="d-block">AVR Programmer</a><a href="browse/category0d7d.html?id=119" class="d-block">PIC Programmer</a><a href="browse/category7e46.html?id=128" class="d-block">Data Converter</a><a href="browse/category37bf.html?id=140" class="d-block">ARM Microcontroller</a>
                </div>

            </li>

            <li class="category-item js--category-item">
                <a href="browse/categoryea25.html?id=24" class="text-capitalize category-name">Miscellaneous<i class="fa fa-angle-right text-right"></i></a>

                <div class="dropdown-menu">
                    <a href="browse/category0b30.html?id=2" class="d-block">Soldering</a><a href="browse/categorydcfd.html?id=4" class="d-block">Power Supply</a><a href="browse/categoryd61c.html?id=5" class="d-block">Measurement</a><a href="browse/category3a9f.html?id=6" class="d-block">Tools</a><a href="browse/category0c98.html?id=50" class="d-block">Crystal Oscillator</a><a href="browse/category3221.html?id=63" class="d-block">Breadboard</a><a href="browse/category4f62.html?id=70" class="d-block">DC Fan</a><a href="browse/category76a2.html?id=72" class="d-block">Relay</a><a href="browse/categorybc58.html?id=78" class="d-block">Fuse</a><a href="browse/category5ea1.html?id=81" class="d-block">Switch &amp; Button</a><a href="browse/category1a85.html?id=82" class="d-block">Transformer / Voltage Converter</a><a href="browse/category9dbc.html?id=84" class="d-block">Battery</a><a href="browse/category1398.html?id=87" class="d-block">Keypad</a><a href="browse/category651a.html?id=147" class="d-block">Retired</a><a href="browse/categorye8f5.html?id=152" class="d-block">Memory Card</a><a href="browse/category4893.html?id=153" class="d-block">Charger</a><a href="browse/categorycd1a.html?id=161" class="d-block">Generator</a><a href="browse/category1258.html?id=165" class="d-block">Cooler</a><a href="browse/category73ca.html?id=166" class="d-block">Conductive Pen</a><a href="browse/categoryc572.html?id=169" class="d-block">Solar</a><a href="browse/categorye3cf.html?id=171" class="d-block">Solenoid</a><a href="browse/category4445.html?id=184" class="d-block">Pump</a><a href="browse/category51c2.html?id=187" class="d-block">Magnet</a><a href="browse/categoryc0fa.html?id=198" class="d-block">Screw</a><a href="browse/categoryf23d.html?id=199" class="d-block">Audio</a><a href="browse/category13f1.html?id=200" class="d-block">Copper Board / CCB</a>
                </div>

            </li>

            <li class="category-item js--category-item">
                <a href="browse/category97d4.html?id=120" class="text-capitalize category-name">Robotics<i class="fa fa-angle-right text-right"></i></a>

                <div class="dropdown-menu">
                    <a href="browse/category4b61.html?id=121" class="d-block">Motor Driver</a><a href="browse/categoryb4cd.html?id=122" class="d-block">Motor</a><a href="browse/categoryc17f.html?id=123" class="d-block">Other Robotics</a><a href="browse/categoryd9e6.html?id=124" class="d-block">Wheel &amp; Caster</a><a href="browse/categorya6dd.html?id=133" class="d-block">Robotics Sensor</a><a href="browse/categorya9d2.html?id=155" class="d-block">Actuator</a><a href="browse/categoryc7f4.html?id=156" class="d-block">Controller</a><a href="browse/category6ea4.html?id=176" class="d-block">Propeller</a><a href="browse/categoryab99.html?id=177" class="d-block">MultiCopter</a>
                </div>

            </li>

            <li class="category-item js--category-item">
                <a href="browse/categoryf41b.html?id=10" class="text-capitalize category-name">Sensor<i class="fa fa-angle-right text-right"></i></a>

                <div class="dropdown-menu">
                    <a href="browse/category0055.html?id=11" class="d-block">Temperature</a><a href="browse/category7d36.html?id=51" class="d-block">Light</a><a href="browse/category850a.html?id=57" class="d-block">Other Sensor</a><a href="browse/category662f.html?id=104" class="d-block">Biometrics</a><a href="browse/category0985.html?id=146" class="d-block">Gyro, Accelerometer &amp; Compass</a><a href="browse/category9537.html?id=150" class="d-block">Flex</a><a href="browse/category4133.html?id=151" class="d-block">Gas</a><a href="browse/category367a.html?id=154" class="d-block">Current</a><a href="browse/categorya7a0.html?id=158" class="d-block">Moisture</a><a href="browse/category4d23.html?id=159" class="d-block">Pressure</a><a href="browse/category2497.html?id=160" class="d-block">Water</a><a href="browse/category4018.html?id=173" class="d-block">Weight</a><a href="browse/category0741.html?id=180" class="d-block">Motion</a><a href="browse/category3c27.html?id=183" class="d-block">Sound</a>
                </div>

            </li>

            <li class="category-item js--category-item">
                <a href="browse/category681a.html?id=1" class="text-capitalize category-name">Wireless<i class="fa fa-angle-right text-right"></i></a>

                <div class="dropdown-menu">
                    <a href="browse/category9421.html?id=79" class="d-block">RF</a><a href="browse/categoryb182.html?id=100" class="d-block">GSM, GPS &amp; GPRS</a><a href="browse/category4c30.html?id=102" class="d-block">Antennas</a><a href="browse/categoryab5e.html?id=103" class="d-block">WiFi</a><a href="browse/categoryec28.html?id=106" class="d-block">Bluetooth</a><a href="browse/categorydb5d.html?id=185" class="d-block">Xbee / Zigbee</a>
                </div>

            </li>

        </ul>
    </div>
</div>
</div>
            <div class="home-content mr-0">
                <div class="home-banner-section">
                    <div id="js--home-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#js--home-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#js--home-carousel" data-slide-to="1"></li>
                            <li data-target="#js--home-carousel" data-slide-to="2"></li>
                            <li data-target="#js--home-carousel" data-slide-to="3"></li>
                            <li data-target="#js--home-carousel" data-slide-to="4"></li>
                            <li data-target="#js--home-carousel" data-slide-to="5"></li>
                            <li data-target="#js--home-carousel" data-slide-to="6"></li>
                            <li data-target="#js--home-carousel" data-slide-to="7"></li>
                            <li data-target="#js--home-carousel" data-slide-to="8"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="5000">
                                <a href="index.html" target="_blank">
                                    <img src="{{ asset('image/banner/2021-09-13_06_58_53.jpg') }}" class="d-block w-100" alt="about_us_banner" />
                                </a>
                            </div>
                            <div class="carousel-item" data-interval="5000">
                                <a href="index.html" target="_blank">
                                    <img src="{{ asset('image/banner/2021-10-09_08_39_52.jpg') }}" class="d-block w-100" alt="about_us_banner" />
                                </a>
                            </div>
                            <div class="carousel-item" data-interval="5000">
                                <a href="support/order-place.html" target="_blank">
                                    <img src="{{ asset('image/banner/2021-10-10_10_01_21.jpg') }}" class="d-block w-100" alt="about_us_banner" />
                                </a>
                            </div>
                            <div class="carousel-item" data-interval="5000">
                                <a href="support/order-place.html" target="_blank">
                                    <img src="{{ asset('image/banner/2021-10-11_08_38_02.jpg') }}" class="d-block w-100" alt="about_us_banner" />
                                </a>
                            </div>
                            <div class="carousel-item" data-interval="5000">
                                <a href="login.html" target="_blank">
                                    <img src="{{ asset('image/banner/2021-10-17_09_40_33.jpg') }}" class="d-block w-100" alt="about_us_banner" />
                                </a>
                            </div>
                            <div class="carousel-item" data-interval="5000">
                                <a href="https://blog.techshopbd.com/" target="_blank">
                                    <img src="{{ asset('image/banner/2021-05-24_05_42_33.jpg') }}" class="d-block w-100" alt="about_us_banner" />
                                </a>
                            </div>
                            <div class="carousel-item" data-interval="5000">
                                <a href="support/technical-assistance.html" target="_blank">
                                    <img src="{{ asset('image/banner/2021-06-06_09_09_40.jpg') }}" class="d-block w-100" alt="about_us_banner" />
                                </a>
                            </div>
                            <div class="carousel-item" data-interval="5000">
                                <a href="support/sourcing-product.html" target="_blank">
                                    <img src="{{ asset('image/banner/2021-10-18_05_53_21.jpg') }}" class="d-block w-100" alt="about_us_banner" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="top-small-banner">
                        <div class="d-flex justify-content-between">
                            <div class="small-banner-item m-0">
                                <a href="detail/3172/Amazon_Alexa_Echo_Dot_2_with_Case_techshop_bangladesh.html" target="_blank">
                                    <img src="{{ asset('image/banner/2022-03-03_09_14_26.jpg') }}"  alt="small_banner_left" class="img-fluid" />
                                </a>
                            </div>
                            <div class="small-banner-item m-0">
                                <a href="detail/3232/360_Nano_Bot_R2_techshop_bangladesh.html" target="_blank">
                                    <img src="{{ asset('image/banner/2022-02-08_06_54_24.jpg') }}"  alt="small_banner_left" class="img-fluid" />
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="home-feature-section">
                        <p class="title">Feature Product</p>
                        <div class="d-flex justify-content-around align-items-center">
                            <a href="" class="featured-item item-1 align-self-center" id="js--feature-item">
                                <img th:src="@{/dist/common/images/feature-icon-active-1.png}" alt="icon" class="img-fluid">
                                <p>Cuntomer Favorites</p>
                            </a>
                            <a href="" class="featured-item item-2" id="js--feature-item">
                                <img th:src="@{/dist/common/images/feature-icon-active-2.png}" alt="icon" class="img-fluid">
                                <p>Most Viewd Items</p>
                            </a>
                            <a href="" class="featured-item item-3" id="js--feature-item">
                                <img th:src="@{/dist/common/images/feature-icon-active-3.png}" alt="icon" class="img-fluid">
                                <p>Upcoming Release</p>
                            </a>
                            <a href="" class="featured-item item-4" id="js--feature-item">
                                <img th:src="@{/dist/common/images/feature-icon-active-4.png}" alt="icon" class="img-fluid">
                                <p>Starter Recommended</p>
                            </a>
                            <a href="" class="featured-item item-5" id="js--feature-item">
                                <img th:src="@{/dist/common/images/feature-icon-active-5.png}" alt="icon" class="img-fluid">
                                <p>Top Rated</p>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-list-wrapper">
    <div class="content-section">
        <div class="product-list-header">
            <div class="d-flex align-items-center">
                <p class="title ml-0 mb-0">Arduino </p>
                <a href="category" class="btn btn-see__more mr-0 text-uppercase">See More</a>
            </div>
        </div>
        <div class="product-list-item">
            <div class="d-flex">
                <div  class="item js--product-item">
                    <a href="detail/1253/Arduino_Uno_techshop_bangladesh.html?product_id=1253" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Arduino-Uno-Price-in-BD.jpg') }}" alt="Arduino-Uno-Price-in-BD.jpg" class="img-fluid">

                            <p class="product-name">Arduino Uno</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 840.06</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1253/Arduino_Uno_techshop_bangladesh.html?product_id=1253" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1281/Arduino_Uno_R3_(Original)_techshop_bangladesh.html?product_id=1281" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Arduino-Uno-R3-(Original).jpg') }}" alt="Arduino-Uno-R3-(Original).jpg" class="img-fluid">

                            <p class="product-name">Arduino Uno R3 (Original)</p>
                            <p class="brand-name">SparkFun, USA</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 3497.39</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1281/Arduino_Uno_R3_(Original)_techshop_bangladesh.html?product_id=1281" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/2403/Arduino_Nano_techshop_bangladesh.html?product_id=2403" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Arduino-Nano-Price-in-BD.jpg') }}" alt="Arduino-Nano-Price-in-BD.jpg" class="img-fluid">

                            <p class="product-name">Arduino Nano</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 639.28</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/2403/Arduino_Nano_techshop_bangladesh.html?product_id=2403" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1452/Arduino_Mega_2560_techshop_bangladesh.html?product_id=1452" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Arduino-Mega-Price-in-BD_1.jpg') }}" alt="Arduino-Mega-Price-in-BD_1.jpg" class="img-fluid">

                            <p class="product-name">Arduino Mega 2560</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 1650.25</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1452/Arduino_Mega_2560_techshop_bangladesh.html?product_id=1452" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1333/Arduino_Duemilanove_(China)_techshop_bangladesh.html?product_id=1333" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Arduino-Duemilanove-(China).jpg') }}" alt="Arduino-Duemilanove-(China).jpg" class="img-fluid">

                            <p class="product-name">Arduino Duemilanove (China)</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 678.02</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1333/Arduino_Duemilanove_(China)_techshop_bangladesh.html?product_id=1333" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section">
        <div class="product-list-header">
            <div class="d-flex align-items-center">
                <p class="title ml-0 mb-0">Raspberry Pi</p>
                <a href="category" class="btn btn-see__more mr-0 text-uppercase">See More</a>
            </div>
        </div>
        <div class="product-list-item">
            <div class="d-flex">
                <div  class="item js--product-item">
                    <a href="detail/2935/Raspberry_Pi_Zero_V1.html?product_id=2935" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/RaspberryPiZeroV1.3.jpg') }}" alt="RaspberryPiZeroV1.3.jpg" class="img-fluid">

                            <p class="product-name">Raspberry Pi Zero V1.3</p>
                            <p class="brand-name">Waveshare Electronics, China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 1999.47</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/2935/Raspberry_Pi_Zero_V1.html?product_id=2935" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3430/Raspberry_Pi_4_Model_B_4GB_techshop_bangladesh.html?product_id=3430" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/RaspberryPi4ModelB4GB.jpg') }}" alt="RaspberryPi4ModelB4GB.jpg" class="img-fluid">

                            <p class="product-name">Raspberry Pi 4 Model B 4GB</p>
                            <p class="brand-name"></p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 14063.38</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3430/Raspberry_Pi_4_Model_B_4GB_techshop_bangladesh.html?product_id=3430" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3619/Raspberry_Pi_4_Model_B_8GB_techshop_bangladesh.html?product_id=3619" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Raspberry-Pi-4-Price-in-BD_1.jpg') }}" alt="Raspberry-Pi-4-Price-in-BD_1.jpg" class="img-fluid">

                            <p class="product-name">Raspberry Pi 4 Model B 8GB</p>
                            <p class="brand-name"></p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 15000.31</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3619/Raspberry_Pi_4_Model_B_8GB_techshop_bangladesh.html?product_id=3619" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3722/Raspberry_Pi_Pico_techshop_bangladesh.html?product_id=3722" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/raspberry-pi-pico-price-in-bangladesh(1).jpg') }}" alt="raspberry-pi-pico-price-in-bangladesh(1).jpg" class="img-fluid">

                            <p class="product-name">Raspberry Pi Pico</p>
                            <p class="brand-name">Waveshare Electronics, China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 1294.84</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3722/Raspberry_Pi_Pico_techshop_bangladesh.html?product_id=3722" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/2936/Raspberry_Pi_Zero_W_techshop_bangladesh.html?product_id=2936" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/RaspberryPiZeroW_1.jpg') }}" alt="RaspberryPiZeroW_1.jpg" class="img-fluid">

                            <p class="product-name">Raspberry Pi Zero W</p>
                            <p class="brand-name">Waveshare Electronics, China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 2948.25</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/2936/Raspberry_Pi_Zero_W_techshop_bangladesh.html?product_id=2936" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section">
        <div class="product-list-header">
            <div class="d-flex align-items-center">
                <p class="title ml-0 mb-0">New Products</p>
                <a href="home_detail" class="btn btn-see__more mr-0 text-uppercase">See More</a>
            </div>
        </div>
        <div class="product-list-item">
            <div class="d-flex">
                <div  class="item js--product-item">
                    <a href="detail/3774/ESP32_IOT_Board_techshop_bangladesh.html?product_id=3774" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/ESP32-IOT-Board-R.jpg') }}" alt="ESP32-IOT-Board-R.jpg" class="img-fluid">

                            <p class="product-name">ESP32 IOT Board</p>
                            <p class="brand-name">Techshop Bangladesh</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 1490.56</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3774/ESP32_IOT_Board_techshop_bangladesh.html?product_id=3774" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3775/ESP32_IOT_Starter_Kit_techshop_bangladesh.html?product_id=3775" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/ESP32-IOT-Starter-Kits_1.jpg') }}" alt="ESP32-IOT-Starter-Kits_1.jpg" class="img-fluid">

                            <p class="product-name">ESP32 IOT Starter Kit</p>
                            <p class="brand-name">Techshop Bangladesh</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 2690.04</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3775/ESP32_IOT_Starter_Kit_techshop_bangladesh.html?product_id=3775" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3772/Bluetooth_RGB_LED_5050_Strip_Lights_techshop_bangladesh.html?product_id=3772" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/BluetoothRGBLED5050StripLights.jpg') }}" alt="BluetoothRGBLED5050StripLights.jpg" class="img-fluid">

                            <p class="product-name">Bluetooth RGB LED 5050 Strip Lights</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 779.94</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3772/Bluetooth_RGB_LED_5050_Strip_Lights_techshop_bangladesh.html?product_id=3772" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3771/DC_12V_775_Motor_techshop_bangladesh.html?product_id=3771" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/DC12V775Motor.jpg') }}" alt="DC12V775Motor.jpg" class="img-fluid">

                            <p class="product-name">DC 12V 775 Motor</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 745.46</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3771/DC_12V_775_Motor_techshop_bangladesh.html?product_id=3771" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3767/BME280_Temperature%2c_Humidity_%26_Pressure_Sensor_techshop_bangladesh.html?product_id=3767" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/BME280Temperature-Humidity%26PressureSensor.jpg') }}" alt="BME280Temperature-Humidity&amp;PressureSensor.jpg" class="img-fluid">

                            <p class="product-name">BME280 Temperature, Humidity &amp; Pressure Sensor</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 696.98</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3767/BME280_Temperature%2c_Humidity_%26_Pressure_Sensor_techshop_bangladesh.html?product_id=3767" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section">
        <div class="product-list-header">
            <div class="d-flex align-items-center">
                <p class="title ml-0 mb-0">Most Essentials - Highly Useful</p>
                <a href="home-detailse371.html?id=18" class="btn btn-see__more mr-0 text-uppercase">See More</a>
            </div>
        </div>
        <div class="product-list-item">
            <div class="d-flex">
                <div  class="item js--product-item">
                    <a href="detail/2403/Arduino_Nano_techshop_bangladesh.html?product_id=2403" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Arduino-Nano-Price-in-BD.jpg') }}" alt="Arduino-Nano-Price-in-BD.jpg" class="img-fluid">

                            <p class="product-name">Arduino Nano</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 639.28</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/2403/Arduino_Nano_techshop_bangladesh.html?product_id=2403" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/231/Breadboard_(830_Point)_techshop_bangladesh.html?product_id=231" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/830breadboard-.jpg') }}" alt="830breadboard-.jpg" class="img-fluid">

                            <p class="product-name">Breadboard (830 Point)</p>
                            <p class="brand-name"></p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 135.3</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/231/Breadboard_(830_Point)_techshop_bangladesh.html?product_id=231" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1083/Male_To_Male_Jumper_Wire_-_Single_techshop_bangladesh.html?product_id=1083" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Male-to-Male-jumper-wire---single_1.jpg') }}" alt="Male-to-Male-jumper-wire---single_1.jpg" class="img-fluid">

                            <p class="product-name">Male To Male Jumper Wire - Single</p>
                            <p class="brand-name"></p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 2.95</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1083/Male_To_Male_Jumper_Wire_-_Single_techshop_bangladesh.html?product_id=1083" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/254/LCD_Display_(16X2)_techshop_bangladesh.html?product_id=254" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/LCD-Display-(16X2).jpg') }}" alt="LCD-Display-(16X2).jpg" class="img-fluid">

                            <p class="product-name">LCD Display (16X2)</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 175.03</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/254/LCD_Display_(16X2)_techshop_bangladesh.html?product_id=254" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/2006/Lodestar_Soldering_Iron_-_40W__techshop_bangladesh.html?product_id=2006" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/LodestarSolderingIron-40W-1_1.jpg') }}" alt="LodestarSolderingIron-40W-1_1.jpg" class="img-fluid">

                            <p class="product-name">Lodestar Soldering Iron - 40W </p>
                            <p class="brand-name"></p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 308.66</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/2006/Lodestar_Soldering_Iron_-_40W__techshop_bangladesh.html?product_id=2006" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section">
        <div class="product-list-header">
            <div class="d-flex align-items-center">
                <p class="title ml-0 mb-0">Featured Products</p>
                <a href="https://www.techshopbd.com/home-details?id=2" class="btn btn-see__more mr-0 text-uppercase">See More</a>
            </div>
        </div>
        <div class="product-list-item">
            <div class="d-flex">
                <div  class="item js--product-item">
                    <a href="detail/3664/Smart_Electric_Glass_Door_Lock__techshop_bangladesh.html?product_id=3664" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Smart-Electric-Glass-Door-Lock.jpg') }}" alt="Smart-Electric-Glass-Door-Lock.jpg" class="img-fluid">

                            <p class="product-name">Smart Electric Glass Door Lock </p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 7647.42</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3664/Smart_Electric_Glass_Door_Lock__techshop_bangladesh.html?product_id=3664" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1291/Arduino_Ethernet_with_PoE_(Original)_techshop_bangladesh.html?product_id=1291" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Arduino-Ethernet-with-PoE-(Original).jpg') }}" alt="Arduino-Ethernet-with-PoE-(Original).jpg" class="img-fluid">

                            <p class="product-name">Arduino Ethernet with PoE (Original)</p>
                            <p class="brand-name">SparkFun, USA</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 5995.55</p>
                                <p class="original-price"><strike>Tk. 6995.98</strike></p>
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1291/Arduino_Ethernet_with_PoE_(Original)_techshop_bangladesh.html?product_id=1291" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/2791/ANALOG_%26_DIGITAL_TRAINING_SYSTEM_techshop_bangladesh.html?product_id=2791" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/ANALOG-%26-DIGITAL-TRAINING-SYSTEM01.jpg') }}" alt="ANALOG-&amp;-DIGITAL-TRAINING-SYSTEM01.jpg" class="img-fluid">

                            <p class="product-name">ANALOG &amp; DIGITAL TRAINING SYSTEM</p>
                            <p class="brand-name">Techshop Bangladesh</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 27775.26</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/2791/ANALOG_%26_DIGITAL_TRAINING_SYSTEM_techshop_bangladesh.html?product_id=2791" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1281/Arduino_Uno_R3_(Original)_techshop_bangladesh.html?product_id=1281" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Arduino-Uno-R3-(Original).jpg') }}" alt="Arduino-Uno-R3-(Original).jpg" class="img-fluid">

                            <p class="product-name">Arduino Uno R3 (Original)</p>
                            <p class="brand-name">SparkFun, USA</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 3497.39</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1281/Arduino_Uno_R3_(Original)_techshop_bangladesh.html?product_id=1281" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3563/Raspberry_Pi_4_Aluminum_Case_with_Fan_techshop_bangladesh.html?product_id=3563" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/RaspberryPi4AluminumCasewithFan_1.jpg') }}" alt="RaspberryPi4AluminumCasewithFan_1.jpg" class="img-fluid">

                            <p class="product-name">Raspberry Pi 4 Aluminum Case with Fan</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 949.46</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3563/Raspberry_Pi_4_Aluminum_Case_with_Fan_techshop_bangladesh.html?product_id=3563" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section">
        <div class="product-list-header">
            <div class="d-flex align-items-center">
                <p class="title ml-0 mb-0">Customers Favourite</p>
                <a href="home-detailsd708.html?id=3" class="btn btn-see__more mr-0 text-uppercase">See More</a>
            </div>
        </div>
        <div class="product-list-item">
            <div class="d-flex">
                <div  class="item js--product-item">
                    <a href="detail/2869/ESP8266_NodeMCU_V2_Development_Board_with_CP2102_techshop_bangladesh.html?product_id=2869" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/ESP8266NodeMCUV2DevelopmentBoardwithCP2102.jpg') }}" alt="ESP8266NodeMCUV2DevelopmentBoardwithCP2102.jpg" class="img-fluid">

                            <p class="product-name">ESP8266 NodeMCU V2 Development Board with CP2102</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 449.54</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/2869/ESP8266_NodeMCU_V2_Development_Board_with_CP2102_techshop_bangladesh.html?product_id=2869" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/2797/LCD_Display_16X2_with_Header_techshop_bangladesh.html?product_id=2797" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/LCD-Display-16X2-with-Header.jpg') }}" alt="LCD-Display-16X2-with-Header.jpg" class="img-fluid">

                            <p class="product-name">LCD Display 16X2 with Header</p>
                            <p class="brand-name">Techshop Bangladesh</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 230.79</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/2797/LCD_Display_16X2_with_Header_techshop_bangladesh.html?product_id=2797" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1343/Sonar_Sensor_(HC-SR04)_techshop_bangladesh.html?product_id=1343" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Sonar-Sensor-(HC-SR04).jpg') }}" alt="Sonar-Sensor-(HC-SR04).jpg" class="img-fluid">

                            <p class="product-name">Sonar Sensor (HC-SR04)</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 109.4</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1343/Sonar_Sensor_(HC-SR04)_techshop_bangladesh.html?product_id=1343" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1253/Arduino_Uno_techshop_bangladesh.html?product_id=1253" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Arduino-Uno-Price-in-BD.jpg') }}" alt="Arduino-Uno-Price-in-BD.jpg" class="img-fluid">

                            <p class="product-name">Arduino Uno</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 840.06</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1253/Arduino_Uno_techshop_bangladesh.html?product_id=1253" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3640/MAX7219_Dot_Matrix_Display_Module_32X8_techshop_bangladesh.html?product_id=3640" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/MAX7219-Dot-Matrix-Display-Module-32X8_1.jpg') }}" alt="MAX7219-Dot-Matrix-Display-Module-32X8_1.jpg" class="img-fluid">

                            <p class="product-name">MAX7219 Dot Matrix Display Module 32X8</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 884.16</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3640/MAX7219_Dot_Matrix_Display_Module_32X8_techshop_bangladesh.html?product_id=3640" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section">
        <div class="product-list-header">
            <div class="d-flex align-items-center">
                <p class="title ml-0 mb-0">Tools</p>
                <a href="browse/category3a9f.html?id=6" class="btn btn-see__more mr-0 text-uppercase">See More</a>
            </div>
        </div>
        <div class="product-list-item">
            <div class="d-flex">
                <div  class="item js--product-item">
                    <a href="detail/1063/9205A_Digital_Multimeter_techshop_bangladesh.html?product_id=1063" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/DT-9205A-Digital-Multimeter_2.jpg') }}" alt="DT-9205A-Digital-Multimeter_2.JPG" class="img-fluid">

                            <p class="product-name">9205A Digital Multimeter</p>
                            <p class="brand-name"></p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 487.79</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1063/9205A_Digital_Multimeter_techshop_bangladesh.html?product_id=1063" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1492/Digital_Microscope(U1000X)_techshop_bangladesh.html?product_id=1492" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Digital-Microscope(U1000X).jpg') }}" alt="Digital-Microscope(U1000X).jpg" class="img-fluid">

                            <p class="product-name">Digital Microscope(U1000X)</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 2990.14</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1492/Digital_Microscope(U1000X)_techshop_bangladesh.html?product_id=1492" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1979/Screwdriver_Tool_Set_(China)_techshop_bangladesh.html?product_id=1979" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/ScrewdriverToolSettechshopbd.jpg') }}" alt="ScrewdriverToolSettechshopbd.jpg" class="img-fluid">

                            <p class="product-name">Screwdriver Tool Set (China)</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 625.85</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1979/Screwdriver_Tool_Set_(China)_techshop_bangladesh.html?product_id=1979" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1708/Slide_Calipers_(Stainless_Steel)_techshop_bangladesh.html?product_id=1708" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Slide-Calipers-(Stainless-Steel)-01.jpg') }}" alt="Slide-Calipers-(Stainless-Steel)-01.jpg" class="img-fluid">

                            <p class="product-name">Slide Calipers (Stainless Steel)</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 1654.38</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1708/Slide_Calipers_(Stainless_Steel)_techshop_bangladesh.html?product_id=1708" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/641/Mini_Hand_Drill_techshop_bangladesh.html?product_id=641" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/MiniHandDrill.jpg') }}" alt="MiniHandDrill.jpg" class="img-fluid">

                            <p class="product-name">Mini Hand Drill</p>
                            <p class="brand-name"></p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 945.51</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/641/Mini_Hand_Drill_techshop_bangladesh.html?product_id=641" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section">
        <div class="product-list-header">
            <div class="d-flex align-items-center">
                <p class="title ml-0 mb-0">Developed by TechShopBD</p>
                <a href="https://www.techshopbd.com/browse/supplier?id=13" class="btn btn-see__more mr-0 text-uppercase">See More</a>
            </div>
        </div>
        <div class="product-list-item">
            <div class="d-flex">
                <div  class="item js--product-item">
                    <a href="detail/2697/Easy_LFR_techshop_bangladesh.html?product_id=2697" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Easy-LFR-01.jpg') }}" alt="Easy-LFR-01.jpg" class="img-fluid">

                            <p class="product-name">Easy LFR</p>
                            <p class="brand-name">Techshop Bangladesh</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 1599.04</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/2697/Easy_LFR_techshop_bangladesh.html?product_id=2697" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3629/Automatic_Liquid_Dispenser_techshop_bangladesh.html?product_id=3629" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Automatic-Liquid-Dispenser01.jpg') }}" alt="Automatic-Liquid-Dispenser01.jpg" class="img-fluid">

                            <p class="product-name">Automatic Liquid Dispenser</p>
                            <p class="brand-name">Techshop Bangladesh</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 193.71</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3629/Automatic_Liquid_Dispenser_techshop_bangladesh.html?product_id=3629" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3500/ESP8266_WiFi_4_Channel_IoT_Smart_Switch_4CH_techshop_bangladesh.html?product_id=3500" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/ESP8266-WiFi-4-Channel-IoT-Smart-Switch-4CH-1.jpg') }}" alt="ESP8266-WiFi-4-Channel-IoT-Smart-Switch-4CH-1.jpg" class="img-fluid">

                            <p class="product-name">ESP8266 WiFi 4 Channel IoT Smart Switch 4CH</p>
                            <p class="brand-name">Techshop Bangladesh</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 1195.04</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3500/ESP8266_WiFi_4_Channel_IoT_Smart_Switch_4CH_techshop_bangladesh.html?product_id=3500" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3584/Digital_Door_Lock_System_techshop_bangladesh.html?product_id=3584" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Digital-Door-Lock-System.jpg') }}" alt="Digital-Door-Lock-System.jpg" class="img-fluid">

                            <p class="product-name">Digital Door Lock System</p>
                            <p class="brand-name">Techshop Bangladesh</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 1193.24</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3584/Digital_Door_Lock_System_techshop_bangladesh.html?product_id=3584" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3235/Analog_IR_Sensor_Array_6_techshop_bangladesh.html?product_id=3235" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Analog-IR-Sensor-Array-6.jpg') }}" alt="Analog-IR-Sensor-Array-6.jpg" class="img-fluid">

                            <p class="product-name">Analog IR Sensor Array 6</p>
                            <p class="brand-name">Techshop Bangladesh</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 250.64</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3235/Analog_IR_Sensor_Array_6_techshop_bangladesh.html?product_id=3235" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section">
        <div class="product-list-header">
            <div class="d-flex align-items-center">
                <p class="title ml-0 mb-0">Starter Kits</p>
                <a href="home-details3a9f.html?id=6" class="btn btn-see__more mr-0 text-uppercase">See More</a>
            </div>
        </div>
        <div class="product-list-item">
            <div class="d-flex">
                <div  class="item js--product-item">
                    <a href="detail/1004/Basic_Kit_techshop_bangladesh.html?product_id=1004" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/basickit1.jpg') }}" alt="basickit1.JPG" class="img-fluid">

                            <p class="product-name">Basic Kit</p>
                            <p class="brand-name">Techshop Bangladesh</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 1571.82</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1004/Basic_Kit_techshop_bangladesh.html?product_id=1004" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1005/Soldering_Kit_techshop_bangladesh.html?product_id=1005" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Soldering-Kit-001.jpg') }}" alt="Soldering-Kit-001.jpg" class="img-fluid">

                            <p class="product-name">Soldering Kit</p>
                            <p class="brand-name">Pi Labs, Bangladesh </p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 829.4</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1005/Soldering_Kit_techshop_bangladesh.html?product_id=1005" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1137/Arduino_Starter_Kit_techshop_bangladesh.html?product_id=1137" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Arduino-Project-1.jpg') }}" alt="Arduino-Project-1.JPG" class="img-fluid">

                            <p class="product-name">Arduino Starter Kit</p>
                            <p class="brand-name">Pi Labs, Bangladesh </p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 2542.46</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1137/Arduino_Starter_Kit_techshop_bangladesh.html?product_id=1137" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/2498/Line_Following_Robot_Kit_with_Arduino_techshop_bangladesh.html?product_id=2498" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Line-Following-Robot-Kit-with-Arduino.jpg') }}" alt="Line-Following-Robot-Kit-with-Arduino.jpg" class="img-fluid">

                            <p class="product-name">Line Following Robot Kit with Arduino</p>
                            <p class="brand-name">Techshop Bangladesh</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 2997.93</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/2498/Line_Following_Robot_Kit_with_Arduino_techshop_bangladesh.html?product_id=2498" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/2092/Arduino_Advance_Learning_Kit_techshop_bangladesh.html?product_id=2092" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Arduino-Advance-Learning-Kit1.jpg') }}" alt="Arduino-Advance-Learning-Kit1.jpg" class="img-fluid">

                            <p class="product-name">Arduino Advance Learning Kit</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 2598.62</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/2092/Arduino_Advance_Learning_Kit_techshop_bangladesh.html?product_id=2092" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section">
        <div class="product-list-header">
            <div class="d-flex align-items-center">
                <p class="title ml-0 mb-0">Basic Robotics</p>
                <a href="browse/category97d4.html?id=120" class="btn btn-see__more mr-0 text-uppercase">See More</a>
            </div>
        </div>
        <div class="product-list-item">
            <div class="d-flex">
                <div  class="item js--product-item">
                    <a href="detail/2029/6DOF_Robotic_Arm_techshop_bangladesh.html?product_id=2029" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/6DOF-Robotic-Arm.jpg') }}" alt="6DOF-Robotic-Arm.jpg" class="img-fluid">

                            <p class="product-name">6DOF Robotic Arm</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 2998.46</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/2029/6DOF_Robotic_Arm_techshop_bangladesh.html?product_id=2029" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3501/L293D_Dual_DC_Motor_Controller_Red_techshop_bangladesh.html?product_id=3501" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/L293DDualDCMotorControllerRed.jpg') }}" alt="L293DDualDCMotorControllerRed.jpg" class="img-fluid">

                            <p class="product-name">L293D Dual DC Motor Controller Red</p>
                            <p class="brand-name">Techshop Bangladesh</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 365.97</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3501/L293D_Dual_DC_Motor_Controller_Red_techshop_bangladesh.html?product_id=3501" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3376/3DOF_Robotic_Arm_techshop_bangladesh.html?product_id=3376" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/3DOF-Robotic-Arm.jpg') }}" alt="3DOF-Robotic-Arm.jpg" class="img-fluid">

                            <p class="product-name">3DOF Robotic Arm</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 2490.25</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3376/3DOF_Robotic_Arm_techshop_bangladesh.html?product_id=3376" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1150/Pololu_3pi_Robot_techshop_bangladesh.html?product_id=1150" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Pololu-3pi-Robot_1.jpg') }}" alt="Pololu-3pi-Robot_1.jpg" class="img-fluid">

                            <p class="product-name">Pololu 3pi Robot</p>
                            <p class="brand-name">Pololu, USA</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 5971.01</p>
                                <p class="original-price"><strike>Tk. 8995.19</strike></p>
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1150/Pololu_3pi_Robot_techshop_bangladesh.html?product_id=1150" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/2804/AlphaBot2_robot_building_kit_for_Arduino_techshop_bangladesh.html?product_id=2804" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/AlphaBot2-robot-building-kit-for-Arduino_1.jpg') }}" alt="AlphaBot2-robot-building-kit-for-Arduino_1.jpg" class="img-fluid">

                            <p class="product-name">AlphaBot2 robot building kit for Arduino</p>
                            <p class="brand-name">Waveshare Electronics, China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 3868.37</p>
                                <p class="original-price"><strike>Tk. 5398.98</strike></p>
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/2804/AlphaBot2_robot_building_kit_for_Arduino_techshop_bangladesh.html?product_id=2804" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section">
        <div class="product-list-header">
            <div class="d-flex align-items-center">
                <p class="title ml-0 mb-0">Home Automation</p>
                <a href="browse/category46f5.html?id=129" class="btn btn-see__more mr-0 text-uppercase">See More</a>
            </div>
        </div>
        <div class="product-list-item">
            <div class="d-flex">
                <div  class="item js--product-item">
                    <a href="detail/3172/Amazon_Alexa_Echo_Dot_2_with_Case_techshop_bangladesh.html?product_id=3172" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Amazon-Alexa-Echo-Dot-2-with-Case.jpg') }}" alt="Amazon-Alexa-Echo-Dot-2-with-Case.jpg" class="img-fluid">

                            <p class="product-name">Amazon Alexa Echo Dot 2 with Case</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 3698.84</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3172/Amazon_Alexa_Echo_Dot_2_with_Case_techshop_bangladesh.html?product_id=3172" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3615/WiFi_IoT_Switch_Sonoff_4CH_Pro_R3_techshop_bangladesh.html?product_id=3615" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/WiFiIoTSwitchSonoff4CHProR301.jpg') }}" alt="WiFiIoTSwitchSonoff4CHProR301.jpg" class="img-fluid">

                            <p class="product-name">WiFi IoT Switch Sonoff 4CH Pro R3</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 3494.51</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3615/WiFi_IoT_Switch_Sonoff_4CH_Pro_R3_techshop_bangladesh.html?product_id=3615" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3351/WiFi_IoT_Switch_Sonoff_S20_Smart_Socket_techshop_bangladesh.html?product_id=3351" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/WiFi-IoT-Switch-Sonoff-S20-Smart-Socket-2.jpg') }}" alt="WiFi-IoT-Switch-Sonoff-S20-Smart-Socket-2.jpg" class="img-fluid">

                            <p class="product-name">WiFi IoT Switch Sonoff S20 Smart Socket</p>
                            <p class="brand-name">Made in China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 1399.31</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3351/WiFi_IoT_Switch_Sonoff_S20_Smart_Socket_techshop_bangladesh.html?product_id=3351" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3573/Automatic_Light_Controlled_Switch_techshop_bangladesh.html?product_id=3573" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Automatic-Light-Controlled-Switch_1.jpg') }}" alt="Automatic-Light-Controlled-Switch_1.jpg" class="img-fluid">

                            <p class="product-name">Automatic Light Controlled Switch</p>
                            <p class="brand-name">Techshop Bangladesh</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 464.94</p>
                                
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3573/Automatic_Light_Controlled_Switch_techshop_bangladesh.html?product_id=3573" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/3590/Automatic_Water_Pump_Controller_techshop_bangladesh.html?product_id=3590" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Automatic-Water-Pump-Controller-Price-in-BD.jpg') }}" alt="Automatic-Water-Pump-Controller-Price-in-BD.jpg" class="img-fluid">

                            <p class="product-name">Automatic Water Pump Controller</p>
                            <p class="brand-name">Techshop Bangladesh</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 1295.33</p>
                                <p class="original-price"><strike>Tk. 1850.47</strike></p>
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/3590/Automatic_Water_Pump_Controller_techshop_bangladesh.html?product_id=3590" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-section">
        <div class="product-list-header">
            <div class="d-flex align-items-center">
                <p class="title ml-0 mb-0">Products on Discount</p>
                <a href="home-detailsd61c.html?id=5" class="btn btn-see__more mr-0 text-uppercase">See More</a>
            </div>
        </div>
        <div class="product-list-item">
            <div class="d-flex">
                <div  class="item js--product-item">
                    <a href="detail/1829/Wifi_Shield_(Fi250)_V1.html?product_id=1829" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Wifi-Shield-(Fi250)-V1.1---2.jpg') }}" alt="Wifi-Shield-(Fi250)-V1.1---2.JPG" class="img-fluid">

                            <p class="product-name">Wifi Shield (Fi250) V1.1</p>
                            <p class="brand-name">Seeed Studio, China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 3649.17</p>
                                <p class="original-price"><strike>Tk. 4149.14</strike></p>
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1829/Wifi_Shield_(Fi250)_V1.html?product_id=1829" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1260/DSO_Nano_V3_Mini_Oscilloscope_techshop_bangladesh.html?product_id=1260" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/DSO-Nano-V3-Mini-Oscilloscope_1.jpg') }}" alt="DSO-Nano-V3-Mini-Oscilloscope_1.jpg" class="img-fluid">

                            <p class="product-name">DSO Nano V3 Mini Oscilloscope</p>
                            <p class="brand-name">Seeed Studio, China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 12199.81</p>
                                <p class="original-price"><strike>Tk. 12859.5</strike></p>
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1260/DSO_Nano_V3_Mini_Oscilloscope_techshop_bangladesh.html?product_id=1260" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1858/Spark_Core_-_WiFi_Development_Board_(Arduino_Compatible)_techshop_bangladesh.html?product_id=1858" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Spark-Core---WiFi-Development-Board-(Arduino-Compatible)-1.jpg') }}" alt="Spark-Core---WiFi-Development-Board-(Arduino-Compatible)-1.JPG" class="img-fluid">

                            <p class="product-name">Spark Core - WiFi Development Board (Arduino Compatible)</p>
                            <p class="brand-name">Seeed Studio, China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 3590.13</p>
                                <p class="original-price"><strike>Tk. 3990.36</strike></p>
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1858/Spark_Core_-_WiFi_Development_Board_(Arduino_Compatible)_techshop_bangladesh.html?product_id=1858" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/2804/AlphaBot2_robot_building_kit_for_Arduino_techshop_bangladesh.html?product_id=2804" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/AlphaBot2-robot-building-kit-for-Arduino_1.jpg') }}" alt="AlphaBot2-robot-building-kit-for-Arduino_1.jpg" class="img-fluid">

                            <p class="product-name">AlphaBot2 robot building kit for Arduino</p>
                            <p class="brand-name">Waveshare Electronics, China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 3868.37</p>
                                <p class="original-price"><strike>Tk. 5398.98</strike></p>
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/2804/AlphaBot2_robot_building_kit_for_Arduino_techshop_bangladesh.html?product_id=2804" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
                <div  class="item js--product-item">
                    <a href="detail/1672/Ultrathin_16x32_RGB_LED_Matrix_Panel_techshop_bangladesh.html?product_id=1672" class="item-link">
                        <div class="card">
                            <img src="{{ asset('image/product/Ultrathin-16x32-RGB-LED-Matrix-Panel.jpg') }}" alt="Ultrathin-16x32-RGB-LED-Matrix-Panel.jpg" class="img-fluid">

                            <p class="product-name">Ultrathin 16x32 RGB LED Matrix Panel</p>
                            <p class="brand-name">Seeed Studio, China</p>
                            <hr />
                            <div class="price d-flex justify-content-between align-items-center">
                                <p class="sell-price">Tk. 3290.14</p>
                                <p class="original-price"><strike>Tk. 3490.12</strike></p>
                            </div>
                        </div>
                    </a>
                    <div class="product-btn-wrapper js--product-btn">

<!--                            <a th:if="${product.quantity > 0}" name="add-to-cart" th:product-id="${product.productId}" class="btn btn-add-cart js&#45;&#45;add-to-cart"><img src="../../dist/common/images/cart-icon-hover.png" alt="icon"> Add to Cart</a>-->
                        <a href="detail/1672/Ultrathin_16x32_RGB_LED_Matrix_Panel_techshop_bangladesh.html?product_id=1672" class="btn btn-view-details">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="supplier-list-wrapper">
    <div class="content-section">
        <div class="supplier-list-header">
            <p class="title ml-0 mb-0">Our Supplier</p>
        </div>
        <div class="owl-carousel owl-theme supplier-owl-carousel">
            <div class="item">
                <a href="browse/supplier681a.html?id=1"><img src="{{ asset('image/supplier/sparkFun.jpg') }}" alt="sparkFun.jpg" class="img-fluid"></a>
                
                <p class="brand">SparkFun, USA</p>
            </div>
            <div class="item">
                <a href="browse/supplier0b30.html?id=2"><img src="{{ asset('image/supplier/Pi-Labs.jpg') }}" alt="Pi-Labs.jpg" class="img-fluid"></a>
                
                <p class="brand">Pi Labs, Bangladesh </p>
            </div>
            <div class="item">
                <a href="browse/supplierd708.html?id=3"><img src="{{ asset('image/supplier/logo-Pololu-white.png') }}" alt="logo-Pololu-white.png" class="img-fluid"></a>
                
                <p class="brand">Pololu, USA</p>
            </div>
            <div class="item">
                <a href="browse/supplierdcfd.html?id=4"><img src="{{ asset('image/supplier/SeeedStudio_logo.gif') }}" alt="SeeedStudio_logo.gif" class="img-fluid"></a>
                
                <p class="brand">Seeed Studio, China</p>
            </div>
            <div class="item">
                <a href="browse/supplierd61c.html?id=5"><img src="{{ asset('image/supplier/DFRobot_Logo_2.png') }}" alt="DFRobot_Logo_2.png" class="img-fluid"></a>
                
                <p class="brand">DFRobot, China</p>
            </div>
            <div class="item">
                <a href="browse/supplierc3c9.html?id=8"><img src="{{ asset('image/supplier/marketplace_logo1.jpg') }}" alt="marketplace_logo1.jpg" class="img-fluid"></a>
                
                <p class="brand">Marketplace, Bangladesh</p>
            </div>
            <div class="item">
                <a href="browse/supplier0055.html?id=11"><img src={{ asset('image/supplier/hobbyking-store-logo.png') }}" alt="hobbyking-store-logo.png" class="img-fluid"></a>
                
                <p class="brand">Hobbyking, Hong Kong</p>
            </div>
            <div class="item">
                <a href="browse/supplier6e03.html?id=13"><img src="{{ asset('image/supplier/techshopbd_1.jpg') }}" alt="techshopbd_1.jpg" class="img-fluid"></a>
                
                <p class="brand">Techshop Bangladesh</p>
            </div>
            <div class="item">
                <a href="browse/supplier87f1.html?id=14"><img src="{{ asset('image/supplier/logo.jpg') }}" alt="logo.jpg" class="img-fluid"></a>
                
                <p class="brand">Waveshare Electronics, China</p>
            </div>
            <div class="item">
                <a href="browse/supplier7429.html?id=15"><img src="{{ asset('image/supplier/adafruit-logo(1).png') }}" alt="adafruit-logo(1).png" class="img-fluid"></a>
                
                <p class="brand">Adafruit, USA</p>
            </div>
        </div>
    </div>
</section>




@endsection