<?php

namespace Ikicode\DesignPatterns\Creational\AbstractFactory;

class CsvParser implements Parser
{
    /**
     * @var bool
     */
    private $skipHeaderLine;

    public function __construct(bool $skipHeaderLine)
    {
        $this->skipHeaderLine = $skipHeaderLine;
    }

    public function parse(string $input): array
    {
        $headerWasParsed = false;
        $parsedLines = [];

        foreach (explode(PHP_EOL, $input) as $line) {
            if (!$headerWasParsed && $this->skipHeaderLine) {
                continue;
            }

            $parsedLines[] = str_getcsv($line);
        }

        return $parsedLines;
    }
}
