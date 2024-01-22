<?php

namespace Models;

class PlatformModel
{
    public function getPlatformParams($platform)
    {
        // Arrays of parameters for Microsoft and Linux
        $paramsMicrosoft = [
            "example_parameter_mic_1" => "value1",
            "example_parameter_mic_2" => "value2",
            "example_parameter_mic_3" => "value3"
        ];

        $paramsLinux = [
            "example_parameter_linux_1" => "value1",
            "example_parameter_linux_2" => "value2",
            "example_parameter_linux_3" => "value3"
        ];

        // Get a random parameter from each array
        $randomParamMicrosoft = $this->getRandomArrayElement($paramsMicrosoft);
        $randomParamLinux = $this->getRandomArrayElement($paramsLinux);

        // Return the random parameter based on the platform
        return ($platform == "Microsoft") ? $randomParamMicrosoft : $randomParamLinux;
    }

    private function getRandomArrayElement($array)
    {
        $randomKey = array_rand($array, 1);
        return [$randomKey => $array[$randomKey]];
    }
}
?>