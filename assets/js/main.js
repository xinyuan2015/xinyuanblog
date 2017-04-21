if ($(document).ready(function() {
	function a() {
		"number" == typeof window.innerWidth ? b = window.innerWidth : document.documentElement && document.documentElement.clientWidth && (b = document.documentElement.clientWidth)
	}
	$(".navbar").click(function() {
		$("header nav").toggleClass("shownav")
	});
	var b = 0,
		c = $("#main"),
		d = $("#asidepart"),
		e = $(".closeaside"),
		f = $(".openaside");
	if ($(window).resize(function() {
		a(), b >= 1024 ? $("header nav").removeClass("shownav") : (c.removeClass("moveMain"), d.css("display", "block").removeClass("fadeOut"), f.css("display", "none"), window.cacman_var.post_toc_aside && $("#toc.toc-aside").css("display", "none"))
	}), e.click(function() {
		d.addClass("fadeOut").css("display", "none"), f.css("display", "block").addClass("fadeIn"), c.addClass("moveMain")
	}), f.click(function() {
		f.css("display", "none").removeClass("beforeFadeIn"), d.css("display", "block").removeClass("fadeOut").addClass("fadeIn"), c.removeClass("moveMain")
	}), $(window).scroll(function() {
		f.css("top", Math.max(80, 260 - $(this).scrollTop()))
	}), window.cacman_var.is_post) {
		var g = $(".article-content>iframe"),
			h = $(".article-content>embed"),
			i = $("#toc");
		$("article h2"), ah = $("article h2"), ta = $("#toc.toc-aside"), f = $(".openaside"), e = $(".closeaside"), g.length > 0 && g.wrap('<div class="video-container" />'), h.length > 0 && h.wrap('<div class="video-container" />'), 0 == ah.length ? i.css("display", "none") : (e.click(function() {
			ta.css("display", "block").addClass("fadeIn")
		}), f.click(function() {
			ta.css("display", "none")
		}), $(window).scroll(function() {
			ta.css("top", Math.max(140, 320 - $(this).scrollTop()))
		}))
	}
	if (window.cacman_var.post_page_photo) {
		var j = $(".share"),
			k = j.attr("data-url"),
			l = encodeURIComponent(k),
			m = j.attr("data-title"),
			n = j.attr("data-tsina"),
			o = (j.attr("description"), ['<a href="#" class="overlay" id="qrcode"></a>', '<div class="qrcode clearfix"><span>扫描二维码分享到微信朋友圈</span><a class="qrclose" href="#nothing"></a><strong>Loading...Please wait</strong><img id="qrcode-pic" data-src="http://s.jiathis.com/qrcode.php?url=' + l + '"/></div>', '<a href="https://www.facebook.com/sharer.php?u=' + l + '" class="article-share-facebook" target="_blank" title="Facebook"></a>', '<a href="https://twitter.com/intent/tweet?url=' + l + '" class="article-share-twitter" target="_blank" title="Twitter"></a>', '<a href="#qrcode" class="article-share-qrcode" title="微信"></a>', '<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=' + l + '" class="article-share-qqzone" target="_blank"></a>', '<a href="http://widget.renren.com/dialog/share?resourceUrl=' + l + "&srcUrl=" + l + "&title=" + m + '" class="article-share-renren" target="_blank" title="人人"></a>', '<a href="http://service.weibo.com/share/share.php?title=' + m + "&url=" + l + "&ralateUid=" + n + '&searchPic=true&style=number" class="article-share-weibo" target="_blank" title="微博"></a>', '<span title="Share to"></span>'].join(""));
		j.append(o), $(".article-share-qrcode").click(function() {
			var a = $("#qrcode-pic").attr("data-src");
			$("#qrcode-pic").attr("src", a), $("#qrcode-pic").load(function() {
				$(".qrcode strong").text(" ")
			})
		})
	}
	if (window.cacman_var.tags_categories) {
		var p = $(".archive-title a"),
			q = $(".all-list-box"),
			r = $(".archive-title a:first-of-type");
		q.load(r.attr("data-src").toString() + " #archive-page"), r.addClass("current"), p.each(function() {
			$(this).click(function() {
				var a = $(this).attr("data-src").toString() + " #archive-page";
				q.load(a), p.removeClass("current"), $(this).addClass("current")
			})
		})
	}
	window.cacman_var.post_page_photo_fancybox && ($(".article-content").each(function(a) {
		$(this).find("img").each(function() {
			if (!$(this).parent().hasClass("fancybox")) {
				var a = this.alt;
				a && $(this).after('<span class="caption"><i class="caption-alt-icon"></i> ' + a + "</span>"), $(this).wrap('<a href="' + this.src + '" title="' + a + '" class="fancybox"></a>')
			}
		}), $(this).find(".fancybox").each(function() {
			$(this).attr("rel", "article" + a)
		})
	}), $.fancybox && $(".fancybox").fancybox())
}), window.cacman_var.duoshuo_shortname) {
	var duoshuoQuery = {
		short_name: window.cacman_var.duoshuo_shortname
	};
	!
	function() {
		var a = document.createElement("script");
		a.type = "text/javascript", a.async = !0, a.src = "//static.duoshuo.com/embed.js", a.charset = "UTF-8", (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(a)
	}()
}!
function(a, b) {
	var c = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
	a.fn.imagesLoaded = function(d) {
		function e() {
			var b = a(l),
				c = a(m);
			h && (m.length ? h.reject(j, b, c) : h.resolve(j)), a.isFunction(d) && d.call(g, j, b, c)
		}
		function f(b, d) {
			b.src === c || -1 !== a.inArray(b, k) || (k.push(b), d ? m.push(b) : l.push(b), a.data(b, "imagesLoaded", {
				isBroken: d,
				src: b.src
			}), i && h.notifyWith(a(b), [d, j, a(l), a(m)]), j.length === k.length && (setTimeout(e), j.unbind(".imagesLoaded")))
		}
		var g = this,
			h = a.isFunction(a.Deferred) ? a.Deferred() : 0,
			i = a.isFunction(h.notify),
			j = g.find("img").add(g.filter("img")),
			k = [],
			l = [],
			m = [];
		return a.isPlainObject(d) && a.each(d, function(a, b) {
			"callback" === a ? d = b : h && h[a](b)
		}), j.length ? j.bind("load.imagesLoaded error.imagesLoaded", function(a) {
			f(a.target, "error" === a.type)
		}).each(function(d, e) {
			var g = e.src,
				h = a.data(e, "imagesLoaded");
			h && h.src === g ? f(e, h.isBroken) : e.complete && e.naturalWidth !== b ? f(e, 0 === e.naturalWidth || 0 === e.naturalHeight) : (e.readyState || e.complete) && (e.src = c, e.src = g)
		}) : e(), h ? h.promise(g) : g
	}
}(jQuery), function(a) {
	a(".entry").each(function(b) {
		a(this).find("img").each(function() {
			if (!a(this).hasClass("nofancybox")) {
				var c = this.alt;
				c && a(this).after('<span class="caption">' + c + "</span>"), a(this).wrap('<a href="' + this.src + '" title="' + c + '" class="fancybox" rel="gallery' + b + '" />')
			}
		})
	});
	var b = function(a, b, c) {
			var d = a.width();
			b.imagesLoaded(function() {
				var b = this[0],
					e = b.naturalWidth,
					f = b.naturalHeight;
				c(), this.animate({
					opacity: 1
				}, 500), a.animate({
					height: d * f / e
				}, 500)
			})
		};
	a(".gallery").each(function() {
		var c = a(this),
			d = 0,
			e = c.children(".photoset").children(),
			f = e.length,
			g = !0;
		b(c, e.eq(0), function() {
			g = !1
		}), c.on("click", ".prev", function() {
			if (!g) {
				var a = (d - 1) % f;
				g = !0, b(c, e.eq(a), function() {
					e.eq(d).animate({
						opacity: 0
					}, 500), g = !1, d = a
				})
			}
		}).on("click", ".next", function() {
			if (!g) {
				var a = (d + 1) % f;
				g = !0, b(c, e.eq(a), function() {
					e.eq(d).animate({
						opacity: 0
					}, 500), g = !1, d = a
				})
			}
		})
	});
	var c = 1e3,
		d = a("#totop"),
		e = 500;
	d.hide(), a(window).scroll(function() {
		var b = a(document).scrollTop();
		b > c ? a(d).stop().fadeTo(300, 1) : a(d).stop().fadeTo(300, 0)
	}), a(d).click(function() {
		return a("html, body").animate({
			scrollTop: 0
		}, e), !1
	})
}(jQuery);