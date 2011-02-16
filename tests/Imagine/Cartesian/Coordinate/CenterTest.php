<?php

/*
 * This file is part of the Imagine package.
 *
 * (c) Bulat Shakirzyanov <mallluhuct@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Imagine\Cartesian\Coordinate;

use Imagine\Cartesian\Coordinate;
use Imagine\Cartesian\CoordinateInterface;
use Imagine\Cartesian\Size;
use Imagine\Cartesian\SizeInterface;

class CenterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers Imagine\Cartesian\Coordinate::getX
     * @covers Imagine\Cartesian\Coordinate::getY
     *
     * @dataProvider getSizesAndCoordinates
     *
     * @param SizeInterface       $box
     * @param CoordinateInterface $expected
     */
    public function testShouldGetCenterCoordinates(SizeInterface $box, CoordinateInterface $expected)
    {
        $point = new Center($box);

        $this->assertEquals($expected->getX(), $point->getX());
        $this->assertEquals($expected->getY(), $point->getY());
    }

    /**
     * Data provider for testShouldGetCenterCoordinates
     *
     * @return array
     */
    public function getSizesAndCoordinates()
    {
        return array(
            array(new Size(10, 15), new Coordinate(5, 8)),
            array(new Size(40, 23), new Coordinate(20, 12)),
            array(new Size(14, 8), new Coordinate(7, 4)),
        );
    }
}
