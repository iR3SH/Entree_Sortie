function backTop() 
{
	$("body, html").animate({ 
	scrollTop: $( $("#back-top").attr("href") ).offset().top 
	}, 1500);
}


function goToChoice() {
    $("body, html").animate({
        scrollTop: $( $("#to-choice").attr("href") ).offset().top
    }, 1500);
}

function goToEntry() {
    $("body, html").animate({
        scrollTop: $( $("#to-entry").attr("href") ).offset().top
    }, 1500);
}

function goToExit() {
    $("body, html").animate({
        scrollTop: $( $("#to-exit").attr("href") ).offset().top
    }, 3000);
}


$("#recup-pc").change(function () {
    if ($(this).val() == "Oui")
    {
        $("#remove-recup").hide(1000);
    }
    else
    {
        $("#remove-recup").show(1000);
    }
});

function imprimer_page(){
window.print();
}
