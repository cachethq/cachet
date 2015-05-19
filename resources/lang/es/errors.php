<?php

/*
 * This file is part of Cachet.
 *
 * (c) James Brooks <james@cachethq.io>
 * (c) Joseph Cohen <joseph.cohen@dinkbit.com>
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'not-found' => [
        'code'    => '404',
        'title'   => '¡Esta página se perdió!',
        'message' => 'Lo sentimos, no se ha encontrado la página que estás buscando. Comprueba que la dirección URL no contenga errores y vuelve a intentarlo.',
        'link'    => 'Regresar a la página de inicio',
    ],
    'unauthorized' => [
        'code'    => '401',
        'title'   => 'No autorizado',
        'message' => 'Lo sentimos, necesitas privilegios de administrador para ver esta página.',
        'link'    => 'Regresar a la página de inicio',
    ],
];
