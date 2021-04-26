<?php

/*
 * This file is part of JoliCode's Forecast PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Forecast;

use JoliCode\Forecast\Api\Client as BaseClient;
use JoliCode\Forecast\Api\Model\Assignments;
use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;

class Client extends BaseClient
{
    public function listAssignments(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        if (!\array_key_exists('end_date', $queryParameters) || !\array_key_exists('start_date', $queryParameters)) {
            throw new MissingOptionsException('The options "end_date", "start_date" are required.');
        }

        $intervals = $this->buildDateIntervals($queryParameters['start_date'], $queryParameters['end_date']);
        $assignments = [];

        foreach ($intervals as $interval) {
            $queryParameters['start_date'] = $interval['start_date']->format('Y-m-d');
            $queryParameters['end_date'] = $interval['end_date']->format('Y-m-d');
            $assignments = array_merge(
                $assignments,
                $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\ListAssignments($queryParameters), $fetch)->getAssignments()
            );
        }

        $assignments = array_unique($assignments, \SORT_REGULAR);
        $assignmentsObject = new Assignments();
        $assignmentsObject->setAssignments($assignments);

        return $assignmentsObject;
    }

    private function buildDateIntervals(string $start, string $end): array
    {
        $intervals = [];
        $start = new \DateTime($start);
        $end = new \DateTime($end);
        $pivot = clone $start;
        $pivot->add(new \DateInterval('P180D'))->setTime(0, 0, 0, 0);

        while ($pivot < $end) {
            $intervals[] = [
                'start_date' => $start,
                'end_date' => $pivot,
            ];

            $start = clone $pivot;
            $start->add(new \DateInterval('P1D'));
            $pivot = clone $start;
            $pivot->add(new \DateInterval('P180D'));
        }

        if ($start <= $end) {
            $intervals[] = [
                'start_date' => $start,
                'end_date' => $end,
            ];
        }

        return $intervals;
    }
}
