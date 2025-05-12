<?php

namespace App\DataFixtures;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\Player;
use App\Entity\Role;
use App\Entity\Team;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private const ROLE_NAMES = ['Toplaner', 'Jungler', 'Midlaner', 'Botlaner', 'Support'];

    private const TEAMS = [
        [
            "name" => "Fnatic",
            "tag" => "FNC",
            "logo" => "image/Fnatic/logo_fnc.webp"
        ],
        [
            "name" => "G2",
            "tag" => "G2",
            "logo" => "image/G2/G2_logo.webp"
        ],
        [
            "name" => "GiantX",
            "tag" => "GX",
            "logo" => "image/GiantX/GIANTxlogo.webp"
        ],
        [
            "name" => "Karmine Corp",
            "tag" => "KC",
            "logo" => "image/KarmineCorp/Karmine_Corplogo.webp"
        ],
        [
            "name" => "Movistar KOI",
            "tag" => "MKOI",
            "logo" => "image/MovistarKoi/Movistar_KOIlogo.webp"
        ],
        [
            "name" => "Rogue",
            "tag" => "RGE",
            "logo" => "image/Rogue/Roguelogo.webp"
        ],
        [
            "name" => "SK Gaming",
            "tag" => "SK",
            "logo" => "image/SKGaming/SK_Gaminglogo.webp"
        ],
        [
            "name" => "Team BDS",
            "tag" => "BDS",
            "logo" => "image/TeamBDS/Team_BDSlogo.webp"
        ],
        [
            "name" => "Team Heretics",
            "tag" => "TH",
            "logo" => "image/TeamHeretics/Team_Hereticslog.webp"
        ],
        [
            "name" => "Team Vitality",
            "tag" => "VIT",
            "logo" => "image/TeamVitality/Team_Vitalitylogo.webp"
        ]
    ];
    private const PLAYERS = [
        [
            "player_name" => "Oscarinin",
            "firstname" => "Óscar",
            "lastname" => "Muñoz Jiménez",
            "nationality" => "Spain",
            "photo" => "image/Fnatic/FNC_Oscarinin.webp",
            "team_tag" => "FNC",
            "role_name" => "Toplaner"
        ],
        [
            "player_name" => "Razork",
            "firstname" => "Iván",
            "lastname" => "Martín Díaz",
            "nationality" => "Spain",
            "photo" => "image/Fnatic/FNC_Razork.webp",
            "team_tag" => "FNC",
            "role_name" => "Jungler"

        ],
        [
            "player_name" => "Humanoid",
            "firstname" => "Marek",
            "lastname" => "Brázda",
            "nationality" => "Czech Republic",
            "photo" => "image/Fnatic/FNC_Humanoid.webp",
            "team_tag" => "FNC",
            "role_name" => "Midlaner"
        ],
        [
            "player_name" => "Upset",
            "firstname" => "Elias",
            "lastname" => "Lipp",
            "nationality" => "Germany",
            "photo" => "image/Fnatic/FNC_Upset.webp",
            "team_tag" => "FNC",
            "role_name" => "Botlaner"

        ],
        [
            "player_name" => "Mikyx",
            "firstname" => "Mihael",
            "lastname" => "Mehle",
            "nationality" => "Slovenia",
            "photo" => "image/Fnatic/FNC_Mikyx.webp",
            "team_tag" => "FNC",
            "role_name" => "Support"
        ],
        [
            "player_name" => "BrokenBlade",
            "firstname" => "Sergen",
            "lastname" => "Çelik",
            "nationality" => "Germany",
            "photo" => "image/G2/G2_BrokenBlade.webp",
            "team_tag" => "G2",
            "role_name" => "Toplaner"
        ],
        [
            "player_name" => "SkewMond",
            "firstname" => "Rudy",
            "lastname" => "Semaan",
            "nationality" => "France",
            "photo" => "image/G2/G2_SkewMond.webp",
            "team_tag" => "G2",
            "role_name" => "Jungler"
        ],
        [
            "player_name" => "Caps",
            "firstname" => "Rasmus",
            "lastname" => "Borregaard Winther",
            "nationality" => "Denmark",
            "photo" => "image/G2/G2_Caps.webp",
            "team_tag" => "G2",
            "role_name" => "Midlaner"
        ],
        [
            "player_name" => "Hans Sama",
            "firstname" => "Steven",
            "lastname" => "Liv",
            "nationality" => "France",
            "photo" => "image/G2/G2_Hans_Sama.webp",
            "team_tag" => "G2",
            "role_name" => "Botlaner"
        ],
        [
            "player_name" => "Labrov",
            "firstname" => "Labros",
            "lastname" => "Papoutsakis",
            "nationality" => "Greece",
            "photo" => "image/G2/G2_Labrov.webp",
            "team_tag" => "G2",
            "role_name" => "Support"
        ],
        [
            "player_name" => "Lot",
            "firstname" => "Eren",
            "lastname" => "Yıldız",
            "nationality" => "Turkey",
            "photo" => "image/GiantX/GX_Lot.webp",
            "team_tag" => "GX",
            "role_name" => "Toplaner"
        ],
        [
            "player_name" => "ISMA",
            "firstname" => "Ismaïl",
            "lastname" => "Boualem",
            "nationality" => "France",
            "photo" => "image/GiantX/GX_ISMA.webp",
            "team_tag" => "GX",
            "role_name" => "Jungler"
        ],
        [
            "player_name" => "Jackies",
            "firstname" => "Adam",
            "lastname" => "Jeřábek",
            "nationality" => "Czech Republic",
            "photo" => "image/GiantX/GX_Jackies.webp",
            "team_tag" => "GX",
            "role_name" => "Midlaner"
        ],
        [
            "player_name" => "Noah",
            "firstname" => "Oh",
            "lastname" => "Hyeon-taek",
            "nationality" => "South Korea",
            "photo" => "image/GiantX/GX_Noah.webp",
            "team_tag" => "GX",
            "role_name" => "Botlaner"
        ],
        [
            "player_name" => "Jun",
            "firstname" => "Yoon",
            "lastname" => "Se-jun",
            "nationality" => "South Korea",
            "photo" => "image/GiantX/GX_Jun.webp",
            "team_tag" => "GX",
            "role_name" => "Support"
        ],
        [
            "player_name" => "Canna",
            "firstname" => "Kim",
            "lastname" => "Chang-dong",
            "nationality" => "South Korea",
            "photo" => "image/KarmineCorp/KC_Canna.webp",
            "team_tag" => "KC",
            "role_name" => "Toplaner"
        ],
        [
            "player_name" => "Yike",
            "firstname" => "Martin",
            "lastname" => "Sundelin",
            "nationality" => "Sweden",
            "photo" => "image/KarmineCorp/KC_Yike.webp",
            "team_tag" => "KC",
            "role_name" => "Jungler"
        ],
        [
            "player_name" => "Vladi",
            "firstname" => "Vladimiros",
            "lastname" => "Kourtidis",
            "nationality" => "Greece",
            "photo" => "image/KarmineCorp/KC_Vladi.webp",
            "team_tag" => "KC",
            "role_name" => "Midlaner"
        ],
        [
            "player_name" => "Caliste",
            "firstname" => "Caliste",
            "lastname" => "Henry-Hennebert",
            "nationality" => "France",
            "photo" => "image/KarmineCorp/KC_Caliste.webp",
            "team_tag" => "KC",
            "role_name" => "Botlaner"
        ],
        [
            "player_name" => "Targamas",
            "firstname" => "Raphaël",
            "lastname" => "Crabbé",
            "nationality" => "Belgium",
            "photo" => "image/KarmineCorp/KC_Targamas.webp",
            "team_tag" => "KC",
            "role_name" => "Support"
        ],
        [
            "player_name" => "Myrwn",
            "firstname" => "Alex",
            "lastname" => "Pastor Villarejo",
            "nationality" => "Spain",
            "photo" => "image/MovistarKoi/MKOI_Myrwn_.webp",
            "team_tag" => "MKOI",
            "role_name" => "Toplaner"
        ],
        [
            "player_name" => "Elyoya",
            "firstname" => "Javier",
            "lastname" => "Prades Batalla",
            "nationality" => "Spain",
            "photo" => "image/MovistarKoi/MKOI_Elyoya.webp",
            "team_tag" => "MKOI",
            "role_name" => "Jungler"
        ],
        [
            "player_name" => "Jojopyun",
            "firstname" => "Joseph",
            "lastname" => "Joon Pyun",
            "nationality" => "Canada",
            "photo" => "image/MovistarKoi/MKOI_Jojopyun.webp",
            "team_tag" => "MKOI",
            "role_name" => "Midlaner"
        ],
        [
            "player_name" => "Supa",
            "firstname" => "David",
            "lastname" => "Martínez García",
            "nationality" => "Spain",
            "photo" => "image/MovistarKoi/MKOI_Supa.webp",
            "team_tag" => "MKOI",
            "role_name" => "Botlaner"
        ],
        [
            "player_name" => "Alvaro",
            "firstname" => "Álvaro",
            "lastname" => "Fernández del Amo",
            "nationality" => "Spain",
            "photo" => "image/MovistarKoi/MKOI_Alvaro.webp",
            "team_tag" => "MKOI",
            "role_name" => "Support"
        ],
        [
            "player_name" => "Adam",
            "firstname" => "Adam",
            "lastname" => "Maanane",
            "nationality" => "France",
            "photo" => "image/Rogue/RGE_Adam.webp",
            "team_tag" => "RGE",
            "role_name" => "Toplaner"
        ],
        [
            "player_name" => "Malrang",
            "firstname" => "Kim",
            "lastname" => "Geun-seong",
            "nationality" => "South Korea",
            "photo" => "image/Rogue/RGE_Malrang.webp",
            "team_tag" => "RGE",
            "role_name" => "Jungler"
        ],
        [
            "player_name" => "Larssen",
            "firstname" => "Emil",
            "lastname" => "Larsson",
            "nationality" => "Sweden",
            "photo" => "image/Rogue/RGE_Larssen.webp",
            "team_tag" => "RGE",
            "role_name" => "Midlaner"
        ],
        [
            "player_name" => "Patrik",
            "firstname" => "Patrik",
            "lastname" => "Jírů",
            "nationality" => "Czech Republic",
            "photo" => "image/Rogue/RGE_Patrik.webp",
            "team_tag" => "RGE",
            "role_name" => "Botlaner"
        ],
        [
            "player_name" => "Execute",
            "firstname" => "Lee",
            "lastname" => "Jeong-hoon",
            "nationality" => "South Korea",
            "photo" => "image/Rogue/RGE_Execute.webp",
            "team_tag" => "RGE",
            "role_name" => "Support"
        ],
        [
            "player_name" => "JNX",
            "firstname" => "Janik",
            "lastname" => "Bartels",
            "nationality" => "Germany",
            "photo" => "image/SKGaming/SK_JNX.webp",
            "team_tag" => "SK",
            "role_name" => "Toplaner"
        ],
        [
            "player_name" => "Boukada",
            "firstname" => "Mehdi",
            "lastname" => "Lahlou",
            "nationality" => "France",
            "photo" => "image/SKGaming/SK_Boukada.webp",
            "team_tag" => "SK",
            "role_name" => "Jungler"
        ],
        [
            "player_name" => "RKR",
            "firstname" => "Steven",
            "lastname" => "Chen",
            "nationality" => "Germany",
            "photo" => "image/SKGaming/SK_RKR.webp",
            "team_tag" => "SK",
            "role_name" => "Midlaner"
        ],
        [
            "player_name" => "Keduii",
            "firstname" => "Tim",
            "lastname" => "Willers",
            "nationality" => "Germany",
            "photo" => "image/SKGaming/SK_Keduii.webp",
            "team_tag" => "SK",
            "role_name" => "Botlaner"
        ],
        [
            "player_name" => "Loopy",
            "firstname" => "Kim",
            "lastname" => "Dong-hyeon",
            "nationality" => "South Korea",
            "photo" => "image/SKGaming/SK_Loopy.webp",
            "team_tag" => "SK",
            "role_name" => "Support"
        ],
        [
            "player_name" => "Irrelevant",
            "firstname" => "Joel",
            "lastname" => "Miro Scharoll",
            "nationality" => "Germany",
            "photo" => "image/TeamBDS/BDS_Irrelevant.webp",
            "team_tag" => "BDS",
            "role_name" => "Toplaner"
        ],
        [
            "player_name" => "113",
            "firstname" => "Doğukan",
            "lastname" => "Balcı",
            "nationality" => "Turkey",
            "photo" => "image/TeamBDS/BDS_113.webp",
            "team_tag" => "BDS",
            "role_name" => "Jungler"
        ],
        [
            "player_name" => "nuc",
            "firstname" => "Ilias",
            "lastname" => "Bizriken",
            "nationality" => "France",
            "photo" => "image/TeamBDS/BDS_nuc.webp",
            "team_tag" => "BDS",
            "role_name" => "Midlaner"
        ],
        [
            "player_name" => "Ice",
            "firstname" => "Yoon",
            "lastname" => "Sang-hoon",
            "nationality" => "South Korea",
            "photo" => "image/TeamBDS/BDS_Ice.webp",
            "team_tag" => "BDS",
            "role_name" => "Botlaner"
        ],
        [
            "player_name" => "Parus",
            "firstname" => "Polat",
            "lastname" => "Furkan Çiçek",
            "nationality" => "Turkey",
            "photo" => "image/TeamBDS/BDS_Parus.webp",
            "team_tag" => "BDS",
            "role_name" => "Support"
        ],
        [
            "player_name" => "Carlsen",
            "firstname" => "Carl",
            "lastname" => "Ulsted Carlsen",
            "nationality" => "Denmark",
            "photo" => "image/TeamHeretics/TH_Carlsen.webp",
            "team_tag" => "TH",
            "role_name" => "Toplaner"
        ],
        [
            "player_name" => "Sheo",
            "firstname" => "Théo",
            "lastname" => "Borile",
            "nationality" => "France",
            "photo" => "image/TeamHeretics/TH_Sheo.webp",
            "team_tag" => "TH",
            "role_name" => "Jungler"
        ],
        [
            "player_name" => "Kamiloo",
            "firstname" => "Kamil",
            "lastname" => "Haudegond",
            "nationality" => "France",
            "photo" => "image/TeamHeretics/TH_Kamiloo.webp",
            "team_tag" => "TH",
            "role_name" => "Midlaner"
        ],
        [
            "player_name" => "Flakked",
            "firstname" => "Víctor",
            "lastname" => "Lirola Tortosa",
            "nationality" => "Spain",
            "photo" => "image/TeamHeretics/TH_Flakked.webp",
            "team_tag" => "TH",
            "role_name" => "Botlaner"
        ],
        [
            "player_name" => "Stend",
            "firstname" => "Paul",
            "lastname" => "Lardin",
            "nationality" => "France",
            "photo" => "image/TeamHeretics/TH_Stend.webp",
            "team_tag" => "TH",
            "role_name" => "Support"
        ],
        [
            "player_name" => "Naak Nako",
            "firstname" => "Kaan",
            "lastname" => "Okan",
            "nationality" => "Turkey",
            "photo" => "image/TeamVitality/VIT_Naak_Nako.webp",
            "team_tag" => "VIT",
            "role_name" => "Toplaner"
        ],
        [
            "player_name" => "Lyncas",
            "firstname" => "Linas",
            "lastname" => "Nauncikas",
            "nationality" => "Lituania",
            "photo" => "image/TeamVitality/VIT_Lyncas.webp",
            "team_tag" => "VIT",
            "role_name" => "Jungler"
        ],
        [
            "player_name" => "Czajek",
            "firstname" => "Mateusz",
            "lastname" => "Czajka",
            "nationality" => "Poland",
            "photo" => "image/TeamVitality/VIT_Czajek.webp",
            "team_tag" => "VIT",
            "role_name" => "Midlaner"
        ],
        [
            "player_name" => "Carzzy",
            "firstname" => "Matyáš",
            "lastname" => "Orság",
            "nationality" => "Czech Republic",
            "photo" => "image/TeamVitality/VIT_Carzzy.webp",
            "team_tag" => "VIT",
            "role_name" => "Botlaner"
        ],
        [
            "player_name" => "Nisqy",
            "firstname" => "Yasin",
            "lastname" => "Dinçer",
            "nationality" => "Belgium",
            "photo" => "image/TeamVitality/VIT_Nisqy.webp",
            "team_tag" => "VIT",
            "role_name" => "Support"
        ]
    ];
  public function __construct(private UserPasswordHasherInterface $hasher)
  {
  }
    public function load(ObjectManager $manager): void
    {
        $roles = [];

        foreach (self::ROLE_NAMES as $roleName) {
            $role = new Role();
            $role->setName($roleName);

            $manager->persist($role);

            $roles[$roleName] = $role;
        }

        $teams = [];

        foreach (self::TEAMS as $oneTeam) {
            $team = new Team();
            $team
                ->setName($oneTeam["name"])
                ->setTag($oneTeam["tag"])
                ->setLogo($oneTeam["logo"]);

            $manager->persist($team);

            $teams[$oneTeam['tag']] = $team;
        }

        foreach (self::PLAYERS as $onePlayer) {
            $player = new Player();
            $player
                ->setPlayerName($onePlayer["player_name"])
                ->setFirstName($onePlayer["firstname"])
                ->setLastName($onePlayer["lastname"])
                ->setNationality($onePlayer["nationality"])
                ->setPhoto($onePlayer["photo"])

                ->setTeam($teams[$onePlayer['team_tag']])
                ->setRole($roles[$onePlayer['role_name']]);

            $manager->persist($player);
        }

        $regularUser = new User();
        $regularUser
            ->setEmail('test@test.com')
            ->setPassword($this->hasher->hashPassword($regularUser, 'test'));

        $manager->persist($regularUser);

        $adminUser = new User();
        $adminUser
            ->setEmail('admintest@mtest.com')
            ->setRoles(['ROLE_ADMIN'])
            ->setPassword($this->hasher->hashPassword($adminUser, 'test'));

        $manager->persist($adminUser);

        $manager->flush();
    }
}
