<?php

/**
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 - 2019 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <me@sachatelgenhof.com>
 */

namespace Yasumi\tests\Lithuania;

use Yasumi\Holiday;
use Yasumi\tests\YasumiTestCaseInterface;

/**
 * Class containing tests for Assumption of Mary day in Lithuania.
 *
 * @author Gedas Lukošius <gedas@lukosius.me>
 */
class AssumptionOfMaryDayTest extends LithuaniaBaseTestCase implements YasumiTestCaseInterface
{
    /**
     * The name of the holiday to be tested
     */
    public const HOLIDAY = 'assumptionOfMary';

    /**
     * @return array
     * @throws \Exception
     */
    public function holidayDataProvider(): array
    {
        return $this->generateRandomDates(8, 15, self::TIMEZONE);
    }

    /**
     * @dataProvider holidayDataProvider
     *
     * @param int       $year
     * @param \DateTime $expected
     *
     * @throws \ReflectionException
     */
    public function testHoliday($year, \DateTime $expected)
    {
        $this->assertHoliday(self::REGION, self::HOLIDAY, $year, $expected);
    }

    /**
     * {@inheritdoc}
     * @throws \ReflectionException
     */
    public function testTranslation(): void
    {
        $this->assertTranslatedHolidayName(
            self::REGION,
            self::HOLIDAY,
            $this->generateRandomYear(),
            [self::LOCALE => 'Žolinė (Švč. Mergelės Marijos ėmimo į dangų diena)']
        );
    }

    /**
     * {@inheritdoc}
     * @throws \ReflectionException
     */
    public function testHolidayType(): void
    {
        $this->assertHolidayType(self::REGION, self::HOLIDAY, $this->generateRandomYear(), Holiday::TYPE_OFFICIAL);
    }
}
