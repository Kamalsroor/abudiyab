<?php

namespace App\Support;

use Firebase\Auth\Token\Verifier;
use Illuminate\Support\Facades\Config;
use Illuminate\Auth\AuthenticationException;

class FirebaseToken
{
    protected $verifierId;

    public function accessToken($token)
    {
        $this->verifierId = $token;

        return $this;
    }

    /**
     * Get the valid phone number from access token.
     *
     * @throws AuthenticationException
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->getVerifier()->claims()->has('phone_number')
            ? $this->getVerifier()->claims()->get('phone_number') : null;
    }

    /**
     * Get the valid phone number from access token.
     *
     * @throws AuthenticationException
     * @return string
     */
    public function getEmail()
    {
        return $this->getVerifier()->claims()->has('email')
            ? $this->getVerifier()->claims()->get('email') : null;
    }

    /**
     * Get the valid phone number from access token.
     *
     * @throws AuthenticationException
     * @return string
     */
    public function getName()
    {
        return $this->getVerifier()->claims()->has('name')
            ? $this->getVerifier()->claims()->get('name') : null;
    }

    /**
     * Get the valid phone number from access token.
     *
     * @throws AuthenticationException
     * @return string
     */
    public function getFirebaseId()
    {
        return $this->getVerifier()->claims()->has('user_id')
            ? $this->getVerifier()->claims()->get('user_id') : null;
    }

    /**
     * @throws \Illuminate\Auth\AuthenticationException
     * @return \Lcobucci\JWT\Token
     */
    public function getVerifier()
    {
        $projectId = Config::get('accounts.firebase_project_id');

        $verifier = new Verifier($projectId);

        try {
            $verifiedIdToken = $verifier->verifyIdToken($this->verifierId);

            return $verifiedIdToken;
        } catch (\Throwable $e) {
            throw new AuthenticationException('Invalid access token!');
        }
    }
}
