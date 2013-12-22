function CenterBox(){
		
			var left = -($(window).width() / 2)+400;
			
			$(".CenterBox").css({
			  'left' : left,
			  'background' : '#009900'
			});
			
			var leftHilfe = -($(window).width() / 2)+190;
		
			$("#CenterHilfe").css({
				 'left' : leftHilfe
			}); 
			
		}
		
		function contentloader(dataid) {
		$("#div").load("myfile.php?id="+dataid+"");
	  }
		
	$(function(){
		$("#page-wrap").wrapInner("<table cellspacing='20' height='100%' style='postion:absolute; top:-30px;' ><tr>");
		$("<td style='background:url(libs/images/style_1.0.0/Line_vertikal.png); width:2px;'></td>").insertAfter(".post");
		$(".post").wrap("<td></td>");
		
	
		
		setInterval("CenterBox()", 8000);
		var left = -($(window).width() / 2)+400;
			
		$(".CenterBox").css({
			 'left' : left
		});
		
		var leftHilfe = -($(window).width() / 2)+190;
		
		$("#CenterHilfe").css({
			 'left' : leftHilfe
		});
		
		var leftWeg = -($(window).width() / 2)+290;
		
		$("#CenterHilfe").css({
			 'left' : leftWeg
		}); 
		
		
		
		$("#ContentWeg").css({
			 'width' : '580px'
		}); 
		
		$("#ContentHilfe").css({
			 'width' : '380px'
		}); 		
		
		 
		$(".Spoiler").height($(window).height()); 
		
		$('.Content').scrollTo( '#CenterHelper', 1000, {easing:'easeOutBounce'}); 
		
		
		var Header = -($(window).height())+200;
		$('.Spoiler').delay(500).animate({
			top: Header,
		  }, 2500, 'easeOutBounce');
		 
		$('.Hilfe')
		.click(
			function (){
				$('.Content').scrollTo( '#CenterHilfe', 1900, {easing:'easeOutBounce'});
			}
		);
		$('.Diskussion')
		.click(
			function (){
				$('.Content').scrollTo( '#CenterDiskussion', 1900, {easing:'easeOutBounce'});
			}
		);
		$('.Rooms')
		.click(
			function (){
				$('.Content').scrollTo( '#CenterRooms', 1900, {easing:'easeOutBounce'});
			}
		);
		$('.Weg')
		.click(
			function (){
				$('.Content').scrollTo( '#CenterWeg', 1900, {easing:'easeOutBounce'});
			}
		);
		$('.HabboHelper')
		.click(
			function (){
				$('.Content').scrollTo( '#CenterHelper', 1900, {easing:'easeOutBounce'});
			}
		);
		
		$('.Join')
		.click(
			function (){
				$('.Content').scrollTo( '#CenterAnmelden', 1900, {easing:'easeOutBounce'});
			}
		);
        
		
		$('#WegScroller')
		.click(
			function (){
				$('#WegScroll').scrollTo( {top:'+=130px', left:'0'}, 1000, {easing:'easeOutBounce'});
			}
		);
		
		$('#WegBack')
		.click(
			function (){
				$('#WegScroll').scrollTo( {top:'-=130px', left:'0'}, 800, {easing:'easeOutBounce'});
			}
		); 
	      
        
       $(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:false});
	  }); 		
		
	 });
	 
	 		
		function ForumLoader(url) {
			$('.FContent').html('<center><br><br><img src="/libs/images/style_1.0.0/ajax-loader.gif"></center>');
			$(".FContent").load("/?/forum/"+url);
	  	}
		
		
		function PostForum(){
			$.post("/?/forum_post/", { post: $('#ans').val() } );
			GetLastPost();
		}
		
		
		function GetLastPost(){
			$('.Poster').html('<center><br><br><img src="/libs/images/style_1.0.0/ajax-loader.gif"></center>');
			$(".Poster").load("/?/forum_post/&last=post");
		}
		
		
		function NewForum(){
			$.post("/?/forum_new/", { post: $('#new').val(), title: $('#title').val() } );
			GetLastForum();
		}
		
		function GetLastForum(){
			/*$('.Poster').html('<center><br><br><img src="/libs/images/style_1.0.0/ajax-loader.gif"></center>');
			$(".Poster").load("/?/forum_post/&last=post");*/
		}