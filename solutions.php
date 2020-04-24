<?php

function findOddEvenPair(array $numbers): int
{
    $result = [];
    $numbersCount = count($numbers);

    if ($numbersCount >= 2) {
        for ($i = 0; $i < $numbersCount; $i++) {
            $numbersLeft = count($numbers);
            if ($numbersLeft >= 2) {
                $check = $numbers[0] % 2 == 0 && $numbers[1] % 2 !== 0 || $numbers[0] % 2 !== 0 && $numbers[1] % 2 == 0;
                array_shift($numbers);

                if ($check == true) $result[] = $i;
            }
        }
    }

    if (isset($result[1])) return $result[count($result) - 1];
    else return -1;
}

class SummationService
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function sum(int $a, int $b): int
    {
        $result = 0;
        for ($i = $a; $i <= $b; $i++) {
            $result = $result + $this->data[$i];
        }

        return $result;
    }
}

function longestSubstr(string $text): string
{
    $string = str_split($text);
    $subString = [];
    $counter = 1;

    for ($i = 0; $i < count($string) - 1; $i++) {
        if (array_search($string[$i] . $string[$i + 1], $subString) == false) {
            $subString[$string[$i] . $string[$i + 1]] = $string[$i] . $string[$i + 1];
            $counter++;
        }
    }

    return implode(array_splice($string, 0, $counter));
}

echo findOddEvenPair([1, 2, 4, 3, 7, 5, 9, 10]) . PHP_EOL;

$summationService = new SummationService([-1, 0, 2, 7, -15]);
echo $summationService->sum(2, 4) . PHP_EOL;

echo longestSubstr('aZaZaZ');