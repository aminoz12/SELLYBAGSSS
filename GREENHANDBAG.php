<?php
session_start();
require_once('CreateDb.php');

// Create an instance of the Createdb class
$database = new CreateDb("Productdb", "Producttb");

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if 'product_id' is set in the POST data
    if (isset($_POST['product_id'])) {
        // Initialize the cart if it's not already set
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Get the product ID from the form submission
        $productId = $_POST['product_id'];

        // Check if the product is not already in the cart
        if (!in_array($productId, $_SESSION['cart'])) {
            // Add the product ID to the cart
            $_SESSION['cart'][] = $productId;

            // Get additional product details from the database based on the product ID
            $productDetails = $database->getProductDetailsById($productId);

            // Add the product details to the cart
            $_SESSION['cart'][] = array(
                'id' => $productDetails['id'],
                'product_name' => $productDetails['product_name'],
                'product_image' => $productDetails['product_image']
            );
        }

        // Redirect to cart after adding the item
        header("Location: cart");
        exit(); // Ensure that no further code is executed after the redirect
    } else {
        echo "Product ID is not set in the POST data.";
    }
}
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <link rel="stylesheet" href="searchstyle.css">
    <script src=“https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js”></script>
<link rel=“stylesheet” href=“https://unpkg.com/flickity@2/dist/flickity.min.css”>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="">
    <link rel="canonical" href="https://58194a.myshopify.com/products/gucci-7"><link rel="preconnect" href="https://fonts.shopifycdn.com" crossorigin><title>
      GUCCI BLONDIE TOP HANDLE BAG
 &ndash; My Store</title>

    
      <meta name="description" content="Vintage Elements Are Paired With Archival Details As An Ode To The Glamour That Permeates Gucci&#39;s Latest Collections. This Shoulder Bag Pairs A Studded Top Handle With Soft Leather To Infuse The Accessory With A Timeless Feel. Reintroduced In Honor Of The Collection, The Rounded Silhouette Is Completed By A Historical,">
    

    

<meta property="og:site_name" content="My Store">
<meta property="og:url" content="https://58194a.myshopify.com/products/gucci-7">
<meta property="og:title" content="GUCCI BLONDIE TOP HANDLE BAG">
<meta property="og:type" content="product">
<meta property="og:description" content="Vintage Elements Are Paired With Archival Details As An Ode To The Glamour That Permeates Gucci&#39;s Latest Collections. This Shoulder Bag Pairs A Studded Top Handle With Soft Leather To Infuse The Accessory With A Timeless Feel. Reintroduced In Honor Of The Collection, The Rounded Silhouette Is Completed By A Historical,"><meta property="og:image" content="http://58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563">
  <meta property="og:image:secure_url" content="https://58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563">
  <meta property="og:image:width" content="1000">
  <meta property="og:image:height" content="1334"><meta property="og:price:amount" content="600.00">
  <meta property="og:price:currency" content="USD"><meta name="twitter:site" content="@selly_bags"><meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="GUCCI BLONDIE TOP HANDLE BAG">
<meta name="twitter:description" content="Vintage Elements Are Paired With Archival Details As An Ode To The Glamour That Permeates Gucci&#39;s Latest Collections. This Shoulder Bag Pairs A Studded Top Handle With Soft Leather To Infuse The Accessory With A Timeless Feel. Reintroduced In Honor Of The Collection, The Rounded Silhouette Is Completed By A Historical,">


    <script src="//58194a.myshopify.com/cdn/shop/t/3/assets/constants.js?v=58251544750838685771688782258" defer="defer"></script>
    <script src="//58194a.myshopify.com/cdn/shop/t/3/assets/pubsub.js?v=158357773527763999511688782258" defer="defer"></script>
    <script src="//58194a.myshopify.com/cdn/shop/t/3/assets/global.js?v=139248116715221171191688782258" defer="defer"></script><script src="//58194a.myshopify.com/cdn/shop/t/3/assets/animations.js?v=114255849464433187621688782258" defer="defer"></script><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/79103263031/digital_wallets/dialog">
<link rel="alternate" type="application/json+oembed" href="https://58194a.myshopify.com/products/gucci-7.oembed">
<script>
  (function() {
    var scripts = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/runtime.latest.en.affd1125018b5683cb68.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/809.latest.en.22b066f200008aec130a.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/810.latest.en.89cbc407b0fea47d8592.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.latest.en.62ab402cae39c71c1a79.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/966.latest.en.ba453974d481c1973bd1.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/842.latest.en.15b973c3dc8e33e27356.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/551.latest.en.2ba3c1e0e8bb478b6136.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.c4e6e5e266688a8c9465.js"];
    var styles = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/966.latest.en.78f2b96ce0ac4e2c02dd.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.1667db3b0d933aefb522.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/739.latest.en.ffa9763b408fc6f04c9b.css"];

    function prefetch(url, as, callback) {
      var link = document.createElement('link');
      if (link.relList.supports('prefetch')) {
        link.rel = 'prefetch';
        link.fetchPriority = 'low';
        link.as = as;
        link.href = url;
        link.onload = link.onerror = callback;
        document.head.appendChild(link);
      } else {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.onloadend = callback;
        xhr.send();
      }
    }

    function prefetchAssets() {
      var resources = [].concat(
        scripts.map(function(url) { return [url, 'script']; }),
        styles.map(function(url) { return [url, 'style']; })
      );
      var index = 0;
      (function next() {
        var res = resources[index++];
        if (res) prefetch(res[0], res[1], next);
      })();
    }

    addEventListener('load', prefetchAssets);
   })();
