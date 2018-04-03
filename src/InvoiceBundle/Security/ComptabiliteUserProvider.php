<?php
namespace AFMP\InvoiceBundle\Security;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

/**
 * Provider for user authentication
 *
 * @author Mikael SERREAU <mikael@squareeyes.fr>
 */
class ComptabiliteUserProvider implements UserProviderInterface
{
    private $entityManager;

    /**
     * Constructor
     *
     * @param EntityManager $entityManager
     */
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Find client by credentials
     * @param array $credentials
     * @return string username
     */
    public function getUsernameByCredentials($credentials)
    {
        $client = $this->entityManager->getRepository('AFMPUserBundle:User')->findOneBy(array('username' => $credentials['username'], 'password' => $credentials['secret']));
        if (!$client) {
            return false;
        }

        return $client->getUsername();
    }

    /**
     * Load user by username
     * @param string $username
     * @return Client
     */
    public function loadUserByUsername($username)
    {
        $client = $this->entityManager->getRepository('AFMPUserBundle:User')->findOneByUsername($username);
        if (!$client) {
            throw new UsernameNotFoundException();
        }

        return $client;
    }

    /**
     * Cannot refresh user
     * @param UserInterface $client
     * @throws UnsupportedUserException
     */
    public function refreshUser(UserInterface $client)
    {
        throw new UnsupportedUserException();
    }

    /**
     * Check if supported class
     * @param string $class
     * @return boolean
     */
    public function supportsClass($class)
    {
        return 'Symfony\Component\Security\Core\User\User' === $class;
    }
}