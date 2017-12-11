<?php

/*
      Program to print tree structure with correct padding using an input file
      Author: Ansari M Azam  
*/

        
      // Code snippet for sorting file content of input example file
        $data = trim(file_get_contents('input_task1.php'));
	$data = explode("\n",$data);
	sort($data,SORT_NUMERIC);
        $counter = 0;
           
         foreach( $data as $tree){
               $tree_array[] = explode("|",$tree);
         }
     
           foreach($tree_array as $tree){
                
                    for($i=1;$i<=count($tree);$i++){
                         
                            if($tree[0] == $i && $tree[1] == 0){
                                $node_id = $tree[0];
                                $parent_id = $tree[1];
                                      echo $tree[2]."<br>";
                             
                                                     
           
                                 break;
                             
                             }

                          if($tree[1] != 0){
                              if($tree[1] == $node_id || $tree[1] == $parent_id  ){
                                $node_id = $tree[0];
                                $parent_id = $tree[1];
                                $counter++;
                                      if($counter == 1){
                                           echo "-".$tree[2]."<br>";
                                      }
                                      if($counter == 2){
                                           echo "--".$tree[2]."<br>";
                                       }
                                      if($counter > 2){
                                           echo "---".$tree[2]."<br>";
                                       }
                                      
                                       break;
                                   }
                          }
                          // echo $tree[1]."=>".$tree[2]."<br>";
               
                    }
              }
?>
