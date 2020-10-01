<?php
return[
//MainController //- главный контроллер главной стоницы
    ''=>[
        'controller'=>'main',//controller класс
        'action'=>'index',//action метод
    ],
    'main/avtoriz'=>[
        'controller'=>'main',//controller класс
        'action'=>'avtoriz',//action метод
    ],
    'main/registr'=>[
        'controller'=>'main',//controller класс
        'action'=>'registr',//action метод
    ],

    'main/vvodparol'=>[
    'controller'=>'main',//controller класс
    'action'=>'vvodparol',//action метод
],

     'polzavotel/prover'=>[
    'controller'=>'polzavotel',//controller класс
    'action'=>'prover',//action метод
],

        'polzavotel/deleteSES'=>[
    'controller'=>'polzavotel',//controller класс
    'action'=>'deleteSES',//action метод
],
    'polzavotel/vhod'=>[
    'controller'=>'polzavotel',//controller класс
    'action'=>'vhod',//action метод
],
    'polzavotel/zareg'=>[
        'controller'=>'polzavotel',//controller класс
        'action'=>'zareg',//action метод
    ],

    'polzavotel/lichka'=>[
        'controller'=>'polzavotel',//controller класс
        'action'=>'lichka',//action метод
    ],

    'polzavotel/assortiment'=>[
        'controller'=>'polzavotel',//controller класс
        'action'=>'assortiment',//action метод
    ],
    'polzavotel/assortiment/{id:\d+}'=>[
        'controller'=>'polzavotel',//controller класс
        'action'=>'assortiment',//action метод
    ],
    'polzavotel/korzena'=>[///{a:\d+}
        'controller'=>'polzavotel',//controller класс
        'action'=>'korzena',//action метод
    ],
    'polzavotel/zakaz'=>[
        'controller'=>'polzavotel',//controller класс
        'action'=>'zakaz',//action метод
    ],
    'polzavotel/ajax'=>[///{a:\d+}
        'controller'=>'polzavotel',//controller класс
        'action'=>'ajax',//action метод
    ],
    'polzavotel/history'=>[
        'controller'=>'polzavotel',//controller класс
        'action'=>'history',//action метод
    ],
    'polzavotel/chat'=>[
        'controller'=>'polzavotel',//controller класс
        'action'=>'chat',//action метод
    ],
    'polzavotel/chat_dobav'=>[
        'controller'=>'polzavotel',//controller класс
        'action'=>'chat_dobav',//action метод
    ],
    'polzavotel/chat1'=>[
        'controller'=>'polzavotel',//controller класс
        'action'=>'chat1',//action метод
    ],
    'admin'=>[
        'controller'=>'admin',//controller класс
        'action'=>'index',//action метод
        ],
    'admin/zagruz'=>[
        'controller'=>'admin',//controller класс
        'action'=>'zagruz',//action метод
    ],
    'admin/zagrstat'=>[
        'controller'=>'admin',//controller класс
        'action'=>'zagrstat',//action метод
    ],
    'admin/zakazes'=>[
        'controller'=>'admin',//controller класс
        'action'=>'zakazes',//action метод
    ],
    'admin/delete'=>[
        'controller'=>'admin',//controller класс
        'action'=>'delete',//action метод
    ],

    ];

