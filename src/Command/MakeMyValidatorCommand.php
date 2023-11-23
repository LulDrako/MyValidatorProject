<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class MakeMyValidatorCommand extends Command
{
    protected static $defaultName = 'make:my-validator';
    protected static $defaultDescription = 'Creates a validator for composer.json files.';

    protected function configure(): void
    {
        $this->addArgument('lang', InputArgument::REQUIRED, 'The ISO language code (th, en, ch).');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $lang = $input->getArgument('lang');

        if (!in_array($lang, ['th', 'en', 'ch'])) {
            $io->error("Error: The language code is invalid. Possible values are [th, en, ch].");
            return Command::FAILURE;
        }

        $io->success("Validator created for language: $lang");

        return Command::SUCCESS;
    }
}