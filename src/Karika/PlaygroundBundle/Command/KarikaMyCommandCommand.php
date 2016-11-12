<?php

namespace Karika\PlaygroundBundle\Command;

use Karika\CoreBundle\Command\KarikaMyCommandCommand as BaseKarikaMyCommandCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class KarikaMyCommandCommand extends BaseKarikaMyCommandCommand
{
    protected function configure()
    {
        parent::configure();
        $this->setDescription('overridden');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        parent::execute($input, $output);

        $output->writeln('Overridden.');
    }

}
