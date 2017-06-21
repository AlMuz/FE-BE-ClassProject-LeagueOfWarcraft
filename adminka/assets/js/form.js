$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})



function isEmpty(emptyFieldMsg, findField, exceptField){
	

	$(''+findField+':not('+exceptField+')').each(function(){
		var fieldNameText = $("label[for='"+this.id+"']");
		
		if($(this).val() == ""){
			$(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+emptyFieldMsg+"</li>");
		}
		else{
			
		}		
	});

}
function isEmptyList(emptylist, findField, exceptField){
	

	$(''+findField+':not('+exceptField+')').each(function(){
		var fieldNameText = $("label[for='"+this.id+"']");
		
		if($(this).val() == ""){
			$(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+emptylist+"</li>");
		}
		else{
			
		}		
	});

}

function onlyText(letterFieldMsg, findField, exceptField) {

	$(''+findField+':not('+exceptField+')').each(function(){

		var fieldNameText = $("label[for='"+this.id+"']");
		
		errorResult = $(this).val().match(/^([a-zēūīāšķļņA-ZĒŪĪĀŠĶĻŅ\s])*$/);
		if(errorResult == null){
			$(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+letterFieldMsg+"</li>");
		}
		else{
			
		}	
	});
}

function textMin(letterMin, findField, exceptField) {

	$(''+findField+':not('+exceptField+')').each(function(){

		var fieldNameText = $("label[for='"+this.id+"']");
		
		errorResult = $(this).val().match(/^([a-zēūīāšķļņA-ZĒŪĪĀŠĶĻŅ\s]{3,12})*$/);
		if(errorResult == null){
			$(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+letterMin+"</li>");
		}
		else{
			
		}	
	});
}




function isEmail(emailFieldMsg, findField, exceptField){
$(''+findField+':not('+exceptField+')').each(function(){

		var fieldNameText = $("label[for='"+this.id+"']");
		
		errorResult = $(this).val().match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/);
		if(errorResult == null){
			$(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+emailFieldMsg+"</li>");
		}
		else{
			
		}	
	});
}

function isTel(telFielMsg, findField, exceptField){
$(''+findField+':not('+exceptField+')').each(function(){

		var fieldNameText = $("label[for='tel']");
		
		errorResult = $(this).val().match(/^([2-9]{1})([0-9]{7})*$/);
		if(errorResult == null){
			$(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+telFielMsg+"</li>");
		}
		else{
			
		}	
	});
}


function isChecked(checkBoxMsg, findField, fieldNameText){
	var radioButtom = $(''+findField+'').is(":checked");

	if(radioButtom == false){
		$(".waringMsg").append("<li><b>"+fieldNameText+" </b>"+checkBoxMsg+"</li>");
	}
	else{
		
	}
}


function resetFields(){
	$("input:text").val("");	
	$("#email").val("");	
	$("#phone").val("");
	$("#valsts").val("Izveleties valsti");
	$("input:checkbox").attr("checked", false);
}
3535