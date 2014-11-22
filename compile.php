<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
$tmp_dir = "tmp/";
$pdf_dir = "pdf/";

$md_content = $_POST['md_content'];
$filename   = md5($md_content);
$raw_filepath   = $tmp_dir . $filename . ".md";
$pdf_filepath   = $pdf_dir . $filename . ".pdf";

if (!file_exists($raw_filepath)) {
    file_put_contents($raw_filepath, $md_content);
}
system("pandoc " . $raw_filepath . " -o " . $pdf_filepath);
echo $pdf_filepath;
?>
