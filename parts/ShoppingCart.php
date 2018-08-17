<!DOCTYPE html>
<html>
<head>

		<link rel="stylesheet" type="text/css" href="/utilities/bootstrapcss/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/ProiectFinalEnerEdAcademy/FinalProject.css">
        <link rel="stylesheet" type="text/css" href="/ProiectFinalEnerEdAcademy/Responsive.css">
        <link rel="stylesheet" type="text/css" href="/utilities/fontawesome/fontawesome-all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700,900" rel="stylesheet">


	<title>    Shopping Cart </title>
</head>
<body>
        <?php include("header.php");?>




        <div class="section14">
            <div class="container-fluid">
                <div class="container">
                    <div class="section15_titlebox">
                        <div class="main_title">
                                Shopping Cart
                        </div>
                        <div class="section_path">
                           <a href="#">  Home </a> > Shopping Cart
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section18">
            <div class="container-fluid">
                <div class="container container-nopadding">
                    <div class="row section18_inner">
                        <div class="col-lg-8 col-md-12">
                            <div class="sector27">
                                <div class="s27_title">
                                    Your Order
                                </div>
                                <div class="s27_item">
                                    <div class="s27_item_imgbox">
                                        <div class="s27_img">
                                            <img src="/ProiectFinalEnerEdAcademy/assets/cart1.jpg">
                                        </div>
                                        <div class="s27_item_name">
                                            JLB Headset
                                        </div>
                                    </div>
                                    <div class="s27_item_qnt">
                                        <input type="number" placeholder="Qnt: 1">
                                    </div>
                                    <div class="s27_item_price">
                                        $ 40
                                    </div>
                                    <div class="s27_remove_item">
                                        <a href="#"> <i class="fas fa-times"></i>  </a>
                                    </div>
                                </div>
                                 <div class="s27_item">
                                    <div class="s27_item_imgbox">
                                        <div class="s27_img">
                                            <img src="/ProiectFinalEnerEdAcademy/assets/cart2.jpg">
                                        </div>
                                        <div class="s27_item_name">
                                           BT Headset 
                                        </div>
                                    </div>
                                    <div class="s27_item_qnt">
                                        <input type="number" placeholder="Qnt: 1">
                                    </div>
                                    <div class="s27_item_price">
                                        $ 40
                                    </div>
                                    <div class="s27_remove_item">
                                        <a href="#"> <i class="fas fa-times"></i>  </a>
                                    </div>
                                </div>
                                 <div class="s27_item">
                                    <div class="s27_item_imgbox">
                                        <div class="s27_img">
                                            <img src="/ProiectFinalEnerEdAcademy/assets/cart3.jpg">
                                        </div>
                                        <div class="s27_item_name">
                                            iPhone 6 
                                        </div>
                                    </div>
                                    <div class="s27_item_qnt">
                                        <input type="number" placeholder="Qnt: 1">
                                    </div>
                                    <div class="s27_item_price">
                                        $ 40
                                    </div>
                                    <div class="s27_remove_item">
                                        <a href="#"> <i class="fas fa-times"></i>  </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="row">
                                <div class=" col-12 sector28_cupon">
                                    <div class="s28_title">
                                        Cupon Code
                                    </div>
                                    <div class="s28_cupon_content">
                                        <div class="s28_desc">
                                                Click on a coupon code to apply
                                        </div>
                                        <div class="s28_cupon_entry">
                                            <div class="s28_input">
                                                <input type="text" placeholder="Apply Cupon Code">
                                            </div>
                                            <div class="s28_cupon_button">
                                                <a href="#"> Apply Now </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 sector29_cart_total">
                                    <div class="s29_title">
                                            Cart Totals
                                    </div>
                                    <div class="s29_carttotal_content">
                                        <div class="s29_subtotal">
                                            <div >  Sub Total </div>
                                            <div style="font-weight: 600;">  160.00 $ </div>
                                        </div>
                                        <div class="s29_order_total">
                                            <div>   Order Total  </div>
                                            <div style="color: aqua; font-weight: 600;">  160.00 $ </div>
                                        </div>
                                        <div class="s29_order_button">
                                            <a href="#"> Proceed to checkout </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


             <?php include("footer.php");?>


    <script src="/utilities/jquery/jquery.js"></script>
    <script src="/utilities/popper/popper.js"></script>	
    <script src="/utilities/bootstrapjs/bootstrap.min.js"></script>
    <script src="/ProiectFinalEnerEdAcademy/FinalProject.js"></script>

</body>
</html>