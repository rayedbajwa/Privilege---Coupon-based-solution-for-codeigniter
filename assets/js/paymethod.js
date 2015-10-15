
$(document).ready(function(){
	$("#ez").hide();
        $("#h2h").hide();
        $("#btod").hide();
		$(".select").change(function(){
			
var valel=document.getElementById('sel');
	var val= valel.options[valel.selectedIndex].value;
	
		  if(val=='ezpaisa')
            {
                $('#btod').slideUp(); $('#h2h').slideUp();
            $('#ez').slideDown();

            }
            if(val=='btod'){
			 $('#h2h').slideUp();
                 $('#ez').slideUp();$('#btod').slideDown();
            }
			if(val=='h2h')
            {
               
	                $('#btod').slideUp();
                 $('#ez').slideUp(); $('#h2h').slideDown();
            }
            });
	
	$('#fly').hide();
	$('#fly').slideDown();
    

});



