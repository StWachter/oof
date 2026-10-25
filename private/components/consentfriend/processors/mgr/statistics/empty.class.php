<?php
/**
 * Empty statistics
 *
 * @package consentfriend
 * @subpackage processors
 */

use TreehillStudio\ConsentFriend\Processors\Processor;

/**
 * Class ConsentfriendEmptyStatisticsProcessor
 */
class ConsentfriendEmptyStatisticsProcessor extends Processor
{
    public function process()
    {
        $this->modx->removeCollection('ConsentfriendLogs', []);

        return $this->success();
    }
}

return 'ConsentfriendEmptyStatisticsProcessor';
