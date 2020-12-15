
var ActionsInfo = new function(){
	
	this.getInfo = function(){
		jQuery(function(){
			jQuery(".ln-5thSecInput").on('click',function(){
				var buttonID = this.id;
				jQuery.ajax({
					method: "POST",
					url: "classes/saveinfo.php",
					data: {request: 'yes', buttonID: buttonID},
					complete: function(jqXHR,textStatus){
						alert('jqXHR.responseText: '+jqXHR.responseText);
						var parsedResponseText = JSON.parse(jqXHR.responseText);
					}
				});
			});
		});
	}
	
}

ActionsInfo.getInfo();