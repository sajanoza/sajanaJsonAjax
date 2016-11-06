<?
class SajanaJsonAjaxApi{
	//przyjmuje nazwe danej post zwraca zdekodowane jsona
	function odbierzSajanAjax($nazwa){
		if (isset($_POST[$nazwa])){
			$toReturn = json_decode($_POST[$nazwa],true);
		}else{
			$toReturn='{"error":"nie ma danej post o nazwie '.$nazwa.'"}';
		}
		
		return $toReturn;
	}	
	//echuje dane sformatowane w json
	function wyslijSajanAjaxJakoArray($dane){
		$daneDoWyslania = array ();
		$numargs = func_num_args();
		$arg_list = func_get_args();
		for ($i = 0; $i < $numargs; $i++) {
			array_push($daneDoWyslania,$arg_list[$i]);
		}
		echo json_encode($daneDoWyslania);
	}
}
?>