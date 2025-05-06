<?php

namespace App\DataFixtures;

use App\Entity\Player;
use App\Entity\Role;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private const ROLE_NAMES = ['Toplaner', 'Jungler', 'Midlaner', 'Botlaner', 'Support'];

    private const FNC_PLAYERS = [
        [
            "player_name" => "Oscarinin",
            "firstname" => "Óscar",
            "lastname" => "Muñoz Jiménez",
            "nationality" => "Spain",
            "photo" => "assets\image\Fnatic\FNC_Oscarinin.webp"
        ],
        [
            "player_name" => "Razork",
            "firstname" => "Iván",
            "lastname" => "Martín Díaz",
            "nationality" => "Spain",
            "photo" => "assets\image\Fnatic\FNC_Razork.webp"
        ],
        [
            "player_name" => "Humanoid",
            "firstname" => "Marek",
            "lastname" => "Brázda",
            "nationality" => "Czech Republic",
            "photo" => "assets\image\Fnatic\FNC_Humanoid.webp"
        ],
        [
            "player_name" => "Upset",
            "firstname" => "Elias",
            "lastname" => "Lipp",
            "nationality" => "Germany",
            "photo" => "assets\image\Fnatic\FNC_Upset.webp"

        ],
        [
            "player_name" => "Mikyx",
            "firstname" => "Mihael",
            "lastname" => "Mehle",
            "nationality" => "Slovenia",
            "photo" => "assets\image\Fnatic\FNC_Mikyx.webp"
        ]
    ];
    private const G2_PLAYERS = [
        [
            "player_name" => "BrokenBlade",
            "firstname" => "Sergen",
            "lastname" => "Çelik",
            "nationality" => "Germany",
            "photo" => "assets\image\G2\G2_BrokenBlade.webp"
        ],
        [
            "player_name" => "SkewMond",
            "firstname" => "Rudy",
            "lastname" => "Semaan",
            "nationality" => "France",
            "photo" => "assets\image\G2\G2_SlewMond.webp"
        ],
        [
            "player_name" => "Caps",
            "firstname" => "Rasmus",
            "lastname" => "Borregaard Winther",
            "nationality" => "Denmark",
            "photo" => "assets\image\G2\G2_Caps.webp"
        ],
        [
            "player_name" => "Hans Sama",
            "firstname" => "Steven",
            "lastname" => "Liv",
            "nationality" => "France",
            "photo" => "assets\image\G2\G2_Hans_Sama.webp"
        ],
        [
            "player_name" => "Labrov",
            "firstname" => "Labros",
            "lastname" => "Papoutsakis",
            "nationality" => "Greece",
            "photo" => "assets\image\G2\G2_Labrov.webp"
        ]
    ];

    private const GX_PLAYERS = [
        [
            "player_name" => "Lot",
            "firstname" => "Eren",
            "lastname" => "Yıldız",
            "nationality" => "Turkey",
            "photo" => "assets\image\GiantX\GX_Lot.webp"
        ],
        [
            "player_name" => "ISMA",
            "firstname" => "Ismaïl",
            "lastname" => "Boualem",
            "nationality" => "France",
            "photo" => "assets\image\GiantX\GX_ISMA.webp"
        ],
        [
            "player_name" => "Jackies",
            "firstname" => "Adam",
            "lastname" => "Jeřábek",
            "nationality" => "Czech Republic",
            "photo" => "assets\image\GiantX\GX_Jackies.webp"
        ],
        [
            "player_name" => "Noah",
            "firstname" => "Oh",
            "lastname" => "Hyeon-taek",
            "nationality" => "South Korea",
            "photo" => "assets\image\GiantX\GX_Noah.webp"
        ],
        [
            "player_name" => "Jun",
            "firstname" => "Yoon",
            "lastname" => "Se-jun",
            "nationality" => "South Korea",
            "photo" => "assets\image\GiantX\GX_Jun.webp"
        ]
    ];

    private const KC_PLAYERS = [
        [
            "player_name" => "Canna",
            "firstname" => "Kim",
            "lastname" => "Chang-dong",
            "nationality" => "South Korea",
            "photo" => "assets\image\KarminCorp\KC_Canna.webp"
        ],
        [
            "player_name" => "Yike",
            "firstname" => "Martin",
            "lastname" => "Sundelin",
            "nationality" => "Sweden",
            "photo" => "assets\image\KarminCorp\KC_Yike.webp"
        ],
        [
            "player_name" => "Vladi",
            "firstname" => "Vladimiros",
            "lastname" => "Kourtidis",
            "nationality" => "Greece",
            "photo" => "assets\image\KarminCorp\KC_Vladi.webp"
        ],
        [
            "player_name" => "Caliste",
            "firstname" => "Caliste",
            "lastname" => "Henry-Hennebert",
            "nationality" => "France",
            "photo" => "assets\image\KarminCorp\KC_Caliste.webp"
        ],
        [
            "player_name" => "Targamas",
            "firstname" => "Raphaël",
            "lastname" => "Crabbé",
            "nationality" => "Belgium",
            "photo" => "assets\image\KarminCorp\KC_Targamas.webp"
        ]
    ];

    private const MKOI_PLAYERS = [
        [
            "player_name" => "Myrwn",
            "firstname" => "Alex",
            "lastname" => "Pastor Villarejo",
            "nationality" => "Spain",
            "photo" => "assets\image\MovistarKoi\MKOI_Myrwn.webp"
        ],
        [
            "player_name" => "Elyoya",
            "firstname" => "Javier",
            "lastname" => "Prades Batalla",
            "nationality" => "Spain",
            "photo" => "assets\image\MovistarKoi\MKOI_Elyoya.webp"
        ],
        [
            "player_name" => "Jojopyun",
            "firstname" => "Joseph",
            "lastname" => "Joon Pyun",
            "nationality" => "Canada",
            "photo" => "assets\image\MovistarKoi\MKOI_Jojopyun.webp"
        ],
        [
            "player_name" => "Supa",
            "firstname" => "David",
            "lastname" => "Martínez García",
            "nationality" => "Spain",
            "photo" => "assets\image\MovistarKoi\MKOI_Supa.webp"
        ],
        [
            "player_name" => "Alvaro",
            "firstname" => "Álvaro",
            "lastname" => "Fernández del Amo",
            "nationality" => "Spain",
            "photo" => "assets\image\MovistarKoi\MKOI_Alvaro.webp"
        ]
    ];

    public function load(ObjectManager $manager): void
    {
        $roles = [];

        foreach (self::ROLE_NAMES as $roleName) {
            $role = new Role();
            $role->setName($roleName);
            $manager->persist($role);
            $roles[] = $role;
        }

        foreach (self::FNC_PLAYERS as $fncPlayer) {
            $player = new Player();
            $player
                ->setPlayerName($fncPlayer["player_name"])
                ->setFirstName($fncPlayer["firstname"])
                ->setLastName($fncPlayer["lastname"])
                ->setNationality($fncPlayer["nationality"])
                ->setPhoto($fncPlayer["photo"]);

            $manager->persist($player);
        }

        foreach (self::G2_PLAYERS as $g2Player) {
            $player = new Player();
            $player
                ->setPlayerName($g2Player["player_name"])
                ->setFirstName($g2Player["firstname"])
                ->setLastName($g2Player["lastname"])
                ->setNationality($g2Player["nationality"])
                ->setPhoto($g2Player["photo"]);

            $manager->persist($player);
        }

        foreach (self::GX_PLAYERS as $gxPlayer) {
            $player = new Player();
            $player
                ->setPlayerName($gxPlayer["player_name"])
                ->setFirstName($gxPlayer["firstname"])
                ->setLastName($gxPlayer["lastname"])
                ->setNationality($gxPlayer["nationality"])
                ->setPhoto($gxPlayer["photo"]);

            $manager->persist($player);
        }

        foreach (self::KC_PLAYERS as $kcPlayer) {
            $player = new Player();
            $player
                ->setPlayerName($kcPlayer["player_name"])
                ->setFirstName($kcPlayer["firstname"])
                ->setLastName($kcPlayer["lastname"])
                ->setNationality($kcPlayer["nationality"])
                ->setPhoto($kcPlayer["photo"]);

            $manager->persist($player);
        }

        foreach (self::MKOI_PLAYERS as $mkoiPlayer) {
            $player = new Player();
            $player
                ->setPlayerName($mkoiPlayer["player_name"])
                ->setFirstName($mkoiPlayer["firstname"])
                ->setLastName($mkoiPlayer["lastname"])
                ->setNationality($mkoiPlayer["nationality"])
                ->setPhoto($mkoiPlayer["photo"]);

            $manager->persist($player);
        }

        
        $manager->flush();
    }
}