</script>
<script id="shopify-features" type="application/json">{"accessToken":"c23937b3654092feb6c0c63ff7d42d96","betas":["rich-media-storefront-analytics"],"domain":"58194a.myshopify.com","predictiveSearch":true,"shopId":79103263031,"smart_payment_buttons_url":"https:\/\/58194a.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/58194a.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en","optimusEnabled":false,"betterDynamicCheckoutRecommendation":false}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "58194a.myshopify.com";
Shopify.locale = "en";
Shopify.currency = {"active":"USD","rate":"1.0"};
Shopify.country = "MA";
Shopify.theme = {"name":"THE ONE","id":154447937847,"theme_store_id":null,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};
Shopify.cdnHost = "cdn.shopify.com";
Shopify.routes = Shopify.routes || {};
Shopify.routes.root = "/";</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadFeatures=n(),t.autoloadFeatures=n()}(window);</script>
<script id="__st">var __st={"a":79103263031,"offset":3600,"reqid":"db7ecce5-b427-4f84-95e0-19c5eba132d4","pageurl":"58194a.myshopify.com\/products\/gucci-7","u":"d897cb030071","p":"product","rtyp":"product","rid":8478110810423};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>!function(o){o.addEventListener("DOMContentLoaded",function(){window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"};var t=['form[action*="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]','form[action*="/account"] input[name="form_type"][value="customer_login"]','form[action*="/account"] input[name="form_type"][value="recover_customer_password"]','form[action*="/account"] input[name="form_type"][value="create_customer"]','form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");function n(e){e=e.target;null==e||null!=(e=function e(t,n){if(null==t.parentElement)return null;if("FORM"!=t.parentElement.tagName)return e(t.parentElement,n);for(var o=t.parentElement.action,r=0;r<n.length;r++)if(-1!==o.indexOf(n[r]))return t.parentElement;return null}(e,["/contact","/comments","/account"]))&&null!=e.querySelector(t)&&((e=o.createElement("script")).setAttribute("src","https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"),o.body.appendChild(e),o.removeEventListener("focus",n,!0),o.removeEventListener("change",n,!0),o.removeEventListener("click",n,!0))}o.addEventListener("click",n,!0),o.addEventListener("change",n,!0),o.addEventListener("focus",n,!0)})}(document);</script>

<script integrity="sha256-PxOtY43aY0IIRkJyboCWUgXVuC12GAXQ8LKFAxO8H98=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//58194a.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/load_feature-3f13ad638dda6342084642726e80965205d5b82d761805d0f0b2850313bc1fdf.js" crossorigin="anonymous"></script>
<script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="//58194a.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>
<script integrity="sha256-AjT+yRYgO8z0L66BMKoqBvO4SrOWLJYnYYWthdsOhP4=" defer="defer" src="//58194a.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/bars/admin_bar_injector-0234fec916203bccf42fae8130aa2a06f3b84ab3962c96276185ad85db0e84fe.js" crossorigin="anonymous"></script>
<script id="sections-script" data-sections="header" defer="defer" src="//58194a.myshopify.com/cdn/shop/t/3/compiled_assets/scripts.js?134"></script>
<style id="shopify-dynamic-checkout">.shopify-payment-button__button--hidden {
  visibility: hidden;
}

.shopify-payment-button__button {
  border-radius: 4px;
  border: none;
  box-shadow: 0 0 0 0 transparent;
  color: white;
  cursor: pointer;
  display: block;
  font-size: 1em;
  font-weight: 500;
  line-height: 1;
  text-align: center;
  width: 100%;
  transition: background 0.2s ease-in-out;
}

.shopify-payment-button__button[disabled] {
  opacity: 0.6;
  cursor: default;
}

.shopify-payment-button__button--unbranded {
  background-color: #1990c6;
  padding: 1em 2em;
}

.shopify-payment-button__button--unbranded:hover:not([disabled]) {
  background-color: #136f99;
}

.shopify-payment-button__more-options {
  background: transparent;
  border: 0 none;
  cursor: pointer;
  display: block;
  font-size: 1em;
  margin-top: 1em;
  text-align: center;
  width: 100%;
}

.shopify-payment-button__more-options:hover:not([disabled]) {
  text-decoration: underline;
}

.shopify-payment-button__more-options[disabled] {
  opacity: 0.6;
  cursor: default;
}

.shopify-payment-button__button--branded {
  display: flex;
  flex-direction: column;
  min-height: 44px;
  position: relative;
  z-index: 1;
}

.shopify-payment-button__button--branded .shopify-cleanslate {
  flex: 1 !important;
  display: flex !important;
  flex-direction: column !important;
}
</style>
<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>


    <style data-shopify>
      @font-face {
  font-family: Assistant;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("//58194a.myshopify.com/cdn/fonts/assistant/assistant_n4.bcd3d09dcb631dec5544b8fb7b154ff234a44630.woff2?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=6b5b45583964fbd5c5f2c3eef67d2e6b9918c71c385dc591609db81a6113877b") format("woff2"),
       url("//58194a.myshopify.com/cdn/fonts/assistant/assistant_n4.a2d012304becc2a26f1ded1acc136fcab85c9afd.woff?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=02030f9d1dde51342c51c8124d93801e9be2005637e56836fc16e30c01d7a5ed") format("woff");
}

      @font-face {
  font-family: Assistant;
  font-weight: 700;
  font-style: normal;
  font-display: swap;
  src: url("//58194a.myshopify.com/cdn/fonts/assistant/assistant_n7.3335c7bdaddf2501ddab87cdbd9be98f3870e10d.woff2?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=1e93eb96a0f174c35d517a1ff23b2e68e758f6bfe3c197e1ad3399b452a01544") format("woff2"),
       url("//58194a.myshopify.com/cdn/fonts/assistant/assistant_n7.7c85f5c5cc1555de92cc7ef2790ee3cffe5237f5.woff?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=89584140723d40bf2a1f9299567230d4801e392c42e6e59ce7d3de742120b45b") format("woff");
}

      
      
      @font-face {
  font-family: Assistant;
  font-weight: 400;
  font-style: normal;
  font-display: swap;
  src: url("//58194a.myshopify.com/cdn/fonts/assistant/assistant_n4.bcd3d09dcb631dec5544b8fb7b154ff234a44630.woff2?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=6b5b45583964fbd5c5f2c3eef67d2e6b9918c71c385dc591609db81a6113877b") format("woff2"),
       url("//58194a.myshopify.com/cdn/fonts/assistant/assistant_n4.a2d012304becc2a26f1ded1acc136fcab85c9afd.woff?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=02030f9d1dde51342c51c8124d93801e9be2005637e56836fc16e30c01d7a5ed") format("woff");
}


      
        :root,
        .color-background-1 {
          --color-background: 255,255,255;
        
          --gradient-background: #ffffff;
        
        --color-foreground: 18,18,18;
        --color-shadow: 18,18,18;
        --color-button: 18,18,18;
        --color-button-text: 255,255,255;
        --color-secondary-button: 255,255,255;
        --color-secondary-button-text: 18,18,18;
        --color-link: 18,18,18;
        --color-badge-foreground: 18,18,18;
        --color-badge-background: 255,255,255;
        --color-badge-border: 18,18,18;
        --payment-terms-background-color: rgb(255 255 255);
      }
      
        
        .color-background-2 {
          --color-background: 243,243,243;
        
          --gradient-background: #f3f3f3;
        
        --color-foreground: 18,18,18;
        --color-shadow: 18,18,18;
        --color-button: 18,18,18;
        --color-button-text: 243,243,243;
        --color-secondary-button: 243,243,243;
        --color-secondary-button-text: 18,18,18;
        --color-link: 18,18,18;
        --color-badge-foreground: 18,18,18;
        --color-badge-background: 243,243,243;
        --color-badge-border: 18,18,18;
        --payment-terms-background-color: rgb(243 243 243);
      }
      
        
        .color-inverse {
          --color-background: 36,40,51;
        
          --gradient-background: #242833;
        
        --color-foreground: 255,255,255;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 0,0,0;
        --color-secondary-button: 36,40,51;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 36,40,51;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(36 40 51);
      }
      
        
        .color-accent-1 {
          --color-background: 18,18,18;
        
          --gradient-background: #121212;
        
        --color-foreground: 255,255,255;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 18,18,18;
        --color-secondary-button: 18,18,18;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 18,18,18;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(18 18 18);
      }
      
        
        .color-accent-2 {
          --color-background: 51,79,180;
        
          --gradient-background: #334fb4;
        
        --color-foreground: 255,255,255;
        --color-shadow: 18,18,18;
        --color-button: 255,255,255;
        --color-button-text: 51,79,180;
        --color-secondary-button: 51,79,180;
        --color-secondary-button-text: 255,255,255;
        --color-link: 255,255,255;
        --color-badge-foreground: 255,255,255;
        --color-badge-background: 51,79,180;
        --color-badge-border: 255,255,255;
        --payment-terms-background-color: rgb(51 79 180);
      }
      

      body, .color-background-1, .color-background-2, .color-inverse, .color-accent-1, .color-accent-2 {
        color: rgba(var(--color-foreground), 0.75);
        background-color: rgb(var(--color-background));
      }

      :root {
        --font-body-family: Assistant, sans-serif;
        --font-body-style: normal;
        --font-body-weight: 400;
        --font-body-weight-bold: 700;

        --font-heading-family: Assistant, sans-serif;
        --font-heading-style: normal;
        --font-heading-weight: 400;

        --font-body-scale: 1.0;
        --font-heading-scale: 1.0;

        --media-padding: px;
        --media-border-opacity: 0.05;
        --media-border-width: 1px;
        --media-radius: 0px;
        --media-shadow-opacity: 0.0;
        --media-shadow-horizontal-offset: 0px;
        --media-shadow-vertical-offset: 4px;
        --media-shadow-blur-radius: 5px;
        --media-shadow-visible: 0;

        --page-width: 110rem;
        --page-width-margin: 0rem;

        --product-card-image-padding: 0.0rem;
        --product-card-corner-radius: 0.0rem;
        --product-card-text-alignment: left;
        --product-card-border-width: 0.0rem;
        --product-card-border-opacity: 0.1;
        --product-card-shadow-opacity: 0.0;
        --product-card-shadow-visible: 0;
        --product-card-shadow-horizontal-offset: 0.0rem;
        --product-card-shadow-vertical-offset: 0.4rem;
        --product-card-shadow-blur-radius: 0.5rem;

        --collection-card-image-padding: 0.0rem;
        --collection-card-corner-radius: 0.0rem;
        --collection-card-text-alignment: left;
        --collection-card-border-width: 0.0rem;
        --collection-card-border-opacity: 0.1;
        --collection-card-shadow-opacity: 0.0;
        --collection-card-shadow-visible: 0;
        --collection-card-shadow-horizontal-offset: 0.0rem;
        --collection-card-shadow-vertical-offset: 0.4rem;
        --collection-card-shadow-blur-radius: 0.5rem;

        --blog-card-image-padding: 0.0rem;
        --blog-card-corner-radius: 0.0rem;
        --blog-card-text-alignment: left;
        --blog-card-border-width: 0.0rem;
        --blog-card-border-opacity: 0.1;
        --blog-card-shadow-opacity: 0.0;
        --blog-card-shadow-visible: 0;
        --blog-card-shadow-horizontal-offset: 0.0rem;
        --blog-card-shadow-vertical-offset: 0.4rem;
        --blog-card-shadow-blur-radius: 0.5rem;

        --badge-corner-radius: 4.0rem;

        --popup-border-width: 1px;
        --popup-border-opacity: 0.1;
        --popup-corner-radius: 0px;
        --popup-shadow-opacity: 0.0;
        --popup-shadow-horizontal-offset: 0px;
        --popup-shadow-vertical-offset: 4px;
        --popup-shadow-blur-radius: 5px;

        --drawer-border-width: 1px;
        --drawer-border-opacity: 0.1;
        --drawer-shadow-opacity: 0.0;
        --drawer-shadow-horizontal-offset: 0px;
        --drawer-shadow-vertical-offset: -2px;
        --drawer-shadow-blur-radius: 5px;

        --spacing-sections-desktop: 0px;
        --spacing-sections-mobile: 0px;

        --grid-desktop-vertical-spacing: 8px;
        --grid-desktop-horizontal-spacing: 8px;
        --grid-mobile-vertical-spacing: 4px;
        --grid-mobile-horizontal-spacing: 4px;

        --text-boxes-border-opacity: 0.1;
        --text-boxes-border-width: 0px;
        --text-boxes-radius: 0px;
        --text-boxes-shadow-opacity: 0.0;
        --text-boxes-shadow-visible: 0;
        --text-boxes-shadow-horizontal-offset: 0px;
        --text-boxes-shadow-vertical-offset: 4px;
        --text-boxes-shadow-blur-radius: 5px;

        --buttons-radius: 20px;
        --buttons-radius-outset: 21px;
        --buttons-border-width: 1px;
        --buttons-border-opacity: 0.9;
        --buttons-shadow-opacity: 0.15;
        --buttons-shadow-visible: 1;
        --buttons-shadow-horizontal-offset: -2px;
        --buttons-shadow-vertical-offset: -2px;
        --buttons-shadow-blur-radius: 5px;
        --buttons-border-offset: 0.3px;

        --inputs-radius: 0px;
        --inputs-border-width: 1px;
        --inputs-border-opacity: 0.55;
        --inputs-shadow-opacity: 0.0;
        --inputs-shadow-horizontal-offset: 0px;
        --inputs-margin-offset: 0px;
        --inputs-shadow-vertical-offset: 4px;
        --inputs-shadow-blur-radius: 5px;
        --inputs-radius-outset: 0px;

        --variant-pills-radius: 40px;
        --variant-pills-border-width: 1px;
        --variant-pills-border-opacity: 0.55;
        --variant-pills-shadow-opacity: 0.0;
        --variant-pills-shadow-horizontal-offset: 0px;
        --variant-pills-shadow-vertical-offset: 4px;
        --variant-pills-shadow-blur-radius: 5px;
      }

      *,
      *::before,
      *::after {
        box-sizing: inherit;
      }

      html {
        box-sizing: border-box;
        font-size: calc(var(--font-body-scale) * 62.5%);
        height: 100%;
      }

      body {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        grid-template-columns: 100%;
        min-height: 100%;
        margin: 0;
        font-size: 1.5rem;
        letter-spacing: 0.06rem;
        line-height: calc(1 + 0.8 / var(--font-body-scale));
        font-family: var(--font-body-family);
        font-style: var(--font-body-style);
        font-weight: var(--font-body-weight);
      }

      @media screen and (min-width: 750px) {
        body {
          font-size: 1.6rem;
        }
      }
    </style>

    <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/base.css?v=107774344904665716901691097728" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="font" href="//58194a.myshopify.com/cdn/fonts/assistant/assistant_n4.bcd3d09dcb631dec5544b8fb7b154ff234a44630.woff2?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=6b5b45583964fbd5c5f2c3eef67d2e6b9918c71c385dc591609db81a6113877b" type="font/woff2" crossorigin><link rel="preload" as="font" href="//58194a.myshopify.com/cdn/fonts/assistant/assistant_n4.bcd3d09dcb631dec5544b8fb7b154ff234a44630.woff2?h1=NTgxOTRhLmFjY291bnQubXlzaG9waWZ5LmNvbQ&hmac=6b5b45583964fbd5c5f2c3eef67d2e6b9918c71c385dc591609db81a6113877b" type="font/woff2" crossorigin><link
        rel="stylesheet"
        href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-predictive-search.css?v=118923337488134913561688782258"
        media="print"
        onload="this.media='all'"
      ><script>
      document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
      if (Shopify.designMode) {
        document.documentElement.classList.add('shopify-design-mode');
      }
    </script>
  <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 79103263031,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "product"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script id="web-pixels-manager-setup">(function e(e,n,a,o,t,r,i){function s(e,n){if(document.head){var a=document.createElement("link");e.match(/spin\.dev\/?/)&&(e+="?fast_storefront_renderer=1"),a.rel="preload",a.href=e,n&&(a.as=n);try{document.head.appendChild(a)}catch(e){console&&console.warn&&console.warn("[Web Pixels Manager] Could not append prefetch link tag to DOM.")}}}var l=i||[],d=null!==e;d&&(window.Shopify=window.Shopify||{},window.Shopify.analytics=window.Shopify.analytics||{},window.Shopify.analytics.replayQueue=[],window.Shopify.analytics.publish=function(e,n,a){window.Shopify.analytics.replayQueue.push([e,n,a])});var c=function(){var e="legacy",n="unknown",a=null,o=navigator.userAgent.match(/(Firefox|Chrome)\/(\d+)/i),t=navigator.userAgent.match(/(Edg)\/(\d+)/i),r=navigator.userAgent.match(/(Version)\/(\d+)(.+)(Safari)\/(\d+)/i);r?(n="safari",a=parseInt(r[2],10)):t?(n="edge",a=parseInt(t[2],10)):o&&(n=o[1].toLocaleLowerCase(),a=parseInt(o[2],10));var i={chrome:60,firefox:55,safari:11,edge:80}[n];return void 0!==i&&null!==a&&i<=a&&(e="modern"),e}(),p=c.substring(0,1),f=o.substring(0,1);if(d)try{self.performance.mark("wpm:start")}catch(e){}if(d){var u=self.location.origin,w=(e.webPixelsConfigList||[]).filter((function(e){return"app"===e.type.toLowerCase()}));for(let e=0;e<w.length;e++){s([u,"/wpm@",r,"/web-pixel-",w[e].id,"@",w[e].scriptVersion,"/sandbox/worker.",c,".js"].join(""),"script")}}var h,y,m,g,v,b,_,S,x=[a,"/wpm","/",f,r,p,".js"].join("");h={src:x,async:!0,onload:function(){if(e){var a=window.webPixelsManager.init(e);n(a),window.Shopify.analytics.replayQueue.forEach((function(e){a.publishCustomEvent(e[0],e[1],e[2])})),window.Shopify.analytics.replayQueue=[],window.Shopify.analytics.publish=a.publishCustomEvent,l.indexOf("web_pixels_identify_api")>-1&&(window.Shopify.analytics.identify=a.identify)}},onerror:function(){var n=(e.storefrontBaseUrl?e.storefrontBaseUrl.replace(/\/$/,""):self.location.origin)+"/.well-known/shopify/monorail/unstable/produce_batch",a=JSON.stringify({metadata:{event_sent_at_ms:(new Date).getTime()},events:[{schema_id:"web_pixels_manager_load/2.0",payload:{version:t||"latest",page_url:self.location.href,status:"failed",error_msg:x+" has failed to load"},metadata:{event_created_at_ms:(new Date).getTime()}}]});try{if(self.navigator.sendBeacon.bind(self.navigator)(n,a))return!0}catch(e){}const o=new XMLHttpRequest;try{return o.open("POST",n,!0),o.setRequestHeader("Content-Type","text/plain"),o.send(a),!0}catch(e){console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")}return!1}},y=document.createElement("script"),m=h.src,g=h.async||!0,v=h.onload,b=h.onerror,_=document.head,S=document.body,y.async=g,y.src=m,v&&y.addEventListener("load",v),b&&y.addEventListener("error",b),_?_.appendChild(y):S?S.appendChild(y):console.error("Did not find a head or body element to append the script")})({shopId: 79103263031,storefrontBaseUrl: "https://58194a.myshopify.com",cdnBaseUrl: "https://58194a.myshopify.com/cdn",surface: "storefront-renderer",enabledBetaFlags: ["web_pixels_async_pixel_refactor"],webPixelsConfigList: [{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"0557","apiClientId":"shopify-pixel","type":"APP"},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"0557","apiClientId":"shopify-pixel","type":"CUSTOM"}],initData: {"cart":null,"checkout":null,"customer":null,"productVariants":[{"id":"45792267698487","image":{"src":"\/\/58194a.myshopify.com\/cdn\/shop\/files\/GREENGUCCI.webp?v=1688779563"},"price":{"amount":600.0,"currencyCode":"USD"},"product":{"id":"8478110810423","title":"GUCCI BLONDIE TOP HANDLE BAG","untranslatedTitle":"GUCCI BLONDIE TOP HANDLE BAG","vendor":"My Store","type":""},"sku":"","title":"Default Title","untranslatedTitle":"Default Title"}]},},function pageEvents(webPixelsManagerAPI) {webPixelsManagerAPI.publish("page_viewed");webPixelsManagerAPI.publish("product_viewed", {"productVariant":{"id":"45792267698487","image":{"src":"\/\/58194a.myshopify.com\/cdn\/shop\/files\/GREENGUCCI.webp?v=1688779563"},"price":{"amount":600.0,"currencyCode":"USD"},"product":{"id":"8478110810423","title":"GUCCI BLONDIE TOP HANDLE BAG","untranslatedTitle":"GUCCI BLONDIE TOP HANDLE BAG","vendor":"My Store","type":""},"sku":"","title":"Default Title","untranslatedTitle":"Default Title"}});},"https://58194a.myshopify.com/cdn","browser","0.0.337","6b44608cwcf56d5e7p4ae4b2b5m34ff8b1a",["web_pixels_async_pixel_refactor"]);</script>  <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'USD';
var meta = {"product":{"id":8478110810423,"gid":"gid:\/\/shopify\/Product\/8478110810423","vendor":"My Store","type":"","variants":[{"id":45792267698487,"price":60000,"name":"GUCCI BLONDIE TOP HANDLE BAG","public_title":null,"sku":""}]},"page":{"pageType":"product","resourceType":"product","resourceId":8478110810423}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
    var customDocumentWrite = function(content) {
      var jquery = null;

      if (window.jQuery) {
        jquery = window.jQuery;
      } else if (window.Checkout && window.Checkout.$) {
        jquery = window.Checkout.$;
      }

      if (jquery) {
        jquery('body').append(content);
      }
    };

    var hasLoggedConversion = function(token) {
      if (token) {
        return document.cookie.indexOf('loggedConversion=' + token) !== -1;
      }
      return false;
    }

    var setCookieIfConversion = function(token) {
      if (token) {
        var twoMonthsFromNow = new Date(Date.now());
        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

        document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
      }
    }

    var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
    if (trekkie.integrations) {
      return;
    }
    trekkie.methods = [
      'identify',
      'page',
      'ready',
      'track',
      'trackForm',
      'trackLink'
    ];
    trekkie.factory = function(method) {
      return function() {
        var args = Array.prototype.slice.call(arguments);
        args.unshift(method);
        trekkie.push(args);
        return trekkie;
      };
    };
    for (var i = 0; i < trekkie.methods.length; i++) {
      var key = trekkie.methods[i];
      trekkie[key] = trekkie.factory(key);
    }
    trekkie.load = function(config) {
      trekkie.config = config || {};
      trekkie.config.initialDocumentCookie = document.cookie;
      var first = document.getElementsByTagName('script')[0];
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.onerror = function(e) {
        var scriptFallback = document.createElement('script');
        scriptFallback.type = 'text/javascript';
        scriptFallback.onerror = function(error) {
                var Monorail = {
      produce: function produce(monorailDomain, schemaId, payload) {
        var currentMs = new Date().getTime();
        var event = {
          schema_id: schemaId,
          payload: payload,
          metadata: {
            event_created_at_ms: currentMs,
            event_sent_at_ms: currentMs
          }
        };
        return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
      },
      sendRequest: function sendRequest(endpointUrl, payload) {
        // Try the sendBeacon API
        if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
          var blobData = new window.Blob([payload], {
            type: 'text/plain'
          });

          if (window.navigator.sendBeacon(endpointUrl, blobData)) {
            return true;
          } // sendBeacon was not successful

        } // XHR beacon

        var xhr = new XMLHttpRequest();

        try {
          xhr.open('POST', endpointUrl);
          xhr.setRequestHeader('Content-Type', 'text/plain');
          xhr.send(payload);
        } catch (e) {
          console.log(e);
        }

        return false;
      },
      isIos12: function isIos12() {
        return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
      }
    };
    Monorail.produce('monorail-edge.shopifysvc.com',
      'trekkie_storefront_load_errors/1.1',
      {shop_id: 79103263031,
      theme_id: 154447937847,
      app_name: "storefront",
      context_url: window.location.href,
      source_url: "https://cdn.shopify.com/s/trekkie.storefront.e3446faf2feba5857aa32712db2bec9cd365a6df.min.js"});

        };
        scriptFallback.async = true;
        scriptFallback.src = 'https://cdn.shopify.com/s/trekkie.storefront.e3446faf2feba5857aa32712db2bec9cd365a6df.min.js';
        first.parentNode.insertBefore(scriptFallback, first);
      };
      script.async = true;
      script.src = 'https://cdn.shopify.com/s/trekkie.storefront.e3446faf2feba5857aa32712db2bec9cd365a6df.min.js';
      first.parentNode.insertBefore(script, first);
    };
    trekkie.load(
      {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":79103263031,"isMerchantRequest":true,"themeId":154447937847,"themeCityHash":"16227685011085769580","contentLanguage":"en","currency":"USD"},"isServerSideCookieWritingEnabled":true,"monorailRegion":"shop_domain"},"Session Attribution":{},"S2S":{"facebookCapiEnabled":false,"source":"trekkie-storefront-renderer"}}
    );

    var loaded = false;
    trekkie.ready(function() {
      if (loaded) return;
      loaded = true;

      window.ShopifyAnalytics.lib = window.trekkie;

  
      var originalDocumentWrite = document.write;
      document.write = customDocumentWrite;
      try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
      document.write = originalDocumentWrite;

      window.ShopifyAnalytics.lib.page(null,{"pageType":"product","resourceType":"product","resourceId":8478110810423});

      var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
      var token = match? match[1]: undefined;
      if (!hasLoggedConversion(token)) {
        setCookieIfConversion(token);
        window.ShopifyAnalytics.lib.track("Viewed Product",{"currency":"USD","variantId":45792267698487,"productId":8478110810423,"productGid":"gid:\/\/shopify\/Product\/8478110810423","name":"GUCCI BLONDIE TOP HANDLE BAG","price":"600.00","sku":"","brand":"My Store","variant":null,"category":"","nonInteraction":true});
      window.ShopifyAnalytics.lib.track("monorail:\/\/trekkie_storefront_viewed_product\/1.1",{"currency":"USD","variantId":45792267698487,"productId":8478110810423,"productGid":"gid:\/\/shopify\/Product\/8478110810423","name":"GUCCI BLONDIE TOP HANDLE BAG","price":"600.00","sku":"","brand":"My Store","variant":null,"category":"","nonInteraction":true,"referer":"https:\/\/58194a.myshopify.com\/products\/gucci-7"});
      }
    });


        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src = "//58194a.myshopify.com/cdn/shopifycloud/shopify/assets/shop_events_listener-65cd0ba3fcd81a1df33f2510ec5bcf8c0e0958653b50e3965ec972dd638ee13f.js";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

})();</script>
<script class="boomerang">
(function () {
  if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
    return;
  }
  window.BOOMR = window.BOOMR || {};
  window.BOOMR.snippetStart = new Date().getTime();
  window.BOOMR.snippetExecuted = true;
  window.BOOMR.snippetVersion = 12;
  window.BOOMR.application = "storefront-renderer";
  window.BOOMR.themeName = "Dawn";
  window.BOOMR.themeVersion = "10.0.0";
  window.BOOMR.shopId = 79103263031;
  window.BOOMR.themeId = 154447937847;
  window.BOOMR.renderRegion = "gcp-us-central1";
  window.BOOMR.url =
    "https://58194a.myshopify.com/cdn/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
  var where = document.currentScript || document.getElementsByTagName("script")[0];
  var parentNode = where.parentNode;
  var promoted = false;
  var LOADER_TIMEOUT = 3000;
  function promote() {
    if (promoted) {
      return;
    }
    var script = document.createElement("script");
    script.id = "boomr-scr-as";
    script.src = window.BOOMR.url;
    script.async = true;
    parentNode.appendChild(script);
    promoted = true;
  }
  function iframeLoader(wasFallback) {
    promoted = true;
    var dom, bootstrap, iframe, iframeStyle;
    var doc = document;
    var win = window;
    window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
    bootstrap = function(parent, scriptId) {
      var script = doc.createElement("script");
      script.id = scriptId || "boomr-if-as";
      script.src = window.BOOMR.url;
      BOOMR_lstart = new Date().getTime();
      parent = parent || doc.body;
      parent.appendChild(script);
    };
    if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
      window.BOOMR.snippetMethod = "s";
      bootstrap(parentNode, "boomr-async");
      return;
    }
    iframe = document.createElement("IFRAME");
    iframe.src = "about:blank";
    iframe.title = "";
    iframe.role = "presentation";
    iframe.loading = "eager";
    iframeStyle = (iframe.frameElement || iframe).style;
    iframeStyle.width = 0;
    iframeStyle.height = 0;
    iframeStyle.border = 0;
    iframeStyle.display = "none";
    parentNode.appendChild(iframe);
    try {
      win = iframe.contentWindow;
      doc = win.document.open();
    } catch (e) {
      dom = document.domain;
      iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
      win = iframe.contentWindow;
      doc = win.document.open();
    }
    if (dom) {
      doc._boomrl = function() {
        this.domain = dom;
        bootstrap();
      };
      doc.write("<body onload='document._boomrl();'>");
    } else {
      win._boomrl = function() {
        bootstrap();
      };
      if (win.addEventListener) {
        win.addEventListener("load", win._boomrl, false);
      } else if (win.attachEvent) {
        win.attachEvent("onload", win._boomrl);
      }
    }
    doc.close();
  }
  var link = document.createElement("link");
  if (link.relList &&
    typeof link.relList.supports === "function" &&
    link.relList.supports("preload") &&
    ("as" in link)) {
    window.BOOMR.snippetMethod = "p";
    link.href = window.BOOMR.url;
    link.rel = "preload";
    link.as = "script";
    link.addEventListener("load", promote);
    link.addEventListener("error", function() {
      iframeLoader(true);
    });
    setTimeout(function() {
      if (!promoted) {
        iframeLoader(true);
      }
    }, LOADER_TIMEOUT);
    BOOMR_lstart = new Date().getTime();
    parentNode.appendChild(link);
  } else {
    iframeLoader(false);
  }
  function boomerangSaveLoadTime(e) {
    window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
  }
  if (window.addEventListener) {
    window.addEventListener("load", boomerangSaveLoadTime, false);
  } else if (window.attachEvent) {
    window.attachEvent("onload", boomerangSaveLoadTime);
  }
  if (document.addEventListener) {
    document.addEventListener("onBoomerangLoaded", function(e) {
      e.detail.BOOMR.init({
        ResourceTiming: {
          enabled: true,
          trackedResourceTypes: ["script", "img", "css"]
        },
      });
      e.detail.BOOMR.t_end = new Date().getTime();
    });
  } else if (document.attachEvent) {
    document.attachEvent("onpropertychange", function(e) {
      if (!e) e=event;
      if (e.propertyName === "onBoomerangLoaded") {
        e.detail.BOOMR.init({
          ResourceTiming: {
            enabled: true,
            trackedResourceTypes: ["script", "img", "css"]
          },
        });
        e.detail.BOOMR.t_end = new Date().getTime();
      }
    });
  }
})();</script>
</head>

  <body class="gradient animate--hover-default">
    <a class="skip-to-content-link button visually-hidden" href="#MainContent">
      Skip to content
    </a><!-- BEGIN sections: header-group -->
<div id="shopify-section-sections--19917717242167__header" class="shopify-section shopify-section-group-header-group section-header"><link rel="stylesheet" href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-list-menu.css?v=151968516119678728991688782258" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-search.css?v=130382253973794904871688782258" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-menu-drawer.css?v=160161990486659892291688782258" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-cart-notification.css?v=54116361853792938221688782258" media="print" onload="this.media='all'">
<link rel="stylesheet" href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-cart-items.css?v=4628327769354762111688782258" media="print" onload="this.media='all'"><link rel="stylesheet" href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-price.css?v=65402837579211014041688782258" media="print" onload="this.media='all'">
  <link rel="stylesheet" href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-loading-overlay.css?v=43236910203777044501688782258" media="print" onload="this.media='all'"><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-localization-form.css?v=14162097032368378391688782258" rel="stylesheet" type="text/css" media="all" />
<noscript><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-list-menu.css?v=151968516119678728991688782258" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-search.css?v=130382253973794904871688782258" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-menu-drawer.css?v=160161990486659892291688782258" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-cart-notification.css?v=54116361853792938221688782258" rel="stylesheet" type="text/css" media="all" /></noscript>
<noscript><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-cart-items.css?v=4628327769354762111688782258" rel="stylesheet" type="text/css" media="all" /></noscript>

<style>
  header-drawer {
    justify-self: start;
    margin-left: -1.2rem;
  }.menu-drawer-container {
    display: flex;
  }

  .list-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .list-menu--inline {
    display: inline-flex;
    flex-wrap: wrap;
  }

  summary.list-menu__item {
    padding-right: 2.7rem;
  }

  .list-menu__item {
    display: flex;
    align-items: center;
    line-height: calc(1 + 0.3 / var(--font-body-scale));
  }

  .list-menu__item--link {
    text-decoration: none;
    padding-bottom: 1rem;
    padding-top: 1rem;
    line-height: calc(1 + 0.8 / var(--font-body-scale));
  }

  @media screen and (min-width: 750px) {
    .list-menu__item--link {
      padding-bottom: 0.5rem;
      padding-top: 0.5rem;
    }
  }
</style><style data-shopify>.header {
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .section-header {
    position: sticky; /* This is for fixing a Safari z-index issue. PR #2147 */
    margin-bottom: 0px;
  }

  @media screen and (min-width: 750px) {
    .section-header {
      margin-bottom: 0px;
    }
  }

  @media screen and (min-width: 990px) {
    .header {
      padding-top: 20px;
      padding-bottom: 20px;
    }
  }</style><script src="//58194a.myshopify.com/cdn/shop/t/3/assets/details-disclosure.js?v=13653116266235556501688782258" defer="defer"></script>
<script src="//58194a.myshopify.com/cdn/shop/t/3/assets/details-modal.js?v=25581673532751508451688782258" defer="defer"></script>
<script src="//58194a.myshopify.com/cdn/shop/t/3/assets/cart-notification.js?v=133508293167896966491688782258" defer="defer"></script>
<script src="//58194a.myshopify.com/cdn/shop/t/3/assets/search-form.js?v=133129549252120666541688782258" defer="defer"></script><script src="//58194a.myshopify.com/cdn/shop/t/3/assets/localization-form.js?v=98683197766447567971688782258" defer="defer"></script><svg xmlns="http://www.w3.org/2000/svg" class="hidden">
  <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z" fill="currentColor"/>
  </symbol>

  <symbol id="icon-reset" class="icon icon-close"  fill="none" viewBox="0 0 18 18" stroke="currentColor">
    <circle r="8.5" cy="9" cx="9" stroke-opacity="0.2"/>
    <path d="M6.82972 6.82915L1.17193 1.17097" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
    <path d="M1.22896 6.88502L6.77288 1.11523" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
  </symbol>

  <symbol id="icon-close" class="icon icon-close" fill="none" viewBox="0 0 18 17">
    <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
  </symbol>
</svg><sticky-header data-sticky-type="on-scroll-up" class="header-wrapper color-background-1 gradient header-wrapper--border-bottom"><header class="header header--middle-center header--mobile-center page-width drawer-menu header--has-menu header--has-social">

<header-drawer data-breakpoint="desktop">
  <details id="Details-menu-drawer-container" class="menu-drawer-container">
    <summary
      class="header__icon header__icon--menu header__icon--summary link focus-inset"
      aria-label="Menu"
    >
      <span>
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-hamburger"
  fill="none"
  viewBox="0 0 18 16"
>
  <path d="M1 .5a.5.5 0 100 1h15.71a.5.5 0 000-1H1zM.5 8a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1A.5.5 0 01.5 8zm0 7a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1a.5.5 0 01-.5-.5z" fill="currentColor">
</svg>

        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

      </span>
    </summary>
    <div id="menu-drawer" class="gradient menu-drawer motion-reduce">
      <div class="menu-drawer__inner-container">
        <div class="menu-drawer__navigation-container">
          <nav class="menu-drawer__navigation">
            <ul class="menu-drawer__menu has-submenu list-menu" role="list"><li><a
                      id="HeaderDrawer-home-page"
                      href="INDEX"
                      class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Home page
                    </a></li><li><a
                      id="HeaderDrawer-all-collections"
                      href="VIEWALLCOLLECTIONS"
                      class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      All collections
                    </a></li><li><a
                      id="HeaderDrawer-all-products"
                      href="SHOPALL"
                      class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      All products
                    </a></li>
<li><a
                      id="HeaderDrawer-cart"
                      href="cart"
                      class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Your Cart
                    </a></li>

                  </ul>
          </nav>
          <div class="menu-drawer__utility-links"><div class="menu-drawer__localization header__localization">
</div><ul class="list list-social list-unstyled" role="list"><li class="list-social__item">
                  <a href="https://twitter.com/selly_bags" class="list-social__link link"><svg aria-hidden="true" focusable="false" class="icon icon-twitter" viewBox="0 0 18 15">
  <path fill="currentColor" d="M17.64 2.6a7.33 7.33 0 01-1.75 1.82c0 .05 0 .13.02.23l.02.23a9.97 9.97 0 01-1.69 5.54c-.57.85-1.24 1.62-2.02 2.28a9.09 9.09 0 01-2.82 1.6 10.23 10.23 0 01-8.9-.98c.34.02.61.04.83.04 1.64 0 3.1-.5 4.38-1.5a3.6 3.6 0 01-3.3-2.45A2.91 2.91 0 004 9.35a3.47 3.47 0 01-2.02-1.21 3.37 3.37 0 01-.8-2.22v-.03c.46.24.98.37 1.58.4a3.45 3.45 0 01-1.54-2.9c0-.61.14-1.2.45-1.79a9.68 9.68 0 003.2 2.6 10 10 0 004.08 1.07 3 3 0 01-.13-.8c0-.97.34-1.8 1.03-2.48A3.45 3.45 0 0112.4.96a3.49 3.49 0 012.54 1.1c.8-.15 1.54-.44 2.23-.85a3.4 3.4 0 01-1.54 1.94c.74-.1 1.4-.28 2.01-.54z">
</svg>
<span class="visually-hidden">Twitter</span>
                  </a>
                </li><li class="list-social__item">
                  <a href="https://www.pinterest.fr/Sellybags/" class="list-social__link link"><svg aria-hidden="true" focusable="false" class="icon icon-pinterest" viewBox="0 0 17 18">
  <path fill="currentColor" d="M8.48.58a8.42 8.42 0 015.9 2.45 8.42 8.42 0 011.33 10.08 8.28 8.28 0 01-7.23 4.16 8.5 8.5 0 01-2.37-.32c.42-.68.7-1.29.85-1.8l.59-2.29c.14.28.41.52.8.73.4.2.8.31 1.24.31.87 0 1.65-.25 2.34-.75a4.87 4.87 0 001.6-2.05 7.3 7.3 0 00.56-2.93c0-1.3-.5-2.41-1.49-3.36a5.27 5.27 0 00-3.8-1.43c-.93 0-1.8.16-2.58.48A5.23 5.23 0 002.85 8.6c0 .75.14 1.41.43 1.98.28.56.7.96 1.27 1.2.1.04.19.04.26 0 .07-.03.12-.1.15-.2l.18-.68c.05-.15.02-.3-.11-.45a2.35 2.35 0 01-.57-1.63A3.96 3.96 0 018.6 4.8c1.09 0 1.94.3 2.54.89.61.6.92 1.37.92 2.32 0 .8-.11 1.54-.33 2.21a3.97 3.97 0 01-.93 1.62c-.4.4-.87.6-1.4.6-.43 0-.78-.15-1.06-.47-.27-.32-.36-.7-.26-1.13a111.14 111.14 0 01.47-1.6l.18-.73c.06-.26.09-.47.09-.65 0-.36-.1-.66-.28-.89-.2-.23-.47-.35-.83-.35-.45 0-.83.2-1.13.62-.3.41-.46.93-.46 1.56a4.1 4.1 0 00.18 1.15l.06.15c-.6 2.58-.95 4.1-1.08 4.54-.12.55-.16 1.2-.13 1.94a8.4 8.4 0 01-5-7.65c0-2.3.81-4.28 2.44-5.9A8.04 8.04 0 018.48.57z">
</svg>
<span class="visually-hidden">Pinterest</span>
                  </a>
                </li><li class="list-social__item">
                  <a href="https://www.instagram.com/selly.bags/" class="list-social__link link"><svg aria-hidden="true" focusable="false" class="icon icon-instagram" viewBox="0 0 18 18">
  <path fill="currentColor" d="M8.77 1.58c2.34 0 2.62.01 3.54.05.86.04 1.32.18 1.63.3.41.17.7.35 1.01.66.3.3.5.6.65 1 .12.32.27.78.3 1.64.05.92.06 1.2.06 3.54s-.01 2.62-.05 3.54a4.79 4.79 0 01-.3 1.63c-.17.41-.35.7-.66 1.01-.3.3-.6.5-1.01.66-.31.12-.77.26-1.63.3-.92.04-1.2.05-3.54.05s-2.62 0-3.55-.05a4.79 4.79 0 01-1.62-.3c-.42-.16-.7-.35-1.01-.66-.31-.3-.5-.6-.66-1a4.87 4.87 0 01-.3-1.64c-.04-.92-.05-1.2-.05-3.54s0-2.62.05-3.54c.04-.86.18-1.32.3-1.63.16-.41.35-.7.66-1.01.3-.3.6-.5 1-.65.32-.12.78-.27 1.63-.3.93-.05 1.2-.06 3.55-.06zm0-1.58C6.39 0 6.09.01 5.15.05c-.93.04-1.57.2-2.13.4-.57.23-1.06.54-1.55 1.02C1 1.96.7 2.45.46 3.02c-.22.56-.37 1.2-.4 2.13C0 6.1 0 6.4 0 8.77s.01 2.68.05 3.61c.04.94.2 1.57.4 2.13.23.58.54 1.07 1.02 1.56.49.48.98.78 1.55 1.01.56.22 1.2.37 2.13.4.94.05 1.24.06 3.62.06 2.39 0 2.68-.01 3.62-.05.93-.04 1.57-.2 2.13-.41a4.27 4.27 0 001.55-1.01c.49-.49.79-.98 1.01-1.56.22-.55.37-1.19.41-2.13.04-.93.05-1.23.05-3.61 0-2.39 0-2.68-.05-3.62a6.47 6.47 0 00-.4-2.13 4.27 4.27 0 00-1.02-1.55A4.35 4.35 0 0014.52.46a6.43 6.43 0 00-2.13-.41A69 69 0 008.77 0z"/>
  <path fill="currentColor" d="M8.8 4a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm0 7.43a2.92 2.92 0 110-5.85 2.92 2.92 0 010 5.85zM13.43 5a1.05 1.05 0 100-2.1 1.05 1.05 0 000 2.1z">
</svg>
<span class="visually-hidden">Instagram</span>
                  </a>
                </li></ul>
          </div>
        </div>
      </div>
    </div>
  </details>
</header-drawer>

<a href="INDEX" class="header__heading-link link link--text focus-inset"><div class="header__heading-logo-wrapper">
                
                  <img src="//58194a.myshopify.com/cdn/shop/files/SELLY_BAGS-photoaidcom-cropped.png?v=1690981535&amp;width=600" alt="My Store" srcset="//58194a.myshopify.com/cdn/shop/files/SELLY_BAGS-photoaidcom-cropped.png?v=1690981535&amp;width=210 210w, //58194a.myshopify.com/cdn/shop/files/SELLY_BAGS-photoaidcom-cropped.png?v=1690981535&amp;width=315 315w, //58194a.myshopify.com/cdn/shop/files/SELLY_BAGS-photoaidcom-cropped.png?v=1690981535&amp;width=420 420w" width="210" height="210.0" loading="eager" class="header__heading-logo" sizes="(min-width: 750px) 210px, 50vw">
              </div></a><div class="header__icons header__icons--localization header__localization">
      <div class="desktop-localization-wrapper">
</div>
      
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

    <header>
        <!-- Your existing header content -->

        <!-- Search icon with search bar -->

<body>
    <!-- Search icon with search bar -->
 
<div id="search-container">
    <input type="text" id="search-input" placeholder="Search">
    <ul id="autocomplete-list" style="display: none;"></ul>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById("search-input");
        const autocompleteList = document.getElementById("autocomplete-list");

        searchInput.addEventListener("input", function () {
            const searchValue = this.value.toLowerCase();

            // Make an AJAX request to get autocomplete data from the server
            fetch("search")
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    const filteredProducts = data.filter(product => product.product_name.toLowerCase().includes(searchValue));
                    displayAutocomplete(filteredProducts);
                })
                .catch(error => {
                    console.error("Error fetching autocomplete data:", error);
                    // Handle the error, for example, by displaying a message to the user
                });
        });

        function displayAutocomplete(results) {
            autocompleteList.innerHTML = "";

            if (results.length === 0) {
                autocompleteList.style.display = "none";
                return;
            }

            autocompleteList.style.display = "block";

            results.forEach(result => {
                const listItem = document.createElement("li");

                // Create a link around each item
                const link = document.createElement("a");
                link.href = result.product_link; // Set the link URL
                link.innerHTML = `<img src="${result.product_image}" alt="${result.product_name}"> ${result.product_name}`;
                
                // Add an event listener to handle the redirection when an item is clicked
                link.addEventListener("click", function (event) {
                    event.preventDefault();
                    window.location.href = result.product_link;
                });

                listItem.appendChild(link);
                autocompleteList.appendChild(listItem);
            });
        }

        document.addEventListener("click", function (event) {
            if (event.target !== searchInput) {
                autocompleteList.style.display = "none";
            }
        });
    });
    $(document).ready(function () {
            var searchInput = $('#search-input');

            searchInput.on('keypress', function (event) {
                // Check if the 'Enter' key is pressed (key code 13)
                if (event.keyCode === 13) {
                    var query = searchInput.val().trim().toLowerCase();
                    switch (query) {
                        // Gucci
                        case 'gucci':
                        case 'gucci bag':
                        case 'gucci handbags':
                        case 'gucci backpacks':
                            window.location.href = 'GUCCICOLLECTION';
                            break;

                        // Prada
                        case 'prada':
                        case 'prada bag':
                        case 'prada handbags':
                            window.location.href = 'PRADACOLLECTION';
                            break;

                        // Louis Vuitton
                        case 'louis vuitton':
                        case 'louis vuitton bag':
                        case 'louis vuitton handbags':
                        case 'louis vuitton backpacks':
                            window.location.href = 'LOUISVUITTONCOLLECTION';
                            break;

                        // Versace
                        case 'versace':
                        case 'versace bag':
                        case 'versace handbags':
                            window.location.href = 'VERSACECOLLECTION';
                            break;

                        // Dolce & Gabbana
                        case 'dolce & gabbana':
                        case 'dolce and gabbana':
                        case 'dolce':
                        case 'dolce & gabbana bag':
                        case 'dolce & gabbana handbags':
                            window.location.href = 'DOLCE&GABBANACOLLECTION';
                            break;

                        // Balenciaga
                        case 'balenciaga':
                        case 'balenciaga bag':
                        case 'balenciaga handbags':
                            window.location.href = 'BALENCIAGACOLLECTTION';
                            break;

                        // Christian Dior
                        case 'christian dior':
                        case 'christian dior bag':
                        case 'christian dior handbags':
                            window.location.href = 'CHRISTIANDIORCOLLECTION';
                            break;

                        // Hermes
                        case 'hermes':
                        case 'hermes bag':
                        case 'hermes handbags':
                            window.location.href = 'HERMESCOLLECTION';
                            break;

                        // Saint Laurent
                        case 'saint laurent':
                        case 'saint laurent bag':
                        case 'saint laurent handbags':
                            window.location.href = 'SAINTLAURENTCOLLECTION';
                            break;
                        default:
                            window.location.href = 'notavailable';
                    }
                }
            });
        });
</script>

       <style>


#search-container:hover::before {
  animation: pulse 1s ease-in-out infinite;
}



