<?php
if (isset($_GET['query']))
{
    echo '<p>Search results for query: ',
    htmlspecialchars($_GET['query'], ENT_QUOTES), '.</p>';
}
?>