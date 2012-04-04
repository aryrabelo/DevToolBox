<?
	// função para escrever logs em um determinado arquivo 


	function filelog($value, $filename = "log_debug_ipagare.txt") 
	{
		$ponteiro = fopen($filelog, "a");
		$escreve = "\n" .$value;
		fwrite($ponteiro, $escreve);
		fclose ($ponteiro);
	}
	
?>