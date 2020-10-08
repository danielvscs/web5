<?php

$t = '<br><button class="btn-info dev" onclick="tooltip()" on>En desarrollo</button>';

if(!$dev){
    $t='';
}

?>
<footer class="black">
        <div>
            <span class='tooltip' id="tt-text">Se están probando nuevas funciones de la página.<br>Algunas de estas pueden presentar fallas<br><h5>El aviso se quitara en cuanto se termine</h5></span>
            <p>Pagina web de Daniel Vargas Cortes | 5A Programación<?php echo $t; ?></p>
        </div>
</footer>
<script type="text/javascript">
    function tooltip(){
        
        var text = document.getElementById("tt-text");
        text.classList.add("mostrar");
        setTimeout(reinicia, 8000)

    }
    function reinicia(){
        var text = document.getElementById("tt-text");
        text.classList.remove("mostrar");
    }
</script>