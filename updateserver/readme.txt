HOW TO UPDATE plg_contactformenhancer_update.xml 

1. Create plugin ZIP file and upload it as a new release to http://joomlacode.org/gf/project/contactform_enh/frs/ under plg_contactformenhancer package.
2. In Releases list, right-click on the ZIP file and copy the link.
3. The link will be most likely URL encoded, you need to decode it first. For example at http://meyerweb.com/eric/tools/dencoder/
4. Put decoded URL in <downloadurl> element of plg_contactformenhancer_update.xml.
5. Update <version> element in plg_contactformenhancer_update.xml.