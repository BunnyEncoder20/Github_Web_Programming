<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match = "/friendslist">
    <html>
        <body>
            <h2>Friend List</h2>
                <table border="1">
                    <tr bgcolor="limegreen">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Nick-Name</th>
                    </tr>
                        
                    <xsl:for-each select="friend">
                        <xsl:sort select="firstname"/>
                        <tr>
                        <td><xsl:value-of select="firstname"/></td>
                        <td><xsl:value-of select="lastname"/></td>
                        <td><xsl:value-of select="nickname"/></td>
                    </tr>
                </xsl:for-each>
                </table>
        </body>
    </html>
</xsl:template>

</xsl:stylesheet>