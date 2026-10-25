<?php
/**
 * Clean statistics
 *
 * @package consentfriend
 * @subpackage processors
 */

use TreehillStudio\ConsentFriend\Processors\Processor;

/**
 * Class ConsentfriendCleanStatisticsProcessor
 */
class ConsentfriendCleanStatisticsProcessor extends Processor
{
    public function process()
    {
        $currentServices = $this->consentfriend->getServices(false);

        /** @var ConsentfriendLogs[] $logs */
        $logs = $this->modx->getIterator('ConsentfriendLogs', ['services:!=' => '']);
        foreach ($logs as $log) {
            $services = json_decode($log->get('services'), true) ?? [];
            $enabledServices = [];
            foreach ($currentServices as $currentService) {
                if (($services[$currentService['name']] ?? '') || ($currentService['required'] ?? false)) {
                    $enabledServices[$currentService['name']] = true;
                }
            }
            if ($log->get('services') !== json_encode($enabledServices)) {
                $log->set('services', json_encode($enabledServices));
                $log->save();
            }
        }

        return $this->success();
    }
}

return 'ConsentfriendCleanStatisticsProcessor';
