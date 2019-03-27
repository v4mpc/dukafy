<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
  
<head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{$settings->store_name}}</title>

        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/bootstrap.min.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/font-awesome.min.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/animate.min.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/font-electro.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/owl-carousel.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/style.css')}}" media="all" />

        
        @if($settings->colour=="black")
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/colors/black.css')}}" media="all" />
        @endif @if($settings->colour=="pink")
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/colors/pink.css')}}" media="all" />
        @endif @if($settings->colour=="yellow")
        <link rel="stylesheet" type="text/css" href="{{asset('template2/assets/css/colors/yellow.css')}}" media="all" />
        @endif
       

        <!-- Demo Purpose Only. Should be removed in production -->
        <link rel="stylesheet" href="template2/assets/css/config.css">

        <link href="{{asset('template2/assets/css/colors/green.css')}}" rel="alternate stylesheet" title="Green color">
        <link href="{{asset('template2/assets/css/colors/pink.css')}}" rel="alternate stylesheet" title="Pink color">
        <link href="{{asset('template2/assets/css/colors/blue.css')}}" rel="alternate stylesheet" title="Blue color">
        <link href="{{asset('template2/assets/css/colors/red.css')}}" rel="alternate stylesheet" title="Red color">
        <link href="{{asset('template2/assets/css/colors/orange.css')}}" rel="alternate stylesheet" title="Orange color">
        <link href="{{asset('template2/assets/css/colors/black.css')}}" rel="alternate stylesheet" title="Black color">
        <link href="{{asset('template2/assets/css/colors/gold.css')}}" rel="alternate stylesheet" title="Gold color">
        <link href="{{asset('template2/assets/css/colors/yellow.css')}}" rel="alternate stylesheet" title="Yellow color">
        <link href="{{asset('template2/assets/css/colors/flat-blue.css')}}" rel="alternate stylesheet" title="Flat Blue color">
        <!-- Demo Purpose Only. Should be removed in production : END -->

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic' rel='stylesheet' type='text/css'>

        <link rel="shortcut icon" href="assets/images/fav-icon.png">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/fancybox/jquery.fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/toaster/toaster.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('vendor/vendors/css/extensions/sweetalert.css')}}">


        <style>

@if(Route::is('product.show'))

