<?php

namespace modmore\SiteDashClient\Package;

use FilesystemIterator;
use modmore\SiteDashClient\CommandInterface;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class OldSize implements CommandInterface {
    protected $modx;
    protected $params = array();

    public function __construct(\modX $modx, array $params)
    {
        $this->modx = $modx;
        $this->params = $params;
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
        echo json_encode([
            'success' => true,
            'size' => $this->calculateSize($path),
        ], JSON_PRETTY_PRINT);
    }

    private function calculateSize($path)
    {
        $size = 0;
        foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS)) as $object){
            $size += $object->getSize();
        }
        return $size;
    }
}
