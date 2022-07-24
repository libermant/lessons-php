function clearArray($arr){
    $newArr=[];
    foreach($arr as $el){
        if(!empty($el)){
            $el=trim($el);
            if(!empty($el)){
            $newArr[]=$el;
            }
        }     
    }
    return $newArr
}