<?php

namespace App\ElementList;

use DNADesign\ElementalList\Model\ElementList;

class TwoOneTwoLayout extends ElementList
{
    private static $table_name = 'TwoOneTwoLayout';

    private static $title = 'Two One Two Layout';

    private static $description = 'Orderable list of elements with a two one two layout';

    private static $singular_name = 'two one two layout';

    private static $plural_name = 'two one two layouts';

    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'Two One Two Layout');
    }
}
