--TEST--
swoole_mysql: recursive query
--SKIPIF--
<?php
require __DIR__ . '/../include/skipif.inc';
skip_if_in_docker('onClose event lost');
?>
--INI--
assert.active=1
assert.warning=1
assert.bail=0
assert.quiet_eval=0


--FILE--
<?php
require_once __DIR__ . '/../include/bootstrap.php';
require_once __DIR__ . '/../include/swoole.inc';

fork_exec(function() {
    require_once __DIR__ . '/../include/api/swoole_mysql/swoole_mysql_recursive_query.php';
});
?>
--EXPECT--
SUCCESS
closed