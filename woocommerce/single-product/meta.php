<?php

/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

global $product;
?>
<div class="product_meta">

    <?php do_action('woocommerce_product_meta_start'); ?>

    <?php if (wc_product_sku_enabled() && ($product->get_sku() || $product->is_type('variable'))) : ?>

        <span class="sku_wrapper"><?php esc_html_e('SKU:', 'woocommerce'); ?> <span class="sku"><?php echo ($sku = $product->get_sku()) ? $sku : esc_html__('N/A', 'woocommerce'); ?></span></span>

    <?php endif; ?>

    <?php echo wc_get_product_category_list($product->get_id(), ', ', '<span class="posted_in">' . _n('Category:', 'Categories:', count($product->get_category_ids()), 'woocommerce') . ' ', '</span>'); ?>

    <?php echo wc_get_product_tag_list($product->get_id(), ', ', '<span class="tagged_as">' . _n('Tag:', 'Tags:', count($product->get_tag_ids()), 'woocommerce') . ' ', '</span>'); ?>
    <?php $additionalReferences = array('user_manual', 'data_sheet', 'driver_a', 'driver_b', 'driver_c', 'additional_items_a', 'additional_items_b', 'additional_items_c'); ?>

    <style>
        .single_product_references {
            margin: 5px;
            padding: 10px;
        }
        /* CSS Document */

/* 
    OUR COLORS: 
    Orange: #fc7019;
    Light Blue:;
    Dark Blue:;
*/

