		
	$(document).ready(function(){
 	
	//??????????? ??????? ?? ?????? ? ??????
			$('a[id=product]').click(function(){show("catalog.php");});
			$('a[id=category]').click(function(){show("category.php");});
			$('a[id=page]').click(function(){show("page.php");});
			$('a[id=menu]').click(function(){show("menu.php");});
			$('a[id=settings]').click(function(){show("settings.php");});
	});  	

	
	//??????????? ???????? ??? ?????? 
		function show(url)  
        {  
            $.ajax({                
				type: "POST",
				url: "ajax.php",
				data: { url: url },
                cache: false,  
                success: function(data){  
			        $("#content").html(data);  
			
                }  
            });  
        }  
		
	  function indication(object,text, type)  
        {
				var background="#9abb8b";
				var bordercolor="#588a41";
			
				if(!type){
					background="#fab0ab";  
					bordercolor="#fc6f64";
				}
				object.animate({ opacity: "show" }, "slow" );
				object.html(text); 
				object.css('background',background);
				object.css('border-color',bordercolor);			
				object.animate({ opacity: "hide" }, 3000 );
				
		}
		
		//???????????????? ???????? ?? ?????? ????
		function centerPosition(object)  
        {
			object.css('position', 'absolute');
			object.css('left', ($(window).width()-object.width())/2+ 'px');
			object.css('top', ($(window).height()-object.height())/2+ 'px');
		}
	
		
$.getScript('/mvc_site/script/admin/catalog.js');
$.getScript('/mvc_site/script/admin/category.js');



