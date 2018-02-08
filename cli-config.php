<?php
// cli-config.php

// Recreate the database after changing meta info by:
//$ vendor/bin/doctrine orm:schema-tool:drop --force
//$ vendor/bin/doctrine orm:schema-tool:create
// or
//$ vendor/bin/doctrine orm:schema-tool:update --force

require_once "bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);