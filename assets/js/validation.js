
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

function isUsername(UsernameFieldMsg, findField, exceptField) {

  $(''+findField+':not('+exceptField+')').each(function(){

    var fieldNameText = $("label[for='"+this.id+"']");
    
    errorResult = $(this).val().match(/^([a-zA-Z0-9]{6,12})*$/);
    if(errorResult == null){
      $(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+UsernameFieldMsg+"</li>");
    }
    else{
      
    } 
  });
}

function onlyText(letterFieldMsg, findField, exceptField) {

  $(''+findField+':not('+exceptField+')').each(function(){

    var fieldNameText = $("label[for='"+this.id+"']");
    
    errorResult = $(this).val().match(/^([a-zA-Z])*$/);
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
    
    errorResult = $(this).val().match(/^([a-zA-Z0-9]{3,12})*$/);
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
function isPass(PassFieldMsg, findField, exceptField) {

  $(''+findField+':not('+exceptField+')').each(function(){

    var fieldNameText = $("label[for='"+this.id+"']");
    
    errorResult = $(this).val().match(/^([a-zA-Z0-9]{6,12})*$/);
    if(errorResult == null){
      $(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+PassFieldMsg+"</li>");
    }
    else{
      
    } 
  });
}function isRePass(RepassFieldMsg, findField, exceptField) {

  $(''+findField+':not('+exceptField+')').each(function(){

    var fieldNameText = $("label[for='"+this.id+"']");
    
    errorResult = $(this).val().match(/^password*$/);
    if(errorResult == null){
      $(".waringMsg").append("<li><b>"+fieldNameText.text()+" </b>"+RepassFieldMsg+"</li>");
    }
    else{
      
    } 
  });
}


function resetFields(){
  $("input:text").val("");  
  $("#email").val("");
  $("input:password").val("");
}
