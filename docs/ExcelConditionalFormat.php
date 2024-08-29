<?php

/*
  +---------------------------------------------------------------------------+
  | ExcelConditionalFormat                                                           |
  |                                                                           |
  | Reference file for NuSphere PHPEd (and possibly other IDE's) for use with |
  | php_excel interface to libxl by Ilia Alshanetsky <ilia@ilia.ws>           |
  |                                                                           |
  | php_excel "PECL" style module (http://github.com/iliaal/php_excel)        |
  | libxl library (http://www.libxl.com)                                      |
  |                                                                           |
  +---------------------------------------------------------------------------+
*/

class ExcelConditionalFormat
{
    /**
     * Create a ConditionalFormatting within an Excel sheet
     *
     * @param ExcelBook $book
     * @return ExcelConditionalFormat
     * @see \ExcelBook::addConditionalFormat())
     */
    public function __construct(ExcelBook $book)
    {
    } // __construct

} // end ExcelConditionalFormat
