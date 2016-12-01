<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Handlers\Commands\System\Mail;

use CachetHQ\Cachet\Bus\Commands\System\Mail\TestMailCommand;
use Illuminate\Contracts\Mail\MailQueue;

/**
 * This is the test mail command handler class.
 *
 * @author James Brooks <james@alt-three.com>
 */
class TestMailCommandHandler
{
    /**
     * The mailer instance.
     *
     * @var \Illuminate\Contracts\Mail\Mailer
     */
    protected $mailer;

    /**
     * Create a test mail command handler.
     *
     * @param \Illuminate\Contracts\Mail\Mailer $mailer
     *
     * @return void
     */
    public function __construct(MailQueue $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the test mail command.
     *
     * @param \CachetHQ\Cachet\Bus\Commands\System\Mail\TestMailCommand $command
     *
     * @return void
     */
    public function handle(TestMailCommand $command)
    {
        $mail = [
            'email'   => $command->user->email,
            'subject' => trans('dashboard.settings.mail.email.subject'),
        ];

        $this->mailer->queue([
            'html' => 'emails.system.test-html',
            'text' => 'emails.system.test-text',
        ], $mail, function ($message) use ($mail) {
            $message->to($mail['email'])->subject($mail['subject']);
        });
    }
}
