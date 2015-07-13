(function ($) {
    $(document).ready(function () {

        /*-----------------Main Menu------------------------*/
		alert('0');
        //Initializing the default menu(remove default styles)
        $("#menu div").removeAttr("class");
        $("#menu ul li").removeAttr("class");
        $("#menu ul").removeAttr("class");
        $("#menu ul ul").removeAttr("class");
        $("#menu ul ul").removeAttr("style");

		alert('1');
		
        //Display second level navigation for a particular time range. This feature is not currently visible 
        $('#menu > div > ul > li > ul > li').each(function () {
            var pagename = $(".breadcrumbs td:last").children('a').html();

            if ($(this).children('a').find('.menu-item-text').html() == pagename) {
                $(this).parent().show().delay(0).hide();
            }
        });

		alert('2');
		
        //Hilight first level navigation 
        $('#menu > div > ul > li').each(function () {
            var pagename = $(".breadcrumbs td:eq(1)").children('a').html();

            if ($(this).children('a').find('.menu-item-text').html() == pagename) {
                $(this).children('a').find('.menu-item-text').addClass('select');
            }
        });

        var ismouseout = true;

        $('#menu > div > ul').mouseleave(function () {
            ismouseout = true;

            if (ismouseout)
                $('#menu > div > ul li ul').delay(5000).fadeOut(1000,function(){$('#header').css('z-index','5');});
        });

        $('#menu > div > ul').mouseenter(function () {
	     $('#header').css('z-index','100');
	     
            $('#menu > div > ul li ul').css('z-index', '1');
            $(this).children('ul').clearQueue().stop().css('z-index', '2000').fadeTo(1, 10);
        });

        $('#menu > div > ul > li').mouseenter(function () {
		 $('#header').css('z-index','100');
		 
            ismouseout = false;

            $('#menu > div > ul li ul').css('z-index', '1');
            $(this).children('span').css('color', '#ffffff');
            $(this).children('ul').clearQueue().stop().css('z-index', '2000').fadeTo(1, 10, function () {
                $('#menu > div > ul li ul').not(this).hide();
                $(this).show();
            });

            if ($(this).children('ul').length < 1) {
                $('#menu > div > ul li ul').clearQueue().stop().hide();
            }
        });

        $('#menu > div > ul li ul').mouseenter(function () {
		 $('#header').css('z-index','100');
            ismouseout = false;

            $('#menu > div > ul li ul').clearQueue().stop();
        });

        $('#menu > div > ul li ul').mouseleave(function () {
            ismouseout = true;

            if (ismouseout)
                $('#menu > div > ul li ul').delay(4000).fadeOut(1000,function(){$('#header').css('z-index','5');});
        });

        $('#menu > div > ul > li').click(function () {
            $('#menu > div > ul > li').children('a').find('.menu-item-text').removeClass('select').addClass('deselect');
            $(this).children('a').find('.menu-item-text').removeClass('deselect').addClass('select');
        });


        
	     

	function expandNode(nodeul){
		var currentBreadNode = 1;
		var breadNodeString = $('.breadcrumbs:last > table > tbody > tr > td:last a').text().trim();
		var nodeCount = $('.breadcrumbs:last > table > tbody > tr > td').length-1;
		var matchedNode = nodeul;
		var found = false;
		
		if(breadNodeString != "" && nodeCount > 0)
		{
			while(currentBreadNode != nodeCount){
				//incerement node count to get the node from the breadcrumb
				currentBreadNode++;
				
				//get the next node string to match
				breadNodeString = $('.breadcrumbs:last > table > tbody > tr > td:eq('+currentBreadNode+') a').text().trim();
				
				if(breadNodeString == "")
					continue;
					
				matchedNode.children('li').each(function(){
					if($(this).children('a').find('span.menu-item-text:eq(0)').text().trim() == breadNodeString)
					{
						$(this).children('div.PlusImg').removeClass('PlusImg').addClass('MinusImg');
						$(this).children('ul').css('display','block');
						//alert(breadNodeString + "---" + $(this).children('a').text());	
						matchedNode = $(this).children('ul');
					}
				});
			}
		}
	}
	
       //Display the left navigation according to the breadcrumb
       /* var lastBreadcrumbNode = $('.breadcrumbs:last > table > tbody > tr > td:last a').text().trim();
		
        $('.menu-vertical span.menu-item-text').each(function () {
            if ($(this).text().trim() == lastBreadcrumbNode) {
                $(this).parents('ul').show();
                $(this).parents('ul').filter('div.PlusImg').removeClass('PlusImg').addClass('MinusImg');
		  $(this).parents('li').filter(':first').children('ul').show();
                $(this).parents('ul').siblings().filter('div.PlusImg').removeClass('PlusImg').addClass('MinusImg');
		  $(this).parents('li').filter(':first').children('ul').show().siblings().filter('div.PlusImg').removeClass('PlusImg').addClass('MinusImg');
            }
        });*/


	if(jQuery("table[id*='PlaceHolderTitleBreadcrumb'] td:last span").length > 0){
		var lastBreadcrumText = jQuery("table[id*='PlaceHolderTitleBreadcrumb'] td:last span").text();
		if(lastBreadcrumText.length > 60)
		{
			jQuery("table[id*='PlaceHolderTitleBreadcrumb'] td:last span").text(lastBreadcrumText.substring(0,58) + "..");
		}
	}
    });

})(jQuery);