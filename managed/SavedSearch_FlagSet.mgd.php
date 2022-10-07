<?php
return [
    [
        'name' => 'SavedSearch_Flag_Set_Search',
        'entity' => 'SavedSearch',
        'cleanup' => 'unused',
        'update' => 'unmodified',
        'params' => [
            'version' => 4,
            'values' => [
                'name' => 'Flag_Set_Search',
                'label' => 'Flag Set Search',
                'form_values' => NULL,
                'mapping_id' => NULL,
                'search_custom_id' => NULL,
                'api_entity' => 'FlagSet',
                'api_params' => [
                    'version' => 4,
                    'select' => [
                        'id',
                        'label',
                        'is_multiple',
                    ],
                    'orderBy' => [],
                    'where' => [],
                    'groupBy' => [],
                    'join' => [],
                    'having' => [],
                ],
                'expires_date' => NULL,
                'description' => NULL,
            ],
        ],
    ],
];