<?php

namespace Dorgflow\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

class MyCommand extends Command implements ContainerAwareInterface {

  use ContainerAwareTrait;

  protected function configure() {
    $this
      ->setName('mycommand')
      ->setDescription('test command.')
      ->setHelp('This command is a test.');
  }

  protected function execute(InputInterface $input, OutputInterface $output) {
    // ?? There's no container here??
    dump($this->container);

    $output->writeln('The command works!');
  }

}
