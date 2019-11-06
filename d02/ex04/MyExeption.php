<?php

use Exception;

class MyException {
    public function throwTagException($tagName) {
        throw new Exception("Tag: <$tagName> doesn't support");
    }
}
