<?php declare(strict_types=1);

namespace Wallet\Controller\XRP\Api\Method;

use Wallet\Controller\XRP\Api\Field;

/**
 * TransactionEntry Method Class
 *
 * The transaction_entry method retrieves information on a single transaction from a specific ledger version. (The tx
 * method, by contrast, searches all ledgers for the specified transaction. We recommend using that method instead.)
 *
 * @link https://developers.ripple.com/transaction_entry.html TransactionEntry method documentation.
 */
class TransactionEntry extends AbstractMethod
{
    /**
     * {@inheritDoc}
     *
     * @throws \Wallet\Controller\XRP\Exception\FieldException
     */
    public function setFields()
    {
        parent::setFields();

        // GENERATED CODE FROM bin/generate.php types
        // BEGIN GENERATED
        $this->addField(new Field([
            'name' => 'tx_hash',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'ledger_hash',
            'required' => false
        ]));

        $this->addField(new Field([
            'name' => 'ledger_index',
            'required' => false
        ]));

        // END GENERATED
    }
}
