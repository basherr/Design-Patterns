<?php

namespace App\Controller;
use App\Patterns\Structural\AdapterPattern\{
    Men,
    KidsAdapter
};
use App\Patterns\Structural\AdapterPattern\AdapterPatternExample2\{
    IOSOperatingSystem,
    LinuxOperatingSystemAdapter,
    Operator
};

class StructuralController {

    public function adapterPattern()
    {
        $men =  new Men;
        echo $men->walk() . '<br/>';
        echo $men->speak() . '<br/>';
        $kids =  new KidsAdapter;
        echo $kids->speak() . '<br/>';
        echo $kids->walk();
    }

    public function adapterPatternExample2()
    {
        $iosOS = new IOSOperatingSystem();

        $operator = new Operator($iosOS);
        $operator->shutdown();
        echo '[[IOS status after shutdown]]: ' . $operator->getStatus();
        $operator->start();
        echo '<br/>[[IOS status after start]]: ' . $operator->getStatus();

        $linuxAdpt = new LinuxOperatingSystemAdapter();
        $operator = new Operator($linuxAdpt);
        $operator->shutdown();
        echo '<br/><br/><br/>[[Linux status after shutdown]]: ' . $operator->getStatus();
        $operator->start();
        echo '<br/>[[Linux status after start]]: ' . $operator->getStatus();
    }

    public function facade()
    {
        $facade = new \App\Patterns\Structural\Facade\Quickbooks\QuickbooksFacade('test123');
        
        $response = $facade->createItem(['name' => 'cement', 'costcode' => 'ABE-222']);
        
        if(!$response) {
            throw new \Exception('item could not be created');
        }
        echo "<br/>item has been creatd successfully!";
        
        $item = $facade->showItem(0);
        echo "<br/>Item name: {$item['name']} <br/> Costcode: {$item['costcode']}";

        $updatdItem = ['name' => 'cement', 'costcode' => 'ABE-223'];
        $facade->updateItem(0, $updatdItem);
        echo "<br/>Item '0' has been successfully updated<br/>";

        $facade->showItem(0);
        echo "<br/>Item name: {$updatdItem['name']} <br/> Costcode: {$updatdItem['costcode']}";

        $facade->deleteItem(0);
        echo "<br/>Item '0' has been successfully deleted<br/>";
    }

    public function bridge()
    {
        $renderer = new \App\Patterns\Structural\BridgePattern\FlightApi\SabreFlightRenderer;
        $sabreTicket = new \App\Patterns\Structural\BridgePattern\FlightApi\SabreTicket($renderer);
        echo $sabreTicket->view();

        $renderer = new \App\Patterns\Structural\BridgePattern\FlightApi\TravelportFlightRenderer;
        $travelportTicket = new \App\Patterns\Structural\BridgePattern\FlightApi\TravelportTicket($renderer);
        echo $travelportTicket->view();
    }

    public function composite()
    {
        (new \App\Patterns\Structural\CompositePattern\Form\Application)->run();
    }
    
    public function decorator()
    {
        (new \App\Patterns\Structural\DecoratorPattern\ActiveRecord\Application)->run();
    }
    
    public function proxy()
    {
        (new \App\Patterns\Structural\ProxyPattern\FileReader\Application)->run();
    }
    
}
