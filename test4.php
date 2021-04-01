<?php




function sortByPriceAscending(string $jsonString) : string
{
      
   $data =json_decode($jsonString, true);
    
   usort($data, function($a, $b) { //Sort the array using a user defined function
    return $a->price > $b->price ? -1 : 1; //Compare the scores
	});
    
   return json_encode($data);
}


json_encode
 
 sortByPriceAscending('[{"name":"eggs","price":1},{"name":"coffee","price":9.99},{"name":"rice","price":4.04}]');