class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        
        rsort($nums);
        $r=[];
        // keep track of dupliate
        $temp=[];
        for($i=0; $i<count($nums); $i++){
            $left= $i+1;
            $right=count($nums)-1;
            while($left<$right){
                $sum = $nums[$i]+$nums[$left]+$nums[$right];
                if($sum==0){
                    if(!isset($temp[$nums[$i]][$nums[$left]][$nums[$right]])){
                        array_push($r, [$nums[$i],$nums[$left],$nums[$right]]);
                        $temp[$nums[$i]][$nums[$left]][$nums[$right]]=true;
                    }
                    $left++;
                    $right--;
                }else if($sum>0){
                    $left++;
                }else{
                    $right--;
                }
            }
        }
       
        return $r;
    }
}
