<?php

namespace kuliev;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface {
    public function _write()
    {
        $d = new \DateTime();
        $date = $d->format('d.m.Y_H.i.s.ms');
        $logFileName = "log/$date.log";

        if (!file_exists("log")) {
            mkdir("log");
        }

        foreach ($this->log as $mass) {
            echo $mass . PHP_EOL;
        }

        file_put_contents($logFileName, implode("\n", $this->log));
    }

    public static function log($str):  void
    {
        self::Instance()->log[] = $str;
    }

    public static function write(): void
    {
        self::Instance()->_write();
    }
}