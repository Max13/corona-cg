<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [],

    // Keep order
    'counters' => [
        'confirmed' => [
            'iconpath' => '/assets/build/img/feature/w2.png',
            'n' => 4,
            'text' => 'Confirmés',
        ],
        'recovered' => [
            'iconpath' => '/assets/build/img/feature/w4.png',
            'n' => 0,
            'text' => 'Traités',
        ],
        'deceased' => [
            'iconpath' => '/assets/build/img/feature/w3.png',
            'n' => 0,
            'text' => 'Décès',
        ],
    ],

    // Keep order
    'official_statements' => [
        [
            'name' => 'Déclaration n°4',
            'date' => '21 mars 2020',
            'filepath' => '/assets/build/files/Déclaration_du_gouvernement-4.pdf',
        ],[
            'name' => 'Déclaration n°3',
            'date' => '18 mars 2020',
            'filepath' => '/assets/build/files/Déclaration_du_gouvernement-3.pdf',
        ],[
            'name' => 'Déclaration n°2',
            'date' => '16 mars 2020',
            'filepath' => '/assets/build/files/Déclaration_du_gouvernement-2.pdf',
        ],[
            'name' => 'Déclaration n°1',
            'date' => '14 mars 2020',
            'filepath' => '/assets/build/files/Déclaration_du_gouvernement-1.pdf',
        ],
    ],

    // Keep order
    'preventions' => [
        'do' => [
            [
                'title' => 'Se laver fréquemment les mains',
                'text' => 'Effectuez ce lavage avec une solution hydroalcoolique ou avec l‘eau et du savon',
                'picto' => '/assets/build/img/prevention/p1.png',
            ],[
                'title' => 'Tousser ou éternuer à l‘abri',
                'text' => 'Evitez à tout prix que les gouttelettes ne touchent les personnes ou objets autour de vous',
                'picto' => '/assets/build/img/prevention/p2.png',
            ],[
                'title' => 'Éviter les contacts proches',
                'text' => 'Maintenez une « distance sociale » d‘au moins 1 mètre avec les autres personnes',
                'picto' => '/assets/build/img/prevention/p3.png',
            ],[
                'title' => 'Éviter de se toucher le visage',
                'text' => 'Ne touchez pas les yeux, le nez et la bouche pour réduire les risques de contagion',
                'picto' => '/assets/build/img/prevention/p4.png',
            ],
        ],

        'dont' => [
            [
                'title' => 'Ignorer les symptômes',
                'text' => 'Si vous présentez des signes de la COVID-19, restez chez vous et appelez le 3434',
                'picto' => '/assets/build/img/prevention/p5.png',
            ],[
                'title' => 'Ignorer les règles d‘hygiène',
                'text' => 'En plus du lavage des mains, observez à tout moment les règles d‘hygiène de base',
                'picto' => '/assets/build/img/prevention/p6.png',
            ],[
                'title' => 'Participer aux rassemblements',
                'text' => 'Sauf cas de force majeur, limitez vos déplacements et évitez les rencontres de groupe',
                'picto' => '/assets/build/img/prevention/p7.png',
            ],[
                'title' => 'Participer à la désinformation',
                'text' => 'De fausses informations sur le virus circulent, fiez-vous uniquement aux sites/médias fiables',
                'picto' => '/assets/build/img/prevention/p8.png',
            ],
        ],
    ],

    // Keep order
    'team' => [
        [
            'name' => 'Christ AZIKA-EROS',
            'avatar' => '/assets/build/img/team/christ.jpg',
            'links' => [
                'twitter' => 'https://twitter.com/supm4n',
                'facebook' => 'https://facebook.com/supm4n',
                'link' => 'http://mayelestrategy.com/',
                'youtube' => 'https://youtube.com/IamSupm4n',
            ],
        ],[
            'name' => 'Serge-Parfait GOMA',
            'avatar' => '/assets/build/img/team/serge.jpg',
            'links' => [
                //
            ],
        ],[
            'name' => 'Vérone MANKOU',
            'avatar' => '/assets/build/img/team/verone.jpg',
            'links' => [
                'twitter' => 'https://twitter.com/verone',
                'medium' => 'https://medium.com/@verone',
                'facebook' => 'https://www.facebook.com/VeroneMankou',
            ],
        ],[
            'name' => 'Adnan RIHAN',
            'avatar' => '/assets/build/img/team/adnan.jpg',
            'links' => [
                'link' => 'https://adnan.rihan.cg/',
            ],
        ],[
            'name' => 'Estime SANDZA',
            'avatar' => '/assets/build/img/team/estime.jpg',
            'links' => [
                //
            ],
        ],
    ],
];
