<?php
/**
 * i-MSCP CronJobs plugin
 * Copyright (C) 2014-2015 Laurent Declercq <l.declercq@nuxwin.com>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 */

$config = iMSCP_Registry::get('config');

return array(
	// Path to the crontab command ( default: /usr/bin/crontab )
	'crontab_cmd_path' => '/usr/bin/crontab',

	// Path to crontab directory ( default: /var/spool/cron/crontabs )
	'crontab_dir' => '/var/spool/cron/crontabs',

	// Root jail directory ( default: /var/chroot/CronJobs )
	//
	// Full path to the root jail directory. Be sure that the partition in which this directory is living has enough
	// space to host the jail.
	//
	// Warning: If you are changing this path, don't forget to move the jail in the new location, and also to edit the
	// path from the config/etc/rsyslog.d/imscp_cronjobs_plugin.conf template file.
	'root_jail_dir' => '/var/chroot/CronJobs',

	// Makejail configuration directory ( default: <CONF_DIR>/CronJobs )
	// Don't change this parameter unless you know what you are doing.
	'makejail_confdir_path' => $config['CONF_DIR'] . '/CronJobs',

	// Makejail script path
	// Don't change this parameter unless you know what you are doing.
	'makejail_path' => PLUGINS_PATH . '/InstantSSH/bin/makejail',

	// Preserved files ( default: <USER_WEB_DIR> )
	//
	// The plugin won't try to remove files or directories inside jail if their path begins with one of the strings in
	// this list.
	//
	// This option can be also defined in the application sections (see below).
	//
	// WARNING: Do not remove the default entry unless you know what you are doing.
	'preserve_files' => array(
		$config['USER_WEB_DIR']
	),

	// Whether or not files from packages required by packages listed in the packages option must be copied inside the
	// jail
	'include_pkg_deps' => false,

	// Selected application sections for jailed environment ( default: cronjobs_base )
	//
	// This is the list of application sections which are used to create/update the jailed environment.
	//
	// By default only the cronjobs_base application section is added, which allows to build very restricted jailed
	// environment.
	'app_sections' => array(
		'cronjobs_base'
	),

	// Predefined application sections for jailed shell environments
	// See the InstantSSH configuration file for more details about available options

	// bashshell
	// Provide restricted GNU bash shell
	'bashshell' => array(
		'paths' => array(
			'/bin/sh', '/bin/bash', '/bin/ls', '/bin/cat', '/bin/chmod', '/bin/mkdir', '/bin/cp', '/bin/cpio',
			'/bin/date', '/bin/dd', '/bin/echo', '/bin/egrep', '/bin/false', '/bin/fgrep', '/bin/grep', '/bin/gunzip',
			'/bin/gzip', '/bin/ln', '/bin/mktemp', '/bin/more', '/bin/mv', '/bin/pwd', '/bin/rm', '/bin/rmdir',
			'/bin/sed', '/bin/sleep', '/bin/sync', '/bin/tar', '/usr/bin/basename', '/usr/bin/touch', '/bin/true',
			'/bin/uncompress', '/bin/zcat', '/etc/issue', '/etc/bash.bashrc', '/usr/bin/dircolors', '/usr/bin/tput',
			'/tmp', '/var/log', '/usr/bin/awk', '/bin/bzip2', '/bin/bunzip2', '/usr/bin/ldd', '/usr/bin/less',
			'/usr/bin/clear', '/usr/bin/cut', '/usr/bin/du', '/usr/bin/find', '/usr/bin/head', '/usr/bin/md5sum',
			'/usr/bin/nice', '/usr/bin/sort', '/usr/bin/tac', '/usr/bin/tail', '/usr/bin/tr', '/usr/bin/wc',
			'/usr/bin/watch', '/usr/bin/whoami', '/usr/bin/id', '/bin/hostname', '/usr/bin/lzma', '/usr/bin/xz',
			'/usr/bin/pbzip2', '/usr/bin/curl', '/usr/bin/env', '/bin/readlink', '/usr/bin/groups', '/etc/localtime',
			'/etc/timezone'
		),
		'include_app_sections' => array(
			'uidbasics'
		),
		'devices' => array(
			'/dev/null'
		)
	),

	// uidbasics section
	// Provide common files for jails that need user/group information
	'uidbasics' => array(
		'paths' => array(
			'/etc/ld.so.conf', '/etc/passwd', '/etc/group', '/etc/nsswitch.conf', '/lib/libnsl.so.1',
			'/lib64/libnsl.so.1', '/lib/libnss*.so.2', '/lib64/libnss*.so.2', '/lib/i386-linux-gnu/libnsl.so.1',
			'/lib/i386-linux-gnu/libnss*.so.2', '/lib/x86_64-linux-gnu/libnsl.so.1',
			'/lib/x86_64-linux-gnu/libnss*.so.2'
		)
	),

	// netbasics section
	// Provide common files for jails that need any internet connectivity
	'netbasics' => array(
		'paths' => array(
			'/lib/libnss_dns.so.2', '/lib64/libnss_dns.so.2', '/etc/resolv.conf', '/etc/host.conf', '/etc/hosts',
			'/etc/protocols', '/etc/services'
		)
	),

	# mysqltools section
	# Provide the MySQL command-line tool and the mysqldump program
	'mysqltools' => array(
		'paths' => array(
			'/etc/mysql', '/usr/bin/mysql', '/usr/bin/mysqldump'
		),
		'jail_copy_file_to' => array(
			PLUGINS_PATH . '/InstantSSH/config/etc/mysql/my.cnf' => '/etc/mysql/my.cnf'
		)
	),

	# php section
	# Provide PHP (CLI) and PHP common modules ( if installed on the system )
	'php' => array(
		'paths' => array(
			'/usr/bin/php',
			'/etc/php5/cli/php.ini',
			'/etc/php5/cli/conf.d/*mysqlnd.ini', '/usr/lib/php5/*/mysqlnd.so',
			'/etc/php5/cli/conf.d/*pdo.ini', '/usr/lib/php5/*/pdo.so',
			'/etc/php5/cli/conf.d/*gd.ini', '/usr/lib/php5/*/gd.so',
			'/etc/php5/cli/conf.d/*intl.ini', '/usr/lib/php5/*/intl.so',
			'/etc/php5/cli/conf.d/*json.ini', '/usr/lib/php5/*/json.so',
			'/etc/php5/cli/conf.d/*mcrypt.ini', '/usr/lib/php5/*/mcrypt.so',
			'/etc/php5/cli/conf.d/*mysql.ini', '/usr/lib/php5/*/mysql.so',
			'/etc/php5/cli/conf.d/*mysqli.ini', '/usr/lib/php5/*/mysqli.so',
			'/etc/php5/cli/conf.d/*pdo_mysql.ini', '/usr/lib/php5/*/pdo_mysql.so',
			'/etc/php5/cli/conf.d/*readline.ini', '/usr/lib/php5/*/readline.so'
		)
	),

	# wget section
	# Provide GNU Wget
	'wget' => array(
		'paths' => array(
			'/etc/ssl/certs/*', '/usr/bin/wget'
		),
		'devices' => array(
			'/dev/random', '/dev/urandom'
		)
	),

	# msmtp section
	# provide msmtp ( light SMTP client with support for server profiles )
	'msmtp' => array(
		'paths' => array(
			'/etc/aliases',  '/usr/bin/msmtp'
		),
		'jail_copy_file_to' => array(
			dirname(__FILE__) . '/config/etc/msmtprc' => '/etc/msmtprc'
		),
		'jail_run_commands' => array(
			'sed -i\'\' -e \'s/{HOSTNAME}/\'$(hostname -f)\'/\' /etc/msmtprc', // Setup maildomain in msmtp conffile
			'ln -s /usr/bin/msmtp /usr/sbin/sendmail' // Use the msmtp SMTP client as sendmail interface inside the jail
		)
	),

	# cron section
	# Allows to run cron jobs inside the jailed environment
	'cron' => array(
		'paths' => array(
			'/dev', '/usr/sbin/cron'
		),
		'include_app_sections' => array(
			'msmtp'
		),
		'sys_copy_file_to' => array(
			dirname(__FILE__) . '/config/etc/rsyslog.d/imscp_cronjobs_plugin.conf' => '/etc/rsyslog.d/imscp_cronjobs_plugin.conf'
		),
		'preserve_files' => array(
			'/dev/log'
		),
		'sys_run_commands' => array(
			$config['SERVICE_MNGR'] . ' rsyslog restart' // Restart rsyslog to create socket ( /dev/log ) inside jail 
		)
	),

	// cronjobs_base section
	// Provide pre-selected application sections, users and groups for jailed environment used by this plugin
	'cronjobs_base' => array(
		'include_app_sections' => array(
			'bashshell', 'netbasics', 'cron', 'wget', 'mysqltools', 'php'
		),
		'users' => array(
			'root',
			'www-data'
		),
		'groups' => array(
			'root',
			'www-data'
		)
	)
);
