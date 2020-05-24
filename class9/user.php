<?php

class User implements JsonSerializable {
    public $id;
    public $name;
    public $surname;
    public function jsonSerialize()
    {
        return [
            "id" => (int) $this->id,
            "name" => $this->name,
            "surname" => $this->surname
        ];
    }
}