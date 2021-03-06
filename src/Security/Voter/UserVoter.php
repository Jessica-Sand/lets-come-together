<?php

namespace App\Security\Voter;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class UserVoter extends Voter
{

    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    protected function supports(string $attribute, $subject): bool
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, ['ADMIN_EDIT', 'ADMIN_DELETE'])
            && $subject instanceof \App\Entity\UserApp;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }

        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case 'ADMIN_EDIT':
                
                if ($user === $subject || $this->security->isGranted('ROLE_SUPER_ADMIN')) {
                    return true;
                }

                break;
            case 'ADMIN_DELETE':
                if ($user === $subject || $this->security->isGranted('ROLE_SUPER_ADMIN')) {
                    return true;
                }
                break;
        }

        return false;
    }
}
