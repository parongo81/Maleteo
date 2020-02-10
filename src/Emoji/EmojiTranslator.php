<?php
namespace App\Emoji;

  class EmojiTranslator{


    public function convert(string $texto)
    {
      return strtoupper($texto);
    }
  }