<?php

namespace App\Entities;

use App\Models\TeamModel;
use App\Models\UserModel;
use App\Models\UserTypes\ClubUserModel;
use CodeIgniter\Entity\Entity;

class Club extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at'];
    protected $casts   = [];

    private ?array $teams   = null;
    private ?array $members = null;

    private function populateTeams(): void
    {
        if ($this->teams === null) {
            $teamModel = model(TeamModel::class);

            $this->teams = $teamModel->getTeamsByClubID($this->id);
        }
    }

    private function populateMembers(): void
    {
        if ($this->members === null) {
            $clubUserModel = model(ClubUserModel::class);

            $this->members = $clubUserModel->getMembersByID($this->id);
        }
    }

    public function getUnassignedTeams(): array
    {
        $teamModel = model(TeamModel::class);

        return $teamModel->where('clubID', NULL)->findAll();
    }

    public function getUnassignedMembers(): array
    {
        if (empty($this->members)) {
            return model(UserModel::class)->findAll();
        } else {
            return $this->filterMembers();
        }
    }

    private function filterMembers(): array
    {
        $totalUsers = model(UserModel::class)->findAll();
        $nonMembers = [];

        foreach ($totalUsers as $user) {
            $isMember = false;

            foreach ($this->members as $member) {
                if ($member->userID === $user->id) {
                    $isMember = true;
                    break;
                }
            }

            if (!$isMember) {
                array_push($nonMembers, $user);
            }
        }

        return $nonMembers;
    }

    public function getTeams(): array
    {
        $this->populateTeams();

        return $this->teams;
    }

    public function getMembers(): array
    {
        $this->populateMembers();

        return $this->members;
    }
}
