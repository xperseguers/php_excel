<?php

/*
  +---------------------------------------------------------------------------+
  | ExcelConditionalFormatting                                                           |
  |                                                                           |
  | Reference file for NuSphere PHPEd (and possibly other IDE's) for use with |
  | php_excel interface to libxl by Ilia Alshanetsky <ilia@ilia.ws>           |
  |                                                                           |
  | php_excel "PECL" style module (http://github.com/iliaal/php_excel)        |
  | libxl library (http://www.libxl.com)                                      |
  |                                                                           |
  +---------------------------------------------------------------------------+
*/

class ExcelConditionalFormatting
{
    /**
     * Create a ConditionalFormatting within an Excel sheet
     *
     * @param ExcelSheet $sheet
     * @return ExcelConditionalFormatting
     * @see ExcelSheet::addConditionalFormatting()
     */
    public function __construct(ExcelSheet $sheet)
    {
    } // __construct

    /**
     * Add a range to these conditional formatting rules.
     *
     * @param int $row_first
     * @param int $row_last
     * @param int $col_first
     * @param int $col_last
     * @return void
     */
    public function addRange($row_first, $row_last, $col_first, $col_last)
    {
    } // addRange

    /**
     * Add a conditional formatting rule that highlights cells whose
     * values correspond to the specified criteria
     *
     * @param int $type
     * @param ExcelConditionalFormat $format
     * @param string $value
     * @param int $stopIfTrue
     * @return void
     */
    public function addRule($type, $format, $value, $stopIfTrue)
    {
    } // addRule


} // end ExcelConditionalFormatting
