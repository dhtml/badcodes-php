<?php
$_GET['query']="<script>alert('xss')</script>";

echo("<p>Search results for query: " .
    $_GET['query'] . ".</p>");
?>