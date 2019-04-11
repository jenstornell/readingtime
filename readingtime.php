<?php
class ReadingTime {
    public function __construct($words_per_minute = 200) {
        $this->words_per_minute = $words_per_minute;
    }

    public function set($text) {
      $this->text = $text;
      $this->calculate();
      return $this->time;
    }

    public function get() {
      return $this->time;
    }

    private function calculate() {
      $minutes = str_word_count($this->text) / $this->words_per_minute;

      $this->setMinutes($minutes);
      $this->setSeconds($minutes);
      $this->setTime();
    }

    private function setMinutes($minutes) {
      $this->minutes = floor($minutes);
    }

    private function setSeconds($minutes) {
      $this->seconds = floor($minutes * 60);
    }

    private function setTime() {
      $minutes = $this->minutes;
      $seconds = $this->seconds;

      switch(true) {
        case $seconds == 0:
          $this->time = '0 seconds';
          break;
        case $seconds == 1:
          $this->time = '1 second';
          break;
        case $seconds < 60:
          $this->time = "$seconds seconds";
          break;
        case $minutes == 1:
          $this->time = "1 minute";
          break;
        default:
          $this->time = "$minutes minutes";
          break;
      }
    }

    public function seconds() {
      return $this->seconds;
    }

    public function minutes() {
      return $this->minutes;
    }
}