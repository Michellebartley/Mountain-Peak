!function(){var o=window.location,r=o.search;-1!==r.indexOf("wpforms_form_id=")&&(r=r.replace(/([&?]wpforms_form_id=[0-9]*$|wpforms_form_id=[0-9]*&|[?&]wpforms_form_id=[0-9]*(?=#))/,""),history.replaceState({},null,o.origin+o.pathname+r))}(),function(o){o(function(){o("div.wpforms-confirmation-scroll").length&&o("html,body").animate({scrollTop:o("div.wpforms-confirmation-scroll").offset().top-100},1e3)})}(jQuery);