<?php

// use Parsedown;
if (!function_exists('format_message_content')) {
    function format_message_content($content) {
        // If the content is an array, get the text value
        $formattedContent = is_array($content) ? $content[0]['text']['value'] : $content;

        // Convert Markdown to HTML using Parsedown
        $parsedown = new Parsedown();
        $htmlContent = $parsedown->text($formattedContent);

        // Wrap code blocks with a container that includes a copy button
        $htmlContent = preg_replace_callback(
            '/<pre><code class="language-([^"]+)">(.*?)<\/code><\/pre>/s',
            function ($matches) {
                return '<div class="code-block"><button class="copy-btn" data-clipboard-text="' . htmlspecialchars($matches[2]) . '">Copy</button><pre><code class="language-' . $matches[1] . '">' . $matches[2] . '</code></pre></div>';
            },
            $htmlContent
        );

        return $htmlContent;
    }
}