#search-input {
  padding: 10px;
  padding-left: 40px;
  width: 300px;
  border: none;
  border-radius: 10px;
  outline: none;
  box-shadow: 0 0 0 2px black; /* Adjust the last value for a thinner line */
  background-color: transparent;
}


@keyframes fade-in {
  from { opacity: 0; }
  to { opacity: 1; }
}

#autocomplete-list {
  list-style: none;
  padding: 0;
  margin: 0;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  display: block;
  animation: fade-in 0.5s ease-in;
}

#autocomplete-list li {
  padding: 10px;
  cursor: pointer;
}

#autocomplete-list li:hover {
  background-color: #f2f2f2;
}

/* Search icon */
#search-container::before {
  content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 128 128"><path d="M 56.599609 21.599609 C 34.099609 21.599609 15.800781 40.100781 15.800781 62.800781 C 15.800781 85.600781 34.099609 104 56.599609 104 C 66.899609 104 76.3 100.09922 83.5 93.699219 L 85.800781 96 L 83.699219 98.199219 C 82.499219 99.399219 82.499219 101.3 83.699219 102.5 L 101.69922 120.69922 C 102.29922 121.29922 103.00078 121.59961 103.80078 121.59961 C 104.60078 121.59961 105.40039 121.29922 105.90039 120.69922 L 113.90039 112.59961 C 115.00039 111.39961 115.00078 109.50039 113.80078 108.40039 L 95.800781 90.199219 C 95.200781 89.599219 94.499219 89.300781 93.699219 89.300781 C 92.899219 89.300781 92.099609 89.599219 91.599609 90.199219 L 89.5 92.400391 L 87.199219 90 C 93.499219 82.7 97.400391 73.200781 97.400391 62.800781 C 97.400391 40.100781 79.099609 21.599609 56.599609 21.599609 z M 56.599609 27.699219 C 75.799609 27.699219 91.400391 43.500391 91.400391 62.900391 C 91.400391 82.300391 75.799609 98 56.599609 98 C 37.399609 98 21.800781 82.300391 21.800781 62.900391 C 21.800781 43.500391 37.399609 27.699219 56.599609 27.699219 z M 56.699219 40.199219 C 47.199219 40.199219 38.7 46.300781 35.5 55.300781 C 35 56.600781 35.699609 58.199609 37.099609 58.599609 C 37.399609 58.699609 37.7 58.800781 38 58.800781 C 39.1 58.800781 40.1 58.1 40.5 57 C 42.9 50.1 49.499219 45.400391 56.699219 45.400391 C 58.099219 45.400391 59.300781 44.200781 59.300781 42.800781 C 59.300781 41.400781 58.099219 40.199219 56.699219 40.199219 z M 37.699219 64.900391 C 36.299219 64.900391 35.099609 66 35.099609 67.5 L 35.099609 67.900391 C 35.199609 69.300391 36.300781 70.5 37.800781 70.5 C 39.200781 70.5 40.400391 69.300391 40.400391 67.900391 L 40.400391 67.599609 C 40.400391 66.099609 39.300781 64.900391 37.800781 64.900391 L 37.699219 64.900391 z M 93.800781 96.599609 L 107.59961 110.59961 L 103.80078 114.40039 L 90 100.40039 L 93.800781 96.599609 z"/></svg>');
  font-size: 24px; /* Adjust the size as needed */
  position: absolute;
  top: 50%;
  left: 10px;
  transform: translateY(-50%);
  cursor: pointer;

}


    </style>


