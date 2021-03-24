/*================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 5.0
	Author: PIXINVENT
	Author URL: https://themeforest.net/user/pixinvent/portfolio
================================================================================

NOTE:
------
PLACE HERE YOUR OWN JS CODES AND IF NEEDED.
WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR CUSTOM SCRIPT IT'S BETTER LIKE THIS. */

//fonction d'appel API

function postToApi(action,dataParam) {
	$.ajax({
		url:'http://contacts/api/' + action,
		type:'POST', 
		data:dataParam,
		success:function(res){
 
		},
		error:function(err){
 
		}});
}

var page=1;

$(".add-contact").on("click", function (e) {
	console.log($("#formcontact").serialize()); 
	var param=$("#formcontact").serialize();
	postToApi('create',param);
});;

//exercice

$(".Btn1").on( "click", function (e) {
	
console.log( "j'ai cliqué sur mon button" );

$("p").fadeToggle( "slow" ).addClass( "select" );

});

$( ".Btn2" ).on ( "click", function (e) {
	
	console.log( "j'ai cliqué sur mon button" );
	
	$("p").fadeToggle( "slow" ).removeClass("select");

});

$(".Btn3").on("click", function (e) {
	
	console.log("j'ajoute avant");
	
	$("ul").prepend("<li>nouveau elem en haut</li>")
	

});

$(".Btn4").on("click", function (e) {
	
	console.log("j'ajoute après");

	$("ul").append("<li>nouveau elem en bas</li>")
	
	
});

$(".Next").on("click", function(e) {
	 page=page+1;
	pagination(page);
	$(".waiting").hide().toggle("slow")
});

$(".previous").on("click", function(e) {
	page=page-1;
   pagination(page);
});
	 
	
function pagination(page){
	$.ajax({
		url:'http://contacts/api/index?page='+page,
		type:'POST', 
		data:'',
		success:function(res){
			res.forEach(element=>{
				console.log(element.first_Name)
				$("ul").append("<li>"+element.first_Name+"<li>")
			})
			console.log(res)
		},
		error:function(err){
			console.log(err)
		}});
}
$("waiting")
	





