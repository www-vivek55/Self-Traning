<?php
namespace Custom\CliDemo\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DemoCommand extends Command
{
    public function configure(){
        $this->setName('vivek:first_command')
            ->setDescription('this command print out welcome to first custom command')
            ->setAliases(array('fc'));
        $this->setDefinition([
            new InputArgument("custom_name", InputArgument::OPTIONAL,'the name of the person',null,null)
        ]);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('First custom cli command hello world,---'.$input->getArgument('custom_name'));
    }
}
