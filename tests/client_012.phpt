--TEST--
[CLIENT] Test exceptions: passing non-string array

--SKIPIF--
<?php
require_once 'testsuite_skipif.inc';

--FILE--
<?php
require_once 'testsuite_utilities.inc';

$redis = create_phpiredis_connection(REDIS_HOST, REDIS_PORT);

try {
    phpiredis_command_bs($redis, array(true));
} catch (Exception $e) {
    var_dump(
        get_class($e)
    );
}

--EXPECT--
string(24) "InvalidArgumentException"
