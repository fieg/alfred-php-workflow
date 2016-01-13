<?php

namespace Alfred;

class ResultSet
{
    protected $items;

    public function add(ResultItem $item)
    {
        $this->items[] = $item;
    }

    public function toXml()
    {
        $xml = '';
        foreach ($this->items as $item) {
            $xml .= $item->toXml();
        }

        return <<<EOF
<?xml version="1.0"?>
<items>
    $xml
</items>
EOF;
    }
}
