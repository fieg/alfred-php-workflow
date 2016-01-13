<?php

namespace Alfred;

class ResultItem
{
    protected $uid;
    protected $arg = 'basic';
    protected $valid = 'yes';
    protected $title;
    protected $subtitle;
    protected $icon = 'icon.png';

    /**
     * ResultItem constructor.
     *
     * @param $title
     * @param $subtitle
     */
    public function __construct($title, $subtitle, $arg)
    {
        $this->uid      = uniqid();
        $this->title    = $title;
        $this->subtitle = $subtitle;
        $this->arg      = $arg;
    }

    public function toXml()
    {
        return <<<EOF
<item uid="$this->uid" arg="$this->arg" valid="$this->valid">
    <title>$this->title</title>
    <subtitle>$this->subtitle</subtitle>
    <icon>$this->icon</icon>
</item>
EOF;
    }
}
