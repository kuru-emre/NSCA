<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class TestData extends Seeder
{


    public function run()
    {
        $password = service('passwords');

        $testDataUsers = [
            [
                'email'      => 'manager@gmail.com',
                'first_name' => 'Manager',
                'last_name'  => 'User',
                'phone'      => '0000000000',
                'street'     => '6299 South st.',
                'city'       => 'Halifax',
                'country'    => 'Canada',
                'postal'     => 'B3H4R2',
                'active'     => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'email'      => 'player@gmail.com',
                'first_name' => 'Player',
                'last_name'  => 'User',
                'phone'      => '0000000000',
                'street'     => '6299 South st.',
                'city'       => 'Halifax',
                'country'    => 'Canada',
                'postal'     => 'B3H4R2',
                'active'     => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'email'      => 'umpire@gmail.com',
                'first_name' => 'Umpire',
                'last_name'  => 'User',
                'phone'      => '0000000000',
                'street'     => '6299 South st.',
                'city'       => 'Halifax',
                'country'    => 'Canada',
                'postal'     => 'B3H4R2',
                'active'     => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'email'      => 'guest@gmail.com',
                'first_name' => 'Guest',
                'last_name'  => 'User',
                'phone'      => '0000000000',
                'street'     => '6299 South st.',
                'city'       => 'Halifax',
                'country'    => 'Canada',
                'postal'     => 'B3H4R2',
                'active'     => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'email'      => 'test1@email.com',
                'first_name' => 'Test',
                'last_name'  => 'User1',
                'phone'      => '0000000000',
                'street'     => '6299 South st.',
                'city'       => 'Halifax',
                'country'    => 'Canada',
                'postal'     => 'B3H4R2',
                'active'     => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'email'      => 'test2@email.com',
                'first_name' => 'Test',
                'last_name'  => 'User2',
                'phone'      => '0000000000',
                'street'     => '6299 South st.',
                'city'       => 'Halifax',
                'country'    => 'Canada',
                'postal'     => 'B3H4R2',
                'active'     => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'email'      => 'test3@email.com',
                'first_name' => 'Test',
                'last_name'  => 'User3',
                'phone'      => '0000000000',
                'street'     => '6299 South st.',
                'city'       => 'Halifax',
                'country'    => 'Canada',
                'postal'     => 'B3H4R2',
                'active'     => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'email'      => 'test4@email.com',
                'first_name' => 'Test',
                'last_name'  => 'User4',
                'phone'      => '0000000000',
                'street'     => '6299 South st.',
                'city'       => 'Halifax',
                'country'    => 'Canada',
                'postal'     => 'B3H4R2',
                'active'     => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'email'      => 'test5@email.com',
                'first_name' => 'Test',
                'last_name'  => 'User5',
                'phone'      => '0000000000',
                'street'     => '6299 South st.',
                'city'       => 'Halifax',
                'country'    => 'Canada',
                'postal'     => 'B3H4R2',
                'active'     => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'email'      => 'test6@email.com',
                'first_name' => 'Test',
                'last_name'  => 'User6',
                'phone'      => '0000000000',
                'street'     => '6299 South st.',
                'city'       => 'Halifax',
                'country'    => 'Canada',
                'postal'     => 'B3H4R2',
                'active'     => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'email'      => 'test7@email.com',
                'first_name' => 'Test',
                'last_name'  => 'User7',
                'phone'      => '0000000000',
                'street'     => '6299 South st.',
                'city'       => 'Halifax',
                'country'    => 'Canada',
                'postal'     => 'B3H4R2',
                'active'     => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'email'      => 'test8@email.com',
                'first_name' => 'Test',
                'last_name'  => 'User8',
                'phone'      => '0000000000',
                'street'     => '6299 South st.',
                'city'       => 'Halifax',
                'country'    => 'Canada',
                'postal'     => 'B3H4R2',
                'active'     => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'email'      => 'test9@email.com',
                'first_name' => 'Test',
                'last_name'  => 'User9',
                'phone'      => '0000000000',
                'street'     => '6299 South st.',
                'city'       => 'Halifax',
                'country'    => 'Canada',
                'postal'     => 'B3H4R2',
                'active'     => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ]
        ];
        $this->db->table('nsca_users')->insertBatch($testDataUsers);

        $testDataAuthIdentities = [
            [
                'user_id'      => 2,
                'type'         => 'email_password',
                'name'         => null,
                'secret'       => 'manager@gmail.com',
                'secret2'      => $password->hash('Password2023!'),
                'expires'      => null,
                'extra'        => null,
                'force_reset'  => 0,
                'last_used_at' => null,
                'created_at'   => Time::now(),
                'updated_at'   => Time::now()
            ],
            [
                'user_id'      => 3,
                'type'         => 'email_password',
                'name'         => null,
                'secret'       => 'player@gmail.com',
                'secret2'      => $password->hash('Password2023!'),
                'expires'      => null,
                'extra'        => null,
                'force_reset'  => 0,
                'last_used_at' => null,
                'created_at'   => Time::now(),
                'updated_at'   => Time::now()
            ],
            [
                'user_id'      => 4,
                'type'         => 'email_password',
                'name'         => null,
                'secret'       => 'umpire@gmail.com',
                'secret2'      => $password->hash('Password2023!'),
                'expires'      => null,
                'extra'        => null,
                'force_reset'  => 0,
                'last_used_at' => null,
                'created_at'   => Time::now(),
                'updated_at'   => Time::now()
            ],
            [
                'user_id'      => 5,
                'type'         => 'email_password',
                'name'         => null,
                'secret'       => 'guest@gmail.com',
                'secret2'      => $password->hash('Password2023!'),
                'expires'      => null,
                'extra'        => null,
                'force_reset'  => 0,
                'last_used_at' => null,
                'created_at'   => Time::now(),
                'updated_at'   => Time::now()
            ],
            [
                'user_id'      => 6,
                'type'         => 'email_password',
                'name'         => null,
                'secret'       => 'test1@email.com',
                'secret2'      => $password->hash('Password2023!'),
                'expires'      => null,
                'extra'        => null,
                'force_reset'  => 0,
                'last_used_at' => null,
                'created_at'   => Time::now(),
                'updated_at'   => Time::now()
            ],
            [
                'user_id'      => 7,
                'type'         => 'email_password',
                'name'         => null,
                'secret'       => 'test2@email.com',
                'secret2'      => $password->hash('Password2023!'),
                'expires'      => null,
                'extra'        => null,
                'force_reset'  => 0,
                'last_used_at' => null,
                'created_at'   => Time::now(),
                'updated_at'   => Time::now()
            ],
            [
                'user_id'      => 8,
                'type'         => 'email_password',
                'name'         => null,
                'secret'       => 'test3@email.com',
                'secret2'      => $password->hash('Password2023!'),
                'expires'      => null,
                'extra'        => null,
                'force_reset'  => 0,
                'last_used_at' => null,
                'created_at'   => Time::now(),
                'updated_at'   => Time::now()
            ],
            [
                'user_id'      => 9,
                'type'         => 'email_password',
                'name'         => null,
                'secret'       => 'test4@email.com',
                'secret2'      => $password->hash('Password2023!'),
                'expires'      => null,
                'extra'        => null,
                'force_reset'  => 0,
                'last_used_at' => null,
                'created_at'   => Time::now(),
                'updated_at'   => Time::now()
            ],
            [
                'user_id'      => 10,
                'type'         => 'email_password',
                'name'         => null,
                'secret'       => 'test5@email.com',
                'secret2'      => $password->hash('Password2023!'),
                'expires'      => null,
                'extra'        => null,
                'force_reset'  => 0,
                'last_used_at' => null,
                'created_at'   => Time::now(),
                'updated_at'   => Time::now()
            ],
            [
                'user_id'      => 11,
                'type'         => 'email_password',
                'name'         => null,
                'secret'       => 'test6@email.com',
                'secret2'      => $password->hash('Password2023!'),
                'expires'      => null,
                'extra'        => null,
                'force_reset'  => 0,
                'last_used_at' => null,
                'created_at'   => Time::now(),
                'updated_at'   => Time::now()
            ],
            [
                'user_id'      => 12,
                'type'         => 'email_password',
                'name'         => null,
                'secret'       => 'test7@email.com',
                'secret2'      => $password->hash('Password2023!'),
                'expires'      => null,
                'extra'        => null,
                'force_reset'  => 0,
                'last_used_at' => null,
                'created_at'   => Time::now(),
                'updated_at'   => Time::now()
            ],
            [
                'user_id'      => 13,
                'type'         => 'email_password',
                'name'         => null,
                'secret'       => 'test8@email.com',
                'secret2'      => $password->hash('Password2023!'),
                'expires'      => null,
                'extra'        => null,
                'force_reset'  => 0,
                'last_used_at' => null,
                'created_at'   => Time::now(),
                'updated_at'   => Time::now()
            ],
            [
                'user_id'      => 14,
                'type'         => 'email_password',
                'name'         => null,
                'secret'       => 'test9@email.com',
                'secret2'      => $password->hash('Password2023!'),
                'expires'      => null,
                'extra'        => null,
                'force_reset'  => 0,
                'last_used_at' => null,
                'created_at'   => Time::now(),
                'updated_at'   => Time::now()
            ]
        ];
        $this->db->table('auth_identities')->insertBatch($testDataAuthIdentities);

        $testDataAuthGroups = [
            [
                'user_id'    => 2,
                'group'      => 'manager',
                'created_at' => Time::now(),
            ],
            [
                'user_id'    => 3,
                'group'      => 'player',
                'created_at' => Time::now(),
            ],
            [
                'user_id'    => 4,
                'group'      => 'umpire',
                'created_at' => Time::now(),
            ],
            [
                'user_id'    => 5,
                'group'      => 'guest',
                'created_at' => Time::now(),
            ],
            [
                'user_id'    => 6,
                'group'      => 'player',
                'created_at' => Time::now(),
            ],
            [
                'user_id'    => 7,
                'group'      => 'player',
                'created_at' => Time::now(),
            ],
            [
                'user_id'    => 8,
                'group'      => 'player',
                'created_at' => Time::now(),
            ],
            [
                'user_id'    => 9,
                'group'      => 'player',
                'created_at' => Time::now(),
            ],
            [
                'user_id'    => 10,
                'group'      => 'player',
                'created_at' => Time::now(),
            ],
            [
                'user_id'    => 11,
                'group'      => 'player',
                'created_at' => Time::now(),
            ],
            [
                'user_id'    => 12,
                'group'      => 'player',
                'created_at' => Time::now(),
            ],
            [
                'user_id'    => 13,
                'group'      => 'player',
                'created_at' => Time::now(),
            ],
            [
                'user_id'    => 14,
                'group'      => 'player',
                'created_at' => Time::now(),
            ]
        ];
        $this->db->table('auth_groups_users')->insertBatch($testDataAuthGroups);

        $testDataClubs = [
            [
                'id' => 1,
                'name' => 'Halifax Cricket Club',
                'abbreviation' => 'HCC',
                'website' => NULL,
                'description' => NULL,
                'email' => 'halifaxcricketclub@gmail.com',
                'phone' => '403-702-1916',
                'facebook' => 'https://www.facebook.com/halifaxcricketclub/',
                'image' => NULL,
            ],
            [
                'id' => 2,
                'name' => 'East Coast Cricket Club',
                'abbreviation' => 'ECCC',
                'website' => 'https://eastcoastcricketclub.ca/',
                'description' => NULL,
                'email' => 'eastcoastcricketclub@gmail.com',
                'phone' => '902-789-6335',
                'facebook' => 'https://www.facebook.com/cricketclubofeastcoast/',
                'image' => NULL,
            ],
            [
                'id' => 3,
                'name' => 'Nova Scotia Avengers Cricket Club',
                'abbreviation' => 'Avengers',
                'website' => NULL,
                'description' => NULL,
                'email' => 'novascotiaavengers@gmail.com',
                'phone' => '709-699-8717',
                'facebook' => 'https://www.facebook.com/Nova-Scotia-Avengers-Cricket-Club-2214442235461792/',
                'image' => NULL,
            ],
            [
                'id' => 4,
                'name' => 'Halifax Titans Cricket Club',
                'abbreviation' => 'Titans',
                'website' => 'https://halifaxtitanscricketclub.com/',
                'description' => NULL,
                'email' => 'halifaxtitanscricketclub@gmail.com',
                'phone' => '902-414-5502',
                'facebook' => NULL,
                'image' => NULL,
            ]
        ];
        $this->db->table('nsca_clubs')->insertBatch($testDataClubs);

        $testDataTeams = [
            [
                'id' => 1,
                'clubID' => 1,
                'name' => 'Lions',
                'description' => 'Lions of Halifax',
                'image' => 'NovaScotiaWarriors.jpg'
            ],
            [
                'id' => 2,
                'clubID' => 2,
                'name' => 'Falcons',
                'description' => 'Falcons of Dartmouth',
                'image' => 'predators.jpg'
            ],
            [
                'id' => 3,
                'clubID' => 3,
                'name' => 'Tigers',
                'description' => 'Tigers of Bedford',
                'image' => 'NSAvengers.jpg'
            ]
        ];
        $this->db->table('nsca_teams')->insertBatch($testDataTeams);

        $testDataRegions = [
            [
                'id' => 1,
                'name' => 'Halifax',
                'address' => '123 Test Street',
                'description'   => 'Halifax region description.'
            ],
            [
                'id' => 2,
                'name' => 'Sackville',
                'address' => '123 Test Street',
                'description'   => 'Sackville region description.'
            ],
            [
                'id' => 3,
                'name' => 'Dartmouth',
                'address' => '123 Test Street',
                'description'   => 'Dartmouth region description.'
            ]
        ];
        $this->db->table('nsca_location')->insertBatch($testDataRegions);

        $testDataCommittees = [
            [
                'id' => 1,
                'name' => 'Test Committee 1',
                'description' => 'Test description.',
                'years' => '2023-2025'
            ],
            [
                'id' => 2,
                'name' => 'Test Committee 2',
                'description' => 'Test description.',
                'years' => '2022-2024'
            ]
        ];
        $this->db->table('nsca_committees')->insertBatch($testDataCommittees);

        $testDataCompetitionTypes = [
            [
                'id' => 1,
                'name' => 'Test Competition Type A',
                'description' => 'Test Competition Type A description.'
            ],
            [
                'id' => 2,
                'name' => 'Test Competition Type B',
                'description' => 'Test Competition Type B description.'
            ]
        ];
        $this->db->table('nsca_competition_type')->insertBatch($testDataCompetitionTypes);

        $testDataCompetitions = [
            [
                'id' => 1,
                'name' => 'Lions Against Snakes',
                'description' => 'Lions and Snakes face head on.',
                'compTypeID' => 1,
                'yearRunning' => 2022
            ]
        ];
        $this->db->table('nsca_competition')->insertBatch($testDataCompetitions);

        $testDataNews = [
            [
                'userID' => '1',
                'title' => 'erat neque',
                'content' => '<h4>This is an example news!&nbsp;</h4>
                <p><code>checking editor functions...</code></p>
                <p><img src="https://www.planetware.com/wpimages/2019/11/canada-in-pictures-beautiful-places-to-photograph-morraine-lake.jpg" alt="" width="242" height="161"></p>
                <p>&nbsp;</p>',
                'created_at' => Time::now(),

            ],
            [
                'userID' => '1',
                'title' => 'Duis dignissim',
                'content' => '<h4>This is an example news!&nbsp;</h4>
                <p><code>checking editor functions...</code></p>
                <p><img src="https://www.planetware.com/wpimages/2019/11/canada-in-pictures-beautiful-places-to-photograph-morraine-lake.jpg" alt="" width="242" height="161"></p>
                <p>&nbsp;</p>',
                'created_at' => Time::now(),
            ],
            [
                'userID' => '1',
                'title' => 'aliquet libero.',
                'content' => '<h4>This is an example news!&nbsp;</h4>
                <p><code>checking editor functions...</code></p>
                <p><img src="https://www.planetware.com/wpimages/2019/11/canada-in-pictures-beautiful-places-to-photograph-morraine-lake.jpg" alt="" width="242" height="161"></p>
                <p>&nbsp;</p>',
                'created_at' => Time::now(),
            ],
            [
                'userID' => '1',
                'title' => 'mauris, rhoncus',
                'content' => '<h4>This is an example news!&nbsp;</h4>
                <p><code>checking editor functions...</code></p>
                <p><img src="https://www.planetware.com/wpimages/2019/11/canada-in-pictures-beautiful-places-to-photograph-morraine-lake.jpg" alt="" width="242" height="161"></p>
                <p>&nbsp;</p>',
                'created_at' => Time::now(),
            ],
            [
                'userID' => '1',
                'title' => 'consequat nec,',
                'content' => '<h4>This is an example news!&nbsp;</h4>
                <p><code>checking editor functions...</code></p>
                <p><img src="https://www.planetware.com/wpimages/2019/11/canada-in-pictures-beautiful-places-to-photograph-morraine-lake.jpg" alt="" width="242" height="161"></p>
                <p>&nbsp;</p>',
                'created_at' => Time::now(),
            ]
        ];
        $this->db->table('nsca_news')->insertBatch($testDataNews);

        $testDataComments = [
            [
                'newsID' => '3',
                'userID' => '4',
                'comment' => 'consequat enim diam vel arcu. Curabitur',
                'created_at' => Time::now(),
            ],
            [
                'newsID' => '2',
                'userID' => '5',
                'comment' => 'consectetuer euismod est arcu',
                'created_at' => Time::now(),
            ],
            [
                'newsID' => '5',
                'userID' => '3',
                'comment' => 'feugiat. Sed nec metus',
                'created_at' => Time::now(),
            ],
            [
                'newsID' => '1',
                'userID' => '4',
                'comment' => 'est. Nunc ullamcorper, velit',
                'created_at' => Time::now(),
            ],
            [
                'newsID' => '1',
                'userID' => '4',
                'comment' => 'vel pede blandit',
                'created_at' => Time::now(),
            ]
        ];
        $this->db->table('nsca_news_comments')->insertBatch($testDataComments);

        $testDataAlerts = [
            [
                'id' => 1,
                'title' => 'No Games today!',
                'content' => 'No games will be played today due to the weather!',
                'status' => 'inactive'
            ]
        ];
        $this->db->table('nsca_alerts')->insertBatch($testDataAlerts);

        $testDataTeamUsers = [
            [
                'id' => 1,
                'userID' => 6,
                'teamID' => 1,
                'isTeamCaptain' => 0,
                'isViceCaptain' => 0
            ],
            [
                'id' => 2,
                'userID' => 7,
                'teamID' => 1,
                'isTeamCaptain' => 0,
                'isViceCaptain' => 0
            ],
            [
                'id' => 3,
                'userID' => 8,
                'teamID' => 2,
                'isTeamCaptain' => 0,
                'isViceCaptain' => 0
            ],
            [
                'id' => 4,
                'userID' => 9,
                'teamID' => 2,
                'isTeamCaptain' => 0,
                'isViceCaptain' => 0
            ],
            [
                'id' => 5,
                'userID' => 10,
                'teamID' => 3,
                'isTeamCaptain' => 0,
                'isViceCaptain' => 0
            ],
            [
                'id' => 6,
                'userID' => 11,
                'teamID' => 3,
                'isTeamCaptain' => 0,
                'isViceCaptain' => 0
            ]
        ];
        $this->db->table('nsca_team_user')->insertBatch($testDataTeamUsers);

        $testDataClubUsers = [
            [
                'id' => 1,
                'userID' => 6,
                'clubID' => 1,
                'isManager' => 1
            ],
            [
                'id' => 2,
                'userID' => 7,
                'clubID' => 1,
                'isManager' => 0
            ],
            [
                'id' => 3,
                'userID' => 8,
                'clubID' => 2,
                'isManager' => 1
            ],
            [
                'id' => 4,
                'userID' => 9,
                'clubID' => 2,
                'isManager' => 0
            ],
            [
                'id' => 5,
                'userID' => 10,
                'clubID' => 3,
                'isManager' => 1
            ],
            [
                'id' => 6,
                'userID' => 11,
                'clubID' => 3,
                'isManager' => 0
            ]
        ];
        $this->db->table('nsca_club_user')->insertBatch($testDataClubUsers);

        $testDataTeamJoinList = [
            [
                'id' => 1,
                'userID' => 12,
                'teamID' => 1
            ],
            [
                'id' => 2,
                'userID' => 13,
                'teamID' => 2
            ],
            [
                'id' => 3,
                'userID' => 14,
                'teamID' => 3
            ]
        ];
        $this->db->table('nsca_team_joinlist')->insertBatch($testDataTeamJoinList);

        $testDataCommitteeUsers = [
            [
                'id'            => 1,
                'committeeID'   => 1,
                'userID'        => 12
            ],
            [
                'id'            => 2,
                'committeeID'   => 1,
                'userID'        => 13
            ],
            [
                'id'            => 3,
                'committeeID'   => 2,
                'userID'        => 14
            ]
        ];
        $this->db->table('nsca_committees_user')->insertBatch($testDataCommitteeUsers);

        $testDataRegionUsers = [
            [
                'id' => 1,
                'locationID' => 1,
                'userID' => 6
            ],
            [
                'id' => 2,
                'locationID' => 1,
                'userID' => 7
            ],
            [
                'id' => 3,
                'locationID' => 1,
                'userID' => 8
            ],
            [
                'id' => 4,
                'locationID' => 2,
                'userID' => 9
            ],
            [
                'id' => 5,
                'locationID' => 2,
                'userID' => 10
            ],
            [
                'id' => 6,
                'locationID' => 2,
                'userID' => 11
            ],
            [
                'id' => 7,
                'locationID' => 3,
                'userID' => 12
            ],
            [
                'id' => 8,
                'locationID' => 3,
                'userID' => 13
            ],
            [
                'id' => 9,
                'locationID' => 3,
                'userID' => 14
            ]
        ];
        $this->db->table('nsca_location_user')->insertBatch($testDataRegionUsers);

        $devProgType = [
            [
                'id' => 1,
                'type_name' => 'Kids',
                'min_age' => 5,
                'max_age' => 12,
            ],
            [
                'id' => 2,
                'type_name' => 'Youth',
                'min_age' => 13,
                'max_age' => 18,
            ],
            [
                'id' => 3,
                'type_name' => 'Adult',
                'min_age' => 19,
                'max_age' => 100,
            ],
        ];
        $this->db->table('nsca_devprogram_type')->insertBatch($devProgType);

        $testDataDevPrograms = [
            [
                'name' => 'Youth Summer Camp',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eros odio, volutpat tempus ullamcorper ut, scelerisque quis neque. Nullam finibus orci id mi sagittis tincidunt. Vestibulum ornare ornare dui, et iaculis diam pulvinar vitae. Ut eu nunc ut velit elementum accumsan. Morbi nec pharetra dolor. Nunc porta suscipit lacus eget consequat. Phasellus a est vitae sapien dignissim egestas ut vulputate ipsum. Morbi sed ultricies dolor, sed mollis nibh. In semper, libero iaculis feugiat lobortis, enim metus',
                'devProgID' => 1,
                'start_time' => Time::now(),
                'end_time' => Time::now(),
                'start_date' => Time::now(),
                'end_date' => Time::now(),
                'price' => 50,
                'location' => 'NSCA',
                'daysRun' => 'Saturdays and Sundays',

            ],
            [
                'name' => 'Youth lunch Camp',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eros odio, volutpat tempus ullamcorper ut, scelerisque quis neque. Nullam finibus orci id mi sagittis tincidunt. Vestibulum ornare ornare dui, et iaculis diam pulvinar vitae. Ut eu nunc ut velit elementum accumsan. Morbi nec pharetra dolor. Nunc porta suscipit lacus eget consequat. Phasellus a est vitae sapien dignissim egestas ut vulputate ipsum. Morbi sed ultricies dolor, sed mollis nibh. In semper, libero iaculis feugiat lobortis, enim metus',
                'devProgID' => 2,
                'start_time' => Time::now(),
                'end_time' => Time::now(),
                'start_date' => Time::now(),
                'end_date' => Time::now(),
                'price' => 50,
                'location' => 'NSCA',
                'daysRun' => 'Saturdays and Sundays',

            ],
            [
                'name' => 'Youth night Camp',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eros odio, volutpat tempus ullamcorper ut, scelerisque quis neque. Nullam finibus orci id mi sagittis tincidunt. Vestibulum ornare ornare dui, et iaculis diam pulvinar vitae. Ut eu nunc ut velit elementum accumsan. Morbi nec pharetra dolor. Nunc porta suscipit lacus eget consequat. Phasellus a est vitae sapien dignissim egestas ut vulputate ipsum. Morbi sed ultricies dolor, sed mollis nibh. In semper, libero iaculis feugiat lobortis, enim metus',
                'devProgID' => 3,
                'start_time' => Time::now(),
                'end_time' => Time::now(),
                'start_date' => Time::now(),
                'end_date' => Time::now(),
                'price' => 50,
                'location' => 'NSCA',
                'daysRun' => 'Saturdays and Sundays',

            ],
        ];
        $this->db->table('nsca_dev')->insertBatch($testDataDevPrograms);

        $testDataDevProgramUsers = [
            [
                'id' => 1,
                'devID' => 1,
                'userID' => 12
            ],
            [
                'id' => 2,
                'devID' => 2,
                'userID' => 13
            ],
            [
                'id' => 3,
                'devID' => 3,
                'userID' => 14
            ]
        ];
        $this->db->table('nsca_dev_user')->insertBatch($testDataDevProgramUsers);
    }
}
