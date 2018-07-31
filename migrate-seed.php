<?php

// executa comando no terminal
exec(__DIR__ . '/vendor/bin/phinx rollback');
exec(__DIR__ . '/vendor/bin/phinx migrate');
exec(__DIR__ . '/vendor/bin/phinx seed:run');
