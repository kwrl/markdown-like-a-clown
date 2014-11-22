var compile_path="compile.php";
var editor;
    
$(document).ready(function(){
    $(".compile").click(function(){
        $.post(compile_path, {md_content:editor.getSession().getValue()})
        .success(function(filename){
            $("#viewer").attr("data",window.location.origin+"/"+filename);
        })
        .fail( function(xhr, textStatus, errorThrown) {
            alert(xhr.responseText);
        });
    });

    $(".reset").click(function(){
        editor.getSession().setValue(""); 
    });

    editor = ace.edit("editor");
    editor.setTheme("ace/theme/clouds");
    editor.getSession().setMode("ace/mode/markdown");
    editor.setOptions({
            maxLines: Infinity
    });
    editor.focus();

    $("#viewer").attr("data","http://bit.ly/1uogehU");
});
