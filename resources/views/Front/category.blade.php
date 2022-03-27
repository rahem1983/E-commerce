@extends('layout.front_layout.master3')

@section('content')

<input id="user_track" type="hidden" value="anonymousUser" />
                  <input id="category_track" type="hidden" value="2" />
                  <div class="main-content">
                     <div class="browse-header">
                        <p class="title text-capitalize text-center">Soldering</p>
                        <div class="d-flex align-items-center sort-wrapper">
                           <div class="list-type">
                              <a href="#" id="js--btn-list"><i class="fa fa-th-list"></i></a>
                              <!--                                    <a href="" id="js&#45;&#45;btn-column"><i class="fa fa-th ml-2"></i></a>-->
                           </div>
                           <p class="show-count">(Showing 1 to 26 of 26 products)</p>
                           <div class="sort">
                              <label for="sort" class="mr-2">Sort By: </label>
                              <select id="browse-filter" class="custom-control custom-select">
                                 <option value="" >Any</option>
                                 <option value="PRICE_ASC">Price - Low to High</option>
                                 <option value="PRICE_DESC">Price - High to Low</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="product-wrapper">
                        <div class="product-list" id="js--row-list">
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/5/Goot_Soldering_Iron_-_40W__techshop_bangladesh.html?product_id=5" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Goot-soldering-iron--40w.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/5/Goot_Soldering_Iron_-_40W__techshop_bangladesh.html?product_id=5" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Goot Soldering Iron - 40W </p>
                                       <p class="model">Model No: <span>TOL-00002</span></p>
                                       <p class="supply">Supplier: <span>Goot</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 710.59</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="5" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="5"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message5"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/10/Soldering_Iron_Stand_techshop_bangladesh.html?product_id=10" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Soldering-Iron-Stand.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/10/Soldering_Iron_Stand_techshop_bangladesh.html?product_id=10" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Soldering Iron Stand</p>
                                       <p class="model">Model No: <span>TOL-00010</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 106.38</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="10" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="10"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message10"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/554/Goot_Soldering_Iron_-_60W_techshop_bangladesh.html?product_id=554" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Goot-Soldering-Iron---60W_1.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/554/Goot_Soldering_Iron_-_60W_techshop_bangladesh.html?product_id=554" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Goot Soldering Iron - 60W</p>
                                       <p class="model">Model No: <span>TOL-00018</span></p>
                                       <p class="supply">Supplier: <span>Goot</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 813.39</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="554" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <p class="stock-text">Out of Stock</p>
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="554"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message554"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/965/KOOCU_Soldering_Iron_-_40W_techshop_bangladesh.html?product_id=965" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/KOOCU-Soldering-Iron---40W.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/965/KOOCU_Soldering_Iron_-_40W_techshop_bangladesh.html?product_id=965" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">KOOCU Soldering Iron - 40W</p>
                                       <p class="model">Model No: <span>TOL-00009</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 145.10</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="965" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <p class="stock-text">Out of Stock</p>
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="965"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message965"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/966/Solder_Lead_Mini_techshop_bangladesh.html?product_id=966" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Solder-Lead-Mini.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/966/Solder_Lead_Mini_techshop_bangladesh.html?product_id=966" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Solder Lead Mini</p>
                                       <p class="model">Model No: <span>TOL-00008</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 67.28</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="966" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="966"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message966"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/967/Solder_Sucker_(Low_Cost_Edition)_techshop_bangladesh.html?product_id=967" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/SolderSucker(LowCostEdition).jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/967/Solder_Sucker_(Low_Cost_Edition)_techshop_bangladesh.html?product_id=967" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Solder Sucker (Low Cost Edition)</p>
                                       <p class="model">Model No: <span>TOL-00019</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 69.26</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="967" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <p class="stock-text">Out of Stock</p>
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="967"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message967"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/968/Solder_Resin_techshop_bangladesh.html?product_id=968" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/DSC_1322.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/968/Solder_Resin_techshop_bangladesh.html?product_id=968" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Solder Resin</p>
                                       <p class="model">Model No: <span>TOL-00020</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 9.81</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="968" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="968"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message968"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/993/Glue_Gun_techshop_bangladesh.html?product_id=993" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/GlueGun_1.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/993/Glue_Gun_techshop_bangladesh.html?product_id=993" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Glue Gun</p>
                                       <p class="model">Model No: <span>TOL-00011</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 325.55</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="993" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="993"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message993"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/994/Glue_Gun_Stick_(Mini)_techshop_bangladesh.html?product_id=994" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Glue%20gun%20stick.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/994/Glue_Gun_Stick_(Mini)_techshop_bangladesh.html?product_id=994" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Glue Gun Stick (Mini)</p>
                                       <p class="model">Model No: <span>TOL-00006</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 9.99</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="994" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="994"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message994"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/995/Solder_Sucker_techshop_bangladesh.html?product_id=995" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Solder-Sucker01.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/995/Solder_Sucker_techshop_bangladesh.html?product_id=995" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Solder Sucker</p>
                                       <p class="model">Model No: <span>TOL-00005</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 139.34</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="995" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="995"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message995"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/1066/Adjustable_Soldering_Iron_techshop_bangladesh.html?product_id=1066" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Adjustable-Soldering-Iron_1.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/1066/Adjustable_Soldering_Iron_techshop_bangladesh.html?product_id=1066" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Adjustable Soldering Iron</p>
                                       <p class="model">Model No: <span>TOL-00026</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 385.72</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="1066" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="1066"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message1066"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/1362/Solder_Wick_5ft_techshop_bangladesh.html?product_id=1362" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/09327-Solder_Wick__2_5ft._-_Generic-02_600x.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/1362/Solder_Wick_5ft_techshop_bangladesh.html?product_id=1362" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Solder Wick 5ft</p>
                                       <p class="model">Model No: <span>TOL-00059</span></p>
                                       <p class="supply">Supplier: <span>Sparkfun,USA</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 377.97</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="1362" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="1362"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message1362"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/1551/Weller_WE1010_Soldering_Station_techshop_bangladesh.html?product_id=1551" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Weller-WE1010-Soldering-Station_1.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/1551/Weller_WE1010_Soldering_Station_techshop_bangladesh.html?product_id=1551" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Weller WE1010 Soldering Station</p>
                                       <p class="model">Model No: <span>TOL-00074</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 14609.86</p>
                                          <p class="original-price"><strike>TK. 15610.49</strike></p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="1551" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <p class="stock-text">Out of Stock</p>
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="1551"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message1551"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/1606/HAKKO_936_Soldering_Station_with_HAKKO_907_Iron_and_Stand_techshop_bangladesh.html?product_id=1606" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/HAKKO-936-Soldering-Station-with-HAKKO-907-Iron-and-Stand.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/1606/HAKKO_936_Soldering_Station_with_HAKKO_907_Iron_and_Stand_techshop_bangladesh.html?product_id=1606" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">HAKKO 936 Soldering Station with HAKKO 907 Iron and Stand</p>
                                       <p class="model">Model No: <span>TOL-00077</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 4949.65</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="1606" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <p class="stock-text">Out of Stock</p>
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="1606"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message1606"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/1610/Solder_Paste(150g)_techshop_bangladesh.html?product_id=1610" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Solder-Paste(150g).jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/1610/Solder_Paste(150g)_techshop_bangladesh.html?product_id=1610" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Solder Paste(150g)</p>
                                       <p class="model">Model No: <span>TOL-00081</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 75.25</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="1610" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="1610"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message1610"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/1722/Glue_Gun_Stick_techshop_bangladesh.html?product_id=1722" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/478003xl_1435776980.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/1722/Glue_Gun_Stick_techshop_bangladesh.html?product_id=1722" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Glue Gun Stick</p>
                                       <p class="model">Model No: <span>TOL-00090</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 14.97</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="1722" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="1722"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message1722"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/1730/Soldering_Station_with_Adjustable_Heat_Range_with_US_Plug_techshop_bangladesh.html?product_id=1730" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Soldering-Station-with-Adjustable-Heat-Range-with-US-Plug.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/1730/Soldering_Station_with_Adjustable_Heat_Range_with_US_Plug_techshop_bangladesh.html?product_id=1730" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Soldering Station with Adjustable Heat Range with US Plug</p>
                                       <p class="model">Model No: <span>TOL-00091</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 1849.86</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="1730" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="1730"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message1730"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/2006/Lodestar_Soldering_Iron_-_40W__techshop_bangladesh.html?product_id=2006" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/LodestarSolderingIron-40W-1_1.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/2006/Lodestar_Soldering_Iron_-_40W__techshop_bangladesh.html?product_id=2006" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Lodestar Soldering Iron - 40W </p>
                                       <p class="model">Model No: <span>TOL-00109</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 308.66</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="2006" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="2006"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message2006"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/2227/Soldering_Iron_30watt_12v_3s_XT60_Plug_techshop_bangladesh.html?product_id=2227" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Soldering-Iron-30watt-12v-3s-XT60-Plug.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/2227/Soldering_Iron_30watt_12v_3s_XT60_Plug_techshop_bangladesh.html?product_id=2227" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Soldering Iron 30watt 12v/3s XT60 Plug</p>
                                       <p class="model">Model No: <span>TOL-00130</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 1135.61</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="2227" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="2227"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message2227"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/2401/Goot_Soldering_Iron_-_100W_techshop_bangladesh.html?product_id=2401" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Goot-Soldering-Iron---100W1.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/2401/Goot_Soldering_Iron_-_100W_techshop_bangladesh.html?product_id=2401" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Goot Soldering Iron - 100W</p>
                                       <p class="model">Model No: <span>TOL-00146</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 1749.83</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="2401" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="2401"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message2401"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/2518/Heaterizer_XL-3000_Heat_Gun_techshop_bangladesh.html?product_id=2518" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Heaterizer-XL-3000-Heat-Gun.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/2518/Heaterizer_XL-3000_Heat_Gun_techshop_bangladesh.html?product_id=2518" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Heaterizer XL-3000 Heat Gun</p>
                                       <p class="model">Model No: <span>TOL-00156</span></p>
                                       <p class="supply">Supplier: <span>Sparkfun,USA</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 1455.73</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="2518" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="2518"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message2518"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/2607/Glue_Gun_(Mini)_techshop_bangladesh.html?product_id=2607" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Glue-Gun-Mini.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/2607/Glue_Gun_(Mini)_techshop_bangladesh.html?product_id=2607" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Glue Gun (Mini)</p>
                                       <p class="model">Model No: <span>TOL-00168</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 198.37</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="2607" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="2607"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message2607"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/2616/Lodestar_Soldering_Iron_-_60W_techshop_bangladesh.html?product_id=2616" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Lodestar-Soldering-Iron---60W_1.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/2616/Lodestar_Soldering_Iron_-_60W_techshop_bangladesh.html?product_id=2616" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Lodestar Soldering Iron - 60W</p>
                                       <p class="model">Model No: <span>TOL-00172</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 358.10</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="2616" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="2616"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message2616"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/2714/Solder_Paste_(Sn63_Pb37)_techshop_bangladesh.html?product_id=2714" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Solder-Paste-(Sn63-Pb37).jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/2714/Solder_Paste_(Sn63_Pb37)_techshop_bangladesh.html?product_id=2714" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Solder Paste (Sn63/Pb37)</p>
                                       <p class="model">Model No: <span>TOL-00184</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 376.97</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="2714" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="2714"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message2714"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/2923/Solder_Lead__(500gm)_techshop_bangladesh.html?product_id=2923" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Solder-Lead-(600gm).jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/2923/Solder_Lead__(500gm)_techshop_bangladesh.html?product_id=2923" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Solder Lead  (500gm)</p>
                                       <p class="model">Model No: <span>TOL-00224</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 815.60</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="2923" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <p class="stock-text">Out of Stock</p>
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="2923"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message2923"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="card">
                              <div class="d-flex align-items-center ml-0 mr-0">
                                 <a href="../detail/3730/Solder_Sucker_(366-D)_techshop_bangladesh.html?product_id=3730" class="ml-0 mr-0">
                                 <img height="100px" width="145px" src="{{ asset('image/product/Solder-Sucker-(366-D)_2.jpg')}}" alt="product" class="img-fluid">
                                 </a>
                                 <a href="../detail/3730/Solder_Sucker_(366-D)_techshop_bangladesh.html?product_id=3730" class="ml-5">
                                    <div class="product-info">
                                       <p class="product-name">Solder Sucker (366-D)</p>
                                       <p class="model">Model No: <span>MIS-00534</span></p>
                                       <div class="price d-flex align-items-center justify-content-between">
                                          <p class="sell-price mx-0">TK. 303.17</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="other-info mr-0">
                                    <div class="d-none">
                                       <p class="ml-0 label">Quantity: </p>
                                       <div class="input-group ml-2">
                                          <span class="input-group-btn" id="js--btn-minus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/minus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                          <input type="text" id="3730" class="form-control input-number bg-white"  value="1" min="1" readonly>
                                          <span class="input-group-btn" id="js--btn-plus">
                                          <button type="button" class="btn btn-number">
                                          <img src="../dist/common/images/plus-icon.png" alt="icon">
                                          </button>
                                          </span>
                                       </div>
                                    </div>
                                    <!--                                            <div th:if="${product.addToCart}" class="btn-cart">-->
                                    <!--                                                <a th:product-id="${product.id}" name="add-to-cart" class="btn"><img th:src="@{/dist/common/images/cart-icon-hover.png}" alt="icon" class="mr-1"> Add to Cart</a>-->
                                    <!--                                            </div>-->
                                    <div class="btn-list">
                                       <a name="saveToList" id="save-to-list" class="btn" product-id="3730"><i class="fa fa-heart mr-1"></i> Save to List</a>
                                    </div>
                                    <div class="btn-list center">
                                       <span class="message3730"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>


@endsection