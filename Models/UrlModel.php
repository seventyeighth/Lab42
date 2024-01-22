<?php

namespace Models;

class UrlModel
{
    public static function addOrUpdateUrlParam($url, $paramKey, $paramValue)
    {
        // Separate the URL into components
        $urlParts = explode('?', $url, 2);

        // Extract scheme, host, and path
        $schemeHostPath = $urlParts[0];

        // Extract the existing query string, if any
        $queryString = isset($urlParts[1]) ? $urlParts[1] : '';

        // Parse the existing query string into an associative array
        parse_str(urldecode($queryString), $query);

        // Add or update the parameter only if the key and value are different
        if (!isset($query[$paramKey]) || $query[$paramKey] == $paramValue) {
            $query[$paramKey] = $paramValue;
        }

        // Build the new query string manually
        $newQueryString = http_build_query($query, '', '&');

        // Reassemble the URL
        $url = $schemeHostPath;
        if ($newQueryString) {
            $url .= '?' . $newQueryString;
        }

        return $url;
    }

}
?>