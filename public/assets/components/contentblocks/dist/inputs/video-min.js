!function(d,i){i.fieldTypes.video=function(t,e){var a={apiInserted:!1,apiLoaded:!1,init:function(){e.value&&this.selectVideo(e.value),e.video_id&&this.selectVideo(e.video_id),t.find(".contentblocks-field-delete-video").on("click",function(e){e.preventDefault(),t.find(".video_id").val(""),t.find(".contentblocks-field-video-preview").empty(),t.removeClass("hasVideo"),i.fireChange()}),t.find(".contentblocks-field-video-link").on("change",function(){var e=d(this).val().match(/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/);e&&11==e[2].length&&(d(this).val(""),a.selectVideo(e[2]),i.fireChange())}).on("keyup",function(){var e=d(this);setTimeout(function(){e.trigger("change")},100)}),t.find(".contentblocks-field-video-choose").on("click",function(e){e.preventDefault();e=tmpl("contentblocks-modal-video",{});i.openModal("Choose Video",e,{initCallback:function(e,t){e.addClass("contentblocks-modal-video");var o=e.find(".contentblocks-modal-content").css("maxHeight").slice(0,-2),o=(o-=85,e.find(".contentblocks-modal-scrollable-area").css("maxHeight",o+"px"),e.find("form")),n=o.find(".query");a.resultsHolder=e.find(".youtube-search-results"),a.moreBtn=e.find(".contentblocks-search-results-more"),a.moreBtn.hide(),a.resultsHolder.on("click","a",function(e){if(e.ctrlKey||e.metaKey)return!0;e.preventDefault();e=d(this).data("video_id");return""!=e&&(a.selectVideo(e),i.closeModal(),i.fireChange()),!1}),o.on("submit",function(e){e.preventDefault();e=n.val();a.loadResults(e,!0)}),a.moreBtn.on("click",function(){var e=n.val(),t=a.moreBtn.data("token");a.loadResults(e,!1,t)})}})})},loadResults:function(e,i,t){d.ajax({url:"https://www.googleapis.com/youtube/v3/search",data:{q:e,part:"id,snippet",maxResults:12,type:"video",videoEmbeddable:!0,key:"AIzaSyB0dw388ateBJGR-wIGxPTWtJUmDx55gKw",pageToken:t||""}}).done(function(e,t,o){var n=[];d.each(e.items,function(e,t){t.snippet.publishedAt=new Date(t.snippet.publishedAt).format(MODx.config.manager_date_format),n.push(tmpl("contentblocks-field-video-item",t))}),n=n.join(""),i?a.resultsHolder.html(n):a.resultsHolder.append(n),e.nextPageToken?a.moreBtn.data("token",e.nextPageToken).show():a.moreBtn.data("token","").hide()}).fail(function(e,t,o){e=_("contentblocks.video.api_error",{message:e.responseJSON.error.message,code:e.responseJSON.error.code});a.resultsHolder.html('<p class="error">'+e+"</p>"),a.moreBtn.hide()})},selectVideo:function(e){t.addClass("hasVideo"),t.find(".video_id").val(e),t.find(".contentblocks-field-video-preview").html('<iframe class="youtube-player" src="https://www.youtube.com/embed/'+e+'?rel=0" frameborder="0">')},getData:function(){return{value:t.find(".video_id").val()}}};return a}}(vcJquery,ContentBlocks);
//# sourceMappingURL=video-min.js.map