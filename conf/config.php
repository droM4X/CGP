<?php

# collectd version
$CONFIG['version'] = 5;

# collectd's datadir
$CONFIG['datadir'] = '/var/lib/collectd/rrd';

# location of the types.db file
$CONFIG['typesdb'][] = '/usr/share/collectd/types.db';

# rrdtool executable
$CONFIG['rrdtool'] = '/usr/bin/rrdtool';

# rrdtool special command-line options
$CONFIG['rrdtool_opts'] = array('-N');

# category of hosts to show on main page
#$CONFIG['cat']['category1'] = array('host1', 'host2');

# category of hosts based on regular expression
#$CONFIG['cat']['Mailservers'] = '/mail\d+/';

# default plugins to show on host page
$CONFIG['overview'] = array('load', 'cpu', 'memory');

# example of filter to show only the if_octets of eth0 on host page
# (interface must be enabled in the overview config array)
#$CONFIG['overview_filter']['interface'] = array('ti' => 'eth0', 't' => 'if_octets');

# default plugins time range
$CONFIG['time_range']['default'] = 86400;
$CONFIG['time_range']['uptime']  = 2592000;

# show load averages and used memory on overview page
$CONFIG['showload'] = true;
$CONFIG['showmem'] = true;
$CONFIG['showtime'] = true;

$CONFIG['term'] = array(
	'1hour'	 => 3600 * 1,
	'12hour' => 3600 * 12,
	'day'	 => 86400,
	'week'	 => 86400 * 7,
	'month'	 => 86400 * 31,
	'quarter'=> 86400 * 31 * 3,
	'year'	 => 86400 * 365,
);

# show graphs in bits or bytes
$CONFIG['network_datasize'] = 'bytes';

# "png", "svg", "canvas" or "hybrid" (canvas on detail page, png on the others) graphs
$CONFIG['graph_type'] = 'png';

# For canvas graphs, use 'async' or 'sync' fetch method
$CONFIG['rrd_fetch_method'] = 'sync';

# use the negative X-axis in I/O graphs
$CONFIG['negative_io'] = true;

# add XXth percentile line + legend to network graphs
# false = disabled; 95 = 95th percentile
$CONFIG['percentile'] = 95;

# create smooth graphs (rrdtool -E)
$CONFIG['graph_smooth'] = true;

# draw min/max spikes in a lighter color in graphs with type default
$CONFIG['graph_minmax'] = true;

# The URL that provides RRD files for the "canvas" graph type. Examples:
# 'rrd/{file}' is replaced by 'rrd/example.com/load/load.rrd'
# 'rrd.php?path={file_escaped}' becomes 'rrd.php?path=host%3Fload%3Fload.rrd'
$CONFIG['rrd_url'] = 'rrd.php?path={file_escaped}';

# browser cache time for the graphs (in seconds)
$CONFIG['cache'] = 10;

# page refresh (in seconds)
$CONFIG['page_refresh'] = '';

# default width/height of the graphs
$CONFIG['width'] = 450;
$CONFIG['height'] = 200;
# default width/height of detailed graphs
$CONFIG['detail-width'] = 1600;
$CONFIG['detail-height'] = 650;
# max width/height of a graph (to prevent from OOM)
$CONFIG['max-width'] = $CONFIG['detail-width'] * 2;
$CONFIG['max-height'] = $CONFIG['detail-height'] * 2;

# collectd's unix socket (unixsock plugin)
# enabled: 'unix:///var/run/collectd-unixsock'
# enabled (rrdcached): 'unix:///var/run/rrdcached.sock'
# disabled: NULL
$CONFIG['socket'] = NULL;

# flush rrd data to disk using "collectd" (unixsock plugin)
# or a "rrdcached" server
$CONFIG['flush_type'] = 'collectd';

# system default timezone when not set
$CONFIG['default_timezone'] = 'UTC';


# load local configuration
if (file_exists(dirname(__FILE__).'/config.local.php'))
	include_once 'config.local.php';
