<?php
class Day {
    public $day;
    public $invalid = false;
    public $events = array();

    function __construct($day) {
        $this->day = $day;
        return $this;
    }

    function invalid() {
        $this->invalid = true;
        return $this;
    }

    function events($events) {
        if (isset($events)) {
            $this->events = $events;
        }
        return $this;
    }

    function getClass() {
        if ($this->invalid) {
            return " d-none d-sm-inline-block bg-light text-muted";
        }
        return "";
    }

    function getEvents() {
        if (!isset($this->events) || count($this->events) == 0) {
            echo '<p class="d-sm-none">No events</p>';
            return;
        }

        foreach($this->events as $eventName) {
            echo <<<Event
            <a href="./details.php" class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-success text-white" title="$eventName<">$eventName</a>
Event;
        }
    }
};

$days = array(
    (new Day(29))->invalid(),
    (new Day(30))->invalid(),
    (new Day(31))->invalid(),
    new Day(1),
    new Day(2),
    new Day(3),
    new Day(4),
    new Day(5),
    new Day(6),
    new Day(7),
    new Day(8),
    new Day(9),
    new Day(10),
    new Day(11),
    new Day(12),
    new Day(13),
    (new Day(14))->events(array("2018 Championship", "Stage 20")),
    new Day(15),
    new Day(16),
    new Day(17),
    new Day(18),
    new Day(19),
    new Day(20),
    new Day(21),
    new Day(22),
    new Day(23),
    (new Day(24))->events(array("Stage 21")),
    new Day(25),
    new Day(26),
    new Day(27),
    new Day(28),
    new Day(29),
    new Day(30),
    (new Day(1))->invalid(),
    (new Day(2))->invalid(),
);
$days_of_week = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

?>
