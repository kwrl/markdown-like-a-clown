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
        for(var i=0; i<99;i++) {
            editor.getSession().setValue(editor.getSession().getValue()+"\n");
        }
    });

    $(".upload").click(function(){
        $("#uploader").toggle();
    });

    $(".upload .close").click(function(){
        $(this).parents(".upload").toggle();
    });

    editor = ace.edit("editor");
    editor.setTheme("ace/theme/xcode");
    editor.setOptions({
            maxLines: Infinity
    });
    for(var i=0; i<99;i++) {
        editor.getSession().setValue(editor.getSession().getValue()+"\n");
    }
    editor.focus();

    $("#viewer").attr("data","http://bit.ly/1Fdr2FS");
});
