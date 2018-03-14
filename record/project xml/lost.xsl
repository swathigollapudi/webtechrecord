<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html> 
<body>
  <h2>My lost item collection</h2>
  <table border="1">
    <tr bgcolor="#9acd32">
      <th>itemname</th>
      <th>type</th>
      <th>Description</th>
      <th>Questions</th>
      <th>Contactinfo</th>
    </tr>
    <xsl:for-each select="lostitem/item">
    <tr>
      <td><xsl:value-of select="itemname"/></td>
      <td><xsl:value-of select="type"/></td>
      <td><xsl:value-of select="Description"/></td>
      <td><xsl:value-of select="Questions"/></td>
      <td><xsl:value-of select="Contactinfo"/></td>
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>

