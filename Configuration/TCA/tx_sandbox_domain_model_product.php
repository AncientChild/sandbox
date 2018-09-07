<?php
return [
   'ctrl' => [
      'title' => 'LLL:EXT:sandbox/Resources/Private/Language/locallang_db.xlf:tx_sandbox_domain_model_product',
      'label' => 'name',
      'iconfile' => 'EXT:sandbox/Resources/Public/Icons/Product.png'
   ],
   'columns' => [
      'name' => [
         'label' => 'LLL:EXT:sandbox/Resources/Private/Language/locallang_db.xlf:tx_sandbox_domain_model_product.item_label',
         'config' => [
            'type' => 'input',
            'size' => '20',
            'eval' => 'trim'
         ]
      ],
      'description' => [
         'label' => 'LLL:EXT:sandbox/Resources/Private/Language/locallang_db.xlf:tx_sandbox_domain_model_product.item_description',
         'config' => [
            'type' => 'text',
            'eval' => 'trim'
         ]
      ],
      'quantity' => [
         'label' => 'LLL:EXT:sandbox/Resources/Private/Language/locallang_db.xlf:tx_sandbox_domain_model_product.stock_quantity',
         'config' => [
            'type' => 'input',
            'size' => '4',
            'eval' => 'int'
         ]
      ],
   ],
   'types' => [
      '0' => ['showitem' => 'name, description, quantity']
   ]
];