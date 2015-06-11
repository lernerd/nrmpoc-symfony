<?php

namespace Stats\Incoming\TwitterBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Stats\Incoming\TwitterBundle\StatsIncomingTwitterBundle;

class fetchCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('fetch:twitter')
            ->setDescription('Fetch URL information from twitter')
            ->addArgument(
                'url',
                InputArgument::REQUIRED,
                'URL to analize shares'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	$q = new StatsIncomingTwitterBundle();
        $url = $input->getArgument('url');
        $r = $q->getURLCount($url);
        $output->writeln($r);
    }
}