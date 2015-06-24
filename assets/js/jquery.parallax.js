;(function ($, window, document) {

	'use strict';

	$.fn.parallax = function(options)
	{
		var defaults = {
			overflow: 0.2,
			children: '.parallax-item',
			motion: null,
			mouseport: $('body')
		},
		fEl = $('.wrap'),
		parallaxWallW = 0,
		parallaxWallH = 0,
		w = 0,
		h = 0,
		els = [],
		resize = function()
		{
			w = fEl.outerWidth();
			h = fEl.outerHeight();
			parallaxWallW = parseInt(w * defaults.overflow, 10);
			parallaxWallH = parseInt(h * defaults.overflow, 10);

			for(var i = 0, size = els.length; i < size; i++)
			{
				fullScreen(els[i], 0, 1);
				fullScreen(els[i].find(defaults.children), defaults.overflow, 2);
			}
		},
		fullScreen = function(el, percent, zindex)
		{
			var elw = parseInt(w + (w * percent || 0), 10),
			elh = parseInt(h + (h * percent || 0), 10);

			el.each(function(idx, _el){
				var __el = $(_el);

				__el.css({
					width: elw,
					height: elh,
					top: elh - h > 0 ? - parseInt((elh - h) / 2, 10) : 0,
					left: elw - w > 0 ? - parseInt((elw - w) / 2, 10) : 0,
					'z-index': zindex++ || 'auto'
				});
			});
		}, cx = 0, cy = 0, moveoperation = function(idx, _el)
		{
			$(_el).css({
				left: - parseInt((cx / w) * parallaxWallW * (defaults.motion && defaults.motion[idx] ? defaults.motion[idx].x : 1), 10),
				top: - parseInt((cy / h) * parallaxWallH * (defaults.motion && defaults.motion[idx] ? defaults.motion[idx].y : 1), 10)
			});
		}, mousemove = function(e)
		{
			cx = e.clientX;
			cy = e.clientY;

			for(var i = 0, size = els.length; i < size; i++)
				els[i].find(defaults.children).each( moveoperation );
		};

		$.extend(defaults, options);

		defaults.mouseport.bind('mousemove', mousemove);

		// create public methods
		$.fn.parallax.doResize = resize;

		// do funny things with all elements
		return this.each(function(idx, _el){
			var el = $(_el);
			els.push(el);
			resize();
		});
	};

})(jQuery, window, document);