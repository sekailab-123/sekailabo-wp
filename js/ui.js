	jQuery(window).load(function() {
	    jQuery('#main_title').delay(300).animate({ 'margin-top': '-105px' }, 800, "easeOutQuad");
	    jQuery('#LA').animate({ 'opacity': '1' }, 1000);
	    jQuery('#more1').delay(2500).animate({ 'opacity': '1' }, 1000);
	    setTimeout('mousein()');

	    jQuery('#more1').click(function() {
	        if (jQuery('#main_title').css('height') == '210px') {
	            jQuery('#main_title').animate({ 'height': '500px', 'margin-top': '-250px' }, 800, "easeOutQuad");
	            jQuery('#main_title p').delay(1000).animate({ 'opacity': '1' }, 500, "easeOutQuad");
	            jQuery(this).html("CLOSE");
	            return false;
	        } else {
	            jQuery('#main_title p').animate({ 'opacity': '0' }, 500, "easeOutQuad");
	            jQuery('#main_title').delay(500).animate({ 'height': '210px', 'margin-top': '-105px' }, 800, "easeOutQuad");
	            jQuery(this).html("VIEW MORE");
	            return false;
	        }
	    });
	});

	function mousein() {
	    jQuery('#mouse').not(":animated").animate({ 'bottom': '30px' }, 800).animate({ 'bottom': '40px' }, 100);
	    setTimeout('mousein()', 2000); //アニメーションを繰り返す間隔
	}

	jQuery(function() {

	    //	jQuery('document').ready(function() {
	    //		var options = { videoId: 'WX-ol27PiOc', mute: false};
	    //		var agent = navigator.userAgent;
	    //		if(agent.search(/iPhone/) != -1 || agent.search(/iPod/) != -1 || agent.search(/Android/) != -1){
	    //
	    //		} else {
	    //		jQuery('#topMain').tubular(options);
	    //		}
	    //	});

	    var h = jQuery(window).height();
	    var ww = jQuery(window).width();
	    jQuery('#mainvisual').css({ 'height': h + 'px' });
	    jQuery('#spGN').css({ 'height': h + 'px' });


	    jQuery('.btnHamburger').click(function() {
	        if (jQuery('.btnHamburger').hasClass('is-active')) {
	            jQuery('#spGN').fadeOut(300);
	        } else {
	            jQuery('#spGN').not(":animated").fadeIn(300);
	        }
	    });

	    jQuery('.closd').click(function() {
	        jQuery('#spGN').fadeOut(300);
	        jQuery('.btnHamburger').toggleClass('is-active');
	    });

	    //サービス内容紹介 挙動
	    jQuery('#s1').hover(
	        function() {
	            jQuery(this).not(":animated").animate({ 'background-color': 'rgba(232,232,232,1)' }, 300);
	            jQuery('#s1 h3').not(":animated").animate({ 'bottom': '40px' }, 200, "easeOutQuad");
	            jQuery('.sImg1').not(":animated").fadeOut(100);
	            jQuery('#s1 h4').not(":animated").fadeIn(300);
	            jQuery('#s1 h5').not(":animated").fadeIn(300);
	            jQuery('#s1 p').not(":animated").fadeIn(300);
	        },
	        function() {
	            jQuery(this).animate({ 'background-color': 'rgba(255,255,255,0.5)' }, 300);
	            jQuery('#s1 h3').animate({ 'bottom': '80px' }, 200, "easeOutQuad");
	            jQuery('.sImg1').fadeIn(300);
	            jQuery('#s1 h4').fadeOut(100);
	            jQuery('#s1 h5').fadeOut(100);
	            jQuery('#s1 p').fadeOut(100);
	        }
	    );
	    jQuery('#s2').hover(
	        function() {
	            jQuery(this).not(":animated").animate({ 'background-color': 'rgba(232,232,232,1)' }, 300);
	            jQuery('#s2 h3').not(":animated").animate({ 'bottom': '40px' }, 200, "easeOutQuad");
	            jQuery('.sImg2').not(":animated").fadeOut(100);
	            jQuery('#s2 h4').not(":animated").fadeIn(300);
	            jQuery('#s2 h5').not(":animated").fadeIn(300);
	            jQuery('#s2 p').not(":animated").fadeIn(300);
	        },
	        function() {
	            jQuery(this).animate({ 'background-color': 'rgba(255,255,255,0.5)' }, 300);
	            jQuery('#s2 h3').animate({ 'bottom': '80px' }, 200, "easeOutQuad");
	            jQuery('.sImg2').fadeIn(300);
	            jQuery('#s2 h4').fadeOut(100);
	            jQuery('#s2 h5').fadeOut(100);
	            jQuery('#s2 p').fadeOut(100);
	        }
	    );
	    jQuery('#s3').hover(
	        function() {
	            jQuery(this).not(":animated").animate({ 'background-color': 'rgba(232,232,232,1)' }, 300);
	            jQuery('#s3 h3').not(":animated").animate({ 'bottom': '40px' }, 200, "easeOutQuad");
	            jQuery('.sImg3').not(":animated").fadeOut(100);
	            jQuery('#s3 h4').not(":animated").fadeIn(300);
	            jQuery('#s3 h5').not(":animated").fadeIn(300);
	            jQuery('#s3 p').not(":animated").fadeIn(300);
	        },
	        function() {
	            jQuery(this).animate({ 'background-color': 'rgba(255,255,255,0.5)' }, 300);
	            jQuery('#s3 h3').animate({ 'bottom': '80px' }, 200, "easeOutQuad");
	            jQuery('.sImg3').fadeIn(300);
	            jQuery('#s3 h4').fadeOut(100);
	            jQuery('#s3 h5').fadeOut(100);
	            jQuery('#s3 p').fadeOut(100);
	        }
	    );

	    //メディア&ショップ紹介 挙動
	    jQuery('#mL1').hover(
	        function() {
	            jQuery(this).not(":animated").animate({ 'background-size': '110%' }, 200, "easeOutQuad");
	            jQuery('#mBox1').not(":animated").animate({ 'opacity': '1' }, 300);
	        },
	        function() {
	            jQuery(this).animate({ 'background-size': '100%' }, 200, "easeOutQuad");
	            jQuery('#mBox1').animate({ 'opacity': '0' }, 300);
	        }
	    );
	    jQuery('#mL2').hover(
	        function() {
	            jQuery(this).not(":animated").animate({ 'background-size': '110%' }, 200, "easeOutQuad");
	            jQuery('#mBox2').not(":animated").fadeIn(300);
	        },
	        function() {
	            jQuery(this).animate({ 'background-size': '100%' }, 200, "easeOutQuad");
	            jQuery('#mBox2').fadeOut(300);
	        }
	    );
	    jQuery('#mL3').hover(
	        function() {
	            jQuery(this).not(":animated").animate({ 'background-size': '110%' }, 200, "easeOutQuad");
	            jQuery('#mBox3').not(":animated").fadeIn(300);
	        },
	        function() {
	            jQuery(this).animate({ 'background-size': '100%' }, 200, "easeOutQuad");
	            jQuery('#mBox3').fadeOut(300);
	        }
	    );
	    jQuery('#spL1').hover(
	        function() {
	            jQuery(this).not(":animated").animate({ 'background-size': '110%' }, 200, "easeOutQuad");
	            jQuery('#spBox1').not(":animated").fadeIn(300);
	        },
	        function() {
	            jQuery(this).animate({ 'background-size': '100%' }, 200, "easeOutQuad");
	            jQuery('#spBox1').fadeOut(300);
	        }
	    );
	    jQuery('#spL2').hover(
	        function() {
	            jQuery(this).not(":animated").animate({ 'background-size': '110%' }, 200, "easeOutQuad");
	            jQuery('#spBox2').not(":animated").fadeIn(300);
	        },
	        function() {
	            jQuery(this).animate({ 'background-size': '100%' }, 200, "easeOutQuad");
	            jQuery('#spBox2').fadeOut(300);
	        }
	    );

	    //マウス誘導
	    jQuery(window).scroll(function() {
	        if (jQuery(this).scrollTop() > 200) {
	            jQuery('#mouse').fadeOut(100);
	        }
	    });

	    //
	    //var topBtn=jQuery('#toTop');
	    //jQuery(window).scroll(function(){
	    //	if(jQuery(this).scrollTop()>300){
	    //		topBtn.stop().animate({'bottom':'40px'}, 200);
	    //	}else{
	    //		topBtn.stop().animate({'bottom':'-100px'}, 200);
	    //	} 
	    //});


	    var pagetop = jQuery('.gotop');
	    pagetop.click(function() {
	        jQuery("html,body").animate({ scrollTop: 0 }, 500);
	        return false;
	    });


	    jQuery('.btnHamburger').on('click', function() {　 //.btnHamburgerがクリックされた時の処理
	        jQuery(this).toggleClass('is-active');　 //.is-activeを付ける・外す
	    });

	    //ページ内リンクのスクロール
	    jQuery('a[href^=#]').click(function() {
	        var speed = 600;
	        var href = jQuery(this).attr("href");
	        var target = jQuery(href == "#" || href == "" ? 'html' : href);
	        var position = target.offset().top - 100;
	        jQuery("html, body").not(":animated").animate({ scrollTop: position }, speed, "swing");
	        return false;
	    });

	    //ページ内リンクのスクロール
	    jQuery('a[href^=/#]').click(function() {
	        var speed = 600;
	        var href = jQuery(this).attr("href");
	        var target = jQuery(href == "#" || href == "" ? 'html' : href);
	        var position = target.offset().top - 100;
	        jQuery("html, body").not(":animated").animate({ scrollTop: position }, speed, "swing");
	        return false;
	    });

	});

	jQuery(window).on('load', function() {
	    var url = jQuery(location).attr('href');
	    if (url.indexOf("?id=") != -1) {
	        var id = url.split("?id=");
	        var jQuerytarget = jQuery('#' + id[id.length - 1]);
	        if (jQuerytarget.length) {
	            var pos = jQuerytarget.offset().top - 100;
	            jQuery("html, body").animate({ scrollTop: pos }, 0);
	            return false;
	        }
	    }
	});

	jQuery(document).ready(function() {
	    jQuery(".animsition").animsition({
	        inClass: 'fade-in',
	        outClass: 'fade-out',
	        inDuration: 1500,
	        outDuration: 800,
	        linkElement: '.animsition-link',
	        // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
	        loading: true,
	        loadingParentElement: 'body', //animsition wrapper element
	        loadingClass: 'animsition-loading',
	        loadingInner: '', // e.g '<img src="loading.svg" />'
	        timeout: false,
	        timeoutCountdown: 5000,
	        onLoadEvent: true,
	        browser: ['animation-duration', '-webkit-animation-duration'],
	        // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
	        // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
	        overlay: false,
	        overlayClass: 'animsition-overlay-slide',
	        overlayParentElement: 'body',
	        transition: function(url) { window.location.href = url; }
	    });
	});