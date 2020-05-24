<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<!-- <xsl:output doctype-public="-//W3C//DTD XHTML 1.1//EN" doctype-system="http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd" encoding="ISO-8859-2" method="html"/> -->

<xsl:template match="/invoice">
<html>
  <head>
    <title>XSLT</title>
    <link rel="Stylesheet" href="invoice.css" type="text/css"/>
  </head>
  <body>
    <div class="header">
    <div><xsl:value-of select="place"/></div>
    <div><xsl:value-of select="sellingDate"/></div>
    <div><xsl:value-of select="issuingDate"/></div>
    </div>
    <div class="nr1"><xsl:value-of select="invoiceNumber/nr1"/></div>
    <div class="nr2"><xsl:value-of select="invoiceNumber/nr2"/></div>
    <div class="nr3"><xsl:value-of select="invoiceNumber/nr3"/></div>
    <div class="buyer">
    <div><xsl:value-of select="buyer/name"/></div>
    <div><xsl:value-of select="buyer/address"/></div>
    </div>
    <div class="NIP"><xsl:value-of select="buyer/NIP"/></div>
    <table class="table">
      <xsl:for-each select="service">
        <tr class="row">
          <td class="col1"><xsl:value-of select="name"/></td>
          <td class="col2"><xsl:value-of select="PKWiU"/></td>
          <td class="col3"><xsl:value-of select="unitOfMeasure"/></td>
          <td class="col4"><xsl:value-of select="quantity"/></td>
          <td class="col5"><xsl:value-of select="unitPrice"/></td>
          <td class="col6"><xsl:value-of select="grossValue"/></td>
          <td class="col7"><xsl:value-of select="VATRate"/></td>
          <td class="col8"><xsl:value-of select="VAT"/></td>
          <td class="col9"><xsl:value-of select="netValue"/></td>
        </tr>
      </xsl:for-each>
    </table>
    <div class="grossValue"><xsl:value-of select="wholeValue/grossValue"/></div>
    <div class="VAT"><xsl:value-of select="wholeValue/VAT"/></div>
    <div class="netValue"><xsl:value-of select="wholeValue/netValue"/></div>
    <div class="grossValueR">0</div>
    <div class="VATR">0</div>
    <div class="netValueR">0</div>
    <div class="grossValue23"><xsl:value-of select="wholeValue/grossValue"/></div>
    <div class="VAT23"><xsl:value-of select="wholeValue/VAT"/></div>
    <div class="netValue23"><xsl:value-of select="wholeValue/netValue"/></div>
    <div class="grossValue7">0</div>
    <div class="VAT7">0</div>
    <div class="netValue7">0</div>
    <div class="grossValue0">0</div>
    <div class="VAT0">0</div>
    <div class="netValue0">0</div>
    <div class="toPay"><xsl:value-of select="toPay"/></div>
    <div class="inText"><xsl:value-of select="inText"/></div>
    <div class="paymentMethod"><xsl:value-of select="paymentMethod"/></div>
    <div class="paymentDeadline"><xsl:value-of select="paymentDeadline"/></div>
    <div class="wasPayed"><xsl:value-of select="wasPayed"/></div>
    <div class="invoiceIssuer"><xsl:value-of select="invoiceIssuer"/></div>
    <div class="invoiceRecipient"><xsl:value-of select="invoiceRecipient"/></div>
  </body>
</html>
</xsl:template>
</xsl:stylesheet>