</body>

</head>


       


  </header>
</sticky-header>
<a href="cart" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble" style="position: relative; left: 10px; top: 5px;">
  <svg
    class="icon icon-cart-empty"
    aria-hidden="true"
    focusable="false"
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 40 40"
    fill="none"
  >

  <path d="M24.25,2.5898438h-2.8359375c-0.0267944,0-0.0495605,0.0125122-0.0756226,0.0152588  c-0.0543823,0.0055542-0.1052246,0.0145874-0.156189,0.0315552c-0.0426636,0.0140991-0.0811768,0.0314941-0.1200562,0.0526123  c-0.0447388,0.024353-0.085083,0.0507813-0.1240845,0.0836792c-0.0358887,0.0301514-0.0663452,0.0622559-0.0960083,0.0984497  c-0.0305786,0.0372925-0.0567017,0.0752563-0.079895,0.1184692c-0.0239868,0.0443726-0.0408325,0.0899048-0.055542,0.1390991  c-0.0079956,0.0266724-0.0252686,0.0480957-0.0303955,0.0761108l-0.4295044,2.3473511L1.8930664,6.625  C1.8227539,6.6201172,1.7607422,6.6303711,1.6821289,6.6376953C1.2744141,6.6748047,0.9716797,7.0322266,1.0019531,7.4404297  c0.0024414,0.0307617,0.0063477,0.0605469,0.012207,0.0898438l1.2788086,6.9746094  c0.2924805,1.081543,1.1933594,2.1733398,2.5483398,2.1733398h13.3695679l-0.2862549,1.5644531H6.6748047  c-1.4243164,0-2.5834961,1.1591797-2.5834961,2.5834961c0,1.4248047,1.1591797,2.5839844,2.5834961,2.5839844  s2.5834961-1.1591797,2.5834961-2.5839844c0-0.3881226-0.0922241-0.7528687-0.2462769-1.0834961h6.9080811  c-0.1540527,0.3306274-0.2462769,0.6953735-0.2462769,1.0834961c0,1.4248047,1.1591797,2.5839844,2.5834961,2.5839844  s2.5834961-1.1591797,2.5834961-2.5839844c0-1.0127563-0.5914307-1.8825073-1.4421387-2.3057861l2.640564-14.430542H24.25  c0.4140625,0,0.75-0.3359375,0.75-0.75S24.6640625,2.5898438,24.25,2.5898438z M19.0220947,12.244812l-3.1782227,0.0499268  l0.1730957-1.8419189l3.3514404-0.1004639L19.0220947,12.244812z M3.1442871,10.8387451l3.1759644-0.0952148l0.2077637,1.6974487  l-3.081543,0.0484009L3.1442871,10.8387451z M7.3235474,10.7134399l3.4909058-0.1046143v1.7648315l-3.281311,0.0515747  L7.3235474,10.7134399z M10.8144531,9.6079102L7.2014771,9.7162476l-0.230835-1.885376l3.843811-0.2247314V9.6079102z   M11.8144531,7.5476685l3.4902344-0.2041016l-0.2006836,2.1357422l-3.2895508,0.0986328V7.5476685z M10.8144531,13.3739014  v1.8043213H7.8701782l-0.2148438-1.7546997L10.8144531,13.3739014z M11.8144531,13.3582153l2.9293823-0.0459595l-0.175354,1.8659668  h-2.7540283V13.3582153z M11.8144531,12.3579712v-1.7791138l3.1952515-0.0958252l-0.1717529,1.8274536L11.8144531,12.3579712z   M19.5525513,9.3459473l-3.4412842,0.1031494l0.2033691-2.1645508l3.6542358-0.2136841L19.5525513,9.3459473z M5.9707642,7.8893433  l0.227356,1.8569336l-3.236145,0.0970459C2.8256226,9.102478,2.717041,8.5267334,2.6245117,8.0849609L5.9707642,7.8893433z   M3.7548828,14.1743164l-0.1258545-0.687561l3.0212402-0.0474243l0.2128906,1.7388916H4.8413086  C4.1987305,15.1782227,3.8408203,14.4819336,3.7548828,14.1743164z M15.572937,15.1782227l0.1768188-1.8817749l3.0888062-0.0485229  l-0.3532104,1.9302979H15.572937z M7.7583008,20.8261719c0,0.5976563-0.4858398,1.0839844-1.0834961,1.0839844  s-1.0834961-0.4863281-1.0834961-1.0839844s0.4858398-1.0834961,1.0834961-1.0834961S7.7583008,20.2285156,7.7583008,20.8261719z   M18.2573242,21.9101563c-0.5976563,0-1.0834961-0.4863281-1.0834961-1.0839844s0.4858398-1.0834961,1.0834961-1.0834961  s1.0834961,0.4858398,1.0834961,1.0834961S18.8549805,21.9101563,18.2573242,21.9101563z" fill="#1D1D1B"/>
