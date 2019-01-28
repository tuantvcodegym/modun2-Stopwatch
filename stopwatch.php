<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    class Stopwatch{
        private $starttime;
        private $endtime;
        public function __construct(){
            $this->starttime = date('h:i:s');
        }
        public function getStartTime(){
            return $this->starttime;
        }
        public function getEndTime(){
            return$this->endtime;
        }
        public function startTime(){
            $this->starttime = date('h:i:s');
        }
        public function stopTime(){
            $this->endtime = date('h:i:s');
        }
        public function getElapsedTime(){
            return strtotime($this->endtime) - strtotime($this->starttime);
        }
    }
?>
</body>
</html>