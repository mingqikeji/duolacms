<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/29
 * Time: 16:53
 */

require_once 'index.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);