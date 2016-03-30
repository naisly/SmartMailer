<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send {user} {--queue}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send single email to the user';

    /**
     * The drip e-mail service.
     *
     * @var \Swift_Mailer
     */
    protected $swift_mail;

    /**
     * Create a new command instance.
     *
     * @param  \Swift_Mailer  $swift_mail
     * @return void
     */
    public function __construct(\Swift_Mailer $swift_mail)
    {
        parent::__construct();

        $this->swift_mail = $swift_mail;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->swift_mail->send(User::find($this->argument('user')));
    }
}
