<?php

/**
 * Copyright © Bold Brand Commerce Sp. z o.o. All rights reserved.
 * See license.txt for license details.
 */

declare(strict_types = 1);

namespace Ergonode\Importer\Domain\Command;

use Ergonode\Importer\Domain\Entity\ImportId;
use JMS\Serializer\Annotation as JMS;

/**
 * Class StartProcessImport
 */
class StartProcessImportCommand
{
    /**
     * @var ImportId
     *
     * @JMS\Type("Ergonode\Importer\Domain\Entity\ImportId")
     */
    private $importId;

    /**
     * @param ImportId $importId
     */
    public function __construct(ImportId $importId)
    {
        $this->importId = $importId;
    }

    /**
     * @return ImportId
     */
    public function getImportId(): ImportId
    {
        return $this->importId;
    }
}
