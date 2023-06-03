<?php

namespace model\mapping;
use model\abstract\MappingClassAbstract;

class TheuserMapping extends MappingClassAbstract 
{
    private int $idTheUser;
    private string $loginTheUser;
    private string $pwdTheUser;
    private string $mailTheUser;
    
    use \model\trait\slugifyTrait;
    // method abstraite de la classe parente 
    // obligatoirement implémentée


    public function __toString()
    {
        return "chate" . self::class;
    }

    public function hashPwd(string $pwd): string
    {
        $pwd = password_hash($pwd, PASSWORD_DEFAULT);
        return $pwd;
    }

    // ici on va retourner un booléen
    // qui représente la vérification du mot de passe
    public function verifyPwd(string $pwd, string $hash): bool
    {
        $pwd = password_verify($pwd, $hash);
        return $pwd;
    }

    
    // getters
    public function getIdTheUser(): int
    {
        return $this->idTheUser;
    }

    public function getLoginTheUser(): string
    {
        return $this->loginTheUser;
    }

    public function getPwdTheUser(): string
    {
        return $this->pwdTheUser;
    }

    public function getMailTheUser(): string
    {
        return $this->mailTheUser;
    }


    // setters

    // setters de l'interface securityInterface
    // on doit obligatoirement les implémenter
    // ici on va setter le mot de passe crypté
    public function setCryptPwd(string $pwdTheUser): void
    {
        $this->pwdTheUser = $this->hashPwd($pwdTheUser);
    }

    public function setIdTheUser(int $idTheUser): void
    {
        $this->idTheUser = $idTheUser;
    }

    public function setLoginTheUser(string $loginTheUser): void
    {
        $this->loginTheUser = $loginTheUser;
    }

    public function setPwdTheUser(string $pwdTheUser): void
    {
        $this->pwdTheUser = $pwdTheUser;
    }

    public function setMailTheUser(string $mailTheUser): void
    {
        $this->mailTheUser = $mailTheUser;
    }
}