@media (max-width: 479px){
  .thumbnails-all > .owl-stage-outer > .owl-stage > .owl-item {
    width: 65px !important;
}


@media (min-width: 544px) and (max-width: 991px) {
  /*544-991*/


  #content #sidebar {
    margin-top: 50px !important; }
  .header-logo,
  .primary-nav,
  .header-support-info {
    width: 100%;
    text-align: center;
    display: inline-block; }
  .header-support-info {
    float: none; }
    .header-support-info .media-body, .header-support-info .media-left, .header-support-info .media-right {
      display: inline-block; }
    .header-support-info .media-body {
      width: auto; }
    .header-support-info .media-left {
      padding-right: 10px;
      padding-left: 0; }
  .primary-nav {
    float: left; }
  .home-v1-ads-block .ad .media-left {
    padding: 0;
    width: 100%; }
  .home-v1-ads-block .ad .media-body {
    display: block;
    text-align: center;
    width: 100%; }
  .products-carousel-tabs .tab-content ul.products {
    margin-right: -10px;
    margin-left: -10px; }
    .products-carousel-tabs .tab-content ul.products > li.product, .products-carousel-tabs .tab-content .section-onsale-product ul.products > .onsale-product, .section-onsale-product .products-carousel-tabs .tab-content ul.products > .onsale-product, .products-carousel-tabs .tab-content .section-onsale-product-carousel .onsale-product-carousel .onsale-product ul.products > .onsale-product-content, .section-onsale-product-carousel .onsale-product-carousel .onsale-product .products-carousel-tabs .tab-content ul.products > .onsale-product-content, .products-carousel-tabs .tab-content .products-carousel .owl-item ul.products > .product, .products-carousel .owl-item .products-carousel-tabs .tab-content ul.products > .product {
      width: 50%;
      padding-right: 6px;
      padding-left: 6px; }
      .products-carousel-tabs .tab-content ul.products > li.product::after, .products-carousel-tabs .tab-content .section-onsale-product ul.products > .onsale-product::after, .section-onsale-product .products-carousel-tabs .tab-content ul.products > .onsale-product::after, .products-carousel-tabs .tab-content .section-onsale-product-carousel .onsale-product-carousel .onsale-product ul.products > .onsale-product-content::after, .section-onsale-product-carousel .onsale-product-carousel .onsale-product .products-carousel-tabs .tab-content ul.products > .onsale-product-content::after, .products-carousel-tabs .tab-content .products-carousel .owl-item ul.products > .product::after, .products-carousel .owl-item .products-carousel-tabs .tab-content ul.products > .product::after {
        display: none; }
      .products-carousel-tabs .tab-content ul.products > li.product.first, .products-carousel-tabs .tab-content .section-onsale-product ul.products > .first.onsale-product, .section-onsale-product .products-carousel-tabs .tab-content ul.products > .first.onsale-product, .products-carousel-tabs .tab-content .section-onsale-product-carousel .onsale-product-carousel .onsale-product ul.products > .first.onsale-product-content, .section-onsale-product-carousel .onsale-product-carousel .onsale-product .products-carousel-tabs .tab-content ul.products > .first.onsale-product-content, .products-carousel-tabs .tab-content .products-carousel .owl-item ul.products > .first.product, .products-carousel .owl-item .products-carousel-tabs .tab-content ul.products > .first.product {
        clear: none; }
  .product-cards-carousel ul.products > li.product, .product-cards-carousel .section-onsale-product ul.products > .onsale-product, .section-onsale-product .product-cards-carousel ul.products > .onsale-product, .product-cards-carousel .section-onsale-product-carousel .onsale-product-carousel .onsale-product ul.products > .onsale-product-content, .section-onsale-product-carousel .onsale-product-carousel .onsale-product .product-cards-carousel ul.products > .onsale-product-content, .product-cards-carousel .products-carousel .owl-item ul.products > .product, .products-carousel .owl-item .product-cards-carousel ul.products > .product {
    width: 100%;
    padding-right: 0;
    padding-left: 0;
    margin: 0.4em 0; }
    .product-cards-carousel ul.products > li.product .price, .product-cards-carousel .section-onsale-product ul.products > .onsale-product .price, .section-onsale-product .product-cards-carousel ul.products > .onsale-product .price, .product-cards-carousel .section-onsale-product-carousel .onsale-product-carousel .onsale-product ul.products > .onsale-product-content .price, .section-onsale-product-carousel .onsale-product-carousel .onsale-product .product-cards-carousel ul.products > .onsale-product-content .price, .product-cards-carousel .products-carousel .owl-item ul.products > .product .price, .products-carousel .owl-item .product-cards-carousel ul.products > .product .price {
      font-size: 1.429em; }
  .products .product.product-card .media-body {
    padding-left: 1.929em !important; }
  .products-carousel-tabs .tab-content {
    margin-top: 30px; }
    .products-carousel-tabs .tab-content .products .owl-stage .owl-item:not(.active) + .owl-item.active .product,
    .products-carousel-tabs .tab-content .products .owl-stage .owl-item.active:first-child .product {
      margin: 0; }
    .products-carousel-tabs .tab-content .products .owl-item {
      margin-bottom: 10px; }
      .products-carousel-tabs .tab-content .products .owl-item .product::after {
        display: none; }
  .products-2-1-2 li.product .hover-area, .products-2-1-2 .section-onsale-product .onsale-product .hover-area, .section-onsale-product .products-2-1-2 .onsale-product .hover-area, .products-2-1-2 .section-onsale-product-carousel .onsale-product-carousel .onsale-product .onsale-product-content .hover-area, .section-onsale-product-carousel .onsale-product-carousel .onsale-product .products-2-1-2 .onsale-product-content .hover-area, .products-2-1-2 .products-carousel .owl-item .product .hover-area, .products-carousel .owl-item .products-2-1-2 .product .hover-area {
    background-color: transparent; }
  .products-6-1 .columns-6-1 ul.products.products-6 li.product, .products-6-1 .columns-6-1 ul.products.products-6 .section-onsale-product .onsale-product, .section-onsale-product .products-6-1 .columns-6-1 ul.products.products-6 .onsale-product, .products-6-1 .columns-6-1 ul.products.products-6 .section-onsale-product-carousel .onsale-product-carousel .onsale-product .onsale-product-content, .section-onsale-product-carousel .onsale-product-carousel .onsale-product .products-6-1 .columns-6-1 ul.products.products-6 .onsale-product-content, .products-6-1 .columns-6-1 ul.products.products-6 .products-carousel .owl-item .product, .products-carousel .owl-item .products-6-1 .columns-6-1 ul.products.products-6 .product {
    width: 50%;
    margin-top: 0.4em; }
    .products-6-1 .columns-6-1 ul.products.products-6 li.product:hover .product-inner, .products-6-1 .columns-6-1 ul.products.products-6 .section-onsale-product .onsale-product:hover .product-inner, .section-onsale-product .products-6-1 .columns-6-1 ul.products.products-6 .onsale-product:hover .product-inner, .products-6-1 .columns-6-1 ul.products.products-6 .section-onsale-product-carousel .onsale-product-carousel .onsale-product .onsale-product-content:hover .product-inner, .section-onsale-product-carousel .onsale-product-carousel .onsale-product .products-6-1 .columns-6-1 ul.products.products-6 .onsale-product-content:hover .product-inner, .products-6-1 .columns-6-1 ul.products.products-6 .products-carousel .owl-item .product:hover .product-inner, .products-carousel .owl-item .products-6-1 .columns-6-1 ul.products.products-6 .product:hover .product-inner {
      padding-right: 1.714em; }
    .products-6-1 .columns-6-1 ul.products.products-6 li.product.first, .products-6-1 .columns-6-1 ul.products.products-6 .section-onsale-product .first.onsale-product, .section-onsale-product .products-6-1 .columns-6-1 ul.products.products-6 .first.onsale-product, .products-6-1 .columns-6-1 ul.products.products-6 .section-onsale-product-carousel .onsale-product-carousel .onsale-product .first.onsale-product-content, .section-onsale-product-carousel .onsale-product-carousel .onsale-product .products-6-1 .columns-6-1 ul.products.products-6 .first.onsale-product-content, .products-6-1 .columns-6-1 ul.products.products-6 .products-carousel .owl-item .first.product, .products-carousel .owl-item .products-6-1 .columns-6-1 ul.products.products-6 .first.product {
      clear: none; }
  .section-products-carousel .products-carousel .owl-item .product {
    margin: 0;
    padding-right: 6px;
    padding-left: 6px; }
    .section-products-carousel .products-carousel .owl-item .product::after {
      display: none; }
  .section-products-carousel .products-carousel .owl-stage .owl-item.active:first-child .product {
    margin: 0; }
  .product-cards-carousel .products .product.product-card .media-body .hover-area {
    visibility: visible;
    opacity: 1; }
  .primary-nav .nav-inline > .menu-item {
    display: inline-block; }
    .primary-nav .nav-inline > .menu-item.dropdown + .menu-item {
      margin-left: 0; }
    .primary-nav .nav-inline > .menu-item + .menu-item {
      margin-left: 0; }
    .primary-nav .nav-inline > .menu-item > a {
      display: block;
      padding: 0.6em 0.800em; }
  .header-support-info .media {
    width: 50%;
    display: inline-block; }
  .footer-bottom-widgets {
    margin-left: -0.9375rem;
    margin-right: -0.9375rem;
    margin-left: 0;
    margin-right: 0; }
    .footer-bottom-widgets::after {
      content: "";
      display: table;
      clear: both; }
    .footer-bottom-widgets .columns {
      position: relative;
      float: left;
      min-height: 1px;
      padding-left: 0.9375rem;
      padding-right: 0.9375rem;
      width: 33.3333333333%; }
      .footer-bottom-widgets .columns + .columns {
        margin-left: 0 !important; }
  .home-list-categories ul.categories > li.category:nth-child(2n)::after,
  .home-list-categories ul.categories > li.category:last-child::after {
    content: none;
    display: none; }
  .home-list-categories ul.categories > li.category:nth-child(3n)::after {
    content: ""; }
  .home-list-categories ul.categories > li.category:nth-child(4n) {
    clear: none; }
  .product_list_widget .product-title {
    margin-left: 95px; }
  ul.products > li.product.list-view .media-body .col-xs-12:first-child, .section-onsale-product ul.products > .list-view.onsale-product .media-body .col-xs-12:first-child, .section-onsale-product-carousel .onsale-product-carousel .onsale-product ul.products > .list-view.onsale-product-content .media-body .col-xs-12:first-child, .products-carousel .owl-item ul.products > .list-view.product .media-body .col-xs-12:first-child,
  .section-onsale-product ul.products > .list-view.onsale-product .media-body .col-xs-12:first-child,
  .section-onsale-product-carousel .onsale-product-carousel .onsale-product ul.products > .list-view.onsale-product-content .media-body .col-xs-12:first-child,
  .products-carousel .owl-item ul.products > .list-view.product .media-body .col-xs-12:first-child {
    padding-right: 1.071em;
    width: 55%; }
  ul.products > li.product.list-view .media-body .col-xs-12:last-child, .section-onsale-product ul.products > .list-view.onsale-product .media-body .col-xs-12:last-child, .section-onsale-product-carousel .onsale-product-carousel .onsale-product ul.products > .list-view.onsale-product-content .media-body .col-xs-12:last-child, .products-carousel .owl-item ul.products > .list-view.product .media-body .col-xs-12:last-child,
  .section-onsale-product ul.products > .list-view.onsale-product .media-body .col-xs-12:last-child,
  .section-onsale-product-carousel .onsale-product-carousel .onsale-product ul.products > .list-view.onsale-product-content .media-body .col-xs-12:last-child,
  .products-carousel .owl-item ul.products > .list-view.product .media-body .col-xs-12:last-child {
    width: 45%; }
    ul.products > li.product.list-view .media-body .col-xs-12:last-child .hover-area, .section-onsale-product ul.products > .list-view.onsale-product .media-body .col-xs-12:last-child .hover-area, .section-onsale-product-carousel .onsale-product-carousel .onsale-product ul.products > .list-view.onsale-product-content .media-body .col-xs-12:last-child .hover-area, .products-carousel .owl-item ul.products > .list-view.product .media-body .col-xs-12:last-child .hover-area,
    .section-onsale-product ul.products > .list-view.onsale-product .media-body .col-xs-12:last-child .hover-area,
    .section-onsale-product-carousel .onsale-product-carousel .onsale-product ul.products > .list-view.onsale-product-content .media-body .col-xs-12:last-child .hover-area,
    .products-carousel .owl-item ul.products > .list-view.product .media-body .col-xs-12:last-child .hover-area {
      padding-top: 0;
      border-top: none; }
  .products-2-1-2 .columns-2-1-2 > ul.products:first-child > li.product, .products-2-1-2 .section-onsale-product .columns-2-1-2 > ul.products:first-child > .onsale-product, .section-onsale-product .products-2-1-2 .columns-2-1-2 > ul.products:first-child > .onsale-product, .products-2-1-2 .section-onsale-product-carousel .onsale-product-carousel .onsale-product .columns-2-1-2 > ul.products:first-child > .onsale-product-content, .section-onsale-product-carousel .onsale-product-carousel .onsale-product .products-2-1-2 .columns-2-1-2 > ul.products:first-child > .onsale-product-content, .products-2-1-2 .products-carousel .owl-item .columns-2-1-2 > ul.products:first-child > .product, .products-carousel .owl-item .products-2-1-2 .columns-2-1-2 > ul.products:first-child > .product,
  .products-2-1-2 .columns-2-1-2 > ul.products:last-child > li.product,
  .products-2-1-2 .section-onsale-product .columns-2-1-2 > ul.products:last-child > .onsale-product, .section-onsale-product
  .products-2-1-2 .columns-2-1-2 > ul.products:last-child > .onsale-product,
  .products-2-1-2 .section-onsale-product-carousel .onsale-product-carousel .onsale-product .columns-2-1-2 > ul.products:last-child > .onsale-product-content, .section-onsale-product-carousel .onsale-product-carousel .onsale-product
  .products-2-1-2 .columns-2-1-2 > ul.products:last-child > .onsale-product-content,
  .products-2-1-2 .products-carousel .owl-item .columns-2-1-2 > ul.products:last-child > .product, .products-carousel .owl-item
  .products-2-1-2 .columns-2-1-2 > ul.products:last-child > .product {
    width: 50%;
    float: left; }
    .products-2-1-2 .columns-2-1-2 > ul.products:first-child > li.product:first-child, .products-2-1-2 .section-onsale-product .columns-2-1-2 > ul.products:first-child > .onsale-product:first-child, .section-onsale-product .products-2-1-2 .columns-2-1-2 > ul.products:first-child > .onsale-product:first-child, .products-2-1-2 .section-onsale-product-carousel .onsale-product-carousel .onsale-product .columns-2-1-2 > ul.products:first-child > .onsale-product-content:first-child, .section-onsale-product-carousel .onsale-product-carousel .onsale-product .products-2-1-2 .columns-2-1-2 > ul.products:first-child > .onsale-product-content:first-child, .products-2-1-2 .products-carousel .owl-item .columns-2-1-2 > ul.products:first-child > .product:first-child, .products-carousel .owl-item .products-2-1-2 .columns-2-1-2 > ul.products:first-child > .product:first-child,
    .products-2-1-2 .columns-2-1-2 > ul.products:last-child > li.product:first-child,
    .products-2-1-2 .section-onsale-product .columns-2-1-2 > ul.products:last-child > .onsale-product:first-child, .section-onsale-product
    .products-2-1-2 .columns-2-1-2 > ul.products:last-child > .onsale-product:first-child,
    .products-2-1-2 .section-onsale-product-carousel .onsale-product-carousel .onsale-product .columns-2-1-2 > ul.products:last-child > .onsale-product-content:first-child, .section-onsale-product-carousel .onsale-product-carousel .onsale-product
    .products-2-1-2 .columns-2-1-2 > ul.products:last-child > .onsale-product-content:first-child,
    .products-2-1-2 .products-carousel .owl-item .columns-2-1-2 > ul.products:last-child > .product:first-child, .products-carousel .owl-item
    .products-2-1-2 .columns-2-1-2 > ul.products:last-child > .product:first-child {
      padding-right: 6px; }
    .products-2-1-2 .columns-2-1-2 > ul.products:first-child > li.product:last-child, .products-2-1-2 .section-onsale-product .columns-2-1-2 > ul.products:first-child > .onsale-product:last-child, .section-onsale-product .products-2-1-2 .columns-2-1-2 > ul.products:first-child > .onsale-product:last-child, .products-2-1-2 .section-onsale-product-carousel .onsale-product-carousel .onsale-product .columns-2-1-2 > ul.products:first-child > .onsale-product-content:last-child, .section-onsale-product-carousel .onsale-product-carousel .onsale-product .products-2-1-2 .columns-2-1-2 > ul.products:first-child > .onsale-product-content:last-child, .products-2-1-2 .products-carousel .owl-item .columns-2-1-2 > ul.products:first-child > .product:last-child, .products-carousel .owl-item .products-2-1-2 .columns-2-1-2 > ul.products:first-child > .product:last-child,
    .products-2-1-2 .columns-2-1-2 > ul.products:last-child > li.product:last-child,
    .products-2-1-2 .section-onsale-product .columns-2-1-2 > ul.products:last-child > .onsale-product:last-child, .section-onsale-product
    .products-2-1-2 .columns-2-1-2 > ul.products:last-child > .onsale-product:last-child,
    .products-2-1-2 .section-onsale-product-carousel .onsale-product-carousel .onsale-product .columns-2-1-2 > ul.products:last-child > .onsale-product-content:last-child, .section-onsale-product-carousel .onsale-product-carousel .onsale-product
    .products-2-1-2 .columns-2-1-2 > ul.products:last-child > .onsale-product-content:last-child,
    .products-2-1-2 .products-carousel .owl-item .columns-2-1-2 > ul.products:last-child > .product:last-child, .products-carousel .owl-item
    .products-2-1-2 .columns-2-1-2 > ul.products:last-child > .product:last-child {
      padding-left: 6px; }
  ul.products {
    margin-top: 10px; }
    ul.products > li.product, .section-onsale-product ul.products > .onsale-product, .section-onsale-product-carousel .onsale-product-carousel .onsale-product ul.products > .onsale-product-content, .products-carousel .owl-item ul.products > .product {
      padding-left: 6px;
      padding-right: 6px;
      width: 50%;
      margin: 0.4em 0; }
      ul.products > li.product::after, .section-onsale-product ul.products > .onsale-product::after, .section-onsale-product-carousel .onsale-product-carousel .onsale-product ul.products > .onsale-product-content::after, .products-carousel .owl-item ul.products > .product::after {
        display: none; }
      ul.products > li.product:nth-child(even), .section-onsale-product ul.products > .onsale-product:nth-child(even), .section-onsale-product-carousel .onsale-product-carousel .onsale-product ul.products > .onsale-product-content:nth-child(even), .products-carousel .owl-item ul.products > .product:nth-child(even) {
        clear: none; }
  .electro_posts_carousel_widget .section-posts-carousel .post-item {
    padding-right: 6px;
    padding-left: 6px; }
  .vertical-menu.make-absolute {
    overflow: hidden; }
    .vertical-menu.make-absolute > .menu-item,
    .vertical-menu.make-absolute .dropdown-menu > .menu-item {
      overflow: hidden; }
  #sidebar > aside {
    width: 50%;
    float: left;
    padding-right: 8px;
    padding-left: 8px; }
    #sidebar > aside:last-child {
      clear: both; }
  .widget_electro_products_carousel_widget .section-products-carousel {
    margin-bottom: 0; }
  .widget_electro_products_carousel_widget .products-carousel .owl-stage-outer {
    padding-bottom: 0; }
  section.section-product-cards-carousel header {
    border: none; }
    section.section-product-cards-carousel header ul.nav {
      padding-top: 1.143em;
      float: none;
      text-align: center;
      border-top: 1px solid #dadada; }
  .extended .single-product-wrapper .product-images-wrapper, .extended .single-product-wrapper .summary.entry-summary {
    width: 50%; }
  .extended .single-product-wrapper .product-actions-wrapper {
    width: 100%;
    margin-top: 60px; }
  .single-product.full-width .single-product-wrapper {
    margin-bottom: 5.429em; }
  #primary #tab-description .electro-description .layout tr td:last-child img {
    left: 60px;
    width: 100%; }
  #primary #tab-description .electro-description .layout:last-child tr td:first-child img {
    right: 60px;
    width: 100%; }
  #tab-accessories.electro-tabs .ec-tabs {
    margin-bottom: 3.571em; }
  .accessories .col-left {
    width: 100%;
    padding: 0; }
    .accessories .col-left ul.products {
      margin-right: -1.429em; }
      .accessories .col-left ul.products > li {
        width: 33.3333333333%; }
        .accessories .col-left ul.products > li .hover-area {
          display: none; }
    .accessories .col-left .check-products {
      margin-top: 60px;
      width: 56%; }
  .accessories .row {
    position: relative; }
  .accessories .col-right {
    bottom: 0;
    padding: 0;
    position: absolute;
    right: 0;
    text-align: center; } }


