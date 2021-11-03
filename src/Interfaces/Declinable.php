<?php

declare(strict_types=1);

namespace Bavix\Wallet\Interfaces;

use Bavix\Wallet\Exceptions\BalanceIsEmpty;
use Bavix\Wallet\Exceptions\ConfirmedInvalid;
use Bavix\Wallet\Exceptions\InsufficientFunds;
use Bavix\Wallet\Exceptions\WalletOwnerInvalid;
use Bavix\Wallet\Models\Transaction;

interface Declinable
{
    /**
     * @throws BalanceIsEmpty
     * @throws InsufficientFunds
     * @throws ConfirmedInvalid
     * @throws WalletOwnerInvalid
     */
    public function decline(Transaction $transaction): bool;

    public function safeDecline(Transaction $transaction): bool;

    /**
     * @throws ConfirmedInvalid
     */
    public function resetDecline(Transaction $transaction): bool;

    public function safeResetDecline(Transaction $transaction): bool;

    /**
     * @throws ConfirmedInvalid
     * @throws WalletOwnerInvalid
     */
    public function forceDecline(Transaction $transaction): bool;
}
