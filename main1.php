class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        
        rsort($nums);
        $r=[];
        //var_dump($nums);
        for($i=0; $i<count($nums)-2; $i++){
            $n1=$nums[$i];
            
            for($j=$i+1; $j<count($nums); $j++){
                $n2=$nums[$j];
               
                $sum2 = $n1+$n2;
                $stop=0;
               $k=count($nums);
                for($k; $k>$j && $stop==0; $k--){
                    if($nums[$k]===-$sum2){
                        //echo "found ";
                        $r[]=[$n1, $n2, $nums[$k]];
                        $stop=1;
                    }
                    if($nums[$k]> -$sum2){
                        $stop=1;
                    }
                    while($nums[$k]===$nums[$k-1]&&($k-1>$j)){
                        $k--;
                    }
                    
                }
                while($n2===$nums[$j+1]&& $j<count($nums)){
                    //echo "J:".$j;
                    $j++;
                }
                //echo $sum2;
                //echo ";";
            }
            while($n1===$nums[$i+1]){
                $i++;
            }
        }
       
        return $r;
    }
}
