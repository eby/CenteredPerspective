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
	<body>
		
		<?php oldIncludeHook('topheader'); ?>
		
		<div class="dokuwiki">
			
			<?php html_msgarea()?>
			
			<div class="stylehead">
				<div class="header">
					<div class="pagename">
						<?php echoPagename(); ?>
					</div>
					<div class="logo">
						<?php echoLogo(); ?>
					</div>
					<div class="clearer"></div>
				</div>
				
				<?php oldIncludeHook('header'); ?>
				
				<div class="bar" id="bar__top">
					<div class="bar-left" id="bar__topleft">
						<?php tpl_button('edit'); ?>
						<?php tpl_button('history'); ?>
					</div>
					<div class="bar-right" id="bar__topright">
						<?php tpl_button('recent'); ?>
						<?php tpl_searchform(); ?>
						&nbsp;
					</div>
					<div class="clearer"></div>
				</div>
				
				<?php if($conf['breadcrumbs']): ?>
				<div class="breadcrumbs">
					<?php tpl_breadcrumbs()?>
					<?php //tpl_youarehere() //(some people prefer this)?>
				</div>
				<?php endif; ?>
					
				<?php if($conf['youarehere']): ?>
				<div class="breadcrumbs">
					<?php tpl_youarehere() ?>
				</div>
				<?php endif; ?>
				
			</div>
			
			<?php tpl_flush()?>	
			<?php oldIncludeHook('pageheader'); ?>
			
			<div class="page">
				<!-- wikipage start -->
				<?php tpl_content()?>
				<!-- wikipage stop -->
			</div>
			<div class="clearer">
				&nbsp;
			</div>
			
			<?php tpl_flush()?>
			
			<div class="stylefoot">
				<div class="meta">
					<div class="user">
						<?php tpl_userinfo()?>
					</div>
					<div class="doc">
						<?php tpl_pageinfo()?>
					</div>
				</div>
				
				<?php oldIncludeHook('pagefooter'); ?>
				
				<div class="bar" id="bar__bottom">
					<div class="bar-left" id="bar__bottomleft">
						<?php tpl_button('edit'); ?>
						<?php tpl_button('history'); ?>
						<?php tpl_button('revert'); ?>
					</div>
					<div class="bar-right" id="bar__bottomright">
						<?php tpl_button('subscribe'); ?>
						<?php tpl_button('admin'); ?>
						<?php tpl_button('profile'); ?>
						<?php tpl_button('login'); ?>
						<?php tpl_button('index'); ?>
						<?php tpl_button('top'); ?>&nbsp;
					</div>
					<div class="clearer"></div>
				</div>
			</div>
			
			<?php tpl_license(false);?>
			
		</div>
		
		<?php oldIncludeHook('footer'); ?>
		
		<div class="no">
			<?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?>
		</div>
		
	</body>
</html>
