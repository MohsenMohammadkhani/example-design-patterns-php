<?php
namespace src\solid\srp;

class ConfirmationMailFactory
{
    private $templating;
    private $translator;

    /**
     * @param $templating
     * @param $translator
     * @param $mailer
     */
    public function __construct(ITemplateEngine $templating, ITranslator $translator)
    {
        $this->templating = $templating;
        $this->translator = $translator;
    }

    public function createMessageFor(User $user): Message
    {
        $subject = $this->translator->translate("asd");
        $body = $this->templating->render("confirm.code", [
            "1" => $user->getConfirmCode(),
        ]);
        return new Message($subject, $body, $user->getEmailAddress());
    }

}
