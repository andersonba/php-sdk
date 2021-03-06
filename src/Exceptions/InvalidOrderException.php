<?php namespace Konduto\Exceptions;

class InvalidOrderException extends KondutoException {

    public function __construct($fields) {
        $field_array = is_array($fields) ? array_keys($fields) : array($fields);
        $message = "'" . implode("', '", $field_array) . "' " . (count($field_array) == 1 ? "field is" : "fields are") . " absent or not correctly provided";
        parent::__construct($message);
    }
}
