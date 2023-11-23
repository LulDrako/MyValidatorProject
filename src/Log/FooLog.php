<?php

namespace App\Log;

class FooLog {
    private static $translations = [
        'en' => [
            'title' => 'Title',
            'message' => 'Message'
        ],
        'th' => [
            'title' => 'หัวข้อ',
            'message' => 'ข้อความ'
        ],
        'ch' => [
            'title' => '标题',
            'message' => '信息'
        ],
    ];

    public static function logTitle($title, $lang = 'en') {
        if (!isset(self::$translations[$lang])) {
            throw new \Exception("Error: Invalid language code. Possible values are [th, en, ch].");
        }
        return self::$translations[$lang]['title'] . ": " . strtoupper($title);
    }

    public static function logMessage($message, $lang = 'en') {
        if (!isset(self::$translations[$lang])) {
            throw new \Exception("Error: Invalid language code. Possible values are [th, en, ch].");
        }
        return self::$translations[$lang]['message'] . ": " . $message;
    }

    public static function writeLog($title, $message, $lang = 'en') {
    $logEntry = self::logTitle($title, $lang) . " - " . self::logMessage($message, $lang) . "\n";
    $logFilePath = 'C:\Users\karim\Desktop\COMPOSER_MAKER\PROJET-COMPOSER-MAKER\my_validator_project\var\log\logfile.log';
    file_put_contents($logFilePath, $logEntry, FILE_APPEND);
}
    
}