</svg>
</a>
    </div>


<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "My Store",
    
      "logo": "https:\/\/58194a.myshopify.com\/cdn\/shop\/files\/SELLY_BAGS-photoaidcom-cropped.png?v=1690981535\u0026width=500",
    
    "sameAs": [
      "https:\/\/twitter.com\/selly_bags",
      "",
      "https:\/\/www.pinterest.fr\/Sellybags\/",
      "https:\/\/www.instagram.com\/selly.bags\/",
      "",
      "",
      "",
      "",
      ""
    ],
    "url": "https:\/\/58194a.myshopify.com\/pages\/collection-doesnt-exist"
  }
 

        
</script>
</div>



<!-- END sections: header-group -->


    <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
      <section id="shopify-section-template--19917721043255__main" class="shopify-section section"><section
  id="MainProduct-template--19917721043255__main"
  class="page-width section-template--19917721043255__main-padding"
  data-section="template--19917721043255__main"
>
  <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/section-main-product.css?v=12388427824196486731691102414" rel="stylesheet" type="text/css" media="all" />
  <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-accordion.css?v=180964204318874863811688782258" rel="stylesheet" type="text/css" media="all" />
  <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-price.css?v=65402837579211014041688782258" rel="stylesheet" type="text/css" media="all" />
  <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-slider.css?v=142503135496229589681688782258" rel="stylesheet" type="text/css" media="all" />
  <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-rating.css?v=157771854592137137841688782258" rel="stylesheet" type="text/css" media="all" />
  <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-loading-overlay.css?v=43236910203777044501688782258" rel="stylesheet" type="text/css" media="all" />
  <link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-deferred-media.css?v=14096082462203297471688782258" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.section-template--19917721043255__main-padding {
      padding-top: 27px;
      padding-bottom: 9px;
    }

    @media screen and (min-width: 750px) {
      .section-template--19917721043255__main-padding {
        padding-top: 36px;
        padding-bottom: 12px;
      }
    }</style><script src="//58194a.myshopify.com/cdn/shop/t/3/assets/product-info.js?v=68469288658591082901688782258" defer="defer"></script>
  <script src="//58194a.myshopify.com/cdn/shop/t/3/assets/product-form.js?v=138816392078825582251688782258" defer="defer"></script>
  


  <div class="product product--large product--left product--stacked product--mobile-hide grid grid--1-col grid--2-col-tablet">
    <div class="grid__item product__media-wrapper">
      
