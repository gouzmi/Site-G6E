(function($) {
	var	aux		= {
			// navigates left / right
			navigate	: function( dir, $el, $wrapper1, opts, cache ) {

				var scroll		= opts.scroll,
					factor		= 1,
					idxClicked	= 0;

				if( cache.expanded ) {
					scroll		= 1; // scroll is always 1 in full mode
					factor		= 3; // the width of the expanded item will be 3 times bigger than 1 collapsed item
					idxClicked	= cache.idxClicked; // the index of the clicked item
				}

				// clone the elements on the right / left and append / prepend them according to dir and scroll
				if( dir === 1 ) {
					$wrapper1.find('div.ca-item1:lt(' + scroll + ')').each(function(i) {
						$(this).clone(true).css( 'left', ( cache.totalItems1 - idxClicked + i ) * cache.item1W * factor + 'px' ).appendTo( $wrapper1 );
					});
				}
				else {
					var $first	= $wrapper1.children().eq(0);

					$wrapper1.find('div.ca-item1:gt(' + ( cache.totalItems1  - 1 - scroll ) + ')').each(function(i) {
						// insert before $first so they stay in the right order
						$(this).clone(true).css( 'left', - ( scroll - i + idxClicked ) * cache.item1W * factor + 'px' ).insertBefore( $first );
					});
				}

				// animate the left of each item
				// the calculations are dependent on dir and on the cache.expanded value
				$wrapper1.find('div.ca-item1').each(function(i) {
					var $item1	= $(this);
					$item1.stop().animate({
						left	:  ( dir === 1 ) ? '-=' + ( cache.item1W * factor * scroll ) + 'px' : '+=' + ( cache.item1W * factor * scroll ) + 'px'
					}, opts.sliderSpeed, opts.sliderEasing, function() {
						if( ( dir === 1 && $item1.position().left < - idxClicked * cache.item1W * factor ) || ( dir === -1 && $item1.position().left > ( ( cache.totalItems - 1 - idxClicked ) * cache.itemW * factor ) ) ) {
							// remove the item that was cloned
							$item1.remove();
						}
						cache.isAnimating	= false;
					});
				});

			},
			// opens an item (animation) -> opens all the others
			openItem1	: function( $wrapper1, $item1, opts, cache ) {
				cache.idxClicked	= $item1.index();
				// the item's position (1, 2, or 3) on the viewport (the visible items)
				cache.winpos		= aux.getWinPos( $item1.position().left, cache );
				$wrapper1.find('div.ca-item1').not( $item1 ).hide();
				$item1.find('div.ca-content-wrapper1').css( 'left', cache.item1W + 'px' ).stop().animate({
					width	: cache.item1W * 2 + 'px',
					left	: cache.item1W + 'px'
				}, opts.item1Speed, opts.item1Easing)
				.end()
				.stop()
				.animate({
					left	: '0px'
				}, opts.item1Speed, opts.item1Easing, function() {
					cache.isAnimating	= false;
					cache.expanded		= true;

					aux.openItems1( $wrapper1, $item1, opts, cache );
				});

			},
			// opens all the items
			openItems1	: function( $wrapper1, $openedItem1, opts, cache ) {
				var openedIdx	= $openedItem1.index();

				$wrapper1.find('div.ca-item1').each(function(i) {
					var $item1	= $(this),
						idx		= $item1.index();

					if( idx !== openedIdx ) {
						$item1.css( 'left', - ( openedIdx - idx ) * ( cache.item1W * 3 ) + 'px' ).show().find('div.ca-content-wrapper1').css({
							left	: cache.item1W + 'px',
							width	: cache.item1W * 2 + 'px'
						});

						// hide more link
						aux.toggleMore( $item1, false );
					}
				});
			},

			// close all the items
			// the current one is animated
			closeItems1	: function( $wrapper1, $openedItem1, opts, cache ) {
				var openedIdx	= $openedItem1.index();

				$openedItem1.find('div.ca-content-wrapper1').stop().animate({
					width	: '0px'
				}, opts.item1Speed, opts.item1Easing)
				.end()
				.stop()
				.animate({
					left	: cache.item1W * ( cache.winpos - 1 ) + 'px'
				}, opts.item1Speed, opts.item1Easing, function() {
					cache.isAnimating	= false;
					cache.expanded		= false;
				});

				// show more link
				aux.toggleMore( $openedItem1, true );

				$wrapper1.find('div.ca-item1').each(function(i) {
					var $item1	= $(this),
						idx		= $item1.index();

					if( idx !== openedIdx ) {
						$item1.find('div.ca-content-wrapper1').css({
							width	: '0px'
						})
						.end()
						.css( 'left', ( ( cache.winpos - 1 ) - ( openedIdx - idx ) ) * cache.item1W + 'px' )
						.show();

						// show more link
						aux.toggleMore( $item1, true );
					}
				});
			},
			// gets the item's position (1, 2, or 3) on the viewport (the visible items)
			// val is the left of the item
			getWinPos	: function( val, cache ) {
				switch( val ) {
					case 0 					: return 1; break;
					case cache.item1W 		: return 2; break;
					case cache.item1W * 2 	: return 3; break;
				}
			}
		},
		methods = {
			init 		: function( options ) {

				if( this.length ) {

					var settings = {
						sliderSpeed		: 500,			// speed for the sliding animation
						sliderEasing	: 'easeOutExpo',// easing for the sliding animation
						item1Speed		: 500,			// speed for the item animation (open / close)
						item1Easing		: 'easeOutExpo',// easing for the item animation (open / close)
						scroll			: 1				// number of items to scroll at a time
					};

					return this.each(function() {

						// if options exist, lets merge them with our default settings
						if ( options ) {
							$.extend( settings, options );
						}

						var $el 			= $(this),
							$wrapper1		= $el.find('div.ca-wrapper1'),
							$items1			= $wrapper1.children('div.ca-item1'),
							cache			= {};

						// save the with of one item
						cache.item1W			= $items1.width();
						// save the number of total items
						cache.totalItems1	= $items1.length;

						// add navigation buttons
						if( cache.totalItems1 > 3 )
							$el.prepend('<div class="ca-nav1"><span class="ca-nav-prev">Previous</span><span class="ca-nav-next">Next</span></div>')

						// control the scroll value
						if( settings.scroll < 1 )
							settings.scroll = 1;
						else if( settings.scroll > 3 )
							settings.scroll = 3;

						var $navPrev		= $el.find('span.ca-nav-prev'),
							$navNext		= $el.find('span.ca-nav-next');

						// hide the items except the first 3
						$wrapper1.css( 'overflow', 'hidden' );

						// the items will have position absolute
						// calculate the left of each item
						$items1.each(function(i) {
							$(this).css({
								position	: 'absolute',
								left		: i * cache.item1W + 'px'
							});
						});

						// navigate left
						$navPrev.bind('click.contentcarousel1', function( event ) {
							if( cache.isAnimating ) return false;
							cache.isAnimating	= true;
							aux.navigate( -1, $el, $wrapper1, settings, cache );
						});

						// navigate right
						$navNext.bind('click.contentcarousel1', function( event ) {
							if( cache.isAnimating ) return false;
							cache.isAnimating	= true;
							aux.navigate( 1, $el, $wrapper1, settings, cache );
						});

						// adds events to the mouse
						$el.bind('mousewheel.contentcarousel1', function(e, delta) {
							if(delta > 0) {
								if( cache.isAnimating ) return false;
								cache.isAnimating	= true;
								aux.navigate( -1, $el, $wrapper1, settings, cache );
							}
							else {
								if( cache.isAnimating ) return false;
								cache.isAnimating	= true;
								aux.navigate( 1, $el, $wrapper1, settings, cache );
							}
							return false;
						});

					});
				}
			}
		};

	$.fn.contentcarousel1 = function(method) {
		if ( methods[method] ) {
			return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
		} else if ( typeof method === 'object' || ! method ) {
			return methods.init.apply( this, arguments );
		} else {
			$.error( 'Method ' +  method + ' does not exist on jQuery.contentcarousel1' );
		}
	};

})(jQuery);
