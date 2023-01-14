<pre>
<?php

class Wallet 
{
    function __construct(public int $amount)
    {
        
    }
}

class User {
    private string $fullname;
    private bool $isAdmin;
    public ?Wallet $wallet;

    function setFullName(string $fullname): void 
    {
       $this->fullName = $fullname; 
    }
    function getWallet(): Wallet
    {
        return $this->wallet;
    }
    function setWallet(?Wallet $wallet) 
    {
        $this->wallet=$wallet;
    }
}

$user = new User();
$user->setWallet(new Wallet(120));

echo $user->wallet->amount;

$user->setWallet(null);

echo $user->wallet?->amount;

?>
</pre>