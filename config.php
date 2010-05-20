<?php
/**
 * Config
 *
 * @author Michael Pearson <pandra-support@phpgrease.net>
 * @copyright 2010 phpgrease.net
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @version 0.2
 * @package pandra
 */
define('MODEL_OUT_DIR', dirname(__FILE__).'/models/');
define('SCHEMA_PATH', dirname(__FILE__).'/schemas/');
define('THRIFT_PORT_DEFAULT', 9160);
define('DEFAULT_ROW_LIMIT', 10);
define('PERSIST_CONNECTIONS', TRUE); // TSocket Persistence
define('CASSANDRA_CONF_PATH', '/usr/local/src/apache-cassandra-0.6.1/conf/storage-conf.xml');

require_once dirname(__FILE__).'/lib/loader.php';
?>
