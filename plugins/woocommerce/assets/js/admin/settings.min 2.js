!function(n,c,s){n(function(){n("select#woocommerce_allowed_countries").on("change",function(){"specific"===n(this).val()?(n(this).closest("tr").next("tr").hide(),n(this).closest("tr").next().next("tr").show()):("all_except"===n(this).val()?n(this).closest("tr").next("tr").show():n(this).closest("tr").next("tr").hide(),n(this).closest("tr").next().next("tr").hide())}).trigger("change"),n("select#woocommerce_ship_to_countries").on("change",function(){"specific"===n(this).val()?n(this).closest("tr").next("tr").show():n(this).closest("tr").next("tr").hide()}).trigger("change"),n("input#woocommerce_manage_stock").on("change",function(){n(this).is(":checked")?n(this).closest("tbody").find(".manage_stock_field").closest("tr").show():n(this).closest("tbody").find(".manage_stock_field").closest("tr").hide()}).trigger("change"),n(".colorpick").iris({change:function(e,t){n(this).parent().find(".colorpickpreview").css({backgroundColor:t.color.toString()})},hide:!0,border:!0}).on("click focus",function(e){e.stopPropagation(),n(".iris-picker").hide(),n(this).closest("td").find(".iris-picker").show(),n(this).data("originalValue",n(this).val())}).on("change",function(){n(this).is(".iris-error")&&(n(this).data("originalValue").match(/^\#([a-fA-F0-9]{6}|[a-fA-F0-9]{3})$/)?n(this).val(n(this).data("originalValue")):n(this).val("")).trigger("change")}),n("body").on("click",function(){n(".iris-picker").hide()}),n(function(){var e=!1;n("input, textarea, select, checkbox").on("change",function(){e||(window.onbeforeunload=function(){return c.i18n_nav_warning},e=!0)}),n(".submit :input").on("click",function(){window.onbeforeunload=""})}),n("table.wc_gateways tbody, table.wc_shipping tbody").sortable({items:"tr",cursor:"move",axis:"y",handle:"td.sort",scrollSensitivity:40,helper:function(e,t){return t.children().each(function(){n(this).width(n(this).width())}),t.css("left","0"),t},start:function(e,t){t.item.css("background-color","#f6f6f6")},stop:function(e,t){t.item.removeAttr("style"),t.item.trigger("updateMoveButtons")}}),n(".woocommerce").on("click",".select_all",function(){return n(this).closest("td").find("select option").prop("selected",!0),n(this).closest("td").find("select").trigger("change"),!1}),n(".woocommerce").on("click",".select_none",function(){return n(this).closest("td").find("select option").prop("selected",!1),n(this).closest("td").find("select").trigger("change"),!1}),n(".wc-item-reorder-nav").find(".wc-move-up, .wc-move-down").on("click",function(){var e=n(this),t=e.closest("tr");e.trigger("focus");var i=e.is(".wc-move-up"),o=e.is(".wc-move-down");i?(i=t.prev("tr"))&&i.length&&(i.before(t),s.a11y.speak(c.i18n_moved_up)):!o||(o=t.next("tr"))&&o.length&&(o.after(t),s.a11y.speak(c.i18n_moved_down)),e.trigger("focus"),e.closest("table").trigger("updateMoveButtons")}),n(".wc-item-reorder-nav").closest("table").on("updateMoveButtons",function(){var e=n(this),t=n(this).find("tbody tr:last"),i=n(this).find("tbody tr:first");e.find(".wc-item-reorder-nav .wc-move-disabled").removeClass("wc-move-disabled").attr({tabindex:"0","aria-hidden":"false"}),i.find(".wc-item-reorder-nav .wc-move-up").addClass("wc-move-disabled").attr({tabindex:"-1","aria-hidden":"true"}),t.find(".wc-item-reorder-nav .wc-move-down").addClass("wc-move-disabled").attr({tabindex:"-1","aria-hidden":"true"})}),n(".wc-item-reorder-nav").closest("table").trigger("updateMoveButtons"),n(".submit button").on("click",function(){if("specific"===n("select#woocommerce_allowed_countries").val()&&!n('[name="woocommerce_specific_allowed_countries[]"]').val())return!!window.confirm(woocommerce_settings_params.i18n_no_specific_countries_selected)})})}(jQuery,woocommerce_settings_params,wp);