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
        'title'   => 'Cette page est manquante !',
        'message' => 'Désolé, mais la page que vous recherchez est introuvable. Vérifier l\'URL et essayez à nouveau.',
        'link'    => 'Retour à l\'accueil',
    ],
    'unauthorized' => [
        'code'    => '401',
        'title'   => 'Unauthorized',
        'message' => 'Sorry, you need admin privileges to see this page.',
        'link'    => 'Return to homepage',
    ],
];
