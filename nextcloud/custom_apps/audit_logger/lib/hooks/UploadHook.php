<?php

namespace OCA\AuditLogger\Hooks;

use OCP\Files\Node;

class UploadHook {
    public static function fileUploaded(Node $node) {
        $name = $node->getName();

        file_put_contents(
            '/tmp/upload_audit.log',
            date('c') . " uploaded: " . $name . PHP_EOL,
            FILE_APPEND
        );
    }
}
