<?php
interface Logger {
    public function setLog($message);

    public function getLog();
}

class FileLogger implements Logger {
    private $logFilePath;

    public function __construct($logFilePath) {
        $this->logFilePath = $logFilePath;
    }

    public function setLog($message) {
        $formattedMessage = date('Y-m-d H:i:s') . ' - ' . $message . PHP_EOL;
        file_put_contents($this->logFilePath, $formattedMessage, FILE_APPEND);
    }

    public function getLog() {
        $content = file_get_contents($this->logFilePath);
        echo nl2br($content);
    }
}

$logFilePath = 'app.log';
$fileLogger = new FileLogger($logFilePath);
$fileLogger->setLog("I'm a web developer");
$fileLogger->getLog();
