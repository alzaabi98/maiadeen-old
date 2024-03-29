<?php

namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = SocialAccount::whereProvider('facebook')->whereProviderUserId($providerUser->getId())->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook',
                'avatar' => $providerUser->getAvatar(),

            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    //'name' => $providerUser->getName(),
                    'firstname' => $providerUser->getName(),
                    'email' => $providerUser->getEmail(),
                    'social' => true,
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }
}