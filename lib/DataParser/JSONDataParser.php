<?php

/*
 * Copyright © 2010 - 2012 Modo Labs Inc. All rights reserved.
 *
 * The license governing the contents of this file is located in the LICENSE
 * file located at the root directory of this distribution. If the LICENSE file
 * is missing, please contact sales@modolabs.com.
 *
 */

class JSONDataParser extends DataParser
{
    protected $assoc=true;
    public function parseData($data)
    {
        return json_decode($data, $this->assoc);
    }
}

