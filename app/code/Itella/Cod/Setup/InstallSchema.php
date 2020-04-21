<?php

namespace Itella\Cod\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $installer, ModuleContextInterface $context)
    {
        
        $installer->startSetup();

        $installer->getConnection()->addColumn(
            $installer->getTable('quote'),
            'itella_cod_fee',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                'length'    => '10,2',
                'nullable' => true,
                'comment' => 'Itella COD fee amount',
            ]
        );

        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order'),
            'itella_cod_fee',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                'length'    => '10,2',
                'nullable' => true,
                'comment' => 'Itella COD fee amount',
            ]
        );
        
        $installer->endSetup();
    }

}