<?php

namespace App\ElementList;

use DNADesign\ElementalList\Model\ElementList;

class StackedLayout extends ElementList
{
    private static $table_name = 'StackedLayout';

    private static $title = 'Stacked Layout';

    private static $description = 'Orderable list of elements with a stacked layout';

    private static $singular_name = 'stacked layout';

    private static $plural_name = 'stacked layouts';

    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'Stacked Layout');
    }
}
