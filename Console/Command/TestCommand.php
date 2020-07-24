<?php

namespace Groskampweb\Dev\Console\Command;

use Groskampweb\ExtendedRepositories\Repository\PageRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    /** @var string  */
    private const NAME = 'gros:test';

    public function __construct(
        PageRepository $pageRepository
    ) {
        parent::__construct(self::NAME);
        $this->pageRepository = $pageRepository;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ): void {
        $pageInterfaces = $this->pageRepository->getByIdentifier('klantenservice');
        echo '<pre>';
        var_dump(__FILE__);
        var_dump($pageInterfaces);
        exit;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure(): void
    {
        $this->setDescription('test command');
        parent::configure();
    }
}

