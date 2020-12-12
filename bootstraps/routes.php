<?php


return [
    // creational routes
    ['GET', '/', ['App\Controller\CreationalController', 'abstractTvFactory'] ],
    ['GET', '/meal-builder', ['App\Controller\CreationalController', 'resturantBuilder']],
    ['GET', '/database-builder', ['App\Controller\CreationalController', 'databaseBuilder']],
    ['GET', '/car-manufacturer-factory-method', ['App\Controller\CreationalController', 'carManufactureFactoryMethod']],
    ['GET', '/logger-factory-method', ['App\Controller\CreationalController', 'loggerFactoryMethod']],
    ['GET', '/pool-reverse-string', ['App\Controller\CreationalController', 'reverseString']],
    ['GET', '/prototype-acme', ['App\Controller\CreationalController', 'acmePrototype']],
    ['GET', '/static', ['App\Controller\CreationalController', 'staticFactory']],
    // structural routes
    ['GET', '/human-adapter', ['App\Controller\StructuralController', 'humanAdapter']],
    ['GET', '/os-adapter', ['App\Controller\StructuralController', 'osAdapter']],
    ['GET', '/structural/facade', ['App\Controller\StructuralController', 'facade']],
    ['GET', '/structural/bridge', ['App\Controller\StructuralController', 'bridge']],
    ['GET', '/structural/composite', ['App\Controller\StructuralController', 'composite']],
    ['GET', '/structural/decorator', ['App\Controller\StructuralController', 'decorator']],
    ['GET', '/structural/proxy', ['App\Controller\StructuralController', 'proxy']],
    ['GET', '/behavioral', ['App\Controller\BehavioralController', 'chainOfResponsibility']],
    ['GET', '/behavioral/command', ['App\Controller\BehavioralController', 'command']],
    ['GET', '/behavioral/iterator', ['App\Controller\BehavioralController', 'iterator']],
    ['GET', '/behavioral/observer', ['App\Controller\BehavioralController', 'observer']],
    // ['GET', '/{slug}', ['App\Controller\CreationalController', 'show']],
];
