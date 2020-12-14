
var ActionInfo = new function(){
	
	this.getInfo = function(){
		jQuery(function(){
			jQuery(".ln-5thSecInput").on('click',function(){
				var buttonID = this.id;
				alert('buttonID: '+buttonID);
				jQuery.ajax({
					method: "POST",
					url: "classes/saveinfo.php",
					data: {request: 'yes', buttonID: buttonID},
					complete: function(jqXHR,textStatus){
						//alert('textStatus: '+textStatus);
						//alert('jqXHR: '+jqXHR);
						alert('jqXHR.responseText: '+jqXHR.responseText);
						var parsedResponseText = JSON.parse(jqXHR.responseText);
						//alert('parsedResponseText: '+parsedResponseText);
						//alert('parsedResponseText.errorInfo: '+parsedResponseText.errorInfo);
						//alert('parsedResponseText.request: '+parsedResponseText.request);
					}
				});
			});
		});
	}
	
}

ActionInfo.getInfo();