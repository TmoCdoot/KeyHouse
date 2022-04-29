<?php
// src/Components/AlertComponent.php
namespace App\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('footer')]
class FooterComponent {
    public string $message;
}

?>