@endif


li.product .product-thumbnail{
    margin-bottom: 2.714em;
}
        
        #small-table{
        display:none;

    }

.map-wrapper {
    height: 350px;
    margin-bottom: 0px;
}

.social-icons{
    font-size: 22px;
}

.img-height{
	height:250px;
}

.img-alig{
    display: block;
    margin-left: auto;
    margin-right: auto;
    /* width: 40%; */
    height: 250px;
}

@media (max-width: 768px) {

    #small-table{
        display:block;

    }
    #large-table{
        display:none;
    }

    .amount{
        font-size: 12px;
    }


    li.product .product-thumbnail{
    margin-bottom: 0.714em;
}



    .product-outer{
        height: unset !important;
    }
.item-col-4 .product {
    width: 50%;
}

#rectangle{
    display:block !important;
}

.navbar-mini-cart{
    visibility: hidden;
}

}


#rectangle{
    width: 100%;
    background-color: {{$colour_code}};
    position: fixed;
    display:none;
    bottom: 0;
    height: 63px;
    z-index: 90;
    margin: 0; 
    padding-top: 6px;
    text-align: center;
    color: #FFF;
}


.cart-collaterals {
  
    padding-top: 1em !important;
}

#content {
    margin-bottom: 0.714em;
}

@media (max-width: 991px)
.header-v1 .container > .row:first-child, .header-v3 .container > .row:first-child {
    margin: 0 0 0em;
    position: relative;
}

@media (max-width: 767px){
#content {
    margin-bottom: 0.714em !important;
}
}

        
        </style>
    </head>
