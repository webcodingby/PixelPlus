<?php

class SantaGame
{
    private array $participants;

    public function __construct(array $participants)
    {
        $this->participants = $participants;
    }

    public function playSecretSanta()
    {
        shuffle($this->participants);
        $pairs = array_chunk($this->participants, 2);
        foreach ($pairs as $pair) {
            if (count($pair) === 2) {
                $this->notifyParticipant($pair[0], "Вы выбраны Тайным Сантой для " . $pair[1]);
            }
        }
    }

    private function notifyParticipant($participant, $message)
    {
        $to = $participant; // Электронный адрес участника
        $subject = 'Тайный Санта'; // Тема письма
        $headers = 'From: your_email@example.com'; // Адрес отправителя
        // Логика отправки сообщения по электронной почте
        mail($to, $subject, $message, $headers);
    }

}
