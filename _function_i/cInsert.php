<?php
class cInsert {
    function vInsertData($afields,$atable,$avalues) {
		$countarray_field = count($afields)-1;
		$countarray_value = count($avalues)-1;
		$fieldname = "";
		$datavalue = "";
		for ($i=0;$i<=$countarray_field;$i++) {
			if ($i==$countarray_field) {
				$separator = "";
			} else {
				$separator = ",";
			}
			$fieldname=$fieldname.$afields[$i].$separator;
			$datavalue="".$datavalue.$avalues[$i].$separator;
		}
		$allstatement = "insert into ".$atable."(".$fieldname.") values(".$datavalue.")";
		$query = $allstatement;
		//echo $query;
		$result = mysqli_query($GLOBALS["conn"],$query);
		echo "<br>";
		if ($result) {
			echo '<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Data berhasil disimpan</div>';
		} else {
			echo '<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;Terjadi kesalahan, data gagal disimpan</div>';
		}
	}
}
?>


