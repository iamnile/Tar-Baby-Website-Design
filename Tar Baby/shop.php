<html>
<?php include 'head.php' ?>
	<body>
		<style type="text/css">
			body {
				background-image: url('Plain shea.jpg');
			}
		</style>
<?php include 'nav.php' ?>

	</div>
	<div class="jumbotron" style="background-color: transparent;"><h1 style="text-align: center;">Shop</h1></div>
	<!--<div class="col-md-4">		<script src="//www.powr.io/powr.js" external-type="html"></script> 
 <div class="powr-ecommerce" id="a412f06f_1506707924"></div></div>-->
	<div><div id='product-component-a1cdd4eaa14'></div>
<script type="text/javascript">
/*<![CDATA[*/

(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }

  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'tar-baby-hair-design.myshopify.com',
      apiKey: 'd59542e043f8008b4d42fd28367ecbe3',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: [472613781541],
        node: document.getElementById('product-component-a1cdd4eaa14'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "layout": "horizontal",
    "variantId": "all",
    "width": "100%",
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "variantTitle": false,
      "description": true,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "text-align": "left",
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0",
          "margin-bottom": "50px"
        }
      },
      "button": {
        "background-color": "#f40491",
        ":hover": {
          "background-color": "#dc0483"
        },
        ":focus": {
          "background-color": "#dc0483"
        },
        "font-weight": "normal"
      },
      "variantTitle": {
        "font-family": "Open Sans, sans-serif",
        "color": "#ffffff",
        "font-weight": "normal"
      },
      "title": {
        "font-size": "26px",
        "color": "#ffffff"
      },
      "description": {
        "color": "#ffffff",
        "font-family": "Open Sans, sans-serif",
        "font-weight": "normal",
        "font-size": "18px"
      },
      "price": {
        "font-family": "Open Sans, sans-serif",
        "font-size": "18px",
        "color": "#ffffff",
        "font-weight": "normal"
      },
      "compareAt": {
        "font-size": "15px",
        "font-family": "Open Sans, sans-serif",
        "font-weight": "normal",
        "color": "#ffffff"
      }
    },
    "googleFonts": [
      "Open Sans",
      "Open Sans",
      "Open Sans",
      "Open Sans"
    ]
  },
  "cart": {
    "contents": {
      "button": true
    },
    "styles": {
      "cart": {
        "background-color": "#f8f2d6"
      },
      "button": {
        "background-color": "#f40491",
        ":hover": {
          "background-color": "#dc0483"
        },
        ":focus": {
          "background-color": "#dc0483"
        },
        "font-weight": "normal"
      },
      "title": {
        "color": "#292929"
      },
      "footer": {
        "background-color": "#f8f2d6"
      },
      "header": {
        "color": "#292929"
      },
      "lineItems": {
        "color": "#292929"
      },
      "subtotalText": {
        "color": "#292929"
      },
      "subtotal": {
        "color": "#292929"
      },
      "notice": {
        "color": "#292929"
      },
      "currency": {
        "color": "#292929"
      },
      "close": {
        ":hover": {
          "color": "#292929"
        },
        "color": "#292929"
      },
      "emptyCart": {
        "color": "#292929"
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "variantTitle": false,
      "buttonWithQuantity": true,
      "button": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "background-color": "#f40491",
        ":hover": {
          "background-color": "#dc0483"
        },
        ":focus": {
          "background-color": "#dc0483"
        },
        "font-weight": "normal"
      },
      "variantTitle": {
        "font-family": "Open Sans, sans-serif",
        "font-weight": "normal"
      },
      "description": {
        "font-family": "Open Sans, sans-serif",
        "font-weight": "normal"
      },
      "price": {
        "font-family": "Open Sans, sans-serif",
        "font-weight": "normal"
      },
      "compareAt": {
        "font-family": "Open Sans, sans-serif",
        "font-weight": "normal"
      }
    },
    "googleFonts": [
      "Open Sans",
      "Open Sans",
      "Open Sans",
      "Open Sans"
    ]
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#f40491",
        ":hover": {
          "background-color": "#dc0483"
        },
        ":focus": {
          "background-color": "#dc0483"
        },
        "font-weight": "normal"
      },
      "count": {
        "color": "#ffffff",
        ":hover": {
          "color": "#ffffff"
        }
      },
      "iconPath": {
        "fill": "#ffffff"
      }
    }
  },
  "option": {
    "styles": {
      "label": {
        "font-family": "Open Sans, sans-serif"
      },
      "select": {
        "font-family": "Open Sans, sans-serif"
      }
    },
    "googleFonts": [
      "Open Sans",
      "Open Sans"
    ]
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  },
  "lineItem": {
    "styles": {
      "variantTitle": {
        "color": "#292929"
      },
      "title": {
        "color": "#292929"
      },
      "price": {
        "color": "#292929"
      },
      "quantity": {
        "color": "#292929"
      },
      "quantityIncrement": {
        "color": "#292929",
        "border-color": "#292929"
      },
      "quantityDecrement": {
        "color": "#292929",
        "border-color": "#292929"
      },
      "quantityInput": {
        "color": "#292929",
        "border-color": "#292929"
      }
    }
  }
}
      });
    });
  }
})();
/*]]>*/
</script></div>
	<!--<div class="col-md-4"></div>-->


 		<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
	</body>
</html>
