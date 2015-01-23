<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" 
                xmlns:html="http://www.w3.org/TR/REC-html40"
                xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
    <xsl:template match="/">
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <title>Карта сайта XML</title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <style type="text/css">
                    body {
                        font-family: Trebuchet MS, Arial, sans-serif;
                        font-size:14px;
                        margin: 0px;
                        font-stretch: narrower;
                    }
                    h1 {
                        color: rgb(92, 107, 182);
                        margin: 20px;
                    }		
                    h1 a {
                        color: rgb(91, 202, 88);
                    }
                    h1 a:hover {
                        color: rgb(99, 154, 205);
                    }
                    #intro {
                        background-image: linear-gradient(45deg, rgb(90, 72, 166), rgba(60,133,194, 0.8), rgba(49,192,38, 0.8));
                        padding:15px 20px;
                        margin:10px 0;
                        font-size: 20px;
                        color: #ffffff;
                    }
                    table {
                        width: 100%;
                        margin: 10px 20px;
                    }		
                    td {
                        font-size:12px;
                        font-stretch: normal;
                    }	
                    th {
                        text-align:left;
                        padding-right:30px;
                        font-size:14px;
                    }
                </style>
            </head>
            <body>
                <h1>Сайт <a href="http://site.dev">site.dev</a></h1>
                <div id="intro">
                    Карта сайта XML
                </div>
                <div id="content">
                    <table cellpadding="5">
                        <tr style="border-bottom:1px black solid;">
                            <th>URL</th>
                            <th>Priority</th>
                            <th>Change Frequency</th>
                            <th>Last Change</th>
                        </tr>
                        <xsl:variable name="lower" select="'abcdefghijklmnopqrstuvwxyz'"/>
                        <xsl:variable name="upper" select="'ABCDEFGHIJKLMNOPQRSTUVWXYZ'"/>
                        <xsl:for-each select="sitemap:urlset/sitemap:url">
                            <tr>
                                <xsl:if test="position() mod 2 != 1">
                                    <xsl:attribute  name="class">high</xsl:attribute>
                                </xsl:if>
							
                                <td>
                                    <xsl:variable name="itemURL1">
                                        <xsl:value-of select="sitemap:loc"/>
                                    </xsl:variable>
                                    <a href="{$itemURL1}">
                                        <xsl:value-of select="sitemap:loc"/>
                                    </a>
                                </td>
                                <td>
                                    <xsl:value-of select="concat(sitemap:priority*100,'%')"/>
                                </td>
                                <td>
                                    <xsl:value-of select="concat(translate(substring(sitemap:changefreq, 1, 1),concat($lower, $upper),concat($upper, $lower)),substring(sitemap:changefreq, 2))"/>
                                </td>
                                <td>
                                    <xsl:value-of select="concat(substring(sitemap:lastmod,0,11),concat(' ', substring(sitemap:lastmod,12,5)))"/>
                                </td>
                            </tr>
                        </xsl:for-each>
                    </table>
                </div>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>