<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class MeteringTime extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'MeteringTime';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Metering Time';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '4 s',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '6 s',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '8 s',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '16 s',
        ),
        4 => array(
            'Id' => 4,
            'Label' => '30 s',
        ),
        5 => array(
            'Id' => 5,
            'Label' => '1 min',
        ),
        6 => array(
            'Id' => 6,
            'Label' => '5 min',
        ),
        7 => array(
            'Id' => 7,
            'Label' => '10 min',
        ),
        8 => array(
            'Id' => 8,
            'Label' => '30 min',
        ),
        9 => array(
            'Id' => 9,
            'Label' => 'No Limit',
        ),
        10 => array(
            'Id' => 0,
            'Label' => '4 s',
        ),
        11 => array(
            'Id' => 4,
            'Label' => '8 s',
        ),
        12 => array(
            'Id' => 8,
            'Label' => '20 s',
        ),
        13 => array(
            'Id' => 12,
            'Label' => '1 min',
        ),
        14 => array(
            'Id' => 16,
            'Label' => '30 min',
        ),
        15 => array(
            'Id' => 0,
            'Label' => '4 s',
        ),
        16 => array(
            'Id' => 16,
            'Label' => '8 s',
        ),
        17 => array(
            'Id' => 32,
            'Label' => '20 s',
        ),
        18 => array(
            'Id' => 48,
            'Label' => '1 min',
        ),
        19 => array(
            'Id' => 64,
            'Label' => '30 min',
        ),
        20 => array(
            'Id' => 0,
            'Label' => '4 s',
        ),
        21 => array(
            'Id' => 1,
            'Label' => '6 s',
        ),
        22 => array(
            'Id' => 2,
            'Label' => '8 s',
        ),
        23 => array(
            'Id' => 3,
            'Label' => '16 s',
        ),
        24 => array(
            'Id' => 4,
            'Label' => '30 s',
        ),
        25 => array(
            'Id' => 5,
            'Label' => '1 min',
        ),
        26 => array(
            'Id' => 6,
            'Label' => '5 min',
        ),
        27 => array(
            'Id' => 7,
            'Label' => '10 min',
        ),
        28 => array(
            'Id' => 8,
            'Label' => '30 min',
        ),
        29 => array(
            'Id' => 9,
            'Label' => 'No Limit',
        ),
        30 => array(
            'Id' => 0,
            'Label' => '4 s',
        ),
        31 => array(
            'Id' => 16,
            'Label' => '6 s',
        ),
        32 => array(
            'Id' => 32,
            'Label' => '8 s',
        ),
        33 => array(
            'Id' => 48,
            'Label' => '16 s',
        ),
        34 => array(
            'Id' => 64,
            'Label' => '30 s',
        ),
        35 => array(
            'Id' => 80,
            'Label' => '1 min',
        ),
        36 => array(
            'Id' => 96,
            'Label' => '5 min',
        ),
        37 => array(
            'Id' => 112,
            'Label' => '10 min',
        ),
        38 => array(
            'Id' => 128,
            'Label' => '30 min',
        ),
        39 => array(
            'Id' => 144,
            'Label' => 'No Limit',
        ),
        40 => array(
            'Id' => 0,
            'Label' => '4 s',
        ),
        41 => array(
            'Id' => 4,
            'Label' => '6 s',
        ),
        42 => array(
            'Id' => 8,
            'Label' => '8 s',
        ),
        43 => array(
            'Id' => 12,
            'Label' => '16 s',
        ),
        44 => array(
            'Id' => 16,
            'Label' => '30 s',
        ),
        45 => array(
            'Id' => 20,
            'Label' => '30 min',
        ),
        46 => array(
            'Id' => 0,
            'Label' => '4 s',
        ),
        47 => array(
            'Id' => 16,
            'Label' => '6 s',
        ),
        48 => array(
            'Id' => 32,
            'Label' => '8 s',
        ),
        49 => array(
            'Id' => 48,
            'Label' => '16 s',
        ),
        50 => array(
            'Id' => 64,
            'Label' => '30 s',
        ),
        51 => array(
            'Id' => 80,
            'Label' => '1 min',
        ),
        52 => array(
            'Id' => 96,
            'Label' => '5 min',
        ),
        53 => array(
            'Id' => 112,
            'Label' => '10 min',
        ),
        54 => array(
            'Id' => 128,
            'Label' => '30 min',
        ),
    );

}
