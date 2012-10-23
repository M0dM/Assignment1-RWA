<?php

namespace ITB\Bundle\UltimateFrisbeeUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ITBUltimateFrisbeeUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
