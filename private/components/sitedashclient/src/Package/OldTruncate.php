<?php

namespace modmore\SiteDashClient\Package;

use FilesystemIterator;
use modmore\SiteDashClient\CommandInterface;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class OldTruncate implements CommandInterface {
    protected $modx;
    protected $params = array();
    /**
     * @var \modCacheManager
     */
    protected $cacheManager;

    public function __construct(\modX $modx, array $params)
    {
        $this->modx = $modx;
        $this->params = $params;
        $this->cacheManager = $modx->getCacheManager();
    }

    public function run()
    {
        $path = realpath(MODX_CORE_PATH . 'packages/');
        if (!file_exists($path) || !is_readable($path)) {
            http_response_code(501);
            echo json_encode([
                'success' => false,
                'message' => 'Can\'t read packages directory',
            ], JSON_PRETTY_PRINT);
            return;
        }

        http_response_code(200);
        echo json_encode($this->truncateOldPackages($path), JSON_PRETTY_PRINT);
    }


    private function truncateOldPackages($path)
    {
        $paths = array_diff(scandir($path), ['..', '.', 'logs']);
        $results = [];
        foreach ($paths as $subPath) {
            $deletedPaths = $this->cacheManager->deleteTree($path . $subPath . '/', ['deleteTop' => true, 'extensions' => []]);
            $results[$subPath] = is_array($deletedPaths) && count($deletedPaths) > 0;
        }
        if (!empty($results)) {
            return [
                'success' => true,
                'mode' => 'force',
                'message' => 'Removed ' . count($results) . ' directories',
                'results' => $results
            ];
        }

        return [
            'success' => false,
            'message' => 'There were no cache directories to clear.',
            'mode' => 'regular',
            'results' => $results
        ];
    }
}
