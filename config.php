<?php

use Carbon\Carbon;

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [],

    // Keep order
    'counters' => [
        'confirmed' => [
            'iconpath' => '/assets/build/img/feature/w2.png',
            'n' => 60,
            'text' => 'Confirmés',
        ],
        'recovered' => [
            'iconpath' => '/assets/build/img/feature/w4.png',
            'n' => 5,
            'text' => 'Guéris',
        ],
        'deceased' => [
            'iconpath' => '/assets/build/img/feature/w3.png',
            'n' => 5,
            'text' => 'Décès',
        ],
    ],

    'locations' => [
        'Brazzaville' => [
            'coordinates' => [-4.27024, 15.27065],
            'count' => 42,
            'recovered' => 5,
        ],
        'Pointe-Noire' => [
            'coordinates' => [-4.79884, 11.85013],
            'count' => 18,
            'recovered' => 0,
        ],
        'Dolisie' => [
            'coordinates' => [-4.20077, 12.63586],
            'count' => 0,
            'recovered' => 0,
        ],
        'Nkayi' => [
            'coordinates' => [-4.1822, 13.26711],
            'count' => 0,
            'recovered' => 0,
        ],
        'Louandjili' => [
            'coordinates' => [-4.76706, 11.8547],
            'count' => 0,
            'recovered' => 0,
        ],
        'Ouésso' => [
            'coordinates' => [1.61413, 16.03257],
            'count' => 0,
            'recovered' => 0,
        ],
        'Madingou' => [
            'coordinates' => [-4.16624, 13.53619],
            'count' => 0,
            'recovered' => 0,
        ],
        'Owando' => [
            'coordinates' => [-0.49474, 15.86949],
            'count' => 0,
            'recovered' => 0,
        ],
        'Gamboma' => [
            'coordinates' => [-2.08333, 14.66578],
            'count' => 0,
            'recovered' => 0,
        ],
        'Impfondo' => [
            'coordinates' => [1.60416, 18.01517],
            'count' => 0,
            'recovered' => 0,
        ],
        'Sibiti' => [
            'coordinates' => [-3.68307, 13.33208],
            'count' => 0,
            'recovered' => 0,
        ],
        'Mossendjo' => [
            'coordinates' => [-2.96327, 12.72064],
            'count' => 0,
            'recovered' => 0,
        ],
        'Kinkala' => [
            'coordinates' => [-4.35908, 14.75389],
            'count' => 0,
            'recovered' => 0,
        ],
        'Makoua' => [
            'coordinates' => [-0.00631, 15.57827],
            'count' => 0,
            'recovered' => 0,
        ],
        'Oyo' => [
            'coordinates' => [-1.1576484, 15.9596584],
            'count' => 0,
            'recovered' => 0,
        ],
    ],

    // Keep order
    'official_statements' => [
        [
            'name' => 'Déclaration n°11',
            'date' => Carbon::parse('2020-04-07'),
            'filepath' => 'https://www.facebook.com/VoxCongo/videos/213574836404223/',
            'icon' => '/assets/build/img/icon/play.svg',
        ],[
            'name' => 'Déclaration n°10',
            'date' => Carbon::parse('2020-04-04'),
            'filepath' => 'https://www.facebook.com/VoxCongo/videos/209670493625504/',
            'icon' => '/assets/build/img/icon/play.svg',
        ],[
            'name' => 'Déclaration n°9',
            'date' => Carbon::parse('2020-04-02'),
            'filepath' => 'https://www.facebook.com/676971998983464/posts/4130740636939899/',
            'icon' => '/assets/build/img/icon/play.svg',
        ],[
            'name' => 'Déclaration n°8',
            'date' => Carbon::parse('2020-03-31'),
            'filepath' => 'http://www.adiac-congo.com/content/pandemie-le-congo-enregistre-ses-deux-premiers-deces-dus-au-coivd-19-114957#node-114957',
            'icon' => '/assets/build/img/icon/news.svg',
        ],[
            'name' => 'Déclaration n°7',
            'date' => Carbon::parse('2020-03-29'),
            'filepath' => 'https://twitter.com/CongoNN/status/1244247971677470724',
            'icon' => '/assets/build/img/icon/twitter.svg',
        ],[
            'name' => 'Déclaration n°6',
            'date' => Carbon::parse('2020-03-28'),
            'filepath' => 'https://www.facebook.com/VoxCongo/videos/3535252119882262/',
            'icon' => '/assets/build/img/icon/play.svg',
        ],[
            'name' => 'Déclaration n°5',
            'date' => Carbon::parse('2020-03-27'),
            'filepath' => 'https://www.facebook.com/VoxCongo/videos/687052672045469/',
            'icon' => '/assets/build/img/icon/play.svg',
        ],[
            'name' => 'Déclaration n°4',
            'date' => Carbon::parse('2020-03-21'),
            'filepath' => '/assets/build/files/Declaration_du_gouvernement-4.pdf',
            'icon' => '/assets/build/img/icon/pdf.svg',
        ],[
            'name' => 'Déclaration n°3',
            'date' => Carbon::parse('2020-03-18'),
            'filepath' => '/assets/build/files/Declaration_du_gouvernement-3.pdf',
            'icon' => '/assets/build/img/icon/pdf.svg',
        ],[
            'name' => 'Déclaration n°2',
            'date' => Carbon::parse('2020-03-16'),
            'filepath' => '/assets/build/files/Declaration_du_gouvernement-2.pdf',
            'icon' => '/assets/build/img/icon/pdf.svg',
        ],[
            'name' => 'Déclaration n°1',
            'date' => Carbon::parse('2020-03-14'),
            'filepath' => '/assets/build/files/Declaration_du_gouvernement-1.pdf',
            'icon' => '/assets/build/img/icon/pdf.svg',
        ],
    ],

    // Keep order
    'preventions' => [
        'do' => [
            [
                'title' => 'Se laver fréquemment les mains',
                'text' => 'Effectuez ce lavage avec une solution hydroalcoolique ou avec de l‘eau et du savon',
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
            'name' => 'Adnan',
            'avatar' => '/assets/build/img/team/adnan.jpg',
            'links' => [
                'twitter' => 'https://twitter.com/_Max13',
                'link' => 'https://adnan.rihan.cg/',
            ],
        ],[
            'name' => 'Christ',
            'avatar' => '/assets/build/img/team/christ.jpg',
            'links' => [
                'twitter' => 'https://twitter.com/supm4n',
                'facebook' => 'https://facebook.com/supm4n',
                'youtube' => 'https://youtube.com/IamSupm4n',
            ],
        ],[
            'name' => 'Daniella',
            'avatar' => '/assets/build/img/team/daniella.jpg',
            'links' => [
                'linkedin' => 'https://linkedin.com/in/samael-daniella-evoko-230949137',
                'twitter' => 'https://twitter.com/Mael_Dani',
            ],
        ],[
            'name' => 'Estime',
            'avatar' => '/assets/build/img/team/estime.jpg',
            'links' => [
                'linkedin' => 'https://linkedin.com/in/est1me',
                'twitter' => 'https://twitter.com/est1me',
                'facebook' => 'https://facebook.com/est1me',
            ],
        ],[
            'name' => 'Serge-Parfait',
            'avatar' => '/assets/build/img/team/serge.jpg',
            'links' => [
                'facebook' => 'https://www.facebook.com/sergeparfait.goma',
                'linkedin' => 'https://www.linkedin.com/in/serge-parfait-goma-7ab10177',
            ],
        ],[
            'name' => 'Vérone',
            'avatar' => '/assets/build/img/team/verone.jpg',
            'links' => [
                'twitter' => 'https://twitter.com/verone',
                'medium' => 'https://medium.com/@verone',
                'facebook' => 'https://www.facebook.com/VeroneMankou',
            ],
        ],
    ],
];
