<?php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['q'])) {
    $searchQuery = $_GET['q'];

    // Querying the database
    $sqlQuery = "SELECT * FROM producttb WHERE product_name LIKE '$searchQuery%'";
    $result = $conn->query($sqlQuery);

    if ($result->num_rows > 0) {
        $results = array();
        while ($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
        echo json_encode($results);
    } else {
        echo json_encode([]);
    }
}

$conn->close();
?>




<!doctype html>
<html class="no-js" lang="en">
  <head>

    <script src=“https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js”></script>
<link rel=“stylesheet” href=“https://unpkg.com/flickity@2/dist/flickity.min.css”>
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script>
    //initialize the autocomplete widget
    $(function() {
      $("#search").autocomplete({
        //set the source to the PHP file that queries the database
        source: "search.php",
        //set the minimum number of characters to trigger the autocomplete
        minLength: 1
      });
    });
  </script>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="">
    <link rel="canonical" href="https://58194a.myshopify.com/collections"><link rel="preconnect" href="https://fonts.shopifycdn.com" crossorigin><title>
      Collections
 &ndash; My Store</title>

    
 <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
        }

        .product-list {
            list-style-type: none;
            padding: 0;
        }

        .product-item {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .product-item img {
            max-width: 100px;
            max-height: 100px;
            margin-right: 10px;
        }
    </style>
    

<meta property="og:site_name" content="My Store">
<meta property="og:url" content="https://58194a.myshopify.com/collections">
<meta property="og:title" content="Collections">
<meta property="og:type" content="website">
<meta property="og:description" content="My Store"><meta name="twitter:site" content="@selly_bags"><meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Collections">
<meta name="twitter:description" content="My Store">


    <script src="//58194a.myshopify.com/cdn/shop/t/3/assets/constants.js?v=58251544750838685771688782258" defer="defer"></script>
    <script src="//58194a.myshopify.com/cdn/shop/t/3/assets/pubsub.js?v=158357773527763999511688782258" defer="defer"></script>
    <script src="//58194a.myshopify.com/cdn/shop/t/3/assets/global.js?v=139248116715221171191688782258" defer="defer"></script><script src="//58194a.myshopify.com/cdn/shop/t/3/assets/animations.js?v=114255849464433187621688782258" defer="defer"></script><script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/79103263031/digital_wallets/dialog">
<script>
  (function() {
    var scripts = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/runtime.latest.en.e4cd673b01f883a18f39.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/809.latest.en.22b066f200008aec130a.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/810.latest.en.89cbc407b0fea47d8592.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/Information.latest.en.16ce62e2e4432736e7e6.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/90.latest.en.37f6b0ae2fa4de8e13e2.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/842.latest.en.15b973c3dc8e33e27356.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/551.latest.en.2ba3c1e0e8bb478b6136.js", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.6b7fd79704eb85b27bf7.js"];
    var styles = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/90.latest.en.4ef499f32e4f2515af86.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.latest.en.1667db3b0d933aefb522.css", "https://cdn.shopify.com/shopifycloud/checkout-web/assets/739.latest.en.ffa9763b408fc6f04c9b.css"];

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
<script id="__st">var __st={"a":79103263031,"offset":3600,"reqid":"8326ccd6-5f85-48c3-8b1a-53a1886b12a6","pageurl":"58194a.myshopify.com\/collections","u":"7e863a6ef49d","p":"collections"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>!function(o){o.addEventListener("DOMContentLoaded",function(){window.Shopify=window.Shopify||{},window.Shopify.recaptchaV3=window.Shopify.recaptchaV3||{siteKey:"6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"};var t=['form[action*="/contact"] input[name="form_type"][value="contact"]','form[action*="/comments"] input[name="form_type"][value="new_comment"]','form[action*="/account"] input[name="form_type"][value="customer_login"]','form[action*="/account"] input[name="form_type"][value="recover_customer_password"]','form[action*="/account"] input[name="form_type"][value="create_customer"]','form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");function n(e){e=e.target;null==e||null!=(e=function e(t,n){if(null==t.parentElement)return null;if("FORM"!=t.parentElement.tagName)return e(t.parentElement,n);for(var o=t.parentElement.action,r=0;r<n.length;r++)if(-1!==o.indexOf(n[r]))return t.parentElement;return null}(e,["/contact","/comments","/account"]))&&null!=e.querySelector(t)&&((e=o.createElement("script")).setAttribute("src","https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"),o.body.appendChild(e),o.removeEventListener("focus",n,!0),o.removeEventListener("change",n,!0),o.removeEventListener("click",n,!0))}o.addEventListener("click",n,!0),o.addEventListener("change",n,!0),o.addEventListener("focus",n,!0)})}(document);</script>

<script integrity="sha256-mTJpsrW8Nzb5NIidOqBkPZKXQ1pcLXXURK3zwadZxGI=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//58194a.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/load_feature-993269b2b5bc3736f934889d3aa0643d9297435a5c2d75d444adf3c1a759c462.js" crossorigin="anonymous"></script>
<script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="//58194a.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js" crossorigin="anonymous"></script>
<script integrity="sha256-AjT+yRYgO8z0L66BMKoqBvO4SrOWLJYnYYWthdsOhP4=" defer="defer" src="//58194a.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/bars/admin_bar_injector-0234fec916203bccf42fae8130aa2a06f3b84ab3962c96276185ad85db0e84fe.js" crossorigin="anonymous"></script>
<script id="sections-script" data-sections="header" defer="defer" src="//58194a.myshopify.com/cdn/shop/t/3/compiled_assets/scripts.js?134"></script>

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
<script>(function(){if ("sendBeacon" in navigator && "performance" in window) {var session_token = document.cookie.match(/_shopify_s=([^;]*)/);function handle_abandonment_event(e) {var entries = performance.getEntries().filter(function(entry) {return /monorail-edge.shopifysvc.com/.test(entry.name);});if (!window.abandonment_tracked && entries.length === 0) {window.abandonment_tracked = true;var currentMs = Date.now();var navigation_start = performance.timing.navigationStart;var payload = {shop_id: 79103263031,url: window.location.href,navigation_start,duration: currentMs - navigation_start,session_token: session_token && session_token.length === 2 ? session_token[1] : "",page_type: "list-collections"};window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({schema_id: "online_store_buyer_site_abandonment/1.1",payload: payload,metadata: {event_created_at_ms: currentMs,event_sent_at_ms: currentMs}}));}}window.addEventListener('pagehide', handle_abandonment_event);}}());</script>
<script id="web-pixels-manager-setup">(function e(e,n,a,o,t,r,i){function s(e,n){if(document.head){var a=document.createElement("link");e.match(/spin\.dev\/?/)&&(e+="?fast_storefront_renderer=1"),a.rel="preload",a.href=e,n&&(a.as=n);try{document.head.appendChild(a)}catch(e){console&&console.warn&&console.warn("[Web Pixels Manager] Could not append prefetch link tag to DOM.")}}}var l=i||[],d=null!==e;d&&(window.Shopify=window.Shopify||{},window.Shopify.analytics=window.Shopify.analytics||{},window.Shopify.analytics.replayQueue=[],window.Shopify.analytics.publish=function(e,n,a){window.Shopify.analytics.replayQueue.push([e,n,a])});var c=function(){var e="legacy",n="unknown",a=null,o=navigator.userAgent.match(/(Firefox|Chrome)\/(\d+)/i),t=navigator.userAgent.match(/(Edg)\/(\d+)/i),r=navigator.userAgent.match(/(Version)\/(\d+)(.+)(Safari)\/(\d+)/i);r?(n="safari",a=parseInt(r[2],10)):t?(n="edge",a=parseInt(t[2],10)):o&&(n=o[1].toLocaleLowerCase(),a=parseInt(o[2],10));var i={chrome:60,firefox:55,safari:11,edge:80}[n];return void 0!==i&&null!==a&&i<=a&&(e="modern"),e}(),p=c.substring(0,1),f=o.substring(0,1);if(d)try{self.performance.mark("wpm:start")}catch(e){}if(d){var u=self.location.origin,w=(e.webPixelsConfigList||[]).filter((function(e){return"app"===e.type.toLowerCase()}));for(let e=0;e<w.length;e++){s([u,"/wpm@",r,"/web-pixel-",w[e].id,"@",w[e].scriptVersion,"/sandbox/worker.",c,".js"].join(""),"script")}}var h,y,m,g,v,b,_,S,x=[a,"/wpm","/",f,r,p,".js"].join("");h={src:x,async:!0,onload:function(){if(e){var a=window.webPixelsManager.init(e);n(a),window.Shopify.analytics.replayQueue.forEach((function(e){a.publishCustomEvent(e[0],e[1],e[2])})),window.Shopify.analytics.replayQueue=[],window.Shopify.analytics.publish=a.publishCustomEvent,l.indexOf("web_pixels_identify_api")>-1&&(window.Shopify.analytics.identify=a.identify)}},onerror:function(){var n=(e.storefrontBaseUrl?e.storefrontBaseUrl.replace(/\/$/,""):self.location.origin)+"/.well-known/shopify/monorail/unstable/produce_batch",a=JSON.stringify({metadata:{event_sent_at_ms:(new Date).getTime()},events:[{schema_id:"web_pixels_manager_load/2.0",payload:{version:t||"latest",page_url:self.location.href,status:"failed",error_msg:x+" has failed to load"},metadata:{event_created_at_ms:(new Date).getTime()}}]});try{if(self.navigator.sendBeacon.bind(self.navigator)(n,a))return!0}catch(e){}const o=new XMLHttpRequest;try{return o.open("POST",n,!0),o.setRequestHeader("Content-Type","text/plain"),o.send(a),!0}catch(e){console&&console.warn&&console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")}return!1}},y=document.createElement("script"),m=h.src,g=h.async||!0,v=h.onload,b=h.onerror,_=document.head,S=document.body,y.async=g,y.src=m,v&&y.addEventListener("load",v),b&&y.addEventListener("error",b),_?_.appendChild(y):S?S.appendChild(y):console.error("Did not find a head or body element to append the script")})({shopId: 79103263031,storefrontBaseUrl: "https://58194a.myshopify.com",cdnBaseUrl: "https://58194a.myshopify.com/cdn",surface: "storefront-renderer",enabledBetaFlags: ["web_pixels_async_pixel_refactor"],webPixelsConfigList: [{"id":"shopify-app-pixel","configuration":"{}","eventPayloadVersion":"v1","runtimeContext":"STRICT","scriptVersion":"0557","apiClientId":"shopify-pixel","type":"APP"},{"id":"shopify-custom-pixel","eventPayloadVersion":"v1","runtimeContext":"LAX","scriptVersion":"0557","apiClientId":"shopify-pixel","type":"CUSTOM"}],initData: {"cart":null,"checkout":null,"customer":null,"productVariants":[]},},function pageEvents(webPixelsManagerAPI) {webPixelsManagerAPI.publish("page_viewed");},"https://58194a.myshopify.com/cdn","browser","0.0.337","6b44608cwcf56d5e7p4ae4b2b5m34ff8b1a",["web_pixels_async_pixel_refactor"]);</script>  <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'USD';
var meta = {"page":{"pageType":"collections"}};
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

      window.ShopifyAnalytics.lib.page(null,{"pageType":"collections"});

      var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
      var token = match? match[1]: undefined;
      if (!hasLoggedConversion(token)) {
        setCookieIfConversion(token);
        
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
<div>
    <!--create the search bar with an id of "search"-->
    <input type="text" id="search" placeholder="Search for items..." />
  </div>
        

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
                      href="INDEX.HTML"
                      class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      Home page
                    </a></li><li><a
                      id="HeaderDrawer-all-collections"
                      href="VIEWALLCOLLECTIONS.HTML"
                      class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      All collections
                    </a></li><li><a
                      id="HeaderDrawer-all-products"
                      href="SHOPALL.HTML"
                      class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                      
                    >
                      All products
                    </a></li></ul>
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

<a href="INDEX.HTML" class="header__heading-link link link--text focus-inset"><div class="header__heading-logo-wrapper">
                
                  <img src="//58194a.myshopify.com/cdn/shop/files/SELLY_BAGS-photoaidcom-cropped.png?v=1690981535&amp;width=600" alt="My Store" srcset="//58194a.myshopify.com/cdn/shop/files/SELLY_BAGS-photoaidcom-cropped.png?v=1690981535&amp;width=210 210w, //58194a.myshopify.com/cdn/shop/files/SELLY_BAGS-photoaidcom-cropped.png?v=1690981535&amp;width=315 315w, //58194a.myshopify.com/cdn/shop/files/SELLY_BAGS-photoaidcom-cropped.png?v=1690981535&amp;width=420 420w" width="210" height="210.0" loading="eager" class="header__heading-logo" sizes="(min-width: 750px) 210px, 50vw">
              </div></a><div class="header__icons header__icons--localization header__localization">
      <div class="desktop-localization-wrapper">
</div>
      
    <style>
        .search-icon {
            display: flex;
            align-items: center;
        }

        .search-icon i {
            font-size: 1.5rem;
            cursor: pointer;
        }

        .search-bar {
            position: relative;
        }

        .search-bar input[type="text"] {
            padding: 6px 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            width: 200px;
        }

        .search-results {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            max-height: 200px;
            overflow-y: auto;
            padding: 5px 0;
            z-index: 999;
        }

        .search-results ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .search-results li {
            padding: 8px 10px;
            cursor: pointer;
        }

        .search-results li:hover {
            background-color: #e5e5e5;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <header>
        <!-- Your existing header content -->

        <!-- Search icon with search bar -->
           <style>
        /* Basic styling for the search icon and search bar */
        .search-icon {
            position: relative;
            display: inline-block;
        }

        .fa-search {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .search-bar {
            position: relative;
            display: inline-block;
        }

        #search-input {
            padding-left: 25px;
        }

        /* Add any other necessary styling for your page layout */
    </style>
</head>
<body>



<input type="text" id="searchInput" placeholder="Search...">
<div id="searchResults"></div>

<script>
// Add an event listener to the search input
document.getElementById('searchInput').addEventListener('input', function() {
  const searchQuery = this.value;

  // Clear previous search results
  document.getElementById('searchResults').innerHTML = '';

  // Fetch data from the server
  fetch(`/search?q=${searchQuery}`)
    .then(response => response.json())
    .then(data => {
      const searchResults = document.getElementById('searchResults');

      // Display results in the dropdown
      data.forEach(item => {
        const link = document.createElement('a');
        link.href = item.product_link;
        link.textContent = item.product_name;

        searchResults.appendChild(link);
      });

      // Show the dropdown
      searchResults.style.display = 'block';
    });
});
</script>

</body>

</head>


       <form method="post" action="/cart/update" id="currency_form" accept-charset="UTF-8" class="shopify-currency-form" enctype="multipart/form-data"><input type="hidden" name="form_type" value="currency" /><input type="hidden" name="utf8" value="✓" /><input type="hidden" name="return_to" value="/pages/collection-doesnt-exist" />
    
  </form>
<a href="/cart" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble"><svg
  class="icon icon-cart-empty"
  aria-hidden="true"
  focusable="false"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 40 40"
  fill="none"
>
  <path d="m15.75 11.8h-3.16l-.77 11.6a5 5 0 0 0 4.99 5.34h7.38a5 5 0 0 0 4.99-5.33l-.78-11.61zm0 1h-2.22l-.71 10.67a4 4 0 0 0 3.99 4.27h7.38a4 4 0 0 0 4-4.27l-.72-10.67h-2.22v.63a4.75 4.75 0 1 1 -9.5 0zm8.5 0h-7.5v.63a3.75 3.75 0 1 0 7.5 0z" fill="currentColor" fill-rule="evenodd"/>
</svg>
<span class="visually-hidden">Cart</span></a>
    </div>
  </header>
</sticky-header>

<cart-notification>
  <div class="cart-notification-wrapper">
    <div
      id="cart-notification"
      class="cart-notification focus-inset color-background-1 gradient"
      aria-modal="true"
      aria-label="Item added to your cart"
      role="dialog"
      tabindex="-1"
    >
      <div class="cart-notification__header">
        <h2 class="cart-notification__heading caption-large text-body"><svg
  class="icon icon-checkmark"
  aria-hidden="true"
  focusable="false"
  xmlns="http://www.w3.org/2000/svg"
  viewBox="0 0 12 9"
  fill="none"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M11.35.643a.5.5 0 01.006.707l-6.77 6.886a.5.5 0 01-.719-.006L.638 4.845a.5.5 0 11.724-.69l2.872 3.011 6.41-6.517a.5.5 0 01.707-.006h-.001z" fill="currentColor"/>
</svg>
Item added to your cart
        </h2>
        <button
          type="button"
          class="cart-notification__close modal__close-button link link--text focus-inset"
          aria-label="Close"
        >
          <svg class="icon icon-close" aria-hidden="true" focusable="false">
            <use href="#icon-close">
          </svg>
        </button>
      </div>
      <div id="cart-notification-product" class="cart-notification-product"></div>
      <div class="cart-notification__links">
        <a
          href="/cart"
          id="cart-notification-button"
          class="button button--secondary button--full-width"
        >View cart</a>
        <form action="/cart" method="post" id="cart-notification-form">
          <button class="button button--primary button--full-width" name="checkout">
            Check out
          </button>
        </form>
        <button type="button" class="link button-label">Continue shopping</button>
      </div>
    </div>
  </div>
</cart-notification>
<style data-shopify>
  .cart-notification {
    display: none;
  }
</style>


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
      <div id="shopify-section-template--19917720912183__main" class="shopify-section section"><link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-card.css?v=153897544549437130131688782258" rel="stylesheet" type="text/css" media="all" />
<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/section-collection-list.css?v=70863279319435850561688782258" rel="stylesheet" type="text/css" media="all" />

<div class="page-width">
  <h1 class="title title--primary inline-richtext scroll-trigger animate--fade-in">
    Collections
  </h1><ul
      class="collection-list grid grid--3-col-desktop grid--2-col-tablet-down"
      role="list"
    ><li
          class="collection-list__item grid__item scroll-trigger animate--slide-in"
          
            data-cascade
            style="--animation-order: 1;"
          
        >
          
<div class="card-wrapper animate-arrow collection-card-wrapper">
  <div
    class="
      card
      card--standard
       card--media
      
      
      
    "
    style="--ratio-percent: 100%;"
  >
    <div
      class="card__inner color-background-1 gradient ratio"
      style="--ratio-percent: 100%;"
    ><div class="card__media">
          <div class="media media--transparent media--hover-effect">
            <img
              srcset="//58194a.myshopify.com/cdn/shop/collections/balenciaga1111.webp?v=1691330491&width=165 165w,//58194a.myshopify.com/cdn/shop/collections/balenciaga1111.webp?v=1691330491&width=330 330w,//58194a.myshopify.com/cdn/shop/collections/balenciaga1111.webp?v=1691330491&width=535 535w,//58194a.myshopify.com/cdn/shop/collections/balenciaga1111.webp?v=1691330491&width=750 750w,//58194a.myshopify.com/cdn/shop/collections/balenciaga1111.webp?v=1691330491&width=1000 1000w,//58194a.myshopify.com/cdn/shop/collections/balenciaga1111.webp?v=1691330491 1000w
              "
              src="//58194a.myshopify.com/cdn/shop/collections/balenciaga1111.webp?v=1691330491&width=1500"
              sizes="
                (min-width: 1100px) 333px,
                (min-width: 750px) calc((100vw - 10rem) / 2),
                calc(100vw - 3rem)
              "
              alt=""
              height="1335"
              width="1000"
              loading="lazy"
              class="motion-reduce"
            >
          </div>
        </div><div class="card__content">
          <div class="card__information">
            <h3 class="card__heading">
              <a
                
                  href="BALENCIAGACOLLECTTION.HTML"
                
                class="full-unstyled-link"
              >BALENCIAGA
              </a>
            </h3><p class="card__caption">BELENCIAGA COLLECTION<span class="icon-wrap">&nbsp;<svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
              </p></div>
        </div></div><div class="card__content">
        <div class="card__information">
          <h3 class="card__heading">
            <a
              
                href="BALENCIAGACOLLECTTION.HTML"
              
              class="full-unstyled-link"
            >BALENCIAGA<span class="icon-wrap"><svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
            </a>
          </h3></div>
      </div></div>
</div>

        </li><li
          class="collection-list__item grid__item scroll-trigger animate--slide-in"
          
            data-cascade
            style="--animation-order: 2;"
          
        >
          
<div class="card-wrapper animate-arrow collection-card-wrapper">
  <div
    class="
      card
      card--standard
       card--media
      
      
      
    "
    style="--ratio-percent: 100%;"
  >
    <div
      class="card__inner color-background-1 gradient ratio"
      style="--ratio-percent: 100%;"
    ><div class="card__media">
          <div class="media media--transparent media--hover-effect">
            <img
              srcset="//58194a.myshopify.com/cdn/shop/collections/cd.webp?v=1691330389&width=165 165w,//58194a.myshopify.com/cdn/shop/collections/cd.webp?v=1691330389&width=330 330w,//58194a.myshopify.com/cdn/shop/collections/cd.webp?v=1691330389&width=535 535w,//58194a.myshopify.com/cdn/shop/collections/cd.webp?v=1691330389&width=750 750w,//58194a.myshopify.com/cdn/shop/collections/cd.webp?v=1691330389&width=1000 1000w,//58194a.myshopify.com/cdn/shop/collections/cd.webp?v=1691330389 1000w
              "
              src="//58194a.myshopify.com/cdn/shop/collections/cd.webp?v=1691330389&width=1500"
              sizes="
                (min-width: 1100px) 333px,
                (min-width: 750px) calc((100vw - 10rem) / 2),
                calc(100vw - 3rem)
              "
              alt=""
              height="1335"
              width="1000"
              loading="lazy"
              class="motion-reduce"
            >
          </div>
        </div><div class="card__content">
          <div class="card__information">
            <h3 class="card__heading">
              <a
                
                  href="CHRISTIANDIORCOLLECTION.HTML"
                
                class="full-unstyled-link"
              >CHRISTIAN DIOR
              </a>
            </h3><p class="card__caption">CHRISTIAN DIOR COLLECTION<span class="icon-wrap">&nbsp;<svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
              </p></div>
        </div></div><div class="card__content">
        <div class="card__information">
          <h3 class="card__heading">
            <a
              
                href="CHRISTIANDIORCOLLECTION.HTML"
              
              class="full-unstyled-link"
            >CHRISTIAN DIOR<span class="icon-wrap"><svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
            </a>
          </h3></div>
      </div></div>
</div>

        </li><li
          class="collection-list__item grid__item scroll-trigger animate--slide-in"
          
            data-cascade
            style="--animation-order: 3;"
          
        >
          
<div class="card-wrapper animate-arrow collection-card-wrapper">
  <div
    class="
      card
      card--standard
       card--media
      
      
      
    "
    style="--ratio-percent: 100%;"
  >
    <div
      class="card__inner color-background-1 gradient ratio"
      style="--ratio-percent: 100%;"
    ><div class="card__media">
          <div class="media media--transparent media--hover-effect">
            <img
              srcset="//58194a.myshopify.com/cdn/shop/files/DOLCE_GABBANAAA1.webp?v=1688824998&width=165 165w,//58194a.myshopify.com/cdn/shop/files/DOLCE_GABBANAAA1.webp?v=1688824998&width=330 330w,//58194a.myshopify.com/cdn/shop/files/DOLCE_GABBANAAA1.webp?v=1688824998&width=535 535w,//58194a.myshopify.com/cdn/shop/files/DOLCE_GABBANAAA1.webp?v=1688824998&width=750 750w,//58194a.myshopify.com/cdn/shop/files/DOLCE_GABBANAAA1.webp?v=1688824998&width=1000 1000w,//58194a.myshopify.com/cdn/shop/files/DOLCE_GABBANAAA1.webp?v=1688824998 1000w
              "
              src="//58194a.myshopify.com/cdn/shop/files/DOLCE_GABBANAAA1.webp?v=1688824998&width=1500"
              sizes="
                (min-width: 1100px) 333px,
                (min-width: 750px) calc((100vw - 10rem) / 2),
                calc(100vw - 3rem)
              "
              alt=""
              height="1335"
              width="1000"
              loading="lazy"
              class="motion-reduce"
            >
          </div>
        </div><div class="card__content">
          <div class="card__information">
            <h3 class="card__heading">
              <a
                
                  href="DOLCE&GABBANACOLLECTION.HTML"
                
                class="full-unstyled-link"
              >DOLCE &amp; GABBANA
              </a>
            </h3><p class="card__caption">DOLCE &amp; GABBANA COLLECTION<span class="icon-wrap">&nbsp;<svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
              </p></div>
        </div></div><div class="card__content">
        <div class="card__information">
          <h3 class="card__heading">
            <a
              
                href="DOLCE&GABBANACOLLECTION.HTML"
              
              class="full-unstyled-link"
            >DOLCE &amp; GABBANA<span class="icon-wrap"><svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
            </a>
          </h3></div>
      </div></div>
</div>

        </li><li
          class="collection-list__item grid__item scroll-trigger animate--slide-in"
          
            data-cascade
            style="--animation-order: 4;"
          
        >
          
<div class="card-wrapper animate-arrow collection-card-wrapper">
  <div
    class="
      card
      card--standard
       card--media
      
      
      
    "
    style="--ratio-percent: 100%;"
  >
    <div
      class="card__inner color-background-1 gradient ratio"
      style="--ratio-percent: 100%;"
    ><div class="card__media">
          <div class="media media--transparent media--hover-effect">
            <img
              srcset="//58194a.myshopify.com/cdn/shop/files/SUPREME.webp?v=1688849481&width=165 165w,//58194a.myshopify.com/cdn/shop/files/SUPREME.webp?v=1688849481&width=330 330w,//58194a.myshopify.com/cdn/shop/files/SUPREME.webp?v=1688849481&width=535 535w,//58194a.myshopify.com/cdn/shop/files/SUPREME.webp?v=1688849481&width=750 750w,//58194a.myshopify.com/cdn/shop/files/SUPREME.webp?v=1688849481&width=1000 1000w,//58194a.myshopify.com/cdn/shop/files/SUPREME.webp?v=1688849481 1000w
              "
              src="//58194a.myshopify.com/cdn/shop/files/SUPREME.webp?v=1688849481&width=1500"
              sizes="
                (min-width: 1100px) 333px,
                (min-width: 750px) calc((100vw - 10rem) / 2),
                calc(100vw - 3rem)
              "
              alt=""
              height="1335"
              width="1000"
              loading="lazy"
              class="motion-reduce"
            >
          </div>
        </div><div class="card__content">
          <div class="card__information">
            <h3 class="card__heading">
              <a
                
                  href="GUCCICOLLECTION.HTML"
                
                class="full-unstyled-link"
              >GUCCI
              </a>
            </h3><p class="card__caption">GUCCI COLLECTION<span class="icon-wrap">&nbsp;<svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
              </p></div>
        </div></div><div class="card__content">
        <div class="card__information">
          <h3 class="card__heading">
            <a
              
                href="GUCCICOLLECTION.HTML"
              
              class="full-unstyled-link"
            >GUCCI<span class="icon-wrap"><svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
            </a>
          </h3></div>
      </div></div>
</div>

        </li><li
          class="collection-list__item grid__item scroll-trigger animate--slide-in"
          
            data-cascade
            style="--animation-order: 5;"
          
        >
          
<div class="card-wrapper animate-arrow collection-card-wrapper">
  <div
    class="
      card
      card--standard
       card--media
      
      
      
    "
    style="--ratio-percent: 100%;"
  >
    <div
      class="card__inner color-background-1 gradient ratio"
      style="--ratio-percent: 100%;"
    ><div class="card__media">
          <div class="media media--transparent media--hover-effect">
            <img
              srcset="//58194a.myshopify.com/cdn/shop/files/XASA.webp?v=1691370254&width=165 165w,//58194a.myshopify.com/cdn/shop/files/XASA.webp?v=1691370254&width=360 360w,//58194a.myshopify.com/cdn/shop/files/XASA.webp?v=1691370254&width=533 533w,//58194a.myshopify.com/cdn/shop/files/XASA.webp?v=1691370254&width=720 720w,//58194a.myshopify.com/cdn/shop/files/XASA.webp?v=1691370254&width=940 940w,//58194a.myshopify.com/cdn/shop/files/XASA.webp?v=1691370254&width=1066 1066w,//58194a.myshopify.com/cdn/shop/files/XASA.webp?v=1691370254 1500w
                "
              src="//58194a.myshopify.com/cdn/shop/files/YARBK.jpg?v=1688836973&width=1500"
              sizes="
                (min-width: 1100px) 333px,
                (min-width: 750px) calc((100vw - 10rem) / 2),
                calc(100vw - 3rem)
              "
              alt=""
              height="1333"
              width="1000"
              loading="lazy"
              class="motion-reduce"
            >
          </div>
        </div><div class="card__content">
          <div class="card__information">
            <h3 class="card__heading">
              <a
                
                  href="HERMESCOLLECTION.HTML"
                
                class="full-unstyled-link"
              >HERMES
              </a>
            </h3><p class="card__caption">Hermes Collection<span class="icon-wrap">&nbsp;<svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
              </p></div>
        </div></div><div class="card__content">
        <div class="card__information">
          <h3 class="card__heading">
            <a
              
                href="HERMESCOLLECTION.HTML"
              
              class="full-unstyled-link"
            >HERMES<span class="icon-wrap"><svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
            </a>
          </h3></div>
      </div></div>
</div>

        </li><li
          class="collection-list__item grid__item scroll-trigger animate--slide-in"
          
            data-cascade
            style="--animation-order: 6;"
          
        >
          
<div class="card-wrapper animate-arrow collection-card-wrapper">
  <div
    class="
      card
      card--standard
       card--media
      
      
      
    "
    style="--ratio-percent: 100%;"
  >
    <div
      class="card__inner color-background-1 gradient ratio"
      style="--ratio-percent: 100%;"
    ><div class="card__media">
          <div class="media media--transparent media--hover-effect">
            <img
              srcset="//58194a.myshopify.com/cdn/shop/files/CLOUDS.webp?v=1688850437&width=165 165w,//58194a.myshopify.com/cdn/shop/files/CLOUDS.webp?v=1688850437&width=330 330w,//58194a.myshopify.com/cdn/shop/files/CLOUDS.webp?v=1688850437&width=535 535w,//58194a.myshopify.com/cdn/shop/files/CLOUDS.webp?v=1688850437&width=750 750w,//58194a.myshopify.com/cdn/shop/files/CLOUDS.webp?v=1688850437&width=1000 1000w,//58194a.myshopify.com/cdn/shop/files/CLOUDS.webp?v=1688850437 1000w
              "
              src="//58194a.myshopify.com/cdn/shop/files/CLOUDS.webp?v=1688850437&width=1500"
              sizes="
                (min-width: 1100px) 333px,
                (min-width: 750px) calc((100vw - 10rem) / 2),
                calc(100vw - 3rem)
              "
              alt=""
              height="1334"
              width="1000"
              loading="lazy"
              class="motion-reduce"
            >
          </div>
        </div><div class="card__content">
          <div class="card__information">
            <h3 class="card__heading">
              <a
                
                  href="LOUISVUITTONCOLLECTION.HTML"
                
                class="full-unstyled-link"
              >LOUIS VUITTON
              </a>
            </h3><p class="card__caption">L.V COLLECTION<span class="icon-wrap">&nbsp;<svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
              </p></div>
        </div></div><div class="card__content">
        <div class="card__information">
          <h3 class="card__heading">
            <a
              
                href="LOUISVUITTONCOLLECTION.HTML"
              
              class="full-unstyled-link"
            >LOUIS VUITTON<span class="icon-wrap"><svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
            </a>
          </h3></div>
      </div></div>
</div>

        </li><li
          class="collection-list__item grid__item scroll-trigger animate--slide-in"
          
            data-cascade
            style="--animation-order: 7;"
          
        >
          
<div class="card-wrapper animate-arrow collection-card-wrapper">
  <div
    class="
      card
      card--standard
       card--media
      
      
      
    "
    style="--ratio-percent: 100%;"
  >
    <div
      class="card__inner color-background-1 gradient ratio"
      style="--ratio-percent: 100%;"
    ><div class="card__media">
          <div class="media media--transparent media--hover-effect">
            <img
              srcset="//58194a.myshopify.com/cdn/shop/files/PRADACRISTAL.webp?v=1688826792&width=165 165w,//58194a.myshopify.com/cdn/shop/files/PRADACRISTAL.webp?v=1688826792&width=330 330w,//58194a.myshopify.com/cdn/shop/files/PRADACRISTAL.webp?v=1688826792&width=535 535w,//58194a.myshopify.com/cdn/shop/files/PRADACRISTAL.webp?v=1688826792&width=750 750w,//58194a.myshopify.com/cdn/shop/files/PRADACRISTAL.webp?v=1688826792&width=1000 1000w,//58194a.myshopify.com/cdn/shop/files/PRADACRISTAL.webp?v=1688826792 1000w
              "
              src="//58194a.myshopify.com/cdn/shop/files/PRADACRISTAL.webp?v=1688826792&width=1500"
              sizes="
                (min-width: 1100px) 333px,
                (min-width: 750px) calc((100vw - 10rem) / 2),
                calc(100vw - 3rem)
              "
              alt=""
              height="1334"
              width="1000"
              loading="lazy"
              class="motion-reduce"
            >
          </div>
        </div><div class="card__content">
          <div class="card__information">
            <h3 class="card__heading">
              <a
                
                  href="PRADACOLLECTION.HTML"
                
                class="full-unstyled-link"
              >PRADA
              </a>
            </h3><p class="card__caption">PRADA COLLECTION<span class="icon-wrap">&nbsp;<svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
              </p></div>
        </div></div><div class="card__content">
        <div class="card__information">
          <h3 class="card__heading">
            <a
              
                href="PRADACOLLECTION.HTML"
              
              class="full-unstyled-link"
            >PRADA<span class="icon-wrap"><svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
            </a>
          </h3></div>
      </div></div>
</div>

        </li><li
          class="collection-list__item grid__item scroll-trigger animate--slide-in"
          
            data-cascade
            style="--animation-order: 8;"
          
        >
          
<div class="card-wrapper animate-arrow collection-card-wrapper">
  <div
    class="
      card
      card--standard
       card--media
      
      
      
    "
    style="--ratio-percent: 100%;"
  >
    <div
      class="card__inner color-background-1 gradient ratio"
      style="--ratio-percent: 100%;"
    ><div class="card__media">
          <div class="media media--transparent media--hover-effect">
            <img
              srcset="//58194a.myshopify.com/cdn/shop/files/raphia1.webp?v=1688830995&width=165 165w,//58194a.myshopify.com/cdn/shop/files/raphia1.webp?v=1688830995&width=330 330w,//58194a.myshopify.com/cdn/shop/files/raphia1.webp?v=1688830995&width=535 535w,//58194a.myshopify.com/cdn/shop/files/raphia1.webp?v=1688830995&width=750 750w,//58194a.myshopify.com/cdn/shop/files/raphia1.webp?v=1688830995&width=1000 1000w,//58194a.myshopify.com/cdn/shop/files/raphia1.webp?v=1688830995 1000w
              "
              src="//58194a.myshopify.com/cdn/shop/files/raphia1.webp?v=1688830995&width=1500"
              sizes="
                (min-width: 1100px) 333px,
                (min-width: 750px) calc((100vw - 10rem) / 2),
                calc(100vw - 3rem)
              "
              alt=""
              height="1334"
              width="1000"
              loading="lazy"
              class="motion-reduce"
            >
          </div>
        </div><div class="card__content">
          <div class="card__information">
            <h3 class="card__heading">
              <a
                
                  href="SAINTLAURENTCOLLECTION.HTML"
                
                class="full-unstyled-link"
              >SAINT LAURENT
              </a>
            </h3><p class="card__caption">SAINT LAURENT COLLECTION<span class="icon-wrap">&nbsp;<svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
              </p></div>
        </div></div><div class="card__content">
        <div class="card__information">
          <h3 class="card__heading">
            <a
              
                href="SAINTLAURENTCOLLECTION.HTML"
              
              class="full-unstyled-link"
            >SAINT LAURENT<span class="icon-wrap"><svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
            </a>
          </h3></div>
      </div></div>
</div>

        </li><li
          class="collection-list__item grid__item scroll-trigger animate--slide-in"
          
            data-cascade
            style="--animation-order: 9;"
          
        >
          
<div class="card-wrapper animate-arrow collection-card-wrapper">
  <div
    class="
      card
      card--standard
       card--media
      
      
      
    "
    style="--ratio-percent: 100%;"
  >
    <div
      class="card__inner color-background-1 gradient ratio"
      style="--ratio-percent: 100%;"
    ><div class="card__media">
          <div class="media media--transparent media--hover-effect">
            <img
              srcset="//58194a.myshopify.com/cdn/shop/files/LAMDEUSA.webp?v=1688849754&width=165 165w,//58194a.myshopify.com/cdn/shop/files/LAMDEUSA.webp?v=1688849754&width=330 330w,//58194a.myshopify.com/cdn/shop/files/LAMDEUSA.webp?v=1688849754&width=535 535w,//58194a.myshopify.com/cdn/shop/files/LAMDEUSA.webp?v=1688849754&width=750 750w,//58194a.myshopify.com/cdn/shop/files/LAMDEUSA.webp?v=1688849754&width=1000 1000w,//58194a.myshopify.com/cdn/shop/files/LAMDEUSA.webp?v=1688849754 1000w
              "
              src="//58194a.myshopify.com/cdn/shop/files/LAMDEUSA.webp?v=1688849754&width=1500"
              sizes="
                (min-width: 1100px) 333px,
                (min-width: 750px) calc((100vw - 10rem) / 2),
                calc(100vw - 3rem)
              "
              alt=""
              height="1334"
              width="1000"
              loading="lazy"
              class="motion-reduce"
            >
          </div>
        </div><div class="card__content">
          <div class="card__information">
            <h3 class="card__heading">
              <a
                
                  href="VERSACECOLLECTION.HTML"
                
                class="full-unstyled-link"
              >VERSACE
              </a>
            </h3><p class="card__caption">VERSACE COLLECTION<span class="icon-wrap">&nbsp;<svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
              </p></div>
        </div></div><div class="card__content">
        <div class="card__information">
          <h3 class="card__heading">
            <a
              
                href="VERSACECOLLECTION.HTML"
              
              class="full-unstyled-link"
            >VERSACE<span class="icon-wrap"><svg
  viewBox="0 0 14 10"
  fill="none"
  aria-hidden="true"
  focusable="false"
  class="icon icon-arrow"
  xmlns="http://www.w3.org/2000/svg"
>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
</svg>
</span>
            </a>
          </h3></div>
      </div></div>
</div>

        </li></ul>
    

<link href="//58194a.myshopify.com/cdn/shop/t/3/assets/component-pagination.css?v=136206814810731739951688782258" rel="stylesheet" type="text/css" media="all" />

</div>

</div>
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
                              href="aboutus.html"
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
                              href="privacy.html"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Privacy Policy
                            </a>
                          </li><li>
                            <a
                              href="refund.html"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Refund Policy
                            </a>
                          </li><li>
                            <a
                              href="shipping.html"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              Shipping Policy
                            </a>
                          </li><li>
                            <a
                              href="termsofservice.html"
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
                              href="index.html"
                              class="link link--text list-menu__item list-menu__item--link list-menu__item--active"
                            >
                              Home page
                            </a>
                          </li><li>
                            <a
                              href="viewallcollections.html"
                              class="link link--text list-menu__item list-menu__item--link"
                            >
                              All collections
                            </a>
                          </li><li>
                            <a
                              href="shopall.html"
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
    </script><script src="//58194a.myshopify.com/cdn/shop/t/3/assets/predictive-search.js?v=162273246065392412141688782258" defer="defer"></script><style>
 
a#cart-icon-bubble {
 
    display: none;
 
}
 
</style>
   

  </body>
</html>