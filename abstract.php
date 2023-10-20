<?php

interface PC {
    public function start();
    public function stop();
}

interface Laptop {
    public function play();
    public function shutdown();
}



abstract class OS {
    protected $ram;
    protected $gpu;
    protected $cpu;
    protected $name;
    const RAM = '16';

    public function __construct($name) {
        $this->name = $name;
    }

    abstract protected function systemCall();

    public function deleteCache() {
        print('cache deleted');
    }

}


class Windows extends OS implements PC, Laptop {

    public function systemCall()
    {
        // TODO: Implement systemCall() method.
    }

    public function start()
    {
        exec('');
    }

    public function stop()
    {
        exec('');
    }

    public function play()
    {
        // TODO: Implement play() method.
    }

    public function shutdown()
    {
        // TODO: Implement shutdown() method.
    }


}

class KaliLinux extends OS {

    public function systemCall()
    {
        echo "this is system call for kaliLinux";
    }

}


$kali = new KaliLinux('kaliLinux');
$kali->systemCall();

$windows = new Windows('Windows 11');
$windows->start();




?>