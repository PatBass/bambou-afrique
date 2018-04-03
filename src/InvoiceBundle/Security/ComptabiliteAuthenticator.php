<?php
namespace AFMP\InvoiceBundle\Security;

use Symfony\Component\Security\Core\Authentication\SimplePreAuthenticatorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Authentication\Token\PreAuthenticatedToken;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Compta authenticator
 *
 * @author Mikael SERREAU <mikael@squareeyes.fr>
 */
class ComptabiliteAuthenticator implements SimplePreAuthenticatorInterface
{
    protected $userProvider;

    /**
     * Inject ApiUserProvider
     * @param ApiUserProvider $userProvider
     */
    public function __construct(ComptabiliteUserProvider $userProvider)
    {
        $this->userProvider = $userProvider;
    }

    /**
     * Create token with credentials 
     * @param Request $request
     * @param string  $providerKey
     * @return PreAuthenticatedToken
     */
    public function createToken(Request $request, $providerKey)
    {
        if (!$request->query->has('username') || !$request->query->has('secret')) {
            throw new AccessDeniedHttpException();
        }

        $credentials = array(
            'username' => $request->query->get('username'),
            'secret'   => str_replace(' ', '+', $request->query->get('secret'))
        );

        return new PreAuthenticatedToken(
            'anon.',
            $credentials,
            $providerKey
        );
    }

    /**
     * Grant token
     * @param TokenInterface        $token
     * @param UserProviderInterface $userProvider
     * @param string                $providerKey
     * @return PreAuthentivatedToken
     */
    public function authenticateToken(TokenInterface $token, UserProviderInterface $userProvider, $providerKey)
    {
        $credentials = $token->getCredentials();
        $apikey = $this->userProvider->getUsernameByCredentials($credentials);
        if (!$apikey) {
            throw new AccessDeniedHttpException();
        }
        $client = $this->userProvider->loadUserByUsername($apikey);

        return new PreAuthenticatedToken(
            $client,
            $credentials,
            $providerKey,
            $client->getRoles()
        );
    }

    /**
     * Supports token
     * @param TokenInterface $token
     * @param string         $providerKey
     * @return boolean
     */
    public function supportsToken(TokenInterface $token, $providerKey)
    {
        return $token instanceof PreAuthenticatedToken && $token->getProviderKey() === $providerKey;
    }
}