<?php

return [
    'formbuilder.formbuilders' => [
        'index' => 'formbuilder::formbuilders.list resource',
        'create' => 'formbuilder::formbuilders.create resource',
        'edit' => 'formbuilder::formbuilders.edit resource',
        'destroy' => 'formbuilder::formbuilders.destroy resource',
        'update' => 'formbuilder::formbuilders.update resource',
        'store' => 'formbuilder::formbuilders.store resource',
    ],
    'formbuilder.submission' => [
        'index' => 'formbuilder::formbuilders.submission.list resource',
        'destroy' => 'formbuilder::formbuilders.submission.destroy resource',
        'form' => 'formbuilder::formbuilders.submission.view resource',
    ],

];
