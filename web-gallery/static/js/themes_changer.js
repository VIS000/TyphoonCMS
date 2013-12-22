function changeTheme(a) { 
            document.getElementById("header-container").style.backgroundImage = "url("+habboStaticFilePath+"/v2/images/themes/"+a+"/topbg.png)";
            document.body.style.backgroundImage = 'url("'+habboStaticFilePath+'/v2/images/themes/'+a+'/bg.png")'; 

	new Ajax.Request( '/habblet/quickmenu.php?theme='+a+'', {
  		method:  'get',
  		onSuccess:  function(response){
    			
  		}
	});
} 
