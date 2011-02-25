<?php
/**
 * DokuWiki Default Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * You should leave the doctype at the very top - It should
 * always be the very first line of a document.
 *
 * @link   http://dokuwiki.org/templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

define('TEMPLATE_ROOT', dirname(__FILE__));

require_once('lib/misc.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']; ?>" 
	  lang="<?php echo $conf['lang']; ?>" dir="<?php echo $lang['direction']; ?>">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
			<?php tpl_pagetitle(); ?> [<?php echo strip_tags($conf['title']); ?>]
		</title>
		
		<?php tpl_metaheaders(); ?>
		
		<link rel="shortcut icon" href="<?php echo DOKU_TPL; ?>images/favicon.ico" />
		
		<?php oldIncludeHook('meta'); ?>
	</head>
	<body class="dw-left">
		
		<?php oldIncludeHook('topheader'); ?>
		
		<div class="dokuwiki">
			<?php oldIncludeHook('menu'); ?>
			
			<?php html_msgarea()?>
		</div>
		
		<div id="wrapper" class="dokuwiki">
			<?php oldIncludeHook('content'); ?>
		</div>
		
		<?php oldIncludeHook('footer'); ?>
		
		<div class="no">
			<?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?>
		</div>
		
	</body>
</html>
