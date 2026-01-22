<?php
declare(strict_types=1);

class BankAccount {
    private float $balance;
    private float $amount;

    public function __construct(float $openingBalance = 0.0) {
        if ($openingBalance < 0) {
            throw new InvalidArgumentException('Opening balance cannot be negative.');
        }
        $this->balance = $openingBalance;
        $this->amount = 0.0;
    }

    public function getBalance(): float { return $this->balance; }
    public function getAmount(): float { return $this->amount; }

    public function deposit(float $amount): void {
        if ($amount <= 0) { throw new InvalidArgumentException('Deposit amount must be positive.'); }
        $this->amount = $amount;
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void {
        if ($amount <= 0) { throw new InvalidArgumentException('Withdraw amount must be positive.'); }
        if ($amount > $this->balance) { throw new RuntimeException('Insufficient funds.'); }
        $this->amount = $amount;
        $this->balance -= $amount;
    }
}

$account = new BankAccount(0);
$account->deposit(150);
$account->withdraw(25);

echo '<!doctype html><html lang="en"><head><meta charset="utf-8"><title>Bank Account Demo</title></head><body>'; 
echo '<h1>Bank Account</h1>';
echo '<p>Current balance: ' . number_format($account->getBalance(), 2) . '</p>';
echo '<p>Last amount: ' . number_format($account->getAmount(), 2) . '</p>';
echo '</body></html>';