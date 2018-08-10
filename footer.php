<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>

			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>

		<!-- <script>

			(function(factory){var jQuery;if(typeof define==='function'&&define.amd){define(['jquery'],factory);}else if(typeof exports==='object'){try{jQuery=require('jquery');}catch(e){}
			module.exports=factory(jQuery);}else{var _OldCookies=window.Cookies;var api=window.Cookies=factory(window.jQuery);api.noConflict=function(){window.Cookies=_OldCookies;return api;};}}(function($){var pluses=/\+/g;function encode(s){return api.raw?s:encodeURIComponent(s);}
			function decode(s){return api.raw?s:decodeURIComponent(s);}
			function stringifyCookieValue(value){return encode(api.json?JSON.stringify(value):String(value));}
			function parseCookieValue(s){if(s.indexOf('"')===0){s=s.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,'\\');}
			try{s=decodeURIComponent(s.replace(pluses,' '));return api.json?JSON.parse(s):s;}catch(e){}}
			function read(s,converter){var value=api.raw?s:parseCookieValue(s);return isFunction(converter)?converter(value):value;}
			function extend(){var key,options;var i=0;var result={};for(;i<arguments.length;i++){options=arguments[i];for(key in options){result[key]=options[key];}}
			return result;}
			function isFunction(obj){return Object.prototype.toString.call(obj)==='[object Function]';}
			var api=function(key,value,options){if(arguments.length>1&&!isFunction(value)){options=extend(api.defaults,options);if(typeof options.expires==='number'){var days=options.expires,t=options.expires=new Date();t.setMilliseconds(t.getMilliseconds()+days*864e+5);}
			return(document.cookie=[encode(key),'=',stringifyCookieValue(value),options.expires?'; expires='+options.expires.toUTCString():'',options.path?'; path='+options.path:'',options.domain?'; domain='+options.domain:'',options.secure?'; secure':''].join(''));}
			var result=key?undefined:{},cookies=document.cookie?document.cookie.split('; '):[],i=0,l=cookies.length;for(;i<l;i++){var parts=cookies[i].split('='),name=decode(parts.shift()),cookie=parts.join('=');if(key===name){result=read(cookie,value);break;}
			if(!key&&(cookie=read(cookie))!==undefined){result[name]=cookie;}}
			return result;};api.get=api.set=api;api.defaults={};api.remove=function(key,options){api(key,'',extend(options,{expires:-1}));return!api(key);};if($){$.cookie=api;$.removeCookie=api.remove;}
			return api;}));

			jQuery(function($) {
				$(document).ready(function() {
					/*!
					* Simple Age Verification (https://github.com/Herudea/age-verification))
					*/
					var modal_content, modal_screen;
					$(document).ready(function() {
						av_legality_check();
					});
					av_legality_check = function() {
						if ($.cookie('is_legal') == "yes") {} else {
							av_showmodal();
							$(window).on('resize', av_positionPrompt);
						}
					};
					av_showmodal = function() {
						modal_screen = $('<div id="modal_screen" class="age_gate"></div>');
						modal_content = $('<div id="modal_content" style="display:none"></div>');
						var modal_content_wrapper = $('<div id="modal_content_wrapper" class="content_wrapper bubbles" style="background: url(<?php echo IMG_PATH; ?>/md_agegate_bubbles.png" />);"></div>');
						var modal_regret_wrapper = $('<div id="modal_regret_wrapper" class="content_wrapper" style="display:none;"></div>');
						var content_agegate = $(
							`
								<img class="agegate-cans padding-xsmall" src="<?php echo IMG_PATH; ?>/agegate-logo.png" />
								<h1 class="text-center padding-small">Are you 21 or older?</h1>
								<div class="agree"><input type="checkbox" id="agree" class="btn-default" required></input></a>I agree to the <a data-fancybox data-type="iframe" data-src="terms-of-service.html" href="javascript:;">Terms of Service and Privacy Policy</a></div>
								<nav class="padding-small"><ul><li><a href="#" class="av_btn btn-default" rel="yes" id="yes">Yes</a></li><li><a href="#" class="av_btn btn-default" rel="no" id="no">No</a></li></nav>	
								
							`
						);
						var regret_text = $('<h2>You must be 21 years of age or older to view this site.</h2>');
						modal_content_wrapper.append(content_agegate);
						modal_regret_wrapper.append(regret_text);
						modal_content.append(modal_content_wrapper, modal_regret_wrapper);
						$('body').append(modal_screen, modal_content);
						av_positionPrompt();
						modal_content.find('a.av_btn').on('click', av_setCookie);
					};
					av_setCookie = function(e) {
						e.preventDefault();
						var is_legal = $(e.currentTarget).attr('rel');
						$.cookie('is_legal', is_legal, {
							expires: 30,
							path: '/'
						});
						if($("#agree").is(':checked') && (is_legal == "yes" )) {
							av_closeModal();
							$(window).off('resize'); 
						} else if (is_legal == "no") {
							av_showRegret();
						} else if (!$("#agree").is(':checked')) {
							alert('You must agree to the terms of service.');
						} else if (is_legal == "no") {
							av_showRegret();
						}
					};
					av_closeModal = function() {
						modal_content.fadeOut();
						modal_screen.fadeOut();
					};
					av_showRegret = function() {
						modal_screen.addClass('nope');
						modal_content.find('#modal_content_wrapper').hide();
						modal_content.find('#modal_regret_wrapper').show();
					};
					av_positionPrompt = function() {
						var top = ($(window).outerHeight() - $('#modal_content').outerHeight()) / 2;
						var left = ($(window).outerWidth() - $('#modal_content').outerWidth()) / 2;
						modal_content.css({
							'top': top,
							'left': left
						});
						if (modal_content.is(':hidden') && ($.cookie('is_legal') != "yes")) {
							modal_content.fadeIn('slow');
						}
					};
				});
			});
			jQuery(function($) {
				$(document).ready(function() {
					$('#modal_regret_wrapper').on('click', function() {
						$(this).hide();
						$('#modal_content_wrapper').show();
					});
				});
			});

		</script> -->
	</body>
	
</html> <!-- end page -->