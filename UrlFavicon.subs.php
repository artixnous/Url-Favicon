<?php
/**
 * Url Favicon
 *
 * @author emanuele & BurkeKnight
 * @license   BSD http://opensource.org/licenses/BSD-3-Clause
 *
 * @version 0.0.2
 */

function urlFavicon()
{
	addInlineJavascript('
		$(\'.inner .bbc_link\').each(function() {
			var url = $(this).attr(\'href\'),
				domain = url.match(/:\/\/(.[^/]+)/)[1],
				schema = url.match(/^(http[s]*):\/\//)[1];
			$(this).css({
				\'background-image\': \'url(//favicons.githubusercontent.com/\' + domain + \')\',
				\'background-repeat\': \'no-repeat\',
				\'background-position\': \'0 2px\',
				\'padding-left\': \'18px\',
				\'background-size\': \'16px\'
			});
		})', true);
}