<media-gallery
  id="MediaGallery-template--19917721043255__main"
  role="region"
  
    class="product__column-sticky"
  
  aria-label="Gallery Viewer"
  data-desktop-layout="stacked"
>
  <div id="GalleryStatus-template--19917721043255__main" class="visually-hidden" role="status"></div>
  <slider-component id="GalleryViewer-template--19917721043255__main" class="slider-mobile-gutter"><a class="skip-to-content-link button visually-hidden quick-add-hidden" href="#ProductInfo-template--19917721043255__main">
        Skip to product information
      </a><ul
      id="Slider-Gallery-template--19917721043255__main"
      class="product__media-list contains-media grid grid--peek list-unstyled slider slider--mobile"
      role="list"
    ><li
            id="Slide-template--19917721043255__main-34503149814071"
            class="product__media-item grid__item slider__slide is-active scroll-trigger animate--fade-in"
            data-media-id="template--19917721043255__main-34503149814071"
          >

<div
  class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height"
  style="--ratio: 0.7496251874062968; --preview-ratio: 0.7496251874062968;"
>
  <noscript><div class="product__media media">
        <img src="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=1946" alt="" srcset="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=246 246w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=493 493w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=600 600w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=713 713w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=823 823w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=990 990w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=1100 1100w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=1206 1206w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=1346 1346w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=1426 1426w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=1646 1646w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=1946 1946w" width="1946" height="2596" sizes="(min-width: 1100px) 650px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
      </div></noscript>

  <modal-opener class="product__modal-opener product__modal-opener--image no-js-hidden" data-modal="#ProductModal-template--19917721043255__main">
    <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true"><svg
  aria-hidden="true"
  focusable="false"
  class="icon icon-plus"
  width="19"
  height="19"
  viewBox="0 0 19 19"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.66724 7.93978C4.66655 7.66364 4.88984 7.43922 5.16598 7.43853L10.6996 7.42464C10.9758 7.42395 11.2002 7.64724 11.2009 7.92339C11.2016 8.19953 10.9783 8.42395 10.7021 8.42464L5.16849 8.43852C4.89235 8.43922 4.66793 8.21592 4.66724 7.93978Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.92576 4.66463C8.2019 4.66394 8.42632 4.88723 8.42702 5.16337L8.4409 10.697C8.44159 10.9732 8.2183 11.1976 7.94215 11.1983C7.66601 11.199 7.44159 10.9757 7.4409 10.6995L7.42702 5.16588C7.42633 4.88974 7.64962 4.66532 7.92576 4.66463Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8324 3.03011C10.1255 0.323296 5.73693 0.323296 3.03011 3.03011C0.323296 5.73693 0.323296 10.1256 3.03011 12.8324C5.73693 15.5392 10.1255 15.5392 12.8324 12.8324C15.5392 10.1256 15.5392 5.73693 12.8324 3.03011ZM2.32301 2.32301C5.42035 -0.774336 10.4421 -0.774336 13.5395 2.32301C16.6101 5.39361 16.6366 10.3556 13.619 13.4588L18.2473 18.0871C18.4426 18.2824 18.4426 18.599 18.2473 18.7943C18.0521 18.9895 17.7355 18.9895 17.5402 18.7943L12.8778 14.1318C9.76383 16.6223 5.20839 16.4249 2.32301 13.5395C-0.774335 10.4421 -0.774335 5.42035 2.32301 2.32301Z" fill="currentColor"/>
</svg>
</span>
    <div class="loading-overlay__spinner hidden">
      <svg
        aria-hidden="true"
        focusable="false"
        class="spinner"
        viewBox="0 0 66 66"
        xmlns="http://www.w3.org/2000/svg"
      >
        <circle class="path" fill="none" stroke-width="4" cx="33" cy="33" r="30"></circle>
      </svg>
    </div>
    <div class="product__media media media--transparent">
      <img src="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=1946" alt="" srcset="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=246 246w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=493 493w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=600 600w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=713 713w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=823 823w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=990 990w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=1100 1100w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=1206 1206w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=1346 1346w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=1426 1426w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=1646 1646w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&amp;width=1946 1946w" width="1946" height="2596" class="image-magnify-lightbox" sizes="(min-width: 1100px) 650px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
    </div>
    <button class="product__media-toggle quick-add-hidden product__media-zoom-lightbox" type="button" aria-haspopup="dialog" data-media-id="34503149814071">
      <span class="visually-hidden">
        Open media 1 in modal
      </span>
    </button>
  </modal-opener></div>

          </li><li
            id="Slide-template--19917721043255__main-34503149846839"
            class="product__media-item grid__item slider__slide scroll-trigger animate--fade-in"
            data-media-id="template--19917721043255__main-34503149846839"
          >

<div
  class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height"
  style="--ratio: 0.7496251874062968; --preview-ratio: 0.7496251874062968;"
>
  <noscript><div class="product__media media">
        <img src="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=1946" alt="" srcset="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=246 246w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=493 493w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=600 600w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=713 713w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=823 823w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=990 990w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=1100 1100w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=1206 1206w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=1346 1346w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=1426 1426w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=1646 1646w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=1946 1946w" width="1946" height="2596" loading="lazy" sizes="(min-width: 1100px) 650px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
      </div></noscript>

  <modal-opener class="product__modal-opener product__modal-opener--image no-js-hidden" data-modal="#ProductModal-template--19917721043255__main">
    <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true"><svg
  aria-hidden="true"
  focusable="false"
  class="icon icon-plus"
  width="19"
  height="19"
  viewBox="0 0 19 19"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.66724 7.93978C4.66655 7.66364 4.88984 7.43922 5.16598 7.43853L10.6996 7.42464C10.9758 7.42395 11.2002 7.64724 11.2009 7.92339C11.2016 8.19953 10.9783 8.42395 10.7021 8.42464L5.16849 8.43852C4.89235 8.43922 4.66793 8.21592 4.66724 7.93978Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.92576 4.66463C8.2019 4.66394 8.42632 4.88723 8.42702 5.16337L8.4409 10.697C8.44159 10.9732 8.2183 11.1976 7.94215 11.1983C7.66601 11.199 7.44159 10.9757 7.4409 10.6995L7.42702 5.16588C7.42633 4.88974 7.64962 4.66532 7.92576 4.66463Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8324 3.03011C10.1255 0.323296 5.73693 0.323296 3.03011 3.03011C0.323296 5.73693 0.323296 10.1256 3.03011 12.8324C5.73693 15.5392 10.1255 15.5392 12.8324 12.8324C15.5392 10.1256 15.5392 5.73693 12.8324 3.03011ZM2.32301 2.32301C5.42035 -0.774336 10.4421 -0.774336 13.5395 2.32301C16.6101 5.39361 16.6366 10.3556 13.619 13.4588L18.2473 18.0871C18.4426 18.2824 18.4426 18.599 18.2473 18.7943C18.0521 18.9895 17.7355 18.9895 17.5402 18.7943L12.8778 14.1318C9.76383 16.6223 5.20839 16.4249 2.32301 13.5395C-0.774335 10.4421 -0.774335 5.42035 2.32301 2.32301Z" fill="currentColor"/>
</svg>
</span>
    <div class="loading-overlay__spinner hidden">
      <svg
        aria-hidden="true"
        focusable="false"
        class="spinner"
        viewBox="0 0 66 66"
        xmlns="http://www.w3.org/2000/svg"
      >
        <circle class="path" fill="none" stroke-width="4" cx="33" cy="33" r="30"></circle>
      </svg>
    </div>
    <div class="product__media media media--transparent">
      <img src="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=1946" alt="" srcset="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=246 246w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=493 493w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=600 600w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=713 713w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=823 823w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=990 990w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=1100 1100w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=1206 1206w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=1346 1346w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=1426 1426w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=1646 1646w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&amp;width=1946 1946w" width="1946" height="2596" loading="lazy" class="image-magnify-lightbox" sizes="(min-width: 1100px) 650px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
    </div>
    <button class="product__media-toggle quick-add-hidden product__media-zoom-lightbox" type="button" aria-haspopup="dialog" data-media-id="34503149846839">
      <span class="visually-hidden">
        Open media 2 in modal
      </span>
    </button>
  </modal-opener></div>

          </li><li
            id="Slide-template--19917721043255__main-34503149879607"
            class="product__media-item grid__item slider__slide scroll-trigger animate--fade-in"
            data-media-id="template--19917721043255__main-34503149879607"
          >

<div
  class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height"
  style="--ratio: 0.7496251874062968; --preview-ratio: 0.7496251874062968;"
>
  <noscript><div class="product__media media">
        <img src="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=1946" alt="" srcset="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=246 246w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=493 493w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=600 600w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=713 713w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=823 823w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=990 990w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=1100 1100w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=1206 1206w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=1346 1346w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=1426 1426w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=1646 1646w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=1946 1946w" width="1946" height="2596" loading="lazy" sizes="(min-width: 1100px) 650px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
      </div></noscript>

  <modal-opener class="product__modal-opener product__modal-opener--image no-js-hidden" data-modal="#ProductModal-template--19917721043255__main">
    <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true"><svg
  aria-hidden="true"
  focusable="false"
  class="icon icon-plus"
  width="19"
  height="19"
  viewBox="0 0 19 19"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.66724 7.93978C4.66655 7.66364 4.88984 7.43922 5.16598 7.43853L10.6996 7.42464C10.9758 7.42395 11.2002 7.64724 11.2009 7.92339C11.2016 8.19953 10.9783 8.42395 10.7021 8.42464L5.16849 8.43852C4.89235 8.43922 4.66793 8.21592 4.66724 7.93978Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.92576 4.66463C8.2019 4.66394 8.42632 4.88723 8.42702 5.16337L8.4409 10.697C8.44159 10.9732 8.2183 11.1976 7.94215 11.1983C7.66601 11.199 7.44159 10.9757 7.4409 10.6995L7.42702 5.16588C7.42633 4.88974 7.64962 4.66532 7.92576 4.66463Z" fill="currentColor"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8324 3.03011C10.1255 0.323296 5.73693 0.323296 3.03011 3.03011C0.323296 5.73693 0.323296 10.1256 3.03011 12.8324C5.73693 15.5392 10.1255 15.5392 12.8324 12.8324C15.5392 10.1256 15.5392 5.73693 12.8324 3.03011ZM2.32301 2.32301C5.42035 -0.774336 10.4421 -0.774336 13.5395 2.32301C16.6101 5.39361 16.6366 10.3556 13.619 13.4588L18.2473 18.0871C18.4426 18.2824 18.4426 18.599 18.2473 18.7943C18.0521 18.9895 17.7355 18.9895 17.5402 18.7943L12.8778 14.1318C9.76383 16.6223 5.20839 16.4249 2.32301 13.5395C-0.774335 10.4421 -0.774335 5.42035 2.32301 2.32301Z" fill="currentColor"/>
</svg>
</span>
    <div class="loading-overlay__spinner hidden">
      <svg
        aria-hidden="true"
        focusable="false"
        class="spinner"
        viewBox="0 0 66 66"
        xmlns="http://www.w3.org/2000/svg"
      >
        <circle class="path" fill="none" stroke-width="4" cx="33" cy="33" r="30"></circle>
      </svg>
    </div>
    <div class="product__media media media--transparent">
      <img src="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=1946" alt="" srcset="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=246 246w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=493 493w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=600 600w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=713 713w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=823 823w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=990 990w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=1100 1100w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=1206 1206w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=1346 1346w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=1426 1426w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=1646 1646w, //58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&amp;width=1946 1946w" width="1946" height="2596" loading="lazy" class="image-magnify-lightbox" sizes="(min-width: 1100px) 650px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
    </div>
    <button class="product__media-toggle quick-add-hidden product__media-zoom-lightbox" type="button" aria-haspopup="dialog" data-media-id="34503149879607">
      <span class="visually-hidden">
        Open media 3 in modal
      </span>
    </button>
  </modal-opener></div>

          </li></ul><div class="slider-buttons no-js-hidden quick-add-hidden">
        <button
          type="button"
          class="slider-button slider-button--prev"
          name="previous"
          aria-label="Slide left"
        >
          <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

        </button>
        <div class="slider-counter caption">
          <span class="slider-counter--current">1</span>
          <span aria-hidden="true"> / </span>
          <span class="visually-hidden">of</span>
          <span class="slider-counter--total">3</span>
        </div>
        <button
          type="button"
          class="slider-button slider-button--next"
          name="next"
          aria-label="Slide right"
        >
          <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

        </button>
      </div></slider-component></media-gallery>

    </div>
    <div class="product__info-wrapper grid__item scroll-trigger animate--slide-in">
      <product-info
        id="ProductInfo-template--19917721043255__main"
        data-section="template--19917721043255__main"
        data-url="/products/gucci-7"
        class="product__info-container product__column-sticky"
      ><div class="product__title" >
                <h1>GUCCI BLONDIE TOP HANDLE BAG</h1>
                <a href="/products/gucci-7" class="product__title">
                  <h2 class="h1">
                    GUCCI BLONDIE TOP HANDLE BAG
                  </h2>
                </a>
              </div><div class="no-js-hidden" id="price-template--19917721043255__main" role="status" >
