$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
$( ".articleTitle" ).hover(
    function() {
        $( this ).css("opacity", "0");
        $( this).previous().css("opacity", "1");
    }, function() {
        $( this ).css("opacity", "0.6");
        $( this).previous().css("opacity", "0.8");
    }
);
/***********************************
Nav Accordion Plugin v1.1.2
************************************/
(function($){ $.fn.navAccordion = function(options, callback){ this.each(function(){  var settings = $.extend({ expandButtonText : "+", collapseButtonText: "-", selectedExpand: "true", selectedClass: "selected", multipleLevels: "true", buttonWidth: "20%", buttonPosition: "right", slideSpeed: "fast", parentElement: "li", childElement: "ul", headersOnly: false, headersOnlyCheck: false, delayLink: false, delayAmount: null }, options);  var container = this, multi = settings.multipleLevels ? '': ' > ' + settings.childElement + ' > ';  $(container) .addClass('accordion-nav');  $(multi + settings.parentElement, container).each(function(){ if ( ($(this).contents(settings.childElement).length > 0 && settings.headersOnlyCheck == false) || (!($('> a', this).attr('href')) && settings.headersOnlyCheck == true) ) { $(this).addClass('has-subnav') .css('position', 'relative') .find('>a') .css('margin-' + settings.buttonPosition, settings.buttonWidth);  $(' > ' + settings.childElement, this) .before('<span class="accordion-btn-wrap"><span class="accordion-btn accordion-collapsed">' + settings.expandButtonText + '</span><span class="accordion-btn accordion-expanded">' + settings.collapseButtonText + '</span></span>');  $('.accordion-btn-wrap', this) .css({ 'width': settings.buttonWidth, 'position': 'absolute', 'top': 0, 'text-align': 'center', 'cursor': 'pointer', 'display': 'inline-block' }) .css(settings.buttonPosition, 0); $('.accordion-btn ', this) .css({ 'display': 'inline-block', 'width': '100%' }); $('.accordion-expanded', this) .css('display', 'none'); }  if (!($('> a', this).attr('href')) || settings.headersOnly){ $(this) .addClass('accordion-header-only') .find('.accordion-btn-wrap') .css({ 'width': '100%', 'text-align': settings.buttonPosition }) .find('.accordion-btn ') .css({ 'width': settings.buttonWidth, 'text-align': 'center' }); }  if (settings.delayLink && !settings.headersOnly) { var currentThis = this, speed = settings.delayAmount != null ? settings.delayAmount : settings.slideSpeed; if (speed == "fast") { speed = 200; } else if (speed == "slow") { speed = 600; } $('> a', currentThis).on('click',function(e){ if (!$('> .accordion-btn-wrap', currentThis).hasClass("accordion-active")) { e.preventDefault(); var href = $(this).attr('href'); clickToggle($('> .accordion-btn-wrap', currentThis)); setTimeout(function(){ window.location = href; }, speed) } }) }  });  var selectedNavAccordion = $(settings.parentElement + '.' + settings.selectedClass + ' > .accordion-btn-wrap', container);  var buttonheightResize = debounce(function(){ buttonheight(); expandSelected(); }, 250); $(window).on('resize', buttonheightResize);  buttonheight();  expandSelected();  $(container).on('click', '.accordion-btn-wrap', function(e) { e.preventDefault(); clickToggle(this); });  if (typeof callback == "function") { callback(); }   function clickToggle(element) { var nextChild = $(element).next(settings.childElement), currentExpandBtn = $('.accordion-expanded', element), currentCollapseBtn = $('.accordion-collapsed', element), parentObj = $(element).closest(settings.parentElement); if (nextChild.is(':visible')) { nextChild .slideUp(settings.slideSpeed); $(element) .removeClass('accordion-active'); currentExpandBtn .css('display', 'none'); currentCollapseBtn .css('display', 'inline-block'); parentObj.add(parentObj.siblings('.active')).add(parentObj.find('.active')).removeClass('active'); } else { $(element).closest(settings.childElement).find('.accordion-active') .removeClass('accordion-active') .next(settings.childElement) .slideUp(settings.slideSpeed).prev() .find('.accordion-expanded') .css('display', 'none') .parent().find('.accordion-collapsed') .css('display', 'inline-block'); parentObj.add(parentObj.siblings('.active')).add(parentObj.find('.active')).removeClass('active'); $(element) .addClass('accordion-active'); nextChild .slideToggle(settings.slideSpeed); currentExpandBtn .css('display', 'inline-block'); currentCollapseBtn .css('display', 'none'); parentObj.addClass('active'); } }  function expandSelected(){ if(settings.selectedExpand){ if(!settings.headersOnlyCheck){ selectedNavAccordion.find('.accordion-expanded') .css('display', 'inline-block'); selectedNavAccordion.find('.accordion-collapsed') .css('display', 'none'); selectedNavAccordion.addClass('accordion-active') .next(settings.childElement) .css('display', 'block'); selectedNavAccordion.closest(settings.parentElement) .addClass('active'); } else { $(settings.parentElement + '.' + settings.selectedClass + ' > ' + settings.childElement, container) .css('display', 'block'); $(settings.parentElement + '.' + settings.selectedClass).addClass('active'); } } }  function buttonheight(){ $('.accordion-btn', container).each(function(){ $(settings.parentElement + '.has-subnav > ' + settings.childElement, container) .css('display', 'block');  var parentItem = $(this).closest(settings.parentElement), lineheight =  $('> a', parentItem).innerHeight(); $(this) .css({'line-height': lineheight + 'px', 'height': lineheight});  $(settings.parentElement + ((settings.headersOnlyCheck) ? ' ' : '.has-subnav > ') + settings.childElement, container) .css('display', 'none'); $('.accordion-expanded') .css('display', 'none'); $('.accordion-collapsed') .css('display', 'inline-block'); }) }  function debounce(func, wait, immediate) { var timeout; return function() { var context = this, args = arguments; var later = function() { timeout = null; if (!immediate) func.apply(context, args); }; var callNow = immediate && !timeout; clearTimeout(timeout); timeout = setTimeout(later, wait); if (callNow) func.apply(context, args); }; };   }); } })(jQuery);