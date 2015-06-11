<?php

namespace Stats\Incoming\FacebookBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Stats\Incoming\FacebookBundle\StatsIncomingFacebookBundle;

class fetchCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('fetch:facebook')
            ->setDescription('Fetch URL information from facebook')
            ->addArgument(
                'url',
                InputArgument::REQUIRED,
                'URL to analize shares'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	$q = new StatsIncomingFacebookBundle();
        $url = $input->getArgument('url');
        $r = $q->getURLCount($url);
        $output->writeln($r);
    }
}