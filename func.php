<?php  


    $names=[
        'muslims'=>[
            'men'=>["habib", "kabib", "kabil"],
            'women'=> ["siuli", "romesa", "risma"]
        ],
        'hindu'=>[
            'men'=>["joy", "sriram"],
            'women'=>["poli", "joyeta","sirta"=>[
                'kirta'=> ["habi", "jani"]
            ]
        ]
    ]
];
echo $names['hindu']['women']['sirta']['kirta'][1];


