$(function(){
	var flag = $('#js_locked').val();

$("#js_locked").click(function () {    
    if (!flag) {
            $(".memo-content, .memo-title").prop("readonly", true);
            flag = true;
                $("#js_locked").html('<i class="fas fa-lock-open"></i> UnLock');
    } else {    
            $(".memo-content, .memo-title").prop("readonly", false);
            flag = false;
                $("#js_locked").html('<i class="fas fa-lock"></i> Lock');
    }
});
});