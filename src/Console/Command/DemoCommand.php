<?php

namespace Console\Command;

use Alfred\ResultSet;
use Alfred\ResultItem;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DemoCommand extends Command
{
    protected function configure()
    {
        $this->setName('demo');
        $this->addArgument('query');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $query = trim($input->getArgument('query'));

        $list = [
            'John Appleseed',
            'John Doe',
            'Jane Doe',
        ];

        $matches = array_filter($list, function($item) use ($query) {
            if (!$query) return true;

            return (false !== strpos(strtolower($item), strtolower($query)));
        });

        sort($matches);

        $result = new ResultSet();

        foreach ($matches as $match) {
            $result->add(new ResultItem($match, '', $match));
        }

        echo $result->toXml();
    }
}
