<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ClubModel;
use App\Models\TeamModel;
use App\Models\UserEmailModel;
use App\Models\UserTypes\TeamUserModel;
use Exception;
use function PHPUnit\Framework\isEmpty;

class TeamsController extends BaseController
{
    public function index()
    {
        $teamModel = model(TeamModel::class);
        $userModel = model(UserEmailModel::class);
        $clubModel = model(ClubModel::class);

        if ($this->request->getVar('search') != null) {
            $teamName = esc($this->request->getVar('search'));
            $team = $teamModel->select()->where('name', $teamName)->first();
        }
        else if ($this->request->getVar('name') != null) {
            $teamName = $this->request->getVar('name');
            $team = $teamModel->select()->where('name', $teamName)->first();
        }
        else {
            $team = null;
        }

        $data = [
            'title' => 'Teams',
            'team' => $team,
            'teamMembers' => $team != null ? $userModel->getClubUsersByClubId($team->id) : null,
            'allTeams' => $teamModel->select()->orderBy('nsca_teams.name', 'ASC')->findAll(),
            'allClubs' => $clubModel->select()->orderBy('nsca_clubs.name', 'ASC')->findAll(),
            'allUsers' => $userModel->select()->orderBy('nsca_users.last_name', 'ASC')->findAll()
        ];

        return view('pages/admin/teams', $data);
    }

    public function updateTeam()
    {
        helper('image');
        $teamModel = model(TeamModel::class);
        $teamUserModel = model(TeamUserModel::class);

        $clubID = esc($this->request->getPost('updateClubID'));
        $name = esc($this->request->getPost('updateTeamName'));
        $description = esc($this->request->getPost('updateTeamDescription'));
        $image = $this->request->getFile('updateTeamImage');

        $teamID = esc($this->request->getPost('update-team-id'));
        $team = $teamModel->find($teamID);

        // New Team Image
        if ($image->isValid()) {
            // Deleting old image
            if (!str_contains($team->image, 'default.png')) {
                unlink($team->image);
            }

            $filepath = storeImage('Teams', $image);
            if (!$filepath) {
                $filepath = 'assets/images/Teams/default.png';
            }

            try {
                $teamModel->set('clubID', $clubID)
                    ->set('name', $name)
                    ->set('description', $description)
                    ->set('image', $filepath)
                    ->where('id', $teamID)
                    ->update();
            } catch (Exception $e) {
                echo "<script> console.log('Update failed for team: " . $teamID . " ') </script>";
            }
        }

        // No New Team Image
        else {
            try {
                $teamModel->set('clubID', $clubID)
                    ->set('name', $name)
                    ->set('description', $description)
                    ->where('id', $teamID)
                    ->update();
            } catch (Exception $e) {
                echo "<script> console.log('Update failed for team: " . $teamID . " ') </script>";
            }

        }

        // Updating Team Members
        $json = $this->request->getPost('update-members-JSON');
        if ($json != '') {
            $teamJSON = json_decode($json);

            foreach ($teamJSON->players as $player) {
                $userID = $player[0];

                switch ($player[1]) {
                    case 'vice':
                        try {
                            $teamUserModel->set('isViceCaptain', 1)
                                ->set('isTeamCaptain', 0)
                                ->where('userID', $userID)
                                ->where('teamID', $teamID)
                                ->update();
                        } catch (Exception $e) {
                            echo "<script> console.log('Update failed when changing role to \'Player\' for user: ' + '" . $userID . ", on team: " . $teamID . " ') </script>";
                        }
                        break;

                    case 'captain':
                        try {
                            $teamUserModel->set('isViceCaptain', 0)
                                ->set('isTeamCaptain', 1)
                                ->where('userID', $userID)
                                ->where('teamID', $teamID)
                                ->update();
                        } catch (Exception $e) {
                            echo "<script> console.log('Update failed when changing role to \'Captain\' for user: ' + '" . $userID . ", on team: " . $teamID . " ') </script>";
                        }
                        break;
                    default:
                        try {
                            $teamUserModel->set('isViceCaptain', 0)
                                ->set('isTeamCaptain', 0)
                                ->where('userID', $userID)
                                ->where('teamID', $teamID)
                                ->update();
                        } catch (Exception $e) {
                            echo "<script> console.log('Update failed when changing role to \'Vice-Captain\' for user: ' + '" . $userID . ", on team: " . $teamID . " ') </script>";
                        }
                        break;
                }
            }
        }

        return redirect()->back()->with('alert', ['type' => 'success', 'content' => 'Team updated successfully']);
    }

