<?php
/**
 * Config
 *
 * @author Michael Pearson <pandra-support@phpgrease.net>
 * @copyright 2010 phpgrease.net
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @version 0.2.1
 * @package pandra
 */
namespace Pandra;

define('MODEL_OUT_DIR', dirname(__FILE__).'/models/');
define('SCHEMA_PATH', dirname(__FILE__).'/schemas/');
define('THRIFT_PORT_DEFAULT', 9160);
define('DEFAULT_ROW_LIMIT', 10);
define('PERSIST_CONNECTIONS', TRUE); // TSocket Persistence
define('CASSANDRA_CONF_PATH', '/usr/local/cassandra/conf/cassandra.yaml');

define('DEFAULT_POOL_NAME', 'system');
define('MAX_RETRIES', 2);
define('RETRY_COOLDOWN', 10);

define('THRIFT_TRANSPORT_BUFFERED', 1);
define('THRIFT_TRANSPORT_FRAMED', 2);
define('THRIFT_TRANSPORT', THRIFT_TRANSPORT_FRAMED);

require_once dirname(__FILE__).'/lib/loader.php';

// Put any extra setups in project_config.php
// ie: setting up loggers, creating connections etc.
// This is also built by build-models
if (file_exists(dirname(__FILE__).'/project_config.php')) {
    require_once(dirname(__FILE__).'/project_config.php');
}