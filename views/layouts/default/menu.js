$(document).ready(main);

var esatdo = true;

function main(){
	$('#menu').click(function(){

        if (esatdo == true) {
            $('nav').fadeIn("slow", function(){

        });
        esatdo = false;
        }else{
        	$('nav').fadeOut("slow", function(){

        });
        esatdo = true;
    }
	});
};