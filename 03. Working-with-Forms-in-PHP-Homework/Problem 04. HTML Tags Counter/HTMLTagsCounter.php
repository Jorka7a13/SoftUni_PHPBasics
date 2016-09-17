<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>HTML Tags Counter</title>
    <style>
        p {
            font-weight: bold;
            font-size: 1.5rem;
        }
        p:first-of-type {
            margin-bottom: 0;
        }
        p:last-of-type {
            margin-top: 0;
        }
    </style>
</head>
<body>
<form action="HTMLTagsCounter.php" method="post">
    <label for="input">Enter HTML Tags:</label><br/>
    <input type="text" id="input" name="input"/>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>

<?php
session_start();

$tags = array("a", "abbr", "address", "area", "article", "aside", "audio", "b", "base", "bdi", "bdo", "blockquote", "body", "br", "button", "canvas", "caption",
    "cite", "code", "col", "colgroup", "command", "datalist", "dd", "del", "details", "dfn", "div", "dl", "dt", "em", "embed", "fieldset", "figcaption", "figure",
    "footer", "form", "h1", "h2", "h3", "h4", "h5", "h6", "head", "header", "hgroup", "hr", "html", "i", "iframe", "img", "input", "ins", "kbd", "keygen", "label",
    "legend", "li", "link", "map", "mark", "menu", "meta", "meter", "nav", "noscript", "object", "ol", "optgroup", "option", "output", "p", "param", "pre", "progress",
    "q", "rp", "rt", "ruby", "s", "samp", "script", "section", "select", "small", "source", "span", "strong", "style", "sub", "summary", "sup", "table", "tbody", "td",
    "textarea", "tfoot", "th", "thead", "time", "title", "tr", "track", "u", "ul", "var", "video", "wbr");

if (isset($_POST['submit']) && isset($_POST['input'])) {
    if (in_array($_POST['input'], $tags)) {
        echo '<p>Valid HTML tag!</p>';

        if(isset($_SESSION['score'])) {
            $_SESSION['score']++;
        } else {
            $_SESSION['score'] = 1;
        }
    } else {
        echo '<p>Invalid HTML tag!</p>';
    }

    echo '<p>Score: ' . $_SESSION['score'] . '</p>';
}