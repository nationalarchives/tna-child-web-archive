<?php
function auto_id_h2($content)
{
    $content = preg_replace_callback('/\<h2[^>]*\>(.*)<\/h2>/i', function ($h2) {

        $full_regex_match = $h2[0];
        $h2_content_capturing_group = $h2[1];

        if (!strpos($full_regex_match, 'id=')) {

            $template_string = "<h2 id='%s'>%s</h2>";

            $return_h2 = sprintf(
                $template_string,
                sanitize_title($h2_content_capturing_group),
                $h2_content_capturing_group);
        }

        return $return_h2;

    }, $content);
    return $content;
}