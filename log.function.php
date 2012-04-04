<?
$filelog = "log_debug_ipagare.txt";

function filelog($value) {
$ponteiro = fopen($filelog, "a");
$escreve = "\n" .$value;
fwrite($ponteiro, $escreve);
fclose ($ponteiro);
}
?>