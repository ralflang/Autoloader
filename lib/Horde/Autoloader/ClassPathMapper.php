<?php
/**
 * Horde_Autoloader_ClassPathMapper
 *
 * Interface for class loaders
 *
 * @author   Bob Mckee <bmckee@bywires.com>
 * @category Horde
 * @package  Horde_Autoloader
 */
interface Horde_Autoloader_ClassPathMapper
{
    public function mapToPath($className);
}
