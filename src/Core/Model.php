<?php

namespace MVC\Core;

class Model
{
    public function getProperties($object)
    {
        # Tra ve gia tri mang lien hop, k return value = null
        $properties = get_object_vars($object);
        return $properties;
    }
}
?>