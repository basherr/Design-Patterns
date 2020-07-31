<?php


return [
    ['GET', '/', ['App\Controller\CreationalController', 'abstractFactory'] ],
    ['GET', '/builder', ['App\Controller\CreationalController', 'builderFactory']],
    ['GET', '/builder2', ['App\Controller\CreationalController', 'builder2']],
    ['GET', '/factory', ['App\Controller\CreationalController', 'factoryMethod']],
    ['GET', '/factory2', ['App\Controller\CreationalController', 'factoryMethod2']],
    ['GET', '/pool', ['App\Controller\CreationalController', 'pool']],
    ['GET', '/proto', ['App\Controller\CreationalController', 'prototype']],
    ['GET', '/simple', ['App\Controller\CreationalController', 'simpleFactory']],
    ['GET', '/static', ['App\Controller\CreationalController', 'staticFactory']],
    ['GET', '/structural', ['App\Controller\StructuralController', 'adapterPattern']],
    ['GET', '/structural/adapterExample2', ['App\Controller\StructuralController', 'adapterPatternExample2']],
    ['GET', '/structural/facade', ['App\Controller\StructuralController', 'facade']],
    // ['GET', '/{slug}', ['App\Controller\CreationalController', 'show']],
];
