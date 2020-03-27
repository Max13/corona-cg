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
    'team' => [
        [
            'name' => 'Christ AZIKA-EROS',
            'links' => [
                'facebook' => 'https://facebook.com/supm4n',
                'twitter' => 'https://twitter.com/supm4n',
            ],
        ],[
            'name' => 'Serge-Parfait GOMA',
            'links' => [
                //
            ],
        ],[
            'name' => 'Vérone MANKOU',
            'links' => [
                'twitter' => 'https://twitter.com/verone',
                'medium' => 'https://medium.com/@verone',
                'facebook' => 'https://www.facebook.com/VeroneMankou',
            ],
        ],[
            'name' => 'Adnan RIHAN',
            'links' => [
                'link' => 'https://adnan.rihan.cg/',
            ],
        ],[
            'name' => 'Estime SANDZA',
            'links' => [
                //
            ],
        ],
    ],
];
