<?php

namespace App\ElementList;

use DNADesign\ElementalList\Model\ElementList;

class TwoColumnLayout extends ElementList
{
    private static $table_name = 'TwoColumnLayout';

    private static $title = 'Two Column Layout';

    private static $description = 'Orderable list of elements with a two column layout';

    private static $singular_name = 'two column layout';

    private static $plural_name = 'two column layouts';

    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'Two Column Layout');
    }
}