    public function createTeam()
    {
        $data['clubID'] = esc($this->request->getPost('newClubID'));
        $data['name'] = esc($this->request->getPost('newName'));
        $data['description'] = esc($this->request->getPost('newDescription'));

        // Logo
        helper('image');

        $file = $this->request->getFile('newImage');
        $filepath = storeImage('Teams', $file);
        if (!$filepath) {
            $data['image'] = 'assets/images/Teams/default.png';
        } else {
            $data['image'] = $filepath;
        }

        $team = new \App\Entities\Team();
        $team->fill($data);

        try {
            if (model(TeamModel::class)->save($team)) {
                return redirect()->to('admin/teams?name=' . str_replace(' ', '+', $data['name']))->with('alert', ['type' => 'success', 'content' => 'Team created successfully']);
            }
        } catch (Exception $e) {
            echo "<script> console.log('Error occurred while creating team. " . $e->getMessage() . " ') </script>";
        }
        return redirect()->to('admin/teams')->with('alert', ['type' => 'danger', 'content' => 'Error occurred while creating team']);
    }

    public function deleteTeam()
    {
        $teamModel = model(TeamModel::class);
        $teamUserModel = model(TeamUserModel::class);

        $teamID = $this->request->getPost('deleteTeamID');

        $team = $teamModel->find($teamID);
        if (file_exists($team->image) && !str_contains($team->image, 'default.png')) {
            unlink($team->image);
        }

        $teamModel->delete($teamID);
        $teamUserModel->deleteTeamUsers($teamID);

        if ($teamModel->find($teamID) == null) {
            return redirect()->to('admin/teams')->with('alert', ['type' => 'success', 'content' => 'Team deleted successfully']);
        }

        return redirect()->to('admin/teams')->with('alert', ['type' => 'danger', 'content' => 'Error occurred while deleting team']);
    }

    public function removeMember()
    {
        $teamUserModel = model(TeamUserModel::class);
        $teamModel = model(TeamModel::class);

        $teamID = esc($this->request->getPost('remove-member-team-id'));
        $userID = esc($this->request->getPost('remove-member-id'));
        $teamUserModel->where('userID', $userID)->where('teamID', $teamID)->delete();

        $teamName = $teamModel->select('name')->find($teamID)->name;

        try {
            if ($teamUserModel->where('userID', $userID)->where('teamID', $teamID)->findAll() == null) {
                return redirect()->to('admin/teams?name=' . str_replace(' ', '+', $teamName))->with('alert', ['type' => 'success', 'content' => 'Team created successfully']);
            }
        } catch (Exception $e) {
            echo "<script> console.log('Error occurred while removing team member. " . $e->getMessage() . " ') </script>";
        }

        return redirect()->back()->with('alert', ['type' => 'danger', 'content' => 'Error occurred while creating team']);
    }

    public function addMembers()
    {
        $teamUserModel = model(TeamUserModel::class);
        $teamModel = model(TeamModel::class);

        $teamID = $this->request->getPost('add-member-team-id');

        $json = $this->request->getPost('add-members-JSON');
        if ($json != '') {
            $usersJSON = json_decode($json);

            foreach ($usersJSON->members as $member) {

                $data['userID'] = $member[0];
                $data['teamID'] = $teamID;

                switch ($member[1]) {
                    case 'vice':
                        $data['isTeamCaptain'] = 0;
                        $data['isViceCaptain'] = 1;
                        break;

                    case 'captain':
                        $data['isTeamCaptain'] = 1;
                        $data['isViceCaptain'] = 0;
                        break;
                    default:
                        $data['isTeamCaptain'] = 0;
                        $data['isViceCaptain'] = 0;
                        break;
                }

                $teamUser = new \App\Entities\UserTypes\TeamUser();
                $teamUser->fill($data);

                try {
                    $teamUserModel->save($teamUser);
                } catch (Exception $e) {
                    echo "<script> console.log('Failed to assign user to team.') </script>";
                }
            }
        }

        return redirect()->back();
    }

}