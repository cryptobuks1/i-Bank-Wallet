<?php declare(strict_types=1);

namespace Wallet\Controller\XRP\Api\TransactionType;

use Wallet\Controller\XRP\Api\Field;

/**
 * SignerListSet Transaction Type Class
 *
 * The SignerListSet transaction creates, replaces, or removes a list of signers that can be used to multi-sign a
 * transaction.
 *
 * @link https://developers.ripple.com/signerlistset.html SignerListSet transaction type documentation.
 */
class SignerListSet extends AbstractTransactionType
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
            'name' => 'SignerQuorum',
            'required' => true,
            'autoFillable' => false
        ]));

        $this->addField(new Field([
            'name' => 'SignerEntries',
            'required' => false,
            'autoFillable' => false
        ]));

        // END GENERATED
    }
}