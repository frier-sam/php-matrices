<?php
//multiplication fuction
	function multiply($arr1,$arr2)
	{
		
		$row1 = count($arr1);
		$col1 = count($arr1[0]);
		$row2 = count($arr2);
		$col2 = count($arr2[0]);
		//var_dump($arr1);
		//var_dump($arr2);
		
		//following 2 for loops check wheater matrices are rectangle or not			
			for($i=0 ;$i<$row1 ;$i++ )	
				{	if(count($arr1[$i]) != $col1)
						{	echo "Array 1 is not a perfect rectanglle";							
							die();
						}
				}
			for($i=0 ;$i<$row2 ;$i++ )	
				{		if(count($arr2[$i]) != $col2)
						{	echo "Array 2 is not a perfect rectanglle";							
							die();
						}
				}
		//This if loop checkes if these matrices can be multiplied or not		
			if($col1 != $row2){ echo "These matrices cannot be multiplied, column count of 1st matrix should be equal to row count of second marix";
								die();
						}	
		//multiplication starts here
		$arr3 = array();
		for($i=0 ;$i<$row1 ;$i++ ){
			for($y=0 ;$y<$col2 ;$y++){	
				$arr3[$i][$y] = 0;
				for($z=0 ;$z<$col1 ;$z++){
					$val = $arr1[$i][$z]*$arr2[$z][$y];
					$arr3[$i][$y] = $arr3[$i][$y] + $val;
				}
			}
		}
		return($arr3);
	}
//addition fuction
	function add($arr1,$arr2){
		$row1 = count($arr1);
		$col1 = count($arr1[0]);
		$row2 = count($arr2);
		$col2 = count($arr2[0]);
		//following 2 for loops check wheater matrices are rectangle or not			
			for($i=0 ;$i<$row1 ;$i++ )	
				{	if(count($arr1[$i]) != $col1)
						{	echo "Array 1 is not a perfect rectanglle";							
							die();
						}
				}
			for($i=0 ;$i<$row2 ;$i++ )	
				{		if(count($arr2[$i]) != $col2)
						{	echo "Array 2 is not a perfect rectanglle";							
							die();
						}
				}
		//This if loop checkes if these matrices can be Added or not		
			if(($row1 != $row2) || ($col1 != $col2)){ echo "These matrices cannot be added, they should have same number of rows and colums";
								die();
						}	
		$arr3 = array();
		for($i=0 ;$i<$row1 ;$i++ ){
			for($y=0 ;$y<$col1 ;$y++){	
				$arr3[$i][$y] = $arr1[$i][$y] + $arr2[$i][$y];				
			}
		}
		return($arr3);
	}
//subtraction fuction
	function sub($arr1,$arr2){
		$row1 = count($arr1);
		$col1 = count($arr1[0]);
		$row2 = count($arr2);
		$col2 = count($arr2[0]);
		//following 2 for loops check wheater matrices are rectangle or not			
			for($i=0 ;$i<$row1 ;$i++ )	
				{	if(count($arr1[$i]) != $col1)
						{	echo "Array 1 is not a perfect rectanglle";							
							die();
						}
				}
			for($i=0 ;$i<$row2 ;$i++ )	
				{		if(count($arr2[$i]) != $col2)
						{	echo "Array 2 is not a perfect rectanglle";							
							die();
						}
				}
		//This if loop checkes if these matrices can be subtracted or not		
			if(($row1 != $row2) || ($col1 != $col2)){ echo "These matrices cannot be subtracted, they should have same number of rows and colums";
								die();
						}	
		$arr3 = array();
		for($i=0 ;$i<$row1 ;$i++ ){
			for($y=0 ;$y<$col1 ;$y++){	
				$arr3[$i][$y] = $arr1[$i][$y] - $arr2[$i][$y];				
			}
		}
		return($arr3);
	}
//test	
$arr1 = array(array(1,2),array(5,2));
$arr2 = array(array(2,2),array(3,2));
var_dump(multiply($arr1,$arr2));	
		
?>
