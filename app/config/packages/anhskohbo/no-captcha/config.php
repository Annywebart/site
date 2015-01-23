<?php

return array(

	'secret'  => getenv('NOCAPTCHA_SECRET') ?: '6LfnpAATAAAAAAES1DttDrqXEeG26ue6kAhU4EEN',
	'sitekey' => getenv('NOCAPTCHA_SITEKEY') ?: '6LfnpAATAAAAAI7xvesV_wGlBYZKM6xCr1KfMHMa',

	'lang'    => app()->getLocale(),

);
