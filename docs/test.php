<?php
require_once '../Command.php';
$cmd = new System_Command();
$xml = '<?xml version="1.0"?>
<doc>
  <test val="foo"/>
</doc>';
$cmd->pushCommand('echo', $xml);
$cmd->pushOperator('|');
$cmd->pushCommand('xmllint', '--format', '-');
if (System_Command::isError($result = $cmd->execute())) {
    echo $result->getMessage() . ' ' . $result->getDebugInfo();
}
else {
    echo $result;
}
?>
