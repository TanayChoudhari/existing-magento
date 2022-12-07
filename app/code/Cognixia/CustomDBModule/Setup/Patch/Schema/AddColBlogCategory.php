<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Cognixia\CustomDBModule\Setup\Patch\Schema;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\Patch\SchemaPatchInterface;

/**
* Patch is mechanism, that allows to do atomic upgrade data changes
*/
class AddColBlogCategory implements SchemaPatchInterface
{
    /**
     * @var SchemaSetupInterface $moduleSchemaSetup
     */
    private $moduleSchemaSetup;

    /**
     * @param SchemaSetupInterface $moduleDataSetup
     */
    public function __construct(SchemaSetupInterface $moduleSchemaSetup)
    {
        $this->moduleSchemaSetup = $moduleSchemaSetup;
    }

    /**
     * Do Upgrade
     *
     * @return void
     */
    public function apply()
    {
        // $this->moduleSchemaSetup->startSetup();
        // $this->moduleSchemaSetup->getConnection()->addColumn(
        //     'blog_category',
        //     'meta_title',
        //     [
        //         'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
        //         'length'
        //     ]
        // );
    }

    /**
     * @inheritdoc
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public static function getDependencies()
    {
        return [];
    }
}