<div
  class="
    price price--large price--show-badge"
>
  <div class="price__container"><div class="price__regular">
      <span class="visually-hidden visually-hidden--inline">Regular price</span>
      <span class="price-item price-item--regular">
        <?php

  $productId = 8;

    // Get product details by ID
    $productDetails = $database->getProductDetailsById($productId);

    if ($productDetails) {
        // Display product price dynamically
        echo '<div class="price__container">';
        echo '<div class="price__regular">';
        echo '<span class="visually-hidden visually-hidden--inline">Regular price</span>';
        echo '<span class="price-item price-item--regular">';
        echo '$' . number_format($productDetails['product_price'], 2) . ' USD';
        echo '</span>';
        echo '</div>';
        echo '</div>';
    } else {
        echo 'Product details not available.';
    }

        ?>
      </span>
    </div>
    <div class="price__sale">
        <span class="visually-hidden visually-hidden--inline">Regular price</span>
        <span>
          <s class="price-item price-item--regular">
            
              
            
          </s>
        </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
      <span class="price-item price-item--sale price-item--last">
        $600.00 USD
      </span>
    </div>
    <small class="unit-price caption hidden">
      <span class="visually-hidden">Unit price</span>
      <span class="price-item price-item--last">
        <span></span>
        <span aria-hidden="true">/</span>
        <span class="visually-hidden">&nbsp;per&nbsp;</span>
        <span>
        </span>
      </span>
    </small>
  </div><span class="badge price__badge-sale color-accent-2">
      Sale
    </span>

    <span class="badge price__badge-sold-out color-inverse">
      Sold out
    </span></div>
</div><div class="product__tax caption rte"><a href="shipping">Shipping</a> calculated at checkout.
</div><div ><form method="post" action="/cart/add" id="product-form-installment-template--19917721043255__main" accept-charset="UTF-8" class="installment caption-large" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="id" value="45792267698487">
                  
</form></div>
<noscript class="product-form__noscript-wrapper-template--19917721043255__main">
  <div class="product-form__input hidden">
    <label class="form__label" for="Variants-template--19917721043255__main">Product variants</label>
    <div class="select">
      <select
        name="id"
        id="Variants-template--19917721043255__main"
        class="select__select"
        form="product-form-template--19917721043255__main"
      ><option
            
              selected="selected"
            
            
            value="45792267698487"
          >Default Title - $600.00</option></select>
      <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
</svg>

    </div>
  </div>
</noscript>

<div
                id="Quantity-Form-template--19917721043255__main"
                class="product-form__input product-form__quantity"
                
              >
                
                

               
<div ><product-form class="product-form" data-hide-errors="false">
      <div class="product-form__error-message-wrapper" role="alert" hidden>
        <svg
          aria-hidden="true"
          focusable="false"
          class="icon icon-error"
          viewBox="0 0 13 13"
        >
          <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2"/>
          <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7"/>
          <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white"/>
          <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
        </svg>
        <span class="product-form__error-message"></span>
      </div>

<script src="https://cdn.lordicon.com/lordicon.js"></script>


<form class="add-to-cart" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <input type="hidden" name="product_id" value="8">

  <button type="submit" class="custom-button">
    <span class="icon-container">
      <lord-icon
        src="https://cdn.lordicon.com/mfmkufkr.json"
        trigger="loop"
        delay="500"
        style="width:40px;height:40px">
      </lord-icon>
    </span>
    <span class="button-text">Add To Cart</span>
  </button>
</form>




 <style>
.add-to-cart button {
    background-color: #fff;
    color: #000;
    font-size: 20px;
    border: 2px solid #000;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease, color 0.3s ease;
    padding: 15px 20px;
    box-sizing: border-box;
    margin-bottom: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0);
    position: relative;
    overflow: hidden;
}

.add-to-cart button .button-text {
    transition: opacity 0.3s;
    opacity: 1;
}

.add-to-cart button:hover {
    background-color: #98fb98 ;
    transform: scale(1.05);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    color: #333;
}

.add-to-cart button:hover .button-text {
    opacity: 0;
}

.add-to-cart button .icon-container {
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    pointer-events: none;
}

.add-to-cart button:hover .icon-container {
    opacity: 1;
}
.add-to-cart button {
    width: 5cm;
    height: 1,5cm;
    /* Add the rest of your styles */
}
.add-to-cart button:hover lord-icon {
    animation: spin 2s linear infinite; /* You can adjust the animation duration and timing function as needed */
  }

  
  

  .add-to-cart button:hover .icon-container {
    opacity: 1;
  }
    </style>


<script src="https://cdn.lordicon.com/lordicon.js"></script>

<form class="order-now" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <button type="submit" class="custom-button order-now-button">
    <span class="icon-container">
      <lord-icon
src="https://cdn.lordicon.com/zzjjvkam.json"
        trigger="loop"
stroke="regular"
        state="loop-ride"
        colors="primary:#242424,secondary:#000000"
        style="width:50px;height:50px">
      </lord-icon>
    </span>
    <span class="button-text">Order Now</span>
  </button>
</form>





<style>
.order-now-button {
    background-color: #fff;
    color: #000;
    font-size: 20px;
    border: 2px solid #000;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease, color 0.3s ease;
    padding: 15px 20px;
    box-sizing: border-box;
    margin-bottom: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0);
    position: relative;
    overflow: hidden;
}

.order-now-button .button-text {
    transition: opacity 0.3s;
    opacity: 1;
}

.order-now-button:hover {
    background-color: #98fb98  ;
    transform: scale(1.05);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    color: #333;
}

.order-now-button:hover .button-text {
    opacity: 0;
}

.order-now-button .icon-container {
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    pointer-events: none;
}

.order-now-button:hover .icon-container {
    opacity: 1;
}

.order-now-button {
    width: 5cm;
    height: 1,5cm;
    /* Add the rest of your styles */
}

.order-now-button:hover lord-icon {
    animation: spin 2s linear infinite; /* You can adjust the animation duration and timing function as needed */
  }


</style>
</product-form><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-pickup-availability.css?v=34645222959864780961688782258" rel="stylesheet" type="text/css" media="all" />
<pickup-availability
      class="product__pickup-availabilities no-js-hidden quick-add-hidden"
      
      data-root-url="/"
      data-variant-id="45792267698487"
      data-has-only-default-variant="true"
    >
      <template>
        <pickup-availability-preview class="pickup-availability-preview">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-unavailable"
  fill="none"
  viewBox="0 0 20 20"
>
  <path fill="#DE3618" stroke="#fff" d="M13.94 3.94L10 7.878l-3.94-3.94A1.499 1.499 0 103.94 6.06L7.88 10l-3.94 3.94a1.499 1.499 0 102.12 2.12L10 12.12l3.94 3.94a1.497 1.497 0 002.12 0 1.499 1.499 0 000-2.12L12.122 10l3.94-3.94a1.499 1.499 0 10-2.121-2.12z"/>
</svg>

          <div class="pickup-availability-info">
            <p class="caption-large">Couldn&#39;t load pickup availability</p>
            <button class="pickup-availability-button link link--text underlined-link">
              Refresh
            </button>
          </div>
        </pickup-availability-preview>
      </template>
    </pickup-availability>

    <script src="//58194a.myshopify.com/cdn/shop/t/3/assets/pickup-availability.js?v=7543877057949731971688782258" defer="defer"></script></div>
<div class="product__description rte quick-add-hidden" >
                  <p data-mce-fragment="1">Vintage Elements Are Paired With Archival Details As An Ode To The Glamour That Permeates Gucci's Latest Collections. This Shoulder Bag Pairs A Studded Top Handle With Soft Leather To Infuse The Accessory With A Timeless Feel. Reintroduced In Honor Of The Collection, The Rounded Silhouette Is Completed By A Historical, Rounded Iteration Of Guccio Gucci's Monogram.</p>
<ul data-mce-fragment="1">
<li data-mce-fragment="1">Light Green Leather</li>
<li data-mce-fragment="1">Gold-Toned Hardware</li>
<li data-mce-fragment="1">Blue And Red Web Strap</li>
<li data-mce-fragment="1">Round Interlocking G</li>
<li data-mce-fragment="1">Inside: 2 Main Compartments And 1 Zip Pocket</li>
<li data-mce-fragment="1">Studded Handle With 4.7" Drop</li>
<li data-mce-fragment="1">Web Strap With 20.5" Drop And Leather With 22.1" Drop</li>
<li data-mce-fragment="1">Magnetic Closure</li>
<li data-mce-fragment="1">4"W X 8.7"H X 2.7"D</li>
<li data-mce-fragment="1">Made In Italy</li>
</ul>
                </div><a href="/products/gucci-7" class="link product__view-details animate-arrow">
          View full details
          <svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>

        </a>
      </product-info>
    </div></div>

  

<product-modal id="ProductModal-template--19917721043255__main" class="product-media-modal media-modal">
  <div
    class="product-media-modal__dialog"
    role="dialog"
    aria-label="Media gallery"
    aria-modal="true"
    tabindex="-1"
  >
    <button
      id="ModalClose-template--19917721043255__main"
      type="button"
      class="product-media-modal__toggle"
      aria-label="Close"
    >
      <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  focusable="false"
  class="icon icon-close"
  fill="none"
  viewBox="0 0 18 17"
>
  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
</svg>

    </button>

    <div
      class="product-media-modal__content color-background-1 gradient"
      role="document"
      aria-label="Media gallery"
      tabindex="0"
    >
<img
    class="global-media-settings global-media-settings--no-shadow"
    srcset="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&width=550 550w,//58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563 1000w"
    sizes="(min-width: 750px) calc(100vw - 22rem), 1100px"
    src="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI.webp?v=1688779563&width=1445"
    alt="GUCCI BLONDIE TOP HANDLE BAG"
    loading="lazy"
    width="1100"
    height="1468"
    data-media-id="34503149814071"
  >
<img
    class="global-media-settings global-media-settings--no-shadow"
    srcset="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&width=550 550w,//58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562 1000w"
    sizes="(min-width: 750px) calc(100vw - 22rem), 1100px"
    src="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI1.webp?v=1688779562&width=1445"
    alt="GUCCI BLONDIE TOP HANDLE BAG"
    loading="lazy"
    width="1100"
    height="1468"
    data-media-id="34503149846839"
  >
<img
    class="global-media-settings global-media-settings--no-shadow"
    srcset="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&width=550 550w,//58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562 1000w"
    sizes="(min-width: 750px) calc(100vw - 22rem), 1100px"
    src="//58194a.myshopify.com/cdn/shop/files/GREENGUCCI2.webp?v=1688779562&width=1445"
    alt="GUCCI BLONDIE TOP HANDLE BAG"
    loading="lazy"
    width="1100"
    height="1468"
    data-media-id="34503149879607"
  ></div>
  </div>
</product-modal>


  
<script src="//58194a.myshopify.com/cdn/shop/t/3/assets/product-modal.js?v=116616134454508949461688782258" defer="defer"></script>
    <script src="//58194a.myshopify.com/cdn/shop/t/3/assets/media-gallery.js?v=96661908581229995091688782258" defer="defer"></script><script>
    document.addEventListener('DOMContentLoaded', function () {
      function isIE() {
        const ua = window.navigator.userAgent;
        const msie = ua.indexOf('MSIE ');
        const trident = ua.indexOf('Trident/');

        return msie > 0 || trident > 0;
      }

      if (!isIE()) return;
      const hiddenInput = document.querySelector('#product-form-template--19917721043255__main input[name="id"]');
      const noScriptInputWrapper = document.createElement('div');
      const variantSwitcher =
        document.querySelector('variant-radios[data-section="template--19917721043255__main"]') ||
        document.querySelector('variant-selects[data-section="template--19917721043255__main"]');
      noScriptInputWrapper.innerHTML = document.querySelector(
        '.product-form__noscript-wrapper-template--19917721043255__main'
      ).textContent;
      variantSwitcher.outerHTML = noScriptInputWrapper.outerHTML;

      document.querySelector('#Variants-template--19917721043255__main').addEventListener('change', function (event) {
        hiddenInput.value = event.currentTarget.value;
      });
    });
  </script><script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "Product",
      "name": "GUCCI BLONDIE TOP HANDLE BAG",
      "url": "https:\/\/58194a.myshopify.com\/products\/gucci-7",
      "image": [
          "https:\/\/58194a.myshopify.com\/cdn\/shop\/files\/GREENGUCCI.webp?v=1688779563\u0026width=1920"
        ],
      "description": "Vintage Elements Are Paired With Archival Details As An Ode To The Glamour That Permeates Gucci's Latest Collections. This Shoulder Bag Pairs A Studded Top Handle With Soft Leather To Infuse The Accessory With A Timeless Feel. Reintroduced In Honor Of The Collection, The Rounded Silhouette Is Completed By A Historical, Rounded Iteration Of Guccio Gucci's Monogram.\n\nLight Green Leather\nGold-Toned Hardware\nBlue And Red Web Strap\nRound Interlocking G\nInside: 2 Main Compartments And 1 Zip Pocket\nStudded Handle With 4.7\" Drop\nWeb Strap With 20.5\" Drop And Leather With 22.1\" Drop\nMagnetic Closure\n4\"W X 8.7\"H X 2.7\"D\nMade In Italy\n",
      
      "brand": {
        "@type": "Brand",
        "name": "My Store"
      },
      "offers": [{
            "@type" : "Offer","availability" : "http://schema.org/InStock",
            "price" : 600.0,
            "priceCurrency" : "USD",
            "url" : "https:\/\/58194a.myshopify.com\/products\/gucci-7?variant=45792267698487"
          }
]
    }
  </script>
