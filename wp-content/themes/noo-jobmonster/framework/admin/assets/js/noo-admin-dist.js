jQuery(document).ready(function(i){i(document).on("click",".noo-wpmedia",function(t){t.preventDefault();var e=i(this),a=wp.media({title:nooAdminJS.title_wpmedia,button:{text:nooAdminJS.button_wpmedia},multiple:!1}).on("select",function(){var t=a.state().get("selection").first().toJSON();e.val(t.id).change()}).open()}),i(".parent-control").change(function(){var t=i(this),e=!1,a=t.attr("type"),n=t.attr("id");"text"==a?e=""!==t.val():"checkbox"==a&&(e=t.is(":checked")),e?i("."+n+"-child").show().find("input.parent-control").change():i("."+n+"-child").hide().find("input.parent-control").change()}),i(".noo-slider").each(function(){var a=i(this),t=i("<div>",{id:a.attr("id")+"-slider"}).insertAfter(a);t.slider({range:"min",value:a.val()||a.data("min")||0,min:a.data("min")||0,max:a.data("max")||100,step:a.data("step")||1,slide:function(t,e){a.val(e.value).attr("value",e.value).change()}}),a.change(function(){t.slider("option","value",a.val())})}),i(".noo-ajax-btn").click(function(t){t.preventDefault();var e=i(this);return e.data("action")&&i.ajax({url:nooAdminJS.ajax_url,dataType:"json",type:"POST",data:e.data()}).done(function(t){if("object"==typeof t&&null!=t&&!0===t.success&&t.redirect)return document.location.href=t.redirect,!1;document.location.reload()}).fail(function(){document.location.reload()}).always(function(){}),!1}),i("select.noo-admin-chosen").chosen({allow_single_deselect:!0});var e=i(".email-setting a"),a=i(".email-setting.tab-content");e.each(function(){i(this).click(function(){var t=i(this).attr("data-tab");return e.removeClass("nav-tab-active"),i(this).addClass("nav-tab-active"),a.hide(),i("#"+t).show(),!1})}),i(".noo-select2-ajax").select2({placeholder:"Select ",allowClear:!0,ajax:{url:ajaxurl,data:function(t){return{search:t.term,action:i(this).data("action")}},processResults:function(t){return{results:t.results}}}})});