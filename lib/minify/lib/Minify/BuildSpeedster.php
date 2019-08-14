<?php

/**
 * Extend Minify_Build so it returns the last modified timestamp only
 * Called from Magento
 * app/code/community/Fooman/Speedster/Block/Page/Html/Head.php
 *
 */

require_once 'Build.php';

class Minify_Build_Speedster extends Minify_Build {
    /**
     * Get last modified
     *
     *
     * @param null
     * @return string
     */
        public function getLastModified() {
            if (0 === stripos(PHP_OS, 'win')) {
                require_once 'Minify.php';
                Minify::setDocRoot(); // we may be on IIS
            }
            return $this->lastModified;
        }
    }
?>
