<?php  
    $vitamins=[
        'vitaminA'=> explode(', ', 'Alu, moris, jhinga'),
        'vitaminB'=> explode(', ', 'Ada, Jira, Gul moris'),
        'vitaminC'=> explode(', ', 'Potol, Dhonia, Cha, Singra')
    ];
    print_r($vitamins);
    array_push($vitamins['vitaminB'],'sukna moris');
    
    print_r($vitamins);
