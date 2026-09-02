	jQuery(window).load(function() {
	    if (!jQuery('body').hasClass('home')) {
	        jQuery('#main_title').delay(300).animate({ 'margin-top': '-105px' }, 800, "easeOutQuad");
	        jQuery('#LA').animate({ 'opacity': '1' }, 1000);
	        jQuery('#more1').delay(2500).animate({ 'opacity': '1' }, 1000);
	        setTimeout('mousein()');
	    }

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

		// ===== SCROLL REVEAL (Intersection Observer) =====
		// animsition の fade-in (1500ms) 完了後に初期化
		function initReveal() {
			var els = document.querySelectorAll('[data-reveal]');
			if (!els.length) return;

			// IntersectionObserver 非対応ブラウザ用フォールバック
			if (!('IntersectionObserver' in window)) {
				els.forEach(function(el) { el.classList.add('is-revealed'); });
				return;
			}

			var observer = new IntersectionObserver(function(entries) {
				entries.forEach(function(entry) {
					if (entry.isIntersecting) {
						var el = entry.target;
						var delay = parseInt(el.getAttribute('data-reveal-delay') || '0', 10);
						setTimeout(function() { el.classList.add('is-revealed'); }, delay);
						observer.unobserve(el);
					}
				});
			}, { threshold: 0.08, rootMargin: '0px 0px 0px 0px' });

			els.forEach(function(el) { observer.observe(el); });

			// 既にビューポート内にある要素を即時表示
			els.forEach(function(el) {
				var rect = el.getBoundingClientRect();
				if (rect.top < window.innerHeight && rect.bottom > 0) {
					var delay = parseInt(el.getAttribute('data-reveal-delay') || '0', 10);
					setTimeout(function() { el.classList.add('is-revealed'); }, delay);
				}
			});
		}

		// animsition の inDuration (1500ms) + 余裕を持って 1700ms 後に起動
		setTimeout(initReveal, 1700);

		// ===== REEL VIDEO =====
		// 縦動画は専用セクション内でのみ再生し、画面外では停止する。
		function initReelVideo() {
			var videos = document.querySelectorAll('[data-reel-video]');
			var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
			var eachVideo = function(callback) {
				var index;
				for (index = 0; index < videos.length; index++) {
					callback(videos[index]);
				}
			};
			var playVideo = function(video) {
				try {
					var playPromise = video.play();
					if (playPromise && typeof playPromise.catch === 'function') {
						playPromise.catch(function() {});
					}
				} catch (error) {}
			};
			var pauseVideo = function(video) {
				video.pause();
			};

			if (!videos.length) return;
			if (reduceMotion) {
				eachVideo(pauseVideo);
				return;
			}

			if (!('IntersectionObserver' in window)) {
				var updateVideoVisibility = function() {
					var viewportWidth = window.innerWidth || document.documentElement.clientWidth;
					var viewportHeight = window.innerHeight || document.documentElement.clientHeight;
					eachVideo(function(video) {
						var rect = video.getBoundingClientRect();
						var visibleWidth = Math.max(0, Math.min(rect.right, viewportWidth) - Math.max(rect.left, 0));
						var visibleHeight = Math.max(0, Math.min(rect.bottom, viewportHeight) - Math.max(rect.top, 0));
						var visibleRatio = rect.width && rect.height ? (visibleWidth * visibleHeight) / (rect.width * rect.height) : 0;
						if (visibleRatio >= 0.35) {
							playVideo(video);
						} else {
							pauseVideo(video);
						}
					});
				};

				window.addEventListener('scroll', updateVideoVisibility);
				window.addEventListener('resize', updateVideoVisibility);
				updateVideoVisibility();
				return;
			}

			var videoObserver = new IntersectionObserver(function(entries) {
				entries.forEach(function(entry) {
					if (entry.isIntersecting && entry.intersectionRatio >= 0.35) {
						playVideo(entry.target);
					} else {
						pauseVideo(entry.target);
					}
				});
			}, { threshold: 0.35 });

			eachVideo(function(video) { videoObserver.observe(video); });
		}
		initReelVideo();

		// ===== SEKAILABO' FRONT PAGE =====
		// Kept separate from the legacy interactions above so other templates retain
		// their existing behavior. The mobile navigation remains usable without JS.
		function initSekailaboHome() {
			var home = document.querySelector('.sl-home');
			if (!home) return;

			var revealItems = home.querySelectorAll('[data-sl-reveal]');
			var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
			var reveal = function(item) {
				var delay = parseInt(item.getAttribute('data-sl-delay') || '0', 10);
				if (delay && !reduceMotion) {
					item.style.transitionDelay = delay + 'ms';
				}
				item.classList.add('is-sl-revealed');
			};

			if (reduceMotion || !('IntersectionObserver' in window)) {
				revealItems.forEach(reveal);
			} else {
				home.classList.add('sl-motion-ready');
				var revealObserver = new IntersectionObserver(function(entries) {
					entries.forEach(function(entry) {
						if (entry.isIntersecting) {
							reveal(entry.target);
							revealObserver.unobserve(entry.target);
						}
					});
				}, { threshold: 0.12, rootMargin: '0px 0px -24px 0px' });
				revealItems.forEach(function(item) {
					revealObserver.observe(item);
					var rect = item.getBoundingClientRect();
					if (rect.top < window.innerHeight && rect.bottom > 0) {
						reveal(item);
					}
				});
			}

			var mobileNav = home.querySelector('.sl-mobile-nav');
			if (mobileNav) {
				mobileNav.querySelectorAll('a').forEach(function(link) {
					link.addEventListener('click', function() { mobileNav.removeAttribute('open'); });
				});
			}
		}
		initSekailaboHome();
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
