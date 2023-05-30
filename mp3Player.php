<?php
interface Player{
    function play();
    function swithUp();
    function swithDawn();
}

class mp3Player implements Player
{
    private $music = [];
    private $current = 0;

    function addMusic($sound)
    {
        $this->music[] = $sound;
    }

    function play()
    {
        if (!empty($this->music)) {
            echo $this->music[$this->current];
        } else {
            echo 'плейлист пустой';
        }
    }
    function swithUp()
    {
        if ($this->current + 1 > count($this->music)) {
            $this->current = 0;
        } else {
            $this->current++;
        }
    }

    function swithDawn()
    {
        if ($this->current - 1 < 0) {
            $this->current = count($this->music) - 1;
        } else {
            $this->current--;
        }
    }

}