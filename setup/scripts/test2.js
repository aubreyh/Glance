var counter = 0;

// A $( document ).ready() block.
$( document ).ready(function() {

$("button").click(function() {
    $("h2").append("<p class='test'>click me " + (++counter) + "</p>")
});

// With on():

$("h2").on("click", "p.test", function(){
    alert(this.innerText);
});

});