#leftmenu li{
    line-height:14px;
    font-size:11px;
    list-style-image: none;
    list-style-position: outside;
    list-style-type: none;
    margin-bottom: 0px;
    margin-left: 10px;
    margin-right: 0px;
    margin-top: 0px;
    padding-bottom: 3px;
    padding-left: 2px;
    padding-right: 10px;
    padding-top: 3px;
    position: relative;
    text-align: left;
    }
    
    #topbanner{
    width:100%;
    height:35px;
    background-image:url(images/topbg.jpg);
    background-repeat:repeat-x;
    }
    
    #topbannercontent{
    width:1024px;
    margin:0 auto;
    }
    
    #topbannerright{
    float:right;
    height:35px;
    line-height:35px;
    color:white;
    font-size:13px;
    font-weight:bold;
    margin-top:-1px;
    }
    
    .wrap_content p {
        color: black;
    }
    
    .show_page select{
        min-width: 70px;
        text-align: center;
        margin-left: 7px;
    }
    
    .sortbyprice select{
        text-align: center;
        margin-left: 7px;
    }
    
    .cart{
    margin-left:16px;
    }
    
    .french{
    margin-left:21px;
    }
    
    .spanish{
    margin:0 18px;
    }
    
    #topbannerright img{
    vertical-align:middle;
    }
    
    #topbannerright span.toplinks{
    line-height:35px;
    }
    
    #topbannerright span.toplinks a{
    color:white;
    text-decoration:none;
    }
    
    .subscribeblank{
    line-height:27px; height:27px; width:240px; margin:3px 0 2px 2px; border-left:none; border-top:1px solid #c6c6c6; border-left:1px solid #c6c6c6; border-bottom:1px solid #c6c6c6; font-style:italic; color:#818181; width:222px; font-size:11px; text-align:right; padding-right:8px; float:left;
    }
    
    #contentcontainer{
    width:100%;
    background-image:url(images/topshadow.jpg);
    background-repeat:repeat-x;
    background-position:top;
    }
    
    /* #content{
    width:1024px;
    margin:0 auto;
    } */
    
    #headercontent{
    height:85px;
    width:1024px;
    position:relative;
    }
    
    #headercontent .rightside{
    width:460px;
    float:right;
    height:100%;
    }
    
    #headercontent .help{
    height:50px;
    }
    
    #headercontent .search{
    margin-top:0px;
    height:44px;
    text-align:right;
    position:relative;
    }
    #headercontent .search input.searchblank{
    height:30px; width:240px; margin-right:0; border-left:none; border-top:1px solid #c6c6c6; border-left:1px solid #c6c6c6; border-bottom:1px solid #c6c6c6; padding-left:8px; line-height:30px;
    }
    .searchbutton{
     border:none; margin-left:0; background-color:#db3f04; color:white; font-weight:bold; border-radius:0 3px 3px 0;
    background-image:url(images/searchicon.jpg);
    background-position:middle center;
    background-repeat:repeat-x;
    height:32px;
    width:30px;
    margin-right:8px;
    float:right;
    }
    
    .advancedsearchbutton{
    height:32px; border:none; background-color:#db3f04; color:white; font-weight:bold;  border-radius:3px;
    background-image:url(images/searchbuttonbg.jpg);
    background-repeat:repeat-x;
    background-position:top center;
    text-shadow:1px 1px 2px rgba(0,0,0,0.8);
    font-size:14px;
    line-height:12px;
    font-weight:bold;
    
    position: relative;
    padding:0 16px;
    margin:0;
    float:right;
    display:table-cell;
    vertical-align:top;
    width:100px;
    }
    
    button::-moz-focus-inner, input[type="reset"]::-moz-focus-inner, 
    input[type="button"]::-moz-focus-inner, 
    input[type="submit"]::-moz-focus-inner, 
    input[type="file"] > input[type="button"]::-moz-focus-inner {
        padding: 0;
        border: 0;
        margin:0;
        
    }
    
    
    .livehelpbutton{
    float:right;
    }
    
    .freetech{
    color: #fd0002;
    font-size: 14px;
    text-align: right;
    font-weight: bold;
    float: right;
    margin-right: 6px;
    margin-top: 3px;
    
    }
    
    .phonenumbers{
    color: black;
    font-size: 14px;
    text-align: right;
    font-weight: bold;
    float: right;
    margin-right: 6px;
    margin-top: 0px;
    }
    
    #headercontent h2.tagline{
    width: 380px;
    float: left;
    font-size: 16px;
    line-height: 23px;
    color: #000000;
    margin-left: 25px;
    margin-top: 50px;
    margin-bottom: 0px;
    }
    
    #homepagebanner{
    min-height:430px;
    width:1024px;
    margin:0 auto;
    background-color:#ffffff;
    }
    
    #navbar{
    height:41px;
    background-image:url(images/menugraybg.jpg);
    background-position:top;
    background-repeat:repeat-x;
    width:100%;
    line-height:41px;
    /*overflow:hidden;*/
    }
    
    #navbar a{
    color:black;
    text-decoration:none;
    }
    
    #navbar ul li:hover{
    background-color:rgba(0,0,0,0.1);
    }
    
    #navbar ul, #navbar li{
    list-style:none;
    margin:0;
    padding:0;
    line-height:41px;
    }
    
    #navbar li{
    background-image:url(images/menuitemleftbackground.jpg);
    background-repeat:no-repeat;
    background-position:left center;
    font-size:13px;
    font-weight:bold;
    float:left;
    }
    
    #navbar li.shopbycategory{
    
    width:140px;
    background-image:url(images/menuredbg.jpg);
    background-position:top;
    background-repeat:repeat-x;
    color:white;
    font-weight:bold;
    
    }
    
    #navbar li.shopbycategory div{
    background-image:url(images/menureditemrightbackground.jpg);
    background-repeat:no-repeat;
    background-position:right top;
    padding:0 14px;
    font-size:16px;
    height:35px;
    line-height:16px;
    padding-top:6px;
    }
    
    #navbar li.shopbycategory .shopby{
    margin-top:6px;
    font-size:11px;
    line-height:14px;
    
    }
    
    
    #navbar li div{
    background-image:url(images/menuitemrightbackground.jpg);
    background-repeat:no-repeat;
    background-position:right center;
    padding:0 0px;
    }
    
    #navbar li div a{
    padding:12px;
    
    }
    
    #navbar li.navlogin{
        width:72px;
        background-image:url(images/menuredbg.jpg);
        background-position:top;
        background-repeat:repeat-x;
        color:white;
        font-weight:bold;
        padding-left: 10px;
        box-sizing: border-box;
        margin-right: -7px;
    }
    
    #navbar li.navlogin div{
        background-image:url(images/menureditemrightbackground.jpg);
        background-repeat:no-repeat;
        background-position:right top;
        padding:0 14px;
        font-size:16px;
        height:35px;
        line-height:16px;
        padding-top:6px;
        margin-left: 10px;
        width:72px;
    
    }
    
    #leftmenu{
    background-color:#333333;
    color:white;
    background-image:url(images/leftmenuleftbackground.jpg);
    background-position:left top;
    background-repeat:no-repeat;
    height:417px;
    width:187px;
    float:left;
    }
    
    #leftmenu li{
    margin:0 0 0 10px;
    font-size:12px;
    font-weight:bold;
    color:white;
    /*background-image:url(images/leftmenugrayarrow.jpg);*/
    background-position:right center;
    background-repeat:no-repeat;
    padding:3px 10px 3px 2px;
    border-bottom:1px solid #444;
    z-index:0;
    }
    
    #leftmenu ul{
    list-style:none;
    margin:0;
    padding:4px 0 0 0;
    font-size:12px;
    font-weight:bold;
    color:white;
    z-index:0;
    }
    
    #homepagebannershadow{
    height:0px;
    width:1024px;
    }
    
    /*********************************/
    
    
    #productboxes-store-front{
    width:840;
    height:208px;
    margin:0 0px 0 0;
    overflow:hidden;
    position: relative;
    left: 11px;
    top: 10px;
    }
    
    #productboxes-store-front #productslidecontainer-store-front{
    width:950px;
    overflow:hidden;
    float:left;
    }
    
    #productboxes-store-front #productslidecontainer-store-front #productslide-store-front {
    width:1900px;
    position:relative;
    }
    
    .productsleftarrow, .productsrightarrow{
    cursor:pointer;
    }
    
    #productboxes-store-front .productbox-store-front{
    height:190px;
    width:190px;
    border:1px solid #d8d8d8;
    background-image:url(images/productbluebg.jpg);
    background-position:top;
    background-repeat:repeat-x;
    position:relative;
    }
    
    #productboxes-store-front .productbox-store-front h3{
    text-align:center;
    font-size:14px;
    color:white !important;
    line-height:29px;
    margin:0; padding:0;
    text-shadow:0px 0px 4px rgba(0,0,0,1);
    }
    
    
    #productboxes-store-front .productboxcontainer-store-front {
    /* background-image:url(images/productboxshadow.jpg); */
    background-position:bottom center;
    background-repeat:no-repeat;
    padding-bottom:15px;
    float:left;
    margin:8px 8px;
    }
    
    .productbox-store-front img{
    margin:4px auto 0 auto;
    text-align:center;
    }
    
    .productbox-store-front p{
        color:#494d4c;
        font-size:11px;
        font-weight:bold;
        margin:-6px 4px 0 4px;
        text-align: center;
        line-height:11px;
    }
    
    .productbox-store-front div.price{
    position:absolute;
    left:45px;
    bottom:0;
    width:95px;
    height:28px;
    background-image:url(images/industrypricebg.jpg);
    background-position:bottom;
    background-repeat:repeat-x;
    border-radius:4px 4px 0 0;
    color:white;
    text-shadow:1px 1px 2px rgba(0,0,0,1);
    font-weight:bold;
    font-size:12px;
    line-height:28px;
    text-align:center;
    }
    #relatedproducts-store-front .productbox-store-front div.price{
    background-image:url(images/relatedpricebg.jpg);
    }
    .productbox-store-front div.price a{
    text-decoration:none;
    color:white;
    text-shadow:1px 1px 2px rgba(0,0,0,1);
    font-weight:bold;
    font-size:11px;
    line-height:28px;
    text-align:center;
    }
    
    
    /*********************************/
    
    
    #productboxes{
    width:1024px;
    min-height:315px;
    overflow:hidden;
    margin-left: 0%;
    }
    
    #productboxes #productslidecontainer{
    width:950px;
    overflow:hidden;
    float:left;
    }
    
    #productboxes #productslidecontainer #productslide{
    width:1900px;
    position:relative;
    }
    
    .productsleftarrow, .productsrightarrow{
    cursor:pointer;
    }
    
    #productboxes .productbox{
    height:290px;
    width:219px;
    border:1px solid #d8d8d8;
    background-image:url(images/productbluebg.jpg);
    background-position:top;
    background-repeat:repeat-x;
    position:relative;
    }
    
    #productboxes .productbox h3{
    text-align:center;
    font-size:15px;
    color:white !important;
    line-height:29px;
    margin:0; padding:0;
    text-shadow:0px 0px 4px rgba(0,0,0,1);
    }
    
    
    #productboxes .productboxcontainer{
    padding-bottom:15px;
    float:left;
    margin:10px 8px;
    }
    
    .productbox img{
    margin:4px auto 0 auto;
    text-align:center;
    }
    
    .productbox p{
        color:#494d4c;
        font-size:10px;
        font-weight:bold;
        margin:-6px 4px 0 4px;
        text-align: center;
        line-height:11px;
    }
    
    .productbox div.price a{
    text-decoration:none;
    color:white;
    text-shadow:1px 1px 2px rgba(0,0,0,1);
    font-weight:bold;
    font-size:11px;
    line-height:28px;
    text-align:center;
    }
    #productboxes .arrow{
    width:27px;
    float:left;
    padding-top:90px;
    }
    
    
    
    h3.shopbyindustries{
    background-image:url(images/redunderline.jpg);
    background-repeat:no-repeat;
    background-position:bottom left;
    padding-bottom:8px;
    padding-left:52px;
    padding-top:0px;
    font-size:23px;
    color:black;
    }
    
    #shopbyindustry{
    padding:0 14px;
    position:relative;
    width:998px;
    overflow:hidden;
    height:348px;
    }
    
    div.industrybox{
    position:relative;
    width:235px;
    overflow:hidden;
    height:154px;
    float:left;
    margin-right:6px;
    margin-left:6px;
    background-color:#cccccc;
    margin-top:10px;
    margin-bottom:10px;
    }
    
    div.industrybox img{
    position:absolute;
    top:0;
    left:0;
    z-index:100;
    }
    
    .industrybox .copy{
    position:absolute;
    bottom:0;
    left:0;
    width:100%;
    height:59px;
    background: rgb(60,60,60);
    background-color:rgba(0,0,0,0.8);
    color:white;
    z-index:200;
    }
    
    .industrybox .copy p{
    margin:0px 0px 0px 5px;
    font-size:10px;
    width:155px;
    }
    
    .industrybox .copy h3{
    margin-left:5px;
    line-height:26px;
    margin-bottom:0px;
    margin-top:0;
    font-size:18px;
    color:white;
    }
    
    .industrybox .readmore{
    width:76px;
    height:26px;
    background-image:url(images/yellowbuttonbg.jpg);
    background-position:top;
    background-repeat:repeat-x;
    position:absolute;
    right:-1px;
    bottom:0;
    color:black;
    line-height:26px;
    font-size:10px;
    font-weight:bold;
    text-align:center;
    text-shadow:1px 1px 0 rgba(255,255,255,0.7);
    }
    #bannercontainer .slide p.headline{
    font-size:16px !important;
    line-height:24px;
    margin-top:24px;
    }
    p.homepagedisclaimer{
    font-size:10px !important;
    }
    
    .industrybox .readmore a{
    color:black;
    text-decoration:none;
    }
    
    
    .last{
    margin-right:0px !important;
    }
    
    #footerpromo{
    width:1024px;
    height:135px;
    background-image:url(images/footerbluebackground.jpg);
    background-repeat:repeat-x;
    background-position:top center;
    margin-top:40px;
    position:relative;
    padding-top:4px;
    }
    
    #footerpromo div{
    float:left;
    margin:4px;
    text-align:center;
    }
    #footerpromo div img{
    text-align:center;
    margin:0 auto;
    }
    
    
    #footerbottom{
    min-height: 333px;
    width: 1024px;
    background-color: #cccccc;
    background-image: url(images/footergraybackground.jpg);
    background-repeat: repeat-x;
    background-position: top center;
    }
    
    #footerbottom2{
    min-height: 333px;
    width: 1024px;
    background-color: #cccccc;
    background-image: url(images/footergraybackground.jpg);
    background-repeat: repeat-x;
    background-position: top center;
    }
    
    #footerbottom .footercolumn{
    float:left;
    width:140px;
    margin:6px 15px;
    }
    
    #footerbottom .footercolumn a{
    color:black;
    text-decoration:none;
    }
    
    #footerbottom .footercolumn2{
    float:left;
    width:140px;
    margin:6px 15px;
    text-align: left;
    }
    
    #footerbottom .footercolumn2 a{
    color:black;
    text-decoration:none;
    }
    
    #footerbottom .footercolumn ul, #footerbottom .footercolumn ul li{
    list-style:none;
    margin:0;
    padding:0;
    font-size:13px;
    }
    
    #footerbottom .footercolumn2 ul, #footerbottom .footercolumn2 ul li{
    list-style:none;
    margin:0;
    padding:0;
    font-size:11px;
    }
    
    #footerbottom .footercolumn h5, #footerbottom .footercolumn h5 a{
    color:#de0c0f;
    margin-bottom:10px;
    margin-top:10px;
    font-size: 14px;
    padding-left: 5px;
    }
    
    #footerbottom .footercolumn2 h5, #footerbottom .footercolumn2 h5 a{
    color:#de0c0f;
    margin-bottom:10px;
    margin-top:10px;
    }
    
    #footerbottomsocial .footercolumn{
    float:left;
    width:240px;
    padding-left: 10px;
    }
    
    #footerbottomsocial .footercolumn{
    float:left;
    width:240px;
    padding-left: 10px;
    text-align: left;
    }
    
    #socialcolumn {
        position: relative;
        bottom: 40px;
        left: 10px;
        padding: 0px 0px 0px 0px;
    }
    
    #bannercontainer-front-store{
    width:837px;
    height:417px;
    overflow:hidden;
    position:relative;
    border: 1px solid #d8d8d8;
    }
    
    
    .slidebuttons{
    position:absolute;
    bottom:0;
    right:0;
    z-index:1001;
    background:black;
    background:rgba(0,0,0,.5);
    padding:0 10px;
    }
    
    .whitebuttons{
    position:inherit !important;
    display:block !important;
    width:100%;
    background:none !important;
    text-align:center;
    height:15px;
    top:inherit;
    right:inherit;
    bottom:10px;
    }
    
    .whitebuttons .slidebutton{
    border:2px solid #cccccc;
    padding:0;
    width:10px !important;
    height:10px !important;
    border-radius:10px !important;
    overflow:hidden;
    display:inline-block;
    float:none;
    } 
    
    .slidebutton{
    background:white;
    
    box-shadow:1px 1px 5px black;
    padding:6px;
    margin:10px 5px;
    border-radius:20px;
    float:left;
    z-index:1001;
    cursor:pointer;
    }
    
    
    .whitebuttons .slidebuttonactive{
    border-radius:10px;
    background-color:#525252;
    margin:10px 5px;
    border:2px solid #cccccc;
    } 
    
    .slidebuttonactive {
      border:1px solid #777777;
      border-radius:18px;
      margin:9px 5px;
      background:black;
    
    }
    
    
    
    
    
    #bannercontainer .leftarrow{
    position:absolute;
    left:0;
    top:148px;
    z-index:1000;
    cursor:pointer;
    width:30px;
    height:55px;
    background:rgba(255,255,255,0.6);
    line-height:55px;
    text-align:center;
    font-size:30px;
    color:white;
    font-weight:bold;
    font-family:arial black, arial;
    }
    
    #bannercontainer .rightarrow{
    position:absolute;
    right:0;
    top:148px;
    z-index:1000;
    cursor:pointer;
    width:30px;
    height:55px;
    background:rgba(255,255,255,0.6);
    line-height:55px;
    text-align:center;
    font-size:30px;
    color:white;
    font-weight:bold;
    font-family:arial black, arial;
    }
    
    #bannercontainer .slide{
    width:837px;
    height:417px;
    color:white;
    position:absolute;
    z-index:900;
    background-color:white;
    }
    
    
    #productboxes .slide{
    width:950px;
    float:left;
    z-index:900;
    background:white;
    display:none;
    position:absolute;
    top:0;
    left:38px;
    }
    
    #productboxes .leftarrow{
    position:absolute;
    left:0;
    z-index:9999;
    cursor:pointer;
    }
    #productboxes .rightarrow{
    position:absolute;
    right:0px;
    z-index:9999;
    cursor:pointer;
    }
    
    #productboxes{
    position:relative;
    }
    
    #productboxes .active{
    z-index:950;
    display:block !important;
    }
    
    #productboxes .sliding{
    z-index:951;
    display:block !important;
    }
    
    #productboxes .active{
    z-index:950;
    }
    
    
    #shopbyindustry .slide{
    width:1000px;
    left:19px;
    z-index:900;
    background:white;
    display:none;
    position:absolute;
    }
    
    #shopbyindustry .leftarrow{
    position:absolute;
    left:0;
    top:165px;
    z-index:9999;
    cursor:pointer;
    }
    #shopbyindustry .rightarrow{
    position:absolute;
    right:0px;
    top:165px;
    z-index:9999;
    cursor:pointer;
    
    }
    
    #shopbyindustry .active{
    z-index:950;
    display:block !important;
    }
    
    #shopbyindustry .sliding{
    z-index:951;
    display:block !important;
    }
    
    #shopbyindustry .active{
    z-index:950;
    }
    
    
    
    #bannercontainer .active{
    z-index:950;
    }
    
    #bannercontainer .sliding{
    z-index:951;
    }
    
    #bannercontainer .slide div {
    display: inline-block;
    background-color:none;
    margin-top: 10px;
    padding: 10px 20px;
    border-radius: 8px;
    /* float: right; */
    width: 309px;
    }
    
    #bannercontainer .slide h2, #bannercontainer .slide h1{
    font-size:34px;
    line-height:38px;
    width:309px;
    color:white;
    margin:0px 0 0 0px;
    text-shadow:1px 1px 2px rgba(0,0,0,1);
    }
    #bannercontainer .slide h2.smaller{
    font-size:25px;
    line-height:30px;
    }
    
    #bannercontainer .slide p{
    margin-left:0px;
    width:280px;
    font-size:12px;
    line-height:18px;
    font-weight:bold;
    text-shadow:2px 2px 2px rgba(0,0,0,1);
    }
    #bannercontainer .slide button{
    height:30px; border:none; background-color:#db3f04; color:white; font-weight:bold;  border-radius:3px;
    background-image:url(images/searchbuttonbg.jpg);
    background-repeat:repeat-x;
    background-position:top center;
    text-shadow:1px 1px 2px rgba(0,0,0,0.8);
    font-size:12px;
    line-height:12px;
    font-weight:bold;
    margin-top:-5px;
    top: -7px;
    position: relative;
    padding:0 16px;
    margin-top:20px;
    }
    
    img.cogs{
    position:absolute;
    right:0;
    bottom:5px;
    }
    
    p.freeexperttech{
    text-align:left;
    font-weight:bold;
    margin:12px 2px;
    font-size:18px;
    line-height:20px;
    }
    
    p.freeexperttech span.freeexperttechnical{
    color:#ffff01;
    }
    
    p.freeexperttech span.phonenumber{
    
    color:white;
    }
    button, .subscribebutton, .searchbutton, .advancedsearchbutton{
    cursor:pointer;
    }
    .linedivider{
    height:100px; background-color:#000a33; width:1px; margin-top:15px !important;
    }
    .oneyearwarranty{
    margin-top:10px !important;
    margin-left:10px !important;
    }
    
    /* ------------------  PRODUCT PAGE CSS ----------------------------------- */
    #main {
        background: white none repeat scroll 0 0;
        float: left;
        margin-top: 20px !important;
        min-height: 1045px;
        width: 100% !important;
    }
    
    #productmain{
        width: 100%;
        min-height: 390px;
        float:left;
        padding:2px 26px;
        /*border-bottom: 2px solid #E2E2E2;*/
        -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
        -moz-box-sizing: border-box;    /* Firefox, other Gecko */
        box-sizing: border-box;
        /*border-left: 1px solid #e2e2e2;
        border-right: 1px solid #e2e2e2;*/
    }
    
    html body #docsmain, html body #categorymain{
    /*width:836px;*/
    margin-top:20px !important;
    float:left;
    padding:2px 20px 0px 20px;
    -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box;
    box-shadow: 0px 1px 1px #dddddd;
    border-left:1px solid #dddddd;
    border-right:1px solid #dddddd;
    border-bottom:1px solid #dddddd;
    min-height:1045px;
    padding-bottom:20px;
    }
    
    #docsmain.cartdiv, #docsmain, #categorymain{
    width: 821px !important;
    float: left;
    padding: 2px 26px 26px 26px;
    margin: 40px 0px 0px 16px !important;
    background-image: url(images/carttopbg.jpg);
    background-position: top;
    background-repeat: repeat-x;
    position: relative;
    }
    
    #docsmain.cartdiv .cartgraphic, #docsmain .cartgraphic, #docsmain .cornergraphic, #categorymain .cornergraphic{
    position:absolute;
    right:14px;
    top:-17px;
    }
    
    
    
    #docsmain.cartdiv h1{
    /*margin: 12px 0 60px;*/
    width:100%;
    color: #186CBE;
    }
    
    #docsmain h1{
    margin: 16.57px 0 48px;
    color: #186CBE;
    }
    
    .breadcrumbs-wrapper{
        border-bottom: 2px solid #e2e2e2;
    }
    .breadcrumbs{
        line-height:28px;
        font-size:10px;
        padding-bottom: 20px !important;
        margin: 0;
    }
    
    .categorybreadcrumb{
    margin-bottom:0px;
    margin-left:16px;
    float:left;
    }
    /* FOR THE NEW PRODUCT PAGE */
    #productimagecontainer-wrapper{
        display: inline-block;
        position: relative;
        width: 100%;
        margin: auto;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }
    #productimagecontainer-wrapper > #productimagecontainer{
        display: inline-block;
        width: 45%;
        padding: 0.5em;
        max-width: 100% !important;
    }
    #productimagecontainer-wrapper > #productimagecontainer > #mainimage{
        display: flex;
        align-items: center;
        float:right;
        margin-right: 2rem;
    }
    #productimagecontainer-wrapper > #productimagecontainer > #mainimage  img{
        max-width: 75%;
        max-height: 75%;
    }
    #productimagecontainer-wrapper > #productimagecontainer > .additionalimages{
        float:right;
        margin-top: 0;
        margin-right: 2rem;
    }
    #productimagecontainer-wrapper > #productimagecontainer > .additionalimages > div{
        display: block;
        margin: 5px;
    }
    #productimagecontainer-wrapper > #productimagecontainer > .additionalimages > div > img{
        display: block;
        max-width: 100%;
        max-height: 100%;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }
    #productimagecontainer-wrapper > .product_header_desc{
        display: inline-block;
        width: 45%;
        padding: 0.5em;
    }
    #productimagecontainer-wrapper > .product_header_desc > .productactions {
        width: 100%;
    }
    
    #productimagecontainer{
        max-height:400px;
        float:left;
        padding-bottom: 10px;
    }
    #productimagecontainer #mainimage{
        width:260px;
        height:260px;
        border:2px solid rgba(11,11,11,0.15);
        display: table-cell; vertical-align: middle;
        cursor:url(images/zoom_in.png), -webkit-zoom-in !important;
        text-align:center;
    }
    #productimagecontainer #mainimage:hover{
        transition: 0.2s;
        border-color: rgba(11,11,11,0.5);
        /* -webkit-box-shadow: 3px 3px 5px -1px rgba(0,0,0,0.5);
        -moz-box-shadow: 3px 3px 5px -1px rgba(0,0,0,0.5);
        box-shadow: 3px 3px 5px -1px rgba(0,0,0,0.5); */
    }
    #productimagecontainer #mainimage img{
        display: table-cell; vertical-align: middle; text-align:center; margin:auto;
        max-height:100%;
        max-width:100%;
        height:auto;
        width:auto;
        cursor:url(images/zoom_in.png), -webkit-zoom-in !important;
    }
    #productimagecontainer a{
        cursor:url(images/zoom_in.png), -webkit-zoom-in !important;
    }
    
    #productimagecontainer .additionalimages{
        margin:8px 0 0 0;
        border-spacing:7px 0;
        width: 260px;
    }
    
    #productimagecontainer .additionalimages div{
        border:1px solid rgba(11,11,11,0.25);
        margin:5px 5px 0 0px;
        width:54px;
        height:54px;
        display: table-cell;
        vertical-align: middle;
        text-align:center;
        cursor:pointer;
        float: left;
    }
    #productimagecontainer .additionalimages div:hover{
        transition: 0.2s;
        transform: scale(1.05,1.05);
        border: 1px solid rgba(11,11,11,0.5);
        -webkit-box-shadow: 3px 3px 5px -1px rgba(11, 11, 11,0.25);
        -moz-box-shadow: 3px 3px 5px -1px rgba(11, 11, 11,0.25);
        box-shadow: 3px 3px 5px -1px rgba(11, 11, 11,0.25);
    }
    #productimagecontainer .additionalimages div img{
        max-width:100%;
        max-height:100%;
        width:auto;
        height:auto;
        display:table-cell;
        vertical-align:middle;
        margin:0 auto;
    
    }
    .addtocartbuttons div {
    display: inline-block;
    height: 34px;
    vertical-align: bottom;
    margin: 0px 1px 8px 0 !important;
    padding: 0 3px;
    font-size:11px;
    }
    
    .addtocartbuttons2 div {
    display: inline;
    margin-top: 20px;
    height: 34px;
    vertical-align: bottom;
    margin: 0px 1px 8px 0 !important;
    padding: 3px 10px;
    font-size:10px;
    position: relative;
    bottom:  5px;
    }
    
    .bigbutton.red{
        background: #31328e; /* Old browsers */
        background-position:top;
        background-repeat:repeat-x;
        border-radius:4px;
        padding:0 12px;
        display:inline-block;
        color:white;
        font-weight:bold;
        margin-right:10px !important;
        border: 1px solid rgba(0,0,0,0);
    }
    .bigbutton.red:hover{
        background-color: white !important;
        
        color: #fc7019 !important;
        border-color: #fc7019 !important;
        /* color: #fd0916 !important; */
        /* border-color: #fd0916 !important; */
    }
    .button_product {
            -moz-appearance: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            appearance: none;
            -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            -ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            background-color: transparent;
            border-radius: 6px;
            border: 0;
            box-shadow: inset 0 0 0 1px #e2eaec;
            color: #fc7019 !important;
            /* color: #fd0916 !important; */
            cursor: pointer;
            display: inline-block;
            line-height: 45px;
            text-transform: capitalize;
            padding: .6px;
            text-align: center;
            text-decoration: none;
            white-space: nowrap;
            font-family: 'Raleway', sans-serif !important;
            font-weight: bold;
            width: 350px;
        
            
            
        }
        
    
            
    
            .button_product.medium {
                font-size: 14px;
                letter-spacing: 0;
                font-family: 'Raleway', sans-serif;
            
          
                
                
                        }
            
            .button_product.medium:hover {
                font-size: 14px;
                letter-spacing: 0;
                font-family: 'Raleway', sans-serif;
                background: none;
                text-transform: capitalize;
                
                        }
            
    
            .button_product.special {
                background-color: #fc7019 !important;
                /* background-color: #fd0916 !important; */
                box-shadow: none !important;
                color: #ffffff !important;
                
            }
    
                
    
                
                .button_product.special:hover {
                    background-color: #7f7d7d !important;
                     
                }
    
    .bigbutton{
        background-color: #fc7019 !important;
        /* background-color: #fd0916 !important; */
        background-position: top!important;
        background-repeat: repeat-x!important;
        -moz-appearance: none;
        border-radius:3px!important;
        padding: 0.25rem 1.5rem !important;
        display: inline-block !important;
        color:white !important;
        font-weight: 600 !important;
        margin-right: 10px !important;
        line-height: 2rem !important;
        cursor: pointer !important;
        font-family: "Raleway",sans-serif !important;
        text-align: center !important;
        text-decoration: none !important;
        text-transform: capitalize !important;
        /* transition: background-color 0.2s ease-in-out 0s, color 0.2s ease-in-out 0s, box-shadow 0.2s ease-in-out 0s !important; */
        white-space: nowrap !important;
        transition: 0.2s;
    } 
    
    .bigbutton .redbold:hover{
        color: white !important;
    }
    
    .searchheader .bigbutton {
        line-height: 26px !important;
    }
    
    .searchheader .bigbutton:hover {
        background-color: #7f7d7d !important;
    }
    
    .button{
        background-color: #fc7019 !important;
        /* background-color: #fd0916 !important; */
        background-position:top!important;
        background-repeat:repeat-x!important;
        -moz-appearance: none;
        border-radius:3px!important;
        padding: 0.6px 30px !important;
        display:inline-block !important;
        color:white!important;
        font-weight:bold!important;
        margin-right:10px !important;
        line-height: 45px !important;
        cursor: pointer !important;
        font-family: "Raleway",sans-serif !important;
        text-align: center !important;
        text-decoration: none !important;
        text-transform: capitalize !important;
        transition: background-color 0.2s ease-in-out 0s, color 0.2s ease-in-out 0s, box-shadow 0.2s ease-in-out 0s !important;
        white-space: nowrap !important;
        font-size: 16px !important;
        border: 1px solid;
    } 
    
    #wait {display: none;}
    
    .button:hover {
        background-color: white !important;
        text-decoration: none;
        color: #fc7019 !important;
        /* color: #fd0916 !important; */
    }
    
    .tech_support_form #send_request {
        width: auto;
    }
    .tech_support_form #reset_request {
        width: auto;
    }
    
    
    /*.bigbutton {
        -moz-appearance: none;
        background-color: #f87525;
        border: 0 none;
        border-radius: 6px;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-family: Arial,Helvetica,sans-serif;
        font-size: 13px;
        font-weight: 800;
        height: 35px;
        min-width: 125px;
        padding: 3px 10px 0;
        text-align: center;
        text-decoration: none;
        text-transform: none;
        transition: background-color 0.2s ease 0s, box-shadow 0.2s ease 0s, color 0.2s ease 0s;
        white-space: nowrap;
        z-index: 999;
    }*/
    
    .bigbuttonProductPageAddToCart {
        background-color: #fc7019 !important;
        /* background-color: #fd0916 !important; */
        background-position:top!important;
        background-repeat:repeat-x!important;
        -moz-appearance: none;
        border-radius: 2px!important;
        /* padding: 0.6px 30px !important; */
        display:inline-block !important;
        color:white!important;
        /* font-weight: 500 !important; */
        line-height: 1em;
        padding: 0.85em;
        /* line-height: 45px !important; */
        cursor: pointer !important;
        font-family: "Raleway",sans-serif !important;
        text-align: center !important;
        text-decoration: none !important;
        /* text-transform: capitalize !important; */
        transition: background-color 0.2s ease-in-out 0s, color 0.2s ease-in-out 0s, box-shadow 0.2s ease-in-out 0s !important;
        white-space: nowrap !important;
        margin-right:10px !important;
        margin-left: 5px !important;
        margin-bottom: 33px !important;
        margin-top: 18px;
        font-size: 16px;
        letter-spacing: 0.05em;
        /* text-shadow: 1px 1px 2px rgba(0,0,0,.6); */
        border: 1px solid;
    }
    
    .bigbuttonProductPageAddToCart:hover {
        background-color: white !important;
        color: red !important;
    }
    
    .bigbuttonProductPage {
    background: #f6f6f6; /* Old browsers */
    background: -moz-linear-gradient(top, #f6f6f6 0%, #f6f6f6 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f6f6f6), color-stop(100%,#f6f6f6)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #f6f6f6 0%,#f6f6f6 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #f6f6f6 0%,#f6f6f6 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #f6f6f6 0%,#f6f6f6 100%); /* IE10+ */
    background: linear-gradient(to bottom, #f6f6f6 0%,#f6f6f6 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f6f6f6', endColorstr='#f6f6f6',GradientType=0 ); /* IE6-9 */
    background-position:top;
    background-repeat:repeat-x;
    border-radius:0px;
    padding:0px 12px 0px 12px;
    display:inline-block;
    color: #babcbc;
    font-size: 10px;
    font-weight:bold;
    text-shadow:0px 0px 0px rgba(0,0,0,.6);
    margin-right:10px !important;
    margin-left: 10px !important;
    border-style: solid;
    border-width: 1px;
    }
    .bigbuttonProductPage a {
    text-decoration: none;
    color: #2e2e2e;
    }
    
    .bigbuttonProductPage .mailicon{
    background-image:url(/images/mailicon2.png);
    background-position:left;
    background-repeat:no-repeat;
    padding-left: 18px;
    }
    
    .bigbuttonProductPage .staricon{
    background-image:url(/images/staricon2.png);
    background-position:left;
    background-repeat:no-repeat;
    padding-left: 18px;
    }
    
    .priceProductPageColor {
    color: #FF0000;
    }
    
    .searchproductdescription .bigbutton{
    font-size: 12px !important;
    margin-top: 0px;
    line-height: 30px !important;
    }
    
    .getpriceprice .bigbutton .shorter{
    font-size: 16px;
    margin-top: 0px;
    }
    
    .searchproductdescription .addtocart:hover {
        color: white !important;
    }
    
    .bigbutton.blue{
    background-color: #176cbd !important; /* Old browsers */
    }
    
    .bigbutton.orange{
    background-color: #f89923 !important; /* Old browsers */
    }
    
    .bigbutton.gray{
        -moz-appearance: none;
        background-color: #c3c3c3 !important;
        background-position: center top !important;
        background-repeat: repeat-x !important;
        border-radius: 6px !important;
        color: white !important;
        cursor: pointer !important;
        display: inline-block !important;
        font-family: Arial,Helvetica,sans-serif;
        font-weight: bold !important;
        line-height: 40px !important;
        padding: 0.6px 15px !important;
        text-align: center !important;
        text-decoration: none !important;
        text-transform: capitalize !important;
        transition: background-color 0.2s ease-in-out 0s, color 0.2s ease-in-out 0s, box-shadow 0.2s ease-in-out 0s !important;
        white-space: nowrap !important;
        width: 120px;
        margin-right: 0 !important;
    }
    .bigbutton.gray a{
    color:black;
    font-size:11px;
    text-transform:none;
    text-shadow:1px 1px 1px rgba(255,255,255,.7);
    }
    .bigbutton .staricon{
    background-image:url(/images/staricon.png);
    background-position:left;
    background-repeat:no-repeat;
    padding-left: 18px;
    }
    .bigbutton .mailicon{
    background-image:url(/images/mailicon.png);
    background-position:left;
    background-repeat:no-repeat;
    padding-left: 18px;
    }
    .bigbutton .carticon{
    background-image:url(/images/carticon.png);
    background-position:left;
    background-repeat:no-repeat;
    padding-left: 24px;
    }
    
    .bigbutton strong {color: white;}
    
    .bigbuttonProductPageAddToCart .carticon{
    background-image:url(/images/carticon.png);
    background-position:left;
    background-repeat:no-repeat;
    padding-left: 24px;
    }
    
    .searchproductdescription .bigbutton, .getpricebutton .bigbutton {
        background-color: #fc7019; /* Old browsers */
        /* background-color: #fd0916; Old browsers */
        background-position:top;
        background-repeat:repeat-x;
        border-radius: 2px;
        padding: 0.6px 30px;
        display: inline-block;
        color: white;
        margin-right:10px !important;
        width: auto !important;
        text-transform: capitalize;        
        line-height: 45px;
        font-family: "Raleway",sans-serif !important;
        transition: background-color 0.2s ease-in-out 0s, color 0.2s ease-in-out 0s, box-shadow 0.2s ease-in-out 0s !important;
        white-space: nowrap !important;
        text-decoration: none;
        border: 1px solid;       
    }
     
    .getpricebutton .bigbutton {
        float: none !important;
        width: 94px !important;
        height: auto;
    }
    
    .bigbutton:hover{
        text-decoration: none; 
        color: #fc7019 !important; 
        /* color: #fd0916 !important;  */
        background-color: rgba(0,0,0,0) !important;
    }
    .bigbutton.checkout:hover{text-decoration: none; color: white;}
    .bigbutton.generatequote:hover{text-decoration: none; color: white;}
    .button:hover{text-decoration: none; color: white;}
    
    .chamberone table{width: 100%;}
    .chamberone .options_search table {width: 100%; line-height: 25px;}
    
    #productmain h1{
    color:#ff0305;
    font-size:22px;
    margin: 0px 0 2px 0;
    display: block;
    }
    #productdescription p{
    margin:2px;
    font-size: 14px;
    }
    
    #productmain h2, #productmain h1 span{
    color:#186CBE;
    font-size:16px;
    }
    
    
    #productmain p{
    font-size:14px;
    line-height:20px;
    }
    
    div.options, div.price{
    width:100px;
    font-size:13px;
    display:inline-block;
    }
    
    select.options{
    max-width: 295px;
    font-size: 18px;
    margin-top: 20px;
    height: 44px !important;
    text-align: center;
    }
    
    div.pricenumber{
    /*width:95px;*/
    font-size:22px;
    font-weight:bold;
    color:#fe0002;
    display:inline-block;
    }
    
    #productmain #productdescription{
    height: auto;
    padding-bottom: auto;
    max-width: 100%;
    }
    
    #productheader{
    height:100px;
    border-right:none;
    border-left:none;
    margin-top:50px;
    border-bottom: 2px solid #e5e5e5;
    }
    
    #productheader a{
    width:254px;
    height:36px;
    margin-top:12px;
    line-height:36px;
    display:block;
    float:left;
    text-align:center;
    border-right:1px solid #747474;
    font-size:14px;
    font-weight:bold;
    width: 24%;
    }
    
    #productheader a.last{
    border-right:none;
    }
    
    #features, #reference, #specifications{
    padding-top:25px !important;
    position:relative;
    overflow:hidden;
    border-bottom: 2px solid #e5e5e5 !important;
    padding-bottom: 25px !important;
    }
    
    #reference .gears{
    width:145px;
    height:217px;
    background-image:url(images/gears-product-page.png);
    background-position:bottom right;
    bottom:0;
    right:0;
    position:absolute;
    background-repeat:no-repeat;
    }
    
    #reference li{
    display:block;
    float:left;
    width:275px;
    line-height:25px;
    font-size:14px;
    }
    
    #features, #reference {
    padding:20px 29px 20px 29px;
    }
    #specifications {
        border-bottom: none !important;
    }
    #specifications table{
    margin:0 auto;
    }
    
    #productinfocontainer{
    border-right:none !important;
    border-left:none !important;
    border-bottom:2px solid #e5e5e5;
    }
    
    table td, #productinfocontainer td{
    font-size:14px;
    line-height:18px;
    padding:10px;
    }
    
    #productinfocontainer .heading, #productinfocontainer .heading span, #productinfocontainer .heading div{
    font-size:12px;
    font-weight:bold;
    }
    .heading{
    color:black;
    }
    
    #productinfocontainer p{
    font-size:14px;
    line-height:20px;
    }
    
    #relatedproducts #productboxes .productbox img{
    text-align:center;
    margin:0 auto;
    display:block;
    }
    
    #relatedproducts #productboxes .productbox .pricenumber, .pricenumberrelative{
    font-weight: bold !important;
    color: #fe0002 !important;
    font-size: 13px !important;
    bottom: 30px;
    left: 50%;
    display: block;
    width: 100px;
    margin: 5px 0 0 25% !important;
    }
    #relatedproducts #productboxes .leftarrow, #relatedproducts #productboxes .rightarrow{
    top:95px;
    }
    a.addtocart{
    text-decoration:none;
    color:white;
    }
    
    a.addtocart:hover{
        text-decoration:none;
        color:white;
    }
    
    img.relatedproduct{
    height:95px;
    width:auto;
    max-width: 215px;
    }
    div.RoHS{
    float:right;
    padding-right: 25px;
    }
    html body .fblikebutton{
    float:left;
    padding:0;
    margin:0;
    }
    
    html body .fblikebuttonProductPage{
    padding:0;
    margin:0;
    
    bottom: 7px;
    }
    
    .RoHS img{
    width:100px;
    height:auto;
    margin-left:14px;
    }
    .fb_iframe_widget{
    padding-top:6px;
    }
    
    
    
    
    #leftmenu a{
    text-decoration:none;
    margin:0px;
    display:block;
    color:white;
    /*color:white;
    font-family: Arial, Helvetica, sans-serif;
    text-shadow: black 1px 1px 2px;
    font-weight:bold;*/
    }
    #leftmenu ul { /* all lists */
        list-style: none;
        font-weight:bold;
        width:164px;
        
    }
    #leftmenu ul li ul{
    padding:0;
    }
    #leftmenu ul li ul li{
    background-image:none;
    }
    #leftmenu li.haschildren{
    background-image: url(images/leftmenugrayarrow.jpg);
    background-position: right center;
    background-repeat: no-repeat;
    }
    #leftmenu li { /* all list items */
        float: left;
        position: relative;
        text-align:left;
        font-weight:bold;
        font-size:11px;
        width:164px;
        font-size: 12px;
    }
    
    #leftmenu li ul li{ /* 2nd level list */
        text-align:left;
        /*border-top:1px solid #bac6df;*/
        width:100%;
        font-weight:bold;
        font-size:11px;
    /*	background-color:#627ebd;*/
    }
    
    #leftmenu li ul li:hover{
    background-color:#464646;
    }
    
    #leftmenu li a:hover{
    background-color:#464646;
    }
    
    
    
    #leftmenu li ul { /* second-level lists */
        
        display: none;
        position: absolute;
        top: 0px;
        left: 174px;
        width:174px;
        font-weight:bold;
        background-color:#333333;
    }
    
    #leftmenu li ul li {
    display:block;
    background-color:#333333;
    }
    
    
    #leftmenu li>ul { /* to override top and left in browsers other than IE, which will position to the top right of the containing li, rather than bottom left */
        /*top: auto;
        left: auto;*/
    }
    #leftmenu li:hover{
    background-color:#464646;
    }
    
    
    #leftmenu li:hover ul, #leftmenu li.over ul { /* lists nested under hovered list items */
        display: block;
        z-index:1000;
        background-color:#333333;
    }
    
    #leftmenu li:hover ul li ul, #leftmenu li:hover ul li:hover ul li ul, #leftmenu li:hover ul li:hover ul li:hover ul li ul, #leftmenu li:hover ul li:hover ul li:hover ul li:hover ul li ul{
    display:none;
    }
    
    #leftmenu li:hover ul li:hover ul, #leftmenu li:hover ul li:hover ul li:hover ul, #leftmenu li:hover ul li:hover ul li:hover ul li:hover ul, #leftmenu li:hover ul li:hover ul li:hover ul li:hover ul li:hover ul{
    display:block;
    background-color:#333333;
    }
    
    #leftmenu #content {
        clear: left;
    }
    #leftmenu ul.leftmenu li{padding:1px 0px}
    
    .left{
    float:left;
    margin:10px;
    }
    
    .docsleftmenu{
    display:none;
    position:absolute;
    }
    
    .docsnavbar li.shopbycategory div{
    background-image:url(images/categorydown.png) !important;
    background-position:right top;
    background-repeat:no-repeat;
    }
    
    html .docsnavbar li.shopbycategoryhover div{
    background-image:none !important;
    background-position:right top;
    background-repeat:no-repeat;
    }
    
    .tabletoprow{
    background-color:#176cbd;
    color:white;
    font-weight:bold;
    text-align:left;
    padding-left:6px;
    }
    
    .tabletoprow.total{
    text-align:right;
    padding-right:6px;
    }
    table.carttable{
    border-spacing:0;
    border-collapse: collapse;
    width:100%;
    margin-top:20px;
    }
    
    table.carttable td{
    padding:4px;
    }
    
    table.carttable p.descriptiontitle{
    font-size:16px;
    margin:0;
    }
    
    table.carttable p.description{
    font-size:11px;
    color:#7e7e7e;
    margin:0;
    }
    
    table.carttable p.descriptionViewCart{
    font-size:11px;
    color:#000000;
    margin:0;
    }
    
    table.carttable .itemquantity{
    font-size:16px;
    font-weight:bold;
    width:35px;
    height:27px;
    line-height:27px;
    text-align:center;
    }
    
    table.carttable .itemprice{
    font-size:16px;
    color:#878787;
    text-align:left;
    }
    
    table.carttable .itempriceViewCart{
    font-size:11px;
    color:#000000;
    text-align:left;
    }
    
    table.carttable .itemtotal{
    font-size:16px;
    font-weight:bold;
    }
    
    table.carttable .warrantytotal{
    font-weight:14px;
    }
    
    table.carttable .warrantytext{
    font-size:12px;
    text-align:left;
    }
    table.carttable .extendedwarranty{
    text-align:right;
    width:100%;
    }
    
    table.carttable tr.itemsecondrow td{
    border-bottom:2px solid #e5e5e5;
    margin-bottom:8px;
    }
    
    table.carttable tr.itemsecondrow td table tr td{
    border:none;
    }
    
    table.carttable td{
    padding-top:14px;
    }
    table.carttable td table tr td{
    padding-top:0;
    }
    .bigbutton.checkout{
    float:right;
    margin-right:10px !important;
    border:none;
    cursor:pointer;
    }
    .bigbutton a{
    color:white;
    text-decoration:none;
    }
    .bigbutton a:hover{
    color:white;
    text-decoration:none;
    }
    p.micetype{
    margin:2px;
    color:#ff1612;
    font-size:9px;
    }
    .bigbutton.generatequote{
    float:right !important;
    }
    .estimatedtotal{
    font-size:18px;
    font-weight:bold;
    line-height:30px;
    margin:18px 0;
    }
    .estimatedtotalred{
    font-size:18px;
    font-weight:bold;
    }
    
    .subscribenewsletter{
    }
    
    .subscribenewsletter:nth-of-type(1){
    }
    
    .subscribenewsletter p{
    }
    
    .subscribenewsletter p span.joinournewsletter{
    
    }
    
    .subscribenewsletter form{
    
    }
    
    .glow{
    box-shadow:0px 0px 6px rgba(255,255,255,0.8) !important;
    border:1px solid white;
    }
    
    .subscribenewsletter .subscribebutton{
    
    }
    
    table.previousnewsletter{
    width:43%;
    float:left;
    margin-bottom:20px;
    margin-left: 7%;
    }
    
    hr{
        border: 0;
        width: 100%;
    }
    
    #newsstories hr{
    margin:0;
    background-image:none;
    border:1px solid #cccccc;
    width:inherit;
    height:inherit;
    }
    table.previousnewsletter th, table.previousnewsletter td, table.previousnewsletter td a{
    font-weight:normal;
    text-align:left;
    vertical-align:middle;
    font-size:12px;
    padding:0px;
    margin:0;
    color:#186CBE;
    text-decoration:none;
    border-collapse:collapse;
    line-height:20px;
    }
    
    table.previousnewsletter td a:hover{
    text-decoration:underline;
    
    }
    
    html table.previousnewsletter tr th .newsletterheader{
    font-size:16px;
    color:#ff000c;
    font-weight:bold;
    line-height:36px;
    
    }
    #categorymain, #categorymain p, #docsmain, #docsmain p{
    font-size: 14px;
    line-height: 15px;
    margin-top: 6px;
    }
    #categorymain h1{
    margin-bottom:33px;
    }
    div.category{
    float:left;
    width:375px;
    position:relative;
    font-size:9px;
    line-height:14px;
    -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box;         /* Opera/IE 8+ */
    margin-bottom:12px;
    
    }
    div.category p{
    font-size:11px;
    line-height:18px;
    }
    div.category img{
    max-width:95%;
    height:auto;
    }
    a img{
    border:none;
    }
    div.category.odd{
    clear:left;
    }
    div.category h2, div.category h2 a{
    color:black;
    text-decoration:none;
    font-size:15px;
    line-height:16px;
    }
    div.category h2:hover, div.category h2:hover a{
    color:black;
    text-decoration: underline;
    font-size:15px;
    line-height:16px;
    }
    
    div.category .categorytitle{
    height:57px;
    background-image:url(images/categoryh2.jpg);
    background-position:top;
    background-repeat:repeat-x;
    box-shadow:2px 2px 6px rgba(0,0,0,0.4);
    margin-bottom: 16px;
    }
    div.category h2{
    background-position:top;
    background-repeat:repeat-x;
    padding-left:16px;
    display:block;
    padding-top: 16px !important;
    width:300px;
    margin-top:0;
    }
    div.category .categorydescription{
    padding:0 16px;
    font-size: 12px;
    line-height: 16px;
    }
    .categorydescription{
    padding-top:16px;
    }
    div.category.odd{
    border-top-left-radius:9px;
    overflow:hidden;
    
    
    }
    div.category.even{
        border-top-right-radius:9px;
        overflow:hidden;
    }
    .categoryimage{
        max-height:65px;
        max-width:65px;
        height:auto;
        width:auto;
        top:4px !important;
        right:4px !important;
    }
    .categorycontainer, .categoryproductcontainer{
        width: 750px;
        position:relative;
        background-position:top center;
        background-repeat:repeat-y;
    }
    
    .categoryproductcontainer{
        border-left:1px solid #d2d2d2;
        border-right:1px solid #d2d2d2;
        border-bottom: 1px solid #d2d2d2;
        margin-top:0;
        width:804px; 
        margin-left:0;
    }
    
    .categoryproductimage{
        float:left;
        padding: 10px 10px 10px 10px;
        width:15%;
        text-align:center;
    }
    
    .categoryproductimage img{
        max-width:100px;
        max-height:100px;
        height:auto;
        width:auto;
        margin:0 auto;
        display:table-cell;
        vertical-align:middle;
    }
    /* .categoryproduct:hover .categoryproductimage img{
        transition: 0.3s;
        transform: scale(1.15,1.15);
    } */
    
    .categoryproduct{
        float:left;
        width:100%;
        position:relative;
        font-size:11px;
        line-height:15px;
        -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
        -moz-box-sizing: border-box;    /* Firefox, other Gecko */
        box-sizing: border-box;         /* Opera/IE 8+ */
        margin-bottom: 0px;
        padding-left:0px;
        padding-right:0px;
        padding-top: 10px;
        padding-bottom: 10px;
        min-height: 120px;
        border-top:1px solid rgba(11,11,11,0.5);
    }
    
    .listitems_search_box{
        margin: 0;
        border:1px solid rgba(11,11,11,0.5);
    }
    
    
    p.pagelist{
    text-align:center;
    }
    
    p.pagelist.second{
        padding-top: 20px;
        width: 100%;
    }
    
    p.pagelist a, span.currentpage{
        line-height:40px;
        padding:4px;
        color:#656565;
        text-decoration:none;
        box-shadow:0px 0px 0px 1px #d9d9d9;
        font-weight:bold;
        margin:0 3px;
    }
    p.pagelist a:hover{
        transition: 0.2s;
        color: #fc0c00;
    }
    
    .details{
        background-color: #c3c3c3 !important;
        background-position:top!important;
        background-repeat:repeat-x!important;
        -moz-appearance: none;
        border-radius:6px!important;
        padding: 0.6px 15px !important;
        display:inline-block !important;
        color:black!important;
        font-weight:bold!important;
        margin-right:10px !important;
        line-height: 40px !important;
        cursor: pointer !important;
        font-family: "Raleway",sans-serif !important;
        text-align: center !important;
        text-decoration: none !important;
        text-transform: capitalize !important;
        transition: background-color 0.2s ease-in-out 0s, color 0.2s ease-in-out 0s, box-shadow 0.2s ease-in-out 0s !important;
        white-space: nowrap !important;
    }
    
    a.details:hover {
        color: white !important;
        background-color: #7f7d7d !important;
    }
    
    .details-left-button {
        display: block;
        padding: 0.6px 15px;
        margin:5px 10% !important;
        width: 80%;
        color:black;
        text-decoration:none !important;
        background-color: #c3c3c3;
        font-weight:normal;
        border-radius:6px;
        text-align: center;
        font-size: 10px;
        line-height: 23px;
    }
    
    .details-left-button:hover {
        background-color: #7f7d7d;
        color: white !important;
    }
    
    .details-left-button-large {
        display: block;
        padding: 0.6px 15px;
        margin: 1em 10% !important;
        width: 80% !important;
        height: 27px;
        color:black;
        text-decoration:none;
        background-color: #c3c3c3;
        font-weight:normal;
        border-radius:6px;
        text-align: center;
        font-size: 10px;
        line-height: 23px;
    }
    
    .details-left-button-large:hover {
        background-color: #7f7d7d;
        color: white;
    }
    
    .details-left-button-bigger {
        display: block;
        padding:0 18px;
        margin:4px 3px;
        width: 51px;
        color:black;
        text-decoration:none;
        background: #c3c3c3; /* Old browsers */
        background: -moz-linear-gradient(top,  #fbfbfb 0%, #c3c3c3 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbfbfb), color-stop(100%,#c3c3c3)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* IE10+ */
        background: linear-gradient(to bottom,  #fbfbfb 0%,#c3c3c3 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#c3c3c3',GradientType=0 ); /* IE6-9 */
        box-shadow:0px 0px 0px 1px #d9d9d9;
        font-weight:normal;
        border-radius:2px;
        text-align: center;
        font-size: 10px;
    }
    
    #details-left-button-search-by-protocol {
        display: block;
        padding: 0.6px 15px;
        margin:5px 10%;
        width: 80%;
        color:black;
        text-decoration:none;
        background-color: #c3c3c3;
        font-weight:normal;
        border-radius:6px;
        text-align: center;
        font-size: 10px;
        line-height: 15px;
    }
    
    #details-left-button-search-by-protocol:hover {
        background-color: #7f7d7d;
        color: white;
    }
    
    #details-left-button-multiple-protocol {
        display: block;
        padding: 0.6px 15px;
        margin:5px 10%;
        width: 80%;
        color:black;
        text-decoration:none;
        background-color: #c3c3c3;
        font-weight:normal;
        border-radius:6px;
        text-align: center;
        font-size: 10px;
        line-height: 15px;
    }
    #details-left-button-multiple-protocol:hover{
        background-color: #7f7d7d;
        color: white;
    }
    
    
    .details-left-button-search-boxes {
        background-color: #f65f30 !important;
        box-shadow: none !important;
        color: #ffffff !important;
        font-family: "Raleway",sans-serif;
        font-size: 12px !important;
        margin-top: 0 10%;
        text-decoration: none;
        width: 80%;
        border-radius: 6px;
        box-shadow: 0 0 0 1px #e2eaec inset;
        font-family: "Raleway",sans-serif !important;
        line-height: 10px;
        text-transform: capitalize !important;
        cursor: pointer;
        display: inline-block;
        padding-top: 15px !important;
        margin-right: 15px;    
        
    }
            
    
            .details-left-button-search-boxes.small {
                font-size: 12px!important;
                letter-spacing: 1!important;
                font-family: 'Raleway', sans-serif;
                width: 100px;
                margin-top: 10px!important;
                text-decoration: none;
            }
          
                
                
                        
            
            .details-left-button-search-boxes.small:hover {
                font-size: 12px!important;
                letter-spacing: 1!important;
                font-family: 'Raleway', sans-serif;
                background: none;
                text-transform: capitalize;
                 width: 100px;
                text-decoration: none;
                 margin-top: 10px!important;
                        }
            
    
            .details-left-button-search-boxes.special {
                background-color: #f65f30 !important;
                box-shadow: none !important;
                color: #ffffff !important;
                
            }
    
                
    
                
                .details-left-button-search-boxes:hover {
                    background-color: #7f7d7d !important;
                     text-decoration: none !important;
                }
    
                .articles-menu-button {
                    color:#777 !important;
                    text-decoration:none;
                    background-color: #eee !important;
                    font-weight:unset;
                    margin: 10px 1px !important;
                    border-radius:2px !important;
                    font-size: 12px !important;
                    padding: 4px 5px !important;
                    line-height: 16px !important;
                }
    .articles-menu-button:hover{
        color:#777 !important;
        background-color: #d7d7d7 !important;
    }
    .detailsP{
    margin-top:10px !important;
    }
    
    .categoryproductdescription a.addtocart, #docsmain a.addtocart, .categoryproductdescription a.addtocartdocs, #docsmain a.addtocartdocs{
    /*
    OLD RED BACKGROUND
    background-color:#f60000;
    background-image: linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
    background-image: -o-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
    background-image: -moz-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
    background-image: -webkit-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
    background-image: -ms-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
    background: -moz-linear-gradient(top,  #900002,  #f60000);
    
    background-image: -webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(1, rgb(144,0,2)),
        color-stop(0, rgb(246,0,0))
    );
    */
    
        background-color: #fc7019 !important;
        /* background-color: #fd0916 !important; */
        background-position:top!important;
        background-repeat:repeat-x!important;
        -moz-appearance: none;
        border-radius:6px!important;
        padding: 0.6px 15px !important;
        display:inline-block !important;
        color:white!important;
        font-weight:bold!important;
        margin-right:10px !important;
        line-height: 40px !important;
        cursor: pointer !important;
        font-family: "Raleway",sans-serif !important;
        text-align: center !important;
        text-decoration: none !important;
        text-transform: capitalize !important;
        transition: background-color 0.2s ease-in-out 0s, color 0.2s ease-in-out 0s, box-shadow 0.2s ease-in-out 0s !important;
        white-space: nowrap !important;
    }
    
    .categoryproductdescription a.addtocart:hover, #docsmain a.addtocart:hover, .categoryproductdescription a.addtocartdocs:hover, #docsmain a.addtocartdocs:hover {
        background-color: #7f7d7d !important;
        color: white;
    }
    
     .applicationrelated a.addtocart{
    box-shadow:0px 0px 0px 1px #d9d9d9;
    font-weight:bold;
    margin:0 3px;
    font-size:10px;
    padding:5px;
    color:white;
    text-decoration:none;
    
    background-image: linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
    background-image: -o-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
    background-image: -moz-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
    background-image: -webkit-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
    background-image: -ms-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
    background: -moz-linear-gradient(top,  #900002,  #f60000);
    
    background-image: -webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(1, rgb(144,0,2)),
        color-stop(0, rgb(246,0,0))
    );
    background-position:top;
    background-repeat:repeat-x;
    text-shadow:1px 1px 2px rgba(0,0,0,0.6);
    border-radius:2px;
    }
    
     .applicationrelated a.details{
    box-shadow:0px 0px 0px 1px #d9d9d9;
    line-height: 21px;
    text-align: center;
    font-weight:bold;
    margin:9px 3px 2px 3px;
    display:inline-block;
    font-size:13px;
    padding:0 5px;
    color:black !important;
    text-decoration:none;
    -moz-appearance: none;
        background-color: #f87525;
        border: 0 none;
        border-radius: 6px;
    background: #f87525;
    
    background-position:top;
    background-repeat:repeat-x;
    
    border-radius:2px;
    padding: 5px 10px;
    }
    
    /* img.catimage:hover{
        transition: 0.2s;
        transform: scale(1.15,1.15);
    } */
    
    .categoryproductdescription div.pricenumber{
    font-size:14px;
    margin:14px 0;
    }
    
    .categoryproductdescription h2{
    font-size:18px;
    }
    
     span.currentpage{
     color:#fc0c00;
     }
     
     .categoryproduct h2 a{
     text-decoration:none;
     color:#1d6bc0;
     }
     .maincategorycontent{
     margin-bottom:25px;
     }
     
     .categoryproductdescription{
     width: 70%;
    float: left;
    font-size: 14px;
    line-height: 30px;
    padding: 10px 1%;
    }
    
    .price_section{
        float: left;
        width: 14%;
        padding-top: 10px;
        text-align: center;
        margin-right: 10px;
    }
    .price_section p{
        line-height: 1.5em;
    }
    
     .categoryproductdescription select{
        width:220px;
        height:auto;
        margin:8px 0;
     }
     .categoryproductdescription-badge{
        color: white;
        background:orange;
        margin-top: -2px;
        margin-left:12px;
        font-size:10px;
        border-radius:5px;
        padding: 4px;
     }
     .categoryproduct:hover .categoryproductdescription span.categoryproductdescription-badge{
         transition: 0.3s;
         transform: scale(1.15,1.15);
     }
     .shippingdetails, .billingdetails{
     width:100%;
     }
     .billingdetails{
     margin-bottom:24px;
     }
     .billinglabel{
     width:20%;
     margin:2px;
     color:#0f0f0f;
     font-size:14px;
     line-height:20px;
     vertical-align: left;
     font-weight:bold;
     text-align: left;
     }
     .billingblank{
      margin:2px;
      padding:8px 2px;
       vertical-align:middle;
        color:#0f0f0f;
     font-size:11px;
     width:50%;
     float: left;
     }
     .billingblank input{
     border:1px solid #c5c5c5;
     box-shadow:0 0 2px #c5c5c5;
     height:29px;
     width:50%;
     font-size: 14px !important;
     }
     .billingblank select{
     text-align:center;
     border:1px solid #c5c5c5;
     box-shadow:0 0 2px #c5c5c5;
     height:29px;
     width:95% !important;
     }
     
      .shippinglabel{
     width:20%;
     margin:2px;
     color:#0f0f0f;
     font-size:14px;
     line-height:20px;
     vertical-align: left;
     font-weight:bold;
     text-align: left;
     }
     .shippingblank{
      margin:2px;
      padding:8px 2px;
       vertical-align:middle;
        color:#0f0f0f;
     font-size:11px;
     width:56%;
     float: left;
     }
     .shippingblank input{
     border:1px solid #c5c5c5;
     box-shadow:0 0 2px #c5c5c5;
     height:29px;
     width:50%;
     font-size: 14px !important;
     }
     .shippingblank select{
     text-align:center;
     border:1px solid #c5c5c5;
     box-shadow:0 0 2px #c5c5c5;
     height:29px;
     width:95% !important;
     }
     
     .sameasbilling{
     font-size:12px; color:#aaaaaa; margin-left:6px;
     }
     .shippingdetails .asterisk, .billingdetails .asterisk{
     font-weight:normal;
     color:#f90608;
     line-height:30px;
     font-size:16px;
      margin-left:6px;
     }
     .selectshippingoption{
     width:35%;
     margin:3px;
     float:left;
     }
     
     .discountoption {
        width:370px;
        margin:3px;
        float:left;
     }
     
      .billship_total{
       width:33%;
     margin:3px;
     float:left;
     padding-top:51px;
     padding-bottom: 100px;
     }
     
       .billship_total2{
       width:365px;
     margin:3px;
     float:left;
     padding-top:51px;
     }
     .estimatedordertotal td{
     font-size:16px;
     font-weight:bold;
     padding:10px 4px;
     border-bottom:1px solid #ddd;
     }
     .billshipnext{
     
     display:none;
     }
     .previeworderimage{
     height:84px;
     width:auto;
     max-width: 90%;
     }
     #calculatediscount{
     color:#fa0102;
     }
     
     #bill_ship_next{
        font-size: 16px;
        line-height: 55px !important;
        padding: 20px 40px;
        width: 170px !important;
     }
     
    #wait {
        font-size: 16px;
        line-height: 25px;
        padding: 18px 0;
        width: auto !important;
    }
     
     
     /* ------------- top navbar  ------------------- */
    
    
    #navbar ul li{
    position:relative;
    }
    
    #navbar ul li ul{
    display:none;
    }
    #navbar ul li:hover ul li div{
    background-image:none;
    }
    #navbar ul li:hover ul{
    background-image:none;
    background-color:#cccccc;
    display:block !important;
    position:absolute;
    top:39px;
    z-index:9999999999999999999999999999999;
    white-space: nowrap;
    box-shadow:-1px 2px 2px rgba(0,0,0,0.5);
    border:1px solid #aaaaaa;
    }
    #navbar ul li:hover ul li{
    border-bottom:1px solid #aaaaaa;
    background-image:none;
    background-color:#cccccc;
    background-position: top;
    background-repeat: repeat-x;
    width:inherit;
    height:30px;
    line-height:30px;
    display:block;
    width:inherit !important;
    float:none;
    }
    #navbar ul li:hover ul li:hover{
    opacity:0.95;
    }
    #navbar ul li:hover ul li div, #navbar ul li:hover ul li div a{
    width:100% !important;
    }
     
    
    
    
     /* ------------- end top navbar -------------  */
     
     .tracking_holder {
        width: 770px;
        margin: 0px 0px 0px 0px;
        padding: 0px;
        display: block;
    }
    
                    
    .tracking_holder_left {
        width: 350px;
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
        display: inline;
        float: left;
    }
    
    
    .tracking_holder_right {
        width: 350px;
        margin: -2px 0px 0px 0px;
        padding: 0px 0px 0px 35px;
        display: inline;
        float: left;
    }
     
    input.searchblank{
        height: 30px;
        width: 240px;
        margin-right: 0;
        border-left: none;
        border-top: 1px solid #c6c6c6;
        border-left: 1px solid #c6c6c6;
        border-bottom: 1px solid #c6c6c6;
        padding-left: 8px;
    }
     
    #applicationvideos .vidthumbs{
     float: left;
     height:3364px;
     overflow-y: scroll;
     width: 100% !important;
     border: 1px #aaaaaa solid;
     }
     #applicationvideos{
        float:left;
        margin-left: 10px; 
     }
     
     .videoouter {
         position: relative;
         height: 65px ;
         
     }
     
     .vidthumbs .vidthumb{
        float:left;
        width:90px;
        margin-left:13px;
        clear:both;
        margin-top:45px;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
     }
     
     .vidthumbs p, .vidthumbs p a{
     font-size:13px;
     color:#0e0e0e;
     font-weight:bold;
     text-decoration:none;
     margin-top:0px;
     margin-bottom:0px;
     }
     .vidthumbtext{
        margin-left:11px; 
        float:left;
        width:200px;
        clear:right;
        margin-top:39px;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
     }
     
     p.viewcount{
     color:#666666;
     font-size:11px;
     margin-top:1px;
     }
     .vidscroll{
     position:relative;
     top:0;
     }
     .vidthumbsup, .vidthumbsdown{
     cursor:pointer;
     }
     
    .training-videos-list {
        position: relative;
        padding: 5px 0;
        width: 100% !important;
        border-bottom: 1px solid;
        margin-left: 5px !important;     
        float: left;
        display: inline-flex;
        background-color: rgba(255,255,255,1);
    }
    /* .training-videos-list:hover {
        transition: 0.2s;
        transform: scale(1.05,1.05);
        border: 1px solid;
        -webkit-box-shadow: 3px 3px 10px -1px rgba(0,0,0,0.5);
        -moz-box-shadow: 3px 3px 10px -1px rgba(0,0,0,0.5);
        box-shadow: 3px 3px 10px -1px rgba(0,0,0,0.5);
        overflow:visible !important;
        z-index: 100000;
    } */
     
     .applicationrelated{
        width: 100%;
        border: 1px solid #d9d9d9;
     }
     .applicationrelated hr{
        width:480px;
        margin:0;
        clear:both;
     }
     .applicationrelated p.description{
        font-size:10px;
        line-height:14px;
        margin:2px;
     }
     .getPriceLong{
        margin-top:12px;
     }
     .getPriceLong .price{
        font-size:14px;
        color:#f70200;
        font-weight:bold;
     }
     .applicationrelated p{
        font-size:14px;
     }
     
     #applicationarticles {
     float:left;
     width:187px;
     height: 500px;
     overflow:hidden !important;
     }
     .webtraining * {
        font-family: "Montserrat", Helvetica, sans-serif !important;
    }
    .webtraining{
        width:300px;
        height:533px;
        border-bottom:2px solid #e5e5e5;
        float:left;
        position:relative;
        margin: 1%;
        padding: 0;
        font-family: "Open Sans",Helvetica,sans-serif;
        -webkit-box-shadow: 2px 2px 10px 0px rgba(0,0,0,0.5);
        -moz-box-shadow: 2px 2px 10px 0px rgba(0,0,0,0.5);
        box-shadow: 2px 2px 10px 0px rgba(0,0,0,0.5);
        /* border-radius: 10px; */
    }
    
    .webtraining .dateandtime{
        padding: 1px 0;
        height:auto;
        text-align:center;
        width:100%;
        background-color: #c3c3c3;
        /* border-radius: 10px 10px 0 0; */
    }
     
    .webtraining .dateandtime h3{
        margin:6px 0 2px;
    }
    .webtraining h4{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 10%;
        text-align:center;
        margin: auto;
        transition: 0.2s;
        transition-timing-function: ease-in;
    }
    .webtraining h4:hover{
        opacity: 0.85
    }
    .webtraining .dateandtime p{
        margin:2px;
    }
    .webtraining .register{
        box-shadow:0px 0px 0px 1px #d9d9d9;
        font-weight:bold;
        margin:0 3px;
        font-size:12px;
        padding:7px;
        color:white;
        text-decoration:none;
    
        background-image: linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
        background-image: -o-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
        background-image: -moz-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
        background-image: -webkit-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
        background-image: -ms-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
        background: -moz-linear-gradient(top,  #900002,  #f60000);
    
        background-image: -webkit-gradient(
            linear,
            left bottom,
            left top,
            color-stop(1, rgb(144,0,2)),
            color-stop(0, rgb(246,0,0))
        );
        background-position:top;
        background-repeat:repeat-x;
        text-shadow:1px 1px 2px rgba(0,0,0,0.6);
        border-radius:2px;
        text-align:center;
        position:absolute;
        bottom:10px;
        left:90px;
    }
    
    .webtraining .registerinactive{
        background-color: #c3c3c3;
        font-weight:bold;
        margin:0 3px;
        font-size:12px;
        letter-spacing: 1px;
        padding:10px 25px;
        color:black;
        text-decoration:none;
        /* border-radius:5px; */
        text-align:center;
        position:absolute;
        bottom:10px;
        -moz-appearance: none;
        -webkit-box-shadow: 2px 2px 10px 0px rgba(0,0,0,0.5);
        -moz-box-shadow: 2px 2px 10px 0px rgba(0,0,0,0.5);
        box-shadow: 2px 2px 10px 0px rgba(0,0,0,0.5);
        transition: 0.2s;
        transition-timing-function: ease-in;
    }
    
     .webtraining .registerinactive:hover{
        background-color: #7f7d7d;
        color: white !important;
        transform: scale(1.15,1.15);
     }
    
    .webtraining ul{
        width: 90%;
        margin: auto
    }
    .webtraining li{
        line-height: 1.15rem;
        list-style: outside;
    }
     
    .webtraining ul li ul li{
        padding: 0.25em 0;
    }
    
    .applicationrelated div.left{
        height:100px;
        width:100px;
        float:left;
        margin:5px;
        text-align:center;
    }
    
    .applicationrelated .left img{
        max-width:100px;
        max-height:100px;
        margin:0;
        width:auto;
        height:auto;
    }
    
    .applicationrelated p{
    margin:4px;
    }
     
    .advancedsearchtab, .selectiontab{
    float: left;
    height: 50px;
    background-color: #eee;
    background-repeat: repeat-x;
    border-left: 1px solid #b8b8b8;
    border-right: 1px solid #b8b8b8;
    border-top: 1px solid #b8b8b8;
    border-radius: 6px 6px 0 0;
    line-height: 22px;
    width: 24%;
    margin: 0 2px;
    font-size: 12px;
    margin-top:0px;
    font-weight:bold;
    text-align: center;
    padding-top: 13px;
    }
    
    .advancedsearchtab
    .redbold{
    color:#FFF;
    font-weight:bold;
    font-family: Arial,Helvetica,sans-serif;
    }
    
    .redbold a:hover{
    color:#FFF!important;
    font-weight:bold;
    font-family: Arial,Helvetica,sans-serif;
    }
    .advancedsearchtab.active, .selectiontab.active{
    background-color:#d7d7d7 !important;
    border-bottom:none;
    margin-top: 0px;
    background-color: white;
    border-left: 1px solid #b8b8b8;
    border-right: 1px solid #b8b8b8;
    border-top: 1px solid #b8b8b8;
    border-right: 1px solid #b8b8b8;
    line-height: 22px;
    }
    
    .productstab{
    float: left;
    height: 35px;
    background-image: url(images/advancedtabbg.jpg);
    background-position: top;
    background-repeat: repeat-x;
    border-left: 1px solid #b8b8b8;
    border-right: 1px solid #b8b8b8;
    border-radius: 6px 6px 0 0;
    line-height: 35px;
    margin: 0 60px 0 0;
    font-size: 12px;
    margin-top:4px;
    font-weight:bold;
    }
    
    .productstab a{
    text-decoration:none;
    color:black;
    font-size:12px;
    padding:6px 12px;
    }
    
    .productstab.active{
    background-image:none;
    background-color:white;
    border-bottom:none;
    margin-top: 4px;
    z-index: 99999999999999999999999999999999999999;
    background-color: white;
    border-left: 1px solid #b8b8b8;
    border-right: 1px solid #b8b8b8;
    border-top: 1px solid #b8b8b8;
    border-right: 1px solid #b8b8b8;
    }
    
    #advancedsearch, #multipletabs{
    border: none;
    width: 100%;
    margin-left: 2px;
    margin-top: -1px;
    padding-bottom:12px;
    padding-left:12px;
    }
    html body #multipletabs{
    width:780px;
    }
    .advancedsearchtab a, .selectiontab a{
    color:black;
    text-decoration:none;
    padding: 25px 22px;
    }
    .daqselecttype{
    float: left;
    width: 346px;
    margin: 0 12px;
    font-size: 11px;
    }
    .daqselecttype input[type="checkbox"] {
    -webkit-appearance: none;
    background: #f6f6f6; /* Old browsers */
    background: -moz-linear-gradient(top, #f6f6f6 0%, #e4e4e4 51%, #fdfdfd 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f6f6f6), color-stop(51%,#e4e4e4), color-stop(100%,#fdfdfd)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #f6f6f6 0%,#e4e4e4 51%,#fdfdfd 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #f6f6f6 0%,#e4e4e4 51%,#fdfdfd 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #f6f6f6 0%,#e4e4e4 51%,#fdfdfd 100%); /* IE10+ */
    background: linear-gradient(to bottom, #f6f6f6 0%,#e4e4e4 51%,#fdfdfd 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f6f6f6', endColorstr='#fdfdfd',GradientType=0 ); /* IE6-9 */
    border: 1px solid #656565;
    padding: 5px;
    border-radius: 2px;
    display: inline-block;
    position: relative;
    top:2px;
    margin-right:4px;  
    z-index: 1;
    }
    
    #advancedsearch p {
        font-family: "Open Sans",Helvetica,sans-serif !important;
        font-size: 12px !important;
        margin: 0;
        padding-bottom: 10px;
    }
    
    #advancedsearch h4{padding-bottom: 10px;}
    
    .search_result_protocol table {width: 50%;}
    .search_result_protocol table tr {width: 100%;}
    .search_result_protocol table tr td {
        width: 30%; font-family: "Open Sans",Helvetica,sans-serif !important;
        font-size: 12px !important;
        margin: 0;
        padding-bottom: 10px;
    }
    
    .daqselecttype input[type="checkbox"]:checked:after {
        content: '\2714';
        font-size: 14px;
        position: absolute;
        top: -4px;
        left: 1px;
        color: #fa0102;
        font-weight:bold;
        border:none;
    }
    
    .catimage{
        max-width: 700px;
    }
    
    .imagezoom{
    width:500px;
    float: right;
    margin:15px;
    height:auto;
    }
    
    .imagezoomleft{
    width:450px;
    float: left;
    margin:15px;
    height:auto;
    }
    
    .searchproductimage img{
    max-height:100%;
    max-width:90%;
    height:auto;
    width:auto;
    margin:0 auto;
    }
    .searchproductimage{
        float: left;
    text-align:center;
    display:table-cell;
    vertical-align:middle;
    width:18%;
    height:120px;
    margin: 20px 0 25px 0;
    }
    .searchproductdescription {
    width: 585px;
    float: left;
    position: relative;
    }
    
    .search_desc {
        float: right;
        min-height: 77px;
        width: 81.99%;
        font-size: 80%;      
    }
    
    .searchproductdescriptiontext {
        width: 585px;
        float: left;
        position: relative;
        margin-bottom: 50px;
        margin-top: 4px;
        font-size: 14px;
    }
    
    select {
    display: none;
    }
    
     option{
     background:none !important;
     }
     .searchresults{
     /*font-weight:bold;*/
     margin-top:6px;
     }
     .waystosearch{
     margin-left:30px;
     }
     .sortbyprice{
     margin-left:12px;
     }
     .pagetext{
     margin-left:12px;
     }
     .searchheader{
    margin-left: 0px;
    margin-top: 43px;
    padding-bottom: 22px;
    float: left;
     }
     h3.producttitle, h3.blue{
     font-size:16px;
     font-weight:bold;
     margin-bottom:11px;
     color:#186CBE;
     margin-top:2px;
     margin-bottom:2px;
     }
     
     p.productprices {
     line-height:36px !important;
     font-size:14px !important;
     font-weight:bold;
     margin:2px;
    }
     
    .productpricesSearch a {
         line-height:36px !important;
         font-size:14px !important;
         font-weight:bold;
         margin:2px;
         text-decoration: none;
         color: #000000;
         font-family: Arial,Helvetica,sans-serif;
    } 
     
     #searchresultsbox hr{
      width:765px;
      margin-left:0px;
     }
     .maincategorycontent h1, #docsmain h1{
     color:#186CBE;
     font-size: 25px;
     }
     
    
    
    #convertertable{
    background-color:white;
    border-collapse:collapse;
    font-size: 13px;
    }
    
    #convertertable td{
    border-collapse:collapse;
    border:1px solid #e7e7e7;
    text-align:left;
    }
    
    .tabletitle{
    font-size:19px;
    font-weight:bold;
    color:#fb0005;
    text-align:left !important;
    border:none !important;
    margin-bottom:11px;
    } 
     
    .protocolleftcolumn{
    background-color:#ffffcd;
    padding:8px inherit;
    } 
    
    #convertertable td a {
    text-decoration: none;
    font-weight: bold;
    padding: 0px;
    color:#000000;
    text-align:center;
    }
    
    #convertertable .protocoltabletoprow td a{
    padding:0;
    border:none;
    color: #ffffff;
    }
    
    #convertertable tr.protocoltabletoprow td{
    background-color:#1a65c2;
    height: 85px;
    }
    
    #convertertable .highlight, #convertertable .highlight a{
    background-color:#1a65c2;
    color:white;
    }
    
    #convertertable td.protocolleftcolumn, #convertertable td.protocolleftcolumn a{
    background-color:#ffffcd;
    color:black;
    }
    
    #convertertable td.protocolleftcolumn{
    padding:6px 2px;
    }
    
    .protocoltable{
    padding: 0px !important;
    }
    
    #advancedsearch hr{
    margin-left: -12px;
    width: 100%;
    }
    #searchbymultipleprotocols h4 a{
    color:#186CBE;
    text-decoration:none;
    font-size:18px;
    line-height:40px;
    width:100%;
    margin-bottom:0;
    }
    #searchbymultipleprotocols h4{
    color:#186CBE;
    text-decoration:none;
    font-size:18px;
    line-height:40px;
    width:100%;
    margin-bottom:0;
    
    padding-left:20px;
    }
    
    #multipleprotocols .protocol{
    width:145px;
    height:160px;
    border:1px solid #cdcdcd;
    float:left;
    text-align:center;
    font-family: "Open Sans",Helvetica,sans-serif;
    font-size: 14px;
    }
    #multipleprotocols .protocol img{
    margin:8px auto 0 auto;
    }
    .tablecolumn{
    background-color:#e2e2e2;
    padding:4px;
    }
    .tableheading{
    background-color:#186cbe;
    color: #ffffff;
    font-weight:bold;
    }
    .tablecontent{
    background-color:#ffffff;
    font-size:14px !important;
    }
    .shopprogramminglanguage .tableheading{
    background-color:#186CBE;
    color:white;
    padding:4px;
    }
    .shopprogramminglanguage .tableheading a{
    color:white;
    text-decoration:none;
    }
    .shopprogramminglanguage .tablecolumn{
    color:black;
    font-weight:bold;
    }
    .shopprogramminglanguage .tablecolumn a{
    color:black;
    text-decoration:none;
    }
    .getpricebutton .bigbutton{
    text-transform:uppercase;
    padding-left:2px;
    padding-right:2px;
    margin:0 2px 0 2px !important;
    text-align:center;
    width: auto !important;
    float:left !important;
    margin-bottom:2px !important;
    
    }
    .getpriceprice{
    float:left;
    height:23px;
    color:#fa0102;
    font-weight:bold;
    line-height:23px;
    margin-right:2px;
    margin-bottom:2px !important;
    margin-left:4px;
    text-align: left;
    width: 100%;
    }
    #productstable .getpriceprice, #productstable .getpricebutton{
    float:none;
    clear:both;
    text-align:center;
    }
    #productstable .getpricebutton{
    width:85px;
    text-align:center;
    }
    .getprices{
    width: auto;
    margin:2px 0;
    }
    
    #productstable .getprices{
    width:84px;
    }
    
    #productstable .tablecontent img{
    max-width:60px;
    height:auto;
    }
    .shopprogramminglanguage table table, #et7000table table{
    background-color:#ececec;
    }
    .shopprogramminglanguage .tablecontent, .shopprogramminglanguage .tableheading{
    text-align:center;
    }
    .shopprogramminglanguage .tableheading{
    font-weight:bold;
    }
    .tabletitleshadow{
    background-image:url(/images/tabletitleshadow.jpg);
    background-position:top;
    background-repeat:repeat-x;
    font-size:16px;
    font-weight:bold;
    color:#186CBE !important;
    height:38px;
    line-height:38px;
    text-align:left !important;
    padding-left:18px;
    }
    
    .dontfix tr td {border: 1px solid #ececec;}
    
    .searchdaqcategory{
        float: left;
        margin-top:0px;
        padding-bottom: 20px;
        width: 100%;
        margin-left: 0 !important;
    }
    #et7000 .tablewider{
    background-color:#f1f1f1;
    width:100%;
    }
    #et7000table{
    display:none;
    }
    #et7000table td.tablecolumn{
    text-align:center;
    }
    /* #et7000table td.tablecolumn a{    } */
    #et7000table .tabletoprow{
    height:34px;
    text-align:center;
    }
    #et7000table .tablecontent{
    text-align:center;
    }
    #et7000table a{
    text-decoration:none;
    }
    #et7000table .tabletoprow a{
    color:white;
    }
    #productstable table{
    border-spacing:1px;
    border-color:inherit;
    }
    #pressreleases ul{
    list-style-type:none;
    }
    #pressreleases ul li a {
    margin-left:20px;
    }
    #pressreleases ul li{
    /*margin-bottom:20px;*/
    font-size:12px !important;
    }
    #pressreleases ul li img{
    position: relative;
    top: 5px;
    }
    #articles p{
    font-size:15px;
    line-height:20px;
    }
    #articles .readmore{
    text-decoration:none;
    text-transform:uppercase;
    color:black;
    font-weight:bold;
    font-size:14px !important;
    }
    #articles-left-window {
        float: none;
        width: 200px;
        height: 430px;
        overflow-x: hidden;
        overflow-y:scroll !important;
    
    }
    .articles-table-list{
        float: none;
        width: 150px;
        font-family: "Verdana";
        line-height: 14px;
        padding-bottom: 15px;
    }
    .articles-table-title  a {
        text-decoration: none;
        font-size: 13px;
    }
    .articles-table-date {
        color: #878787;
        width: 100px;
        font-size: 10px;
        margin-top: 3px;
        float: none;
    }
    .left-iframe-x-scroll-remove {
        overflow-y:hidden;
        overflow-y:scroll !important;
    }
    #docsmain .vidthumbs{
    overflow-y:hidden;
    width:250px;
    height:680px;
    background-color:#f2f2f2;
    }
    #docsmain .vidthumbs{
    overflow-y:hidden;
    width:265px;
    height:680px;
    overflow-y:scroll !important;
    background-color:#f2f2f2;
    }
    #docsmain .vidthumbwrapper{
    width:230px; float:left; padding-left:10px;
    }
    #docsmain .vidthumbwrapper .vidthumbs{
    margin-left:0;
    }
    #docsmain h1{
    background: #bfbfbf; /* Old browsers */
    background: -moz-linear-gradient(top, #bfbfbf 0%, #ffffff 40%, #ffffff 75%, #d6d6d6 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#bfbfbf), color-stop(40%,#ffffff), color-stop(75%,#ffffff), color-stop(100%,#d6d6d6)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top, #bfbfbf 0%,#ffffff 40%,#ffffff 75%,#d6d6d6 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top, #bfbfbf 0%,#ffffff 40%,#ffffff 75%,#d6d6d6 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #bfbfbf 0%,#ffffff 40%,#ffffff 75%,#d6d6d6 100%); /* IE10+ */
    background: linear-gradient(to bottom, #bfbfbf 0%,#ffffff 40%,#ffffff 75%,#d6d6d6 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#bfbfbf', endColorstr='#d6d6d6',GradientType=0 ); /* IE6-9 */
    width: 781px;
    margin-left: -20px;
    margin-top: 0;
    padding: 10px 19px;
    line-height:28px;
    }
    #categorymain h1{
    background: #bfbfbf;
    background: -moz-linear-gradient(top, #bfbfbf 0%, #ffffff 40%, #ffffff 75%, #d6d6d6 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#bfbfbf), color-stop(40%,#ffffff), color-stop(75%,#ffffff), color-stop(100%,#d6d6d6));
    background: -webkit-linear-gradient(top, #bfbfbf 0%,#ffffff 40%,#ffffff 75%,#d6d6d6 100%);
    background: -o-linear-gradient(top, #bfbfbf 0%,#ffffff 40%,#ffffff 75%,#d6d6d6 100%);
    background: -ms-linear-gradient(top, #bfbfbf 0%,#ffffff 40%,#ffffff 75%,#d6d6d6 100%);
    background: linear-gradient(to bottom, #bfbfbf 0%,#ffffff 40%,#ffffff 75%,#d6d6d6 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#bfbfbf', endColorstr='#d6d6d6',GradientType=0 );
    width: 620px;
    margin-left: -20px;
    margin-top: 0;
    padding: 10px 180px 10px 19px;
    line-height: 28px;
    }
    
    #shopbyprotocolaltrd{background-color:#ffffff; width:392px; float:left; height:250px; vertical-align:middle; margin-top:34px;}
    #shopbyprotocolaltrd input{float:left; width:72px; margin:2px; background-color:#666666; color: #FFFFFF; font-weight:normal; font-size:11px; height:17px;}
    #shopbyprotocolaltrd a{color:white; font-size:12px; font-weight:bold; text-decoration:none; line-height:22px;}
    #shopbyprotocolaltrd p a{color:#0178F7; font-size:12px; font-weight:normal; text-decoration:none; line-height:22px;}
    #shopbyprotocolaltrd p a:hover{color: #FF9966;}
    
    #shopbyprotocolaltrd ul, #shopbyprotocolrd li{list-style-type:none; float:left; margin:6px; text-align:left; padding:0;}
    
    #shopbyprotocolaltrd ul li{/*width:148px; float:left; height:16px; line-height:16px; margin:3px 2px; background-color:#666666; color:black;
    border-top:2px solid #ece9d8; border-left:2px solid #ece9d8;
    border-right:2px solid #98968b; border-bottom:2px solid #98968b;*/
    width:88px; float:left; height:22px; line-height:22px; margin:3px 2px; 
    background-color:#900002;
    background-image: linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
    background-image: -o-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
    background-image: -moz-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
    background-image: -webkit-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
    background-image: -ms-linear-gradient(bottom, rgb(144,0,2) 100%, rgb(246,0,0) 0%);
    background: -moz-linear-gradient(top,  #900002,  #f60000);
    border:none;
    background-image: -webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(1, rgb(144,0,2)),
        color-stop(0, rgb(246,0,0))
    );
    background-position:top;
    background-repeat:repeat-x;
    color:white;
    text-align:center;
    border-radius:2px;
    text-shadow:1px 1px 1px black;
    font-weight:bold;
    }
    
    /* #shopbyprotocolaltrd ul li:hover{} */
    .categorydescription #shopbyprotocolaltrd{
    display:none;
    }
    .categorydescription .clickheretables{
    font-size: 13px !important;
    }
    div.previous, div.next{
    color:#828282;
    font-size:18px;
    font-weight:bold;
    width:120px;
    margin-bottom:17px;
    }
    div.previous a, div.next a{
    text-decoration:none;
    color:inherit;
    }
    div.previous.inactive, div.next.inactive{
    color:#cdcdcd;
    }
    p.newsletternav a{
    color:#828282;
    font-size:16px;
    text-decoration:none;
    font-weight:bold;
    margin:0 6px;
    }
    p.newsletternav img{
    position:relative;
    top:3px;
    margin:0 6px;
    }
    span.arrow{
    position:relative;
    bottom:1px;
    }
    
    div.previous{
        float: left;
        margin-left: 45%;
        margin-top: 0;
        position: absolute;
    }
    div.next{
        margin-left: 65%;
        margin-top: 0;
        position: absolute;
    }
    
    .controllersbyOS{
    /* float:left; */
    display:inline-block;
    margin:8px;
    }
    
    .controllersbyOS img{
    position: relative;
    top: 7px;
    }
    
    .redesignhide{
    display:none;
    }
    
    h3.producttitle a{
    text-decoration:none;
    }
    
    h3.producttitle a:hover{
    text-decoration:underline;
    }
    
    #et7000table a{
    padding:6px 38px;
    }
    
    #et7000table .tabletoprow a, #et7000table .tablecolumn a{
    padding:6px;
    }
    
    .addtocartbuttons{
    margin-top:22px;
    }
    
    p.priceselector{
    font-weight:bold;
    margin:14px 0 4px 0;
    }
    
    .clickheretables{
    line-height: 45px !important;
    text-align: center;
    font-size: 14px !important;
    }
    
    
    
    #productboxes .productboxcontainer p{
    font-size:11px;
    line-height:12px;
    margin-top:-7px;
    }
    
    #relatedproducts #productboxes .productboxcontainer p{
    margin-top:-1px;
    }
    
    #slide2, #slide3, #slide4, #slide5, #slide6, #slide7, #slide8, #slide9, #slide10,
    #slide12, #slide13, #slide14, #slide15, #slide16, #slide17, #slide18, #slide19, #slide11{
    display:none;
    }
    
    #slide1, #slide2, #slide3, #slide4, #slide5, #slide6, #slide7, #slide8, #slide9, #slide10,
    #slide12, #slide13, #slide14, #slide15, #slide16, #slide17, #slide18, #slide19, #slide11{
    
    padding:4px;
    
    zoom: 1;
    }
    
    #slidenav{
    height:28px;
    text-align:center;
    background-color:#da9315;
    color:white;
    font-weight:bold;
    border:1px solid black;
    word-spacing:5px;
    }
    
    #slidenav a{
        color:black;
        font-weight:bold;
        cursor:pointer;
    }
    #slidenav a:hover{
    color:white;
    }
    
    #slidebox div img{
    border:2px solid #da9315;
    margin:2px;
    }
    
    #slidebox{
    background-color:white;
    border:1px solid black;
    }
    .creditcardstop{
    float:none;
    margin-left:25px;
    margin-top:5px;
    }
    div.ncage{
    float:left;
    height:20px;
    width:105px;
    margin-left:25px;
    color:white;
    font-size: 11px;
    line-height: 13px;
    text-align: center;
    margin-top:5px;
    }
    .faqanswer{display:none;
    padding:20px;
    
    }
    .faqquestion{cursor:pointer;
    font-weight:bold;
    padding:10px 10px 10px 30px;
    border-top:1px solid #eeeeee;
    width: 100%;
    font-weight: normal;
    }
    
    .faqquestion span{background-image:url('/images/answernottoggled.jpg');
    background-position:left center;
    background-repeat:no-repeat;
    padding-left:20px;
    display:block;
    }
    
    .faqquestion.toggled span{background-image:url('/images/answertoggled.jpg');
    }
    
    ul.faqcategories li {
    list-style: none;
    float: left;
    display: block;
    /* width: 100px; */
    background: #fcfcfc;
    background: -moz-linear-gradient(top, #fcfcfc 0%, #bdbdbd 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fcfcfc), color-stop(100%,#bdbdbd));
    background: -webkit-linear-gradient(top, #fcfcfc 0%,#bdbdbd 100%);
    background: -o-linear-gradient(top, #fcfcfc 0%,#bdbdbd 100%);
    background: -ms-linear-gradient(top, #fcfcfc 0%,#bdbdbd 100%);
    background: linear-gradient(to bottom, #fcfcfc 0%,#bdbdbd 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfcfc', endColorstr='#bdbdbd',GradientType=0 );
    border: 1px solid #A7A7A7;
    text-align: center;
    padding: 7px 20px;
    }
    ul.faqcategories li a{
    padding: 7px 20px;
    font-weight:bold;
    text-decoration:none;
    }
    ul.faqcategories{
    padding:0;
    }
    #docsmain p.faqcategory{
    color:#136cbe;
    font-size:14px;
    font-weight:bold;
    background: #dbdbdb; /* Old browsers */
    background: #dbdbdb; /* Old browsers */
    background: -moz-linear-gradient(top,  #dbdbdb 0%, #ffffff 46%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#dbdbdb), color-stop(46%,#ffffff)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #dbdbdb 0%,#ffffff 46%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #dbdbdb 0%,#ffffff 46%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #dbdbdb 0%,#ffffff 46%); /* IE10+ */
    background: linear-gradient(to bottom,  #dbdbdb 0%,#ffffff 46%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dbdbdb', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
    border-bottom:1px solid #eeeeee;
    border-top:1px solid #eeeeee;
    padding:18px 16px;
    width: 101%;
    margin-left: -20px;
    margin-top:-2px;
    }
    .faqsubhead{
    margin-top:-34px;
    }
    .googleAdSense{
    padding-top: 45px;
    margin:20px auto 0px auto; clear:both; text-align:center;
    }
    div.waystosearchtext{
    float:left;
    width:115px;
    text-align:right;
    line-height:23px;
    }
    div.waystosearchoptions{
    width:200px;
    text-align:left;
    float:left;
    }
    button.purechat-button-expand.purechat-button-available {
    background-image: url("/images/livehelponline.gif");
    border-radius: 0 !important;
    border: none !important;
    width: 125px !important;
    height: 50px !important;
    margin: 0;
    padding: 0;
    }
    
    html body button.purechat-button-expand {
    background-image: url("/images/livehelpoffline.gif");
    border-radius: 0 !important;
    border: none !important;
    width: 125px !important;
    height: 50px !important;
    margin: 0;
    padding: 0;
    float:right !important;
    }
    html body button.purechat-button-expand:focus{
    border:none;
    outline:none !important;
    }
    
    
    button.purechat-button-expand:hover.purechat-button-available{
    background-image: url("/images/livehelponline.gif") !important;
    }
    html body button.purechat-button-expand:hover{
    background-image: url("/images/livehelpoffline.gif");
    }
    
    span.freegroundshipping{
    font-size:12px;
    }
    
    span.freeshippingheader{
    position: absolute;
    top: 2px; /* original is 28px*/
    left: 121px;
    color: red;
    font-weight: bold;
    font-size: 12px;
    text-shadow: 1px 1px white;
    background-color: white;
    padding: 2px 4px;
    }
    span.freeshippingcart{
    color: #fe0002;
    font-weight: bold;
    font-size: 14px;
    }
    span.freeshippingdisclaimer{
    color: #fe0002;
    font-weight:normal;
    font-size:10px;
    line-height:23px;
    }
    .productratings{
    font-size:13px;
    line-height:16px;
    font-weight:normal;
    color:black;
    float: left;
    width: 100%;
    }
    .productratings img {
    display: inline-block;
    vertical-align: top;
    height: 15px;
    }
    
    #features .slide{
    display:none;
    position:relative;
    }
    
    #features .slide.active{
    display:block;
    }
    
    #features .slide.sliding{
    position:absolute;
    display:block;
    background-color:white;
    z-index:999;
    }
    
    #productslidecontainer{
    position:relative;
    overflow:hidden;
    border:1px solid #cccccc;
    padding:12px;
    }
    
    #productslidecontainer .leftarrow, #productslidecontainer .rightarrow, #productslidecontainer .slide{
    float:left;
    }
    
    #productslidecontainer .slide{
    width:890px;
    }
    
    .comments{
    margin-bottom: 10px;
    margin-left:40px;
    background-color:#eeeeee;
    padding:4px 20px;
    }
    img.starrating {
    margin-bottom: -2px;
    }
    .getPriceLong .addtocartdocs{
        -moz-appearance: none;
        background-color: #fc7019;
        /* background-color: #fd0916; */
        background-position: center top;
        background-repeat: repeat-x;
        border-radius: 2px;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-family: "Raleway",sans-serif;
        font-size: 13px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        text-transform: capitalize;
        transition: background-color 0.2s ease-in-out 0s, color 0.2s ease-in-out 0s, box-shadow 0.2s ease-in-out 0s;
        white-space: nowrap;
        padding: 0 1rem;
        line-height: 2.5rem;
        border: 1px solid;
    }
    
    .getPriceLong .addtocartdocs:hover{
        text-decoration: none;
        color: #fc7019 !important;
        /* color: #fd0916 !important; */
        background-color: rgba(0,0,0,0) !important;
    }
    
    .getPriceLong > span{
        margin: 0 1em;
    }
    
    /* TABLE FIX */
    #specifications table { border-collapse: separate; border-spacing: 1px; border: 1px solid #999;} 
    
    div.twocols>div{
    display:inline-block;
    vertical-align:top;
    width:44%;
    margin:2.5%;
    box-sizing:border-box;
    padding:0 2%
    }
    div.twocols{
    width:100%;
    clear:both;
    }
    div.twocols>div img{
    max-width:99%;
    height:auto;
    }
    .aligncenter{
    text-align:center;
    }
    
    span.highlight{
    font-weight:bold;
    background-color: yellow;
    }
    
    #rotateLabel {
        /* Rotate div */
        -ms-transform: rotate(-90deg) translate(-146%, 0); /* IE 9 */
        -webkit-transform: rotate(-90deg) translate(-146%, 0); /* Chrome, Safari, Opera */
        transform: rotate(-90deg) translate(-146%, 0);
        -moz-transform: rotate(-90deg) translate(-146%, 0);
        color: #ffffff;
        white-space: nowrap;
        width: 32px;
    
    }
    
    #columnTableNoLink a {
        color: #ffffff;
        text-decoration: none;
    }
    
    /* This section is for styling and positioning contents on www.icpdas-usa.com/login/index.php */
    
    .user-login {
        position: relative;
        float: none;
        width: 550px;
        height: 200px;
    }
    
    
    .login-form-row {
        position: relative;
        width: 400px;
        height: 50px;
        float: none;
    }
    
    .login-label {
        width:100px;
        margin-left:-29px;
        padding:17px 10px;
        vertical-align:middle;
        color:#0f0f0f;
        font-size:11px;
        font-weight: bold;
        float: left;
        text-align: right;
    }
    
    .login-form-row-links {
        position: relative;
        width: 400px;
        height: 20px;
        float: left;
        text-decoration: none;
        color: #2679c5;
    }
    
    .login-label-blank{
        width:241px;
        margin:2px;
        padding:8px 2px;
        vertical-align:middle;
        color:#0f0f0f;
        font-size:11px;
        float: left;
    }
    
    .login-label-blank-button {
        width:241px;
        margin:0px;
        padding:8px 2px;
        vertical-align:middle;
        color:#0f0f0f;
        font-size:11px;
        float: left;
    }
     
    .login-label-blank input, .login-label-blank select {
        border:1px solid #c5c5c5;
        box-shadow:0 0 2px #c5c5c5;
        height:29px;
        min-width:85%;
    }
    
    .login-label-blank-button input, .login-label-blank-button select {
        border:1px solid #c5c5c5;
        box-shadow:0 0 2px #c5c5c5;
        height:35px;
        width:80px;
    }
    
    .login-label-blank select {
        text-align:center;
    }
    
    #forgot-password-link {
        position: relative;
        float: none;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: 5px;
        text-decoration: none;
    }
    
    #create-account-link {
        position: relative;
        float: none;
        margin-top: 10px;
        margin-bottom: 10px;
        text-decoration: none;
    }
    /*
    #forgot-password-link a:hover {
        position: relative;
        float: none;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    
    #create-account-link a:hover {
        position: relative;
        float: none;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    */
    .emailLabel {
        float: left;
        min-width: 100px;
        width: 100px
    }
    
    .passwordLabel {
        float: left;
        min-width: 100px;
        width: 100px;
    }
    
    .blue-hyperlinks-nounderline {
        text-decoration: none;
    }
    
    /* This section pertains to the main login page for authenticated users  */
    
    .account-option {
        position: relative;
        float: left;
        width: 192px;
        height: 180px;
        margin-left: 10px;
        border-style: solid;
        border-width: thin;
        border-color: #dedede;
    }
    
    .account-option-left {
        position: relative;
        float: left;
        width: 192px;
        height: 180px;
        border-style: solid;
        border-width: thin;
        border-color: #dedede;
    }
    
    .option-header {
        position: relative;
        /* float: left; */
        width: 192px;
        height: 25px;
        display: inline-block;
        line-height: 25px;
        border-style: solid;
        border-width: thin;
        border-color: #dedede;
        text-align: center;
        vertical-align: middle;
        background: blue; /* For browsers that do not support gradients */
        background: -webkit-linear-gradient(#292d8f, #268fc9); /* For Safari 5.1 to 6.0 */
        background: -o-linear-gradient(#292d8f, #268fc9); /* For Opera 11.1 to 12.0 */
        background: -moz-linear-gradient(#292d8f, #268fc9); /* For Firefox 3.6 to 15 */
        background: linear-gradient(#292d8f, #268fc9); /* Standard syntax (must be last) */
        font-weight: bold;
        color: #ffffff;
    }
    
    .option-items-list-section {
        position: relative;
        float: left;
        width: 192px;
        height: 153px;
        text-align: left;
        border-style: solid;
        border-width: thin;
        border-color: #dedede;
        text-align: left;
    }
    
    .option-items-list-section li {
        list-style: none;
        margin-left: -25px;
        text-decoration: none;
        color: #2679c5;
    }
    
    .option-items-list-section a {
        text-decoration: none;
    }
    
    .new-account-button {
    margin-top: -20px;
    margin-left: 114px;
    padding:0px;
    color:black;
    text-decoration:none;
    background: #c3c3c3; /* Old browsers */
    background: -moz-linear-gradient(top,  #fbfbfb 0%, #c3c3c3 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbfbfb), color-stop(100%,#c3c3c3)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #fbfbfb 0%,#c3c3c3 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#c3c3c3',GradientType=0 ); /* IE6-9 */
    box-shadow:0px 0px 0px 1px #d9d9d9;
    font-weight:bold;
    border-radius:2px;
    width: 110px;
    height: 30px;
    }
    
    .update-account-button {
        padding: 7px;
        color: black;
        text-decoration: none;
        background: #c3c3c3; /* Old browsers */
        background: -moz-linear-gradient(top,  #fbfbfb 0%, #c3c3c3 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbfbfb), color-stop(100%,#c3c3c3)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* IE10+ */
        background: linear-gradient(to bottom,  #fbfbfb 0%,#c3c3c3 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#c3c3c3',GradientType=0 ); /* IE6-9 */
        box-shadow: 0px 0px 0px 1px #d9d9d9;
        font-weight: bold;
        margin: -10px 0px 0px 114px;
        border-radius: 2px;
        line-height: 0px;
        width: 100px;
        height: 25px;
    }
    
    .print-invoice-button {
        padding: 8px;
        color: black;
        text-decoration: none;
        background: #c3c3c3; /* Old browsers */
        background: -moz-linear-gradient(top,  #fbfbfb 0%, #c3c3c3 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbfbfb), color-stop(100%,#c3c3c3)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* IE10+ */
        background: linear-gradient(to bottom,  #fbfbfb 0%,#c3c3c3 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#c3c3c3',GradientType=0 ); /* IE6-9 */
        box-shadow: 0px 0px 0px 1px #d9d9d9;
        font-weight: bold;
        margin: 5px 0px 0px 5px;
        border-radius: 2px;
        line-height: 0px;
        width: 100px;
        height: 25px;
    }
    
    .create-account-form-row {
        position: relative;
        width: 690px;
        height: 50px;
        float: left;
        padding-top: 3px;
    }
    
    .captcha-position {
        position: relative;
        float: none;
        margin-top: 12px;
        margin-left: 110px;
    }
    
    /* My account non-edit section */
    
    .myaccount-label-blank {
        width:241px;
        margin:2px;
        padding:8px 2px;
        vertical-align:middle;
        color:#0f0f0f;
        font-size:11px;
        float: left;
        line-height: 29px;
    }
    
    .myaccount-view-label {
        margin-left: 10px;
    }
    
    /* myaccount non-edit section end  */
    
    
    
    /* Edit Account for logged authenticated users*/
    
    .edit-account {
        position: relative;
        float: none;
        width: 550px;
        height: 200px;
    }
    
    .edit-account-form-row {
        position: relative;
        width: 400px;
        height: 50px;
        float: none;
    }
    
    .edit-account-label {
        width:100px;
        margin-left:-29px;
        padding:17px 10px;
        vertical-align:middle;
        color:#0f0f0f;
        font-size:11px;
        font-weight: bold;
        float: left;
        text-align: right;
    }
    
    .edit-account-form-row-links {
        position: relative;
        width: 400px;
        height: 20px;
        float: left;
        text-decoration: none;
        color: #2679c5;
    }
    
    .edit-account-label-blank{
        width:241px;
        margin:2px;
        padding:8px 2px;
        vertical-align:middle;
        color:#0f0f0f;
        font-size:11px;
        float: left;
    }
    
    .edit-account-label-blank-button {
        width:241px;
        margin:0px;
        padding:8px 2px;
        vertical-align:middle;
        color:#0f0f0f;
        font-size:11px;
        float: left;
    }
     
    .edit-account-label-blank input, .edit-account-label-blank select {
        border:1px solid #c5c5c5;
        box-shadow:0 0 2px #c5c5c5;
        height:30px;
        min-width:85%;
    }
    
    .edit-account-label-blank-button input, .edit-account-label-blank-button select {
        border:1px solid #c5c5c5;
        box-shadow:0 0 2px #c5c5c5;
        height:30px;
        width:80px;
        cursor: pointer;
        margin-top: -9px;
    }
    
    .edit-account-label-blank select {
        text-align:center;
    }
    
    .edit-account-button {
    margin-top: -39px;
    margin-left: 110px;
    padding:0px;
    color:black;
    text-decoration:none;
    background: #c3c3c3; /* Old browsers */
    background: -moz-linear-gradient(top,  #fbfbfb 0%, #c3c3c3 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbfbfb), color-stop(100%,#c3c3c3)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #fbfbfb 0%,#c3c3c3 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#c3c3c3',GradientType=0 ); /* IE6-9 */
    box-shadow:0px 0px 0px 1px #d9d9d9;
    font-weight:bold;
    border-radius:1px;
    width: 80px;
    height: 25px;
    height: 25px;
    float: right;
    }
    
    .edit-mypassword-label {
        width:165px;
        margin-left:-29px;
        padding:17px 10px;
        vertical-align:middle;
        color:#0f0f0f;
        font-size:11px;
        font-weight: bold;
        float: left;
        text-align: right;
    }
    
    .update-account-cancel-button {
        padding: 7px;
        color: black;
        text-decoration: none;
        background: #c3c3c3; /* Old browsers */
        background: -moz-linear-gradient(top,  #fbfbfb 0%, #c3c3c3 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbfbfb), color-stop(100%,#c3c3c3)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* IE10+ */
        background: linear-gradient(to bottom,  #fbfbfb 0%,#c3c3c3 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#c3c3c3',GradientType=0 ); /* IE6-9 */
        box-shadow: 0px 0px 0px 2px #d9d9d9;
        font-weight: bold;
        font-size: 13px;
        margin-left: 13px;
        border-radius: 2px;
        line-height: 0px;
        width: 100px;
        height: 25px;
    }
    
    .left-right-split-edit {
        width: 100%;
    }
    
    .left-split-edit {
        float: left;
    }
    
    .right-split-edit {
        float: right;
    }
    
    #forgot-password-link {
        position: relative;
        float: none;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: 5px;
        text-decoration: none;
    }
    
    #create-account-link {
        position: relative;
        float: none;
        margin-top: 10px;
        margin-bottom: 10px;
        text-decoration: none;
    }
    
    .emailLabel {
        float: left;
        min-width: 100px;
        width: 100px
    }
    
    .passwordLabel {
        float: left;
        min-width: 100px;
        width: 100px;
    }
    
    .blue-hyperlinks-nounderline {
        text-decoration: none;
    }
    
    /* This section is for styling and positioning contents on www.icpdas-usa.com/login/resources/myorders.php */
    
    .yourorders {
        position: relative;
        float: none;
        width: 755px;
        min-height: 303px;
        border: 0px solid #dddddd;
        padding: 10px;
    }
    
    .myorders-navigation {
        position: relative;
        float: left;
        min-height: 300px;
        min-width: 165px;
        border: 1px solid #dddddd;
    }
    
    .myorders-content {
        position: left;
        min-height: 300px;
        float: left;
        width: 100%;
        /*border: 1px solid #dddddd;*/
    }
    
    #myorders-hr {
        position: relative;
        width: 100%;
        background-image: url("https://www.icpdas-usa.com/images/productsectiontopshadow.jpg");
        background-repeat: repeat-x;
        border: 0;
        height: 1px;
        text-align: center;
        margin: 0 auto;
    }
    
    #myorders-billing-address {
        position: relative;
        float: left;
        width: 50%;
        height: 130px;
        
    }
    
    #myorders-shipping-address {
        position: relative;
        float: left;
        width: 50%;
        height: 130px;
    }
    
    #myorders-field-label {
        position: relative;
        float: none;
        padding-bottom: 10px;
    }
    
    #myorders-company-label {
        position: relative;
        padding-bottom: 5px;
        float: none;
        font-weight: bold;
    }
    
    #myorders-address {
        position: relative;
        float: none;
    }
    
    #myorders-city-state {
        position: relative;
        float: none;
    }
    
    #myorders-country {
        position: relative;
        float: none;
    }
    
    #myorders-items-columns {
        position: relative;
        width: 100%;
        height: 30px;
        background-color: #176cbd;
        float: none;
        line-height: 30px;
    }
    
    #myorders-current-order-column-label {
        position: relative;
        float: left;
        color: #FFFFFF;
        font-weight: bold;
        font-size: 11px;
    }
    
    #myorders-item-row {
        position: relative;
        width: 100%;
        height: 70px;
        float: none;
        line-height: 25px;
        margin-top: 20px;
    }
    
    #myorders-item-image {
        position: relative;
        float: left;
        width: 25%;
        margin-left: 5px;
    }
    
    #myorders-item-description {
        position: relative;
        float: left;
        width: 35%;
        margin-left: 0px;
    }
    
    #myorders-item-description-model {
        position: relative;
        float: none;
        height: 15px;
        margin-left: 0px;
    }
    
    #myorders-warantee {
        position: relative;
        float: none;
        height: 0px;
        margin-left: 0px;
    }
    
    #myorders-item-quantity {
        position: relative;
        float: left;
        width: 40%;
        margin-left: 0px;
        text-align: center;
    }
    
    #myorders-item-price {
        position: relative;
        float: left;
        width: 12%;
        margin-left: 0px;
        text-align: center;
    }
    
    #myorders-item-total {
        position: relative;
        float: left;
        width: 10%;
        margin-left: 0px;
        text-align: center;
    }
    
    #myorders-tally {
        position: relative;
        margin-top: 30px;
        float: none;
        width: 100%;
        min-height: 100%;
        clear: both;
    }
    
    #myorders-tally-section-1 {
        position: relative;
        width: 45%;
        float: left;
    }
    
    #myorders-tally-section-2 {
        position: relative;
        width: 25%;
        float: left;
    }
    
    #myorders-tally-section-3 {
        position: relative;
        width: 25%;
        float: left;
    }
    
    #myorders-tally-label {
        position: relative;
        text-align: right;
        font-weight: bold;
        float: none;
        padding-bottom: 20px;
    }
    
    .myorders-print-invoice-button {
    margin-top: 10px;
    margin-left: 110px;
    padding:0px;
    color:black;
    text-decoration:none;
    background: #c3c3c3; /* Old browsers */
    background: -moz-linear-gradient(top,  #fbfbfb 0%, #c3c3c3 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbfbfb), color-stop(100%,#c3c3c3)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #fbfbfb 0%,#c3c3c3 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#c3c3c3',GradientType=0 ); /* IE6-9 */
    box-shadow:0px 0px 0px 1px #d9d9d9;
    font-weight:bold;
    border-radius:2px;
    width: 80px;
    height: 30px;
    float: right;
    }
    
    .myorders-print-invoice-button-nav {
        margin-top: -38px;
        margin-left: 110px;
        padding:0px;
        color:black;
        text-decoration:none;
        background: #c3c3c3; /* Old browsers */
        background: -moz-linear-gradient(top,  #fbfbfb 0%, #c3c3c3 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbfbfb), color-stop(100%,#c3c3c3)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* IE10+ */
        background: linear-gradient(to bottom,  #fbfbfb 0%,#c3c3c3 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#c3c3c3',GradientType=0 ); /* IE6-9 */
        box-shadow:0px 0px 0px 1px #d9d9d9;
        font-weight:bold;
        border-radius:1px;
        width: 80px;
        height: 27px;
        float: right;
        line-height: 23px;
        font-size: 12px;
        width: 110px;
        text-align: center;
        height: 23px;
    }
    
    #myorders-history-order-column-label {
        position: relative;
        float: left;
        color: #FFFFFF;
        font-weight: bold;
        font-size: 11px;
        text-align: center;
    }
    
    #myorders-history-item-order-date {
        position: relative;
        float: left;
        width: 120px;
        margin-left: 5px;
        text-align: center;
    }
    
    #myorders-history-item-order-total {
        position: relative;
        float: left;
        width: 145px;
        margin-left: 0px;
        text-align: center;
    }
    
    #myorders-history-item-order-number {
        position: relative;
        float: left;
        width: 85px;
        margin-left: 0px;
        text-align: center;
    }
    
    #myorders-history-item-order-tracking {
        position: relative;
        float: left;
        width: 290px;
        margin-left: 0px;
        text-align: center;
    }
    
    @media print {
        #printInvoiceButton {
            display: none !important;
        }
    }
    
    .login-button {
    margin-top: 10px;
    margin-left: 4px;
    padding:0px;
    color:black;
    text-decoration:none;
    background: #c3c3c3; /* Old browsers */
    background: -moz-linear-gradient(top,  #fbfbfb 0%, #c3c3c3 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbfbfb), color-stop(100%,#c3c3c3)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #fbfbfb 0%,#c3c3c3 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#c3c3c3',GradientType=0 ); /* IE6-9 */
    box-shadow:0px 0px 0px 1px #d9d9d9;
    font-weight:bold;
    border-radius:2px;
    width: 110px;
    height: 30px;
    }
    
    .edit-mypassword-form-row {
        position: relative;
        width: 690px;
        height: 50px;
        float: left;
        display: block;
    }
    
    .edit-password-button {
    margin-top: -32px;
    margin-left: 115px;
    padding:0px;
    color:black;
    text-decoration:none;
    background: #c3c3c3; /* Old browsers */
    background: -moz-linear-gradient(top,  #fbfbfb 0%, #c3c3c3 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbfbfb), color-stop(100%,#c3c3c3)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #fbfbfb 0%,#c3c3c3 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#c3c3c3',GradientType=0 ); /* IE6-9 */
    box-shadow:0px 0px 0px 1px #d9d9d9;
    font-weight:bold;
    border-radius:2px;
    width: 80px;
    height: 30px;
    float: left;
    }
    
    .edit-password-label-blank{
        width:241px;
        margin-top: -7px;
        padding:8px 2px;
        vertical-align:middle;
        color:#0f0f0f;
        font-size:11px;
        float: left;
    }
    
    
    /* This is section is for positioning the fields in the Login - Search Orders  */
    
    .search-order-label {
        width:155px;
        margin-left:-29px;
        padding:17px 10px;
        vertical-align:middle;
        color:#0f0f0f;
        font-size:11px;
        font-weight: bold;
        float: left;
        text-align: right;
    }
    
    .search-order-button {
        margin-top: -8px;
        margin-left: 0;
        padding:0px;
        color:black;
        text-decoration:none;
        background: #c3c3c3; /* Old browsers */
        background: -moz-linear-gradient(top,  #fbfbfb 0%, #c3c3c3 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbfbfb), color-stop(100%,#c3c3c3)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* IE10+ */
        background: linear-gradient(to bottom,  #fbfbfb 0%,#c3c3c3 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#c3c3c3',GradientType=0 ); /* IE6-9 */
        box-shadow:0px 0px 0px 1px #d9d9d9;
        font-weight:bold;
        border-radius:2px;
        width: 80px;
        height: 30px;
    }
    
    /* This section is for the navbar for the login system  */
    
    .dropbtn-nav {
        background: rgba(0,0,0,0) linear-gradient(#292d8f, #268fc9) repeat scroll 0 0;
        color: white;
        padding: 3px;
        font-size: 14px;
        border: 1px;
        font-weight: bold;
        cursor: pointer;
        min-width: 200px;
        margin-left: 10px;
        
    }
    
    .dropdown-nav {
        position: relative;
        display: inline-block;
        z-index: 3;
    }
    
    .dropdown-content-nav a {
        color: #2679c5;
        padding: 6px 16px;
        text-decoration: none;
        display: block;
    
    }
    
    .dropdown-content-nav a:hover {
        background-color: #f1f1f1;
    }
    
    .dropdown-nav:hover .dropdown-content-nav {
        display: block;
    }
    
    .dropdown-nav:hover .dropbtn {
        background: rgba(0,0,0,0) linear-gradient(#292d8f, #268fc9) repeat scroll 0 0;
    }
    
    /**  Navbar login - main page  */
    .dropbtn-nav-main {
        background: rgba(0,0,0,0) linear-gradient(#292d8f, #268fc9) repeat scroll 0 0;
        color: white;
        padding: 3px;
        font-size: 14px;
        border: 1px;
        font-weight: bold;
        cursor: pointer;
        min-width: 200px;
        margin-left: 10px;
        
    }
    
    .dropdown-nav-main {
        position: relative;
        display: inline-block;
        z-index: 3;
    }
    
    .dropdown-content-nav-main {
        display: block;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        margin-left: 10px;
        height: 85px;
    }
    
    .dropdown-content-nav-main a {
        color: #2679c5;
        padding: 6px 16px;
        text-decoration: none;
        display: block;
    
    }
    
    .dropdown-content-nav-main a:hover {
        background-color: #f1f1f1;
    }
    
    .dropdown-nav-main:hover .dropdown-content-nav-main {
        display: block;
    }
    
    .dropdown-nav-main:hover .dropbtn-main {
        background: rgba(0,0,0,0) linear-gradient(#292d8f, #268fc9) repeat scroll 0 0;
    }
    
    /* Navbar end */
    
    
    
    
    
    .address-scroll-off {
        overflow-x: hidden;
        overflow-y: hidden;
    }
    
    .delete-address-button {
    margin-top: 10px;
    margin-left: 0px;
    padding:0px;
    color:black;
    text-decoration:none;
    text-align: center;
    background: #c3c3c3; /* Old browsers */
    background: -moz-linear-gradient(top,  #fbfbfb 0%, #c3c3c3 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fbfbfb), color-stop(100%,#c3c3c3)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #fbfbfb 0%,#c3c3c3 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #fbfbfb 0%,#c3c3c3 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#c3c3c3',GradientType=0 ); /* IE6-9 */
    box-shadow:0px 0px 0px 1px #d9d9d9;
    font-weight:bold;
    border-radius:2px;
    width: 80px;
    height: 30px;
    line-height: 30px;
    float: left;
    }
    
    
    
    .addtocartbuttons31 div { 
        display: inline;
        font-size: 10px;
        height: 34px;
        position: relative;
    }
    
    .adcbuttons3 { 
        margin: 0px 0px 0px 0px;
        position: relative;
        top: -15px;
    }
    
    div.RoHS1{
        float:right;
        padding-right: 25px;
        padding-top: -15px;
    }
    
    .button_01 {
            -moz-appearance: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            appearance: none;
            -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            -ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            background-color: transparent;
            border-radius: 6px;
            border: 0;
            box-shadow: inset 0 0 0 1px #e2eaec;
            color: #626c6e !important;
            cursor: pointer;
            display: inline-block;
            line-height: 25px;
            text-transform: capitalize;
            padding: .6px;
            text-align: left;
            padding-left: 25px;
            text-decoration: none;
            white-space: nowrap;
            font-family: 'Raleway', sans-serif !important;
            font-weight: 400;
            
        }
        
    
            .button_01.medium {
                font-size: 0.65rem;
                letter-spacing: 0;
                font-family: 'Raleway', sans-serif;
                width: 120px;
                
                
                        }
            
            .button_01.medium:hover {
                font-size: 0.65rem;
                letter-spacing: 0;
                font-family: 'Raleway', sans-serif;
                width: 120px;
                background: none;
                
                        }
            
    
            .button_01.special {
                background-color: #333333 !important;
                box-shadow: none !important;
                color: #ffffff !important;
                background:  url("images/star.png"); 
            }
    
                
    
                
                .button_01.special:hover {
                    background-color: #7f7d7d !important;
                    background:  url("images/star.png"); 
                }	
                
    
    
    
    .button_02 {
            -moz-appearance: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            appearance: none;
            -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            -ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            background-color: transparent;
            border-radius: 6px;
            border: 0;
            box-shadow: inset 0 0 0 1px #e2eaec;
            color: #626c6e !important;
            cursor: pointer;
            display: inline-block;
            line-height: 25px;
            text-transform: capitalize;
            padding: 0 5px;
            text-align: left;
            padding-left: 35px;
            text-decoration: none;
            white-space: nowrap;
            font-family: 'Raleway', sans-serif !important;
            font-weight: 400;
            
        }
        
    
            
    
            .button_02.medium {
                font-size: 0.65rem;
                letter-spacing: 0em;
                font-family: 'Raleway', sans-serif;
                width: 115px;
                
                
                        }
            
            .button_02.medium:hover {
                letter-spacing: 0;
                font-family: 'Raleway', sans-serif;
                width: 115px;
                background: none;
                
                        }
            
    
            .button_02.special {
                background-color: #333333 !important;
                box-shadow: none !important;
                color: #ffffff !important;
                background:  url("images/email.png"); 
            }
    
                
    
                
                .button_02.special:hover {
                    background-color: #7f7d7d !important;
                    background:  url("images/email.png"); 
                }	
                
    
    
    
    
    .button_04 {
            -moz-appearance: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            appearance: none;
            -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            -ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            background-color: transparent;
            border-radius: 6px;
            border: 0;
            box-shadow: inset 0 0 0 1px #e2eaec;
            color: #626c6e !important;
            cursor: pointer;
            display: inline-block;
            line-height: 25px;
            text-transform: capitalize;
            padding: .6px;
            text-align: left;
            padding-left: 22px;
            text-decoration: none;
            white-space: nowrap;
            font-family: 'Raleway', sans-serif !important;
            font-weight: 400;
            
        }
        
    
            
    
            .button_04.medium {
                font-size: 0.65rem;
                letter-spacing: 0;
                font-family: 'Raleway', sans-serif;
                width: 120px;
                
                
                        }
            
            .button_04.medium:hover {
                font-size: 0.65rem;
                letter-spacing: 0;
                font-family: 'Raleway', sans-serif;
                width: 120px;
                background: none;
                
                        }
            
    
            .button_04.special {
                background-color: #333333 !important;
                box-shadow: none !important;
                color: #ffffff !important;
                background:  url("images/info.png"); 
            }
    
                
    
                
                .button_04.special:hover {
                    background-color: #7f7d7d !important;
                    background:  url("images/info.png"); 
                }
    
    
    .promo_graphic {	
                    width: 183px;
                    margin: 25px 0px 0px 0px;
                    
                    z-index: 1;
                    
                }
    
    span.promo_graphic_header {	
                    position: absolute;
                    top: 14px; /* original is 28px*/
                    left: 381px;
                    color: red;
                    font-weight: bold;
                    font-size: 12px;
                    text-shadow: 1px 1px white;
                    background-color: none;
                    padding: 2px 4px;
                    
                }
    span.promo_graphic_subheader {	
                    position: absolute;
                    top: 126px; /* original is 28px*/
                    left: 235px;
                    color: red;
                    font-weight: bold;
                    font-size: 12px;
                    text-shadow: 1px 1px white;
                    background-color: white;
                    padding: 2px 4px;
                    
                }
                
    #docsmain .loader {
        position: absolute;
        width: 95%;
        height: 80%;
        margin-top: 0;
        z-index: 9999;
        background: url('http://www.icpdas-usa.com/images/page-loader.gif') 50% 50% no-repeat;
    }
    
    img.cornergraphic{display: none;}
    
    .shopprogramminglanguage table tr .tableheading strong {color: white;}
    #daq_search {margin-right: 70px !important;}
    /* #daq_seach_all {} */
    .mobile_converter_table {display: none;}	
    
    #review_submit {
        background-color: #fc7019;
        /* background-color: #fd0916; */
        border: medium none;
        border-radius: 6px;
        color: white;
        cursor: pointer;
        display: inline-block;
        font-family: "Raleway",sans-serif;
        font-weight: bold;
        line-height: 40px;
        margin-left: 15px;
        padding: 0.6px 15px;
        text-align: center;
        text-decoration: none;
        text-transform: capitalize;
        transition: background-color 0.2s ease-in-out 0s, color 0.2s ease-in-out 0s, box-shadow 0.2s ease-in-out 0s;
        white-space: nowrap;
    }
    
    #review_submit:hover{
        background-color: #7f7d7d;
        color: white;
    }
    
    #quote_submit_button{
        background-color: red;
        border: 2px solid;
        border-color: rgba(255,0,0,0);
        border-radius: 2px;
        color: white;
        cursor: pointer;
        display: inline-block;
        font-family: "Raleway",sans-serif;
        font-weight: bold;
        line-height: 40px;
        margin-left: 15px;
        padding: 0.6px 15px;
        text-align: center;
        text-decoration: none;
        text-transform: capitalize;
        transition: background-color 0.2s ease-in-out 0s, color 0.2s ease-in-out 0s, box-shadow 0.2s ease-in-out 0s;
        white-space: nowrap;
    }
    #quote_submit_button:hover{
        background-color: white;
        color: red;
        border-color: rgba(255,0,0,1);
    }
    
    .myorder_items_preview .category_table_row .category_table_columm {position: relative; vertical-align: top;}
    .myorder_items_preview .category_table_row .col1{vertical-align: middle;}
    .myorder_items_preview .category_table_row .col2{width: 40%;}
    .myorder_items_preview .category_table_row .col3{width: auto;}
    .myorder_items_preview .category_table_row .col4{width: auto;}
    .myorder_items_preview .category_table_row .col5{width: auto;}
    .myorder_items_preview .category_table_row .category_table_columm .desc_columm {padding-bottom: 40px;}
    .myorders-item-image {margin-left: 5px; width: 100%;}
    .myorders-item-image img {height: 84px; max-width: 90%; width: auto;}
    .extended_warranty_columm {position: absolute; bottom: 0; left: 33%;}
    .warranty_total {position: absolute; bottom: 0; left: 37%;}
    
    .total_order_preview .section .span_1_of_5 {text-align: right; width: 17.9%;}
    #expiration_options {width: 285px;}
    
    .left_filter_box table .details-left-button-large {width: 80%;}
    
    #multipleprotocols .protocol .bigbutton {color: black !important;}
    
    .wrap_content {width: 100%; background-color: white; float: left;}
    .info_table, .info_table thead tr th, .info_table tr td {
        border: 0.2px solid;
    }
    
    @media screen and (max-width: 1680px) {
        .categoryproductimage{
            width: 15%;
        }
        .categoryproductdescription{
            width: 66%;
        }
        .price_section{
            width: 17%;
        }
    }
    
    @media screen and (max-width: 1366px) {
        .categoryproductimage{
            width: 15%;
        }
        .categoryproductdescription{
            width: 65%;
        }
        .price_section{
            width: 15%;
        }
    }
    
    @media screen and (max-width: 1280px) {
        .categoryproductimage{
            width: 17%;
        }
        .categoryproductdescription{
            width: 60%;
        }
        .price_section{
            width: 20%;
        }
    }
    
    @media screen and (max-width: 1024px) {
        .categoryproductimage{
            width: 100%;
        }
        .categoryproductdescription{
            width: 100%;
        }
        .price_section{
            width: 100%;
        }
    }
    
    @media screen and (max-width: 768px) {
        .categoryproductimage{
            width: 100%;
        }
        .categoryproductdescription{
            width: 100%;
        }
        .price_section{
            width: 100%;
        }
    }
    
    @media screen and (max-width: 736px) {
        .categoryproductimage{
            width: 100%;
        }
        .categoryproductdescription{
            width: 100%;
        }
        .price_section{
            width: 100%;
        }
    }
    
    @media screen and (max-width: 480px) {
        .categoryproductimage{
            width: 100%;
        }
        .categoryproductdescription{
            width: 100%;
        }
        .price_section{
            width: 100%;
        }
    }
    
    @media screen and (max-width: 375px) {
        .categoryproductimage{
            width: 100%;
        }
        .categoryproductdescription{
            width: 100%;
        }
        .price_section{
            width: 100%;
        }
    }
    
    @media screen and (max-width: 320px) {
        .categoryproductimage{
            width: 100%;
        }
        .categoryproductdescription{
            width: 100%;
        }
        .price_section{
            width: 100%;
        }
    }
    </style>
    <script>
        jQuery(document).ready(function($) {
            $("table").attr('width', '100%');
            $("table tr, table td").each(function() {
                if (!$(this).closest("table").hasClass("dontfix")) {
                    $(this).removeClass();
                    $(this).children("span").removeClass();
                    $(this).children("div").removeClass();

                    if (
                        $(this).attr("bgcolor") == "#cccccc" ||
                        $(this).attr("bgcolor") == "#CCCCCC"
                    ) {
                        $(this).removeAttr("bgcolor");
                        $(this).addClass("tablecolumn");
                    }

                    if (
                        $(this).attr("bgcolor") == "#cccccc" ||
                        $(this).attr("bgcolor") == "#CCCCCC"
                    ) {
                        $(this).removeAttr("bgcolor");
                        $(this).addClass("tablecolumn");
                    }

                    if ($(this).attr("bgcolor") == "#000000") {
                        $(this).removeAttr("bgcolor");
                        $(this).addClass("tableheading");
                    }

                    if (
                        $(this).attr("bgcolor") == "#ffcc99" ||
                        $(this).attr("bgcolor") == "#FFCC99" ||
                        $(this).attr("bgcolor") == "#FFcc99"
                    ) {
                        $(this).removeAttr("bgcolor");
                        $(this).addClass("tablecontent");
                    }
                }
            });
        });
    </script>

    <div class="single_product_references rounded-lg shadow-lg bg-light text-white">
        <div class="font-bold text-lg text-dark">Product References</div>
        <?php foreach ($additionalReferences as $ref) {
            $file = get_field($ref);
            if ($file) : ?>
                <div class="text-dark">
                    <?php echo $ref . ": "; ?><a href="<?= $file['url'] ?>"><?= $ref ?></a>
                </div>
            <?php endif; ?>

        <?php } ?>

    </div>


    <?php do_action('woocommerce_product_meta_end'); ?>

</div>