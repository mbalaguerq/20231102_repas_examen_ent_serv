//carregar un arxiu senser i mostrar-lo al header
$("#cont").load("contenido.txt");

/*
Comento mètode get pq funcioni la pàgina
Mètode get
Envia dades al servidor a través de la url.
Li passem 2 paràmetres. La pàgina d'on vull anar i que hago con lo que me devuelva
nom="Mike"

           pagina     variables     funció
$.get("saludo.php?n="+nom+"&v=5", function(data){

    $("#get").html(data);
});
En resum, em conecto a saludo.php i el carrego al header el que es faci 
en la página a la que em conecto. Al exemple saludo.php 
*/


//post
//Li passem 3 paràmetres. La pàgina d'on vull anar i que hago con lo que me devuelva, 
//datos que se envian
nom="Paul"

$.post("saludo.php", 
{
n: nom,
v: "5",
cambio : ""
},
function(data){
    $("#post").html(data);

});
//----------------------------------------------------------


$.post("saludo2.php", 
function(data){
    $("#post").html(data);

});





//Con post, cuando pulsas un botón, ejecuta login.php 
//que recibe una variable y monta una frase
$("#ejec").click(function(){

        $.post("login.php",
        {
            usuario : $("input[name='nombre']").val()
        },
        function(data){
            $("#post").html(data);
        });

});
