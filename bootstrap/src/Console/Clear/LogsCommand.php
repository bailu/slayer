<?php
namespace Bootstrap\Console\Clear;

use Bootstrap\Console\SlayerCommand;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class LogsCommand extends SlayerCommand
{
    use ClearTrait;

    protected $name = 'clear:logs';

    protected $description = 'Clear the storage/logs folder';

    public function slash()
    {
        $this->clear(config()->path->logs);
    }
}