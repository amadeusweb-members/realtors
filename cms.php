<?php
function before_footer_assets() { //before as color needs to be overridden in mediakit
	includeThemeManager();
	echo implode('	', CanvasTheme::HeadCssFor('real-estate')) . NEWLINE;
}

function enrichThemeVars($vars, $what) {
	if ($what == 'header') {
		if (nodeIs(SITEHOME))
			$vars['optional-slider'] = getSnippet('home-slider');

		if ($vars['optional-slider'])
			variable('before_file_html', '<div class="m-4"></div>' . NEWLINE); //spacer
	}
	return $vars;
}

setup_cdn();
