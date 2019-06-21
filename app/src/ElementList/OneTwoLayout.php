<?php

namespace App\ElementList;

use DNADesign\ElementalList\Model\ElementList;

class OneTwoLayout extends ElementList
{
    private static $table_name = 'OneTwoLayout';

    private static $title = 'One - Two Layout';

    private static $description = 'Orderable list of elements with a one two layout';

    private static $singular_name = 'one two layout';

    private static $plural_name = 'one two layouts';

    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'One - Two Layout');
    }
}