</section>


</section><section id="shopify-section-template--19917721043255__related-products" class="shopify-section section"><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-card.css?v=153897544549437130131688782258" rel="stylesheet" type="text/css" media="all" />
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-price.css?v=65402837579211014041688782258" rel="stylesheet" type="text/css" media="all" />
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/section-related-products.css?v=80324771040738084201688782258" rel="stylesheet" type="text/css" media="all" />

<style data-shopify>.section-template--19917721043255__related-products-padding {
    padding-top: 27px;
    padding-bottom: 21px;
  }

  @media screen and (min-width: 750px) {
    .section-template--19917721043255__related-products-padding {
      padding-top: 36px;
      padding-bottom: 28px;
    }
  }</style><div class="color-background-1 gradient no-js-hidden">
  <product-recommendations
    class="related-products page-width section-template--19917721043255__related-products-padding isolate scroll-trigger animate--slide-in"
    data-url="/recommendations/products?section_id=template--19917721043255__related-products&product_id=8478110810423&limit=4"
  >
    
  </product-recommendations>
  </div>


</section>
    </main>

   <!-- BEGIN sections: footer-group -->
<div id="shopify-section-sections--19917717176631__footer" class="shopify-section shopify-section-group-footer-group">
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/section-footer.css?v=125160298726032154631690038564" rel="stylesheet" type="text/css" media="all" />
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-newsletter.css?v=4727253280200485261688782258" rel="stylesheet" type="text/css" media="all" />
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-list-menu.css?v=151968516119678728991688782258" rel="stylesheet" type="text/css" media="all" />
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-list-payment.css?v=69253961410771838501688782258" rel="stylesheet" type="text/css" media="all" />
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-list-social.css?v=52211663153726659061688782258" rel="stylesheet" type="text/css" media="all" />
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-localization-form.css?v=14162097032368378391688782258" rel="stylesheet" type="text/css" media="all" />
<style data-shopify>.footer {
    margin-top: 45px;
  }

  .section-sections--19917717176631__footer-padding {
    padding-top: 45px;
    padding-bottom: 39px;
  }

  @media screen and (min-width: 750px) {
    .footer {
      margin-top: 60px;
    }

    .section-sections--19917717176631__footer-padding {
      padding-top: 60px;
      padding-bottom: 52px;
    }
  }</style><footer class="footer color-accent-1 gradient section-sections--19917717176631__footer-padding"><div class="footer__content-top page-width"><div
            class="footer__blocks-wrapper grid grid--1-col grid--2-col grid--4-col-tablet  scroll-trigger animate--slide-in"
            
              data-cascade
            
          ><div
                class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in"
                
                
                  data-cascade
                  style="--animation-order: 1;"
                
              ><h2 class="footer-block__heading inline-richtext">Company</h2><ul class="footer-block__details-content list-unstyled"><li>
                            <a
                              href="aboutus"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              About Us
                            </a>
                          </li><li>
                            <a
                              href="https://wa.me/212650379345"
                               class="link link--text list-menu__item list-menu__item--link"
                            >
                              HELP
                            </a>
                          </li><li>
                            <a
                              href="https://wa.me/212650379345"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Request a Bag
                            </a>
                          </li></ul></div><div
                class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in"
                
                
                  data-cascade
                  style="--animation-order: 2;"
                
              ><h2 class="footer-block__heading inline-richtext">Customer Service</h2><ul class="footer-block__details-content list-unstyled"><li>
                            <a
                              href="privacy"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Privacy Policy
                            </a>
                          </li><li>
                            <a
                              href="refund"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Refund Policy
                            </a>
                          </li><li>
                            <a
                              href="shipping"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Shipping Policy
                            </a>
                          </li><li>
                            <a
                              href="termsofservice"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Terms of Service
                            </a>
                          </li></ul></div><div
                class="footer-block grid__item footer-block--menu scroll-trigger animate--slide-in"
                
                
                  data-cascade
                  style="--animation-order: 3;"
                
              ><h2 class="footer-block__heading inline-richtext">Quick links</h2><ul class="footer-block__details-content list-unstyled"><li>
                            <a
                              href="index"
                              class="link link--text list-menu__item list-menu__item--link list-menu__item--active"
                            >
                              Home page
                            </a>
                          </li><li>
                            <a
                              href="viewallcollections"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              All collections
                            </a>
                          </li><li>
                            <a
                              href="shopall"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              All products
                            </a>
                          </li></ul></div></div><div
          class="footer-block--newsletter scroll-trigger animate--slide-in"
          
            data-cascade
          
        ><ul class="footer__list-social list-unstyled list-social"><li class="list-social__item">
      <a href="https://www.instagram.com/selly.bags/" class="link list-social__link" ><svg aria-hidden="true" focusable="false" class="icon icon-instagram" viewBox="0 0 18 18">
  <path fill="currentColor" d="M8.77 1.58c2.34 0 2.62.01 3.54.05.86.04 1.32.18 1.63.3.41.17.7.35 1.01.66.3.3.5.6.65 1 .12.32.27.78.3 1.64.05.92.06 1.2.06 3.54s-.01 2.62-.05 3.54a4.79 4.79 0 01-.3 1.63c-.17.41-.35.7-.66 1.01-.3.3-.6.5-1.01.66-.31.12-.77.26-1.63.3-.92.04-1.2.05-3.54.05s-2.62 0-3.55-.05a4.79 4.79 0 01-1.62-.3c-.42-.16-.7-.35-1.01-.66-.31-.3-.5-.6-.66-1a4.87 4.87 0 01-.3-1.64c-.04-.92-.05-1.2-.05-3.54s0-2.62.05-3.54c.04-.86.18-1.32.3-1.63.16-.41.35-.7.66-1.01.3-.3.6-.5 1-.65.32-.12.78-.27 1.63-.3.93-.05 1.2-.06 3.55-.06zm0-1.58C6.39 0 6.09.01 5.15.05c-.93.04-1.57.2-2.13.4-.57.23-1.06.54-1.55 1.02C1 1.96.7 2.45.46 3.02c-.22.56-.37 1.2-.4 2.13C0 6.1 0 6.4 0 8.77s.01 2.68.05 3.61c.04.94.2 1.57.4 2.13.23.58.54 1.07 1.02 1.56.49.48.98.78 1.55 1.01.56.22 1.2.37 2.13.4.94.05 1.24.06 3.62.06 2.39 0 2.68-.01 3.62-.05.93-.04 1.57-.2 2.13-.41a4.27 4.27 0 001.55-1.01c.49-.49.79-.98 1.01-1.56.22-.55.37-1.19.41-2.13.04-.93.05-1.23.05-3.61 0-2.39 0-2.68-.05-3.62a6.47 6.47 0 00-.4-2.13 4.27 4.27 0 00-1.02-1.55A4.35 4.35 0 0014.52.46a6.43 6.43 0 00-2.13-.41A69 69 0 008.77 0z"/>
  <path fill="currentColor" d="M8.8 4a4.5 4.5 0 100 9 4.5 4.5 0 000-9zm0 7.43a2.92 2.92 0 110-5.85 2.92 2.92 0 010 5.85zM13.43 5a1.05 1.05 0 100-2.1 1.05 1.05 0 000 2.1z">
</svg>
<span class="visually-hidden">Instagram</span>
      </a>
    </li><li class="list-social__item">
      <a href="https://twitter.com/selly_bags" class="link list-social__link" ><svg aria-hidden="true" focusable="false" class="icon icon-twitter" viewBox="0 0 18 15">
  <path fill="currentColor" d="M17.64 2.6a7.33 7.33 0 01-1.75 1.82c0 .05 0 .13.02.23l.02.23a9.97 9.97 0 01-1.69 5.54c-.57.85-1.24 1.62-2.02 2.28a9.09 9.09 0 01-2.82 1.6 10.23 10.23 0 01-8.9-.98c.34.02.61.04.83.04 1.64 0 3.1-.5 4.38-1.5a3.6 3.6 0 01-3.3-2.45A2.91 2.91 0 004 9.35a3.47 3.47 0 01-2.02-1.21 3.37 3.37 0 01-.8-2.22v-.03c.46.24.98.37 1.58.4a3.45 3.45 0 01-1.54-2.9c0-.61.14-1.2.45-1.79a9.68 9.68 0 003.2 2.6 10 10 0 004.08 1.07 3 3 0 01-.13-.8c0-.97.34-1.8 1.03-2.48A3.45 3.45 0 0112.4.96a3.49 3.49 0 012.54 1.1c.8-.15 1.54-.44 2.23-.85a3.4 3.4 0 01-1.54 1.94c.74-.1 1.4-.28 2.01-.54z">
</svg>
<span class="visually-hidden">Twitter</span>
      </a>
    </li><li class="list-social__item">
      <a href="https://www.pinterest.fr/Sellybags/" class="link list-social__link" ><svg aria-hidden="true" focusable="false" class="icon icon-pinterest" viewBox="0 0 17 18">
  <path fill="currentColor" d="M8.48.58a8.42 8.42 0 015.9 2.45 8.42 8.42 0 011.33 10.08 8.28 8.28 0 01-7.23 4.16 8.5 8.5 0 01-2.37-.32c.42-.68.7-1.29.85-1.8l.59-2.29c.14.28.41.52.8.73.4.2.8.31 1.24.31.87 0 1.65-.25 2.34-.75a4.87 4.87 0 001.6-2.05 7.3 7.3 0 00.56-2.93c0-1.3-.5-2.41-1.49-3.36a5.27 5.27 0 00-3.8-1.43c-.93 0-1.8.16-2.58.48A5.23 5.23 0 002.85 8.6c0 .75.14 1.41.43 1.98.28.56.7.96 1.27 1.2.1.04.19.04.26 0 .07-.03.12-.1.15-.2l.18-.68c.05-.15.02-.3-.11-.45a2.35 2.35 0 01-.57-1.63A3.96 3.96 0 018.6 4.8c1.09 0 1.94.3 2.54.89.61.6.92 1.37.92 2.32 0 .8-.11 1.54-.33 2.21a3.97 3.97 0 01-.93 1.62c-.4.4-.87.6-1.4.6-.43 0-.78-.15-1.06-.47-.27-.32-.36-.7-.26-1.13a111.14 111.14 0 01.47-1.6l.18-.73c.06-.26.09-.47.09-.65 0-.36-.1-.66-.28-.89-.2-.23-.47-.35-.83-.35-.45 0-.83.2-1.13.62-.3.41-.46.93-.46 1.56a4.1 4.1 0 00.18 1.15l.06.15c-.6 2.58-.95 4.1-1.08 4.54-.12.55-.16 1.2-.13 1.94a8.4 8.4 0 01-5-7.65c0-2.3.81-4.28 2.44-5.9A8.04 8.04 0 018.48.57z">
</svg>
<span class="visually-hidden">Pinterest</span>
      </a>
    </li></ul></div>
      </div>
</footer><script src="//58194a.myshopify.com/cdn/shop/t/3/assets/localization-form.js?v=98683197766447567971688782258" defer="defer"></script>
</div>
<!-- END sections: footer-group -->
    <ul hidden>
      <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
      <li id="a11y-new-window-message">Opens in a new window.</li>
    </ul>

    <script>
      window.shopUrl = 'https://58194a.myshopify.com';
      window.routes = {
        cart_add_url: '/cart/add',
        cart_change_url: '/cart/change',
        cart_update_url: '/cart/update',
        cart_url: '/cart',
        predictive_search_url: '/search/suggest',
      };

      window.cartStrings = {
        error: `There was an error while updating your cart. Please try again.`,
        quantityError: `You can only add [quantity] of this item to your cart.`,
      };

      window.variantStrings = {
        addToCart: `Add to cart`,
        soldOut: `Sold out`,
        unavailable: `Unavailable`,
        unavailable_with_option: `[value] - Unavailable`,
      };

      window.accessibilityStrings = {
        imageAvailable: `Image [index] is now available in gallery view`,
        shareSuccess: `Link copied to clipboard`,
        pauseSlideshow: `Pause slideshow`,
        playSlideshow: `Play slideshow`,
      };
    </script><script src="//58194a.myshopify.com/cdn/shop/t/3/assets/predictive-search.js?v=162273246065392412141688782258" defer="defer"></script>
   

  </body>
</html>
