<?php

        $product_final = [
           'product'=>[
            'product_id' => '123',
            'name' => 'Кеды с полоской',
            'sku' => '234235235',
            'price' => 3224,
            'desc' => 'Описание'
           ],
           'sizes' => [
               [
                   'sizes'=> [
                       'size_name' => '37',
                       'size_id' => '32'
                   ]
               ],
               [
                    'sizes'=> [
                        'size_name' => '38',
                        'size_id' => '33'
                    ]    
                ],
                [
                    'sizes'=> [
                        'size_name' => '39',
                        'size_id' => '34'
                    ]
                ]
           ]
       ];

    echo json_encode($product_final);

?>