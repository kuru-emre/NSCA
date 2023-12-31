<?php

namespace App\Entities\UserTypes;

use App\Entities\User;
use CodeIgniter\Entity\Entity;

class ClubUser extends Entity
{
    protected $datamap = [];
    protected $dates   = ['created_at', 'updated_at'];
    protected $casts   = [];

    private ?User $user   = null;

    private function populateIdentity(): void
    {
        if ($this->user === null) {
            $userModel = model(UserModel::class);

            $this->user = $userModel->find($this->userID);
        }
    }

    public function getName(): string 
    {
        $this->populateIdentity();

        return $this->user->getFullName();
    }

    public function getRole(): string 
    {
        $this->populateIdentity();

        return $this->user->groups[0];
    }

    public function isManager(): bool
    {
        return $this->isManager;
    }
}
