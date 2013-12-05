<?php

namespace Panda86\MasterBundle\DataFixtures;

use Symfony\Component\Yaml\Yaml;

class YamlLoader
{
    public static function load($path)
    {
        return Yaml::parse(__DIR__.'/../../../../data/'.$path);
    }
}
