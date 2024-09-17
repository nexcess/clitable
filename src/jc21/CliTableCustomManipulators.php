<?php
/**
 * NocWorx Datacenter Management Suite
 *
 * @package nocworx.clitable
 * @copyright 2006-2022 LiquidWeb, LLC
 * @license Proprietary
 */

declare(strict_types = 1);

namespace jc21;

/**
 *  Custom manipulators for the Cli Table class
 */
class CliTableCustomManipulators extends CliTableManipulator
{
    public function jsonify(array $data): string
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}