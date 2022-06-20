<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
  <!-- sideListBlock, stripped  -->
        <table width="534" border="0" cellpadding="0" cellspacing="0" class="vb-row full-width" bgcolor="#ffffff" 
          style="border-collapse: collapse; width: 100%; max-width: 534px; background-color: #ffffff;">
          <tr>
            <td align="center" class="mobile-row" valign="top" style="font-size: 0;">

<!--[if (gte mso 9)|(lte ie 8)]><table align="center" border="0" cellspacing="0" cellpadding="0" width="534"><tr><![endif]-->

<!--[if (gte mso 9)|(lte ie 8)]><td align="left" valign="top" width="90"><![endif]--> 
<div class="mobile-full" style="display: inline-block; max-width: 90px; vertical-align: top; width: 100%;"> 

                  <table class="vb-content" border="0" cellspacing="9" cellpadding="0" width="90" align="left" style="border-collapse: separate;">
                    <tbody><tr>
                      <td width="100%" valign="top" align="left" class="links-color">
                        
		      <img border="0" hspace="0" vspace="0" width="45" class="mobile-full" alt="" style="border: 0px; display: block; vertical-align: top; width: 100%; height: auto; max-width: 45px;" src="<?php print $fields['mosaico_image']->content; ?>" />
                        
                      </td>
                    </tr>
                  </tbody></table>

</div><!--[if (gte mso 9)|(lte ie 8)]></td>
<![endif]--><!--[if (gte mso 9)|(lte ie 8)]>
<td align="left" valign="top" width="426">
<![endif]--><div class="mobile-full" style="display: inline-block; max-width: 426px; vertical-align: top; width: 100%;"> 

                  <table class="vb-content" border="0" cellspacing="0" cellpadding="0" width="426" align="left" style="border-collapse: separate; width: 100%;">
                    <tbody><tr>
                      <td style="font-size: 16px; font-family: Arial, Helvetica, sans-serif; color: #000000; text-align: left;">
                        <span style="color: #000;">
<?php print $fields['mosaico_title']->content; ?>
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" class="long-text links-color" style="text-align: left; font-size: 18px; font-family: Arial, Helvetica, sans-serif; color: #3f3f3f;">
<a style="text-decoration: none; color: #3f3f3f; font-weight: normal;" target="_new" href="<?php print $fields['mosaico_link']->content; ?>"><?php print $fields['mosaico_longtext']->content; ?></a>
                      </td>
                    </tr>
                    <tr>
                      <td valign="top">
                        <table cellpadding="0" border="0" align="left" cellspacing="0" class="mobile-full" style="padding-top: 4px;">
                          <tbody><tr>
                            <td width="auto" valign="middle" bgcolor="#6f52f6" align="center" height="26" style="font-size: 13px; font-family: Arial, Helvetica, sans-serif; text-align: center; color: #ffffff; font-weight: normal; padding-left: 18px; padding-right: 18px; background-color: #6f52f6; border-radius: 4px;">
<a style="text-decoration: none; color: #ffffff; font-weight: normal;" target="_new" href="<?php print $fields['mosaico_link']->content; ?>"><?php print $fields['mosaico_linktext']->content; ?></a>
                            </td>
                          </tr>
                        </tbody></table>
                      </td>
                    </tr>
                  </tbody></table>
</div><!--[if (gte mso 9)|(lte ie 8)]></td>
<![endif]-->
<!--[if (gte mso 9)|(lte ie 8)]></tr></table><![endif]-->

      </td>
    </tr>
  </table>
  <!-- /sideListBlock -->
