<?xml version="1.0" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/rss">
<html>
  <head>
    <title>Jans Heimseite - <xsl:value-of select="channel/title"/></title>
    <link rel="stylesheet"
	  type="text/css"
	  href="http://jan.geeksonly.de/style.css"/>
    <link rel="shortcut icon"
	  href="http://jan.geeksonly.de/favicon.ico"/>
  </head>

  <body>

   <div style="text-align: center">
      <h1><a href="http://jan.geeksonly.de">http://jan.geeksonly.de</a></h1>
      <h2><xsl:value-of select="title"/></h2>
      <p ><xsl:value-of select="description"/></p>
    </div>
  
    <xsl:apply-templates/>

  </body>

</html>
</xsl:template>

<xsl:template match="/rss/channel">
  
  <xsl:for-each select="item">
    <p class="entry">
      <a href="http://jan.geeksonly.de/rss/news.xml">[ <xsl:value-of select="title"/> ]</a><br/>
      <xsl:value-of select="description"/>
    </p>
  </xsl:for-each>
</xsl:template>
</xsl:stylesheet>
