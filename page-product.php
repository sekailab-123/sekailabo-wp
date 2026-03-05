<?php get_header(); ?>

<body class="form">
    <div class="animsition">
        <!--heddaer-スマホ------------------------------------------------------------->
        <div id="spGN">
            <div id="navibar">
                <ul id="navi12">
                    <li><a href="<?php echo home_url(); ?>" class="closd">TOP</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/#message" class="closd">MESSAGE</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/#service" class="closd">SERVICE</a>
                    </li>
                    <li><a href="<?php echo get_post_type_archive_link('topics'); ?>">TOPICS</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/#aboutUl" class="closd">ABOUT</a>
                    </li>
                </ul>
                <ul id="navi22" <li><a href="<?php echo home_url(); ?>/recruit">RECRUIT</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/company">COMPANY</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/contact/">CONTACT</a>
                    </li>
                </ul>
                <p>FOLLOW ME</p>
                <a href="https://www.facebook.com" target="_blank" id="fbbtn"><span>facebook</span></a>
                <a href="https://instagram.com/sekailabo" target="_blank" id="isbtn"><span>instagram</span></a>
            </div>
        </div>
        <!--heddaer-スマホ------------------------------------------------------------->
        <!--heddaer-PC---------------------------------------------------------------->

        <div id="pcGN">
            <a href="<?php echo home_url(); ?>">
                <h1><span>SEKAILABO.</span></h1>
            </a>
            <div id="naviBox">
                <ul id="navi1">
                    <li><a href="<?php echo home_url(); ?>/#messeage">MESSAGE</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/#service">SERVICE</a>
                    </li>
                    <li><a href="<?php echo get_post_type_archive_link('topics'); ?>">TOPICS</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/#aboutUl" class="closd">ABOUT</a>
                    </li>
                </ul>

                <ul id="navi2">
                    <li><a href="<?php echo home_url(); ?>/recruit">RECRUIT</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/company">COMPANY</a>
                    </li>
                    <li><a href="<?php echo home_url(); ?>/contact/">CONTACT</a>
                    </li>
                </ul>
                <p>FOLLOW ME</p>
                <a href="https://www.facebook.com" target="_blank" id="fbbtn"><span>facebook</span></a>
                <a href="https://www.instagram.com/sekailabo" target="_blank" id="isbtn"><span>instagram</span></a>
            </div>

            <!---heddaer-PC--------------------------------------------------------------->

            <div class="btnHamburger">
                <span class="line line_01"></span>
                <span class="line line_02"></span>
                <span class="line line_03"></span>
            </div>
        </div>

        <section class="p_inquirement">
            <div class="o_c_s-wrap__inner_1080">
                <div class="o_c_title__center">
                    <p class="o_c_title__en f_f-cardo">Shopify</p>
                    <p class="o_c_title__jp">オンラインストア</p>
                </div>
            </div>

            <div class="o_c_s-wrap__inner_860">
                <div id="mw_wp_form_mw-wp-form-82" class="mw_wp_form mw_wp_form_input  ">
                    <p class="o_c_f-inquirement__caution">この度は当店のオンラインストアにお越しいただき<br class="sp">誠にありがとうございます。</p>
                    <!-- shopify 埋め込み -->
                    <div id='collection-component-1646149078004'></div>
                    <script type="text/javascript">
                        /*<![CDATA[*/
                        (function() {
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
                                    domain: 'sekailabo.myshopify.com',
                                    storefrontAccessToken: '3d7d8edc545b44bad05217757acea89d',
                                });
                                ShopifyBuy.UI.onReady(client).then(function(ui) {
                                    ui.createComponent('collection', {
                                        id: '389082775808',
                                        node: document.getElementById('collection-component-1646149078004'),
                                        moneyFormat: '%C2%A5%7B%7Bamount_no_decimals%7D%7D',
                                        options: {
                                            "product": {
                                                "styles": {
                                                    "product": {
                                                        "@media (min-width: 601px)": {
                                                            "max-width": "calc(33.33333% - 30px)",
                                                            "margin-left": "30px",
                                                            "margin-bottom": "50px",
                                                            "width": "calc(33.33333% - 30px)"
                                                        },
                                                        "img": {
                                                            "height": "calc(100% - 15px)",
                                                            "position": "absolute",
                                                            "left": "0",
                                                            "right": "0",
                                                            "top": "0"
                                                        },
                                                        "imgWrapper": {
                                                            "padding-top": "calc(75% + 15px)",
                                                            "position": "relative",
                                                            "height": "0"
                                                        }
                                                    },
                                                    "button": {
                                                        "font-weight": "bold",
                                                        "font-size": "16px",
                                                        "padding-top": "16px",
                                                        "padding-bottom": "16px",
                                                        ":hover": {
                                                            "background-color": "#a44e4e"
                                                        },
                                                        "background-color": "#b65757",
                                                        ":focus": {
                                                            "background-color": "#a44e4e"
                                                        }
                                                    },
                                                    "quantityInput": {
                                                        "font-size": "16px",
                                                        "padding-top": "16px",
                                                        "padding-bottom": "16px"
                                                    },
                                                    "price": {
                                                        "font-weight": "bold",
                                                        "font-size": "20px",
                                                        "color": "#6c5b5b"
                                                    },
                                                    "compareAt": {
                                                        "font-weight": "bold",
                                                        "font-size": "17px",
                                                        "color": "#6c5b5b"
                                                    },
                                                    "unitPrice": {
                                                        "font-weight": "bold",
                                                        "font-size": "17px",
                                                        "color": "#6c5b5b"
                                                    }
                                                },
                                                "buttonDestination": "modal",
                                                "contents": {
                                                    "options": false
                                                },
                                                "text": {
                                                    "button": "詳細を見る"
                                                }
                                            },
                                            "productSet": {
                                                "styles": {
                                                    "products": {
                                                        "@media (min-width: 601px)": {
                                                            "margin-left": "-30px"
                                                        }
                                                    }
                                                }
                                            },
                                            "modalProduct": {
                                                "contents": {
                                                    "img": false,
                                                    "imgWithCarousel": true,
                                                    "button": false,
                                                    "buttonWithQuantity": true
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
                                                        "font-weight": "bold",
                                                        "font-size": "16px",
                                                        "padding-top": "16px",
                                                        "padding-bottom": "16px",
                                                        ":hover": {
                                                            "background-color": "#a44e4e"
                                                        },
                                                        "background-color": "#b65757",
                                                        ":focus": {
                                                            "background-color": "#a44e4e"
                                                        }
                                                    },
                                                    "quantityInput": {
                                                        "font-size": "16px",
                                                        "padding-top": "16px",
                                                        "padding-bottom": "16px"
                                                    },
                                                    "price": {
                                                        "font-family": "Helvetica Neue, sans-serif",
                                                        "font-weight": "normal",
                                                        "font-size": "18px",
                                                        "color": "#4c4c4c"
                                                    },
                                                    "compareAt": {
                                                        "font-family": "Helvetica Neue, sans-serif",
                                                        "font-weight": "normal",
                                                        "font-size": "15.299999999999999px",
                                                        "color": "#4c4c4c"
                                                    },
                                                    "unitPrice": {
                                                        "font-family": "Helvetica Neue, sans-serif",
                                                        "font-weight": "normal",
                                                        "font-size": "15.299999999999999px",
                                                        "color": "#4c4c4c"
                                                    }
                                                },
                                                "text": {
                                                    "button": "カートに入れる"
                                                }
                                            },
                                            "option": {},
                                            "cart": {
                                                "styles": {
                                                    "button": {
                                                        "font-weight": "bold",
                                                        "font-size": "16px",
                                                        "padding-top": "16px",
                                                        "padding-bottom": "16px",
                                                        ":hover": {
                                                            "background-color": "#a44e4e"
                                                        },
                                                        "background-color": "#b65757",
                                                        ":focus": {
                                                            "background-color": "#a44e4e"
                                                        }
                                                    }
                                                },
                                                "text": {
                                                    "title": "カート",
                                                    "total": "小計",
                                                    "empty": "カートには何も入っていません",
                                                    "notice": "",
                                                    "button": "購入する",
                                                    "noteDescription": "ご相談事項はこちらにご記入ください"
                                                },
                                                "contents": {
                                                    "note": true
                                                }
                                            },
                                            "toggle": {
                                                "styles": {
                                                    "toggle": {
                                                        "font-weight": "bold",
                                                        "background-color": "#b65757",
                                                        ":hover": {
                                                            "background-color": "#a44e4e"
                                                        },
                                                        ":focus": {
                                                            "background-color": "#a44e4e"
                                                        }
                                                    },
                                                    "count": {
                                                        "font-size": "16px"
                                                    }
                                                }
                                            }
                                        },
                                    });
                                });
                            }
                        })();
                        /*]]>*/
                    </script>
                    <!-- /shopify 埋め込み -->
                </div>
            </div>
        </section>
    </div>
    <p id="copyright">COPYRIGHT &copy; 2022- SEKAILABO.</p>
    </form>
    <!-- SCRIPTS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mb.YTPlayer.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/animsition.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/jquery.mb.YTPlayer.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/ui.js"></script>
    <script>
        //スマホ・タブレット（iOS・Android）の場合の処理を記述//
        if (!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) {
            //YTplaylerのjsのコードはこれだけ//
            jQuery('#js-mainvisualVideo').YTPlayer();
        }
    </script>
    <!-- //SCRIPTS -->
    </div>
    <?php wp_footer(); ?>
</body>

</html>