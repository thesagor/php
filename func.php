<?php  


    $names=[
        'muslims'=>[
            'men'=>["habib", "kabib", "kabil"],
            'women'=> ["siuli", "romesa", "risma"]
        ],
        'hindu'=>[
            'men'=>["joy", "sriram"],
            'women'=>["poli", "joyeta"]
        ]
    ];
print_r($names);
echo $names['muslims']['women'][2];


