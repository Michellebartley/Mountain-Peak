jQuery(function(t){t("#tiptip_holder").removeAttr("style"),t("#tiptip_arrow").removeAttr("style"),t(".tips").tipTip({attribute:"data-tip",fadeIn:50,fadeOut:50,delay:200,keepAlive:!0}),t(".wc-metaboxes-wrapper").on("click",".wc-metabox > h3",function(){var e=t(this).parent(".wc-metabox");e.hasClass("closed")?e.removeClass("closed"):e.addClass("closed"),e.hasClass("open")?e.removeClass("open"):e.addClass("open")}),t(document.body).on("wc-init-tabbed-panels",function(){t("ul.wc-tabs").show(),t("ul.wc-tabs a").on("click",function(e){e.preventDefault();e=t(this).closest("div.panel-wrap");t("ul.wc-tabs li",e).removeClass("active"),t(this).parent().addClass("active"),t("div.panel",e).hide(),t(t(this).attr("href")).show()}),t("div.panel-wrap").each(function(){t(this).find("ul.wc-tabs li").eq(0).find("a").trigger("click")})}).trigger("wc-init-tabbed-panels"),t(document.body).on("wc-init-datepickers",function(){t(".date-picker-field, .date-picker").datepicker({dateFormat:"yy-mm-dd",numberOfMonths:1,showButtonPanel:!0})}).trigger("wc-init-datepickers"),t(".wc-metaboxes-wrapper").on("click",".wc-metabox h3",function(e){t(e.target).filter(":input, option, .sort").length||t(this).next(".wc-metabox-content").stop().slideToggle()}).on("click",".expand_all",function(){return t(this).closest(".wc-metaboxes-wrapper").find(".wc-metabox > .wc-metabox-content").show(),!1}).on("click",".close_all",function(){return t(this).closest(".wc-metaboxes-wrapper").find(".wc-metabox > .wc-metabox-content").hide(),!1}),t(".wc-metabox.closed").each(function(){t(this).find(".wc-metabox-content").hide()})});