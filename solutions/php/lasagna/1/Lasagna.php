<?php

class Lasagna{
    private const EXPECTED_MINUTES_IN_OVEN = 40;

    public function expectedCookTime(): int{
        return self::EXPECTED_MINUTES_IN_OVEN;
    }

    public function remainingCookTime(int $elapsed_minutes): int{
        return self::EXPECTED_MINUTES_IN_OVEN - $elapsed_minutes;
    }

    public function totalPreparationTime(int $layers_to_prep): int{
        return 2 * $layers_to_prep;
    }

    public function totalElapsedTime(int $layers_to_prep, int $elapsed_minutes): int{
        return $this->totalPreparationTime($layers_to_prep) + $elapsed_minutes;
    }

    public function alarm(): string{
        return "Ding!";
    }
}

$timer = new Lasagna();
echo $timer->expectedCookTime(), PHP_EOL;
echo $timer->remainingCookTime(30), PHP_EOL;
echo $timer->totalPreparationTime(3), PHP_EOL;
echo $timer->totalElapsedTime(3, 20), PHP_EOL;
echo $timer->alarm(), PHP_EOL;
