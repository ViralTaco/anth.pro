<?php
  $ihatephp = new SimpleXMLElement(<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
  <loc>https://anth.pro/</loc>
  <lastmod></lastmod>
</url>
</urlset>
XML);
  $ihatephp->url->lastmod = date(DATE_ATOM);
  echo $ihatephp->asXML();
?>